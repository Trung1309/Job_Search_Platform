@extends('layout')
@section('content')
    @include('header')
    <main>
        <section id="contact" class="bg-orange">
            <div class="container">
                <div class="row">
                    <div class="col col-md-6 d-flex flex-column justify-content-center align-items-center">
                        <img src="{{ asset('images/company.png') }}" alt="" width="90%">
                        <h2>Cách dễ nhất để tiết kiệm chi phí và mở rộng kinh doanh của bạn!</h2>
                        <ul>
                            <li>1.Sau khi đăng ký tài khoản,bạn chỉ cần tạo hồ sơ cá nhân và tải lên CV của mình để ứng
                                tuyển.</li>
                            <li>2.Sau khi hoàn thành hồ sơ,lựa chọn việc làm phù hợp với mình,bạn hãy ứng tuyển để kiếm tiền
                                từ hệ thống.</li>
                            <li>3. Sau khi quá trình phỏng vấn thành công hai bên sẽ ký kết hợp đồng và số tiền sẽ được
                                thanh toán theo hợp đồng.</li>
                        </ul>
                    </div>
                    <div class="col col-md-6 d-flex justify-content-center align-items-center">
                        <div class="form-login bg-white p-3 w-100 ">
                            <h2 class="text-center">Bạn là một doanh nghiệp lớn nhỏ </h2>
                            <p class="text-center">Muốn tìm kiếm nguồn nhân sự cho doanh nghiệp của mình</p>
                            <form action="{{route('registerCompany')}}" method="POST">
                                @csrf
                                <input type="hidden" name="user_type" value="company">
                                <div class="form-group">
                                    <label for="inputName">Tên doanh nghiệp</label>
                                    <input value="{{old('ten_doanh_nghiep')}}" type="text" name="ten_doanh_nghiep" id="inputName" class="form-control w-100"
                                        placeholder="Tên công ty" aria-describedby="helpId">
                                    @error('ten_doanh_nghiep')
                                        <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="inputContactName">Tên liên lạc</label>
                                    <input value="{{old('ho_ten')}}" type="text" name="ho_ten" id="inputContactName" class="form-control w-100"
                                        placeholder="Tên Liên Lạc" aria-describedby="helpId">
                                    @error('ho_ten')
                                        <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="inputPhone">Số điện thoại</label>
                                    <input value="{{old('sdt')}}" type="text" name="sdt" id="inputPhone" class="form-control w-100"
                                        placeholder="Số điện thoại" aria-describedby="helpId">
                                    @error('sdt')
                                        <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail">Email</label>
                                    <input value="{{old('email')}}" type="email" name="email" id="inputEmail" class="form-control w-100"
                                        placeholder="Email" aria-describedby="helpId">
                                    @error('email')
                                        <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="inputPass">Mật khẩu</label>
                                    <input value="{{old('password')}}" type="password" name="password" id="inputPass" class="form-control w-100"
                                        placeholder="Mật khẩu" aria-describedby="helpId">
                                    @error('password')
                                        <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="inputCode">Mã số thuế</label>
                                    <input {{old('ma_so_thue')}} type="text" name="ma_so_thue" id="inputCode" class="form-control w-100"
                                        placeholder="Mã số thuế" aria-describedby="helpId">
                                    @error('ma_so_thue')
                                        <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <strong>Google recaptcha :</strong>
                                    {!! NoCaptcha::renderJs() !!}
                                    {!! NoCaptcha::display() !!}
                                </div>

                                <p>By clicking Sign Up, you agree to our <a href=""><strong>Terms of Use</strong></a>
                                    and <a href=""><strong>Privacy Policy</strong></a>.</p>

                                <button type="submit" class="btn btn-orange w-100">Đăng kí ngay</button>
                            </form>
                            <a href="{{ route('indexLogin') }}" class="btn d-block m-auto">Login <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('footer')
@endsection
