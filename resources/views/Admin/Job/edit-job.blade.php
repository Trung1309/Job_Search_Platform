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
                        <form action="{{route('updateJobPost',$job->id_cong_viec)}}" method="POST" class="form-horizontal style-form" enctype="multipart/form-data">
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
                                    <div class="form-group pd-ri ">
                                        <label for="id_vi_tri">Kinh nghiệm</label>
                                        <select class="form-control" name="id_kinh_nghiem" >
                                            <option value="{{$job->id_kinh_nghiem}}">{{$job->experiences->so_nam}}</option>
                                            @foreach ($experience as $key => $item)
                                                <option value="{{ $item->id_kinh_nghiem }}">{{ $item->so_nam }}</option>
                                            @endforeach
                                        </select>
                                        @error('id_vi_tri')
                                            <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group  pd-ri ">
                                        <label for="muc_luong">Mức lương</label>
                                        <select class="form-control" name="muc_luong">
                                            <option value="{{$job->muc_luong}}">{{$job->muc_luong}}</option>
                                            <option>Không lương</option>
                                            <option>Theo năng lực</option>
                                            <option>1tr - 2tr</option>
                                            <option>2tr - 5tr</option>
                                            <option>5tr - 10tr</option>
                                            <option>10tr - 20tr</option>
                                            <option>20tr - 30tr</option>
                                            <option>30tr - 40tr</option>
                                            <option>40tr trở lên</option>
                                        </select>
                                        @error('muc_luong')
                                            <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group  pd-ri">
                                        <label for="ngay_het_han">Ngày hết hạn </label>
                                        <input value="{{$job->ngay_het_han}}" type="datetime-local" class="form-control" name="ngay_het_han" >
                                        @error('ngay_het_han')
                                            <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col col-md-6 mr-2">
                                    <div class="form-group">
                                        <label for="thanhPho">Thành Phố</label>
                                        <div class="">
                                            <select name="thanh_pho" id="province" class="form-control">
                                                <option value="{{$job->wards->districts->provinces->id_tinh_thanh}}" >{{$job->wards->districts->provinces->ten_tinh_thanh}}</option>
                                                @foreach ($provinces as $province)
                                                    <option value="{{ $province->id_tinh_thanh }}">
                                                        {{ $province->ten_tinh_thanh }}</option>
                                                @endforeach
                                            </select>
                                            @error('thanh_pho')
                                                <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="quanHuyen">Quận huyện</label>
                                        <select name="quan_huyen" id="district" class="form-control">
                                            <option value="{{$job->wards->districts->id_quan_huyen}}" >{{$job->wards->districts->ten_quan_huyen}}</option>
                                            <option value="">Chọn quận/huyện</option>
                                        </select>
                                        @error('quan_huyen')
                                            <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                        @enderror

                                    </div>
                                    <div class="form-group ">
                                        <label for="phuongXa">Phường Xã</label>
                                        <div class="">
                                            <select name="id_phuong_xa" id="ward" class="form-control">
                                                <option value="{{$job->wards->id_phuong_xa}}" >{{$job->wards->ten_phuong_xa}}</option>
                                                <option value="">Chọn phường/xã</option>
                                            </select>
                                            @error('id_phuong_xa')
                                                <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="so_duong ">Số đường</label>
                                        <input value="{{$job->so_duong ? $job->so_duong : ''}}" type="text" name="so_duong" id="so_duong" class="form-control" placeholder="Số đường"
                                            aria-describedby="helpId">
                                        @error('so_duong')
                                            <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group ">
                                        <label for="so_luong ">Số lượng</label>
                                        <input value="{{$job->so_luong}}" type="number" name="so_luong" id="so_luong" class="form-control" placeholder="Số lượng"
                                            aria-describedby="helpId">
                                        @error('so_luong')
                                            <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="ngon_ngu">Ngôn ngữ</label>
                                        <div class="">
                                            <select name="ngon_ngu" id="language" class="form-control">
                                                <option value="" selected >{{$job->certificates->languages->ten_ngon_ngu}}</option>
                                                @foreach ($languages as $language)
                                                    <option value="{{ $language->id_ngon_ngu }}">
                                                        {{ $language->ten_ngon_ngu }}</option>
                                                @endforeach
                                            </select>
                                            @error('ngon_ngu')
                                                <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="chungChi">Chứng chỉ liên quan</label>
                                        <div class="">
                                            <select name="id_chung_chi" id="certificates" class="form-control">
                                                <option value="{{$job->id_chung_chi}}" selected>{{$job->certificates->ten_chung_chi}}</option>
                                                <option value="">Chọn chứng chỉ</option>
                                            </select>
                                            @error('id_chung_chi')
                                                <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group p-15">
                                <label for="ky_nang">Kỹ Năng</label>
                                <select id="skills" class="form-control" name="ky_nang[]" multiple = "multiple">
                                    @php
                                        $selectedSkill = explode('/',$job->ky_nang);
                                    @endphp
                                    @foreach ($selectedSkill as $dataSkill)
                                        <option value="{{ $dataSkill }}" selected>{{ $dataSkill }}</option>
                                    @endforeach
                                    @foreach ($skill as $key => $item)
                                        @if (!in_array($item->ten_ky_nang, $selectedSkill))
                                            <option value="{{ $item->ten_ky_nang }}">{{ $item->ten_ky_nang }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('ky_nang')
                                    <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
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
