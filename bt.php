<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
   <h1 style="color:red;">Họ và tên sinh viên : Nguyễn Quang Duy :20233525
</h1>

    
    <?php
    
echo "<h3>Bài 1. Viết hàm tính n!</h3>";
// --- Hàm 1: Không tham số, không trả về (Sửa lại logic của bạn) ---
echo "<b>1. Hàm không tham số:</b><br>";
function giaithua1() {
    $n = 5; 
    $gt = 1;
    for ($i = 1; $i <= $n; $i++) {
        $gt *= $i;
    }
    // SỬA LỖI: Đưa echo vào bên trong hàm
    echo "$n! = " . $gt; 
}
giaithua1(); 

echo "<br><br>";

// --- Hàm 2: Có tham số, không trả về ---
echo "<b>2. Hàm có tham số:</b><br>";
function giaithua2($n) {
    $gt = 1;
    for ($i = 1; $i <= $n; $i++) {
        $gt *= $i;
    }
    echo "$n! = " . $gt . "<br>";
}

giaithua2(5);
giaithua2(10);
// hàm ko tham số có giá trị trả về 
echo " <b><br> bài 2 hàm ko tham số có giá trị trả về <b><br>";
function giaithua3 (){
    $n=5;$gt=1;
    for ($i=0;$i<=5;$i++) {
        $gt*=$n;
    }
    return $gt;


}
echo " giai thừa của 5 là ".giaithua3()."<br>";
// hàm có tham số có giá trị trả về 
echo " <b> 4. hàm có tham số có giá trị trả về <b><br>";
function giaithua4($n){
    // dữ liệu đầu vào qua lời gọi của hàm
    // in kết quả thực hiện qua chương trình chính 
    $gt=1;
    for ($i=0;$i<=5;$i++) {
        $gt*=$n;
    }
    return $gt;

}
echo "giai thừa là :".giaithua4(5);
// phân biệt biến cục bộ và biến toàn phần 
// viết hàm tính tổng bình phương của 2
function  tong($a,$b){
    
     $a = $a*$a;
     $b= $b*$b;
 $tong= $a+$b;
    return $tong;
}
$a=2;
$b=4;
$kq= tong($a,$b);
 echo "<br> a=$a";
 echo "<br> b=$b";
 echo "<br> Tổng là: $kq";
echo "<br></br>";
 echo " đề bài : khai báo mảng hàng hóa mỗi hàng hóa tên hàng mã hàng ";
 // sử dụng đa chiều
 // mỗi phần tử là mảng 1 chiều 
 // mảng 1 chiều khai báo mảng kết hợp 
 $hanghoa = [
    ["mahang"=>"mh01","tenhang"=>"bút bi",
    "soluong"=>100,"dongia"=>5000],
    ["mahang"=>"mh02",
    "tenhang"=>"thước kẻ ","soluong"=>200,"dongia"=>2500],
    ["mahang"=>"mh03","tenhang"=>"vở kẻ ngang ","soluong"=>200,"dongia"=>1500]
 ];
 echo "<b> danh sách hàng hóa <b><br>";
 $tong=0;
 foreach($hanghoa as $mh){
    $thanhtien=$mh['soluong']*$mh['dongia'];
    $tong+=$thanhtien;
    echo "mã hàng:".$mh['mahang']."<br>";
     echo "tên hàng :".$mh['tenhang']."<br>";
      echo "đơn giá :".$mh['dongia']."<br>";
       echo "số lượng :".$mh['soluong']."<br>";
       echo "thành tiền  :".$thanhtien."<br>";
     
       

    
 }
 echo "tổng tiền các mặt hàng là:$tong$";
 // thêm tiền = số lượng nhân với đơn giá
 // tổng tiền các mặt hàng

 


?>
    
</body>
</html>