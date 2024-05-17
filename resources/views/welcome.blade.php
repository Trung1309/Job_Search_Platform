@extends('layout')
@section('content')
@include('header')
    <main>
        <section id="section-about">
            <div class="section-slider">
                <div class="container">
                    <div class="wrapper-text">
                        <svg>
                            <text x="50%" y="50%" dy=".35em" text-anchor="middle">
                                Nền tảng tìm kiếm việc làm
                            </text>
                        </svg>
                    </div>
                    <p class="mb-5 " style="color: #fff; text-align: center;">Hàng ngàn cơ hội đang chờ bạn Apply ngay
                        bây giờ</p>
                    <div class="filter-work ">
                        <form action="">
                            <div class="filter-work-top">
                                <input type="text" name="search" placeholder="Nhập vị trí tuyển dụng"
                                    class="form-control " value="">
                                <select name="" id="input" class="form-control " required="required">
                                    <option selected>Địa điểm</option>
                                    <option value="">Hà Nội</option>
                                    <option value="">Hồ Chi Minh</option>
                                </select>
                                <select name="" id="input" class="form-control " required="required">
                                    <option selected>Mức lương</option>
                                    <option value="">5->10 triệu</option>
                                    <option value="">10->20 triệu</option>
                                </select>
                                <select name="" id="input" class="form-control " required="required">
                                    <option selected>Kinh nghiệm</option>
                                    <option value="">Chưa có kinh nghiệm</option>
                                    <option value="">1 năm kinh nghiệm</option>
                                </select>
                            </div>
                            <div class="filter-work-bottom">
                                <button type="submit">TÌM KIẾM</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- <div class="section-slider-bottom">
                    <div class="sliders">
                        <div class="slider-item">
                            <img src="https://cdn.pixabay.com/photo/2016/11/19/14/16/man-1839500_960_720.jpg" alt="">
                        </div>
                        <div class="slider-item">
                            <img src="https://cdn.pixabay.com/photo/2016/11/19/14/16/man-1839500_960_720.jpg" alt="">
                        </div>
                    </div>
                </div> -->
            </div>
        </section>
        <section id="section-service">
            <div class="container">
                <h1 class="title-section">Dịch vụ của chúng tôi</h1>
                <p class="desc-section">Khám phá thêm về dịch vụ của chúng tôi. Khám phá các giải pháp toàn diện mà
                    chúng tôi cung cấp để đáp ứng nhu cầu của bạn một cách hiệu quả</p>
                <div class="service">
                    <div class="item-service">
                        <div class="avt-service">
                            <img src="{{asset('images/service2.png')}}" alt="">
                        </div>
                        <a class="title-service">Thông tin doanh nghiệp</a>
                    </div>
                    <div class="item-service">
                        <div class="avt-service">
                            <img src="{{asset('images/service3.png')}}" alt="">
                        </div>
                        <a class="title-service">Thông tin doanh nghiệp</a>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-job">
            <div class="container">
                <h1 class="title-section">Công việc</h1>
                <p class="desc-section">Danh mục công việc phân loại công việc dựa trên loại công việc hoặc chức danh
                    công việc, giúp người tìm việc dễ dàng xác định và khám phá công việc phù hợp với kỹ năng và nguyện
                    vọng của họ</p>
                <div class="cards">
                    <div class="card-item">
                        <div class="card-avt">
                            <img src="{{asset('images/service2.png')}}" alt="">
                        </div>
                        <div class="card-top">
                            <a class="card-title">Thông tin doanh nghiệp</a>
                            <p class="card-desc">Design is a dynamic and multifaceted field that encompasses the
                                creative and strategic process of conceptualizing and producing visual solutions.
                                Designers are skilled professionals who combine artistic flair with technical expertise
                                to communicate ideas, messages, or information through various mediums</p>
                        </div>
                    </div>
                    <div class="card-item">
                        <div class="card-avt">
                            <img src="{{asset('images/service2.png')}}" alt="">
                        </div>
                        <div class="card-top">
                            <a class="card-title">Thông tin doanh nghiệp doanh nghiệp</a>
                            <p class="card-desc">information through various mediums</p>
                        </div>
                    </div>
                    <div class="card-item">
                        <div class="card-avt">
                            <img src="{{asset('images/service2.png')}}" alt="">
                        </div>
                        <div class="card-top">
                            <a class="card-title">Thông tin doanh nghiệp</a>
                            <p class="card-desc">Design is a dynamic and multifaceted field that encompasses the
                                creative and strategic process of conceptualizing and producing visual solutions.
                                Designers are skilled professionals who combine artistic flair with technical expertise
                                to communicate ideas, messages, or information through various mediums</p>
                        </div>
                    </div>
                    <div class="card-item">
                        <div class="card-avt">
                            <img src="{{asset('images/service2.png')}}" alt="">
                        </div>
                        <div class="card-top">
                            <a class="card-title">Thông tin doanh nghiệp</a>
                            <p class="card-desc">Design is a dynamic and multifaceted field that encompasses the
                                creative and strategic process of conceptualizing and producing visual solutions.
                                Designers are skilled professionals who combine artistic flair with technical expertise
                                to communicate ideas, messages, or information through various mediums</p>
                        </div>
                    </div>
                    <div class="card-item">
                        <div class="card-avt">
                            <img src="{{asset('images/service2.png')}}" alt="">
                        </div>
                        <div class="card-top">
                            <a class="card-title">Thông tin doanh nghiệp</a>
                            <p class="card-desc">Design is a dynamic and multifaceted field that encompasses the
                                creative and strategic process of conceptualizing and producing visual solutions.
                                Designers are skilled professionals who combine artistic flair with technical expertise
                                to communicate ideas, messages, or information through various mediums</p>
                        </div>
                    </div>
                    <div class="card-item">
                        <div class="card-avt">
                            <img src="{{asset('images/service2.png')}}" alt="">
                        </div>
                        <div class="card-top">
                            <a class="card-title">Thông tin doanh nghiệp</a>
                            <p class="card-desc">Design is a dynamic and multifaceted field that encompasses the
                                creative and strategic process of conceptualizing and producing visual solutions.
                                Designers are skilled professionals who combine artistic flair with technical expertise
                                to communicate ideas, messages, or information through various mediums</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-benefit">
            <div class="container">
                <h1 class="title-section">Lợi ích của QTNET</h1>
                <p class="desc-section">QTNet cung cấp một nền tảng rộng lớn cho người tìm việc và nhà tuyển dụng kết nối
                    với nhau, từ đó tạo ra nhiều cơ hội việc làm hơn cho cả hai bên.</p>
                <div class="cards">
                    <div class="card-item">
                        <div class="card-avt">
                            <img src="{{asset('images/service2.png')}}" alt="">
                        </div>
                        <div class="card-top">
                            <a class="card-title">Thông tin doanh nghiệp</a>
                            <p class="card-desc">Design is a dynamic and multifaceted field that encompasses the
                                creative and strategic process of conceptualizing and producing visual solutions.
                                Designers are skilled professionals who combine artistic flair with technical expertise
                                to communicate ideas, messages, or information through various mediums</p>
                        </div>
                    </div>
                    <div class="card-item">
                        <div class="card-avt">
                            <img src="{{asset('images/service2.png')}}" alt="">
                        </div>
                        <div class="card-top">
                            <a class="card-title">Thông tin doanh nghiệpdoanh nghiệp</a>
                            <p class="card-desc">information through various mediums</p>
                        </div>
                    </div>
                    <div class="card-item">
                        <div class="card-avt">
                            <img src="{{asset('images/service2.png')}}" alt="">
                        </div>
                        <div class="card-top">
                            <a class="card-title">Thông tin doanh nghiệp</a>
                            <p class="card-desc">Design is a dynamic and multifaceted field that encompasses the
                                creative and strategic process of conceptualizing and producing visual solutions.
                                Designers are skilled professionals who combine artistic flair with technical expertise
                                to communicate ideas, messages, or information through various mediums</p>
                        </div>
                    </div>
                </div>
        </section>
        <section id="section-technology">
            <div class="container">
                <h1 class="title-section">Công nghệ</h1>
                <p class="desc-section">Đa dạng công nghệ sử dụng</p>
                <div class="owl-carousel">
                    <div class="item">
                        <img src="{{asset('images/tech-java.png')}}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{asset('images/tech-js.png')}}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{asset('images/tech-nodejs.png')}}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{asset('images/tech-php.png')}}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{asset('images/tech-python.png')}}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{asset('images/tech-c.png')}}" alt="">
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('footer');
@endsection
