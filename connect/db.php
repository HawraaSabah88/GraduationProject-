<?php
$server="localhost";         /*  DB Host  معلومات في قاعدة البيانات باسم */
$user='root';     /*   DB User اسم المستخدم لقاعدة البيانات  */
$pas='';     /*   الباسورد المعطى لقاعدة البياناتpassword  */
$db="staff_information";  /*         DB Name  اسم قاعدة البيانات    */

$conn=@(mysqli_connect($server,$user,$pas,$db)) or die;

 if($conn)
 echo "";
 else {
     echo"no connect";
 }
 


?>
