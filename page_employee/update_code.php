<?php
$conn =mysqli_connect("localhost","root","","info");

$Sql="SELECT id from pinfo";
if(mysqli_num_rows(mysqli_query($conn, $Sql)) > 0){

$query_run1 = mysqli_query($conn, $Sql);
foreach($query_run1 as $row)
{
  $id=$row['id'];
}}
/*
$query1000 ="UPDATE pinfo, acinfo1, acinfo2, active1, active2,pap1,pap2,pap3
SET pinfo.id = acinfo1.id
WHERE pinfo.id = table13.id 
AND pinfo.bval2 = table13.cval1
WHERE
AND pinfo.bval2 = table13.cval1
WHERE
AND table12.bval2 = table13.cval1
WHERE
AND table12.bval2 = table13.cval1
WHERE
AND table12.bval2 = table13.cval1
WHERE
AND table12.bval2 = table13.cval1
WHERE  ";
if (mysqli_num_rows($conn,$query1000)){}*/

////////////code table 1 pinfo

if(isset($_POST['update'])){   

    $tname1 = $_POST['tname1'];
    $id = $_POST['user_id1'];
    $tname2 = $_POST['tname2'];
    $psw = $_POST['psw'];
      $num = $_POST['num'];
      $emailp = $_POST['emailp'];
      $emailf = $_POST['emailf']; 
      $address = $_POST['address'];
    
  // FILE 1
     $new_cv_pdf = $_FILES['cv_pdf']['name'];
      $old_cv_pdf = $_POST['old_cv_pdf'];

       // FILE 2
    $new_image1 = $_FILES['image1']['name'];
    $old_image1 = $_POST['old_image1']; 
      ////////////////the end de////////////////
  // 2 files 
    if($new_cv_pdf != '') 
      {$update_cv_pdf = $_FILES['cv_pdf']['name'];}
    else { $update_cv_pdf = $old_cv_pdf; }
    if(file_exists("upload/" . $_FILES['cv_pdf']['name']))
    { $filename1 = $_FILES['cv_pdf']['name'];
     $_SESSION['status'] = "Image already Exists".$filename1;}

//2 files
if(file_exists("upload/" . $_FILES['image1']['name']))
{ $filename11 = $_FILES['image1']['name'];
$_SESSION['status'] = "Image already Exists".$filename11;}

if($new_image1 != '') 
{$update_image1 = $_FILES['image1']['name'];}
else { $update_image1 = $old_image1; }

header("Location: staff_update.php?id=$id");


   
  /////////////////////////////
    $query1 ="UPDATE pinfo SET 
    tname1='$tname1',
    tname2='$tname2',
    psw='$psw',
    num='$num',
    emailp='$emailp',
    emailf='$emailf',
    address='$address',

    cv_pdf='$update_cv_pdf',
    image1='$update_image1'
  
     WHERE id='$id' ";
  
    $query_run11 = mysqli_query($conn, $query1);
  
    if($query_run11)
    {
     // if($_FILES['filecerms']['name'] . $_FILES['filecerpd']['name'] !='')
    //  { }
          move_uploaded_file($_FILES["cv_pdf"]["tmp_name"], "upload/".$_FILES["cv_pdf"]["name"]);
          move_uploaded_file($_FILES["image1"]["tmp_name"], "upload/".$_FILES["image1"]["name"]);

          unlink("upload/".$old_cv_pdf);
          unlink("upload/".$old_image1);

     
    

      /*
      if($_FILES['filecerpd']['name'] !='')
      {
          move_uploaded_file($_FILES["filecerpd"]["tmp_name"], "upload/".$_FILES["filecerpd"]["name"]);
          unlink("upload/".$old_filecerpd);
      }
      */
      $_SESSION['status'] = "Image UPDATED successfully";
      header("Location: staff_update.php?id=$id");
    }
    else
    {
      $_SESSION['status'] = "Image not UPDATED..!";
      header("Location: staff_update.php?id=$id");
    }
  
    }
////////////code table 2 acinfo1

if(isset($_POST['update'])){   

    $gfield = $_POST['gfield'];
    $id = $_POST['user_id2'];
    $sfield = $_POST['sfield'];
     $srank = $_POST['srank'];
       $srdate = $_POST['srdate'];
        $edate = $_POST['edate'];
        $bsradio = $_POST['bsradio']; 
        $bsdate = $_POST['bsdate'];
      
    // FILE 1
       $new_filecerbs = $_FILES['filecerbs']['name'];
        $old_filecerbs = $_POST['old_filecerbs'];

        ////////////////the end de////////////////
    // 1 files 
    if(file_exists("upload/" . $_FILES['filecerbs']['name']))
    { $filename1 = $_FILES['filecerbs']['name'];
     $_SESSION['status'] = "Image already Exists".$filename1;}

      if($new_filecerbs != '') 
        {$update_filecerbs = $_FILES['filecerbs']['name'];}
      else { $update_filecerbs = $old_filecerbs; }
   
     
      header("Location: staff_update.php?id=$id");

  
     
    /////////////////////////////
      $query22 ="UPDATE acinfo1 SET 
      gfield='$gfield',
      sfield='$sfield',
      srank='$srank',
      srdate='$srdate',
      edate='$edate',
      bsradio='$bsradio',
      bsdate='$bsdate',
      filecerbs='$update_filecerbs'
      where fk_id='$id'";
    
      $query_run22 = mysqli_query($conn, $query22);
    
      if($query_run22)
      {

            move_uploaded_file($_FILES["filecerbs"]["tmp_name"], "upload/".$_FILES["filecerbs"]["name"]);
  
            unlink("upload/".$old_filecerbs);
  

        $_SESSION['status'] = "Image UPDATED successfully";
        header("Location: staff_update.php?id=$id");
      }
      else
      {
        $_SESSION['status'] = "Image not UPDATED..!";
        header("Location: staff_update.php?id=$id");
      }
    
      }
      ////////////code table 2 acinfo2
      if(isset($_POST['update'])){   

        $msradio = $_POST['msradio'];
        $id = $_POST['user_id3'];
        $msdate = $_POST['msdate'];
        // FILE 1
        $new_filecerms = $_FILES['filecerms']['name'];
        $old_filecerms = $_POST['old_filecerms'];
    
        $pdradio = $_POST['pdradio'];
          $pddate = $_POST['pddate'];
      // FILE 2
         $new_filecerpd = $_FILES['filecerpd']['name'];
          $old_filecerpd = $_POST['old_filecerpd'];
          ////////////////the end de////////////////
      // 1 file
        if($new_filecerms != '') 
          {$update_filename3 = $_FILES['filecerms']['name'];}
        else { $update_filename3 = $old_filecerms; }
        if(file_exists("upload/" . $_FILES['filecerms']['name']))
        { $filename3 = $_FILES['filecerms']['name'];
         $_SESSION['status'] = "Image already Exists".$filename3;}
    
    //2 file
    
    if(file_exists("upload/" . $_FILES['filecerpd']['name']))
    { $filename33 = $_FILES['filecerpd']['name'];
    $_SESSION['status'] = "Image already Exists".$filename33;}
    if($new_filecerpd != '') 
    {$update_filename33 = $_FILES['filecerpd']['name'];}
    else { $update_filename33 = $old_filecerpd; }
    
    header('Location: staff_update.php?id=');
    
       ///////////////////////////////////
       
      /////////////////////////////
        $query3 ="UPDATE acinfo2 SET 
        msradio='$msradio',
        msdate='$msdate',
        filecerms='$update_filename3',
        pdradio='$pdradio',
        pddate='$pddate',
        filecerpd='$update_filename33'
      
         WHERE fk_id='$id' ";
      
        $query_run33 = mysqli_query($conn, $query3);
      
        if($query_run33)
        {
         // if($_FILES['filecerms']['name'] . $_FILES['filecerpd']['name'] !='')
        //  { }
              move_uploaded_file($_FILES["filecerms"]["tmp_name"], "upload/".$_FILES["filecerms"]["name"]);
              move_uploaded_file($_FILES["filecerpd"]["tmp_name"], "upload/".$_FILES["filecerpd"]["name"]);
    
              unlink("upload/".$old_filecerms);
              unlink("upload/".$old_filecerpd);
    
         
        
    
          /*
          if($_FILES['filecerpd']['name'] !='')
          {
              move_uploaded_file($_FILES["filecerpd"]["tmp_name"], "upload/".$_FILES["filecerpd"]["name"]);
              unlink("upload/".$old_filecerpd);
          }
          */
          $_SESSION['status'] = "Image UPDATED successfully";
          header("Location: staff_update.php?id=$id");
        }
        else
        {
          $_SESSION['status'] = "Image not UPDATED..!";
          header("Location: staff_update.php?id=$id");
        }
      
        }
      
      ////////////code table 4 active 1
      if(isset($_POST['update'])){   

        $wkname1 = $_POST['wkname1'];
        $id = $_POST['user_id4'];
        $lecradio1 = $_POST['lecradio1'];
        $wkdate1 = $_POST['wkdate1'];
    
        // FILE 1
        $new_wkfile1 = $_FILES['wkfile1']['name'];
        $old_wkfile1 = $_POST['old_wkfile1'];
    
        $wkname2 = $_POST['wkname2'];
          $lecradio2 = $_POST['lecradio2'];
          $wkdate2 = $_POST['wkdate2'];
    
      // FILE 2
         $new_wkfile2 = $_FILES['wkfile2']['name'];
          $old_wkfile2 = $_POST['old_wkfile2'];
          
      // FILE 3
         $new_wkfile3 = $_FILES['wkfile3']['name'];
         $old_wkfile3 = $_POST['old_wkfile3'];
          ////////////////the end de////////////////
    ////////////test///////////////////
    
     //1 files 
     if($new_wkfile1 != '') 
     {$update_wkfile1 = $_FILES['wkfile1']['name'];}
    else { $update_wkfile1 = $old_wkfile1; }
    if(file_exists("upload/" . $_FILES['wkfile1']['name']))
    { $filename444 = $_FILES['wkfile1']['name'];
    $_SESSION['status'] = "Image already Exists".$filename444;}
    
    //2 files
    if(file_exists("upload/" . $_FILES['wkfile2']['name']))
    { $filename4444 = $_FILES['wkfile2']['name'];
    $_SESSION['status'] = "Image already Exists".$filename4444;}
    
    if($new_wkfile2 != '') 
    {$update_wkfile2 = $_FILES['wkfile2']['name'];}
    else { $update_wkfile2 = $old_wkfile2; }
    
    //3 files
    if($new_wkfile3 != '') 
     {$update_wkfile3 = $_FILES['wkfile3']['name'];}
    else { $update_wkfile3 = $old_wkfile3; }
    if(file_exists("upload/" . $_FILES['wkfile3']['name']))
    { $filename44444 = $_FILES['wkfile3']['name'];
    $_SESSION['status'] = "Image already Exists".$filename44444;}
    
    header('Location: staff_update.php?id=');
    ////////////////////////////////
     
     
        $query4 ="UPDATE active1 SET 
        wkname1='$wkname1',
        lecradio1='$lecradio1',
        wkdate1='$wkdate1',
        wkfile1='$update_wkfile1',
        wkname2='$wkname2',
        lecradio2='$lecradio2',
        wkdate2='$wkdate2',
        wkfile2='$update_wkfile2',
        wkfile3='$update_wkfile3'
         WHERE fk_id='$id' ";
    
    
      
        $query_run4 = mysqli_query($conn, $query4);
      
        if($query_run4)
        {
          
              move_uploaded_file($_FILES["wkfile1"]["tmp_name"], "upload/".$_FILES["wkfile1"]["name"]);
              move_uploaded_file($_FILES["wkfile2"]["tmp_name"], "upload/".$_FILES["wkfile2"]["name"]);
              move_uploaded_file($_FILES["wkfile3"]["tmp_name"], "upload/".$_FILES["wkfile3"]["name"]);
    
              unlink("upload/".$old_wkfile1);
              unlink("upload/".$old_wkfile2);
              unlink("upload/".$old_wkfile3); 
    
         
          $_SESSION['status'] = "Image UPDATED successfully";
          header("Location: staff_update.php?id=$id");
        }
        else
        {
          $_SESSION['status'] = "Image not UPDATED..!";
          header("Location: staff_update.php?id=$id");
        }
       
      
      }
      ////////////code table 5 active 2
      if(isset($_POST['update'])){   

        $tcname1 = $_POST['tcname1'];
        $id = $_POST['user_id5'];
        $lecradio3 = $_POST['lecradio3'];
        $tcdate1 = $_POST['tcdate1'];
       
        // FILE 1
        $new_tcfile1 = $_FILES['tcfile1']['name'];
        $old_tcfile1 = $_POST['old_tcfile1'];
       
        $tcname2 = $_POST['tcname2'];
          $lecradio4 = $_POST['lecradio4'];
          $tcdate2 = $_POST['tcdate2'];
       
       // FILE 2
         $new_tcfile2 = $_FILES['tcfile2']['name'];
          $old_tcfile2 = $_POST['old_tcfile2'];
          
       // FILE 3
         $new_tcfile3 = $_FILES['tcfile3']['name'];
         $old_tcfile3 = $_POST['old_tcfile3'];
          ////////////////the end de////////////////
       // file 1 
       if($new_tcfile1 != '') 
       {$update_tcfile1 = $_FILES['tcfile1']['name'];}
       else { $update_tcfile1 = $old_tcfile1; }
       if(file_exists("upload/" . $_FILES['tcfile1']['name']))
       { $filename5 = $_FILES['tcfile1']['name'];
       $_SESSION['status'] = "File already Exists".$filename5;}
       // file 2
       if(file_exists("upload/" . $_FILES['tcfile2']['name']))
       { $filename55 = $_FILES['tcfile2']['name'];
       $_SESSION['status'] = "File already Exists".$filename55;}
        if($new_tcfile2 != '') 
          {$update_tcfile2 = $_FILES['tcfile2']['name'];}
        else { $update_tcfile2 = $old_tcfile2; }
       
       
       // file 3
       if($new_tcfile3 != '') 
       {$update_tcfile3 = $_FILES['tcfile3']['name'];}
       else { $update_tcfile3 = $old_tcfile3; }
       if(file_exists("upload/" . $_FILES['tcfile3']['name']))
       { $filename555 = $_FILES['tcfile3']['name'];
       $_SESSION['status'] = "File already Exists".$filename555;}
       
       
       
       header("Location: staff_update.php?id=$id");
       
       
       /////////////////////////////
        $query5 ="UPDATE active2 SET 
        tcname1='$tcname1',
        lecradio3='$lecradio3',
        tcdate1='$tcdate1',
        tcfile1='$update_tcfile1',
        tcname2='$tcname2',
        lecradio4='$lecradio4',
        tcdate2='$tcdate2',
        tcfile2='$update_tcfile2',
        tcfile3='$update_tcfile3'
         WHERE fk_id='$id'";
       
        $query_run55 = mysqli_query($conn, $query5);
       
        if($query_run55)
        {
          
              move_uploaded_file($_FILES["tcfile1"]["tmp_name"], "upload/".$_FILES["tcfile1"]["name"]);
              move_uploaded_file($_FILES["tcfile2"]["tmp_name"], "upload/".$_FILES["tcfile2"]["name"]);
              move_uploaded_file($_FILES["tcfile3"]["tmp_name"], "upload/".$_FILES["tcfile3"]["name"]);
       
       
              unlink("upload/".$old_tcfile1);
       
          
            unlink("upload/".$old_tcfile2);
       
            unlink("upload/".$old_tcfile3); 
         
          $_SESSION['status'] = "File UPDATED successfully";
          header("Location: staff_update.php?id=$id");
        }
        else
        {
          $_SESSION['status'] = "File not UPDATED..!";
          header("Location: staff_update.php?id=$id");
        }
       
       
       }
      ////////////code table 6 pap 1

       if (isset($_POST['update'])) {

        $pname1 =$_POST['pname1'];
        $id = $_POST['user_id6'];
        $aname1 =$_POST['aname1'];
        $ptype1 =$_POST['ptype1'];
        $pdate1 =$_POST['pdate1'];
        $plink1 =$_POST['plink1'];
        $pname2 =$_POST['pname2'];
        $aname2 =$_POST['aname2'];
        $ptype2 =$_POST['ptype2'];
        $pdate2 =$_POST['pdate2'];
        header('Location: staff_update.php?id=');

        $sql66 ="UPDATE `pap1` SET
         `pname1`='$pname1',
         `aname1`='$aname1',
         `ptype1`='$ptype1',
         `pdate1`='$pdate1',
        `plink1`='$plink1',
        `pname2`='$pname2',
        `aname2`='$aname2',
        `ptype2`='$ptype2',
        `pdate2`='$pdate2'

         WHERE `fk_id`='$id'"; 

$query_run66 = mysqli_query($conn, $sql66);

if($query_run66)
{
    $_SESSION['status'] = "File UPDATED successfully";
    header("Location: staff_update.php?id=$id");
  }  
else
{
    $_SESSION['status'] = "File UPDATED successfully";
    header("Location: staff_update.php?id=$id");
  }

    }
      ////////////code table 7 pap 2

      if (isset($_POST['update'])) {

        $plink2 =$_POST['plink2'];
        $id = $_POST['user_id7'];
        $pname3 =$_POST['pname3'];
        $aname3 =$_POST['aname3'];
        $ptype3 =$_POST['ptype3'];
        $pdate3 =$_POST['pdate3'];
        $plink3 =$_POST['plink3'];
        $pname4 =$_POST['pname4'];
        $aname4 =$_POST['aname4'];
        $ptype4 =$_POST['ptype4'];

        header("Location: staff_update.php?id=$id");

        $sql77 ="UPDATE `pap2` SET
         `plink2`='$plink2',
         `pname3`='$pname3',
         `aname3`='$aname3',
         `ptype3`='$ptype3',
        `pdate3`='$pdate3',
        `plink3`='$plink3',
        `pname4`='$pname4',
        `aname4`='$aname4',
        `ptype4`='$ptype4'

         WHERE `fk_id`='$id'"; 

$query_run77 = mysqli_query($conn, $sql77);

if($query_run77)
{
    $_SESSION['status'] = "File UPDATED successfully";
    header("Location: staff_update.php?id=$id");
  }  
else
{
    $_SESSION['status'] = "File UPDATED successfully";
    header("Location: staff_update.php?id=$id");
  }

    }
      ////////////code table 8 pap 3

      if(isset($_POST['update'])){   
  
        $pdate4 = $_POST['pdate4'];
        $id = $_POST['user_id8'];
        $plink4 = $_POST['plink4'];
          $new_plinkfile = $_FILES['plinkfile']['name'];
          $old_plinkfile= $_POST['old_plinkfile'];
      // if $new_image = 0 else take $old_imag
        if($new_plinkfile != '')
          {
             $update_plinkfile = $_FILES['plinkfile']['name'];
          }
       
        else
         {
          $update_plinkfile = $old_plinkfile;
         }
      //////////////--------------///////////////////
      if(file_exists("upload/" . $_FILES['plinkfile']['name']))
      {
       $filename8 = $_FILES['plinkfile']['name'];
       $_SESSION['status'] = "File already Exists".$filename8;}
       header("Location: staff_update.php?id=$id");
       $query8 ="UPDATE pap3 SET 
        pdate4='$pdate4',
        plink4='$plink4',
        plinkfile='$update_plinkfile'
      
         WHERE fk_id='$id' ";
      
        $query_run88 = mysqli_query($conn, $query8);
      
        if($query_run88)
        {
          if($_FILES['plinkfile']['name'] !='')
          {
              move_uploaded_file($_FILES["plinkfile"]["tmp_name"], "upload/".$_FILES["plinkfile"]["name"]);
              unlink("upload/".$old_plinkfile);
          }
          $_SESSION['status'] = "File UPDATED Successfully";
          header("Location: staff_update.php?id=$id");
        }
        else
        {
          $_SESSION['status'] = "File not UPDATED..!";
          header("Location: staff_update.php?id=$id");
        }
       
      } 
      

    ?>






