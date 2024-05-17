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
                    @if (Session::has('success'))
                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                    @endif
                    <div class="form-group">
                        <form action="" method="POST" class="form-horizontal style-form" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group p-15">
                                <label for="ten_cong_viec ">Tiêu đề bài đăng</label>
                                <input value="{{$job->ten_cong_viec}}" type="text" name="ten_cong_viec" id="job-name" class="form-control" placeholder=""
                                    aria-describedby="helpId">
                                @error('ten_cong_viec')
                                    <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col col-md-6 m-2">
                                    <div class="form-group pd-ri">
                                        <label for="id_the_loai">Thể loại công việc</label>
                                        <select class="form-control" name="id_the_loai" id="category-name">
                                            <option value="{{$job->id_the_loai}}">{{$job->categories->ten_the_loai}}</option>
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
                                        <select class="form-control" name="id_trinh_do" id="level-name">
                                            <option value="{{$job->id_trinh_do}}">{{$job->levels->ten_trinh_do}}</option>
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
                                            <option value="{{$job->id_vi_tri}}">{{$job->positions->ten_vi_tri}}</option>
                                            @foreach ($position as $key => $item)
                                                <option value="{{ $item->id_vi_tri }}">{{ $item->ten_vi_tri }}</option>
                                            @endforeach
                                        </select>
                                        @error('id_vi_tri')
                                            <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group pd-ri">
                                        <label for="thanhPho">Thành Phố</label>
                                        <div class="">
                                            <select name="province" id="province" class="form-control">
                                                <option value="" selected>{{$job->wards->districts->provinces->ten_tinh_thanh}}</option>
                                                @foreach ($provinces as $province)
                                                    <option value="{{ $province->id_tinh_thanh }}">
                                                        {{ $province->ten_tinh_thanh }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-md-6 mr-2">
                                    <div class="form-group ">
                                        <label for="muc_luong">Mức lương</label>
                                        <select class="form-control" name="muc_luong">
                                            <option value="{{$job->muc_luong}}">{{$job->muc_luong}}</option>
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
                                        <input value="{{$job->ngay_het_han}}" type="date" class="form-control" name="ngay_het_han" >
                                        @error('ngay_het_han')
                                            <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                        @enderror

                                    </div>

                                    <div class="form-group ">
                                        <label for="quanHuyen">Quận huyện</label>
                                        <div class="">
                                            <select name="district" id="district" class="form-control">
                                                <option value="">{{$job->wards->districts->ten_quan_huyen}}</option>
                                                <option value="">Chọn quận/huyện</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="phuongXa">Phường Xã</label>
                                        <div class="">
                                            <select name="id_phuong_xa" id="ward" class="form-control">
                                                <option value="{{$job->id_phuong_xa}}">{{$job->wards->ten_phuong_xa}}</option>
                                            </select>
                                            @error('id_phuong_xa')
                                                <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group p-15">
                                <label for="ky_nang">Kỹ Năng</label>
                                <input value="{{$job->ky_nang}}" type="text" name="ky_nang"  class="form-control" placeholder="example: PHP / Laravel / Java..."
                                    aria-describedby="helpId">
                                @error('ky_nang')
                                    <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <script>
                                new MultiSelectTag('skills') // id
                            </script>
                            <div class="form-group p-15">
                                <label for="mo_ta">Mô tả</label>
                                <textarea class="form-control" name="mo_ta" id="moTa"  rows="3">{{$job->mo_ta}}</textarea>
                                @error('mo_ta')
                                    <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group p-15">
                                <button type="submit" class="btn btn-primary text-center">Cập nhật bài đăng</button>
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
