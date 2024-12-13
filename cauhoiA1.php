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
            padding: 30px; /* Điều chỉnh khoảng cách giữa khung và các nút */
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
            margin: 20px;
            cursor: pointer;
            border-radius: 20px;
            transition: background-color 0.3s, transform 0.2s;
            font-weight: 600;
        }
        .button:hover {
            transform: scale(1.05);
        }
        .button2 {
            font-family: 'Nunito', serif;
            background-color: transparent;
            border: 4px solid red;
            color: red;
            padding: 15px 30px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 35px;
            margin: 20px;
            cursor: pointer;
            border-radius: 20px;
            transition: background-color 0.3s, transform 0.2s;
            font-weight: 600;
        }
        .button2:hover {
            transform: scale(1.05);
        }
        .button3 {
            font-family: 'Nunito', serif;
            background-color: transparent;
            border: 4px solid brown;
            color: brown;
            padding: 15px 30px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 35px;
            margin: 20px;
            cursor: pointer;
            border-radius: 20px;
            transition: background-color 0.3s, transform 0.2s;
            font-weight: 600;
        }
        .button3:hover {
            transform: scale(1.05);
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
        .buttons-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(3, auto);
            text-align: center;
        }
        .khainiem { grid-column: 1; grid-row: 1; }
        .diemliet { grid-column: 2; grid-row: 1; }
        .bienbao { grid-column: 3; grid-row: 1; }
        .sahinh { grid-column: 1; grid-row: 2; }
        .tatca { grid-column: 2; grid-row: 2; }
        .kythuat { grid-column: 3; grid-row: 2; }
        .vanhoa { grid-column: 2; grid-row: 3; }
    </style>
</head>
<body>
    <!-- Video nền -->
    <video autoplay muted loop id="video-background">
        <source src="nendong.mp4" type="video/mp4">
        Trình duyệt của bạn không hỗ trợ video nền.
    </video>

    <div class="khung1">
        <!-- Chỉ giữ phần các nút -->
        <div class="buttons-container">
            <button class="button khainiem" onclick="chuyenTrang('khainiem')">Khái niệm và quy tắc (83 câu)</button>
            <button class="button2 diemliet" onclick="chuyenTrang('diemliet')">Các câu điểm liệt (20 câu)</button>
            <button class="button bienbao" onclick="chuyenTrang('bienbao')">Biển báo đường bộ (65 câu)</button>
            <button class="button sahinh" onclick="chuyenTrang('sahinh')">Sa hình (35 câu)</button>
            <button class="button3 tatca" onclick="chuyenTrang('tatca')">Tất cả các câu hỏi (200 câu)</button>
            <button class="button kythuat" onclick="chuyenTrang('kythuat')">Kỹ thuật (12 câu)</button>
            <button class="button vanhoa" onclick="chuyenTrang('vanhoa')">Văn hóa và đạo đức (5 câu)</button>
        </div>

        <button class="button-back" onclick="goBack()">&#8592; Quay lại</button>
    </div>

    <script>
    function chuyenTrang(chucNang) {
        if (chucNang === 'khainiem') {
            window.location.href = 'fileA1/knquytacA1.php';
        } else if (chucNang === 'diemliet') {
            window.location.href = '';
        } else if (chucNang === 'bienbao') {
            window.location.href = '';
        } else if (chucNang === 'sahinh') {
            window.location.href = '';
        } else if (chucNang === 'tatca') {
            window.location.href = '';
        } else if (chucNang === 'kythuat') {
            window.location.href = '';
        } else if (chucNang === 'vanhoa') {
            window.location.href = '';
        }
    }

    function goBack() {
        window.history.back();
    }
    </script>
</body>
</html>
