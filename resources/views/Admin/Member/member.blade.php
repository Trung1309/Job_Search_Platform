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
                    <form action="" method="get">
                        <div class="form-group" style="display: flex; width: 30%;">
                            <input type="text" class="form-control" placeholder="Nhập từ khoá" class="">
                            <button type="submit" class="btn btn-orange"> Tìm kiếm</button>
                        </div>
                    </form>
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
                                @if (Auth::user()->id_quyen == 2)
                                    <th scope="col" class="text-center">Kinh nghiệm</th>
                                    <th scope="col" class="text-center">Kỹ năng</th>
                                @endif
                                @if (Auth::user()->id_quyen == 3)
                                    <th scope="col" class="text-center">Tài khoản</th>
                                @endif
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
                                    @if (Auth::user()->id_quyen == 2)
                                        <td>{{ $item->id_kinh_nghiem ? $item->experiences->so_nam : 'Chưa cập nhật'}}</td>
                                        <td>{{$item->ky_nang ? $item->ky_nang : 'Chưa cập nhật c'}}</td>
                                    @endif
                                    @if (Auth::user()->id_quyen == 3)
                                        <td>{{$item->roles->ten_quyen}}</td>
                                    @endif
                                    <td>
                                        <div class="option-btn d-flex" style="display: flex; justify-content: center; align-items: center">
                                            <form action="{{route('deleteMember',$item->id_nguoi_dung)}}" method="POST" style="margin-right: 10px">
                                                @csrf
                                                <button onclick="return confirm('Bạn có chắc chắn muốn xoá ứng viên {{$item->ho_ten}} ?')"
                                                    type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>
                                            <a href="{{route('getDetailMemberSuitable',$item->id_nguoi_dung)}}" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
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
