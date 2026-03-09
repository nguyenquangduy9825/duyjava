<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Kiểm tra chẵn lẻ</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .box {
            background: #fff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            width: 350px;
            text-align: center;
        }

        h3 {
            margin-bottom: 20px;
            color: #333;
        }

        input {
            width: 100%;
            padding: 12px;
            font-size: 1rem;
            border-radius: 8px;
            border: 1px solid #ccc;
            outline: none;
        }

        input:focus {
            border-color: #667eea;
        }

        button {
            margin-top: 15px;
            width: 100%;
            padding: 12px;
            background: #667eea;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            cursor: pointer;
        }

        button:hover {
            background: #5563d6;
        }

        .result {
            margin-top: 20px;
            font-size: 1.2rem;
            font-weight: bold;
        }

        .even {
            color: #2ecc71;
        }

        .odd {
            color: #e74c3c;
        }
    </style>
</head>
<body>

<div class="box">
    <h3>Kiểm tra số chẵn / lẻ</h3>

    <form method="post">
        <input type="number" name="n" placeholder="Nhập số nguyên..." required>
        <button type="submit">Kiểm tra</button>
    </form>

    <?php
    if (isset($_POST['n'])) {
        $n = $_POST['n'];

        echo '<div class="result">';
        if ($n % 2 == 0) {
            echo "<span class='even'>$n là số chẵn</span>";
        } else {
            echo "<span class='odd'>$n là số lẻ</span>";
        }
        echo '</div>';
    }
    ?>
</div>

</body>
</html>
