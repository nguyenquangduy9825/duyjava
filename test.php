<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Giải phương trình bậc 1</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #43cea2, #185a9d);
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
            background: #185a9d;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background: #144a82;
        }
        .result {
            margin-top: 20px;
            font-weight: bold;
            font-size: 1.1rem;
        }
        .success { color: #27ae60; }
        .error { color: #e74c3c; }
    </style>
</head>
<body>

<div class="box">
    <h3>Giải phương trình bậc 1</h3>
    <p><b>Dạng:</b> ax + b = 0</p>

    <form method="post">
        <input type="number" step="any" name="a" placeholder="Nhập a" required>
        <input type="number" step="any" name="b" placeholder="Nhập b" required>
        <button type="submit">Giải</button>
    </form>

    <?php
    if (isset($_POST['a']) && isset($_POST['b'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];

        echo '<div class="result">';

        if ($a == 0 && $b == 0) {
            echo "<span class='success'>Phương trình có vô số nghiệm</span>";
        } elseif ($a == 0 && $b != 0) {
            echo "<span class='error'>Phương trình vô nghiệm</span>";
        } else {
            $x = -$b / $a;
            echo "<span class='success'>Phương trình có nghiệm: x = $x</span>";
        }

        echo '</div>';
    }
    ?>
</div>

</body>
</html>
