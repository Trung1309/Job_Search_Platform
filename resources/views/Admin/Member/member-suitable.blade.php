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

                            @if ($candidates->isEmpty())
                                <p>Không có ứng viên phù hợp với công việc</p>
                            @else
                                <p>Có {{$candidates->count()}} ứng viên phù hợp với vị trí mà bạn đang tuyển</p>
                                <thead class="thead-dark" >
                                    <tr style="text-align: center">
                                        <th scope="col" class="text-center">STT</th>
                                        <th scope="col" class="text-center">Họ tên</th>
                                        <th scope="col" class="text-center">Email</th>
                                        <th scope="col" class="text-center">Số điện thoại</th>
                                        <th scope="col" class="text-center">Kỹ Năng</th>
                                        <th scope="col" class="text-center">Tuỳ chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($candidates as $key => $item )
                                        <tr style="text-align: center">
                                            <td>{{$key++}}</td>
                                            <td>{{$item->ho_ten}}</td>
                                            <td>{{$item->email}}</td>
                                            <td>{{$item->sdt}}</td>
                                            <td>{{$item->ky_nang}}</td>
                                            <td>
                                                <div class="option-btn d-flex" style="display: flex; justify-content: center; align-items: center">
                                                    <a href="{{route('getDetailMemberSuitable',$item->id_nguoi_dung)}}" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            @endif
                    </table>
                </div>
            </div>
        </div>
        <!--footer-->
        @include('Admin.footer')
        <!--//footer-->
    </div>
@endsection
