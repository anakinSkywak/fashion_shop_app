@extends('layout.admin')

@section('main')
@if(session('success'))
    <div id="success-message" class="alert alert-success">
        {{ session('success') }}
    </div>

    <script>
        // Tự động ẩn thông báo sau 3 giây (3000ms)
        setTimeout(function() {
            var messageElement = document.getElementById('success-message');
            if (messageElement) {
                messageElement.style.opacity = '0';
                setTimeout(function() {
                    messageElement.style.display = 'none';
                }, 600); // 600ms để đảm bảo hiệu ứng fade out
            }
        }, 3000); // 3 giây
    </script>

    <style>
        .alert {
            transition: opacity 0.6s ease;
        }
    </style>
@endif
@if(session('success'))
    <div id="success-message" class="alert alert-success">
        {{ session('success') }}
    </div>

    <script>
        // Tự động ẩn thông báo sau 3 giây (3000ms)
        setTimeout(function() {
            var messageElement = document.getElementById('success-message');
            if (messageElement) {
                messageElement.style.opacity = '0';
                setTimeout(function() {
                    messageElement.style.display = 'none';
                }, 600); // 600ms để đảm bảo hiệu ứng fade out
            }
        }, 3000); // 3 giây
    </script>

    <style>
        .alert {
            transition: opacity 0.6s ease;
        }
    </style>
@endif


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
                    <th>Tên sản phẩm</th>
                    <th>Ảnh sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                    <th>Loại</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Tên sản phẩm</th>
                    <th>Ảnh sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                    <th>Loại</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>
                    @if (!empty($san_phams))
                        @foreach ($san_phams as $san_pham)
                        <tr>
                            <td>{{ $san_pham->ten_san_pham }}</td>
                            <td>
                              <img width="100" src="{{ Storage::url($san_pham->anh_san_pham) }}" alt="">
                            </td>
                            <td>{{ $san_pham->so_luong }}</td>
                            <td>{{ $san_pham->gia }}</td>
                            <td>{{ $san_pham->ten_danh_muc }}</td>
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
            {{ $san_phams->links('pagination::bootstrap-5') }}
            </div>
          </div>
        </div>
      </div>
 </div>

@endsection
