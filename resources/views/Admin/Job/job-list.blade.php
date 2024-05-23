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

                    @if (Session::has('success'))
                        <div class= "alert alert-success">{{ Session::get('success') }}</div>
                    @endif
                    <h1 class="text-center" style="margin-bottom: 20px">{{$title}}</h1>
                    <form action="" method="get">
                        <div class="form-group" style="display: flex; width: 30%;">
                            <input type="text" class="form-control" placeholder="Nhập từ khoá" class="">
                            <button type="submit" class="btn btn-orange"> Tìm kiếm</button>
                        </div>
                    </form>
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr style="text-align: center">
                                <th scope="col" class="text-center">ID</th>
                                <th scope="col" class="text-center">Tên công việc</th>
                                <th scope="col" class="text-center">Ngày hết hạn</th>
                                @if (Auth::user()->id_quyen == 3)
                                    <th scope="col" class="text-center">Công ty tuyển dụng</th>
                                @endif
                                <th scope="col" class="text-center">Trạng thái</th>
                                <th scope="col" class="text-center">Tuỳ chọn</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bussiness as $key => $item )
                                <tr style="text-align: center">
                                    <td scope="row">{{$item->id_cong_viec}}</td>
                                    <td>{{$item->ten_cong_viec}}</td>
                                    <td>{{$item->ngay_het_han}}</td>
                                    @if (Auth::user()->id_quyen == 3)
                                        <td>{{$item->bussinesses->ten_doanh_nghiep}}</td>
                                    @endif
                                    <td>{{$item->trang_thai}}</td>

                                    <td>
                                        <div class="option-btn d-flex" style="display: flex; justify-content: center; align-items: center">
                                            <form action="{{route('deleteJob',$item->id_cong_viec)}}" method="POST" style="margin-right: 10px">
                                                @csrf
                                                <button onclick="return confirm('Bạn có chắc chắn muốn xóa bài {{$item->ten_cong_viec}} ?')"
                                                    type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>
                                            <a href="{{route('updateJob',$item->id_cong_viec)}}" class="btn btn-primary"><i class="fa fa-pen-to-square"></i></a>
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
