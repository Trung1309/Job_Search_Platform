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
                        <form action="{{route('addNewsPost')}}" method="POST" class="form-horizontal style-form" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group p-15">
                                <label for="tieu_de ">Tiêu đề</label>
                                <input placeholder="example: Thị trường IT đang biến động" type="text" name="tieu_de" class="form-control" placeholder=""
                                    aria-describedby="helpId">
                                @error('tieu_de')
                                    <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group p-15">
                                <label for="noi_dung">Nội dung</label>
                                <textarea class="form-control" name="noi_dung" id="moTa" rows="3"></textarea>
                                @error('tieu_de')
                                    <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group p-15" >
                                <div>
                                    <label for="hinh_dai_dien">Hình đại diện </label>
                                    <input type="file" class="form-control-file" name="hinh_dai_dien" id="avtNews"
                                        placeholder="Tải ảnh lên">
                                    @error('hinh_dai_dien')
                                        <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                    @enderror
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
