@extends('layout')
@section('content')
    @include('header')
    <main>
        <section id="profile" class="bg-orange">
            <div class="container">
                <div class="container">
                    <div class="row gutters">
                        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="account-settings">
                                        <div class="user-profile">
                                            <div class="user-avatar">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png"
                                                    alt="Maxwell Admin">
                                            </div>
                                            <h5 class="user-name">Yuki Hayashi</h5>
                                            <h6 class="user-email">yuki@Maxwell.com</h6>
                                        </div>
                                        <div class="about">
                                            <h5>About</h5>
                                            <p>I'm Yuki. Full Stack Designer I enjoy creating user-centric, delightful
                                                and human experiences.</p>
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
                                                <input type="text" class="form-control" id="fullName"
                                                    placeholder="Họ và tên">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="eMail">Email</label>
                                                <input type="email" class="form-control" id="eMail"
                                                    placeholder="Nhập Email">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="phone">Số điện thoại</label>
                                                <input type="text" class="form-control" id="phone"
                                                    placeholder="Nhập số điện thoại">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="date">Ngày sinh</label>
                                                <input type="date" class="form-control" id="phone"
                                                    placeholder="Nhập số điện thoại">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="cccd">Căn cước công dân</label>
                                                <input type="text" class="form-control" id="website"
                                                    placeholder="CCCD">
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
                                                    <select name="thanhPho" id="input" class="form-control">
                                                        <option value="">-- Select One --</option>
                                                        <option value="">-- Select One --</option>
                                                        <option value="">-- Select One --</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="quanHuyen">Quận huyện</label>
                                                <div class="">
                                                    <select name="quanHuyen" id="input" class="form-control">
                                                        <option value="">-- Select One --</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="phuongXa">Phường Xã</label>
                                                <div class="">
                                                    <select name="" id="input" class="form-control">
                                                        <option value="">-- Select One --</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="soDuong">Số đường</label>
                                                <input type="text" class="form-control" id="website"
                                                    placeholder="Số đường">
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
                                                <input type="file" class="form-control"
                                                    placeholder="">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row gutters">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="text-right">
                                                <button type="button" id="submit" name="submit"
                                                    class="btn btn-secondary">Cancel</button>
                                                <button type="button" id="submit" name="submit"
                                                    class="btn btn-primary">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('footer')
@endsection
