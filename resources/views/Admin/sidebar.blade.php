<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
    <!--left-fixed -navigation-->
    <aside class="sidebar-left">
        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse"
                    aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h1>
                    <a class="navbar-brand" href="{{route('home')}}"><span class="fa fa-area-chart"></span> QT NET</a>
                </h1>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="sidebar-menu">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="treeview">
                        <a href="{{route('admin-home')}}">
                            <i class="fa fa-dashboard"></i> <span>Tổng quan</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>Công việc</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="{{route('getAllMyJob')}}"><i class="fa fa-angle-right"></i>Bài đăng của tôi</a>
                            </li>
                            <li>
                                <a href="{{route('addJob')}}"><i class="fa fa-angle-right"></i>Đăng bài tuyển dụng</a>
                            </li>
                        </ul>

                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-user"></i>
                            <span>Ứng viên</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="{{route('show-all-member')}}"><i class="fa fa-angle-right"></i>Tất cả ứng viên</a>
                            </li>
                            <li>
                                <a href="{{route('show-all-my-member')}}"><i class="fa fa-angle-right"></i>Ứng viên </a>
                            </li>

                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-newspaper"></i>
                            <span>Tin tức</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="{{route('getAllMyNews')}}"><i class="fa fa-angle-right"></i>Tin tức của tôi</a>
                            </li>
                            <li>
                                <a href="{{route('addNews')}}"><i class="fa fa-angle-right"></i>Đăng tin mới</a>
                            </li>

                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-user"></i>
                            <span>Vị trí công việc</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="{{route('getAllPositon')}}"><i class="fa fa-angle-right"></i>Danh sách</a>
                            </li>
                            <li>
                                <a href="{{route('addPosition')}}"><i class="fa fa-angle-right"></i>Thêm vị trí mới</a>
                            </li>

                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-user"></i>
                            <span>Trình độ học vấn</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="{{route('getAllLevel')}}"><i class="fa fa-angle-right"></i>Danh sách</a>
                            </li>
                            <li>
                                <a href="{{route('addLevel')}}"><i class="fa fa-angle-right"></i>Thêm trình độ</a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-user"></i>
                            <span>Thể loại công việc</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="{{route('getAllCategory')}}"><i class="fa fa-angle-right"></i>Danh sách</a>
                            </li>
                            <li>
                                <a href="{{route('addCategory')}}"><i class="fa fa-angle-right"></i>Thêm thể loại công việc</a>
                            </li>

                        </ul>
                    </li>

                    <li class="header">Tuỳ chọn</li>
                    <li>
                        <a href="{{route('home')}}"><i class="fa fa-angle-right text-red"></i>
                            <span>Trang chủ</span></a>
                    </li>
                    <li>
                        <a href="{{route('getProfile')}}"><i class="fa fa-angle-right text-red"></i>
                            <span>Thông tin cá nhân</span></a>
                    </li>
                    <li>
                        <a href="" style="display: flex !important">
                            <i class="fa fa-angle-right text-yellow"></i>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit"
                                    style="background: none;border: none; outline: none;">Đăng
                                    xuất</button>
                            </form>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
    </aside>
</div>
