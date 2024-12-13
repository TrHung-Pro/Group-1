<!DOCTYPE html>
<html lang="vi">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
        .khung {
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
        .nut {
            font-family: 'Nunito', serif;
            width: 140px;
            margin-top: 20px;
            padding: 15px;
            background-color: transparent;
            border: 4px solid #36454F;
            color: #36454F;
            border-radius: 20px;
            font-size: 28px;
            cursor: pointer;
            transition: transform 0.2s;
            font-weight: bold;
            background-clip: padding-box; /* Đảm bảo viền không bị đè lên */
        }
        .nut:hover {
            transform: scale(1.05);
        }
        h1 {
            font-size: 40px; /* Giảm kích thước chữ để phù hợp hơn */
            color: #36454F;
            margin: 0; /* Loại bỏ khoảng cách trên dưới */
            text-align: center; /* Căn giữa văn bản */
            padding: 10px; /* Thêm padding để tạo khoảng cách */
            line-height: 1.6; /* Tăng khoảng cách giữa các dòng */
            padding-left: 100px;
            padding-right: 100px;
        }
        .admin-button {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 50px;
            height: 50px;
            background-color: transparent;
            border: none;
            border-radius: 50%; /* Tạo hình tròn */
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: background-color 0.2s;
            color: #36454F; /* Màu chữ */
            font-size: 30px; /* Kích thước biểu tượng */
        }
        .admin-button:hover {
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

    <div class="khung">
        <h1>Driving Theory - DT là một ứng dụng Web được phát triển bởi Group 1 - CNTT45B. DT giúp cung cấp đầy đủ kiến thức lý thuyết cho những người đang ôn luyện và chuẩn bị thi sát hạch giấy phép lái xe máy. Đồng thời, DT cũng hỗ trợ những bài thi thử mô phỏng đề thi để người dùng có thể tự đánh giá được năng lực của mình trước thi chính thức.</h1>
        <button class="nut" onclick="window.location.href='a1a2.php'">Bắt đầu</button>
    </div>

    <!-- Nút quản trị viên -->
    <button class="admin-button" onclick="window.location.href='admin.php'">
        <i class="fas fa-cog"></i> <!-- Biểu tượng bánh răng -->
    </button>

</body>
</html>
