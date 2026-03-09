<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
session_start();

$user = $_POST["txt_tdn"] ?? '';
$pass = $_POST["txt_mk"] ?? '';

// chưa đăng ký
if(!isset($_SESSION["username"])){
    echo "Chưa đăng ký tài khoản!";
    exit;
}

// so sánh
if($user == $_SESSION['username'] && $pass == $_SESSION['password']){
    echo "Đăng nhập thành công! Xin chào <b>$user</b>";
} else {
    echo "Sai tên đăng nhập hoặc mật khẩu<br>";
    echo "<a href='dangnhap.php'>Đăng nhập lại</a>";
}
?>
</body>
</html>