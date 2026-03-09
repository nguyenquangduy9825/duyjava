<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // lấy dữ liệu từ from đăng nhập
    $user=$_POST["txt_tdn"];
    $pass=$_POST["txt_mk"];
    if(!isset($_SESSION["tendangnhap"])){
        echo "chưa đăng kí tài khoản ";
        exit;
    } 
    if($user==$_COOKIE['tendangnhap']&& $_pass==$_SESSION['matkhau']){
        echo "đăng nhập thành công,xin chào : nguyễn quang duy  ";
    }
    else{
        echo "sai tên đăng nhập hoặc mật khẩu <br>";
        echo "<a herf='dangnhap.php'><b>Đang nhập lại</b> </a>";
    }
    ?>
</body>
</html>