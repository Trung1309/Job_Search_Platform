@extends('layout')
@section('content')
    @include('header')
    <main>
        <section id="section-header-job" style="padding: 20px 0px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="d-flex align-items-center">
                            <div class="avt-job bg-white" style="margin-right: 30px;"><img src="images/company-bap.png')}}" alt="" style="width: 200px; height: 200px; object-fit: cover;"></div>
                            <div class="content-header-job">
                                <h3 class=" text-white job-title">Lập trình viên PHP</h3>
                                <div class="job-address text-white"><i class="fa-solid fa-location-dot" style="color: #ffffff;"></i> Đà Nẵng</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 d-flex flex-column align-items-center justify-content-center">
                        <a href="" class="btn btn-orange w-100 m-1 ">Apply</a>
                        <a href="" class="btn btn-light w-100 m-1 ">Lưu</a>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-detail-job" class="container " style="padding: 30px 0px;">
            <div class="row">
                <div class="col col-lg-9 border">
                    <div class="content-detail" style="padding: 20px;">
                        <h3>Skill</h3>
                        <ul class="company-skill">
                            <li>PHP</li>
                            <li>Java</li>
                            <li>C++</li>
                        </ul>
                        <h3>Mô tả</h3>
                        <ul>
                            <li>Trao đổi trực tiếp với KH, nhận task từ phía KH và hoàn thành task được giao</li>
                            <li>Làm việc 4 tiếng 1 ngày theo khung giờ 8h - 17h</li>
                        </ul>
                    </div>
                </div>
                <div class="col col-lg-3">
                    <div class="widget border" style="padding: 20px;">
                        <h5>Thông tin chi tiết</h5>
                        <ul>
                            <li><i class="fa-solid fa-calendar-days"></i> <span> Kinh Nghiệm : 4 năm</span></li>
                            <li><i class="fa-solid fa-calendar-days"></i> <span> Ngày đăng: 12/10/2026</span> </li>
                            <li><i class="fa-solid fa-calendar-days"></i> <span> Ngày hết hạn: 12/10/2026</span> </li>
                            <li><i class="fa-solid fa-dollar-sign"></i> <span> Mức lương: 10tr - 20tr</span> </li>
                            <li><i class="fa-solid fa-school"></i> <span> Trình độ: đại học</span> </li>
                            <li><i class="fa-solid fa-turn-up"></i> <span> Vị trí: Fresher</span></li>
                            <li><i class="fa-solid fa-turn-up"></i> <span> Thể loại: Remote</span> </li>
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
                                <div class="user-name text-center font-weight-bold">Nguyễn Quốc Trung</div>
                                <ul >
                                    <li>Phone: 0385541195</li>
                                    <li>Email: quoctrung1309@gmail.com</li>
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
                <div class="company-cards">
                    <div class="company-item">
                        <div class="company-avt">
                            <img src="{{asset('images/company-bap.png')}}" alt="">
                        </div>
                        <div class="company-content">
                            <a href="" class="company-title">Lập trình viên</a>
                            <div class="company-name">Công ty công nghệ Rikkei</div>
                            <ul class="company-skill">
                                <li>PHP</li>
                                <li>Java</li>
                                <li>C++</li>
                            </ul>
                            <div class="company-desc">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Ad debitis illum facilis, accusantium tenetur veritatis deleniti
                                voluptatibus deserunt quaerat. Omnis eligendi reiciendis cum eos molestiae
                                porro ea beatae tempora neque!
                            </div>
                            <ul class="company-bottom">
                                <li><i class="fa-solid fa-dollar-sign"></i>
                                    5tr - 6tr</li>
                                <li><i class="fa-solid fa-location-dot"></i>
                                    Hà Nội</li>
                            </ul>
                        </div>
                    </div>
                    <div class="company-item">
                        <div class="company-avt">
                            <img src="{{asset('images/company-bap.png')}}" alt="">
                        </div>
                        <div class="company-content">
                            <a href="" class="company-title">Lập trình viên</a>
                            <div class="company-name">Công ty công nghệ Rikkei</div>
                            <ul class="company-skill">
                                <li>PHP</li>
                                <li>Java</li>
                                <li>C++</li>
                            </ul>
                            <div class="company-desc">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Ad debitis illum facilis, accusantium tenetur veritatis deleniti
                                voluptatibus deserunt quaerat. Omnis eligendi reiciendis cum eos molestiae
                                porro ea beatae tempora neque!
                            </div>
                            <ul class="company-bottom">
                                <li><i class="fa-solid fa-dollar-sign"></i>
                                    5tr - 6tr</li>
                                <li><i class="fa-solid fa-location-dot"></i>
                                    Hà Nội</li>
                            </ul>
                        </div>
                    </div>
                    <div class="company-item">
                        <div class="company-avt">
                            <img src="{{asset('images/company-bap.png')}}" alt="">
                        </div>
                        <div class="company-content">
                            <a href="" class="company-title">Lập trình viên</a>
                            <div class="company-name">Công ty công nghệ Rikkei</div>
                            <ul class="company-skill">
                                <li>PHP</li>
                                <li>Java</li>
                                <li>C++</li>
                            </ul>
                            <div class="company-desc">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Ad debitis illum facilis, accusantium tenetur veritatis deleniti
                                voluptatibus deserunt quaerat. Omnis eligendi reiciendis cum eos molestiae
                                porro ea beatae tempora neque!
                            </div>
                            <ul class="company-bottom">
                                <li><i class="fa-solid fa-dollar-sign"></i>
                                    5tr - 6tr</li>
                                <li><i class="fa-solid fa-location-dot"></i>
                                    Hà Nội</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('footer')
@endsection
