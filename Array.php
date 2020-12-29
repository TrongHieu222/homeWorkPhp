<?php
$aStudent = [
    "SV001" => [
        "name" => "john",
        "sex" => "1",
        "score" => [
            "math" => 4,
            "english" => 5,
            "physic" => 7,
        ]
    ],
    "SV002" => [
        "name" => "Mary",
        "sex" => "2",
        "score" => [
            "math" => 5,
            "english" => 9,
            "physic" => 7,
        ]
    ],
    "SV003" => [
        "name" => "Mary",
        "sex" => "2",
        "score" => [
            "math" => 5,
            "english" => 8,
            "physic" => 10,
        ]
    ]
];
foreach ($aStudent as $key => $value) {
        echo "name:" . $value["name"] . "<br/>";
        echo "sex:" . $value["sex"] . "<br/>" ;
        echo "score:" . array_sum($value["score"]) . "<br/>";
        }




//$result = 0;
//$aSoNguyen = [
//    1,2,3,4,5,6,7,8,9,10
//
//];
//foreach ($aSonguyen as $bienTam ){
//    if ($bienTam %2==0){
//        $result += $bienTam;
//    }
//}
//    echo $result;
//
//$aMangKhongLienTuc = [
//    "hieu" => "ha noi",
//    "dat" => "tuyen quan",
//    "trang" => "tuyen quang",
//    "ha" => "dongtimo",
//    "tienanh" => "thai",
//    "tu" => "lao",
//    "khai" => "tuyen quang",
//    "hoa" => "phu tho",
//    "phuong" => "tuyen quang",
//    "thang" => "campuchia",
//    "dat" => "an do",
//];
//foreach ($aMangKhongLienTuc as $nguoiTuyenQuang => $tuyenQuang){
//    if ($tuyenQuang == "tuyen quang"){
//        echo "ngươi tuyen quang la  ". $nguoiTuyenQuang ."<br/>";
//    }
//
//}
//
//$aMangRandom = [];
//for ($x=0;$x<=100;$x++)
//{
//   array_push($aMangRandom,rand());
//} ; foreach ($aMangRandom as $x ){
//    echo $x;
//}





