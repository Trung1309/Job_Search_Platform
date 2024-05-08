@extends('layout')
@section('content')
    @include('header')
    <main>
        <section id="contact" class="bg-orange">
            <div class="container">
                <div class="row">
                    <div class="col col-md-6 d-flex flex-column justify-content-center align-items-center">
                        <img src="{{asset('images/register.png')}}" alt="" width="90%">
                        <h2>Cách dễ nhất để tiết kiệm chi phí và mở rộng kinh doanh của bạn!</h2>
                        <ul>
                            <li>1.Sau khi đăng ký tài khoản,bạn chỉ cần tạo hồ sơ cá nhân và tải lên CV của mình để ứng tuyển.</li>
                            <li>2.Sau khi hoàn thành hồ sơ,lựa chọn việc làm phù hợp với mình,bạn hãy ứng tuyển để kiếm tiền từ hệ thống.</li>
                            <li>3. Sau khi quá trình phỏng vấn thành công hai bên sẽ ký kết hợp đồng và số tiền sẽ được thanh toán theo hợp đồng.</li>
                        </ul>
                    </div>
                    <div class="col col-md-6 d-flex justify-content-center align-items-center">
                        <div class="form-login bg-white p-3 w-100 "  >
                            <h2 class="text-center">Đăng kí làm ứng viên</h2>
                            <p class="text-center">Nền tảng tìm kiếm việc làm tại TP Đà Nẵng</p>
                            <form action="">
                                <div class="form-group">
                                    <label for="inputName">Họ và tên</label>
                                    <input  type="text" name="hoTen" id="inputName" class="form-control w-100" placeholder="Họ và tên"
                                        aria-describedby="helpId">
                                </div>
                                <div class="form-group">
                                    <label for="inputPhone">Số điện thoại</label>
                                    <input  type="text" name="soDienThoai" id="inputPhone" class="form-control w-100" placeholder="Số điện thoại"
                                        aria-describedby="helpId">
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail">Email</label>
                                    <input  type="email" name="email" id="inputEmail" class="form-control w-100" placeholder="Email"
                                        aria-describedby="helpId">
                                </div>
                                <div class="form-group">
                                    <label for="inputPass">Mật khẩu</label>
                                    <input  type="password" name="matKhau" id="inputPass" class="form-control w-100" placeholder="Mật khẩu"
                                        aria-describedby="helpId">
                                </div>
                                <div class="form-group">
                                    <label for="input">Kỹ Năng</label>
                                    <select  class="form-control w-100  " name="countries" id="countries" multiple>
                                        <option value="1">Afghanistan</option>
                                        <option value="2">Australia</option>
                                        <option value="3">Germany</option>
                                        <option value="4">Canada</option>
                                        <option value="5">Russia</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="input">Kinh nghiệm làm việc</label>
                                    <select class="form-control w-100 ">
                                        <option value="1">Dưới 1 năm</option>
                                        <option value="2">2-3 năm</option>
                                        <option value="3">3-4 năm</option>
                                        <option value="4">trên 5 năm</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-orange w-100">Đăng kí ngay</button>
                            </form>
                            <a href="{{route('dang-nhap')}}" class="btn d-block m-auto">Login <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('footer')
@endsection
