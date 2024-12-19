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
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background-image: url('nen.jpg');
            background-size: cover;
            background-position: center;
        }

        header {
            background-color: rgba(255, 255, 255, 0.6);
            padding: 35px;
            text-align: center;
            border-radius: 15px;
            border: 2px solid #36454F;
            height: 90px;
        }

        h1 {
            margin: 0;
            font-size: 35px;
            color: #36454F;
        }

        h2 {
            font-size: 20px;
            color: #36454F;
        }

        h3 {
            font-size: 30px;
            color: #36454F;
        }

        .dieu-huong-cau-hoi {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .dieu-huong-cau-hoi button {
            font-family: 'Nunito', serif;
            margin: 0 5px;
            padding: 5px 10px;
            border: 2px solid #36454F;
            background-color: transparent;
            color: #36454F;
            cursor: pointer;
            border-radius: 15px;
            width: 100px;
            font-size: 15px;
            transition: background-color 0.3s, transform 0.2s;
            font-weight: 600;
        }

        .dieu-huong-cau-hoi button:hover {
            transform: scale(1.05);
        }

        .dieu-huong-cau-hoi button.completed {
            background-color: #36454F;
            color: white;
        }

        .main-content {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .cau-hoi {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            border-radius: 15px;
            padding: 10px;
            background-color: rgba(255, 255, 255, 0.6);
            font-size: 32px;
            overflow-y: auto;
            border-left: 2px solid #36454F;
            border-right: 2px solid #36454F;
            color: #36454F;
        }

        .cau-hoi p {
            margin-top: 10px;
            margin-bottom: 35px;
            font-size: 30px;
            color: #36454F;
            font-weight: 600;
        }

        .nut-dieu-huong {
            text-align: center;
            border-radius: 15px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.6);
            position: relative; /* Đặt vị trí tương đối cho container */
            border: 2px solid #36454F;
        }

        .nut-dieu-huong button {
            font-family: 'Nunito', serif;
            border: 2px solid #36454F;
            padding: 10px 20px;
            margin: 0 10px;
            background-color: transparent;
            color: #36454F;
            cursor: pointer;
            border-radius: 15px;
            font-size: 18px;
            transition: background-color 0.3s, transform 0.2s;
            font-weight: 600;
        }

        .nut-dieu-huong button:hover {
            transform: scale(1.05);
        }

        /* Đồng hồ đếm ngược */
        #dongHoDemNguoc {
            font-size: 18px;
            padding: 10px 20px;
            border-radius: 15px;
            color: #36454F;
            cursor: auto;
            margin-right: 70px; /* Điều chỉnh giá trị theo ý muốn */
            margin-left: 100px;
        }

        #nopBai {
            margin-left: 50px; /* Điều chỉnh giá trị theo ý muốn */
            margin-right: 100px;
        }

        #thoat {
            font-size: 18px;
            padding: 10px 20px;
            border-radius: 15px;
            color: #36454F;
            cursor: pointer;
            margin-right: 130px; /* Điều chỉnh giá trị theo ý muốn */
        }

        #nutCauSai {
            margin-left: 120px; /* Điều chỉnh giá trị theo ý muốn */
        }
        
        /* Hộp thoại xác nhận và kết quả */
        .xac-nhan {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1000;
        }

        .xac-nhan-noi-dung {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 15px;
            text-align: center;
            border: 2px solid #36454F;
        }

        .xac-nhan-noi-dung p {
            margin-top: 0;
            font-size: 18px;
        }

        .xac-nhan-noi-dung button {
            font-family: 'Nunito', serif;
            padding: 10px 20px;
            margin: 10px;
            border: 2px solid #36454F;
            background-color: transparent;
            color: #36454F;
            cursor: pointer;
            border-radius: 15px;
            font-size: 16px;
            transition: background-color 0.3s, transform 0.2s;
            font-weight: 600;
        }

        .xac-nhan-noi-dung button:hover {
            transform: scale(1.05);
        }

        .button-style {
            font-family: 'Nunito', serif;
            padding: 10px 20px;
            margin: 10px;
            border: none;
            background-color: transparent;
            color: #36454F;
            cursor: pointer;
            border-radius: 15px;
            font-size: 16px;
            transition: background-color 0.3s, transform 0.2s;
            font-weight: 600;
            border: 2px solid #36454F;
        }

        .button-style:hover {
            transform: scale(1.05);
        }

    </style>
</head>
<body>
    <header>
        <h1>Thi thử lý thuyết lái xe mô tô hạng A2</h1>
        <br>
        <div class="dieu-huong-cau-hoi">
            <!-- Bảng điều hướng cho 25 câu hỏi sẽ được thêm bằng JavaScript -->
        </div>
    </header>

<!-- Câu 1 -->
<div class="cau-hoi" id="cauHoi1">
    <p>Câu 1: Phần của đường bộ được sử dụng cho các phương tiện giao thông qua lại là gì?</p>
    <input type="radio" id="da1cau1" name="cau1" value="1">
    <label for="da1cau1">1- Phần mặt đường và lề đường.</label><br><br>
    <input type="radio" id="da2cau1" name="cau1" value="2">
    <label for="da2cau1">2- Phần đường xe chạy.</label><br><br>
    <input type="radio" id="da3cau1" name="cau1" value="3">
    <label for="da3cau1">3- Phần đường xe cơ giới.</label>
</div>

<!-- Câu 2 -->
<div class="cau-hoi" id="cauHoi2" style="display: none;">
    <p>Câu 2: “Cuộc đua xe chỉ được thực hiện khi nào?"</p>
    <input type="radio" id="da1cau2" name="cau2" value="1">
    <label for="da1cau2">1- Diễn ra trên đường phố không có người qua lại.</label><br><br>
    <input type="radio" id="da2cau2" name="cau2" value="2">
    <label for="da2cau2">2- Được người dân ủng hộ.</label><br><br>
    <input type="radio" id="da3cau2" name="cau2" value="3">
    <label for="da3cau2">3- Được cơ quan có thẩm quyền cấp phép.</label>
</div>

<!-- Câu 3 -->
<div class="cau-hoi" id="cauHoi3" style="display: none;">
    <p>Câu 3 (điểm liệt): Ở phần đường dành cho người đi bộ qua đường, trên cầu, đầu cầu, đường cao tốc, đường hẹp, đường dốc, tại nơi đường bộ giao nhau cùng mức với đường sắt có được quay đầu xe hay không?</p>
    <input type="radio" id="da1cau3" name="cau3" value="1">
    <label for="da1cau3">1- Được phép.</label><br><br>
    <input type="radio" id="da2cau3" name="cau3" value="2">
    <label for="da2cau3">2- Không được phép.</label><br><br>
    <input type="radio" id="da3cau3" name="cau3" value="3">
    <label for="da3cau3">3- Tùy từng trường hợp.</label>
</div>

<!-- Câu 4 -->
<div class="cau-hoi" id="cauHoi4" style="display: none;">
    <p>Câu 4: Người có GPLX mô tô hạng A1 không được phép điều khiển loại xe nào dưới đây?</p>
    <input type="radio" id="da1cau4" name="cau4" value="1">
    <label for="da1cau4">1- Xe mô tô có dung tích xi-lanh 125 cm<sup>3</sup>.</label><br><br>
    <input type="radio" id="da2cau4" name="cau4" value="2">
    <label for="da2cau4">2- Xe mô tô có dung tích xi-lanh từ 175 cm<sup>3</sup> trở lên.</label><br><br>
    <input type="radio" id="da3cau4" name="cau4" value="3">
    <label for="da3cau4">3- Xe mô tô có dung tích xi-lanh 100 cm<sup>3</sup>.</label>
</div>

<!-- Câu 5 -->
<div class="cau-hoi" id="cauHoi5" style="display: none;">
    <p>Câu 5: Khi đang điều khiển xe chạy trên đường biết có xe sau xin vượt nếu đủ điều kiện an toàn người lái xe phải làm gì?</p>
    <input type="radio" id="da1cau5" name="cau5" value="1">
    <label for="da1cau5">1- Tăng tốc độ và ra hiệu cho xe sau vượt, không được gây trở ngại cho xe sau vượt.</label><br><br>
    <input type="radio" id="da2cau5" name="cau5" value="2">
    <label for="da2cau5">2- Người điều khiển phương tiện phía trước phải giảm tốc độ, đi sát về bên phải của phần đường xe chạy cho đến khi xe sau đã vượt qua, không được gây trở ngại cho xe sau vượt.</label><br><br>
    <input type="radio" id="da3cau5" name="cau5" value="3">
    <label for="da3cau5">3- Cho xe tránh về bên trái mình và ra hiệu cho xe sau vượt; nếu có chướng ngại vật phía trước hoặc thiếu điều kiện an toàn chưa cho vượt được phải ra hiệu cho xe sau biết; cấm gây trở ngại cho xe xin vượt.</label>
</div>

<!-- Câu 6 -->
<div class="cau-hoi" id="cauHoi6" style="display: none;">
    <p>Câu 6 (điểm liệt): Người điều khiển xe mô tô hai bánh, xe gắn máy có được đi xe dàn hàng ngang; đi xe vào phần đường dành cho người đi bộ và phương tiện khác; sử dụng ô, điện thoại di động, thiết bị âm thanh (trừ thiết bị trợ thính) hay không?</p>
    <input type="radio" id="da1cau6" name="cau6" value="1">
    <label for="da1cau6">1- Được phép nhưng phải đảm bảo an toàn.</label><br><br>
    <input type="radio" id="da2cau6" name="cau6" value="2">
    <label for="da2cau6">2- Không được phép.</label><br><br>
    <input type="radio" id="da3cau6" name="cau6" value="3">
    <label for="da3cau6">3- Được phép tùy từng hoàn cảnh, điều kiện cụ thể.</label>
</div>

<!-- Câu 7 -->
<div class="cau-hoi" id="cauHoi7" style="display: none;">
    <p>Câu 7: Trên đường bộ ngoài khu vực đông dân cư, đường đôi có dải phân cách giữa (trừ đường cao tốc), loại xe nào dưới đây tham gia giao thông với tốc độ tối đa cho phép là 60 km/h?</p>
    <input type="radio" id="da1cau7" name="cau7" value="1">
    <label for="da1cau7">1- Ô tô kéo rơ moóc, ô tô kéo xe khác, ô tô trộn vữa, ô tô trộn bê tông, ô tô xi téc.</label><br><br>
    <input type="radio" id="da2cau7" name="cau7" value="2">
    <label for="da2cau7">2- Ô tô chở người trên 30 chỗ (trừ ô tô buýt), ô tô tải có trọng tải trên 3,5 tấn.</label><br><br>
    <input type="radio" id="da3cau7" name="cau7" value="3">
    <label for="da3cau7">3- Xe ô tô con, xe ô tô chở người đến 30 chỗ (trừ xe buýt), ô tô tải có trọng tải nhỏ hơn hoặc bằng 3,5 tấn.</label>
</div>

<!-- Câu 8 -->
<div class="cau-hoi" id="cauHoi8" style="display: none;">
    <p>Câu 8: Khi xe ô tô, mô tô đến gần vị trí giao nhau giữa đường bộ và đường sắt không có rào chắn, khi đèn tín hiệu màu đỏ đã bật sáng hoặc khi có tiếng chuông báo hiệu, người lái xe xử lý như thế nào?</p>
    <input type="radio" id="da1cau8" name="cau8" value="1">
    <label for="da1cau8">1- Giảm tốc độ cho xe vượt qua đường sắt.</label><br><br>
    <input type="radio" id="da2cau8" name="cau8" value="2">
    <label for="da2cau8">2- Nhanh chóng cho xe vượt qua đường sắt trước khi tàu hỏa tới.</label><br><br>
    <input type="radio" id="da3cau8" name="cau8" value="3">
    <label for="da3cau8">3- Giảm tốc độ cho xe vượt qua đường sắt trước khi tàu hỏa tới.</label><br><br>
    <input type="radio" id="da4cau8" name="cau8" value="4">
    <label for="da4cau8">4- Cho xe dừng ngay lại và giữ khoảng cách tối thiểu 5 mét tính từ ray gần nhất.</label>
</div>

<!-- Câu 9 -->
<div class="cau-hoi" id="cauHoi9" style="display: none;">
    <p>Câu 9: Trên làn đường dành cho ô tô có vũng nước lớn, có nhiều người đi xe mô tô trên làn đường bên cạnh, người lái xe ô tô xử lý như thế nào là có văn hóa giao thông?</p>
    <input type="radio" id="da1cau9" name="cau9" value="1">
    <label for="da1cau9">1- Cho xe chạy thật nhanh qua vũng nước.</label><br><br>
    <input type="radio" id="da2cau9" name="cau9" value="2">
    <label for="da2cau9">2- Giảm tốc độ cho xe chạy chậm qua vũng nước.</label><br><br>
    <input type="radio" id="da3cau9" name="cau9" value="3">
    <label for="da3cau9">3- Giảm tốc độ cho xe chạy qua làn đường dành cho mô tô để tránh vũng nước.</label>
</div>

<!-- Câu 10 -->
<div class="cau-hoi" id="cauHoi10" style="display: none;">
    <p>Câu 10: Khi tránh nhau trên đường hẹp, người lái xe cần phải chú ý những điểm nào để đảm bảo an toàn giao thông?</p>
    <input type="radio" id="da1cau10" name="cau10" value="1">
    <label for="da1cau10">1- Không nên đi cố vào đường hẹp; xe đi ở sườn núi nên dừng lại trước để nhường đường; khi dừng xe nhường đường phải đỗ ngay ngắn.</label><br><br>
    <input type="radio" id="da2cau10" name="cau10" value="2">
    <label for="da2cau10">2- Trong khi tránh nhau không nên đổi số; khi tránh nhau ban đêm, phải tắt đèn pha bật đèn cốt.</label><br><br>
    <input type="radio" id="da3cau10" name="cau10" value="3">
    <label for="da3cau10">3- Khi tránh nhau ban đêm, phải thường xuyên bật đèn pha tắt đèn cốt.</label><br><br>
    <input type="radio" id="da4cau10" name="cau10" value="4">
    <label for="da4cau10">4- Cả ý 1 và ý 2.</label>
</div>

<!-- Câu 11 -->
<div class="cau-hoi" id="cauHoi11" style="display: none;">
    <p>Câu 11: Thế nào là động cơ 4 kỳ?</p>
    <input type="radio" id="da1cau11" name="cau11" value="1">
    <label for="da1cau11">1- Là loại động cơ: Để hoàn thành một chu trình công tác của động cơ, pít tông thực hiện 2 (hai) hành trình, trong đó có một lần sinh công.</label><br><br>
    <input type="radio" id="da2cau11" name="cau11" value="2">
    <label for="da2cau11">2- Là loại động cơ: Để hoàn thành một chu trình công tác của động cơ, pít tông thực hiện 4 (bốn) hành trình, trong đó có một lần sinh công.</label>
</div>

<!-- Câu 12 -->
<div class="cau-hoi" id="cauHoi12" style="display: none;">
    <p>Câu 12: Biển nào cấm xe rẽ trái?</p>
    <!-- Đường dẫn file ảnh -->
    <img src="fileA2/tatcaA2.files/image020" style="width: 550px; float: left ">
    <div style="margin-left: 600px;">
        <input type="radio" id="da1cau12" name="cau12" value="1">
        <label for="da1cau12">1- Biển 1.</label><br><br>
        <input type="radio" id="da2cau12" name="cau12" value="2">
        <label for="da2cau12">2- Biển 2.</label><br><br>
        <input type="radio" id="da3cau12" name="cau12" value="3">
        <label for="da3cau12">3- Cả hai biển.</label>
    </div>
</div>

<!-- Câu 13 -->
<div class="cau-hoi" id="cauHoi13" style="display: none;">
    <p>Câu 13: Gặp biển nào xe xích lô được phép đi vào?</p>
    <!-- Đường dẫn file ảnh -->
    <img src="fileA2/tatcaA2.files/image034" style="width: 550px; float: left ">
    <div style="margin-left: 600px;">
        <input type="radio" id="da1cau13" name="cau13" value="1">
        <label for="da1cau13">1- Biển 1.</label><br><br>
        <input type="radio" id="da2cau13" name="cau13" value="2">
        <label for="da2cau13">2- Biển 2.</label><br><br>
        <input type="radio" id="da3cau13" name="cau13" value="3">
        <label for="da3cau13">3- Biển 3.</label><br><br>
        <input type="radio" id="da4cau13" name="cau13" value="4">
        <label for="da4cau13">4- Biển 1 và biển 2.</label>
    </div>
</div>

<!-- Câu 14 -->
<div class="cau-hoi" id="cauHoi14" style="display: none;">
    <p>Câu 14: Biển nào xe mô tô hai bánh không được đi vào?</p>
    <!-- Đường dẫn file ảnh -->
    <img src="fileA2/tatcaA2.files/image044" style="width: 550px; float: left ">
    <div style="margin-left: 600px;">
        <input type="radio" id="da1cau14" name="cau14" value="1">
        <label for="da1cau14">1- Biển 1.</label><br><br>
        <input type="radio" id="da2cau14" name="cau14" value="2">
        <label for="da2cau14">2- Biển 2.</label><br><br>
        <input type="radio" id="da3cau14" name="cau14" value="3">
        <label for="da3cau14">3- Biển 3.</label>
    </div>
</div>

<!-- Câu 15 -->
<div class="cau-hoi" id="cauHoi15" style="display: none;">
    <p>Câu 15: Biển nào chỉ đường dành cho người đi bộ, các loại xe không được đi vào khi gặp biển này?</p>
    <!-- Đường dẫn file ảnh -->
    <img src="fileA2/tatcaA2.files/image057" style="width: 550px; float: left ">
    <div style="margin-left: 600px;">
        <input type="radio" id="da1cau15" name="cau15" value="1">
        <label for="da1cau15">1- Biển 1.</label><br><br>
        <input type="radio" id="da2cau15" name="cau15" value="2">
        <label for="da2cau15">2- Biển 1 và 3.</label><br><br>
        <input type="radio" id="da3cau15" name="cau15" value="3">
        <label for="da3cau15">3- Biển 3.</label><br><br>
        <input type="radio" id="da4cau15" name="cau15" value="4">
        <label for="da4cau15">4- Cả 3 Biển.</label>
    </div>
</div>

<!-- Câu 16 -->
<div class="cau-hoi" id="cauHoi16" style="display: none;">
    <p>Câu 16: Biển nào báo hiệu “Giao nhau với đường ưu tiên”?</p>
    <!-- Đường dẫn file ảnh -->
    <img src="fileA2/tatcaA2.files/image071" style="width: 550px; float: left ">
    <div style="margin-left: 600px;">
        <input type="radio" id="da1cau16" name="cau16" value="1">
        <label for="da1cau16">1- Biển 1.</label><br><br>
        <input type="radio" id="da2cau16" name="cau16" value="2">
        <label for="da2cau16">2- Biển 2.</label><br><br>
        <input type="radio" id="da3cau16" name="cau16" value="3">
        <label for="da3cau16">3- Biển 3.</label>
    </div>
</div>

<!-- Câu 17 -->
<div class="cau-hoi" id="cauHoi17" style="display: none;">
    <p>Câu 17: Biển nào sau đây là biển “Kè, vực sâu bên đường phía bên trái”?</p>
    <!-- Đường dẫn file ảnh -->
    <img src="fileA2/tatcaA2.files/image084" style="width: 550px; float: left ">
    <div style="margin-left: 600px;">
        <input type="radio" id="da1cau17" name="cau17" value="1">
        <label for="da1cau17">1- Biển 1.</label><br><br>
        <input type="radio" id="da2cau17" name="cau17" value="2">
        <label for="da2cau17">2- Biển 2.</label><br><br>
        <input type="radio" id="da3cau17" name="cau17" value="3">
        <label for="da3cau17">3- Biển 3.</label><br><br>
        <input type="radio" id="da4cau17" name="cau17" value="4">
        <label for="da4cau17">4- Biển 1 và biển 2.</label>
    </div>
</div>

<!-- Câu 18 -->
<div class="cau-hoi" id="cauHoi18" style="display: none;">
    <p>Câu 18: Biển báo này có ý nghĩa gì?</p>
    <!-- Đường dẫn file ảnh -->
    <img src="fileA2/tatcaA2.files/image100" style="width: 550px; float: left ">
    <div style="margin-left: 600px;">
        <input type="radio" id="da1cau18" name="cau18" value="1">
        <label for="da1cau18">1- Để báo trước gần tới đoạn đường có hiện tượng đất đá từ trên ta luy dương sụt lở bất ngờ gây nguy hiểm cho xe cộ và người đi đường.</label><br><br>
        <input type="radio" id="da2cau18" name="cau18" value="2">
        <label for="da2cau18">2- Để báo trước nơi có kết cấu mặt đường rời rạc, khi phương tiện đi qua, làm cho các viên đá, sỏi băng lên gây nguy hiểm và mất an toàn cho người và phương tiện tham gia giao thông.</label><br><br>
        <input type="radio" id="da3cau18" name="cau18" value="3">
        <label for="da3cau18">3- Để cảnh báo những đoạn nền đường yếu, đoạn đường đang theo dõi lún mà việc vận hành xe ở tốc độ cao có thể gây nguy hiểm.</label>
    </div>
</div>

<!-- Câu 19 -->
<div class="cau-hoi" id="cauHoi19" style="display: none;">
    <p>Câu 19: Biển nào cho phép được quay đầu xe đi theo hướng ngược lại khi đặt biển trước ngã ba, ngã tư?</p>
    <!-- Đường dẫn file ảnh -->
    <img src="fileA2/tatcaA2.files/image112" style="width: 550px; float: left ">
    <div style="margin-left: 600px;">
        <input type="radio" id="da1cau19" name="cau19" value="1">
        <label for="da1cau19">1- Biển 1.</label><br><br>
        <input type="radio" id="da2cau19" name="cau19" value="2">
        <label for="da2cau19">2- Biển 2.</label><br><br>
        <input type="radio" id="da3cau19" name="cau19" value="3">
        <label for="da3cau19">3- Biển 3.</label><br><br>
        <input type="radio" id="da4cau19" name="cau19" value="4">
        <label for="da4cau19">4- Không biển nào.</label>
    </div>
</div>

<!-- Câu 20 -->
<div class="cau-hoi" id="cauHoi20" style="display: none;">
    <p>Câu 20: Biển số 1 có ý nghĩa gì?</p>
    <!-- Đường dẫn file ảnh -->
    <img src="fileA2/tatcaA2.files/image128" style="width: 550px; float: left ">
    <div style="margin-left: 600px;">
        <input type="radio" id="da1cau20" name="cau20" value="1">
        <label for="da1cau20">1- Đi thẳng hoặc rẽ trái trên cầu vượt.</label><br><br>
        <input type="radio" id="da2cau20" name="cau20" value="2">
        <label for="da2cau20">2- Đi thẳng hoặc rẽ phải trên cầu vượt.</label><br><br>
        <input type="radio" id="da3cau20" name="cau20" value="3">
        <label for="da3cau20">3- Báo hiệu cầu vượt liên thông.</label>
    </div>
</div>

<!-- Câu 21 -->
<div class="cau-hoi" id="cauHoi21" style="display: none;">
    <p>Câu 21: Vạch kẻ đường nào dưới đây là vạch phân chia hai chiều xe chạy (vạch tim đường)?</p>
    <!-- Đường dẫn file ảnh -->
    <img src="fileA2/tatcaA2.files/image148" style="width: 550px; float: left ">
    <div style="margin-left: 600px;">
        <input type="radio" id="da1cau21" name="cau21" value="1">
        <label for="da1cau21">1- Vạch 1.</label><br><br>
        <input type="radio" id="da2cau21" name="cau21" value="2">
        <label for="da2cau21">2- Vạch 2.</label><br><br>
        <input type="radio" id="da3cau21" name="cau21" value="3">
        <label for="da3cau21">3- Vạch 3.</label><br><br>
        <input type="radio" id="da4cau21" name="cau21" value="4">
        <label for="da4cau21">4- Vạch 1 và vạch 3.</label>
    </div>
</div>

<!-- Câu 22 -->
<div class="cau-hoi" id="cauHoi22" style="display: none;">
    <p>Câu 22: Theo tín hiệu đèn, xe tải đi theo hướng nào là đúng quy tắc giao thông?</p>
    <!-- Đường dẫn file ảnh -->
    <img src="fileA2/tatcaA2.files/image167" style="width: 550px; float: left ">
    <div style="margin-left: 600px;">
        <input type="radio" id="da1cau22" name="cau22" value="1">
        <label for="da1cau22">1- Hướng 2, 3, 4.</label><br><br>
        <input type="radio" id="da2cau22" name="cau22" value="2">
        <label for="da2cau22">2- Chỉ hướng 1.</label><br><br>
        <input type="radio" id="da3cau22" name="cau22" value="3">
        <label for="da3cau22">3- Hướng 1 và 2.</label><br><br>
        <input type="radio" id="da4cau22" name="cau22" value="4">
        <label for="da4cau22">4- Hướng 3 và 4.</label>
    </div>
</div>

<!-- Câu 23 -->
<div class="cau-hoi" id="cauHoi23" style="display: none;">
    <p>Câu 23: Các xe đi như thế nào là đúng quy tắc giao thông?</p>
    <!-- Đường dẫn file ảnh -->
    <img src="fileA2/tatcaA2.files/image185" style="width: 550px; float: left ">
    <div style="margin-left: 600px;">
        <input type="radio" id="da1cau23" name="cau23" value="1">
        <label for="da1cau23">1- Các xe ở phía tay phải và tay trái của người điều khiển được phép đi thẳng.</label><br><br>
        <input type="radio" id="da2cau23" name="cau23" value="2">
        <label for="da2cau23">2- Cho phép các xe ở mọi hướng được rẽ phải.</label><br><br>
        <input type="radio" id="da3cau23" name="cau23" value="3">
        <label for="da3cau23">3- Tất cả các xe phải dừng lại trước ngã tư, trừ những xe đã ở trong ngã tư được phép tiếp tục đi.</label>
    </div>
</div>

<!-- Câu 24 -->
<div class="cau-hoi" id="cauHoi24" style="display: none;">
    <p>Câu 24: Xe nào đi trước là đúng quy tắc giao thông?</p>
    <!-- Đường dẫn file ảnh -->
    <img src="fileA2/tatcaA2.files/image203" style="width: 550px; float: left ">
    <div style="margin-left: 600px;">
        <input type="radio" id="da1cau24" name="cau24" value="1">
        <label for="da1cau24">1- Xe của bạn.</label><br><br>
        <input type="radio" id="da2cau24" name="cau24" value="2">
        <label for="da2cau24">2- Xe tải.</label>
    </div>
</div>

<!-- Câu 25 -->
<div class="cau-hoi" id="cauHoi25" style="display: none;">
    <p>Câu 25: Bạn xử lý như thế nào trong trường hợp này?</p>
    <!-- Đường dẫn file ảnh -->
    <img src="fileA2/tatcaA2.files/image221" style="width: 550px; float: left ">
    <div style="margin-left: 600px;">
        <input type="radio" id="da1cau25" name="cau25" value="1">
        <label for="da1cau25">1- Tăng tốc độ, rẽ phải trước xe tải và xe đạp.</label><br><br>
        <input type="radio" id="da2cau25" name="cau25" value="2">
        <label for="da2cau25">2- Giảm tốc độ, rẽ phải sau xe tải và xe đạp.</label><br><br>
        <input type="radio" id="da3cau25" name="cau25" value="3">
        <label for="da3cau25">3- Tăng tốc độ, rẽ phải trước xe đạp.</label>
    </div>
</div>

    <!-- Nút điều hướng và đồng hồ đếm ngược -->
    <div class="nut-dieu-huong">
        <button id="dongHoDemNguoc"></button>
        <button id="thoat" style="display:none; margin-right: 70px; margin-left: 100px" onclick="window.location.href='chonchucnangA1.php'">Về menu chính</button>
        <button id="cauTruoc" style="margin-right: 20px; margin-left: 90px" onclick="cauTruoc()">Câu Trước</button>
        <button id="cauTiep" style="margin-right: 150px; " onclick="cauTiep()">Câu Tiếp</button>
        <button id="nopBai" style="margin-left: 50px; margin-right: 100px;" >Nộp bài</button>
        <button id="nutCauSai" style="display:none; margin-left: 50px; margin-right: 100px;">Các câu sai</button>
    </div>

    <!-- Hộp thoại xác nhận -->
<div id="xacNhanNopBai" class="xac-nhan" style="display: none;">
    <div class="xac-nhan-noi-dung">
        <h3>Bạn có chắc là muốn nộp bài không?</h3>
        <button onclick="xacNhanNopBai(true)">Có</button>
        <button onclick="xacNhanNopBai(false)">Không</button>
    </div>
</div>

<!-- Hộp thoại kết quả -->
<div id="ketQuaBaiThi" class="xac-nhan" style="display: none;">
    <div class="xac-nhan-noi-dung">
        <h3 id="noiDungKetQua"></h3>
        <button onclick="dongKetQua()">Đóng</button>
    </div>
</div>

    <script>

        // Đáp án của 25 câu hỏi
        const dapAn = [2, 3, 2, 2, 2, 2, 1, 4, 2, 4, 2, 1, 4, 2, 3, 3, 3, 1, 3, 3, 4, 2, 3, 2, 2];

        // Hiển thị câu hỏi đầu tiên khi trang được tải
        document.getElementById('cauHoi1').style.display = 'block';

        // JavaScript code để tạo bảng điều hướng cho 25 câu hỏi
        for (let i = 1; i <= 25; i++) {
            const nutDieuHuong = document.createElement('button');
            nutDieuHuong.textContent = i;
            nutDieuHuong.addEventListener('click', function() {
                datNutDieuHuongHienTai(this);
                hienThiCauHoi(i);
            });
            document.querySelector('.dieu-huong-cau-hoi').appendChild(nutDieuHuong);
        }

        // Hàm để đặt nút hiện tại thành active
        function datNutDieuHuongHienTai(nutDieuHuong) {
            const cacNutDieuHuong = document.querySelectorAll('.dieu-huong-cau-hoi button');
            cacNutDieuHuong.forEach(nut => nut.classList.remove('active'));
            nutDieuHuong.classList.add('active');
        }

        // Hàm để đặt nút điều hướng thành completed khi câu hỏi đã có đáp án được chọn
        function datNutDieuHuongHoanThanh(soThuTuCauHoi) {
            const nutDieuHuong = document.querySelector(`.dieu-huong-cau-hoi button:nth-child(${soThuTuCauHoi})`);
            nutDieuHuong.classList.add('completed');
        }

        // Hàm để kiểm tra xem câu hỏi đã có đáp án được chọn chưa
        function kiemTraCauHoiHoanThanh(soThuTuCauHoi) {
            const cacLuaChon = document.querySelectorAll(`.cau-hoi#cauHoi${soThuTuCauHoi} input[type='radio']`);
            for (let i = 0; i < cacLuaChon.length; i++) {
                if (cacLuaChon[i].checked) {
                    return true;
                }
            }
            return false;
        }

        // Thêm sự kiện để kiểm tra khi một câu hỏi được chọn đáp án
        document.querySelectorAll('.cau-hoi').forEach((cauHoi, index) => {
            cauHoi.addEventListener('change', function() {
                const daHoanThanh = kiemTraCauHoiHoanThanh(index + 1);
                if (daHoanThanh) {
                    datNutDieuHuongHoanThanh(index + 1);
                }
            });
        });

        // Hàm hiển thị câu hỏi tương ứng
        function hienThiCauHoi(soThuTuCauHoi) {
            const cacCauHoi = document.querySelectorAll('.cau-hoi');
            cacCauHoi.forEach(cauHoi => {
                cauHoi.style.display = 'none';
            });
            document.querySelector(`#cauHoi${soThuTuCauHoi}`).style.display = 'block';
        }

        // Hàm xử lý khi nhấn nút "Câu Trước"
        function cauTruoc() {
            const cacCauHoi = document.querySelectorAll('.cau-hoi');
            let viTriHienTai = 0;
            for (let i = 0; i < cacCauHoi.length; i++) {
                if (cacCauHoi[i].style.display === 'block') {
                    viTriHienTai = i;
                    break;
                }
            }
            if (viTriHienTai > 0) {
                cacCauHoi[viTriHienTai].style.display = 'none';
                cacCauHoi[viTriHienTai - 1].style.display = 'block';
                const cacNutDieuHuong = document.querySelectorAll('.dieu-huong-cau-hoi button');
                datNutDieuHuongHienTai(cacNutDieuHuong[viTriHienTai - 1]);
            }
        }

        // Hàm xử lý khi nhấn nút "Câu Tiếp"
        function cauTiep() {
            const cacCauHoi = document.querySelectorAll('.cau-hoi');
            let viTriHienTai = 0;
            for (let i = 0; i < cacCauHoi.length; i++) {
                if (cacCauHoi[i].style.display === 'block') {
                    viTriHienTai = i;
                    break;
                }
            }
            if (viTriHienTai < cacCauHoi.length - 1) {
                cacCauHoi[viTriHienTai].style.display = 'none';
                cacCauHoi[viTriHienTai + 1].style.display = 'block';
                const cacNutDieuHuong = document.querySelectorAll('.dieu-huong-cau-hoi button');
                datNutDieuHuongHienTai(cacNutDieuHuong[viTriHienTai + 1]);
            }
        }

// Hàm kiểm tra số câu đúng và xác định kết quả
function kiemTraKetQua() {
    const cacCauHoi = document.querySelectorAll('.cau-hoi');
    let soCauDung = 0;
    let coCauDiemLietSai = false;

    for (let i = 0; i < cacCauHoi.length; i++) {
        const luaChon = document.querySelector(`.cau-hoi#cauHoi${i + 1} input[type='radio']:checked`);
        if (luaChon) {
            const dapAnLuaChon = parseInt(luaChon.value);
            if (dapAnLuaChon === dapAn[i]) {
                soCauDung++;
            } else if ([3, 6].includes(i + 1)) { // Kiểm tra nếu câu là câu điểm liệt và đã chọn sai
                coCauDiemLietSai = true;
            }
        } else if ([3, 6].includes(i + 1)) { // Kiểm tra nếu câu là câu điểm liệt và chưa chọn đáp án
            coCauDiemLietSai = true;
        }
    }

    let ketQua = soCauDung >= 23 && !coCauDiemLietSai ? "Đạt" : "Không đạt";
    const noiDungKetQua = `Kết quả: ${ketQua}\nSố câu đúng: ${soCauDung}/25`;
    document.getElementById('noiDungKetQua').innerText = noiDungKetQua;
    document.getElementById('ketQuaBaiThi').style.display = 'flex';

    // Ẩn đồng hồ đếm ngược và nút nộp bài
    document.getElementById('dongHoDemNguoc').style.display = 'none';
    document.getElementById('nopBai').style.display = 'none';
    // Hiển thị nút "Thoát" và nút "Các câu sai"
    document.getElementById('thoat').style.display = 'inline-block';
    document.getElementById('nutCauSai').style.display = 'inline-block';

    // Ẩn hộp thoại xác nhận
    document.getElementById('xacNhanNopBai').style.display = 'none';

    // Khóa tất cả các nút radio 
    const allRadios = document.querySelectorAll('input[type="radio"]'); 
    allRadios.forEach(radio => radio.disabled = true);

    // Kiểm tra bộ nhớ đệm và tiến hành lưu nếu có tên
    const tenDaLuu = localStorage.getItem("ten");
    if (tenDaLuu) {
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "luuketqua.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                console.log("Dữ liệu đã được lưu thành công.");
                localStorage.removeItem("ten");
            }
        };
        const data = `ten=${encodeURIComponent(tenDaLuu)}&socau=${soCauDung}&ketqua=${encodeURIComponent(ketQua)}`;
        xhr.send(data);
    }
}



// Hàm đóng hộp thoại kết quả
function dongKetQua() {
    document.getElementById('ketQuaBaiThi').style.display = 'none';
}


// Biến lưu trữ trạng thái đúng hay sai
let laDungTatCa = true;

// Hàm kiểm tra từng câu hỏi
function kiemTraCauHoi() {
    let coCauSai = false;
    let cauSai = [];
    
    for (let i = 0; i < dapAn.length; i++) {
        const luaChon = document.querySelector(`.cau-hoi#cauHoi${i + 1} input[type='radio']:checked`);
        if (!luaChon || parseInt(luaChon.value) !== dapAn[i]) {
            coCauSai = true;
            cauSai.push(i + 1);
        }
    }
    
    if (coCauSai) {
        hienThiThongBao(cauSai);
        laDungTatCa = false;
    } else {
        hienThiThongBaoDung();
        laDungTatCa = true;
    }
}

function hienThiThongBao(cauSai) {
    const thongBao = document.createElement('div');
    thongBao.classList.add('thong-bao');
    thongBao.style.display = 'none'; // Ẩn thông báo ngay khi tạo
    
    // Tạo phần tiêu đề của thông báo
    const tieuDe = document.createElement('h1');
    tieuDe.textContent = 'Các câu sai:';
    thongBao.appendChild(tieuDe);

    // Tạo danh sách các câu sai và đáp án
    const danhSachCauSai = document.createElement('ul');
    danhSachCauSai.style.overflowY = 'auto'; // Thêm thanh cuộn dọc cho danh sách
    danhSachCauSai.style.maxHeight = '50vh'; // Giới hạn chiều cao của danh sách
    cauSai.forEach(cau => {
        const luaChon = document.querySelector(`.cau-hoi#cauHoi${cau} input[type='radio']:checked`);
        const dapAnDung = dapAn[cau - 1];
        const noiDungCauHoi = document.querySelector(`.cau-hoi#cauHoi${cau} p`).textContent;
        
        // Lấy nội dung của đáp án từ câu hỏi
        const noiDungDapAnLabel = document.querySelector(`.cau-hoi#cauHoi${cau} label[for='da${dapAnDung}cau${cau}']`).textContent;
        const noiDungDapAn = noiDungDapAnLabel.substring(noiDungDapAnLabel.indexOf('-') + 1).trim();
        
        let dapAnDaChon = "Không có";
        if (luaChon) {
            const noiDungLuaChonLabel = luaChon.nextElementSibling.textContent;
            dapAnDaChon = noiDungLuaChonLabel.substring(noiDungLuaChonLabel.indexOf('-') + 1).trim();
        }
        
        const item = document.createElement('li');
        item.innerHTML = `
            <p>${noiDungCauHoi}</p>
            <p>Đáp án đã chọn: ${dapAnDaChon}</p>
            <p>Đáp án đúng: ${noiDungDapAn}</p>`;
        danhSachCauSai.appendChild(item);
    });
    thongBao.appendChild(danhSachCauSai);

    // Tạo nút Đóng
    const nutDong = document.createElement('button');
    nutDong.textContent = 'Đóng';
    nutDong.classList.add('button-style');
    nutDong.addEventListener('click', function() {
        thongBao.style.display = 'none';
    });
    thongBao.appendChild(nutDong);

    // Thiết lập style cho thông báo
    thongBao.style.position = 'fixed';
    thongBao.style.top = '50%';
    thongBao.style.left = '50%';
    thongBao.style.transform = 'translate(-50%, -50%)';
    thongBao.style.backgroundColor = 'rgba(255, 255, 255, 0.9)';
    thongBao.style.padding = '20px';
    thongBao.style.borderRadius = '15px';
    thongBao.style.boxShadow = '0 0 10px rgba(0, 0, 0, 0.3)';
    
    document.body.appendChild(thongBao);

    // Căn nút Đóng sang bên phải
    nutDong.style.float = 'right';
}


// Hàm hiển thị thông báo đúng
function hienThiThongBaoDung() {
    const thongBao = document.createElement('div');
    thongBao.classList.add('thong-bao');
    thongBao.style.display = 'none'; // Ẩn thông báo ngay khi tạo
    
    // Tạo nội dung thông báo
    const noiDung = document.createElement('h3');
    noiDung.textContent = 'Bạn đã trả lời đúng tất cả các câu hỏi';
    thongBao.appendChild(noiDung);

    // Tạo nút Đóng
    const nutDong = document.createElement('button');
    nutDong.textContent = 'Đóng';
    nutDong.classList.add('button-style');
    nutDong.addEventListener('click', function() {
        thongBao.style.display = 'none';
    });
    thongBao.appendChild(nutDong);

    // Thiết lập style cho thông báo
    thongBao.style.position = 'fixed';
    thongBao.style.top = '50%';
    thongBao.style.left = '50%';
    thongBao.style.transform = 'translate(-50%, -50%)';
    thongBao.style.backgroundColor = 'rgba(255, 255, 255, 0.9)';
    thongBao.style.padding = '20px';
    thongBao.style.borderRadius = '15px';
    thongBao.style.boxShadow = '0 0 10px rgba(0, 0, 0, 0.3)';
    
    document.body.appendChild(thongBao);

    // Căn nút Đóng sang bên phải
    nutDong.style.float = 'right';
}

// Lấy nút "Các câu sai"
const nutCauSai = document.getElementById('nutCauSai');

// Thêm sự kiện click cho nút "Các câu sai"
nutCauSai.addEventListener('click', function() {
    // Lấy thông báo
    const thongBao = document.querySelector('.thong-bao');
    
    // Kiểm tra xem thông báo có tồn tại không
    if (thongBao) {
        // Hiển thị lại thông báo
        thongBao.style.display = 'block';
    } else { 
        // Gọi hàm hiển thị thông báo dựa vào trạng thái đúng hay sai
        if (laDungTatCa) {
            hienThiThongBaoDung();
        } else {
            hienThiThongBao(cauSai);
        }
    }
});

        // Xử lý khi nhấn nút "Nộp bài"
document.getElementById('nopBai').addEventListener('click', function() {
    document.getElementById('xacNhanNopBai').style.display = 'flex'; // Hiển thị hộp thoại xác nhận
});

// Hàm xử lý xác nhận nộp bài
function xacNhanNopBai(dongY) {
    if (dongY) {
        kiemTraKetQua(); // Gọi hàm kiểm tra kết quả khi chọn "Có"
        kiemTraCauHoi();
    }
    document.getElementById('xacNhanNopBai').style.display = 'none'; // Ẩn hộp thoại xác nhận
}

// Hàm đếm ngược thời gian
function demNguoc() {
    var thoiGian = 19 * 60; // 19 phút tính bằng giây
    var dongHoDemNguoc = document.getElementById('dongHoDemNguoc');

    var dem = setInterval(function() {
        var phut = Math.floor(thoiGian / 60);
        var giay = thoiGian % 60;

        dongHoDemNguoc.innerHTML = phut + ' phút ' + giay + ' giây ';

        thoiGian--;

        if (thoiGian < 0) {
            clearInterval(dem);
            kiemTraKetQua(); // Gọi hàm kiểm tra kết quả khi hết thời gian
            kiemTraCauHoi();
        }
    }, 1000);
}

// Gọi hàm đếm ngược khi trang được tải
demNguoc();

    </script>

</body>
</html>
