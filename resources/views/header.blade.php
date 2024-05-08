<header>
    <div class="container">
        <div class=" d-flex justify-content-end ">
            <div class="hd-resgiter-company ">
                <p style="margin:0px 10px 0px 0px;">Bạn là doanh nghiệp ? </p>
            <a class="text-orange" href="{{route('indexCompany')}}" style="font-size: 20px; text-decoration: none;">  Đăng kí ngay</a>
            </div>
        </div>
        <div class="menu-pc">
            <div class="menu">
                <div class="logo-avt-pc">
                    <a href="#"><img src="{{asset('images/logo.png')}}" alt=""></a>
                </div>
                <div class="nav-menu-pc">
                    <ul class="nav-menu">
                        <li>
                            <a href="{{route('cong-ty')}}">
                                <i class="fa-solid fa-building"></i>
                                <span>Doanh nghiệp</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('cong-viec')}}">
                                <i class="fa-solid fa-bag-shopping"></i>
                                <span>Công việc</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('tin-tuc')}}">
                                <i class="fa-solid fa-building"></i>
                                <span>Tin tức</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('lien-he')}}">
                                <i class="fa-solid fa-phone"></i>
                                <span>Liên hệ</span>
                            </a> </a>
                        </li>
                        <li>
                            <div class="avt-user-pc">
                                <img src="https://algarve.montalvoschools.com/wp-content/uploads/2023/08/default-avatar-profile-icon-of-social-media-user-vector.jpg"
                                    alt="">
                                <ul class="avt-option">
                                    <li><a href="{{route('thong-tin-ca-nhan')}}">Thông tin cá nhân</a></li>
                                    <li><a href="{{route('dang-nhap')}}">Đăng nhập</a></li>
                                    <li><a href="">Đăng xuất</a></li>
                                </ul>
                            </div>
                        </li>
                </div>

            </div>
        </div>
        <div class="menu-mobile">
            <div class="nav-menu-mobileTop">
                <div class="logo-avt-mobile">
                    <img src="{{asset('images/logo.png')}}" alt="">
                </div>
                <div class="hambuger">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>
            </div>
            <ul class="nav-menu-mobile">
                <li><a href="{{route('cong-ty')}}"><i class="fa-solid fa-building"></i>
                        <span>Doanh nghiệp</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('cong-viec')}}">
                        <i class="fa-solid fa-building"></i>
                        <span>Công việc</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa-solid fa-building"></i>
                        <span>Tin tức</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('lien-he')}}">
                        <i class="fa-solid fa-building"></i>
                        <span>Liên hệ</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-solid fa-building"></i>
                        <span> Tài khoản</span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="{{route('thong-tin-ca-nhan')}}">Thông tin cá nhân</a></li>
                        <li><a href="{{route('dang-nhap')}}">Đăng nhập</a></li>
                        <li><a href="">Đăng xuất</a></li>
                        <li><a href="#">Tuỳ chọn 1</a></li>
                        <li><a href="#">Tuỳ chọn 1</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</header>
