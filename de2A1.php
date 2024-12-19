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
        <h1>Thi thử lý thuyết lái xe mô tô hạng A1</h1>
        <br>
        <div class="dieu-huong-cau-hoi">
            <!-- Bảng điều hướng cho 25 câu hỏi sẽ được thêm bằng JavaScript -->
        </div>
    </header>

<!-- Cau 1 -->
<div class="cau-hoi" id="cauHoi1">
    <p>Câu 1: “Làn đường” là gì?</p>
    <input type="radio" id="da1cau1" name="cau1" value="1">
    <label for="da1cau1">1- Là một phần của phần đường xe chạy được chia theo chiều dọc của đường, sử dụng cho xe chạy.</label><br><br>
    <input type="radio" id="da2cau1" name="cau1" value="2">
    <label for="da2cau1">2- Là một phần của phần đường xe chạy được chia theo chiều dọc của đường, có bề rộng đủ cho xe chạy an toàn.</label><br><br>
    <input type="radio" id="da3cau1" name="cau1" value="3">
    <label for="da3cau1">3- Là đường cho xe ô tô chạy, dừng, đỗ an toàn.</label>
</div>

<!-- Cau 2 -->
<div class="cau-hoi" id="cauHoi2" style="display: none;">
    <p>Câu 2: “Người tham gia giao thông đường bộ” gồm những đối tượng nào?</p>
    <input type="radio" id="da1cau2" name="cau2" value="1">
    <label for="da1cau2">1- Người điều khiển, người sử dụng phương tiện tham gia giao thông đường bộ.</label><br><br>
    <input type="radio" id="da2cau2" name="cau2" value="2">
    <label for="da2cau2">2- Người điều khiển, dẫn dắt súc vật; người đi bộ trên đường bộ.</label><br><br>
    <input type="radio" id="da3cau2" name="cau2" value="3">
    <label for="da3cau2">3- Cả ý 1 và ý 2.</label>
</div>

<!-- Cau 3 -->
<div class="cau-hoi" id="cauHoi3" style="display: none;">
    <p>Câu 3 (điểm liệt): Theo Luật phòng chống tác hại của rượu, bia, đối tượng nào dưới đây bị cấm sử dụng rượu bia khi tham gia giao thông?</p>
    <input type="radio" id="da1cau3" name="cau3" value="1">
    <label for="da1cau3">1- Người điều khiển: Xe ô tô, xe mô tô, xe đạp, xe gắn máy.</label><br><br>
    <input type="radio" id="da2cau3" name="cau3" value="2">
    <label for="da2cau3">2- Người ngồi phía sau người điều khiển xe cơ giới.</label><br><br>
    <input type="radio" id="da3cau3" name="cau3" value="3">
    <label for="da3cau3">3- Người đi bộ.</label><br><br>
    <input type="radio" id="da4cau3" name="cau3" value="4">
    <label for="da4cau3">4- Cả ý 1 và ý 2.</label>
</div>

<!-- Cau 4 -->
<div class="cau-hoi" id="cauHoi4" style="display: none;">
    <p>Câu 4 (điểm liệt): Người điều khiển xe mô tô hai bánh, ba bánh, xe gắn máy có được phép sử dụng xe để kéo hoặc đẩy các phương tiện khác khi tham gia giao thông không?</p>
    <input type="radio" id="da1cau4" name="cau4" value="1">
    <label for="da1cau4">1- Được phép.</label><br><br>
    <input type="radio" id="da2cau4" name="cau4" value="2">
    <label for="da2cau4">2- Nếu phương tiện được kéo, đẩy có khối lượng nhỏ hơn phương tiện của mình.</label><br><br>
    <input type="radio" id="da3cau4" name="cau4" value="3">
    <label for="da3cau4">3- Tuỳ trường hợp.</label><br><br>
    <input type="radio" id="da4cau4" name="cau4" value="4">
    <label for="da4cau4">4- Không được phép.</label>
</div>

<!-- Cau 5 -->
<div class="cau-hoi" id="cauHoi5" style="display: none;">
    <p>Câu 5 (điểm liệt): Hành vi vận chuyển đồ vật cồng kềnh bằng xe mô tô, xe gắn máy khi tham gia giao thông có được phép hay không?</p>
    <input type="radio" id="da1cau5" name="cau5" value="1">
    <label for="da1cau5">1- Không được vận chuyển.</label><br><br>
    <input type="radio" id="da2cau5" name="cau5" value="2">
    <label for="da2cau5">2- Chỉ được vận chuyển khi đã chằng buộc cẩn thận.</label><br><br>
    <input type="radio" id="da3cau5" name="cau5" value="3">
    <label for="da3cau5">3- Chỉ được vận chuyển vật cồng kềnh trên xe máy nếu khoảng cách về nhà ngắn hơn 2 km.</label>
</div>

<!-- Câu 6 -->
<div class="cau-hoi" id="cauHoi6" style="display: none;">
    <p>Câu 6: Biển báo hiệu hình chữ nhật hoặc hình vuông hoặc hình mũi tên nền xanh lam là loại biển gì dưới đây?</p>
    <!-- Thay đổi đường dẫn để chèn ảnh -->
    <img src="fileA2/tatcaA2.files/image004" style="width: 550px; float: left ">
    <div style="margin-left: 600px;">
        <input type="radio" id="da1cau6" name="cau6" value="1">
        <label for="da1cau6">1- Biển báo nguy hiểm.</label><br><br>
        <input type="radio" id="da2cau6" name="cau6" value="2">
        <label for="da2cau6">2- Biển báo cấm.</label><br><br>
        <input type="radio" id="da3cau6" name="cau6" value="3">
        <label for="da3cau6">3- Biển báo hiệu lệnh phải thi hành.</label><br><br>
        <input type="radio" id="da4cau6" name="cau6" value="4">
        <label for="da4cau6">4- Biển báo chỉ dẫn.</label>
    </div>
</div>

<!-- Câu 7 -->
<div class="cau-hoi" id="cauHoi7" style="display: none;">
    <p>Câu 7: Khi điều khiển xe chạy trên đường biết có xe sau xin vượt nếu đủ điều kiện an toàn người lái xe phải làm gì?</p>
    <input type="radio" id="da1cau7" name="cau7" value="1">
    <label for="da1cau7">1- Tăng tốc độ và ra hiệu cho xe sau vượt, không được gây trở ngại cho xe sau vượt.</label><br><br>
    <input type="radio" id="da2cau7" name="cau7" value="2">
    <label for="da2cau7">2- Người điều khiển phương tiện phía trước phải giảm tốc độ, đi sát về bên phải của phần đường xe chạy cho đến khi xe sau đã vượt qua, không được gây trở ngại cho xe sau vượt.</label><br><br>
    <input type="radio" id="da3cau7" name="cau7" value="3">
    <label for="da3cau7">3- Cho xe tránh về bên trái mình và ra hiệu cho xe sau vượt; nếu có chướng ngại vật phía trước hoặc thiếu điều kiện an toàn chưa cho vượt được phải ra hiệu cho xe sau biết; cấm gây trở ngại cho xe xin vượt.</label>
</div>

<!-- Câu 8 -->
<div class="cau-hoi" id="cauHoi8" style="display: none;">
    <p>Câu 8 (điểm liệt): Người ngồi trên xe mô tô 2 bánh, xe gắn máy phải đội mũ bảo hiểm có cài quai đúng quy cách khi nào?</p>
    <input type="radio" id="da1cau8" name="cau8" value="1">
    <label for="da1cau8">1- Khi tham gia giao thông đường bộ.</label><br><br>
    <input type="radio" id="da2cau8" name="cau8" value="2">
    <label for="da2cau8">2- Chỉ khi đi trên đường chuyên dùng; đường cao tốc.</label><br><br>
    <input type="radio" id="da3cau8" name="cau8" value="3">
    <label for="da3cau8">3- Khi tham gia giao thông trên đường tỉnh lộ hoặc quốc lộ.</label>
</div>

<!-- Câu 9 -->
<div class="cau-hoi" id="cauHoi9" style="display: none;">
    <p>Câu 9: Người lái xe mô tô xử lý như thế nào khi cho xe mô tô phía sau vượt?</p>
    <input type="radio" id="da1cau9" name="cau9" value="1">
    <label for="da1cau9">1- Nếu đủ điều kiện an toàn, người lái xe phải giảm tốc độ, đi sát về bên phải của phần đường xe chạy cho đến khi xe sau đã vượt qua, không được gây trở ngại đối với xe xin vượt.</label><br><br>
    <input type="radio" id="da2cau9" name="cau9" value="2">
    <label for="da2cau9">2- Lái xe vào lề đường bên trái và giảm tốc độ để xe phía sau vượt qua, không được gây trở ngại đối với xe xin vượt.</label><br><br>
    <input type="radio" id="da3cau9" name="cau9" value="3">
    <label for="da3cau9">3- Nếu đủ điều kiện an toàn, người lái xe phải tăng tốc độ, đi sát về bên phải của phần đường xe chạy cho đến khi xe sau đã vượt qua.</label>
</div>

<!-- Câu 10 -->
<div class="cau-hoi" id="cauHoi10" style="display: none;">
    <p>Câu 10: Người lái xe phải giảm tốc độ thấp hơn tốc độ tối đa cho phép đến mức cần thiết, chú ý quan sát và chuẩn bị sẵn sàng những tình huống có thế xảy ra để phòng ngừa tai nạn trong các trường hợp nào dưới đây?</p>
    <input type="radio" id="da1cau10" name="cau10" value="1">
    <label for="da1cau10">1- Gặp biển báo nguy hiểm trên đường.</label><br><br>
    <input type="radio" id="da2cau10" name="cau10" value="2">
    <label for="da2cau10">2- Gặp biển chỉ dẫn trên đường.</label><br><br>
    <input type="radio" id="da3cau10" name="cau10" value="3">
    <label for="da3cau10">3- Gặp biển báo hết mọi lệnh cấm.</label><br><br>
    <input type="radio" id="da4cau10" name="cau10" value="4">
    <label for="da4cau10">4- Gặp biển báo hết hạn chế tốc độ tối đa cho phép.</label>
</div>

<!-- Câu 11 -->
<div class="cau-hoi" id="cauHoi11" style="display: none;">
    <p>Câu 11: Người điều khiển xe mô tô phải giảm tốc độ và hết sức thận trọng khi qua những đoạn đường nào dưới đây?</p>
    <input type="radio" id="da1cau11" name="cau11" value="1">
    <label for="da1cau11">1- Đường ướt, đường có sỏi cát trên nền đường.</label><br><br>
    <input type="radio" id="da2cau11" name="cau11" value="2">
    <label for="da2cau11">2- Đường hẹp có nhiều điểm giao cắt từ hai phía.</label><br><br>
    <input type="radio" id="da3cau11" name="cau11" value="3">
    <label for="da3cau11">3- Đường đèo dốc, vòng liên tục.</label><br><br>
    <input type="radio" id="da4cau11" name="cau11" value="4">
    <label for="da4cau11">4- Tất cả các ý nêu trên.</label>
</div>

<!-- Câu 12 -->
<div class="cau-hoi" id="cauHoi12" style="display: none;">
    <p>Câu 12: Khi quay đầu xe, người lái xe cần phải quan sát và thực hiện các thao tác nào để đảm bảo an toàn giao thông?</p>
    <input type="radio" id="da1cau12" name="cau12" value="1">
    <label for="da1cau12">1- Quan sát biển báo hiệu để biết nơi được phép quay đầu; quan sát kỹ địa hình nơi chọn để quay đầu; lựa chọn quỹ đạo quay đầu xe cho thích hợp; quay đầu xe với tốc độ thấp; thường xuyên báo tín hiệu để người, các phương tiện xung quanh được biết; nếu quay đầu xe ở nơi nguy hiểm thì đưa đầu xe về phía nguy hiểm đưa đuôi xe về phía an toàn.</label><br><br>
    <input type="radio" id="da2cau12" name="cau12" value="2">
    <label for="da2cau12">2- Quan sát biển báo hiệu để biết nơi được phép quay đầu; quan sát kỹ địa hình nơi chọn để quay đầu; lựa chọn quỹ đạo quay đầu xe; quay đầu xe với tốc độ tối đa; thường xuyên báo tín hiệu để người, các phương tiện xung quanh được biết; nếu quay đầu xe ở nơi nguy hiểm thì đưa đuôi xe về phía nguy hiểm và đầu xe về phía an toàn.</label>
</div>

<!-- Câu 13 -->
<div class="cau-hoi" id="cauHoi13" style="display: none;">
    <p>Câu 13: Gương chiếu hậu của xe mô tô hai bánh, có tác dụng gì trong các trường hợp dưới đây?</p>
    <input type="radio" id="da1cau13" name="cau13" value="1">
    <label for="da1cau13">1- Để quan sát an toàn phía bên trái khi chuẩn bị rẽ trái.</label><br><br>
    <input type="radio" id="da2cau13" name="cau13" value="2">
    <label for="da2cau13">2- Để quan sát an toàn phía bên phải khi chuẩn bị rẽ phải.</label><br><br>
    <input type="radio" id="da3cau13" name="cau13" value="3">
    <label for="da3cau13">3- Để quan sát an toàn phía sau cả bên trái và bên phải trước khi chuyển hướng.</label><br><br>
    <input type="radio" id="da4cau13" name="cau13" value="4">
    <label for="da4cau13">4- Để quan sát an toàn phía trước cả bên trái và bên phải trước khi chuyển hướng.</label>
</div>

<!-- Câu 14 -->
<div class="cau-hoi" id="cauHoi14" style="display: none;">
    <p>Câu 14: Khi gặp biển nào xe được rẽ trái?</p>
    <!-- Đường dẫn file ảnh -->
    <img src="fileA2/tatcaA2.files/image020" style="width: 550px; float: left ">
    <div style="margin-left: 600px;">
        <input type="radio" id="da1cau14" name="cau14" value="1">
        <label for="da1cau14">1- Biển 1.</label><br><br>
        <input type="radio" id="da2cau14" name="cau14" value="2">
        <label for="da2cau14">2- Biển 2.</label><br><br>
        <input type="radio" id="da3cau14" name="cau14" value="3">
        <label for="da3cau14">3- Không biển nào.</label>
    </div>
</div>

<!-- Câu 15 -->
<div class="cau-hoi" id="cauHoi15" style="display: none;">
    <p>Câu 15: Khi gặp biển nào xe ưu tiên theo luật định vẫn phải dừng lại?</p>
    <!-- Đường dẫn file ảnh -->
    <img src="fileA2/tatcaA2.files/image031" style="width: 550px; float: left ">
    <div style="margin-left: 600px;">
        <input type="radio" id="da1cau15" name="cau15" value="1">
        <label for="da1cau15">1- Biển 1.</label><br><br>
        <input type="radio" id="da2cau15" name="cau15" value="2">
        <label for="da2cau15">2- Biển 2.</label><br><br>
        <input type="radio" id="da3cau15" name="cau15" value="3">
        <label for="da3cau15">3- Cả ba biển.</label>
    </div>
</div>

<!-- Câu 16 -->
<div class="cau-hoi" id="cauHoi16" style="display: none;">
    <p>Câu 16: Biển báo nào báo hiệu bắt đầu đoạn đường vào phạm vi khu dân cư, các phương tiện tham gia giao thông phải tuân theo các quy định đi đường được áp dụng ở khu đông dân cư?</p>
    <!-- Đường dẫn file ảnh -->
    <img src="fileA2/tatcaA2.files/image051" style="width: 550px; float: left ">
    <div style="margin-left: 600px;">
        <input type="radio" id="da1cau16" name="cau16" value="1">
        <label for="da1cau16">1- Biển 1.</label><br><br>
        <input type="radio" id="da2cau16" name="cau16" value="2">
        <label for="da2cau16">2- Biển 2.</label>
    </div>
</div>

<!-- Câu 17 -->
<div class="cau-hoi" id="cauHoi17" style="display: none;">
    <p>Câu 17: Biển nào báo hiệu Đường sắt giao nhau với đường bộ không có rào chắn?</p>
    <!-- Đường dẫn file ảnh -->
    <img src="fileA2/tatcaA2.files/image061" style="width: 550px; float: left ">
    <div style="margin-left: 600px;">
        <input type="radio" id="da1cau17" name="cau17" value="1">
        <label for="da1cau17">1- Biển 1 và 2.</label><br><br>
        <input type="radio" id="da2cau17" name="cau17" value="2">
        <label for="da2cau17">2- Biển 1 và 3.</label><br><br>
        <input type="radio" id="da3cau17" name="cau17" value="3">
        <label for="da3cau17">3- Biển 2 và 3.</label><br><br>
        <input type="radio" id="da4cau17" name="cau17" value="4">
        <label for="da4cau17">4- Cả ba biển.</label>
    </div>
</div>

<!-- Câu 18 -->
<div class="cau-hoi" id="cauHoi18" style="display: none;">
    <p>Câu 18: Biển nào báo hiệu “Đường đôi”?</p>
    <!-- Đường dẫn file ảnh -->
    <img src="fileA2/tatcaA2.files/image073" style="width: 550px; float: left ">
    <div style="margin-left: 600px;">
        <input type="radio" id="da1cau18" name="cau18" value="1">
        <label for="da1cau18">1- Biển 1.</label><br><br>
        <input type="radio" id="da2cau18" name="cau18" value="2">
        <label for="da2cau18">2- Biển 2.</label><br><br>
        <input type="radio" id="da3cau18" name="cau18" value="3">
        <label for="da3cau18">3- Biển 3.</label>
    </div>
</div>

<!-- Câu 19 -->
<div class="cau-hoi" id="cauHoi19" style="display: none;">
    <p>Câu 19: Biển báo này có ý nghĩa gì?</p>
    <!-- Đường dẫn file ảnh -->
    <img src="fileA2/tatcaA2.files/image098" style="width: 550px; float: left ">
    <div style="margin-left: 600px;">
        <input type="radio" id="da1cau19" name="cau19" value="1">
        <label for="da1cau19">1- Báo hiệu đường có ổ gà, lồi lõm.</label><br><br>
        <input type="radio" id="da2cau19" name="cau19" value="2">
        <label for="da2cau19">2- Báo hiệu đường có gồ giảm tốc phía trước.</label>
    </div>
</div>

<!-- Câu 20 -->
<div class="cau-hoi" id="cauHoi20" style="display: none;">
    <p>Câu 20: Trong các biển dưới đây biển nào là biển “Hết mọi lệnh cấm”?</p>
    <!-- Đường dẫn file ảnh -->
    <img src="fileA2/tatcaA2.files/image110" style="width: 550px; float: left ">
    <div style="margin-left: 600px;">
        <input type="radio" id="da1cau20" name="cau20" value="1">
        <label for="da1cau20">1- Biển 1.</label><br><br>
        <input type="radio" id="da2cau20" name="cau20" value="2">
        <label for="da2cau20">2- Biển 2.</label><br><br>
        <input type="radio" id="da3cau20" name="cau20" value="3">
        <label for="da3cau20">3- Biển 3.</label><br><br>
        <input type="radio" id="da4cau20" name="cau20" value="4">
        <label for="da4cau20">4- Cả ba biển.</label>
    </div>
</div>

<!-- Câu 21 -->
<div class="cau-hoi" id="cauHoi21" style="display: none;">
    <p>Câu 21: Vạch kẻ đường nào dưới đây là vạch phân chia hai chiều xe chạy (vạch tim đường)?</p>
    <!-- Đường dẫn file ảnh -->
    <img src="fileA2/tatcaA2.files/image149" style="width: 550px; float: left ">
    <div style="margin-left: 600px;">
        <input type="radio" id="da1cau21" name="cau21" value="1">
        <label for="da1cau21">1- Vạch 1.</label><br><br>
        <input type="radio" id="da2cau21" name="cau21" value="2">
        <label for="da2cau21">2- Vạch 2.</label><br><br>
        <input type="radio" id="da3cau21" name="cau21" value="3">
        <label for="da3cau21">3- Vạch 3.</label><br><br>
        <input type="radio" id="da4cau21" name="cau21" value="4">
        <label for="da4cau21">4- Vạch 1 và 3.</label>
    </div>
</div>

<!-- Câu 22 -->
<div class="cau-hoi" id="cauHoi22" style="display: none;">
    <p>Câu 22: Theo tín hiệu đèn, xe nào được phép đi?</p>
    <!-- Đường dẫn file ảnh -->
    <img src="fileA2/tatcaA2.files/image164" style="width: 550px; float: left ">
    <div style="margin-left: 600px;">
        <input type="radio" id="da1cau22" name="cau22" value="1">
        <label for="da1cau22">1- Xe con và xe khách.</label><br><br>
        <input type="radio" id="da2cau22" name="cau22" value="2">
        <label for="da2cau22">2- Mô tô.</label>
    </div>
</div>

<!-- Câu 23 -->
<div class="cau-hoi" id="cauHoi23" style="display: none;">
    <p>Câu 23: Xe nào được quyền đi trước trong trường hợp này?</p>
    <!-- Đường dẫn file ảnh -->
    <img src="fileA2/tatcaA2.files/image180" style="width: 550px; float: left ">
    <div style="margin-left: 600px;">
        <input type="radio" id="da1cau23" name="cau23" value="1">
        <label for="da1cau23">1- Xe con.</label><br><br>
        <input type="radio" id="da2cau23" name="cau23" value="2">
        <label for="da2cau23">2- Xe mô tô.</label>
    </div>
</div>

<!-- Câu 24 -->
<div class="cau-hoi" id="cauHoi24" style="display: none;">
    <p>Câu 24: Trong trường hợp này, thứ tự xe đi như thế nào là đúng quy tắc giao thông?</p>
    <!-- Đường dẫn file ảnh -->
    <img src="fileA2/tatcaA2.files/image196" style="width: 550px; float: left ">
    <div style="margin-left: 600px;">
        <input type="radio" id="da1cau24" name="cau24" value="1">
        <label for="da1cau24">1- Xe công an, xe quân sự, xe con + mô tô.</label><br><br>
        <input type="radio" id="da2cau24" name="cau24" value="2">
        <label for="da2cau24">2- Xe quân sự, xe công an, xe con + mô tô.</label><br><br>
        <input type="radio" id="da3cau24" name="cau24" value="3">
        <label for="da3cau24">3- Xe mô tô + xe con, xe quân sự, xe công an.</label>
    </div>
</div>

<!-- Câu 25 -->
<div class="cau-hoi" id="cauHoi25" style="display: none;">
    <p>Câu 25: Các xe đi theo hướng mũi tên, xe nào chấp hành đúng quy tắc giao thông?</p>
    <!-- Đường dẫn file ảnh -->
    <img src="fileA2/tatcaA2.files/image214" style="width: 550px; float: left ">
    <div style="margin-left: 600px;">
        <input type="radio" id="da1cau25" name="cau25" value="1">
        <label for="da1cau25">1- Xe tải, mô tô.</label><br><br>
        <input type="radio" id="da2cau25" name="cau25" value="2">
        <label for="da2cau25">2- Xe khách, mô tô.</label><br><br>
        <input type="radio" id="da3cau25" name="cau25" value="3">
        <label for="da3cau25">3- Xe tải, xe con.</label><br><br>
        <input type="radio" id="da4cau25" name="cau25" value="4">
        <label for="da4cau25">4- Mô tô, xe con.</label>
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
        const dapAn = [2, 3, 1, 4, 1, 4, 2, 1, 1, 1, 4, 1, 3, 2, 2, 1, 3, 2, 2, 2, 4, 1, 2, 2, 2];

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
            } else if ([3, 4, 5, 8].includes(i + 1)) { // Kiểm tra nếu câu là câu điểm liệt và đã chọn sai
                coCauDiemLietSai = true;
            }
        } else if ([3, 4, 5, 8].includes(i + 1)) { // Kiểm tra nếu câu là câu điểm liệt và chưa chọn đáp án
            coCauDiemLietSai = true;
        }
    }

    let ketQua = soCauDung >= 21 && !coCauDiemLietSai ? "Đạt" : "Không đạt";
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
