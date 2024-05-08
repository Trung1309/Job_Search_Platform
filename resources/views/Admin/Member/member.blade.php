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
                    <table class="table table-bordered">
                        <thead class="thead-dark" >
                            <tr style="text-align: center">
                                <th scope="col">STT</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                                <th scope="col">Tuỳ chọn</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="text-align: center">
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>
                                    <div class="option-btn">
                                        <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                        <a href="#" class="btn btn-primary"><i class="fa fa-pen-to-square"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr style="text-align: center">
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>
                                    <div class="option-btn">
                                        <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                        <a href="#" class="btn btn-primary"><i class="fa fa-pen-to-square"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr style="text-align: center">
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>
                                    <div class="option-btn">
                                        <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                        <a href="#" class="btn btn-primary"><i class="fa fa-pen-to-square"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr style="text-align: center">
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>
                                    <div class="option-btn">
                                        <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                        <a href="#" class="btn btn-primary"><i class="fa fa-pen-to-square"></i></a>
                                    </div>
                                </td>
                            </tr>

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
