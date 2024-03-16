<?php
$conn =mysqli_connect("localhost","root","","info");
//// table 1 pinfo

if (isset($_POST['submit'])) {
 
    $tname1 = $_POST['tname1'];
  
    $tname2 = $_POST['tname2'];
  
    $psw = $_POST['psw'];
  
    $num = $_POST['num'];
  
    $emailp = $_POST['emailp'];
  
    $emailf = $_POST['emailf'];
  
    $address = $_POST['address'];
  
    $cv_pdf = $_FILES['cv_pdf']['name'];
    $image1 = $_FILES['image1']['name'];
  
  
  
    $sql1 = "INSERT INTO `pinfo`(`tname1`, `tname2`, `psw`, `num`, `emailp`
    , `emailf`, `address`, `cv_pdf`, `image1`)
     VALUES ('$tname1','$tname2','$psw','$num','$emailp','$emailf',
     '$address','$cv_pdf','$image1')";
  
     $query_run1 =mysqli_query($conn,$sql1);
  
     if($query_run1)
     {
     // كود مهم لرفع الصور وحفظها بفولدر اسمه uplouded    
     
          move_uploaded_file($_FILES["cv_pdf"]["tmp_name"], "upload/".$_FILES["cv_pdf"]["name"]);
          move_uploaded_file($_FILES["image1"]["tmp_name"], "upload/".$_FILES["image1"]["name"]);

          $_SESSION['status'] = "Image Storted successfully";
          header("Location: ../Admin/Admin.php");}

// table 2 acinfo1 

          $fk_id = $conn->insert_id;

          $gfield	 = $_POST['gfield'];

          $sfield = $_POST['sfield'];
        
          $srank = $_POST['srank'];
        
          $srdate = $_POST['srdate'];
        
          $edate = $_POST['edate'];
        
          $bsradio = $_POST['bsradio'];
        
          $bsdate = $_POST['bsdate'];
        
          $filecerbs = $_FILES['filecerbs']['name'];
        
        
        
          $sql1 = "INSERT INTO `acinfo1`(`fk_id`,`gfield`, `sfield`, `srank`, `srdate`, `edate`
          , `bsradio`, `bsdate`, `filecerbs`)
           VALUES ('$fk_id','$gfield','$sfield','$srank','$srdate','$edate','$bsradio',
           '$bsdate','$filecerbs')";
        
           $query_run1 =mysqli_query($conn,$sql1);
        
           if($query_run1)
           {
           // كود مهم لرفع الصور وحفظها بفولدر اسمه uplouded    
           
                move_uploaded_file($_FILES["filecerbs"]["tmp_name"], "upload/".$_FILES["filecerbs"]["name"]);
           
                $_SESSION['status'] = "Image Storted successfully";
                header("Location: ../Admin/Admin.php");
               }
// table acinfo2
$fk_id = $conn->insert_id;

$msradio = $_POST['msradio'];

  $msdate = $_POST['msdate'];

  $filecerms = $_FILES['filecerms']['name'];

  $pdradio = $_POST['pdradio'];

  $pddate = $_POST['pddate'];

  $filecerpd = $_FILES['filecerpd']['name'];


  $sql2 = "INSERT INTO `acinfo2`(`fk_id`,`msradio`, `msdate`, `filecerms`, `pdradio`, `pddate`
  , `filecerpd`)
   VALUES ('$fk_id','$msradio','$msdate','$filecerms','$pdradio','$pddate','$filecerpd')";

   $query_run2 =mysqli_query($conn,$sql2);

   if($query_run2)
   {
   // كود مهم لرفع الصور وحفظها بفولدر اسمه uplouded    
   
        move_uploaded_file($_FILES["filecerms"]["tmp_name"], "upload/".$_FILES["filecerms"]["name"]);
        move_uploaded_file($_FILES["filecerpd"]["tmp_name"], "upload/".$_FILES["filecerpd"]["name"]);

   
        $_SESSION['status'] = "Image Storted successfully";
        header("Location: ../Admin/Admin.php");
      }
   // table active1
  // $fk_id = $conn->insert_id;

   $wkname1 = $_POST['wkname1'];

   $lecradio1 = $_POST['lecradio1'];

   $wkdate1 = $_POST['wkdate1'];
// file 1
   $wkfile1 = $_FILES['wkfile1']['name'];


   $wkname2 = $_POST['wkname2'];

   $lecradio2 = $_POST['lecradio2'];

   $wkdate2 = $_POST['wkdate2'];
//file 2
   $wkfile2 = $_FILES['wkfile2']['name'];

//file 3
   $wkfile3 = $_FILES['wkfile3']['name'];


  
   $sql4 = "INSERT INTO `active1`(`fk_id`,`wkname1`, `lecradio1`, `wkdate1`, `wkfile1`, `wkname2`
   , `lecradio2`, `wkdate2`, `wkfile2`, `wkfile3`)
    VALUES ('$fk_id','$wkname1','$lecradio1','$wkdate1','$wkfile1','$wkname2','$lecradio2',
    '$wkdate2','$wkfile2','$wkfile3')";

   $query_run3 =mysqli_query($conn,$sql4);

   if($query_run3)
 {
   move_uploaded_file($_FILES["wkfile1"]["tmp_name"], "upload/".$_FILES["wkfile1"]["name"]);
   move_uploaded_file($_FILES["wkfile2"]["tmp_name"], "upload/".$_FILES["wkfile2"]["name"]);
   move_uploaded_file($_FILES["wkfile3"]["tmp_name"], "upload/".$_FILES["wkfile3"]["name"]);
   $_SESSION['status'] = "file Storted successfully";

   header("Location: ../Admin/Admin.php");
}
// table active 2
  // $fk_id = $conn->insert_id;

$tcname1 = $_POST['tcname1'];

$lecradio3 = $_POST['lecradio3'];

$tcdate1 = $_POST['tcdate1'];

$tcfile1 = $_FILES['tcfile1']['name'];

$tcname2 = $_POST['tcname2'];

$lecradio4 = $_POST['lecradio4'];

$tcdate2 = $_POST['tcdate2'];

$tcfile2 = $_FILES['tcfile2']['name'];

$tcfile3 = $_FILES['tcfile3']['name'];



$sql5 = "INSERT INTO `active2`(`fk_id`,`tcname1`, `lecradio3`, `tcdate1`, `tcfile1`, `tcname2`
, `lecradio4`, `tcdate2`, `tcfile2`, `tcfile3`)
 VALUES ('$fk_id','$tcname1','$lecradio3','$tcdate1','$tcfile1','$tcname2','$lecradio4',
 '$tcdate2','$tcfile2','$tcfile3')";

$query_run4 =mysqli_query($conn,$sql5);

if($query_run4)
{
move_uploaded_file($_FILES["tcfile1"]["tmp_name"], "upload/".$_FILES["tcfile1"]["name"]);
move_uploaded_file($_FILES["tcfile2"]["tmp_name"], "upload/".$_FILES["tcfile2"]["name"]);
move_uploaded_file($_FILES["tcfile3"]["tmp_name"], "upload/".$_FILES["tcfile3"]["name"]);
$_SESSION['status'] = "File Storted successfully";
header("Location: ../Admin/Admin.php");
}

// table pap 1
// $fk_id = $conn->insert_id;

$pname1 = $_POST['pname1'];

$aname1 = $_POST['aname1'];

$ptype1 = $_POST['ptype1'];

$pdate1 = $_POST['pdate1'];

$plink1 = $_POST['plink1'];

$pname2 = $_POST['pname2'];

$aname2 = $_POST['aname2'];

$ptype2 = $_POST['ptype2'];

$pdate2 = $_POST['pdate2'];

$sql11 = "INSERT INTO `pap1`(`fk_id`,`pname1`, `aname1`, `ptype1`, `pdate1`, `plink1`
, `pname2`, `aname2`, `ptype2`, `pdate2`)
 VALUES ('$fk_id','$pname1','$aname1','$ptype1','$pdate1','$plink1','$pname2',
 '$aname2','$ptype2','$pdate2')";

$query_run11 =mysqli_query($conn,$sql11);

if($query_run11)
{
    $_SESSION['status'] = "File Storted successfully";
    header("Location: ../Admin/Admin.php");
}

// table pap2
// $fk_id = $conn->insert_id;
$plink2 = $_POST['plink2'];

$pname3 = $_POST['pname3'];

$aname3 = $_POST['aname3'];

$ptype3 = $_POST['ptype3'];

$pdate3 = $_POST['pdate3'];

$plink3 = $_POST['plink3'];

$pname4 = $_POST['pname4'];

$aname4 = $_POST['aname4'];

$ptype4 = $_POST['ptype4'];

$sql12 = "INSERT INTO `pap2`(`fk_id`,`plink2`, `pname3`, `aname3`, `ptype3`, `pdate3`
, `plink3`, `pname4`, `aname4`, `ptype4`)
 VALUES ('$fk_id','$plink2','$pname3','$aname3','$ptype3','$pdate3','$plink3',
 '$pname4','$aname4','$ptype4')";

$query_run12 =mysqli_query($conn,$sql12);

if($query_run12)
{
    $_SESSION['status'] = "File Storted successfully";
    header("Location: ../Admin/Admin.php");
}
// table pap3
// $fk_id = $conn->insert_id;

$pdate4	 = $_POST['pdate4'];
 
$plink4 = $_POST['plink4'];

$plinkfile = $_FILES['plinkfile']['name'];


$sql14 = "INSERT INTO `pap3`(`fk_id`,`pdate4`, `plink4`, `plinkfile`)
 VALUES ('$fk_id','$pdate4','$plink4','$plinkfile')";

 $query_run14 =mysqli_query($conn,$sql14);

 if($query_run14)
 {
 // كود مهم لرفع الصور وحفظها بفولدر اسمه uplouded    
 
      move_uploaded_file($_FILES["plinkfile"]["tmp_name"], "upload/".$_FILES["plinkfile"]["name"]);
 
      $_SESSION['status'] = "Image Storted successfully";
      header("Location: ../Admin/Admin.php");
   }
//////////////////////////////////////////////////////////////////////////////////////
     $result =$conn->query($query_run1);
/////////////////////////////////////////////////////////////////



header("Location: ../Admin/Admin.php");
}
     else
     {
         $_SESSION['status'] = "Image not inserted..!";
         header("Location: ../Admin/Admin.php");
      }
     
   
  ?>