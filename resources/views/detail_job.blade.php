@extends('layout')
@section('content')
    @include('header')
    <main>
        <section id="section-header-job" style="padding: 20px 0px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="d-flex align-items-center">
                            <div class="content-header-job">
                                <h3 class=" text-white job-title">{{$job->ten_cong_viec}}</h3>
                                <div class="job-address text-white">
                                    <i class="fa-solid fa-location-dot" style="color: #ffffff;"></i>
                                    {{$job->bussinesses->so_duong
                                    .' - P.'.$job->bussinesses->wards->ten_phuong_xa
                                    .' - Q.'.$job->bussinesses->wards->districts->ten_quan_huyen
                                    .' - TP.'.$job->bussinesses->wards->districts->provinces->ten_tinh_thanh}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 d-flex flex-column align-items-center justify-content-center">
                        <a href="{{route('applyJob',$job->id_cong_viec)}}" class="btn btn-orange w-100 m-1 ">Apply</a>
                        <a href="" class="btn btn-light w-100 m-1 ">Lưu</a>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-detail-job" class="container " style="padding: 30px 0px;">
            <div class="row">
                <div class="col col-lg-8 border">
                    <div class="content-detail" style="padding: 20px;">
                        <h3>Skill</h3>
                        <ul class="company-skill">
                            @php
                                $skills = explode('/',$job->ky_nang)
                            @endphp
                            @foreach ($skills as $skill )
                                <li>{{$skill}}</li>
                            @endforeach
                        </ul>
                        <h3>Mô tả</h3>
                        {!! $job->mo_ta !!}
                    </div>
                </div>
                <div class="col col-lg-4">
                    <div class="widget border" style="padding: 20px;">
                        <h5>Thông tin chi tiết</h5>
                        <ul class="sidebar-detail-job">
                            <li><i class="fa-solid fa-calendar-days"></i> <span> Kinh Nghiệm : {{$job->experiences->so_nam}}</span></li>
                            <li><i class="fa-solid fa-calendar-days"></i> <span> Ngày đăng: {{date_format($job->created_at,'d-m-Y')}}</span> </li>
                            <li><i class="fa-solid fa-calendar-days"></i> <span> Ngày hết hạn: {{date_format(\Carbon\Carbon::parse($job->ngay_het_han),'d-m-Y')}}</span> </li>
                            <li><i class="fa-solid fa-dollar-sign"></i> <span> Mức lương: {{$job->muc_luong}}</span> </li>
                            <li><i class="fa-solid fa-school"></i> <span> Trình độ: {{$job->levels->ten_trinh_do}}</span> </li>
                            <li><i class="fa-solid fa-turn-up"></i> <span> Vị trí: {{$job->positions->ten_vi_tri}}</span></li>
                            <li><i class="fa-solid fa-turn-up"></i> <span> Thể loại: {{$job->categories->ten_the_loai}}</span> </li>
                        </ul>
                    </div>
                    <div class="widget border">
                        <div class="user-post">
                            <div class="cover-img">
                                <img src="https://images.pexels.com/photos/442576/pexels-photo-442576.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">

                            </div>
                            <div class="avt-user">
                                <img src="https://i.pinimg.com/564x/ae/9a/76/ae9a76aa7b0cb6c21150b444d11fa19e.jpg" alt="">
                            </div>
                            <div class="user-bottom">
                                <div class="user-name text-center font-weight-bold">{{$job->bussinesses->users->ho_ten}}</div>
                                <ul class="info-user-post">
                                    <li>Phone: {{$job->bussinesses->users->sdt}}</li>
                                    <li>Email: {{$job->bussinesses->users->email}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section>
            <h2 class="title-section">Những công việc liên quan</h2>
            <div class="container">
                @foreach ($otherJobs as $otherJob )
                <div class="company-cards">
                    <div class="company-item">
                        <div class="company-avt">
                            <img src="{{asset('uploads/company/'.$otherJob->bussinesses->hinh_dai_dien)}}" alt="">
                        </div>
                        <div class="company-content">
                            <a href="{{route('showDetailJob',$otherJob->id_cong_viec)}}" class="company-title">{{$otherJob->ten_cong_viec}}</a>
                            <div class="company-name">{{$otherJob->bussinesses->ten_doanh_nghiep}}</div>
                            @php
                                $otherJobSkills = explode('/',$otherJob->ky_nang)
                            @endphp
                            <ul class="company-skill">
                                @foreach ($otherJobSkills as $otherJobSkill )
                                    <li>{{$otherJobSkill}}</li>
                                @endforeach
                            </ul>
                            <div class="company-desc">
                                {!!$otherJob->mo_ta!!}
                            </div>
                            <ul class="company-bottom">
                                <li><i class="fa-solid fa-dollar-sign"></i>
                                    {{$otherJob->muc_luong}}</li>
                                <li><i class="fa-solid fa-location-dot"></i>
                                    {{$otherJob->bussinesses->wards->districts->ten_quan_huyen}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </main>
    @include('footer')
@endsection
