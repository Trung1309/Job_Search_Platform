@extends('Admin.layout-admin')
@section('content-admin')
    <div class="main-content">
        @include('Admin.sidebar')
        <!-- header-starts -->
        @include('Admin.header')
        <!-- //header-ends -->
        <!-- main content start-->
        <div id="page-wrapper">
            <div class="search-form">
                <form action="" method="get">
                    <div class="form-group" style="display: flex; width: 30%;">
                        <input type="text" class="form-control" placeholder="Nhập từ khoá" class="">
                        <button type="submit" class="btn btn-orange"> Tìm kiếm</button>
                    </div>
                </form>
            </div>
            <div class="main-page">
                <div class="charts-grids">
                    <h1 class="text-center" style="margin-bottom: 20px">{{$title}}</h1>
                    <table class="table table-bordered">
                        <thead class="thead-dark" >
                            <tr style="text-align: center">
                                <th scope="col" class="text-center">STT</th>
                                <th scope="col" class="text-center">Họ và tên</th>
                                <th scope="col" class="text-center">Công việc</th>
                                <th scope="col" class="text-center">Kỹ năng</th>
                                <th scope="col" class="text-center">Tuỳ chọn</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($member as $key => $item )
                                <tr style="text-align: center">
                                    <td>{{$key++}}</td>
                                    <td>{{$item->users->ho_ten}}</td>
                                    <td>{{$item->jobs->ten_cong_viec}}</td>
                                    <td>{{$item->users->ky_nang}}</td>
                                    <td>
                                        <div class="option-btn d-flex" style="display: flex; justify-content: center; align-items: center">
                                            <a href="{{route('getDetailMemberSuitable',$item->id_nguoi_dung)}}" class="btn btn-primary" style="margin-right: 10px"><i class="fa-solid fa-eye"></i></a>
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
