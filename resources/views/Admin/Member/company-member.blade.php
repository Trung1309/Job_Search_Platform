@extends('Admin.layout-admin')
@section('content-admin')
    <div class="main-content">
        @include('Admin.sidebar')
        <!-- header-starts -->
        @include('Admin.header')
        <!-- //header-ends -->
        <!-- main content start-->
        <div id="page-wrapper">
            <div class="main-page">
                <div class="charts-grids">
                    <h1 class="text-center" style="margin-bottom: 20px">{{$title}}</h1>
                    @if (Session::has('success'))
                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                    @endif
                    <table class="table table-bordered">
                        <thead class="thead-dark" >
                            <tr style="text-align: center">
                                <th scope="col" class="text-center">STT</th>
                                <th scope="col" class="text-center">Họ tên</th>
                                <th scope="col" class="text-center">Email</th>
                                <th scope="col" class="text-center">Số điện thoại</th>
                                <th scope="col" class="text-center">Tài khoản</th>
                                <th scope="col" class="text-center">Công ty</th>
                                <th scope="col" class="text-center">Tuỳ chọn</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $key => $item )
                                <tr style="text-align: center">
                                    <td>{{$key + 1}}</td>
                                    <td>{{$item->ho_ten}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->sdt}}</td>
                                    <td>{{$item->roles->ten_quyen}}</td>
                                    <td>{{$item->bussinesses->ten_doanh_nghiep}}</td>
                                    <td>
                                        <div class="option-btn d-flex" style="display: flex; justify-content: center; align-items: center">
                                            <form action="{{route('deleteMember',$item->id_nguoi_dung)}}" method="POST" style="margin-right: 10px">
                                                @csrf
                                                <button onclick="return confirm('Bạn có chắc chắn muốn xoá ứng viên {{$item->ho_ten}} ?')"
                                                    type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>
                                            <a href="" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--footer-->
        @include('Admin.footer')
        <!--//footer-->
    </div>
@endsection
