@extends('admin.layouts.master')

@section('title')
thêm mới user
@endsection

@section('main_content')
<div class="row">
    <div class="col-md-12" style="margin: 0 auto;">
        <div class="x_panel">
            <div class="x_title">
                <h2> @if(isset($addUser))Cập nhật @else Thêm @endif User </h2><br>
                @if(isset($addUser))
                <form action="{{route('user.xu-ly-cap-nhat',['id'=>$addUser->id])}}" method="POST" enctype="multipart/form-data">
                    @else
                    <form action="{{route('user.xu-ly-them-moi')}}" method="POST" enctype="multipart/form-data">
            </div>
            @endif 
            @csrf
            <div class="x_content">
                <form class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
                   
                    <div class="row">
                        <div class="form-group row col-md-6 col-sm-6">
                            <label class="control-label col-md-2 col-sm-2 ">Tài khoản</label>
                            <div class="col-md-10 col-sm-10 ">
                                <input type="text" name="user_name" class="form-control" placeholder="Username....."
                                    @if(isset($addUser)) value="{{ $addUser->user_name }}" readonly="readonly" @endif>
                                    <br/>
                                        <div class="text-danger">{{$errors->first('user_name')}}</div>  
                                    <br/>
                            </div>
                        </div>
                        <div class="form-group row col-md-6 col-sm-6">
                            <label class="control-label col-md-2 col-sm-2 ">Mật khẩu</label>
                            <div class="col-md-10 col-sm-10 ">
                                <input type="password" name="password" class="form-control" placeholder="Password....."
                                    @if(isset($addUser)) value="{{ $addUser->password }}" @endif>
                                    
                                        <div class="text-danger">{{$errors->first('password')}}</div>  
                                    
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group row col-md-6 col-sm-6 ">
                            <label class="control-label col-md-2 col-sm-2 ">Nhập Lại mật khẩu</label>
                            <div class="col-md-10 col-sm-10 ">
                                <input type="password" name="repassword" class="form-control" placeholder="RePassword....."
                                @if(isset($addUser)) value="{{ $addUser->repassword }}" @endif>
                                    
                                    <div class="text-danger">{{$errors->first('repassword')}}</div>  
                                   
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group row col-md-6 col-sm-6">
                            <label class="control-label col-md-2 col-sm-2 ">Tên</label>
                            <div class="col-md-10 col-sm-10 ">
                                <input type="text" name="first_name" class="form-control" placeholder="First name....."
                                    @if(isset($addUser)) value="{{ $addUser->first_name }}" @endif>
                                    <br/>
                                        <div class="text-danger">{{$errors->first('first_name')}}</div>  
                                    <br/>
                            </div>
                        </div>
                        <div class="form-group row col-md-6 col-sm-6">
                            <label class="control-label col-md-2 col-sm-2 ">Họ</label>
                            <div class="col-md-10 col-sm-10 ">
                                <input type="text" name="last_name" class="form-control" placeholder="Last name....."
                                    @if(isset($addUser)) value="{{ $addUser->last_name }}" @endif>
                                    <br/>
                                        <div class="text-danger">{{$errors->first('last_name')}}</div>  
                                    <br/>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group row col-md-6 col-sm-6 ">
                            <label class="control-label col-md-2 col-sm-2 ">Ngày sinh</label>
                            <div class="col-md-10 col-sm-10 ">
                                <input type="text" name="birthday" class="form-control" @if(isset($addUser))
                                    value="{{ $addUser->birthday }}" @endif>
                                    <br/>
                                        <div class="text-danger">{{$errors->first('birthday')}}</div>  
                                    <br/>
                            </div>
                        </div>
                        <div class="form-group row col-md-6 col-sm-6 ">
                            <label class="control-label col-md-2 col-sm-2 ">Hình</label>
                            <input type="file" name="Hinh" id="Hinh" class="form-control row  col-sm-10"  @if(isset($addUser)) value="{{ $addUser->Hinh }}" @endif/>
                            <br/>
                                <div class="text-danger">{{$errors->first('Hinh')}}</div>  
                            <br/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group row col-md-6 col-sm-6 ">
                            <label class="control-label col-md-2 col-sm-2 ">Email</label>
                            <div class="col-md-10 col-sm-10 ">
                                <input type="email" name="email" class="form-control" placeholder="Email....."
                                    @if(isset($addUser)) value="{{ $addUser->email }}" @endif>
                                    <br/>
                                        <div class="text-danger">{{$errors->first('email')}}</div>  
                                    <br/>
                            </div>
                        </div>
                        <div class="form-group row col-md-6 col-sm-6 ">
                            <label class="control-label col-md-2 col-sm-2 ">Điện thoại</label>
                            <div class="col-md-10 col-sm-10 ">
                                <input type="phone" name="phone" class="form-control" placeholder="Phone....."
                                    @if(isset($addUser)) value="{{ $addUser->phone }}" @endif>
                                    <br/>
                                        <div class="text-danger">{{$errors->first('phone')}}</div>  
                                    <br/>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="form-group row col-md-6 col-sm-6 ">
                            <label class="control-label col-md-2 col-sm-2 ">Địa chỉ</label>
                            <div class="col-md-10 col-sm-10 ">
                                <input type="text" name="address" class="form-control" placeholder="Address....."
                                    @if(isset($addUser)) value="{{ $addUser->address }}" @endif>
                                    <br/>
                                        <div class="text-danger">{{$errors->first('address')}}</div>  
                                    <br/>
                            </div>
                        </div>

                        <div class="form-group row col-md-6 col-sm-6">
                            <label class="control-label col-md-2 col-sm-2 ">Giới tính</label>
                            <div class="col-md-10 col-sm-10 ">
                                <select class="select2_single form-control" name="gender" tabindex="-1"
                                    @if(isset($addUser)) value="{{ $addUser->gender }}" @endif>
                                    <option value="Male">Nam</option>
                                    <option value="Female">Nữ</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group row col-md-6 col-sm-6">
                            <label class="control-label col-md-2 col-sm-2 ">Quyền</label>
                            <div class="col-md-10 col-sm-10">
                                <select class="select2_single form-control" name="role" tabindex="-1"
                                    @if(isset($addUser)) value="{{ $addUser->role }}" @endif>
                                    <option value="1">Admin</option>
                                    <option value="0">Staff</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row col-md-6 col-sm-6">
                            <label class="control-label col-md-2 col-sm-2 ">Trạng thái</label>
                            <div class="col-md-10 col-sm-10 ">
                                <select class="select2_single form-control" name="status" tabindex="-1"
                                    @if(isset($addUser)) value="{{ $addUser->status }}" @endif>
                                    <option value="0">Action</option>
                                    <option value="1">UnAction</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-12 col-sm-12 text-center">
                            <button type="submit" class="btn btn_submit">
                                @if(isset($addUser))Update User @else Add User @endif
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection