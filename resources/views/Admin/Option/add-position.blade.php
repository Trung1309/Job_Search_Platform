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
                        <div class="alert alert-success">{{ Session::get('success')}}</div>
                    @endif
                    <div class="form-group">
                        <form action="{{route('addPositionPost')}}" method="POST" class="form-horizontal style-form">
                            @csrf
                            <div class="form-group p-15">
                                <label for="ten_vi_tri  ">Vị trí công việc</label>

                                <input value="{{old('ten_vi_tri')}}" type="text" name="ten_vi_tri" id="viTri" class="form-control" placeholder=""
                                    aria-describedby="helpId">
                                @error('ten_vi_tri')
                                    <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                @enderror

                            </div>
                            <div class="form-group p-15">
                                <label for="mo_ta">Mô tả vị trí</label>
                                <textarea class="form-control" name="mo_ta" id="moTa" rows="3">{{old('mo_ta')}}</textarea>
                                @error('mo_ta')
                                    <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group p-15">
                                <button type="submit" class="btn btn-primary text-center">Xác nhận</button>
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
