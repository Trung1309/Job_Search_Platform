<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        p{
            font-size: 20px;
        }
        h1{
            text-align: center;
            font-size: 25px;
        }
        h3{
            font-size: 22px;
        }
    </style>
</head>
<body>
    <h1>THƯ MỜI PHỎNG VẤN</h1>
    <h3>Xin chào ứng viên: {{ $userName }}</h3>
    <p>Thông qua hồ sơ của bạn trên hệ thống tìm kiếm việc làm QTNet chúng tôi cảm thấy bạn phù hợp với công việc: <strong>{{ $jobName }}</strong></p>
    <p>Buổi phỏng vấn sẽ diễn ra vào ngày: <strong>{{ $ngayPhongVan }} vào lúc {{$gioPhongVan}}</strong></p>
    <p>Địa chỉ: {{ $soDuong }} - {{$phuongXa}} - {{$quanHuyen}} - {{$tinhThanh}} </p>
    <p>Khi bạn đến nơi vui lòng gọi vào số: <strong> {{$soDienThoai}}</strong></p>
    <p>Trân trọng,<br>Đội ngũ tuyển dụng {{$tenCongTy}}</p>
</body>
</html>
