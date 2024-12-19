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
    <p>Câu 1: Khái niệm “khổ giới hạn của đường bộ” được hiểu như thế nào là đúng?</p>
        <input type="radio" id="da1cau1" name="cau1" value="1">
        <label for="da1cau1">1- Là khoảng trống có kích thước giới hạn về chiều cao, chiều rộng của đường, cầu, bến phà, hầm đường bộ để các xe kể cả hàng hóa xếp trên xe đi qua được an toàn.</label><br><br>
        <input type="radio" id="da2cau1" name="cau1" value="2">
        <label for="da2cau1">2- Là khoảng trống có kích thước giới hạn về chiều rộng của đường, cầu, bến phà, hầm trên đường bộ để các xe kể cả hàng hóa xếp trên xe đi qua được an toàn.</label><br><br>
        <input type="radio" id="da3cau1" name="cau1" value="3">
        <label for="da3cau1">3- Là khoảng trống có kích thước giới hạn về chiều cao của cầu, bến phà, hầm trên đường bộ để các xe đi qua được an toàn.</label><br><br>
</div>

<!-- Câu 2 -->
<div class="cau-hoi" id="cauHoi2" style="display: none;">
    <p>Câu 2 (điểm liệt): Việc lái xe mô tô, ô tô, máy kéo ngay sau khi uống rượu, bia có được phép hay không?</p>
        <input type="radio" id="da1cau2" name="cau2" value="1">
        <label for="da1cau2">1- Không được phép.</label><br><br>
        <input type="radio" id="da2cau2" name="cau2" value="2">
        <label for="da2cau2">2- Chỉ được lái ở tốc độ chậm và quãng đường ngắn.</label><br><br>
        <input type="radio" id="da3cau2" name="cau2" value="3">
        <label for="da3cau2">3- Chỉ được lái nếu trong cơ thể có nồng độ cồn thấp.</label><br><br>
</div>

<!-- Câu 3 -->
<div class="cau-hoi" id="cauHoi3" style="display: none;">
    <p>Câu 3: Bạn đang lái xe phía trước có một xe cứu thương đang phát tín hiệu ưu tiên bạn có được phép vượt hay không?</p>
        <input type="radio" id="da1cau3" name="cau3" value="1">
        <label for="da1cau3">1- Không được vượt.</label><br><br>
        <input type="radio" id="da2cau3" name="cau3" value="2">
        <label for="da2cau3">2- Được vượt khi đang đi trên cầu.</label><br><br>
        <input type="radio" id="da3cau3" name="cau3" value="3">
        <label for="da3cau3">3- Được phép vượt khi đi qua nơi giao nhau có ít phương tiện cùng tham gia giao thông.</label><br><br>
        <input type="radio" id="da4cau3" name="cau3" value="4">
        <label for="da4cau3">4- Được vượt khi đảm bảo an toàn.</label>
</div>

<!-- Câu 4 -->
<div class="cau-hoi" id="cauHoi4" style="display: none;">
    <p>Câu 4: Người có GPLX mô tô hạng A2 được phép điều khiển loại xe nào dưới đây?</p>
        <input type="radio" id="da1cau4" name="cau4" value="1">
        <label for="da1cau4">1- Xe mô tô ba bánh.</label><br><br>
        <input type="radio" id="da2cau4" name="cau4" value="2">
        <label for="da2cau4">2- Xe mô tô hai bánh có dung tích xi-lanh từ 175 cm3 trở lên và các loại xe quy định cho giấy phép lái xe hạng A1.</label><br><br>
        <input type="radio" id="da3cau4" name="cau4" value="3">
        <label for="da3cau4">3- Các loại máy kéo nhỏ có trọng tải đến 1.000 kg.</label>
</div>

<!-- Câu 5 -->
<div class="cau-hoi" id="cauHoi5" style="display: none;">
    <p>Câu 5 (điểm liệt): Người lái xe phải làm gì khi quay đầu xe trên cầu, đường ngầm hay khu vực đường bộ giao nhau cùng mức với đường sắt?</p>
        <input type="radio" id="da1cau5" name="cau5" value="1">
        <label for="da1cau5">1- Không được quay đầu xe.</label><br><br>
        <input type="radio" id="da2cau5" name="cau5" value="2">
        <label for="da2cau5">2- Lợi dụng chỗ rộng và phải có người làm tín hiệu sau xe để bảo đảm an toàn.</label><br><br>
        <input type="radio" id="da3cau5" name="cau5" value="3">
        <label for="da3cau5">3- Lợi dụng chỗ rộng có thể quay đầu được để quay đầu xe cho an toàn.</label>
</div>

<!-- Câu 6 -->
<div class="cau-hoi" id="cauHoi6" style="display: none;">
    <p>Câu 6 (điểm liệt): Khi gặp một đoàn xe, một đoàn xe tang hay gặp một đoàn người có tổ chức theo đội ngũ, người lái xe phải xử lý như thế nào?</p>
        <input type="radio" id="da1cau6" name="cau6" value="1">
        <label for="da1cau6">1- Từ từ đi cắt qua đoàn người, đoàn xe.</label><br><br>
        <input type="radio" id="da2cau6" name="cau6" value="2">
        <label for="da2cau6">2- Không được cắt ngang qua đoàn người, đoàn xe.</label><br><br>
        <input type="radio" id="da3cau6" name="cau6" value="3">
        <label for="da3cau6">3- Báo hiệu từ từ cho xe đi cắt qua để bảo đảm an toàn.</label>
</div>

<!-- Câu 7 -->
<div class="cau-hoi" id="cauHoi7" style="display: none;">
    <p>Câu 7: Trên đường bộ ngoài khu vực đông dân cư, đường hai chiều không có dải phân cách giữa; đường một chiều có 01 làn xe cơ giới (trừ đường cao tốc), loại xe nào dưới đây tham gia giao thông với tốc độ tối đa cho phép là 70 km/h?</p>
        <input type="radio" id="da1cau7" name="cau7" value="1">
        <label for="da1cau7">1- Ô tô kéo rơ moóc, ô tô kéo xe khác, xe gắn máy.</label><br><br>
        <input type="radio" id="da2cau7" name="cau7" value="2">
        <label for="da2cau7">2- Ô tô chở người trên 30 chỗ (trừ ô tô buýt), ô tô tải có trọng tải trên 3,5 tấn (trừ ô tô xi téc).</label><br><br>
        <input type="radio" id="da3cau7" name="cau7" value="3">
        <label for="da3cau7">3- Xe ô tô con, xe ô tô chở người đến 30 chỗ (trừ xe buýt), ô tô tải có trọng tải nhỏ hơn hoặc bằng 3,5 tấn.</label>
</div>

<!-- Câu 8 -->
<div class="cau-hoi" id="cauHoi8" style="display: none;">
    <p>Câu 8 (điểm liệt): Người lái xe phải xử lý như thế nào khi quan sát phía trước thấy người đi bộ đang sang đường tại nơi có vạch đường dành cho người đi bộ để đảm bảo an toàn?</p>
        <input type="radio" id="da1cau8" name="cau8" value="1">
        <label for="da1cau8">1- Giảm tốc độ, đi từ từ để vượt qua trước người đi bộ.</label><br><br>
        <input type="radio" id="da2cau8" name="cau8" value="2">
        <label for="da2cau8">2- Giảm tốc độ, có thể dừng lại nếu cần thiết trước vạch dừng xe để nhường đường cho người đi bộ qua đường.</label><br><br>
        <input type="radio" id="da3cau8" name="cau8" value="3">
        <label for="da3cau8">3- Tăng tốc độ để vượt qua trước người đi bộ.</label>
</div>

<!-- Câu 9 -->
<div class="cau-hoi" id="cauHoi9" style="display: none;">
    <p>Câu 9: Khi sơ cứu người bị tai nạn giao thông đường bộ, có vết thương chảy máu ngoài, màu đỏ tươi phun thành tia và phun mạnh khi mạch đập, bạn phải làm gì dưới đây?</p>
        <input type="radio" id="da1cau9" name="cau9" value="1">
        <label for="da1cau9">1- Thực hiện cầm máu trực tiếp.</label><br><br>
        <input type="radio" id="da2cau9" name="cau9" value="2">
        <label for="da2cau9">2- Thực hiện cầm máu không trực tiếp (chặn động mạch).</label><br><br>
</div>

<!-- Câu 10 -->
<div class="cau-hoi" id="cauHoi10" style="display: none;">
    <p>Câu 10 (điểm liệt): Khi điều khiển xe qua đường sắt, người lái xe cần phải thực hiện các thao tác nào dưới đây để đảm bảo an toàn?</p>
        <input type="radio" id="da1cau10" name="cau10" value="1">
        <label for="da1cau10">1- Khi có chuông báo hoặc thanh chắn đã hạ xuống, người lái xe phải dừng xe tạm thời đúng khoảng cách an toàn, kéo phanh tay nếu đường dốc hoặc phải chờ lâu.</label><br><br>
        <input type="radio" id="da2cau10" name="cau10" value="2">
        <label for="da2cau10">2- Khi không có chuông báo hoặc thanh chắn không hạ xuống, người lái xe phải quan sát nếu thấy đủ điều kiện an toàn thì về số thấp, tăng ga nhẹ và không thay đổi số trong quá trình vượt qua đường sắt để tránh động cơ chết máy cho xe vượt qua.</label><br><br>
        <input type="radio" id="da3cau10" name="cau10" value="3">
        <label for="da3cau10">3- Cả ý 1 và ý 2.</label><br><br>
</div>

<!-- Câu 11 -->
<div class="cau-hoi" id="cauHoi11" style="display: none;">
    <p>Câu 11: Trên xe ô tô có trang bị thiết bị như hình vẽ có tác dụng gì dưới đây?</p>
    <!-- Thay đổi đường dẫn để chèn ảnh -->
    <img src="fileA2/tatcaA2.files/image007.jpg" style="width: 550px; float: left;">
    <div style="margin-left: 600px;">
        <input type="radio" id="da1cau11" name="cau11" value="1">
        <label for="da1cau11">1- Dùng để kích (hay nâng) xe ô tô.</label><br><br>
        <input type="radio" id="da2cau11" name="cau11" value="2">
        <label for="da2cau11">2- Vặn ốc lắp bánh xe.</label><br><br>
        <input type="radio" id="da3cau11" name="cau11" value="3">
        <label for="da3cau11">3- Ổn định chuyển động của xe ô tô khi đi vào đường vòng.</label><br><br>
        <input type="radio" id="da4cau11" name="cau11" value="4">
        <label for="da4cau11">4- Giữ chặt người lái và hành khách trên ghế ngồi khi xe ô tô đột ngột dừng lại.</label><br><br>
    </div>
</div>

<!-- Câu 12 -->
<div class="cau-hoi" id="cauHoi12" style="display: none;">
    <p>Câu 12: Biển nào cấm ô tô rẽ trái?</p>
    <!-- Thay đổi đường dẫn để chèn ảnh -->
    <img src="fileA2/tatcaA2.files/image021.jpg" style="width: 550px; float: left;">
    <div style="margin-left: 600px;">
        <input type="radio" id="da1cau12" name="cau12" value="1">
        <label for="da1cau12">1- Biển 1.</label><br><br>
        <input type="radio" id="da2cau12" name="cau12" value="2">
        <label for="da2cau12">2- Biển 2.</label><br><br>
        <input type="radio" id="da3cau12" name="cau12" value="3">
        <label for="da3cau12">3- Cả hai biển.</label><br><br>
    </div>
</div>

<!-- Câu 13 -->
<div class="cau-hoi" id="cauHoi13" style="display: none;">
    <p>Câu 13: Biển báo này có ý nghĩa gì?</p>
    <!-- Thay đổi đường dẫn để chèn ảnh -->
    <img src="fileA2/tatcaA2.files/image035.jpg" style="width: 550px; float: left;">
    <div style="margin-left: 600px;">
        <input type="radio" id="da1cau13" name="cau13" value="1">
        <label for="da1cau13">1- Đường cấm súc vật vận tải hàng hóa.</label><br><br>
        <input type="radio" id="da2cau13" name="cau13" value="2">
        <label for="da2cau13">2- Đường cấm súc vật vận tải hành khách.</label><br><br>
        <input type="radio" id="da3cau13" name="cau13" value="3">
        <label for="da3cau13">3- Đường cấm súc vật vận tải hàng hóa hoặc hành khách dù kéo xe hay chở trên lưng đi qua.</label><br><br>
    </div>
</div>

<!-- Câu 14 -->
<div class="cau-hoi" id="cauHoi14" style="display: none;">
    <p>Câu 14: Biển nào báo hiệu chiều dài đoạn đường phải giữ cự ly tối thiểu giữa hai xe?</p>
    <!-- Thay đổi đường dẫn để chèn ảnh -->
    <img src="fileA2/tatcaA2.files/image045.jpg" style="width: 550px; float: left;">
    <div style="margin-left: 600px;">
        <input type="radio" id="da1cau14" name="cau14" value="1">
        <label for="da1cau14">1- Biển 1.</label><br><br>
        <input type="radio" id="da2cau14" name="cau14" value="2">
        <label for="da2cau14">2- Biển 2.</label><br><br>
        <input type="radio" id="da3cau14" name="cau14" value="3">
        <label for="da3cau14">3- Cả hai biển.</label><br><br>
    </div>
</div>

<!-- Câu 15 -->
<div class="cau-hoi" id="cauHoi15" style="display: none;">
    <p>Câu 15: Biển nào báo hiệu sắp đến chỗ giao nhau nguy hiểm?</p>
    <!-- Thay đổi đường dẫn để chèn ảnh -->
    <img src="fileA2/tatcaA2.files/image059.jpg" style="width: 550px; float: left;">
    <div style="margin-left: 600px;">
        <input type="radio" id="da1cau15" name="cau15" value="1">
        <label for="da1cau15">1- Biển 1.</label><br><br>
        <input type="radio" id="da2cau15" name="cau15" value="2">
        <label for="da2cau15">2- Biển 1 và 2.</label><br><br>
        <input type="radio" id="da3cau15" name="cau15" value="3">
        <label for="da3cau15">3- Biển 2 và 3.</label><br><br>
        <input type="radio" id="da4cau15" name="cau15" value="4">
        <label for="da4cau15">4- Cả ba biển.</label><br><br>
    </div>
</div>

<!-- Câu 16 -->
<div class="cau-hoi" id="cauHoi16" style="display: none;">
    <p>Câu 16: Biển nào báo hiệu “Giao nhau với đường không ưu tiên”?</p>
    <!-- Thay đổi đường dẫn để chèn ảnh -->
    <img src="fileA2/tatcaA2.files/image071.jpg" style="width: 550px; float: left;">
    <div style="margin-left: 600px;">
        <input type="radio" id="da1cau16" name="cau16" value="1">
        <label for="da1cau16">1- Biển 1.</label><br><br>
        <input type="radio" id="da2cau16" name="cau16" value="2">
        <label for="da2cau16">2- Biển 2.</label><br><br>
        <input type="radio" id="da3cau16" name="cau16" value="3">
        <label for="da3cau16">3- Biển 3.</label><br><br>
    </div>
</div>

<!-- Câu 17 -->
<div class="cau-hoi" id="cauHoi17" style="display: none;">
    <p>Câu 17: Biển nào sau đây là biển “Đường trơn”?</p>
    <!-- Thay đổi đường dẫn để chèn ảnh -->
    <img src="fileA2/tatcaA2.files/image085.jpg" style="width: 550px; float: left;">
    <div style="margin-left: 600px;">
        <input type="radio" id="da1cau17" name="cau17" value="1">
        <label for="da1cau17">1- Biển 1.</label><br><br>
        <input type="radio" id="da2cau17" name="cau17" value="2">
        <label for="da2cau17">2- Biển 2.</label><br><br>
        <input type="radio" id="da3cau17" name="cau17" value="3">
        <label for="da3cau17">3- Biển 3.</label><br><br>
    </div>
</div>

<!-- Câu 18 -->
<div class="cau-hoi" id="cauHoi18" style="display: none;">
    <p>Câu 18: Gặp biển báo này người lái xe phải xử lý thế nào?</p>
    <!-- Thay đổi đường dẫn để chèn ảnh -->
    <img src="fileA2/tatcaA2.files/image102.jpg" style="width: 550px; float: left;">
    <div style="margin-left: 600px;">
        <input type="radio" id="da1cau18" name="cau18" value="1">
        <label for="da1cau18">1- Đi chậm, quan sát và dừng lại nếu gặp gia súc trên đường.</label><br><br>
        <input type="radio" id="da2cau18" name="cau18" value="2">
        <label for="da2cau18">2- Bấm còi to để gia súc tránh đường và nhanh chóng di chuyển qua đoạn đường có gia súc.</label><br><br>
    </div>
</div>

<!-- Câu 19 -->
<div class="cau-hoi" id="cauHoi19" style="display: none;">
    <p>Câu 19: Khi đến chỗ giao nhau, gặp biển nào thì người lái xe không được cho xe đi thẳng, phải rẽ sang hướng khác?</p>
    <!-- Thay đổi đường dẫn để chèn ảnh -->
    <img src="fileA2/tatcaA2.files/image113.jpg" style="width: 550px; float: left;">
    <div style="margin-left: 600px;">
        <input type="radio" id="da1cau19" name="cau19" value="1">
        <label for="da1cau19">1- Biển 1 và 2.</label><br><br>
        <input type="radio" id="da2cau19" name="cau19" value="2">
        <label for="da2cau19">2- Biển 1 và 3.</label><br><br>
        <input type="radio" id="da3cau19" name="cau19" value="3">
        <label for="da3cau19">3- Biển 2 và 3.</label><br><br>
        <input type="radio" id="da4cau19" name="cau19" value="4">
        <label for="da4cau19">4- Cả ba biển.</label><br><br>
    </div>
</div>

<!-- Câu 20 -->
<div class="cau-hoi" id="cauHoi20" style="display: none;">
    <p>Câu 20: Biển báo dưới đây có ý nghĩa gì?</p>
    <!-- Thay đổi đường dẫn để chèn ảnh -->
    <img src="fileA2/tatcaA2.files/image130.jpg" style="width: 550px; float: left;">
    <div style="margin-left: 600px;">
        <input type="radio" id="da1cau20" name="cau20" value="1">
        <label for="da1cau20">1- Chỉ dẫn khoảng cách đến làn đường cứu nạn (làn thoát xe khẩn cấp).</label><br><br>
        <input type="radio" id="da2cau20" name="cau20" value="2">
        <label for="da2cau20">2- Báo hiệu đường cụt phía trước.</label><br><br>
        <input type="radio" id="da3cau20" name="cau20" value="3">
        <label for="da3cau20">3- Báo hiệu nút giao gần nhất phía trước.</label><br><br>
        <input type="radio" id="da4cau20" name="cau20" value="4">
        <label for="da4cau20">4- Báo hiệu trạm dừng nghỉ phía trước.</label><br><br>
    </div>
</div>

<!-- Câu 21 -->
<div class="cau-hoi" id="cauHoi21" style="display: none;">
    <p>Câu 21: Các vạch dưới đây có tác dụng gì?</p>
    <!-- Thay đổi đường dẫn để chèn ảnh -->
    <img src="fileA2/tatcaA2.files/image151.jpg" style="width: 550px; float: left;">
    <div style="margin-left: 600px;">
        <input type="radio" id="da1cau21" name="cau21" value="1">
        <label for="da1cau21">1- Phân chia hai chiều xe chạy ngược chiều nhau.</label><br><br>
        <input type="radio" id="da2cau21" name="cau21" value="2">
        <label for="da2cau21">2- Phân chia các làn xe chạy cùng chiều nhau.</label><br><br>
    </div>
</div>

<!-- Câu 22 -->
<div class="cau-hoi" id="cauHoi22" style="display: none;">
    <p>Câu 22: Thứ tự các xe đi như thế nào là đúng quy tắc giao thông?</p>
    <!-- Thay đổi đường dẫn để chèn ảnh -->
    <img src="fileA2/tatcaA2.files/image169.jpg" style="width: 550px; float: left;">
    <div style="margin-left: 600px;">
        <input type="radio" id="da1cau22" name="cau22" value="1">
        <label for="da1cau22">1- Xe khách, xe tải, mô tô, xe con.</label><br><br>
        <input type="radio" id="da2cau22" name="cau22" value="2">
        <label for="da2cau22">2- Xe con, xe khách, xe tải, mô tô.</label><br><br>
        <input type="radio" id="da3cau22" name="cau22" value="3">
        <label for="da3cau22">3- Mô tô, xe tải, xe khách, xe con.</label><br><br>
        <input type="radio" id="da4cau22" name="cau22" value="4">
        <label for="da4cau22">4- Mô tô, xe tải, xe con, xe khách.</label><br><br>
    </div>
</div>

<!-- Câu 23 -->
<div class="cau-hoi" id="cauHoi23" style="display: none;">
    <p>Câu 23: Xe con vượt xe tải như trường hợp này có đúng không?</p>
    <!-- Thay đổi đường dẫn để chèn ảnh -->
    <img src="fileA2/tatcaA2.files/image187.jpg" style="width: 550px; float: left;">
    <div style="margin-left: 600px;">
        <input type="radio" id="da1cau23" name="cau23" value="1">
        <label for="da1cau23">1- Đúng.</label><br><br>
        <input type="radio" id="da2cau23" name="cau23" value="2">
        <label for="da2cau23">2- Không đúng.</label><br><br>
    </div>
</div>

<!-- Câu 24 -->
<div class="cau-hoi" id="cauHoi24" style="display: none;">
    <p>Câu 24: Thứ tự các xe đi như thế nào là đúng quy tắc giao thông?</p>
    <!-- Thay đổi đường dẫn để chèn ảnh -->
    <img src="fileA2/tatcaA2.files/image205.jpg" style="width: 550px; float: left;">
    <div style="margin-left: 600px;">
        <input type="radio" id="da1cau24" name="cau24" value="1">
        <label for="da1cau24">1- Xe con và xe tải, xe của bạn.</label><br><br>
        <input type="radio" id="da2cau24" name="cau24" value="2">
        <label for="da2cau24">2- Xe của bạn, xe tải, xe con.</label><br><br>
        <input type="radio" id="da3cau24" name="cau24" value="3">
        <label for="da3cau24">3- Xe của bạn và xe con, xe tải.</label><br><br>
        <input type="radio" id="da4cau24" name="cau24" value="4">
        <label for="da4cau24">4- Xe của bạn, xe tải + xe con.</label><br><br>
    </div>
</div>

<!-- Câu 25 -->
<div class="cau-hoi" id="cauHoi25" style="display: none;">
    <p>Câu 25: Bạn xử lý như thế nào trong trường hợp này?</p>
    <!-- Thay đổi đường dẫn để chèn ảnh -->
    <img src="fileA2/tatcaA2.files/image223.jpg" style="width: 550px; float: left;">
    <div style="margin-left: 600px;">
        <input type="radio" id="da1cau25" name="cau25" value="1">
        <label for="da1cau25">1- Nhường đường cho xe khách và đi trước xe đạp.</label><br><br>
        <input type="radio" id="da2cau25" name="cau25" value="2">
        <label for="da2cau25">2- Nhường đường cho xe đạp và đi trước xe khách.</label><br><br>
        <input type="radio" id="da3cau25" name="cau25" value="3">
        <label for="da3cau25">3- Nhường đường cho xe đạp và xe khách.</label><br><br>
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
        const dapAn = [1, 1, 1, 2, 1, 2, 2, 2, 2, 3, 1, 3, 3, 1, 4, 2, 2, 1, 1, 1, 2, 3, 1, 3, 3];

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
            } else if ([2, 5, 6, 8, 10].includes(i + 1)) { // Kiểm tra nếu câu là câu điểm liệt và đã chọn sai
                coCauDiemLietSai = true;
            }
        } else if ([2, 5, 6, 8, 10].includes(i + 1)) { // Kiểm tra nếu câu là câu điểm liệt và chưa chọn đáp án
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
