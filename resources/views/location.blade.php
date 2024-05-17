<!DOCTYPE html>
<html>

<head>
    <title>Form địa chỉ</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <select name="province" id="province">
        <option value="">Chọn tỉnh / thành phố</option>
        @foreach ($provinces as $province)
            <option value="{{ $province->id_tinh_thanh }}">{{ $province->ten_tinh_thanh }}</option>
        @endforeach
    </select>

    <select name="district" id="district">
        <option value="">Chọn quận / huyện</option>
    </select>

    <select name="ward" id="ward">
        <option value="">Chọn phường / xã</option>
    </select>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/location.js') }}"></script>
</body>

</html>
