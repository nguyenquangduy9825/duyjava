<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $n = -456;
$temp = abs($n);
$dem = 0;

while ($temp > 0) {
    $dem++;
    $temp = intdiv($temp, 10);
}

echo $dem; // 3
?>

</body>
</html>