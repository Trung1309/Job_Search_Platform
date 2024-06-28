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
    <h1>THƯ TRÚNG TUYỂN</h1>
    <h3>Xin chào ứng viên: {{ $userName }}</h3>
    <p>Qua buổi phỏng vấn vừa rồi chúng tôi cảm thấy bạn rất phù hợp với công việc: <strong>{{ $jobName }}</strong></p>
    <p>Chúc mừng bạn đã trở thành một trong những thanh viên của công ty {{$tenCongTy}}</p>
    <p>Bạn có thể bắt đầu đi làm chính thức vào ngày: <strong>{{ $ngayPhongVan }} vào lúc {{$gioPhongVan}}</strong></p>
    <p>Địa chỉ làm việc: {{ $soDuong }} - {{$phuongXa}} - {{$quanHuyen}} - {{$tinhThanh}} </p>
    <p>Khi bạn đến nơi vui lòng gọi vào số: <strong> {{$soDienThoai}}</strong></p>
    <p>Mọi thắc mắc vui lòng liên hệ vào số: <strong>{{$soDienThoai}}</strong></p>
    <p>Trân trọng,<br>Đội ngũ tuyển dụng {{$tenCongTy}}</p>
</body>
</html>
