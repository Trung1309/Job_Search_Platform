@extends('layout')
@section('content')
    @include('header')
    <main>
        <section>
            <div class="page-about">
                <div class="container">
                    <h1 class="page-title">
                        VIỆC LÀM TẠI ĐÂY, TỪ XA - CƠ HỘI HỢP TÁC TỐT NHẤT
                    </h1>
                    <p class="page-desc">
                        Hàng ngàn cơ hội cung cấp kỹ sư từ các dự án, tập đoàn lớn được cập nhật hàng ngày.
                    </p>
                </div>
            </div>
        </section>
        <section>
            <div class="content">
                <div class="container">
                    <div class="row">
                        @include('sidebar.sidebar_filter_job')
                        <div class="content-job-right col-md-9">
                            <div class="search-box w-100">
                                <form action="">
                                    <input type="text" placeholder="Nhập từ khoá tìm kiếm"
                                        class="form-control col-md-10 ">
                                    <button type="submit" class="btn">Tìm kiếm</button>
                                </form>
                            </div>
                                <h3>Bạn đã chọn:</h3>
                                <ul>
                                    @if(isset($selectedLevelID))
                                        <li>Trình độ: {{$levels->where('id_trinh_do',$selectedLevelID)->first()->ten_trinh_do}}</li>
                                    @endif
                                    @if(isset($selectedCategoryID))
                                        <li>Thể loại: {{$categories->where('id_the_loai',$selectedCategoryID)->first()->ten_the_loai}}</li>
                                    @endif
                                    @if(isset($selectedProvinceID))
                                        <li>Tỉnh thành: {{$provinces->where('id_tinh_thanh',$selectedProvinceID)->first()->ten_tinh_thanh}}</li>
                                    @endif
                                    @if(isset($selectedPositionID))
                                        <li>Vị trí: {{$positions->where('id_vi_tri',$selectedPositionID)->first()->ten_vi_tri}}</li>
                                    @endif

                                    @if(isset($selectedExperienceID))
                                        <li>Kinh nghiệm: {{$experiences->where('id_kinh_nghiem',$selectedExperienceID)->first()->so_nam}}</li>
                                    @endif

                                </ul>
                            <div class="company-cards">
                                @if (count($jobs)>0)
                                    @foreach ($jobs as $key => $item)
                                        <div class="company-item">
                                            <div class="company-content">
                                                <a href="{{route('showDetailJob',$item->id_cong_viec)}}" class="company-title">{{$item->ten_cong_viec}}</a>
                                                <div class="company-name">{{$item->bussinesses->ten_doanh_nghiep}}</div>
                                                <ul class="company-skill">
                                                    @php
                                                        $skills = explode('/',$item->ky_nang)
                                                    @endphp
                                                    @foreach ($skills as $skill )
                                                        <li>{{$skill}}</li>
                                                    @endforeach
                                                </ul>
                                                <div class="company-desc">
                                                    {!!$item->mo_ta!!}
                                                </div>
                                                <ul class="company-bottom">
                                                    <li><i class="fa-solid fa-dollar-sign"></i>
                                                    {{$item->muc_luong}}
                                                    </li>
                                                    <li><i class="fa-solid fa-location-dot"></i>
                                                        {{'Q.'.$item->wards->districts->ten_quan_huyen. ' - TP.'.$item->wards->districts->provinces->ten_tinh_thanh}}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <p class="text-center">Không tìm thấy kết quả nào</p>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section id="section-technology">
            <div class="container">
                <h1 class="title-section">Công nghệ</h1>
                <p class="desc-section">Đa dạng công nghệ sử dụng</p>
                <div class="tech-slider">
                    <div class="tech-slider-item">
                        <div class="tech-avt">
                            <img src="{{asset('images/tech-java.png')}}" alt="">
                        </div>
                    </div>
                    <div class="tech-slider-item">
                        <div class="tech-avt">
                            <img src="{{asset('images/tech-js.png')}}" alt="">
                        </div>
                    </div>
                    <div class="tech-slider-item">
                        <div class="tech-avt">
                            <img src="{{asset('images/tech-nodejs.png')}}" alt="">
                        </div>
                    </div>
                    <div class="tech-slider-item">
                        <div class="tech-avt">
                            <img src="{{asset('images/tech-php.png')}}" alt="">
                        </div>
                    </div>
                    <div class="tech-slider-item">
                        <div class="tech-avt">
                            <img src="{{asset('images/tech-python.png')}}" alt="">
                        </div>
                    </div>
                    <div class="tech-slider-item">
                        <div class="tech-avt">
                            <img src="{{asset('images/tech-c.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('footer')
@endsection
