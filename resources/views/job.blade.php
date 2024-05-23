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
                        <div class="content-filter-left col-md-3">
                            <h4 style=" padding:10px; text-transform:uppercase; border-bottom:1px solid gray ;">Bộ lọc
                            </h4>
                            <form action="">
                                <ul class="menu-filter">
                                    <li>Địa chỉ
                                        <ul class="sub-menu-filter">
                                            <li><input type="radio" name="quy_mo"> 10-100</li>
                                            <li><input type="radio" name="quy_mo"> 100-200</li>
                                            <li><input type="radio" name="quy_mo"> 200-300</li>
                                        </ul>
                                    </li>
                                    <li>Quy mô
                                        <ul class="sub-menu-filter">
                                            <li><input type="radio" name="quy_mo"> 10-100</li>
                                            <li><input type="radio" name="quy_mo"> 100-200</li>
                                            <li><input type="radio" name="quy_mo"> 200-300</li>
                                        </ul>
                                    </li>
                                    <li>Thể loại
                                        <ul class="sub-menu-filter">
                                            <li><input type="radio" name="the_loại"> Product</li>
                                            <li><input type="radio" name="the_loai"> Outsourcing</li>
                                            <li><input type="radio" name="the_loai"> Solution</li>
                                            <li><input type="radio" name="the_loai"> Cosnutant</li>
                                            <li><input type="radio" name="the_loai"> Service</li>

                                        </ul>
                                    </li>
                                </ul>
                                <button type="submit">Tìm kiếm</button>
                            </form>
                        </div>
                        <div class="content-job-right col-md-9">
                            <div class="search-box w-100">
                                <form action="">
                                    <input type="text" placeholder="Nhập từ khoá tìm kiếm"
                                        class="form-control col-md-10 ">
                                    <button type="submit" class="btn">Tìm kiếm</button>
                                </form>
                            </div>
                            <div class="company-cards">
                                @foreach ($job as $key => $item)
                                <div class="company-item">
                                    <div class="company-content">
                                        <a href="" class="company-title">{{$item->ten_cong_viec}}</a>
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
                                                {{$item->wards->districts->ten_quan_huyen}}
                                            </li>
                                        </ul>
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
