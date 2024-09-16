<!DOCTYPE html>
<html>
<head>
    <title>Ôn tập và Thi lý thuyết Lái xe Mô tô</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-image: url('nen.jpg');
            background-size: cover;
            background-position: center;
        }
        .khung {
            background-color: rgba(255, 255, 255, 0.7);
            border-radius: 20px;
            padding: 30px;
            width: 350px;
            text-align: center;
            border: 3px solid #008080;
        }
        .truong-nhap {
            width: calc(100% - 24px);
            padding: 15px;
            margin: 15px 0;
            border: 3px solid #008080;
            border-radius: 20px;
            font-size: 20px;
            box-sizing: border-box;
        }
        .truong-nhap:focus {
            outline: none;
            border-color: #2E8B57;
        }
        .nut {
            width: 120px;
            margin-top: 25px;
            padding: 15px;
            background: linear-gradient(to right, #008080, #2E8B57);
            color: white;
            border: none;
            border-radius: 20px;
            font-size: 20px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
        }
        .nut:hover {
            transform: scale(1.05);
        }
        h2 {
            font-size: 30px;
            background: linear-gradient(to right, #008080, #2E8B57);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        #result {
            display: none;
            margin-top: 25px;
        }
        #result p {
            margin: 10px;
        }
        .error-msg {
            color: black;
            display: none;
        }
        h1 {
            font-size: 20px;
            background: linear-gradient(to right, #008080, #2E8B57);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>
<body>
    <div class="khung">
        <h2>Nhập ngày sinh của bạn</h2>
        <input class="truong-nhap" type="text" id="ngaysinh" placeholder="Ngày/Tháng/Năm">
        <button class="nut" onclick="kiemTraNgaySinh()">Gửi</button>
        <div id="result">
            <h1 id="name-error" class="error-msg">Vui lòng nhập ngày sinh</h1>
            <h1 id="format-error" class="error-msg">Vui lòng nhập ngày sinh theo định dạng DD/MM/YYYY</h1>
            <h1 id="year-error" class="error-msg">Năm sinh không được lớn hơn năm hiện tại</h1>
            <h1 id="invalid-error" class="error-msg">Ngày sinh hoặc tháng sinh không hợp lệ</h1>
        </div>
    </div>
    <script>
    function kiemTraNgaySinh() {
        var ngaySinh = document.getElementById('ngaysinh').value;
        var resultContainer = document.getElementById('result');
        var nameError = document.getElementById('name-error');
        var formatError = document.getElementById('format-error');
        var yearError = document.getElementById('year-error');
        var invalidError = document.getElementById('invalid-error');

        // Ẩn tất cả các thông báo lỗi
        nameError.style.display = 'none';
        formatError.style.display = 'none';
        yearError.style.display = 'none';
        invalidError.style.display = 'none';

        // Hiển thị khung chứa thông báo
        resultContainer.style.display = 'block';

        // Kiểm tra xem ngày sinh có trống không
        if (ngaySinh.trim() === '') {
            nameError.style.display = 'block';
            return;
        }

        // Kiểm tra xem ngày sinh có đúng định dạng DD/MM/YYYY không
        var ngaySinhRegex = /^(\d{2})\/(\d{2})\/(\d{4})$/;
        if (!ngaySinhRegex.test(ngaySinh)) {
            formatError.style.display = 'block';
            return;
        }

        var ngaySinhParts = ngaySinh.split('/');
        var ngay = parseInt(ngaySinhParts[0], 10);
        var thang = parseInt(ngaySinhParts[1], 10);
        var nam = parseInt(ngaySinhParts[2], 10);

        // Kiểm tra năm sinh không vượt quá năm hiện tại
        var namHienTai = new Date().getFullYear();
        if (nam > namHienTai) {
            yearError.style.display = 'block';
            return;
        }

        // Kiểm tra ngày và tháng sinh không vượt quá giới hạn
        if (ngay < 1 || ngay > 31 || thang < 1 || thang > 12) {
            invalidError.style.display = 'block';
            return;
        }

        var ngaySinhDate = new Date(nam, thang - 1, ngay); // JavaScript months are 0-11
        var homNay = new Date();
        var tuoi = homNay.getFullYear() - ngaySinhDate.getFullYear();
        var thangSinh = ngaySinhDate.getMonth();
        if (thangSinh > homNay.getMonth() || (thangSinh === homNay.getMonth() && ngaySinhDate.getDate() > homNay.getDate())) {
            tuoi--;
        }

        if (tuoi < 18) {
            window.location.href = 'chua18.php';
        } else {
            window.location.href = 'a1a2.php';
        }
    }
</script>
</body>
</html>
