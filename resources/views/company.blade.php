@extends('layout')
@section('content')
    @include('header')
    <main>
        <section>
            <div class="page-about">
                <div class="container">
                    <h1 class="page-title">
                        TẬP TRUNG NHIỀU DOANH NGHIỆP HÀNG ĐẦU ĐÀ NẴNG
                    </h1>
                    <p class="page-desc">
                        Hàng ngàn cơ hội đang chờ đón các bạn, tìm hiểu về doanh nghiệp thích hợp với bạn nhé.
                    </p>
                </div>
            </div>
        </section>
        <section>
            <div class="content">
                <div class="container">
                    <div class="row">
                        @include('sidebar.sidebar_filter_company')
                        <div class="content-job-right col-md-9">
                            <div class="search-box w-100">
                                <form action="">
                                    <input type="text" placeholder="Nhập từ khoá tìm kiếm"
                                        class="form-control col-md-10 ">
                                    <button type="submit" class="btn">Tìm kiếm</button>
                                </form>
                            </div>
                            <div class="company-cards">
                                @foreach ($company as $key => $item)
                                    <div class="company-item">
                                        <div class="company-avt">
                                            <img src="{{$item->hinh_dai_dien ? asset('uploads/company/'.$item->hinh_dai_dien) : ''}}" alt="">
                                        </div>
                                        <div class="company-content">
                                            <a href="" class="company-title">{{$item->ten_doanh_nghiep}}</a>
                                            <div class="company-desc">
                                                {!!$item->gioi_thieu!!}
                                            </div>
                                            <div class="company-address"><i class="fa-solid fa-location-dot"></i>
                                                {{$item->id_phuong_xa ? 'Q.'.$item->wards->districts->ten_quan_huyen.', TP.'.$item->wards->districts->provinces->ten_tinh_thanh  : '' }}
                                            </div>

                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                  <li class="page-item">
                                    <a class="page-link " href="#" aria-label="Previous">
                                      <span aria-hidden="true">&laquo;</span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                  </li>
                                  <li class="page-item"><a class="page-link current" href="#">1</a></li>
                                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                                  <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                      <span aria-hidden="true">&raquo;</span>
                                      <span class="sr-only">Next</span>
                                    </a>
                                  </li>
                                </ul>
                              </nav>
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
