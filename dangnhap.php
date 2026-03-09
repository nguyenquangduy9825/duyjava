<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập / Đăng ký</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style_dangky.css">

    <style>
        body {
            margin: 0;
            min-height: 100vh;
            background: linear-gradient(135deg, #6a7cff, #7b5fc9);
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial;
        }

        .form-box {
            width: 400px;
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }

        h2 { text-align: center; }

        label { display: block; margin-top: 15px; }

        input, select, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 8px;
            border: 1px solid #ccc;
        }

        button {
            width: 100%;
            margin-top: 20px;
            padding: 12px;
            border: none;
            border-radius: 10px;
            background: #4CAF50;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        .extra {
            text-align: center;
            margin-top: 15px;
        }

        .extra a {
            color: blue;
            cursor: pointer;
            text-decoration: none;
        }

        #register-box { display: none; }
    </style>
</head>
<body>

<!-- ===== FORM ĐĂNG NHẬP (GIỮ NGUYÊN) ===== -->
<div class="form-box" id="login-box">
    <h2>Đăng nhập</h2>

    <form method="post" action="xuli.php">
        <label>Tên đăng nhập</label>
        <input type="text" name="txt_tdn" required>

        <label>Mật khẩu</label>
        <input type="password" name="txt_mk" required>

        <button type="submit">Đăng nhập</button>
    </form>

    <div class="extra">
        Chưa có tài khoản?
        <a onclick="showRegister()">Đăng ký</a>
    </div>
</div>


<div class="form-box" id="register-box">
    <h2>Đăng ký thành viên</h2>

    <form method="post" action="dangky.php">
        <label>Họ và tên</label>
        <input type="text" name="txt_ht">

        <label>Tên đăng nhập</label>
        <input type="text" name="txt_tdn">

        <label>Mật khẩu</label>
        <input type="password" name="txt_mk">

        <label>Email</label>
        <input type="email" name="txt_email">

        <label>Giới tính</label>
        <input type="radio" name="rad_gt" value="Nam"> Nam
        <input type="radio" name="rad_gt" value="Nữ"> Nữ

        <label>Sở thích</label>
        <input type="checkbox" name="chk_sothich[]" value="Thể thao"> Thể thao
        <input type="checkbox" name="chk_sothich[]" value="Âm nhạc"> Âm nhạc
        <input type="checkbox" name="chk_sothich[]" value="Du lịch"> Du lịch

        <label>Quốc gia</label>
        <select name="sel_quocgia">
            <option value="Việt Nam">Việt Nam</option>
            <option value="Mỹ">Mỹ</option>
            <option value="Nhật Bản">Nhật Bản</option>
        </select>

        <label>Ghi chú</label>
        <textarea name="txta_ghichu"></textarea>

        <button type="submit">Đăng ký</button>
    </form>

    <div class="extra">
        <a onclick="showLogin()">Quay lại đăng nhập</a>
    </div>
</div>

<script>
function showRegister() {
    document.getElementById("login-box").style.display = "none";
    document.getElementById("register-box").style.display = "block";
}
function showLogin() {
    document.getElementById("register-box").style.display = "none";
    document.getElementById("login-box").style.display = "block";
}
</script>

</body>
</html>
