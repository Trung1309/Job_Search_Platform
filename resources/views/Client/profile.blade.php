@extends('layout')
@section('content')
    @include('header')
    <main>
        <section id="profile" class="bg-orange">
            <div class="container">
                <div class="container">
                    @if (Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    <form action="{{route('updateProfileUserPost',Auth::user()->id_nguoi_dung)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row gutters">
                            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="account-settings">
                                            <div class="user-profile">
                                                <div class="user-avatar">
                                                    <img src="{{Auth::user()->hinh_dai_dien ? asset('uploads/users/'.Auth::user()->hinh_dai_dien) : asset('uploads/users/user-default.png')}}" id="imagePreview">
                                                    <div class="form-group d-flex flex-column">
                                                        <label for="file-upload" class="custom-file-upload">
                                                            <i class="fa-solid fa-upload"></i> Tải ảnh lên
                                                        </label>
                                                        <input name="hinh_dai_dien" id="hinhDaiDien" type="file">
                                                        @error('hinh_dai_dien')
                                                            <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <h5 class="user-name">{{Auth::user()->ho_ten}}</h5>
                                                <h6 class="user-email">{{Auth::user()->email}}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="row gutters">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <h5 class="mb-2 text-primary">THÔNG TIN CÁ NHÂN</h5>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="fullName">Họ và tên</label>
                                                    <input name="ho_ten" value="{{ Auth::user()->ho_ten }}" type="text"
                                                        class="form-control" id="fullName" placeholder="Họ và tên">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input name="email" value="{{ Auth::user()->email }}" type="email" class="form-control"
                                                        id="eMail" placeholder="Nhập Email">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="phone">Số điện thoại</label>
                                                    <input name="sdt" value="{{ Auth::user()->sdt }}" type="text" class="form-control"
                                                        id="phone" placeholder="Nhập số điện thoại">
                                                    @error('')
                                                        <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="date">Ngày sinh</label>
                                                    <input name="ngay_sinh" value="{{ Auth::user()->ngay_sinh }}" type="date"
                                                        class="form-control" id="phone" placeholder="Nhập số điện thoại">
                                                </div>
                                                @error('ngay_sinh')
                                                    <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="cccd">Căn cước công dân</label>
                                                    <input name="cccd" value="{{ Auth::user()->cccd }}" type="text" class="form-control"
                                                        id="website" placeholder="CCCD">
                                                </div>
                                                @error('cccd')
                                                    <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row gutters">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <h5 class="mt-3 mb-2 text-primary">ĐỊA CHỈ</h5>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="thanhPho">Thành Phố</label>
                                                    <div class="">
                                                        <select name="province" id="province" class="form-control">
                                                            <option value="">{{Auth::user()->id_phuong_xa ? Auth::user()->wards->districts->provinces->ten_tinh_thanh : 'Vui lòng chọn'}}</option>
                                                            @foreach ($provinces as $province)
                                                                <option value="{{ $province->id_tinh_thanh }}">
                                                                    {{ $province->ten_tinh_thanh }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="quanHuyen">Quận huyện</label>
                                                    <div class="">
                                                        <select name="district" id="district" class="form-control">
                                                            <option value="">{{Auth::user()->id_phuong_xa ? Auth::user()->wards->districts->ten_quan_huyen: 'Vui lòng chọn'}}</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="phuongXa">Phường Xã</label>
                                                    <div class="">
                                                        <select name="id_phuong_xa" id="ward" class="form-control">
                                                            <option value="{{Auth::user()->id_phuong_xa}}">{{Auth::user()->id_phuong_xa ? Auth::user()->wards->ten_phuong_xa : 'Vui lòng chọn'}}</option>
                                                        </select>
                                                    </div>
                                                    @error('id_phuong_xa')
                                                        <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row gutters">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <h5 class="mt-3 mb-2 text-primary">KINH NGHIỆM LÀM VIỆC</h5>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="ngon_ngu">Ngôn ngữ</label>
                                                    <div class="">
                                                        <select name="ngon_ngu" id="language" class="form-control">
                                                            <option value="" selected >{{Auth::user()->id_chung_chi ? Auth::user()->certificates->languages->ten_ngon_ngu : 'Chưa cập nhật'}}</option>
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
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group ">
                                                    <label for="chungChi">Chứng chỉ liên quan</label>
                                                    <div class="">
                                                        <select name="id_chung_chi" id="certificates" class="form-control">
                                                            <option value="{{Auth::user()->id_chung_chi}}" selected>{{Auth::user()->id_chung_chi ? Auth::user()->certificates->ten_chung_chi : 'Chưa cập nhật'}}</option>
                                                            <option value="">Chọn chứng chỉ</option>
                                                        </select>
                                                        @error('id_chung_chi')
                                                            <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group p-15">
                                                    <label for="ky_nang">Kỹ Năng</label>
                                                    <select id="skills" class="form-control" name="ky_nang[]" multiple = "multiple">
                                                        @php
                                                            $selectedSkill = explode('/',Auth::user()->ky_nang);
                                                        @endphp
                                                        @foreach ($selectedSkill as $dataSkill)
                                                            <option value="{{ Auth::user()->ky_nang ? $dataSkill : '' }}" selected>{{ Auth::user()->ky_nang ? $dataSkill : ''  }}</option>
                                                        @endforeach
                                                        @foreach ($skill as $key => $item)
                                                            @if (!in_array($item->ten_ky_nang,$selectedSkill))
                                                                <option value="{{ $item->ten_ky_nang }}">{{ $item->ten_ky_nang }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                    @error('ky_nang')
                                                        <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="id_kinh_nghiem">Kinh nghiệm</label>
                                                    <select name="id_kinh_nghiem" class="form-control" >
                                                        <option value="{{Auth::user()->id_kinh_nghiem}}">{{Auth::user()->id_kinh_nghiem ? Auth::user()->experiences->so_nam : 'Vui lòng chọn' }}</option>
                                                        @foreach ($experiences as $experience)
                                                            <option value="{{$experience->id_kinh_nghiem}}">{{ $experience->so_nam }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('id_kinh_nghiem')
                                                        <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="cv">CV cá nhân</label>
                                                    <input name="cv" type="file" class="form-control" placeholder="">
                                                </div>
                                                @error('cv')
                                                    <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row gutters">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="text-right">
                                                    <button type="button" id="submit" name="submit"
                                                        class="btn btn-secondary">Cancel</button>
                                                    <button type="submit" id="submit" name="submit"
                                                        class="btn btn-orange">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <embed src="{{asset('uploads/member/CV/'.Auth::user()->cv)}}" type="application/pdf" width="80%" height="500px">
            </div>
        </section>
    </main>
    @include('footer')
@endsection
