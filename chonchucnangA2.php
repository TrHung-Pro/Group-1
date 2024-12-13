<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <title>Driving Theory</title>
    <style>
        body {
            font-family: 'Nunito', serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Đảm bảo body có chiều cao toàn màn hình */
            overflow: hidden; /* Đảm bảo không có thanh cuộn */
        }
        #video-background {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -1; /* Đặt video phía sau nội dung */
            background-size: cover;
            background-position: center;
        }
        .khung1 {
            background-color: rgba(255, 255, 255, 0.6);
            border-radius: 20px;
            width: 100vw; /* Chiếm toàn bộ chiều rộng màn hình */
            height: 100vh; /* Chiếm toàn bộ chiều cao màn hình */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border: 3px solid #36454F;
            box-sizing: border-box; /* Đảm bảo kích thước bao gồm cả border */
        }
        .khung2 {
            text-align: center;
            background-color: transparent;
            border-radius: 20px;
            padding: 30px;
            border: 4px solid #36454F;
            display: flex;
            flex-direction: column;
            justify-content: center; /* Căn giữa theo chiều dọc */
        }
        .button {
            font-family: 'Nunito', serif;
            background-color: transparent;
            border: 4px solid #36454F;
            color: #36454F;
            padding: 15px 30px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 35px;
            margin: 15px;
            cursor: pointer;
            border-radius: 20px;
            transition: background-color 0.3s, transform 0.2s;
            font-weight: 600;
        }
        .button:hover {
            transform: scale(1.05);
        }
        h1 {
            font-size: 40px; /* Giảm kích thước chữ để phù hợp hơn */
            color: #36454F;
            margin: 0; /* Loại bỏ khoảng cách trên dưới */
            text-align: center; /* Căn giữa văn bản */
            padding: 10px; /* Thêm padding để tạo khoảng cách */
            line-height: 1.6; /* Tăng khoảng cách giữa các dòng */
        }
        .button-back {
            font-family: 'Nunito', serif;
            background-color: transparent;
            border: 3px solid #36454F;
            color: #36454F;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            position: absolute;
            bottom: 20px;
            left: 20px;
            cursor: pointer;
            border-radius: 20px;
            transition: background-color 0.3s, transform 0.2s;
            font-weight: 600;
        }
        .button-back:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <!-- Video nền -->
    <video autoplay muted loop id="video-background">
        <source src="nendong.mp4" type="video/mp4">
        Trình duyệt của bạn không hỗ trợ video nền.
    </video>

    <div class="khung1">
        <div class="khung2">
            <h1>Bạn muốn?</h1>
            <button class="button" onclick="chuyenTrang('hoc')">Học lý thuyết</button>
            <button class="button" onclick="chuyenTrang('thi')">Thi thử</button>
        </div>
        <button class="button-back" onclick="goBack()">&#8592; Quay lại</button> <!-- Nút quay lại -->
    </div>
    
    <script>
    function chuyenTrang(chucNang) {
        if (chucNang === 'hoc') {
            window.location.href = 'cauhoiA2.php';
        } else if (chucNang === 'thi') {
            window.location.href = 'thithuA2.php';
        }
    }

    function goBack() {
        window.history.back(); // Quay lại trang trước đó
    }
</script>
</body>
</html>
