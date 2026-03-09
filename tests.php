<!DOCTYPE html>
<html lang="en">
<head>
    <h1>nguyễn quốc khánh : 20233456</h1>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Các câu lệnh điều khiển</title>
</head>
<body>
    <?php
    //Câu lệnh điều kiện
    echo "<b>VD1. Kiểm tra 1 số là số chẵn hay số lẻ:</b><br>";
    $n=9;
    if($n%2==0){
        echo "$n là số chẵn";

    }
     else{
        echo "$n là số lẻ";

    }
echo "<br><b>VD2.GPT ax+b=0:</b><br>";
    $a=7;
    $b=25;
    if($a==0){
        if($b==0){
            echo "Phương trình vô số nghiệm";
        }
        else{
            echo "Phương trình vô nghiệm";
        }
    }
    else{
        $x=-$b/$a;
        echo "Phương trình có nghiệm x=$x";
    }
echo "<br><b>VD3. Xét xếp loại </b><br>";
/*
- nếu dtb >=9 thì loại XS
- nếu 8=<dtb<9 thì loại Giỏi
- nếu 7=<dtb<8 thì loại Khá
- nếu 5=<dtb<7 thì loại TB
- Còn lại thì loại Yếu
*/
$dtb=8.8;
if($dtb>=9){
    echo "Xếp loại Xuất sắc";
}
elseif($dtb>=8){
    echo "Xếp loại Giỏi";
}
elseif($dtb>=7){
    echo "Xếp loại Khá";
}
elseif($dtb>=5){
    echo "Xếp loại Trung bình";
}
else{
    echo "Xếp loại Yếu";
}
//BTVN: cho 3 số. Kiểm tra 3 số này có phải là 3 cạnh của tam giác không?
//Switch..case
echo "<br><b>VD4. Thực hiện phép tính +-*/ </b><br>";
$a=8;$b=5;
$pheptinh="/";
switch($pheptinh){
    case "+": echo "Tổng 2 số là: ".$a+$b;
    break;
    case "-": echo "Hiệu 2 số là: ".$a-$b;
    break;
    case "*": echo "Tích 2 số là: ".$a*$b;
    break;
    case "/": echo "Thương 2 số là: ".$a/$b;
    break;
    default: echo "Phép tính không hợp lệ";
    break;
}
//BTVN2: Nhập 1 ngày trong tuần. In ra tên tiếng anh tương ứng với ngày đó
// Câu lệnh lặp: for, while, do..while
echo "<br><B>VD5. Tính tổng và đếm số chữ số nhỏ hơn n chia hết cho 5 và chia hết cho 2</b><br>";
$n=40; $tong=0;$dem=0;
for($i=1;$i<40;$i++){
    if($i%5==0 && $i%2==0){
        $tong+=$i;
        $dem++;
    }
}
    echo "Tổng cần tìm là: ".$tong."<br>";
    echo "Số chữ số thỏa mãn điều kiện là: ".$dem;  
    echo"<br><b>VD6.Tìm UCLN của 2 số while</b><br>";
    $x=9;$y=27;
    while($x!=$y){
        if($x>$y){
            $x=$x-$y;
        }
        else{
            $y=$y-$x;
        }
    }
    echo"UCLN của 9 và 27 là: $x";
    //viết lại sử dụng do...while
echo "<br><b>VD6. Tìm UCLN của 2 số do..while</b><br>";
$m = 10;
$n = 15;
do {
    if ($m > $n) {
        $m = $m - $n;
    } else {
        $n = $n - $m;
    }
} while ($m != $n);

echo "UCLN của 10 và 15 là: $m";
?>

</body>
</html>