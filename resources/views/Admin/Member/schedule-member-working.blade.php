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
                <div class="charts-grids" style="display: flex; align-items: center ;justify-content: center; flex-direction: column" >
                    @if (Session::has('success'))
                        <div class= "alert alert-success">{{ Session::get('success') }}</div>
                    @endif
                    <div class="form-schedule charts-grids" >
                        <i class="fa-solid fa-x btn-close"></i>
                        <form action="{{ route('acceptMemberWorking', $member->id_ung_vien) }}" method="POST">
                            @csrf
                            <h1 style="padding: 20px 0px" class="text-center">Đặt lịch làm việc</h1>
                            <p>Tên ứng viên: {{$member->users->ho_ten}}</p>
                            <p>Email: {{$member->users->email}}</p>
                            <p>Công việc: {{$member->jobs->ten_cong_viec}}</p>
                            <div class="form-group">
                                <label for="">Ngày làm việc</label>
                                <input name="ngay_lam_viec" type="datetime-local" class="form-control" placeholder="">
                                @error('ngay_lam_viec')
                                    <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">

                                <label for="">Số điện thoại liên hệ</label>
                                <input name="sdt" type="text" class="form-control" placeholder="Số điện thoại liên hệ">
                                @error('sdt')
                                    <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Xác nhận</button>
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

