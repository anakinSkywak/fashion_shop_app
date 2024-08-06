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
                                            @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            @endif
                                            @if(session('success'))
                                            {{session('success')}}
                                            @endif
                                            @if(session('error'))
                                            {{session('error')}}
                                            @endif
                                            <form action="{{ route('sanpham.store') }}" method="POST" enctype="multipart/form-data">
                                                <div class="card">
                                                    <div class="card-title text-center mt-3">
                                                        <h3>Thêm sản phẩm</h3>
                                                    </div>
                                                    <div class="card-body">
                                                    @csrf

                                                            <div class="form-group">
                                                                <label for="name">Tên sản phẩm:</label>
                                                                <input type="text" class="form-control" id="ten_san_pham" name="ten_san_pham" placeholder="Nhập sản phẩm">
                                                                @error('ten_san_pham')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="soluong">Số lượng:</label>
                                                                <input type="number" class="form-control" id="so_luong" name="so_luong" placeholder="Nhập số lượng">
                                                                @error('so_luong')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="gia">Giá sản phẩm:</label>
                                                                <input type="number" class="form-control" id="gia" name="gia" placeholder="Giá sản phẩm">
                                                                @error('gia')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="gia">Mô tả sản phẩm:</label>
                                                                <textarea class="form-control" name="" id="" cols="30" rows="10" id="mo_ta" name="mo_ta">

                                                                </textarea>
                                                                @error('mo_ta')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="gia">Loại sản phẩm:</label>
                                                                <select class="form-control" name="danh_mucs_id" id="danh_mucs_id">
                                                                    @if (!empty($danh_mucs))
                                                                    @foreach ($danh_mucs as $danh_muc)
                                                                    <option value="{{ $danh_muc->id }}">
                                                                        {{ $danh_muc->ten_danh_muc }}
                                                                    </option>
                                                                    @endforeach
                                                                    @endif
                                                                </select>
                                                                @error('danh_mucs_id')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <p>Ảnh sản phẩm:</p>
                                                            <div class="custom-file">

                                                                <input type="file" class="custom-file-input" id="anh_san_pham" name="anh_san_pham" required>
                                                                <label class="custom-file-label" for="anh">Chọn ảnh cho sản phẩm của bạn...</label>

                                                            </div>
                                                            <button class="btn btn-dark mt-5 mx-auto d-block" type="submit">Thêm mới sản phẩm</button>
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
