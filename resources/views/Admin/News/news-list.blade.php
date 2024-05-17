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
                    <h1 class="text-center" style="margin-bottom: 20px">{{ $title }}</h1>
                    @if (Session::has('success'))
                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                    @endif
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr style="text-align: center">
                                <th scope="col" class="text-center">STT</th>
                                <th scope="col" class="text-center">Tiêu đề</th>
                                <th scope="col" class="text-center">Hình đại diện</th>
                                <th scope="col" class="text-center">Ngày đăng</th>
                                <th scope="col" class="text-center">Tuỳ chọn</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($news as $key => $item)
                                <tr style="text-align: center">
                                    <td>{{ $key++ }}</td>
                                    <td>{{ $item->tieu_de }}</td>
                                    <td>
                                        <img src="{{ asset('uploads/news/' . $item->hinh_dai_dien) }}" alt=""
                                            style="width: 200px; height: 200px; object-fit: cover">
                                    </td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>
                                        <div class="option-btn d-flex"
                                            style="display: flex; justify-content: center; align-items: center">
                                            <form action="{{route('deleteNews',$item->id_bai_dang)}}" method="POST" style="margin-right: 10px">
                                                @csrf
                                                <button onclick="return confirm('Bạn có chắc chắn muốn xoá tin tức này ?')"
                                                    type="submit" class="btn btn-danger"><i
                                                        class="fa fa-trash"></i></button>
                                            </form>
                                            <a href="{{route('updateNews',$item->id_bai_dang)}}" class="btn btn-primary"><i
                                                    class="fa fa-pen-to-square"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--footer-->
        @include('Admin.footer')
        <!--//footer-->
    </div>
@endsection
