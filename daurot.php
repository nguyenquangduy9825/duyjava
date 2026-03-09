<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Nhập điểm</title>
</head>
<body>

<h2>Nhập điểm học sinh</h2>

<form method="post">
    Nhập điểm:
    <input 
        type="number" 
        name="diem" 
        step="0.1" 
        min="0" 
        max="10" 
        required
    >
    <button type="submit">Xem kết quả</button>
</form>

<?php
if (isset($_POST['diem'])) {
    $diem = floatval($_POST['diem']); // ép sang số thực

    echo "<p>Điểm nhập: $diem</p>";

    if ($diem >= 8) {
        echo "<b>Xếp loại: Giỏi</b>";
    } elseif ($diem >= 6.5) {
        echo "<b>Xếp loại: Khá</b>";
    } elseif ($diem >= 5) {
        echo "<b>Xếp loại: Trung bình</b>";
    } else {
        echo "<b>Xếp loại: Yếu</b>";
    }
}
?>

</body>
</html>
