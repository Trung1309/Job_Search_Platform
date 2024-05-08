@extends('layout')
@section('content')
    @include('header')
    <main>
        <section id="contact" class="bg-orange">
            <div class="container">
                <div class="row">
                    <div class="col col-md-6 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('images/login-banner.png') }}" alt="" width="90%">
                    </div>
                    <div class="col col-md-6 d-flex justify-content-center align-items-center">
                        <div class="form-login bg-white p-3 w-100 ">
                            <h2 class="text-center">Đăng nhập tại đây</h2>
                            <p class="text-center">Nền tảng tìm kiếm việc làm tại TP Đà Nẵng</p>
                            @if (Session::has('success'))
                                <div class= "alert alert-success">{{ Session::get('success') }}</div>
                            @endif
                            <form action="">
                                <div class="form-group">
                                    <label for="inputEmail">Email</label>
                                    <input type="text" name="email" id="inputEmail" class="form-control w-100"
                                        placeholder="Email của bạn" aria-describedby="helpId">
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail">Mật khẩu</label>
                                    <input type="password" name="email" id="inputPass" class="form-control w-100"
                                        placeholder="Mật khẩu của bạn" aria-describedby="helpId">
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <input type="checkbox" id="rememberPass">
                                        <label for="rememberPass">Nhớ mật khẩu</label>
                                    </div>
                                    <a href="#">Quên mật khẩu ?</a>
                                </div>
                                <button type="submit" class="btn btn-orange w-100">Đăng nhập</button>
                            </form>
                            <div class="d-flex m-1">
                                <p>Bạn chưa có tài khoản ? <a href="{{ route('dang-ki') }}"> Đăng kí ngay</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('footer')
@endsection
