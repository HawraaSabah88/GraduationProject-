<?php
 
   session_start();
    require 'db.php';
   if(isset($_POST['loginn'])){
    
    $name = $_POST['name'];
    $password = $_POST['password'];
    
    $sql ="SELECT * FROM Login WHERE  name='$name'&& password='$password'";

   if(mysqli_num_rows(mysqli_query($conn, $sql)) > 0){
        $_SESSION['name'] = $name;
        header("Location: cp.php");
    }else {
        echo'حدث خطأ //الاسم او الباسورد خطأ';
    }
}
 

  /*   جلب اسم المستخدم وكلمة المرور والاتصال بقاعدة البيانات لغرض المطابقة  */

  
  


    


 
?>

  
<html lang="en">
 
<head>
    
    <title>login</title>

</head>
<body> 
<center>
<p class="plog">سجل الدخول أن كنت سجلت سابقا في المجلة</p>
<br>
<form class="box" method="POST" >
    <h1>log in</h1>
     <fieldset class="form-item"><legend>التسجيل</legend>
    USER NAME:
    <input class="put2" type="text" name="name"  required/><br/>

    PASSWORD:
    <input class="put2"  type="password" name="password"/><br/>
    
    <button class="putbut" type="submit" name="loginn" >LOG IN</button>
    </fieldest>
    </center>
    
    </FORM>
</body>

 
</html>

<?php
	 session_start();
	if(isset($_POST['Submit'])){
    $fullname = $_POST['fullname'];
   
    $req ="SELECT * FROM intro WHERE  fullname='$fullname'";

   if(mysqli_num_rows(mysqli_query($conn, $req)) > 0){
        $_SESSION['fullname'] = $fullname;
        header("Location: e21%.php");
    }else {
        echo'حدث خطأ //الاسم او الباسورد خطأ';
    }
}
echo 'تم أرسال رسالتك بنجاح ...أهلا بكم';
?>
 
 