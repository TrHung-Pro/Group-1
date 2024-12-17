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
            justify-content: center;
            align-items: center;
        }
        .button-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }
        .button {
            font-family: 'Nunito', serif;
            background-color: transparent;
            border: 4px solid #36454F;
            color: #36454F;
            padding: 12px 27px;
            text-align: center;
            text-decoration: none;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 27px;
            margin: 10px;
            cursor: pointer;
            border-radius: 20px;
            transition: background-color 0.3s, transform 0.2s;
            font-weight: 600;
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
        }
        .message {
            font-size: 25px;
            color: red;
            margin-top: 10px;
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
        }
    </style>
    <script>
        function goBack() {
            window.location.href = 'batdau.php';
        }
    </script>
</head>
<body>
    <?php
    $errorMessage = "";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Kết nối tới cơ sở dữ liệu
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "drivingtheory";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Kiểm tra kết nối
        if ($conn->connect_error) {
            die("Kết nối thất bại: " . $conn->connect_error);
        }

        // Lấy dữ liệu từ form
        $user = $_POST['username'] ?? '';
        $pass = $_POST['password'] ?? '';

        // Kiểm tra dữ liệu nhập
        if (empty($user) || empty($pass)) {
            $errorMessage = "Vui lòng nhập đủ thông tin!";
        } else {
            // Kiểm tra tài khoản và mật khẩu
            $sql = "SELECT * FROM admin WHERE taikhoan = ? AND matkhau = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $user, $pass);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                header("Location: chucnangAdmin.php");
                exit();
            } else {
                $errorMessage = "Tài khoản hoặc mật khẩu không đúng!";
            }

            $stmt->close();
        }

        $conn->close();
    }
    ?>

    <video autoplay muted loop id="video-background">
        <source src="nendong.mp4" type="video/mp4">
    </video>

    <div class="khung1">
        <div class="khung2">
            <h1>Chức năng này chỉ dành cho quản trị viên</h1>
            <form method="POST">
                <input type="text" name="username" placeholder="Tài khoản" class="textbox"><br>
                <input type="password" name="password" placeholder="Mật khẩu" class="textbox">
                <div class="button-container">
                    <button type="submit" class="button">Đăng nhập</button>
                </div>
                <?php if (!empty($errorMessage)) { echo "<div class='message'>$errorMessage</div>"; } ?>
            </form>
        </div>
        <button class="button-back" onclick="goBack()">&#8592; Quay lại</button>
    </div>
</body>
</html>
