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
                                            <form action="{{ route('sanpham.update', $san_pham->id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                {{ csrf_field() }}
                                                @method('put')
                                                <div class="card">
                                                    <div class="card-title text-center mt-3">
                                                        <h3>Sửa sản phẩm</h3>
                                                    </div>
                                                    <div class="card-body">
                                                        <form action="">
                                                            <div class="form-group">
                                                                <label for="name">Tên sản phẩm:</label>
                                                                <input type="text" class="form-control" value="{{ $san_pham->ten_san_pham }}" id="ten_san_pham" name="ten_san_pham"
                                                                    placeholder="Nhập sản phẩm">
                                                                <div class="invalid-feedback">Product Name Can't Be Empty</div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="soluong">Số lượng:</label>
                                                                <input type="number" class="form-control" value="{{ $san_pham->so_luong }}" id="so_luong" name="so_luong"
                                                                    placeholder="Nhập số lượng">
                                                                <div class="invalid-feedback">Product ID Can't Be Empty</div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="gia">Giá sản phẩm:</label>
                                                                <input type="number" class="form-control" value="{{ $san_pham->gia }}" id="gia" name="gia"
                                                                    placeholder="Enter Product Price">
                                                                <div class="invalid-feedback">Product Price Can't Be Empty</div>
                    
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="gia">Mô tả sản phẩm:</label>
                                                                <textarea class="form-control" name="" id="" cols="30" rows="10" id="mo_ta" name="mo_ta">
                                                                    {{ $san_pham->mo_ta }}
                                                                </textarea>
                                                                <div class="invalid-feedback">Product Price Can't Be Empty</div>
                    
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="gia">Loại sản phẩm:</label>
                                                                <select class="form-control" name="danh_mucs_id" id="danh_mucs_id">
                                                                    @if (!empty($danh_mucs))
                                                                        @foreach ($danh_mucs as $danh_muc)
                                                                            <option value="{{ $danh_muc->id }}" @if($san_pham->danh_mucs_id == $danh_muc->id) selected @endif>
                                                                                {{ $danh_muc->ten_danh_muc }}
                                                                            </option>
                                                                        @endforeach
                                                                    @endif
                                                                </select>                                            
                                                                <div class="invalid-feedback">Product Price Can't Be Empty</div>
                    
                                                            </div>
                                                            <p>Ảnh sản phẩm:</p>
                                                            <div class="custom-file">
                    
                                                                <input type="file" class="custom-file-input" id="anh_san_pham" name="anh_san_pham" required>
                                                                <label class="custom-file-label" for="anh">Chọn ảnh cho sản phẩm của bạn...</label>
                                                                <div class="invalid-feedback">File Format Not Supported</div>
                                                            </div>
                                                            <button class="btn btn-dark mt-5 mx-auto d-block" type="submit">Cập nhật sản phẩm</button>
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