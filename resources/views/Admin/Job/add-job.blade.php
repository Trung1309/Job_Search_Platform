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
                                <label for="tieuDe ">Tiêu đề bài đăng</label>
                                <input type="text" name="tieuDe" id="tieuDe" class="form-control" placeholder=""
                                    aria-describedby="helpId">
                            </div>
                            <div class="row">
                                <div class="col col-md-6 m-2">
                                    <div class="form-group pd-ri">
                                        <label for="theLoaiCongViec">Thể loại công việc</label>
                                        <select class="form-control" name="theLoaiCongViec" id="theLoaiCongViec">
                                            <option>Remote</option>
                                            <option>Onsite</option>
                                            <option>Chưa xác định</option>
                                        </select>
                                    </div>
                                    <div class="form-group pd-ri">
                                        <label for="trinhDo">Trình độ</label>
                                        <select class="form-control" name="trinhDo" id="trinhDo">
                                            <option>Cao Đẳng</option>
                                            <option>Đại học</option>
                                        </select>
                                    </div>
                                    <div class="form-group pd-ri">
                                        <label for="viTriCongViec">Vị trí công việc</label>
                                        <select class="form-control" name="viTriCongViec" id="trinhDo">
                                            <option>Developer</option>
                                            <option>Bussiness Analyst</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col col-md-6 mr-2">
                                    <div class="form-group pd-ri">
                                        <label for="mucLuong">Mức lương</label>
                                        <select  class="form-control" name="mucLuong" id="mucLuong">
                                            <option value="" selected disabled>Vui lòng chọn</option>
                                            <option>5tr - 10tr</option>
                                            <option>10tr - 20tr</option>
                                            <option>20tr trở lên</option>
                                        </select>
                                    </div>
                                    <div class="form-group pd-ri">
                                        <label for="phuongXa">Phường/ Xã</label>
                                        <select  class="form-control" name="phuongXa" id="phuongXa">
                                            <option value="" selected disabled>Vui lòng chọn</option>
                                            <option>5tr - 10tr</option>
                                            <option>10tr - 20tr</option>
                                            <option>20tr trở lên</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                      <label for="ngayHetHan">Ngày hết hạn </label>
                                      <input type="date"
                                        class="form-control" name="ngayHetHan" id="ngayHetHan" >
                                    </div>

                                </div>
                            </div>
                            <div class="form-group p-15">
                                <label for="moTa">Mô tả</label>
                                <textarea class="form-control" name="moTa" id="moTa" rows="3"></textarea>
                            </div>
                            <div class="form-group p-15">
                                <button type="submit" class="btn btn-primary text-center">Đăng bài tuyển dụng</button>
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
