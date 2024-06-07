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
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    <div class="form-group">
                        <form action="{{route('updateCompanyPost',$company->id_doanh_nghiep)}}" method="POST" class="form-horizontal style-form" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group p-15" >
                                <div class="row">
                                    <div class="col col-md-6">
                                        <div style="display: flex; flex-direction: column; justify-content: center; align-items: center">
                                            <label for="hinh_dai_dien">Logo Công ty</label>
                                            <input type="file" class="form-control-file" name="hinh_dai_dien" id="avtNews"
                                                placeholder="Tải ảnh lên">
                                            @error('hinh_dai_dien')
                                                <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                            @enderror
                                            <div >
                                                <img src="{{asset('uploads/company/'.$company->hinh_dai_dien)}}" id="imagePreview" class="avt-news">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col col-md-6 m-2">
                                    <div class="form-group pd-ri">
                                        <label for="ten_doanh_nghiep ">Tên doanh nghiệp</label>
                                        <input value="{{$company ? $company->ten_doanh_nghiep : ''}}" type="text" name="ten_doanh_nghiep" class="form-control" placeholder="Ví dụ: Công ty TNHH A "
                                            aria-describedby="helpId">
                                        @error('ten_doanh_nghiep')
                                            <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group pd-ri">
                                        <label for="">Email công ty</label>
                                        <input value="{{$company ? $company->email : ''}}" type="text" name="email" class="form-control" placeholder="Email công ty"
                                            aria-describedby="helpId">
                                        @error('email')
                                            <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group pd-ri">
                                        <label for="">Số điện thoại</label>
                                        <input value="{{$company ? $company->sdt : ''}}" type="text" name="sdt" class="form-control" placeholder="Số điện thoại"
                                            aria-describedby="helpId">
                                        @error('sdt')
                                            <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group pd-ri">
                                        <label for="">Mã số thuế</label>
                                        <input disabled value="{{$company ? $company->ma_so_thue : ''}}" type="text" name="ma_so_thue" class="form-control" placeholder="Mã số thuế"
                                            aria-describedby="helpId">
                                        @error('ma_so_thue')
                                            <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group pd-ri">
                                        <label for="">Quy mô</label>
                                        <div class="">
                                            <select name="quy_mo" class="form-control">
                                                <option value="{{$company->quy_mo}}" selected>{{$company ? $company->quy_mo :'Vui lòng chọn'}}</option>
                                                <option value="10-50">10-50</option>
                                                <option value="50-100">50-100</option>
                                                <option value="100-200">100-200</option>
                                                <option value=">200">>200</option>
                                            </select>
                                            @error('quy_mo')
                                                <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-md-6 mr-2">
                                    <div class="form-group">
                                        <label for="thanhPho">Thành Phố</label>
                                        <div class="">
                                            <select name="thanh_pho" id="province" class="form-control">
                                                <option selected disabled >{{$company->id_phuong_xa ? $company->wards->districts->provinces->ten_tinh_thanh : 'Vui lòng chọn'}}</option>
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
                                        <div class="">
                                            <select name="quan_huyen" id="district" class="form-control">
                                                <option selected disabled>{{$company->id_phuong_xa ? $company->wards->districts->ten_quan_huyen : 'Vui lòng chọn'}}</option>
                                                <option value="">Chọn quận/huyện</option>
                                            </select>
                                            @error('quan_huyen')
                                                <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="phuongXa">Phường Xã</label>
                                        <div class="">
                                            <select name="id_phuong_xa" id="ward" class="form-control">
                                                <option value="{{$company->id_phuong_xa}}" selected>{{$company->id_phuong_xa ? $company->wards->ten_phuong_xa :'Vui lòng chọn'}}</option>
                                                <option value="">Chọn phường/xã</option>
                                            </select>
                                            @error('id_phuong_xa')
                                                <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group pd-ri">
                                        <label for="">Số đường</label>
                                        <input value="{{$company ? $company->so_duong : ''}}" type="text" name="so_duong" class="form-control" placeholder="Số đường"
                                            aria-describedby="helpId">
                                        @error('so_duong')
                                            <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                </div>

                            </div>
                            <div class="form-group p-15">
                                <label for="gioi_thieu">Giới Thiệu</label>
                                <textarea class="form-control" name="gioi_thieu" id="moTa" rows="3">{{$company ? $company->gioi_thieu : ''}}</textarea>
                                @error('gioi_thieu')
                                    <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group p-15">
                                <button type="submit" class="btn btn-primary text-center">Cập nhật thông tin</button>
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
