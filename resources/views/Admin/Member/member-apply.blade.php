@extends('Admin.layout-admin')

@section('content-admin')

    <div class="main-content">
        @include('Admin.sidebar')
        <!-- header-starts -->
        @include('Admin.header')
        <!-- //header-ends -->
        <!-- main content start-->
        <div id="page-wrapper">

            <div class="search-form">
                <form action="" method="get">
                    <div class="form-group" style="display: flex; width: 30%;">
                        <input type="text" class="form-control" placeholder="Nhập từ khoá" class="">
                        <button type="submit" class="btn btn-orange"> Tìm kiếm</button>
                    </div>
                </form>
            </div>
            <div class="main-page">
                <div class="charts-grids">
                    <h1 class="text-center" style="margin-bottom: 20px">{{ $title }}</h1>
                    @if (count($member) > 0)
                        <p>Số lượng cần tuyển ở vị trí này là : {{ $job->so_luong }} </p>
                        <p>Có {{ $member->count() }} ứng viên ứng tuyển vào vị trí này </p>
                        @if (Session::has('success'))
                            <div class= "alert alert-success">{{ Session::get('success') }}</div>
                        @endif
                        <ul class="nav nav-pills">
                            <li class="nav-item  active">
                                <a class="nav-link" data-toggle="pill" href="#home">Đang chờ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#menu1">Chờ phỏng vấn</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#menu2">Trúng tuyển</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#menu3">Bị loại</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane container active" id="home">
                                <div class="charts-grids">
                                    <table class="table table-bordered">
                                        <thead class="thead-dark">
                                            <tr style="text-align: center">
                                                <th scope="col" class="text-center">STT</th>
                                                <th scope="col" class="text-center">Họ và tên</th>
                                                <th scope="col" class="text-center">Công việc</th>
                                                <th scope="col" class="text-center">Kỹ năng</th>
                                                <th scope="col" class="text-center">Trạng thái</th>
                                                <th scope="col" class="text-center">Tuỳ chọn</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($member as $key => $item)
                                                @if ($item->trang_thai == 'Đang chờ')
                                                <tr style="text-align: center">
                                                    <td>{{ $key++ }}</td>
                                                    <td>{{ $item->users->ho_ten }}</td>
                                                    <td>{{ $item->jobs->ten_cong_viec }}</td>
                                                    <td>{{ $item->users->ky_nang }}</td>
                                                    <td>{{ $item->trang_thai }}</td>
                                                    <td>
                                                        <div class="option-btn d-flex"
                                                            style="display: flex; justify-content: center; align-items: center">
                                                            @if ($item->trang_thai == 'Đang chờ' || $item->trang_thai == 'Chờ phỏng vấn' )
                                                                <div class="btn-dat-lich">
                                                                    <a href="{{route('memberSchedule',$item->id_ung_vien)}}" class="btn btn-success"  style="margin-right: 10px">
                                                                        <i
                                                                        class="fa-solid fa-check"></i>
                                                                    </a>
                                                                </div>
                                                                <form action="{{route('rejectedMember',$item->id_ung_vien)}}" method="POST" style="margin-right: 10px">
                                                                    @csrf
                                                                    <button
                                                                        onclick="return confirm('Bạn có chắc chắn ứng viên này đã bị loại}} ?')"
                                                                        type="submit" class="btn btn-danger"><i
                                                                            class="fa-solid fa-x"></i></button>
                                                                </form>
                                                            @endif
                                                            <a href="{{ route('getDetailMemberSuitable', $item->id_nguoi_dung) }}"
                                                                class="btn btn-primary" style="margin-right: 10px"><i
                                                                    class="fa-solid fa-eye"></i></a>

                                                        </div>
                                                    </td>
                                                </tr>
                                                @endif
                                            @endforeach

                                        </tbody>


                                    </table>
                                </div>

                            </div>
                            <div class="tab-pane container " id="menu1">
                                <div class="charts-grids">
                                    <table class="table table-bordered">
                                        <thead class="thead-dark">
                                            <tr style="text-align: center">
                                                <th scope="col" class="text-center">STT</th>
                                                <th scope="col" class="text-center">Họ và tên</th>
                                                <th scope="col" class="text-center">Công việc</th>
                                                <th scope="col" class="text-center">Kỹ năng</th>
                                                <th scope="col" class="text-center">Trạng thái</th>
                                                <th scope="col" class="text-center">Tuỳ chọn</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($member as $key => $item)
                                                @if ($item->trang_thai == 'Chờ phỏng vấn')
                                                <tr style="text-align: center">
                                                    <td>{{ $key++ }}</td>
                                                    <td>{{ $item->users->ho_ten }}</td>
                                                    <td>{{ $item->jobs->ten_cong_viec }}</td>
                                                    <td>{{ $item->users->ky_nang }}</td>
                                                    <td>{{ $item->trang_thai }}</td>
                                                    <td>
                                                        <div class="option-btn d-flex"
                                                            style="display: flex; justify-content: center; align-items: center">
                                                            @if ($item->trang_thai == 'Đang chờ' || $item->trang_thai == 'Chờ phỏng vấn')
                                                                <div class="btn-dat-lich">
                                                                    <a href="{{route('memberScheduleWorking',$item->id_ung_vien)}}" class="btn btn-success"  style="margin-right: 10px">
                                                                        <i
                                                                        class="fa-solid fa-check"></i>
                                                                    </a>
                                                                </div>

                                                                <form action="{{route('rejectedMember',$item->id_ung_vien)}}" method="POST" style="margin-right: 10px">
                                                                    @csrf
                                                                    <button
                                                                        onclick="return confirm('Bạn có chắc chắn ứng viên này đã bị loại}} ?')"
                                                                        type="submit" class="btn btn-danger"><i
                                                                            class="fa-solid fa-x"></i></button>
                                                                </form>
                                                            @endif
                                                            <a href="{{ route('getDetailMemberSuitable', $item->id_nguoi_dung) }}"
                                                                class="btn btn-primary" style="margin-right: 10px"><i
                                                                    class="fa-solid fa-eye"></i></a>

                                                        </div>
                                                    </td>
                                                </tr>
                                                @endif
                                            @endforeach

                                        </tbody>


                                    </table>
                                </div>

                            </div>
                            <div class="tab-pane container " id="menu2">
                                <div class="charts-grids">
                                    <table class="table table-bordered">
                                        <thead class="thead-dark">
                                            <tr style="text-align: center">
                                                <th scope="col" class="text-center">STT</th>
                                                <th scope="col" class="text-center">Họ và tên</th>
                                                <th scope="col" class="text-center">Công việc</th>
                                                <th scope="col" class="text-center">Kỹ năng</th>
                                                <th scope="col" class="text-center">Trạng thái</th>
                                                <th scope="col" class="text-center">Tuỳ chọn</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($member as $key => $item)
                                                @if ($item->trang_thai == 'Trúng tuyển')
                                                <tr style="text-align: center">
                                                    <td>{{ $key++ }}</td>
                                                    <td>{{ $item->users->ho_ten }}</td>
                                                    <td>{{ $item->jobs->ten_cong_viec }}</td>
                                                    <td>{{ $item->users->ky_nang }}</td>
                                                    <td>{{ $item->trang_thai }}</td>
                                                    <td>
                                                        <div class="option-btn d-flex"
                                                            style="display: flex; justify-content: center; align-items: center">
                                                            @if ($item->trang_thai == 'Đang chờ' || $item->trang_thai == 'Chờ phỏng vấn')
                                                                <div class="btn-dat-lich">
                                                                    <a href="{{route('memberScheduleWorking',$item->id_ung_vien)}}" class="btn btn-success"  style="margin-right: 10px">
                                                                        <i
                                                                        class="fa-solid fa-check"></i>
                                                                    </a>
                                                                </div>

                                                                <form action="" method="POST" style="margin-right: 10px">
                                                                    @csrf
                                                                    <button
                                                                        onclick="return confirm('Bạn có chắc chắn ứng viên này đã bị loại}} ?')"
                                                                        type="submit" class="btn btn-danger"><i
                                                                            class="fa-solid fa-x"></i></button>
                                                                </form>
                                                            @endif
                                                            <a href="{{ route('getDetailMemberSuitable', $item->id_nguoi_dung) }}"
                                                                class="btn btn-primary" style="margin-right: 10px"><i
                                                                    class="fa-solid fa-eye"></i></a>

                                                        </div>
                                                    </td>
                                                </tr>
                                                @endif
                                            @endforeach

                                        </tbody>


                                    </table>
                                </div>

                            </div>
                            <div class="tab-pane container " id="menu3">
                                <div class="charts-grids">
                                    <table class="table table-bordered">
                                        <thead class="thead-dark">
                                            <tr style="text-align: center">
                                                <th scope="col" class="text-center">STT</th>
                                                <th scope="col" class="text-center">Họ và tên</th>
                                                <th scope="col" class="text-center">Công việc</th>
                                                <th scope="col" class="text-center">Kỹ năng</th>
                                                <th scope="col" class="text-center">Trạng thái</th>
                                                <th scope="col" class="text-center">Tuỳ chọn</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($member as $key => $item)
                                                @if ($item->trang_thai == 'Bị loại')
                                                <tr style="text-align: center">
                                                    <td>{{ $key++ }}</td>
                                                    <td>{{ $item->users->ho_ten }}</td>
                                                    <td>{{ $item->jobs->ten_cong_viec }}</td>
                                                    <td>{{ $item->users->ky_nang }}</td>
                                                    <td>{{ $item->trang_thai }}</td>
                                                    <td>
                                                        <div class="option-btn d-flex"
                                                            style="display: flex; justify-content: center; align-items: center">
                                                            @if ($item->trang_thai == 'Đang chờ' || $item->trang_thai == 'Chờ phỏng vấn')
                                                                <div class="btn-dat-lich">
                                                                    <a href="{{route('memberSchedule',$item->id_ung_vien)}}" class="btn btn-success"  style="margin-right: 10px">
                                                                        <i
                                                                        class="fa-solid fa-check"></i>
                                                                    </a>
                                                                </div>

                                                                <form action="{{route('rejectedMember',$item->id_ung_vien)}}" method="POST" style="margin-right: 10px">
                                                                    @csrf
                                                                    <button
                                                                        onclick="return confirm('Bạn có chắc chắn ứng viên này đã bị loại}} ?')"
                                                                        type="submit" class="btn btn-danger"><i
                                                                            class="fa-solid fa-x"></i></button>
                                                                </form>
                                                            @endif
                                                            <a href="{{ route('getDetailMemberSuitable', $item->id_nguoi_dung) }}"
                                                                class="btn btn-primary" style="margin-right: 10px"><i
                                                                    class="fa-solid fa-eye"></i></a>

                                                        </div>
                                                    </td>
                                                </tr>
                                                @endif
                                            @endforeach

                                        </tbody>


                                    </table>
                                </div>

                            </div>
                        </div>

                    @else
                        <p>Không có ứng viên nào ứng tuyển vào vị trí công việc này</p>
                    @endif

                </div>
            </div>
        </div>
        <!--footer-->
        @include('Admin.footer')
        <!--//footer-->
    </div>

@endsection

