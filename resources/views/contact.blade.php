@extends('layout')
@section('content')
    @include('header')
    <main>
        <section id="contact" class="bg-orange">
            <div class="container">
                <div class="row">
                    <div class="col col-md-6">
                        <h3>Liên hệ với chúng tôi</h3>
                        <p>Vui lòng để lại thông tin - QTNet sẽ trả lời bạn một cách sớm nhất có thể</p>
                        <form action="">
                            <div class="form-group">
                                <input id="name" name="name" type="text" class=" form-control" placeholder="Họ và tên">
                            </div>
                            <div class="form-group">
                                <input id="email" name="email" type="text" class=" form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input id="phone" name="phone" type="text" class=" form-control" placeholder="Số điện thoại">
                            </div>
                            <div class="form-group">
                                <textarea id="content" name="content" type="text" class=" form-control" placeholder="Nội dung"> </textarea>
                            </div>
                            <button class="btn btn-orange">Xác Nhận</button>
                        </form>
                    </div>
                    <div class="col col-md-6 d-flex justify-content-center align-items-center">
                        <img src="{{asset('images/contact.png')}}" alt="" class="img-contact" style="width: 80%;">
                    </div>
                </div>
            </div>
        </section>
        <section id="map">
            <div class="maps w-100 h-100">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.074037077378!2d108.15654907496733!3d16.06164738461673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421924682e8689%3A0x48eb0bdbeec05215!2zVHLGsOG7nW5nIMSQ4bqhaSBI4buNYyBTxrAgUGjhuqFtIC0gxJDhuqFpIGjhu41jIMSQw6AgTuG6tW5n!5e0!3m2!1svi!2s!4v1712824173533!5m2!1svi!2s" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
    </main>
    @include('footer')
@endsection
