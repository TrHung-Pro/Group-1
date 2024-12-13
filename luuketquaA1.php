<?php
// Kết nối đến MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "drivingtheory";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Lấy dữ liệu từ yêu cầu Ajax
$ten = $_POST['ten'];
$socau = $_POST['socau'];
$ketqua = $_POST['ketqua'];
$thoigian = date("Y-m-d H:i:s");

// Tăng id của tất cả các bản ghi hiện có lên 1 để dành chỗ cho hàng mới ở id = 1
$sql_update_ids = "UPDATE ketquathi SET id = id + 1";
$conn->query($sql_update_ids);

// Thêm bản ghi mới với id = 1
$sql_insert = "INSERT INTO ketquathi (id, ten, socau, ketqua, thoigian) VALUES (1, '$ten', '$socau', '$ketqua', '$thoigian')";
if ($conn->query($sql_insert) === TRUE) {
    // Giới hạn chỉ giữ lại 5 bản ghi gần nhất của cùng một tên
    $sql_limit = "SELECT id FROM ketquathi WHERE ten = '$ten' ORDER BY id ASC LIMIT 5, 18446744073709551615";
    $result = $conn->query($sql_limit);

    // Xóa các bản ghi vượt quá 5 hàng gần nhất cho cùng tên
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $sql_delete = "DELETE FROM ketquathi WHERE id = " . $row['id'];
            $conn->query($sql_delete);
        }
    }
    echo "Lưu dữ liệu thành công";
} else {
    echo "Lỗi: " . $conn->error;
}

$conn->close();
?>
