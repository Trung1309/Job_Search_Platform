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
                <div class="">
                    <div class="row charts-grids">
                        <div class="col col-md-4 ">
                            <div style="display: flex; flex-direction: column; justify-content: center;align-items: center">
                                <img src="{{ asset('uploads/users/' . $users->hinh_dai_dien) }}"
                                    alt="{{ $users->hinh_dai_dien }}"
                                    style="height: 200px;width: 200px; object-fit: cover; border-radius: 50%">
                                <h3>{{ $users->ho_ten }}</h3>
                                <p>{{ $users->email }}</p>
                            </div>
                        </div>
                        <div class="col col-md-8">
                            <h3 style="margin: 10px 0px;">Thông tin cá nhân</h3>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th scope="row">Họ và tên</th>
                                        <td>{{ $users->ho_ten }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">CCCD</th>
                                        <td>{{ $users->cccd }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Ngày sinh</th>
                                        <td>{{ date_format(\Carbon\Carbon::parse($users->ngay_sinh), 'd-m-Y') }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Email</th>
                                        <td>{{ $users->email }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Số điện thoại</th>
                                        <td>{{ $users->sdt }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Địa chỉ</th>
                                        <td>{{ $users->wards->ten_phuong_xa }} -
                                            {{ $users->wards->districts->ten_quan_huyen }} -
                                            {{ $users->wards->districts->provinces->ten_tinh_thanh }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="charts-grids">
                        <h3 style="margin: 0px 0px 30px 0px;" >KINH NGHIỆM LÀM VIỆC</h3>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th scope="row">Số năm kinh nghiệm: </th>
                                    <td>{{ $users->experiences->so_nam }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Kỹ năng</th>
                                    <td>
                                        <ul class="company-skill">
                                            @php
                                                $skills = explode('/',$users->ky_nang)
                                            @endphp
                                            @foreach ($skills as $skill )
                                                <li>{{$users->ky_nang ? $skill : 'Chưa cập nhật'}}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Ngôn ngữ</th>
                                    <td>{{ $users->certificates->languages->ten_ngon_ngu }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Chứng chỉ</th>
                                    <td>{{ $users->certificates->ten_chung_chi }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="charts-grids">
                    <embed src="{{asset('uploads/member/CV/'.$users->cv)}}" type="application/pdf" width="100%" height="900px">
                </div>
            </div>
        </div>
        <!--footer-->
        @include('Admin.footer')
        <!--//footer-->
    </div>
@endsection
