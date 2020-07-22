<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Đăng ký</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Begin Login Content Area -->
                <div class="page-section mb-60">
                    <div class="container">
                        <div class="row">

                            <div class="col-sm-12">
                                <form action="{{route('customer.xu-ly-them-moi')}}" method="POST"
                        enctype="multipart/form-data">
                                    <div class="login-form">

                                        <div class="row">
                                            <div class="col-md-12 col-12 mb-20">
                                                <label>Họ tên(*)</label>
                                                <input class="mb-0" type="text" name="cus_name"
                                                    placeholder="First Name">
                                            </div>
                                            <div class="col-md-6 col-12 mb-20">
                                                <label>Giới tính</label>
                                                <select name="res_gender" name="cus_gender" id="res_gender">
                                                    <option value="Nam">Nam</option>
                                                    <option value="Nữ">Nữ</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-20">
                                                <label>Số điện thoại</label>
                                                <input class="mb-0" type="phone" name="cus_phone"
                                                    placeholder="Email Address">
                                            </div>
                                            
                                            <div class="col-md-12 mb-20">
                                                <label>Email</label>
                                                <input class="mb-0" type="email" name="cus_email"
                                                    placeholder="Email Address">
                                            </div>
                                           
                                            <div class="col-md-12 mb-20">
                                                <label>Địa chỉ</label>
                                                <input class="mb-0" type="email" name="cus_address"
                                                    placeholder="Address">
                                            </div>
                                            <div class="col-md-6 mb-20">
                                                <label>Mật khẩu</label>
                                                <input class="mb-0" type="password" name="cus_pass"
                                                    placeholder="Password">
                                            </div>
                                            <div class="col-md-6 mb-20">
                                                <label>Nhập lại mật khẩu</label>
                                                <input class="mb-0" type="password" name="cus_repass"
                                                    placeholder="Confirm Password">
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="register-button mt-0">Đăng ký</button>

                                                <p class="text-right">
                                                    <a href="#loginModal" data-dismiss="modal" aria-label="Close"
                                                        id="goLogin" data-toggle="modal" data-target="#loginModal">Đã có tài khoản</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Login Content Area End Here -->
            </div>

        </div>
    </div>
</div>