@extends('layout')
@section('content')
    @include('header')
    <main>
        <section id="contact" class="bg-orange">
            <div class="container">
                <div class="row">
                    <div class="col col-md-6 d-flex flex-column justify-content-center align-items-center">
                        <img src="{{asset('images/register.png')}}" alt="" width="90%">
                        <h2>Cách dễ nhất để tiết kiệm chi phí và mở rộng kinh doanh của bạn!</h2>
                        <ul>
                            <li>1.Sau khi đăng ký tài khoản,bạn chỉ cần tạo hồ sơ cá nhân và tải lên CV của mình để ứng tuyển.</li>
                            <li>2.Sau khi hoàn thành hồ sơ,lựa chọn việc làm phù hợp với mình,bạn hãy ứng tuyển để kiếm tiền từ hệ thống.</li>
                            <li>3. Sau khi quá trình phỏng vấn thành công hai bên sẽ ký kết hợp đồng và số tiền sẽ được thanh toán theo hợp đồng.</li>
                        </ul>
                    </div>
                    <div class="col col-md-6 d-flex justify-content-center align-items-center">
                        <div class="form-login bg-white p-3 w-100 "  >
                            <h2 class="text-center">Đăng kí làm ứng viên</h2>
                            <p class="text-center">Nền tảng tìm kiếm việc làm tại TP Đà Nẵng</p>
                            <form action="{{route('registerClient')}}" method="POST">
                                {{-- <input type="hidden" name="user_type" value="client"> --}}
                                @csrf
                                <div class="form-group">
                                    <label for="inputName">Họ và tên</label>
                                    <input value="{{old('ho_ten')}}"  type="text" name="ho_ten" class="form-control w-100" placeholder="Họ và tên"
                                        aria-describedby="helpId">
                                    @error('ho_ten')
                                        <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label >Số điện thoại</label>
                                    <input value="{{old('sdt')}}"  type="text" name="sdt"  class="form-control w-100" placeholder="Số điện thoại"
                                        aria-describedby="helpId">
                                    @error('sdt')
                                        <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail">Email</label>
                                    <input value="{{old('email')}}"  type="email" name="email"  class="form-control w-100" placeholder="Email"
                                        aria-describedby="helpId">
                                    @error('email')
                                        <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Mật khẩu</label>
                                    <input value="{{old('password')}}"  type="password" name="password"  class="form-control w-100" placeholder="Mật khẩu"
                                        aria-describedby="helpId">
                                    @error('password')
                                        <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                {{-- <div class="form-group">
                                    <label for="input">Kinh nghiệm làm việc</label>
                                    <select class="form-control w-100 " name="kinh_nghiem">
                                        <option value="{{old('kinh_nghiem')}}" selected disabled>Vui lòng chọn</option>
                                        <option value="Dưới 1 năm">Dưới 1 năm</option>
                                        <option value="2-3 năm">2-3 năm</option>
                                        <option value="3-4 năm">3-4 năm</option>
                                        <option value="trên 5 năm">trên 5 năm</option>
                                    </select>
                                    @error('kinh_nghiem')
                                        <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div> --}}
                                <button type="submit" class="btn btn-orange w-100">Đăng kí ngay</button>
                            </form>
                            <a href="{{route('indexLogin')}}" class="btn d-block m-auto">Login <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('footer')
@endsection
