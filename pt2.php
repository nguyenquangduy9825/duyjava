<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Giải phương trình bậc 2</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #ff9966, #ff5e62);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .box {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            width: 380px;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }
        input, button {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 1rem;
        }
        button {
            background: #ff5e62;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background: #e14b50;
        }
        .result {
            margin-top: 15px;
            font-weight: bold;
        }
        .ok { color: green; }
        .err { color: red; }
    </style>
</head>
<body>

<div class="box">
    <h3>Giải phương trình bậc 2</h3>
    <p><b>Dạng:</b> ax² + bx + c = 0</p>

    <form method="post">
        <input type="number" step="any" name="a" placeholder="Nhập a" required>
        <input type="number" step="any" name="b" placeholder="Nhập b" required>
        <input type="number" step="any" name="c" placeholder="Nhập c" required>
        <button type="submit">Giải</button>
    </form>

    <?php
    if (isset($_POST['a'], $_POST['b'], $_POST['c'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        echo '<div class="result">';

        if ($a == 0) {
            // phương trình bậc 1
            if ($b == 0 && $c == 0) {
                echo "<span class='ok'>Phương trình có vô số nghiệm</span>";
            } elseif ($b == 0) {
                echo "<span class='err'>Phương trình vô nghiệm</span>";
            } else {
                $x = -$c / $b;
                echo "<span class='ok'>Phương trình có nghiệm: x = $x</span>";
            }
        } else {
            $delta = $b*$b - 4*$a*$c;

            if ($delta < 0) {
                echo "<span class='err'>Phương trình vô nghiệm</span>";
            } elseif ($delta == 0) {
                $x = -$b / (2*$a);
                echo "<span class='ok'>Phương trình có nghiệm kép: x = $x</span>";
            } else {
                $x1 = (-$b + sqrt($delta)) / (2*$a);
                $x2 = (-$b - sqrt($delta)) / (2*$a);
                echo "<span class='ok'>x₁ = $x1<br>x₂ = $x2</span>";
            }
        }

        echo '</div>';
    }
    ?>
</div>

</body>
</html>
// swich là cấu trúc rẽ nhánh  
