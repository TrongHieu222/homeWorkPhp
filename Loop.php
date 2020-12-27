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

<ol>
    <div class="content2">
        <h1>vẽ tam giác</h1>
            <?php
            for($i = 0; $i < 20; $i++) {
                for($j = (20 - $i); $j < 20; $j++) {
                    echo "*";
                }
                echo "<br>";
            }
            ?>
    </div>
</ol>

</body>
</html>