@extends('layout')
@section('content')
@include('header')
    <main>
        <div class="bg-orange">
            <div class="container d-flex justify-content-center align-items-center flex-column">
                <h1 style="margin: 20px 0px;font-size: 100px">404</h1>
                <i class="fa-solid fa-circle-exclamation" style="font-size: 80px; color: red"></i>
                <p class="" style="margin: 20px 0px; font-size: 30px; text-align: center">Trang bạn muốn truy cập không tồn tại</p>
            </div>
        </div>
    </main>
    @include('footer');
@endsection
