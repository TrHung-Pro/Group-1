<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            align-items: center;
            justify-content: center;
            border: 3px solid #36454F;
            box-sizing: border-box;
        }
        .search-container {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .search-container input {
            width: 400px;
            padding: 10px;
            font-size: 25px;
            background-color: transparent;
            color: #36454F;
            border: 3px solid #36454F;
            border-radius: 20px 0 0 20px;
            outline: none;
            margin-bottom: 15px;
        }
        .search-container button {
            padding: 10px;
            font-size: 25px;
            background-color: transparent;
            color: #36454F;
            border-width: 3px 3px 3px 0; /* Giữ viền trên, phải và dưới, bỏ viền trái */
            border-color: #36454F;
            border-style: solid;
            border-radius: 0 20px 20px 0;
            cursor: pointer;
            margin-bottom: 15px;
        }
        .content {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            width: 80%;
            margin-top: 20px;
        }
        .table-container, #result-container {
            max-height: 450px;
            overflow-y: auto;
            width: 50%;
        }
        .table-container {
            margin-right: 20px;
        }
        .highlight {
            background-color: #36454F;
            color: #FFF;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 3px solid #36454F;
            padding: 25px;
            text-align: center;
            font-size: 30px;
        }
        th {
            background-color: #36454F;
            color: #FFF;
        }
        .button-back {
            background-color: transparent;
            border: 3px solid #36454F;
            color: #36454F;
            padding: 10px 20px;
            font-size: 20px;
            position: absolute;
            bottom: 20px;
            left: 20px;
            border-radius: 20px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
            font-weight: 600;
        }
        .button-back:hover {
            transform: scale(1.05);
        }
        .message {
            color: red;
            font-size: 22px;
        }

    </style>
    <script>
        function goBack() {
            window.history.back();
        }

        function showResults(name) {
            const xhr = new XMLHttpRequest();
            xhr.open("POST", "fetch_results.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    document.getElementById("result-container").innerHTML = xhr.responseText;

                    // Remove highlight from previously highlighted rows
                    const highlighted = document.querySelectorAll(".highlight");
                    highlighted.forEach(row => row.classList.remove("highlight"));

                    // Highlight the current row
                    const table = document.querySelector(".table-container table");
                    const rows = table.getElementsByTagName("tr");
                    for (let i = 0; i < rows.length; i++) {
                        const cell = rows[i].getElementsByTagName("td")[0];
                        if (cell && cell.textContent.trim() === name) {
                            rows[i].classList.add("highlight");
                            break;
                        }
                    }
                }
            };
            xhr.send("username=" + encodeURIComponent(name));
        }

function searchName() {
    const message = document.getElementById("error-message");
    const nameInput = document.getElementById("search-input").value.trim().toLowerCase();

    // Xóa thông báo cũ
    message.textContent = "";

    // Kiểm tra nếu không nhập gì
    if (!nameInput) {
        message.textContent = "Vui lòng nhập số điện thoại!";
        return;
    }

    const table = document.querySelector(".table-container table");
    const rows = table.getElementsByTagName("tr");
    let found = false;

    for (let i = 0; i < rows.length; i++) {
        const cell = rows[i].getElementsByTagName("td")[0];
        if (cell) {
            const cellText = cell.textContent || cell.innerText;
            if (cellText.toLowerCase().includes(nameInput)) {
                const topPos = cell.getBoundingClientRect().top - table.getBoundingClientRect().top;
                table.parentNode.scrollTop = topPos - table.parentNode.clientHeight / 2 + cell.clientHeight / 2;
                rows[i].click(); // Tự động kích hoạt sự kiện click
                found = true;
                break;
            }
        }
    }

    if (!found) {
        message.textContent = "Số điện thoại không có trong hệ thống!";
    }
}


    </script>
</head>
<body>
    <video autoplay muted loop id="video-background">
        <source src="nendong.mp4" type="video/mp4">
    </video>

    <div class="khung1">
        <div class="search-container">
            <input type="text" id="search-input" placeholder="Nhập số điện thoại...">
            <button onclick="searchName()">Tìm</button>
        </div>
        <div id="error-message" class="message"></div>

        <div class="content">
            <div class="table-container">
                <table>
                    <tbody>
                        <?php
                        // Database connection
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "drivingtheory";

                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $dbname);

                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        // SQL query to fetch all unique names
                        $sql = "SELECT DISTINCT ten FROM ketquathi";
                        $result = $conn->query($sql);

                        // Check if there are results and display them
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr onclick='showResults(\"" . htmlspecialchars($row['ten']) . "\")'><td style='cursor:pointer;'>" . htmlspecialchars($row['ten']) . "</td></tr>";
                            }
                        } else {
                            echo "<tr><td>Không có dữ liệu</td></tr>";
                        }

                        // Close connection
                        $conn->close();
                        ?>
                    </tbody>
                </table>
            </div>

            <div id="result-container">
                <!-- Kết quả sẽ được hiển thị ở đây -->
            </div>
        </div>
        <button class="button-back" onclick="goBack()">&#8592; Quay lại</button>
    </div>
</body>
</html>
