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
    <h1>THƯ CẢM ƠN</h1>
    <h3>Xin chào ứng viên: {{ $userName }}</h3>
    <p>Lòi đầu tiên {{$tenCongTy}} xin gửi lời cảm ơn đến bạn</p>
    <p>Chúng tôi đánh giá cao kiến thức chuyên môn, kỹ năng cá nhân cũng như những kinh nghiệm của bạn</p>
    <p>Sau đợt đánh giá chúng tôi cảm thấy bạn chưa phù hợp với công việc: <strong>{{ $jobName }}</strong> mà chúng tôi đang tuyển dụng</p>
    <p>Chúng tôi xin phép được lưu trữ hồ sơ và liên lạc với bạn khi sắp xếp được vị trí phù hợp. Chúc bạn mạnh khỏe và thành công trong cuộc sống. </p>
    <p>Trân trọng,<br>Đội ngũ tuyển dụng {{$tenCongTy}}</p>
</body>
</html>
