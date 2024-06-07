
$(document).ready(function () {
    $('#province').change(function () {
        var provinceId = $(this).val();
        if (provinceId) {
            $.ajax({
                url: '/get-districts/' + provinceId,
                type: "GET",
                dataType: "json",
                success: function (data) {
                    $('#district').empty();
                    $.each(data, function (key, value) {
                        $('#district').append('<option value="' + value.id_quan_huyen +
                            '">' + value.ten_quan_huyen + '</option>');
                    });
                }
            });
        } else {
            $('#district').empty();
            $('#ward').empty();
        }
    });

    $('#district').change(function () {
        var districtId = $(this).val();
        if (districtId) {
            $.ajax({
                url: '/get-wards/' + districtId,
                type: "GET",
                dataType: "json",
                success: function (data) {
                    $('#ward').empty();
                    $.each(data, function (key, value) {
                        $('#ward').append('<option value="' + value.id_phuong_xa + '">' +
                            value.ten_phuong_xa + '</option>');
                    });
                }
            });
        } else {
            $('#ward').empty();
        }
    });
});



$(document).ready(function () {
    $('#language').change(function () {
        var languageID = $(this).val();
        if (languageID) {
            $.ajax({
                url: '/get-certificate/' + languageID,
                type: "GET",
                dataType: "json",
                success: function (data) {
                    $('#certificates').empty();
                    $.each(data, function (key, value) {
                        $('#certificates').append('<option value="' + value.id_chung_chi +
                            '">' + value.ten_chung_chi + '</option>');
                    });
                }
            });
        } else {
            $('#certificates').empty();
        }
    });
});

