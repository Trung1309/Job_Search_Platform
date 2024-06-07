@extends('layout')
@section('content')
    @include('header')
    <main>
        <section>
            <div class="page-about">
                <div class="container">
                    <h1 class="page-title">
                        HÃY ĐĂNG TẢI CV CỦA BẠN ĐỂ CHÚNG TÔI XEM BẠN CÓ PHÙ HỢP VỚI VỊ TRÍ NÀY HAY KHÔNG
                    </h1>
                    <p class="page-desc">
                        Chúng tôi sẽ liên hệ lại với các bạn sớm nhất trong vòng 6 ngày làm việc.
                    </p>
                </div>
            </div>
        </section>
        <section>
            <div class="content">

                <div class="container">
                    @if (Session::has('success'))
                        <div class= "alert alert-success">{{ Session::get('success') }}</div>
                    @endif
                    <h3 class="text-center" style="margin-top: 20px">Công việc bạn muốn apply: {{$job->ten_cong_viec}}</h3>

                    <div class="upload-cv">
                        <form method="POST" action="{{route('applyJobPost',$job->id_cong_viec)}}" enctype="multipart/form-data">
                            @csrf
                            <label for="images" class="drop-container" id="dropcontainer">
                                <span class="drop-title">Tải CV của bạn tại đây</span>
                                or
                                <input name="cv" type="file" required id="pdfInput"  accept="application/pdf">
                            </label>
                            @error('cv')
                                <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="text-right">
                                        <button type="button" id="submit" name="submit"
                                            class="btn btn-secondary">Cancel</button>
                                        <button type="submit" id="submit" name="submit"
                                            class="btn btn-orange">Apply</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="preview-cv">
                            <div id="pdfPreview" style="display: none">
                                <h2 class="text-center">Uploaded PDF Preview:</h2>
                                <embed id="pdfViewer" width="600" height=" 800" type="application/pdf">
                            </div>
                        </div>
                    </div>

                    <script>
                        document.getElementById('pdfInput').addEventListener('change', function(event) {
                            var file = event.target.files[0];
                            if (file && file.type === 'application/pdf') {
                                var fileReader = new FileReader();
                                fileReader.onload = function(e) {
                                    var pdfDataUrl = e.target.result;
                                    var pdfViewer = document.getElementById('pdfViewer');
                                    pdfViewer.src = pdfDataUrl;
                                    document.getElementById('pdfPreview').style.display = 'block';
                                };
                                fileReader.readAsDataURL(file);
                            } else {
                                alert('Please select a valid PDF file.');
                            }
                        });
                    </script>
                </div>
            </div>

        </section>
    </main>
    @include('footer')
@endsection
