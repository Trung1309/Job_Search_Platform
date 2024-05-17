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
                    <h1 class="text-center" style="text-align: center">{{ $title }}</h1>
                    <div class="form-group">
                        <form action="{{route('addCategoryPost')}}" role="form" method="post" class="form-horizontal style-form" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group p-15">
                                <label for="ten_the_loai ">Thể loại công việc</label>
                                <input type="text" name="ten_the_loai" id="ten_the_loai" class="form-control" placeholder=""
                                    aria-describedby="helpId">
                            </div>
                            <div class="form-group p-15">
                                <button type="submit" class="btn btn-primary text-center">Xác nhận</button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
        <!--footer-->
        @include('Admin.footer')
        <!--//footer-->
    </div>
@endsection
