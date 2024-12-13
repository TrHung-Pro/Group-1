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
            height: 100vh;
            overflow: hidden;
        }
        #video-background {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -1;
            background-size: cover;
            background-position: center;
        }
        .khung1 {
            background-color: rgba(255, 255, 255, 0.6);
            border-radius: 20px;
            width: 100vw;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border: 3px solid #36454F;
            box-sizing: border-box;
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
            align-items: center; /* Căn giữa theo chiều ngang */
        }
        .button-container {
            display: flex;
            justify-content: center; /* Căn giữa các nút theo chiều ngang */
            gap: 20px; /* Khoảng cách giữa hai nút */
            margin-top: 20px;
        }
        .button {
            font-family: 'Nunito', serif;
            background-color: transparent;
            border: 4px solid #36454F;
            color: #36454F;
            padding: 15px 30px;
            text-align: center;
            text-decoration: none;
            display: flex;
            justify-content: center; /* Đảm bảo văn bản nằm chính giữa theo chiều ngang */
            align-items: center; /* Đảm bảo văn bản nằm chính giữa theo chiều dọc */
            font-size: 35px;
            margin: 15px;
            cursor: pointer;
            border-radius: 20px;
            transition: background-color 0.3s, transform 0.2s;
            font-weight: 600; /* Thêm thuộc tính font-weight để làm chữ đậm hơn */
        }
        .button:hover {
            transform: scale(1.05);
        }
        h1 {
            font-size: 40px;
            color: #36454F;
            margin: 0;
            text-align: center;
            padding: 10px;
            line-height: 1.6;
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
        .textbox {
            font-family: 'Nunito', serif;
            background-color: transparent;
            font-size: 30px;
            padding: 10px;
            border-radius: 20px;
            border: 3px solid #36454F;
            width: 500px;
            margin-top: 15px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <video autoplay muted loop id="video-background">
        <source src="nendong.mp4" type="video/mp4">
        Trình duyệt của bạn không hỗ trợ video nền.
    </video>

    <div class="khung1">
        <div class="khung2">
            <h1>Nhập số điện thoại của bạn để lưu kết quả thi lần này,<br>hoặc để trống nếu không cần lưu.</h1>
            <form>
                <input type="text" placeholder="Nhập số điện thoại của bạn..." class="textbox" maxlength="20" inputmode="numeric" id="phoneNumber">
            <div class="button-container">
                <button type="button" class="button">Vào thi</button>
            </div>
            </form>
        </div>
        
            <button class="button-back" onclick="goBack()">&#8592; Quay lại</button>
    </div>

    <script>
    document.getElementById('phoneNumber').addEventListener('input', function (e) {
        this.value = this.value.replace(/[^0-9]/g, '');
    });
    </script>

    <script>
        function goBack() {
            window.history.back();
        }

        document.querySelector(".button").addEventListener("click", function() {
            const nameInput = document.querySelector(".textbox").value.trim();
            const pages = ["de1A1.php"];
            const randomPage = pages[Math.floor(Math.random() * pages.length)];

            // Xóa bộ nhớ đệm trước khi thực hiện các thao tác khác
            localStorage.clear();

            if (nameInput !== "") {
                // Nếu có nhập tên, lưu tên vào bộ nhớ đệm
                localStorage.setItem("ten", nameInput);
            }

            // Chuyển đến trang ngẫu nhiên
            window.location.href = randomPage;
        });

        document.querySelector('.textbox').addEventListener('input', function (e) {
            let value = e.target.value;

            // Nếu ký tự đầu tiên là khoảng trắng, hãy loại bỏ nó
            if (value.startsWith(' ')) {
                value = value.trimStart();
            }

            // Không cho phép nhập hai khoảng trắng liên tiếp
            value = value.replace(/\s{2,}/g, ' ');

            // Cập nhật giá trị của textbox
            e.target.value = value;
        });

        document.querySelector('.textbox').addEventListener('blur', function (e) {
            // Loại bỏ khoảng trắng ở đầu và cuối khi rời khỏi ô nhập liệu
            e.target.value = e.target.value.trim();
        });
    </script>
</body>
</html>
