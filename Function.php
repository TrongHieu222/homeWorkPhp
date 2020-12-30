<!--Tác dụng của funcition-->
<!--1.Giảm lặp code trong chương trình-->
<!--2.Hàm giúp dễ bảo trì hơn-->
<!--3.Hàm giúp dễ loại bỏ lỗi-->
<!--4.Có thể sử dụng lại-->
<!---->
<!--/**-->
<!--* Tránh lặp code trong tiếng anh là : Duplicate-->
<!--* Tạo function myFullName có arguments là $firstName và $lastName là các args bắt buộc-->

<?php
//function myFullName($firstName, $lastName)
//{
//    echo "$firstName", $lastName;
//}
//
//;
//myFullName('hieu', 'trong');
//?>

<!--/** Tạo function myFullName có argument $firstName là một optional-->
<?php
//function myFullName( $firstName = 'hieu',$lastName){
//    echo $firstName,$lastName;
//}
//myFullName('trong');
//?>
<!---->
<!--/**-->
<!--*Tạo function myFullName nhận vào args $firstName và $lastName và  là một function có giá trị trả về -->

<?php
//$firstName=12;
//$lastName=12;
//function myFullName($firstName, $lastName){
//    $result = $firstName + $lastName;
//    return $result;
//}
//echo myFullName($lastName,$firstName);
//?>
<!---->
<?php
/**
 * Tác dụng của hàm func_get_args
 * * Trả về một mảng bao gồm danh sách tham số truyền vào của hàm
 * Tác dụng call_user_func
 * Gọi lệnh gọi lại được cung cấp bởi tham số đầu tiên
 *
 *
 *  Tác dụng của attribute for trong label là gì
 * * Thuộc tính for trong label cũng giống với id trong input nó dùng để định danh thẻ label
 *
 * Giải thích cách viết
 *  $sex = $value["sex"] == 1 ? "Boy" : "Girl" . "<br/>";
 *
 * Nếu biến $sex bằng 1 in ra là boy nếu là 2 in ra là girl theo em hiểu thì đây là if rút gọn
 *
 * Em đã hiểu cách comment nhiều dòng mà anh nói nhưng đối với các bài mà viết code xong mới
 * comment thi k thể dùng cách này
 *
 *
 * Phạm vi của biến
 * 1.Biến toàn cục(global)
 * 2.Biến cục bộ(local)
 * 3.Biến tĩnh(static)
 *
 */
//
//?>
<!---->
<?php
//
//$x = 5; // global
//
//function myTest()
//{
//    echo "<p>Variable x inside function is: $x</p>"; //error
//}
//
//myTest();
//echo "<p>Variable x outside function is: $x</p>";
//?>
<!---->
<?php
//function myTest() {
//    $x = 5; // local
//    echo "<p>Variable x inside function is: $x</p>";
//}
//myTest();
//echo "<p>Variable x outside function is: $x</p>";//error
//?>
<!---->
<?php
//function myTest() {
//    static $x = 0;
//    echo $x;
//    $x++;
//}
//
//myTest();
//myTest();
//myTest();
?>
<?php
/**Phân biệt include và require
đều là dùng để tải nội dung bên ngoài file chương trình khi gặp lôi
 * include báo lỗi và chạy tiếp
 * require dừng lại
 * * Phân biệt include và include_once
 * lệnh require_once chỉ import đúng một lần, nghĩa là khi bạn sử
 * dụng hai lệnh require_once cùng một file thì ở lệnh require_once
 * thứ hai nó sẽ thấy là đã xử lý rồi nên nó sẽ không thực thi nữa.
 *
 * Tương tự với require
 */

?>



