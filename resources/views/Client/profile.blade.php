@extends('layout')
@section('content')
    @include('header')
    <main>
        <section id="profile" class="bg-orange">
            <div class="container">
                <div class="container">
                    <form action="" method="POST">
                        <div class="row gutters">
                            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="account-settings">
                                            <div class="user-profile">
                                                <div class="user-avatar">
                                                    <img id="imagePreview">
                                                    <div class="form-group d-flex flex-column">
                                                        <label for="file-upload" class="custom-file-upload">
                                                            <i class="fa-solid fa-upload"></i> Tải ảnh lên
                                                        </label>
                                                        <input name="hinhDaiDien" id="hinhDaiDien" id="file-upload" type="file" style=""/>
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
                                                    <input value="{{ Auth::user()->ho_ten }}" type="text"
                                                        class="form-control" id="fullName" placeholder="Họ và tên">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="eMail">Email</label>
                                                    <input value="{{ Auth::user()->email }}" type="email" class="form-control"
                                                        id="eMail" placeholder="Nhập Email">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="phone">Số điện thoại</label>
                                                    <input value="{{ Auth::user()->sdt }}" type="text" class="form-control"
                                                        id="phone" placeholder="Nhập số điện thoại">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="date">Ngày sinh</label>
                                                    <input value="{{ Auth::user()->ngay_sinh }}" type="date"
                                                        class="form-control" id="phone" placeholder="Nhập số điện thoại">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="cccd">Căn cước công dân</label>
                                                    <input value="{{ Auth::user()->cccd }}" type="text" class="form-control"
                                                        id="website" placeholder="CCCD">
                                                </div>
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
                                                            <option value="">Chọn tỉnh/thành phố</option>
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
                                                            <option value="">Chọn quận/huyện</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="phuongXa">Phường Xã</label>
                                                    <div class="">
                                                        <select name="ward" id="ward" class="form-control">
                                                            <option value="">Chọn phường/xã</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row gutters">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <h5 class="mt-3 mb-2 text-primary">KINH NGHIỆM LÀM VIỆC</h5>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="kyNang">Kỹ năng</label>
                                                    <input type="text" class="form-control" id="kyNang"
                                                        placeholder="PHP / C# / Java...">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="kingNghiem">Kinh nghiệm</label>
                                                    <input type="text" class="form-control" id="kingNghiem"
                                                        placeholder="Kinh nghiệm làm việc">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="kingNghiem">CV cá nhân</label>
                                                    <input type="file" class="form-control" placeholder="">
                                                </div>
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
            </div>
        </section>
    </main>
    @include('footer')
@endsection
