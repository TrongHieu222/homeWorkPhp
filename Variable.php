<?php
$txt = "Hello world!";
$TXT = "hieu";
$x = 5;
$y = 10.5;
echo "$TXT + $txt";
?>




<!--Khi nào nên dùng If else và khi nào nên dùng Switch -->
1.Switch - case sẽ giúp cấu trúc chương trình rõ ràng, dễ đọc, dễ hiểu hơn so với if-else.
2.Switch - case sẽ kiểm tra 1 biến để thực hiện nhieu trường hợp khác nhau,
còn if else phải kiểm tra nhiều điều kiện để thực hiện nhiều trường hợp khác nhau.
3.Trong trường hợp số điều kiện nhiều nên dùng switch case,


<!--Trình bày các cách để loop một mảng trong PHP. Lấy ví dụ cho từng cái. -->
1. while

<?php
$x = 0;

while($x <= 100) {
    echo "The number is: $x <br>";
    $x+=10;
}
?>

2. Do while

<?php
$x = 6;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);
?>

3.For
<?php
for ($i = 1; $i < 10; $i++)
{
for ($j = 9; $j >= $i; $j--)
{
echo $j;
}
echo '<br/>';;
}
?>
4. For each
<?php
$aAge = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($aAge as $x => $val) {
    echo "$x = $val<br>";
}
?>

<!--Sự khác biệt giữa continue và break. Lấy ví dụ. -->
1.Break sẽ dừng vòng lặp khi điều kiện đúng và out ra
2.Continue dừng lại khi gặp điều kiện đúng và chạy tiếp nếu còn vòng lặp

<?php
$x = 0;

while($x < 10) {
    if ($x == 4) {
        break;
    }
    echo "The number is: $x <br>";
    $x++;
}
?>

<?php
$x = 0;

while($x < 10) {
    if ($x == 4) {
        $x++;
        continue;
    }
    echo "The number is: $x <br>";
    $x++;
}
?>
