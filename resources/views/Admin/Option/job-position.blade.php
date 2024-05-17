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
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    <table class="table table-bordered">
                        <thead class="thead-dark" >
                            <tr>
                                <th scope="col" class="text-center" >ID</th>
                                <th scope="col" class="text-center">Vị trí công việc</th>
                                <th scope="col" class="text-center">Tuỳ chọn</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($position as $key => $item)
                                <tr class="text-center">
                                    <td>{{$item->id_vi_tri}}</td>
                                    <td>{{$item->ten_vi_tri}}</td>
                                    <td >
                                        <div class="option-btn d-flex" style="display: flex; justify-content: center; align-items: center">
                                            <form action="{{route('deletePosition',$item->id_vi_tri)}}" method="POST" style="margin-right: 10px">
                                                @csrf
                                                <button onclick="return confirm('Bạn có chắc chắn muốn xóa cuốn sách không?')"
                                                    type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>
                                            <a href="{{route('updatePosition', $item->id_vi_tri )}}" class="btn btn-primary"><i class="fa fa-pen-to-square"></i></a>
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
