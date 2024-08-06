@extends('layout.admin')

@section('main')
<div class="row">
    <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Danh mục sản phẩm</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
                <div class="container">
                    <section>
                        <div class="container-fluid">
                            
                                <div class="col-lg-10 col-md-8 ml-auto">
                                    <div class="row align-items-center pt-md-5 mt-md-5 mb-5">
                                        <div class="col-12">
                                            <form action="{{ route('danhmuc.store') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                {{ csrf_field() }}
                                                <div class="card">
                                                    <div class="card-title text-center mt-3">
                                                        <h3>Thêm danh mục</h3>
                                                    </div>
                                                    <div class="card-body">
                                                        <form action="">
                                                            <div class="form-group">
                                                                <label for="name">Tên danh mục sản phẩm:</label>
                                                                <input type="text" class="form-control" id="ten_danh_muc" name="ten_danh_muc"
                                                                    placeholder="Nhập danh mục sản phẩm">
                                                                <div class="invalid-feedback">Product Name Can't Be Empty</div>
                                                            </div>
                                                           
                                                            <button class="btn btn-dark mt-5 mx-auto d-block" type="submit">Thêm mới danh mục</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                    </section>

                </div>
                
            </div>
          </div>
        </div>
      </div>
 </div>
 
@endsection