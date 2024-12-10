<?php
define('HOST', 'mysql.railway.internal'); // Thay 'localhost' bằng HOST từ thông tin của bạn
define('USERNAME', 'root'); // Tên người dùng
define('PASSWORD', 'fmezLMDsweIpcYdCFRzVMtgNQKBlSeKE'); // Mật khẩu
define('DATABASE', 'railway'); // Tên cơ sở dữ liệu

$connection = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
