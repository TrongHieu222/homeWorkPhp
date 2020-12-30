<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    $aLapTops = ['Samsung', 'Apple', 'HP', 'Dell', 'Interface', 'Google Pixel'];
    if (isset($_POST['text'])) {
        $name = $_POST['text'];
        echo "$name" . "<br/>";

        foreach ($aLapTops as $key => $value) {
           $check = strpos(strtoupper($value),strtoupper($name));
           echo "$value ";
            if ($check == true){
                echo "$value" . "<br/>";

            }
        }
    }



?>

 <form action="" method="post">
     <input type="text" name="text">
     <input type="submit" name="submit">
 </form>
</body>
</html>