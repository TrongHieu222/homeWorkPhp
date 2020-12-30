<?php


/**Sử dụng array_map để convert mảng trên thành integer type

//function setNumber($n)
//{
//    return ($n);
//}
//
//$aNumeric = [1, 2, 3, 4, 5];
//$b = array_map('setNumber', $aNumeric);
//print_r($b);

/**Sử dụng array_filter để xoá bỏ số lẻ

    function setNumber($var)
    {
    // returns whether the input integer is even
    return(!($var & 1));
    }
    //$array2 = array(6, 7, 8, 9, 10, 11, 12);
    $aNumeric = ["1", 2, 3, "4", "5"];
    echo "so le:\n";
    print_r(array_filter($aNumeric, "setNumber"));
 *
 *
 * *Sử dụng array_reduce để tính tổng của mảng trên
 *
 */

//function sumNumber($carry, $item)
//{
//    $carry += $item;
//    return $carry;
//}
//
//$aNumeric = array(1, 2, 3, 4, 5);
//$x = array();
//
//var_dump(array_reduce($aNumeric, "sumNumber")); // int(15)



/**Sử dụng serialize và json để encode mảng dưới đây

 */
//$aArray = ["Ban", "That", "Tuyet", "Voi", "Khi", "Xem", "Den", "Day"];
//echo json_encode($aArray);

$aArray = ["Ban", "That", "Tuyet", "Voi", "Khi", "Xem", "Den", "Day"];
echo serialize($aArray);