<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mảng</title>
</head>
<body>
    <h1 style="color:red";>nguyễn quang duy 20233525</h1>
    <?php 
    echo " bài tập 1";
    $a= array(25,78,34,7,8);
    $tong=0;
    echo "mảng các số là ";
    for($i=0;$i<count($a);$i++){
        echo "$a[$i]";
        $tong +=$a[$i];
    }
    echo "<br>";
    echo"tổng các phần tử của mảng a là :$tong ";
    echo "<br>";
    echo " bài tập 2 :";
    echo "<br>";
    $monhoc=array("LT cơ bản ",
"lập trình web","lập trình java ",
"kĩ thuật đồ họa máy tính ");
echo " danh sách các môn học : ";

foreach($monhoc as $mh){
 echo "- " . $mh . "<br>";

    
}

    ?>
    
</body>
</html>