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

var_dump($_POST);
if (isset($_POST["number1"]) && isset($_POST["number2"]) && isset($_POST["caculate"] )) {

    $n1 = $_POST["number1"];
    $n2 = $_POST["number2"];
    $caculate = $_POST["caculate"];

}
?>

    <div class="content"></div>
    <h1>Mô phỏng máy tính điện tử</h1>
    <form action="#" method="post" name="main-form">

        <div class="row">
            <span> Số thứ nhất</span>
            <input type="text" name="number 1" value=" <?php  echo $n1;?>">
        </div>

        <div class="row">
            <span> Phép toán</span>
            <input type="text" name="caculate" value=" <?php echo $n2;?>">
        </div>

        <div class="row">
            <span> Số thứ hai</span>
            <input type="text" name="number2">
        </div>

        <div class="row">
            <input type="submit" name="xemketqua" value="xemketqua">
        </div>
    </form>
</body>
</html>