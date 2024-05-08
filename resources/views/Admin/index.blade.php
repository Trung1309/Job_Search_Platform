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
                            <i class="pull-left fa fa-dollar icon-rounded"></i>
                            <div class="stats">
                                <h5><strong>$452</strong></h5>
                                <span>Total Revenue</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 widget m-1">
                        <div class="r3_counter_box">
                            <i class="pull-left fa fa-laptop user1 icon-rounded"></i>
                            <div class="stats">
                                <h5><strong>$1019</strong></h5>
                                <span>Online Revenue</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 widget m-1">
                        <div class="r3_counter_box">
                            <i class="pull-left fa fa-money user2 icon-rounded"></i>
                            <div class="stats">
                                <h5><strong>$1012</strong></h5>
                                <span>Expenses</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 widget m-1">
                        <div class="r3_counter_box">
                            <i class="pull-left fa fa-users dollar2 icon-rounded"></i>
                            <div class="stats">
                                <h5><strong>1450</strong></h5>
                                <span>Total Users</span>
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
