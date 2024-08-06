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
              <table id="basic-datatables" class="display table table-striped table-hover">
                <thead>
                  <tr>
                    <th class="cpt_img">Mã Đơn Hàng</th>
                    <th class="cpt_pn">Ngày đặt</th>
                    <th class="cpt_q">Trạng thái</th>
                    <th class="cpt_p">Tổng tiền</th>
                    <th class="cpt_p">Trạng thái</th>
                    <th class="cpt_t">Hành động</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($donHangs as $donHang)
                  <tr>
                          <td>{{ $donHang->ma_don_hang }}</td>
                          <td>{{ $donHang->created_at->format('d-m-Y') }}</td>
                          <td>{{ $trangThai[$donHang->trang_thai_don_hang] }}</td>
                          <td>{{ number_format($donHang->tong_tien, 0, '', '.') }} VND</td>
                          <td>
                              <form action="{{ route('donhang.update',  $donHang->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <select name="trang_thai_don_hang" class="form-select" onchange="confirmSubmit(this)" data-default-value="{{ $donHang->trang_thai_don_hang }}">
                                  @foreach ($trangThai as $key => $item)
                                      <option value="{{ $key }}" {{ $key == $donHang->trang_thai_don_hang ? 'selected' : '' }}>{{ $item }}</option>
                                  @endforeach
                                </select>
                              </form>
                          </td>
                          <td>
                              <a class="btn border-btn" href="{{ route('donhangs.show', $donHang->id) }}">Chi tiết</a>
                          </td>
                      </tr>
                  @endforeach
                </tbody>
              </table>
              {{ $donHangs->links('pagination::bootstrap-5') }}
            </div>
          </div>
        </div>
      </div>
 </div>

 <script>
  function confirmSubmit(selectElement) {
    var form = selectElement.form;
    var selectedOption = selectElement.options[selectElement.selectedIndex].text;
    var defaultValue = selectElement.getAttribute('data-default-value');

    if (confirm('bạn muốn thay đổi trạng thái đơn hàng thành ' + selectedOption + ' không?')) {
      form.submit();
    } else {
      selectElement.value = defaultValue;
    }
  }
 </script>
@endsection
