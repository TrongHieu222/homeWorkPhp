<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mo phong may tinh dien tu</title>
</head>
<body>
<?php
$n1 = "";
$n2 = "";
$caculate = "";

if (is_numeric($n1) && is_numeric($n2)) {
    switch ($caculate) {
        case "+":
            $result = $n1 + $n2;
            break;
        case "-":
            $result = $n1 - $n2;
        case "*":
            $result = $n1 * $n2;
            break;
        case "/":
            $result = $n1 / $n2;
            break;
        case "%":
            $result = $n1 % $n2;
            break;
        default:
            ;
            break;
    }

}else{
    $result = "Khong thuc hien duoc";

}
if (isset($_POST['number1']) && isset($_POST['number2']) && isset($_POST['caculate'])) {

    $n1 = $_POST['number1'];
    $n2 = $_POST['number2'];
    $caculate = $_POST['caculate'];

    switch ($caculate) {
        case "+":
            $result = $n1 + $n2;
            break;
        case "-":
            $result = $n1 - $n2;
        case "*":
            $result = $n1 * $n2;
            break;
        case "/":
            $result = $n1 / $n2;
            break;
        case "%":
            $result = $n1 % $n2;
            break;
        default:
            ;
            break;
    }


}
?>
<div class="content"></div>
<h1>Mô phỏng máy tính điện tử</h1>
<form action="#" method="post" name="main-form">
    <div class="row">
        <label for="">Số thứ nhất</label>
        <input type="text" name="number1" value="<?php echo $n1; ?>">
    </div>
    <div class="row">
        <label for="">Phép toán</label>
        <input type="text" name="caculate" value="<?php echo $caculate; ?>">
    </div>
    <div class="row">
        <label for="">Số thứ hai</label>
        <input type="text" name="number2" value="<?php echo $n2; ?>">
    </div>
    <div class="row">
        <input type="submit" name="xemketqua" value="xemketqua">
    </div>
    <div class="row">
        <p>Ket qua <?php echo $n1 . " " . $caculate . " " . $n2 . " = " . $result; ?> </p>
    </div>
</form>
</body>
</html>


<?php
//$number = 12;
//
//if ($number >= 0 && $number % 2 == 0) {
//    $result = "Nguyen duong chan";
//} elseif ($number >= 0 && $number % 2 == 1) {
//    $result = "Nguyen duong le";
//} else {
//    $result = "Nguyen am le";
//}
//
//?>