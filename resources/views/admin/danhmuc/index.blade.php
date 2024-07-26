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
                    <th>Tên danh muc</th>
                
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Tên danh muc </th>
                    
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>
                  
                    @if (!empty($danh_mucs))
                        @foreach ($danh_mucs as $danhmuc)
                        <tr>
                            <td>{{ $danhmuc->ten_danh_muc }}</td>
                            
                            <td>
                              {{-- sửa sản phẩm  --}}
                              <a href="{{ route('danhmuc.edit', $danhmuc->id) }}">
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
            {{ $danh_mucs->links('pagination::bootstrap-5') }}
            </div>
          </div>
        </div>
      </div>
 </div>
 
@endsection
