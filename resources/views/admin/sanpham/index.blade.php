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
                class="display table table-striped table-hover">
                {{-- thêm sản phẩm --}}
                <a href=" {{ route('sanpham.create') }} ">
                  <button class="btn btn-primary">
                    <span class="btn-label">
                      <i class="fa fa-plus"></i>
                    </span>
                    Thêm Sản Phẩm
                  </button>

                </a>
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
                            <td>{{ $san_pham->danh_mucs_id }}</td>
                            <td>
                              {{-- sửa sản phẩm  --}}
                              <a href="{{ route('sanpham.edit', $san_pham->id) }}">
                                <button class="btn btn-warning">
                                  <span class="btn-label">
                                    <i class="fa fa-info"></i>
                                  </span>
                                  Sửa
                                </button>
                              </a>
                              {{-- xóa sản phẩm --}}
                              <a href="">
                                <button class="btn btn-danger">
                                  <span class="btn-label">
                                    <i class="fa fa-exclamation-circle"></i>
                                  </span>
                                  Xóa
                                </button>
                              </a>
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