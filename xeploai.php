<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Xếp loại học lực</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #56ccf2, #2f80ed);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .box {
            background: #fff;
            padding: 30px 40px;
            border-radius: 12px;
            width: 380px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }
        input, button {
            width: 100%;
            padding: 12px;
            margin-top: 10px;
            font-size: 1rem;
            border-radius: 8px;
            border: 1px solid #ccc;
        }
        button {
            background: #2f80ed;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background: #2568c9;
        }
        .result {
            margin-top: 20px;
            font-size: 1.2rem;
            font-weight: bold;
        }
        .gioi { color: #27ae60; }
        .kha { color: #2980b9; }
        .tb { color: #f39c12; }
        .yeu { color: #e74c3c; }
        .error { color: red; }
    </style>
</head>
<body>

<div class="box">
    <h3>Nhập điểm xếp loại</h3>

    <form method="post">
        <input type="number" step="0.1" name="diem" placeholder="Nhập điểm (0 - 10)" required>
        <button type="submit">Xếp loại</button>
    </form>

    <?php
    if (isset($_POST['diem'])) {
        $diem = $_POST['diem'];

        echo '<div class="result">';

        if ($diem < 0 || $diem > 10) {
            echo "<span class='error'>Điểm không hợp lệ</span>";
        } elseif ($diem >= 8) {
            echo "<span class='gioi'>Xếp loại: Giỏi</span>";
        } elseif ($diem >= 6.5) {
            echo "<span class='kha'>Xếp loại: Khá</span>";
        } elseif ($diem >= 5) {
            echo "<span class='tb'>Xếp loại: Trung bình</span>";
        } else {
            echo "<span class='yeu'>Xếp loại: Yếu</span>";
        }

        echo '</div>';
    }
    ?>
</div>

</body>
</html>
