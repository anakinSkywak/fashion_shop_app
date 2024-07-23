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
                                            <form action="{{ route('taikhoan.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                {{ csrf_field() }}
                                                @method('put')
                                                <div class="card">
                                                    <div class="card-title text-center mt-3">
                                                        <h3>Sửa tài khoản</h3>
                                                    </div>
                                                    <div class="card-body">
                                                        <form action="">
                                                            <div class="form-group">
                                                                <label for="name">Tên Người dùng:</label>
                                                                <input type="text" class="form-control" value="{{ $user->Ten_tai_khoan }}"  id="Ten_tai_khoan" name="Ten_tai_khoan"
                                                                    placeholder="Nhập tên người dùng">
                                                                <div class="invalid-feedback">Product Name Can't Be Empty</div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="email">Email:</label>
                                                                <input type="email" class="form-control" value="{{ $user->email }}" id="email" name="email"
                                                                    placeholder="Nhập email ">
                                                                <div class="invalid-feedback">Product ID Can't Be Empty</div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="password">Password:</label>
                                                                <input type="password" class="form-control" value="{{ $user->password }}" id="password" name="password"
                                                                    placeholder="nhập password">
                                                                <div class="invalid-feedback">Product Price Can't Be Empty</div>
                    
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="so_dien_thoai">Số điện thoại:</label>
                                                                <input type="" class="form-control" value="{{ $user->so_dien_thoai }}" id="so_dien_thoai" name="so_dien_thoai"
                                                                    placeholder="nhập Số điện thoại">
                                                                <div class="invalid-feedback">Product Price Can't Be Empty</div>
                    
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="role">Vai trò:</label>
                                                                <select class="form-control" id="role" name="role">
                                                                    <option @php $user->role == 'user' ? 'selected' : ''  @endphp value="user">user</option>
                                                                    <option @php $user->role == 'admin' ? 'selected' : ''  @endphp  value="admin">admin</option>
                                                                </select>
                                                                <div class="invalid-feedback">Product Price Can't Be Empty</div>
                    
                                                            </div>
                                                            
                                                            
                                                            <button class="btn btn-dark mt-5 mx-auto d-block" type="submit">Thêm mới người dùng</button>
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