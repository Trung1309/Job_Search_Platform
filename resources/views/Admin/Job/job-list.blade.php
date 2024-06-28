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
                    @if (Session::has('success'))
                        <div class= "alert alert-success">{{ Session::get('success') }}</div>
                    @endif
                    <h1 class="text-center" style="margin-bottom: 20px">{{ $title }}</h1>
                    <!-- Nav pills -->
                    <ul class="nav nav-pills">
                        <li class="nav-item  active">
                            <a class="nav-link" data-toggle="pill" href="#home">Đang hoạt động</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#menu1">Hết hạn</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#menu2">Đủ số lượng</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane container active" id="home">
                            <div class="charts-grids">
                                <table class="table table-bordered" >
                                    <thead class="thead-dark">
                                        <tr style="text-align: center">
                                            <th scope="col" class="text-center">ID</th>
                                            <th scope="col" class="text-center">Tên công việc</th>
                                            <th scope="col" class="text-center">Ngày hết hạn</th>
                                            @if (Auth::user()->id_quyen == 3)
                                                <th scope="col" class="text-center">Công ty tuyển dụng</th>
                                            @endif
                                            <th scope="col" class="text-center">Trạng thái</th>
                                            <th scope="col" class="text-center">Kỹ Năng</th>
                                            <th scope="col" class="text-center">Kinh nghiệm</th>
                                            <th scope="col" class="text-center">Số lượng</th>
                                            <th scope="col" class="text-center">Ứng viên phù hợp</th>
                                            <th scope="col" class="text-center">Hồ sơ ứng tuyển</th>
                                            <th scope="col" class="text-center">Tuỳ chọn</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($jobs as $key => $item)
                                            @if ($item->trang_thai == 'Hoạt động')
                                                <tr style="text-align: center">
                                                    <td scope="row">{{ $key++ }}</td>
                                                    <td>{{ $item->ten_cong_viec }}</td>
                                                    <td>{{ $item->ngay_het_han }}</td>
                                                    @if (Auth::user()->id_quyen == 3)
                                                        <td>{{ $item->bussinesses->ten_doanh_nghiep }}</td>
                                                    @endif
                                                    @if ($item->trang_thai == 'Hoạt động')
                                                        <td class="" style="font-weight: 900; color: green">
                                                            {{ $item->trang_thai }}
                                                        </td>
                                                    @elseif ($item->trang_thai == 'Hết hạn')
                                                        <td class="text-danger" style="font-weight: 900">{{ $item->trang_thai }}
                                                        </td>
                                                    @endif

                                                    <td>{{ $item->ky_nang }}</td>
                                                    <td>{{ $item->experiences->so_nam }}</td>
                                                    <td>{{ $item->so_luong }}</td>
                                                    <td>
                                                        <a
                                                            href="{{ route('getMemberSuitableMyJob', $item->id_cong_viec) }}">Xem</a>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('getMemberApplyJob', $item->id_cong_viec) }}">Xem</a>
                                                    </td>
                                                    <td>
                                                        <div class="option-btn d-flex"
                                                            style="display: flex; justify-content: center; align-items: center">
                                                            <form action="{{ route('deleteJob', $item->id_cong_viec) }}"
                                                                method="POST" style="margin-right: 10px">
                                                                @csrf
                                                                <button
                                                                    onclick="return confirm('Bạn có chắc chắn muốn xóa bài {{ $item->ten_cong_viec }} ?')"
                                                                    type="submit" class="btn btn-danger"><i
                                                                        class="fa fa-trash"></i></button>
                                                            </form>
                                                            <a href="{{ route('updateJob', $item->id_cong_viec) }}"
                                                                class="btn btn-primary"><i class="fa fa-pen-to-square"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class="tab-pane container fade" id="menu1">
                            <div class="charts-grids">
                                <table class="table table-bordered" style="width: 100% !important;">
                                    <thead class="thead-dark">
                                        <tr style="text-align: center">
                                            <th scope="col" class="text-center">ID</th>
                                            <th scope="col" class="text-center">Tên công việc</th>
                                            <th scope="col" class="text-center">Ngày hết hạn</th>
                                            @if (Auth::user()->id_quyen == 3)
                                                <th scope="col" class="text-center">Công ty tuyển dụng</th>
                                            @endif
                                            <th scope="col" class="text-center">Trạng thái</th>
                                            <th scope="col" class="text-center">Kỹ Năng</th>
                                            <th scope="col" class="text-center">Kinh nghiệm</th>
                                            <th scope="col" class="text-center">Số lượng</th>
                                            <th scope="col" class="text-center">Ứng viên phù hợp</th>
                                            <th scope="col" class="text-center">Hồ sơ ứng tuyển</th>
                                            <th scope="col" class="text-center">Tuỳ chọn</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($jobs as $key => $item)
                                            @if ($item->trang_thai == 'Hết hạn')
                                            <tr style="text-align: center">
                                                <td scope="row">{{ $key++ }}</td>
                                                <td>{{ $item->ten_cong_viec }}</td>
                                                <td>{{ $item->ngay_het_han }}</td>
                                                @if (Auth::user()->id_quyen == 3)
                                                    <td>{{ $item->bussinesses->ten_doanh_nghiep }}</td>
                                                @endif
                                                @if ($item->trang_thai == 'Hoạt động')
                                                    <td class="" style="font-weight: 900; color: green">
                                                        {{ $item->trang_thai }}
                                                    </td>
                                                @elseif ($item->trang_thai == 'Hết hạn')
                                                    <td class="text-danger" style="font-weight: 900">{{ $item->trang_thai }}
                                                    </td>
                                                @endif

                                                <td>{{ $item->ky_nang }}</td>
                                                <td>{{ $item->experiences->so_nam }}</td>
                                                <td>{{ $item->so_luong }}</td>
                                                <td>
                                                    <a
                                                        href="{{ route('getMemberSuitableMyJob', $item->id_cong_viec) }}">Xem</a>
                                                </td>
                                                <td>
                                                    <a href="{{ route('getMemberApplyJob', $item->id_cong_viec) }}">Xem</a>
                                                </td>
                                                <td>
                                                    <div class="option-btn d-flex"
                                                        style="display: flex; justify-content: center; align-items: center">
                                                        <form action="{{ route('deleteJob', $item->id_cong_viec) }}"
                                                            method="POST" style="margin-right: 10px">
                                                            @csrf
                                                            <button
                                                                onclick="return confirm('Bạn có chắc chắn muốn xóa bài {{ $item->ten_cong_viec }} ?')"
                                                                type="submit" class="btn btn-danger"><i
                                                                    class="fa fa-trash"></i></button>
                                                        </form>
                                                        <a href="{{ route('updateJob', $item->id_cong_viec) }}"
                                                            class="btn btn-primary"><i class="fa fa-pen-to-square"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane container fade" id="menu2">
                            <div class="charts-grids">
                                <table class="table table-bordered" style="width: 100% !important;">
                                    <thead class="thead-dark">
                                        <tr style="text-align: center">
                                            <th scope="col" class="text-center">ID</th>
                                            <th scope="col" class="text-center">Tên công việc</th>
                                            <th scope="col" class="text-center">Ngày hết hạn</th>
                                            @if (Auth::user()->id_quyen == 3)
                                                <th scope="col" class="text-center">Công ty tuyển dụng</th>
                                            @endif
                                            <th scope="col" class="text-center">Trạng thái</th>
                                            <th scope="col" class="text-center">Kỹ Năng</th>
                                            <th scope="col" class="text-center">Kinh nghiệm</th>
                                            <th scope="col" class="text-center">Số lượng</th>
                                            <th scope="col" class="text-center">Ứng viên phù hợp</th>
                                            <th scope="col" class="text-center">Hồ sơ ứng tuyển</th>
                                            <th scope="col" class="text-center">Tuỳ chọn</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($jobs as $key => $item)
                                            @if ($item->trang_thai == 'Đủ số lượng')
                                            <tr style="text-align: center">
                                                <td scope="row">{{ $key++ }}</td>
                                                <td>{{ $item->ten_cong_viec }}</td>
                                                <td>{{ $item->ngay_het_han }}</td>
                                                @if (Auth::user()->id_quyen == 3)
                                                    <td>{{ $item->bussinesses->ten_doanh_nghiep }}</td>
                                                @endif
                                                @if ($item->trang_thai == 'Hoạt động')
                                                    <td class="" style="font-weight: 900; color: green">
                                                        {{ $item->trang_thai }}
                                                    </td>
                                                @elseif ($item->trang_thai == 'Hết hạn')
                                                    <td class="text-danger" style="font-weight: 900">{{ $item->trang_thai }}
                                                    </td>
                                                @elseif ($item->trang_thai == 'Đủ số lượng')
                                                    <td class="text-primary" style="font-weight: 900">{{ $item->trang_thai }}
                                                    </td>
                                                @endif


                                                <td>{{ $item->ky_nang }}</td>
                                                <td>{{ $item->experiences->so_nam }}</td>
                                                <td>{{ $item->so_luong }}</td>
                                                <td>
                                                    <a
                                                        href="{{ route('getMemberSuitableMyJob', $item->id_cong_viec) }}">Xem</a>
                                                </td>
                                                <td>
                                                    <a href="{{ route('getMemberApplyJob', $item->id_cong_viec) }}">Xem</a>
                                                </td>
                                                <td>
                                                    <div class="option-btn d-flex"
                                                        style="display: flex; justify-content: center; align-items: center">
                                                        <form action="{{ route('deleteJob', $item->id_cong_viec) }}"
                                                            method="POST" style="margin-right: 10px">
                                                            @csrf
                                                            <button
                                                                onclick="return confirm('Bạn có chắc chắn muốn xóa bài {{ $item->ten_cong_viec }} ?')"
                                                                type="submit" class="btn btn-danger"><i
                                                                    class="fa fa-trash"></i></button>
                                                        </form>
                                                        <a href="{{ route('updateJob', $item->id_cong_viec) }}"
                                                            class="btn btn-primary"><i class="fa fa-pen-to-square"></i></a>
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

                </div>
            </div>
        </div>
        <!--footer-->
        @include('Admin.footer')
        <!--//footer-->
    </div>
@endsection
