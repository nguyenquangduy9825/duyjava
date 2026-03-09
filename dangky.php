<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Kết quả đăng ký</title>
    <link rel="stylesheet" href="style_dangky.css">
</head>
<body>

<div class="form-box">
<?php
// ===== LẤY DỮ LIỆU =====
$hoten   = $_POST['txt_ht'] ?? '';
$tdn     = $_POST['txt_tdn'] ?? '';
$mk      = $_POST['txt_mk'] ?? '';
$email   = $_POST['txt_email'] ?? '';
$gt      = $_POST['rad_gt'] ?? '';
$ghichu  = $_POST['txta_ghichu'] ?? '';
$quocgia = $_POST['sel_quocgia'] ?? '';
$sothich = $_POST['chk_sothich'] ?? [];

$loi = [];

// ===== KIỂM TRA LỖI =====
if ($hoten == '') {
    $loi[] = "❌ Họ tên không được để trống";
}
if ($tdn == '') {
    $loi[] = "❌ Chưa nhập tên đăng nhập";
}
if (strlen($mk) < 6) {
    $loi[] = "❌ Mật khẩu phải từ 6 ký tự";
}
if ($email == '') {
    $loi[] = "❌ Chưa nhập email";
}

// ===== NẾU KHÔNG CÓ LỖI =====
if (empty($loi)) {

    
    setcookie("username", $tdn, time() + 60, "/");
    setcookie("password", $mk, time() + 60, "/");

    
    header("refresh:2;url=dangnhap.php");
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Kết quả đăng ký</title>
    <link rel="stylesheet" href="style_dangky.css">
</head>
<body>

<div class="form-box">

<?php
// ===== HIỂN THỊ KẾT QUẢ =====
if (!empty($loi)) {
    echo "<h2 style='color:red'>Đăng ký KHÔNG thành công</h2>";
    foreach ($loi as $e) {
        echo "<p>$e</p>";
    }
    echo "<br><a href='dangky.html'>🔙 Quay lại đăng ký</a>";
} else {
    echo "<h2 style='color:green'>🎉 Đăng ký thành công!</h2>";
    echo "<p>Hệ thống đang chuyển sang trang đăng nhập...</p>";
}
?>
</div>

</body>
</html>
