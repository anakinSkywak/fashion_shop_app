@extends('layout.admin')

@section('main')
<div class="row">
    <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Basic</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table
                id="basic-datatables"
                class="display table table-striped table-hover"
              >
                <thead>
                  <tr>
                    <th>Tên sản phẩm</th>
                    <th>Ảnh sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                    <th>Loại</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Tên sản phẩm</th>
                    <th>Ảnh sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                    <th>Loại</th>>
                  </tr>
                </tfoot>
                <tbody>
                  
                    @if (!empty($san_phams))
                        @foreach ($san_phams as $san_pham)
                        <tr>
                            <td>{{ $san_pham->ten_san_pham }}</td>
                            <td>{{ $san_pham->anh_san_pham }}</td>
                            <td>{{ $san_pham->so_luong }}</td>  
                            <td>{{ $san_pham->gia }}</td>
                            <td>{{ $san_pham->ten_danh_muc }}</td>
                        </tr>
                        @endforeach
                    @endif
                    
                </tbody>
            </table>
            {{ $san_phams->links('pagination::bootstrap-5') }}
            </div>
          </div>
        </div>
      </div>
 </div>
 
@endsection