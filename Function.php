<!--Tác dụng của funcition-->
<!--1.Giảm lặp code trong chương trình-->
<!--2.Hàm giúp dễ bảo trì hơn-->
<!--3.Hàm giúp dễ loại bỏ lỗi-->
<!--4.Có thể sử dụng lại-->


<!--Tạo function myFullName có arguments là $firstName và $lastName là các args bắt buộc-->
<?php
//function myFullName($firstName, $lastName)
//{
//    echo "$firstName", $lastName;
//}
//
//;
//myFullName('hieu', 'trong');
//?>

<!---->
<?php
//    function checkNumber($value){
//        echo $value . "<br/>";
//        if ($value % 2 ==0 ){
//            return true;
//        }else {
//            return false;
//        }
//    }
//    $result = checkNumber(20);
//    if($result==true){
//        echo "so chan";
//    }else{
//        echo "so le";
//    }
//?>

<?php
//$students = array();
//$students["SV001"] = array("name" => "john", "sex" =>1, "score" => array(4,5,6));
//$students["SV002"] = array("name" => "Marry", "sex" =>2, "score" => array(5,6,6));
//$students["SV003"] = array("name" => "johnthan", "sex" =>1, "score" => array(6,7,6));


$students = array(
    "SV001" => array("name" => "Jonh", "sex" => "1", "score" => array(4, 5, 6)),
    "SV002" => array("name" => "Marry", "sex" => "2", "score" => array(4, 5, 6)),
    "SV003" => array("name" => "Jonhtham", "sex" => "1", "score" => array(4, 5, 6)),

);


//// Ten cua SV002
//echo $students["SV002"]["name"] . "<br/>";  //Marry
////Diem mon thu 2 cua SV003
//echo $students["SV003"]["score"][1] . "<br/>"; //5
////Thay doi ten SV002 thanh hieu
//$students["SV002"]["name"] = "Hieu";
//echo "<pre>";
//print_r($students);
//echo "</pre>";
$score = array(6, 7, 5, 8);


//if(!empty($students)) {
//    foreach ($students as $key => $value) {
//        $name = $value["name"] . "<br/>";
//        $sex =  $value["sex"]==1 ? "Boy" : "Girl" . "<br/>";
//        $score = $value["score"];
//        $total = 0;
//        for ($i = 0; $i < count($score); $i++) {
//            $total += $score[$i];
//        }
//        echo "Name: " . $name . " - sex: " . $sex . " - score " . $total . "<br/>";
//        }
//}

//k can for de tinh tong

if (!empty($students)) {
    foreach ($students as $key => $value) {
//        var_dump($key, $value["name"]);
        $name = $value["name"] . "<br/>";
        $sex = $value["sex"] == 1 ? "Boy" : "Girl" . "<br/>";
        $score = array_sum($value["score"]);
    }
    echo "Name: " . $name . " - sex: " . $sex . " - score " . $score . "<br/>";
}

?>

