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
                        <form action="{{route('addJobPost')}}" method="POST" class="form-horizontal style-form" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group p-15">
                                <label for="ten_cong_viec ">Tiêu đề bài đăng</label>
                                <input value="{{old('ten_cong_viec')}}" type="text" name="ten_cong_viec" id="ten_cong_viec" class="form-control" placeholder="example: Tuyển dụng nhân viên BA"
                                    aria-describedby="helpId">
                                @error('ten_cong_viec')
                                    <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col col-md-6 m-2">
                                    <div class="form-group pd-ri">
                                        <label for="id_the_loai">Thể loại công việc</label>
                                        <select class="form-control" name="id_the_loai" id="theLoaiCongViec">
                                            <option value="" selected disabled>Vui lòng chọn</option>
                                            @foreach ($category as $key => $item)
                                                <option value="{{ $item->id_the_loai }}">{{ $item->ten_the_loai }}</option>
                                            @endforeach
                                        </select>
                                        @error('id_the_loai')
                                            <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group pd-ri">
                                        <label for="id_trinh_do">Trình độ</label>
                                        <select class="form-control" name="id_trinh_do" id="trinhDo">
                                            <option value="" selected disabled>Vui lòng chọn</option>
                                            @foreach ($level as $key => $item)
                                                <option value="{{ $item->id_trinh_do }}">{{ $item->ten_trinh_do }}</option>
                                            @endforeach
                                        </select>
                                        @error('id_trinh_do')
                                            <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group pd-ri">
                                        <label for="id_vi_tri">Vị trí công việc</label>
                                        <select class="form-control" name="id_vi_tri" >
                                            <option value="" selected disabled>Vui lòng chọn</option>
                                            @foreach ($position as $key => $item)
                                                <option value="{{ $item->id_vi_tri }}">{{ $item->ten_vi_tri }}</option>
                                            @endforeach
                                        </select>
                                        @error('id_vi_tri')
                                            <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col col-md-6 mr-2">
                                    <div class="form-group pd-ri ">
                                        <label for="muc_luong">Mức lương</label>
                                        <select class="form-control" name="muc_luong" id="mucLuong">
                                            <option value="" selected disabled>Vui lòng chọn</option>
                                            <option>5tr - 10tr</option>
                                            <option>10tr - 20tr</option>
                                            <option>20tr trở lên</option>
                                        </select>
                                        @error('muc_luong')
                                            <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="ngay_het_han">Ngày hết hạn </label>
                                        <input type="date" class="form-control" name="ngay_het_han" id="ngayHetHan">
                                        @error('ngay_het_han')
                                            <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group p-15">
                                <label for="ky_nang">Kỹ Năng</label>
                                <input value="" type="text" name="ky_nang"  class="form-control" placeholder="example: PHP / Laravel / Java..."
                                    aria-describedby="helpId">
                                @error('ky_nang')
                                    <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group p-15">
                                <label for="mo_ta">Mô tả</label>
                                <textarea class="form-control" name="mo_ta" id="moTa" rows="3">{{old('mo_ta')}}</textarea>
                                @error('mo_ta')
                                    <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group p-15">
                                <button type="submit" class="btn btn-primary text-center">Đăng bài tuyển dụng</button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
        @include('Chat.chat-ai')
        <!--footer-->
        @include('Admin.footer')
        <!--//footer-->
    </div>
@endsection
