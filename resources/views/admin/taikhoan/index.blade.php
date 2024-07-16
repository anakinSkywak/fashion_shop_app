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
              {{-- Thêm sản phẩm --}}
              <a href="{{ route('sanpham.create') }}" class="btn btn-primary mb-3">
                <span class="btn-label">
                  <i class="fa fa-plus"></i>
                </span>
                Thêm Sản Phẩm
              </a>

              <form action="" method="get">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-11 col-md-11">
                            <input type="text" class="form-control form-control-lg" name="keyword" placeholder="Tìm kiếm sản phẩm">
                        </div>
                        <div class="col-lg-1 col-md-1 ">
                            <button class="btn btn-primary btn-lg w-100"><i class="fa-solid fa-magnifying-glass"></i></button>                                                                    
                        </div>                                                                                 
                    </div>
                </div>

            </form>
              <table
                id="basic-datatables"
                class="display table table-striped table-hover">
                <thead>
                  <tr>
                    <th>Tên Tài Khoản</th>
                    <th>Email</th>
                    <th>Số điện Thoại</th>
                    <th>Role</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Tên Tài Khoản</th>
                    <th>Email</th>
                    <th>Số điện Thoại</th>
                    <th>Role</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>
                    @if (!empty($tai_khoans))
                        @foreach ($tai_khoans as $tai_khoan)
                        <tr>
                            <td>{{ $tai_khoan->Ten_tai_khoan  }}</td>
                            <td>{{ $san_pham->email  }}</td>  
                            <td>{{ $san_pham->so_dien_thoai}}</td>
                            <td>{{ $san_pham->role }}</td>
                            <td>
                              {{-- Sửa sản phẩm --}}
                              <a href="{{ route('sanpham.edit', $san_pham->id) }}">
                                <button class="btn btn-warning">
                                  <span class="btn-label">
                                    <i class="fa fa-info"></i>
                                  </span>
                                  Sửa
                                </button>
                              </a>
                              {{-- Xóa sản phẩm --}}
                              <form action="{{ route('sanpham.destroy', $san_pham->id) }}" method="post" style="display:inline-block">
                                @csrf
                                @method('delete')
                                  <button onclick="return confirm('Bạn có chắc muốn xóa sản phẩm?')" class="btn btn-danger">
                                    <span class="btn-label">
                                      <i class="fa fa-exclamation-circle"></i>
                                    </span>
                                    Xóa 
                                  </button>
                              </form>
                            </td>
                        </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
            {{ $tai_khoans->links('pagination::bootstrap-5') }}
            </div>
          </div>
        </div>
      </div>
 </div>
 
@endsection
