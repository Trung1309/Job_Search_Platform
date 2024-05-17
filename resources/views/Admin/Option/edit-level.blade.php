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
                        <form action="{{route('updateLevelPost',$level->id_trinh_do)}}" method="POST" class="form-horizontal style-form">
                            @csrf
                            @method('PUT')
                            <div class="form-group p-15">
                                <label for="ten_trinh_do  ">Vị trí công việc</label>

                                <input value="{{$level->ten_trinh_do}}" type="text" name="ten_trinh_do" id="viTri" class="form-control" placeholder=""
                                    aria-describedby="helpId">
                                @error('ten_trinh_do')
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
