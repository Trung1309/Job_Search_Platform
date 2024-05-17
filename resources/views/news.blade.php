@extends('layout')
@section('content')
    @include('header')
    <main>
        <section>
            <div class="page-about">
                <div class="container">
                    <h1 class="page-title">
                        TIN TỨC TUYỂN DỤNG VIỆC LÀM TẠI THÀNH PHỐ ĐÀ NẴNG
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
                            <div class="w-100 search-box mt-3 mb-3 d-flex justify-content-center align-items-center">
                                <form action="" class="d-flex w-100 justify-content-center align-items-center">

                                    <input type="text" placeholder="Nhập từ khoá tìm kiếm" class="form-control ">
                                    <button type="submit" class="btn btn-orange w-25">Tìm kiếm</button>
                                </form>
                            </div>
                            <div class="company-cards">
                                <div class="company-item">
                                    <div class="company-avt">
                                        <img src="/images/company-bap.png" alt="">
                                    </div>
                                    <div class="company-content">
                                        <a href="" class="company-title">Công ty công nghệ phần mềm BAP</a>
                                        <div class="company-desc">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Ad debitis illum facilis, accusantium tenetur veritatis deleniti
                                            voluptatibus deserunt quaerat. Omnis eligendi reiciendis cum eos molestiae
                                            porro ea beatae tempora neque!</div>
                                        <div class="company-address"><i class="fa-solid fa-location-dot"></i>
                                            Hà Nội
                                        </div>

                                    </div>
                                </div>
                                <div class="company-item">
                                    <div class="company-avt">
                                        <img src="/images/company-bap.png" alt="">
                                    </div>
                                    <div class="company-content">
                                        <a href="" class="company-title">Công ty công nghệ phần mềm BAP</a>


                                        <div class="company-desc">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Ad debitis illum facilis, accusantium tenetur veritatis deleniti
                                            voluptatibus deserunt quaerat. Omnis eligendi reiciendis cum eos molestiae
                                            porro ea beatae tempora neque!</div>
                                        <div class="company-address"><i class="fa-solid fa-location-dot"></i>
                                            Hà Nội
                                        </div>

                                    </div>
                                </div>
                                <div class="company-item">
                                    <div class="company-avt">
                                        <img src="/images/company-bap.png" alt="">
                                    </div>
                                    <div class="company-content">
                                        <a href="" class="company-title">Công ty công nghệ phần mềm BAP</a>
                                        <div class="company-desc">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Ad debitis illum facilis, accusantium tenetur veritatis deleniti
                                            voluptatibus deserunt quaerat. Omnis eligendi reiciendis cum eos molestiae
                                            porro ea beatae tempora neque!</div>
                                        <div class="company-address"><i class="fa-solid fa-location-dot"></i>
                                            Đà Nẵng
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <nav aria-label="Page navigation example" class="d-block" style="margin: 0px auto;">
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
                            <img src="/images/tech-java.png" alt="">
                        </div>
                    </div>
                    <div class="tech-slider-item">
                        <div class="tech-avt">
                            <img src="/images/tech-js.png" alt="">
                        </div>
                    </div>
                    <div class="tech-slider-item">
                        <div class="tech-avt">
                            <img src="/images/tech-nodejs.png" alt="">
                        </div>
                    </div>
                    <div class="tech-slider-item">
                        <div class="tech-avt">
                            <img src="/images/tech-php.png" alt="">
                        </div>
                    </div>
                    <div class="tech-slider-item">
                        <div class="tech-avt">
                            <img src="/images/tech-python.png" alt="">
                        </div>
                    </div>
                    <div class="tech-slider-item">
                        <div class="tech-avt">
                            <img src="/images/tech-c.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @include('footer')
@endsection
