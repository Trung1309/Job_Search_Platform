<div class="sticky-header header-section">
    <div class="header-left">
        <!--toggle button start-->
        <button id="showLeftPush"><i class="fa fa-bars"></i></button>
        <!--toggle button end-->
        <div class="profile_details_left">
            <!--notifications of menu start -->
            <ul class="nofitications-dropdown">
                <li class="dropdown head-dpdn">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                            class="fa fa-envelope"></i><span class="badge">4</span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="notification_header">
                                <h3>You have 3 new messages</h3>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <div class="user_img">
                                    <img src="{{ asset('images/Admin/1.jpg') }}" alt="" />
                                </div>
                                <div class="notification_desc">
                                    <p>Lorem ipsum dolor amet</p>
                                    <p><span>1 hour ago</span></p>
                                </div>
                                <div class="clearfix"></div>
                            </a>
                        </li>
                        <li class="odd">
                            <a href="#">
                                <div class="user_img">
                                    <img src="{{ asset('images/Admin/4.jpg') }}" alt="" />
                                </div>
                                <div class="notification_desc">
                                    <p>Lorem ipsum dolor amet</p>
                                    <p><span>1 hour ago</span></p>
                                </div>
                                <div class="clearfix"></div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="user_img">
                                    <img src="{{ asset('images/Admin/3.jpg') }}" alt="" />
                                </div>
                                <div class="notification_desc">
                                    <p>Lorem ipsum dolor amet</p>
                                    <p><span>1 hour ago</span></p>
                                </div>
                                <div class="clearfix"></div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="user_img">
                                    <img src="{{ asset('images/Admin/2.jpg') }}" alt="" />
                                </div>
                                <div class="notification_desc">
                                    <p>Lorem ipsum dolor amet</p>
                                    <p><span>1 hour ago</span></p>
                                </div>
                                <div class="clearfix"></div>
                            </a>
                        </li>
                        <li>
                            <div class="notification_bottom">
                                <a href="#">See all messages</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown head-dpdn">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                            class="fa fa-bell"></i><span class="badge blue">4</span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="notification_header">
                                <h3>You have 3 new notification</h3>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <div class="user_img">
                                    <img src="{{ asset('images/Admin/4.jpg') }}" alt="" />
                                </div>
                                <div class="notification_desc">
                                    <p>Lorem ipsum dolor amet</p>
                                    <p><span>1 hour ago</span></p>
                                </div>
                                <div class="clearfix"></div>
                            </a>
                        </li>
                        <li class="odd">
                            <a href="#">
                                <div class="user_img">
                                    <img src="{{ asset('images/Admin/1.jpg') }}" alt="" />
                                </div>
                                <div class="notification_desc">
                                    <p>Lorem ipsum dolor amet</p>
                                    <p><span>1 hour ago</span></p>
                                </div>
                                <div class="clearfix"></div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="user_img">
                                    <img src="{{ asset('images/Admin/3.jpg') }}" alt="" />
                                </div>
                                <div class="notification_desc">
                                    <p>Lorem ipsum dolor amet</p>
                                    <p><span>1 hour ago</span></p>
                                </div>
                                <div class="clearfix"></div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="user_img">
                                    <img src="{{ asset('images/Admin/2.jpg') }}" alt="" />
                                </div>
                                <div class="notification_desc">
                                    <p>Lorem ipsum dolor amet</p>
                                    <p><span>1 hour ago</span></p>
                                </div>
                                <div class="clearfix"></div>
                            </a>
                        </li>
                        <li>
                            <div class="notification_bottom">
                                <a href="#">See all notifications</a>
                            </div>
                        </li>
                    </ul>
                </li>

            </ul>
            <div class="clearfix"></div>
        </div>
        <!--notification menu end -->
        <div class="clearfix"></div>
    </div>
    <div class="header-right">
        <div class="profile_details">
            <ul>
                <li class="dropdown profile_details_drop">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <div class="profile_img">

                            @auth
                                @if (Auth::user()->id_quyen == 2)
                                <span class="prfil-img"><img src="{{Auth::user()->bussinesses->hinh_dai_dien ? asset('uploads/company/'.Auth::user()->bussinesses->hinh_dai_dien) : asset('https://th.bing.com/th/id/R.1c75547f74d8aa7720a495f208c9b1c8?rik=sQutfouPTUbxOw&pid=ImgRaw&r=0') }}" alt="" />
                                </span>
                                <div class="user-name">
                                    <p>{{Auth()->user()->bussinesses->ten_doanh_nghiep}}</p>
                                    <span>Tài khoản: {{Auth()->user()->roles->ten_quyen}}</span>
                                </div>
                                @endif
                            @endauth
                            @auth
                                @if (Auth::user()->id_quyen == 3)
                                <span class="prfil-img"><img src="https://th.bing.com/th/id/R.1c75547f74d8aa7720a495f208c9b1c8?rik=sQutfouPTUbxOw&pid=ImgRaw&r=0" alt="" />
                                <div class="user-name">
                                    <p>{{Auth()->user()->ho_ten}}</p>
                                    <span>Tài khoản: {{Auth()->user()->roles->ten_quyen}}</span>
                                </div>
                                @endif
                            @endauth
                            {{-- <i class="fa fa-angle-down lnr"></i>
                            <i class="fa fa-angle-up lnr"></i> --}}
                            {{-- <div class="clearfix"></div> --}}
                        </div>
                    </a>
                    {{-- <ul class="dropdown-menu drp-mnu">

                        <li>
                            <a href="{{ route('thong-tin-ca-nhan') }}"><i class="fa fa-user"></i> Thông tin cá
                                nhân</a>
                        </li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                <i class="fa fa-sign-out"></i>
                                @csrf
                                <button type="submit" style="background: none;border: none; outline: none;">Đăng
                                    xuất</button>
                            </form>
                        </li>
                    </ul> --}}
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
</div>
