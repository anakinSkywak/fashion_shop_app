<?php

namespace App\Http\Controllers;

use App\Mail\OrderConfirm;
use App\Models\DonHang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $donHangs = Auth::user()->donHang;

        $trangThai = DonHang::TRANG_THAI_DON_HANG;

        $type_cho_xac_nhan = DonHang::CHO_XAC_NHAN;
        $type_dang_vang_chuyen = DonHang::DANG_VAN_CHUYEN;

        return view('user.donhangs.index', [
            'donHangs' => $donHangs,
            'trangThai' => $trangThai,
            'type_cho_xac_nhan' => $type_cho_xac_nhan,
            'type_dang_vang_chuyen' => $type_dang_vang_chuyen,
        ]); 
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $carts = session()->get('cart', []);

        

        if(!empty($carts)){

            $total = 0;
            $subTotal = 0;
            $shipping = 30000;

            foreach ($carts as $item) {
                # code...
                $subTotal += $item['gia'] * $item['so_luong'];
            }

           
            $total = $subTotal + $shipping;


            return view('user.donhangs.create',  [
                'carts' => $carts,
                'total' => $total,
                'subTotal' => $subTotal,
                'shipping' => $shipping,
            ]);
        }

        return redirect()->route('web.cartProduct');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());
        if ($request->isMethod('post')) {
            DB::beginTransaction();

            try {
                // Lấy tất cả các tham số trừ _token
                $params = $request->except('_token');
                
                // Tạo mã đơn hàng duy nhất
                $params['ma_don_hang'] = $this->generateUniqueOrderCode();

                // Thêm đơn hàng
                $donhang = DonHang::query()->create($params);
                $don_hang_id = $donhang->id;

                // Lấy giỏ hàng từ session
                $carts = session()->get('cart', []);

                foreach ($carts as $key => $item) {
                    $thanhTien =  $item['gia'] * $item['so_luong'];

                    $donhang->chiTietDonHang()->create([
                        'don_hang_id' => $don_hang_id,
                        'san_pham_id' => $key,
                        'don_gia' => $item['gia'],
                        'so_luong' => $item['so_luong'],
                        'thanh_tien' => $thanhTien,
                    ]);
                }

                DB::commit();
                // gửi mail khi đặt hàng thành công, sử dụng hàng đợi
                Mail::to($donhang->email_nguoi_nhan)->queue(new OrderConfirm($donhang));

                session()->forget('cart');

                return redirect()->route('donhangs.index')->with('success', 'Đơn hàng đã tạo thành công');
            } catch (\Exception $e) {
                DB::rollBack();
        
    
                // Optionally, log the exception for debugging
                $message = ('Error processing request: ' . $e->getMessage());
                return redirect()->route('web.cartProduct')->with('error', $message);
            }
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $donHang = DonHang::query()->findOrFail($id);

        $trangThai = DonHang::TRANG_THAI_DON_HANG;

        $trangThaiThanhToan = DonHang::TRANG_THAI_THANH_TOAN;

        return view('user.donhangs.show',[
            'donHang' => $donHang,
            'trangThai' => $trangThai ,
            'trangThaiThanhToan' => $trangThaiThanhToan,
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $donHang =  $donHang = DonHang::query()->findOrFail($id);
        DB::beginTransaction();

        try {
            //code...
            if ($request->has('huy_don_hang')) {

                $donHang->update(['trang_thai_don_hang' => DonHang::HUY_DON_HANG]);
            }elseif ($request->has('da_nhan_hang')) {
                # code...
                $donHang->update(['trang_thai_don_hang' => DonHang::DA_GIAO_HANG]);
            }

            DB::commit();

            
        } catch (\Exception $e) {
            //throw $th;
            DB::rollBack();
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    function generateUniqueOrderCode(){
        do {
            # code...
            $orderCode = 'ORD-' . Auth::id() . '-' . now()->timestamp;
        } while (DonHang::where('ma_don_hang', $orderCode)->exists());

        return $orderCode;
    }



}
