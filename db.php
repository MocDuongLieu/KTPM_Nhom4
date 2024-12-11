<?php
$con = mysqli_connect("localhost", "root", "", "hotel");

// Kiểm tra kết nối
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
