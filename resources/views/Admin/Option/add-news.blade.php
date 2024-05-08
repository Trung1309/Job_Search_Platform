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
                        <form role="form" method="post" class="form-horizontal style-form" enctype="multipart/form-data">
                            <div class="form-group p-15">
                                <label for="tieuDe ">Tiêu đề</label>
                                <input type="text" name="tieuDe" id="tieuDe" class="form-control" placeholder=""
                                    aria-describedby="helpId">
                            </div>
                            <div class="form-group p-15">
                                <label for="moTa">Nội dung</label>
                                <textarea class="form-control" name="moTa" id="moTa" rows="3"></textarea>
                            </div>
                            <div class="form-group p-15" >
                                <div>
                                    <label for="hinhDaiDien">Hình đại diện </label>
                                    <input type="file" class="form-control-file" name="hinhDaiDien" id="hinhDaiDien"
                                        placeholder="Tải ảnh lên">
                                </div>
                                <div >
                                    <img id="imagePreview" class="avt-news">
                                </div>
                            </div>
                            <div class="form-group p-15">
                                <button type="submit" class="btn btn-primary text-center">Đăng tin tức</button>
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
