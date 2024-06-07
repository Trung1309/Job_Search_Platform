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
                <div class="row">
                    <div class="col-md-6 widget ">
                        <div class="r3_counter_box">
                            <i class="pull-left fa fa-laptop icon-rounded"></i>
                            <div class="stats">
                                <h5><strong>{{$jobCount}}</strong></h5>
                                <span>Số lượng công việc</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 widget m-1">
                        <div class="r3_counter_box">
                            <i class="pull-left fa fa-users user1 icon-rounded"></i>
                            <div class="stats">
                                <h5><strong>{{$userCount}}</strong></h5>
                                <span>Số lượng ứng viên<nav></nav></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 widget m-1">
                        <div class="r3_counter_box">
                            <i class="pull-left fa fa-building user2 icon-rounded"></i>
                            <div class="stats">
                                <h5><strong>{{$bussinessCount}}</strong></h5>
                                <span>Số lượng doanh nghiệp</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 widget m-1">
                        <div class="r3_counter_box">
                            <i class="pull-left fa fa-pager dollar2 icon-rounded"></i>
                            <div class="stats">
                                <h5><strong>{{$newCount}}</strong></h5>
                                <span>Số lượng tin tức</span>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>

                @include('Admin.slide-dash')
            </div>
        </div>
        <!--footer-->
        @include('Admin.footer')
        <!--//footer-->
    </div>
@endsection
