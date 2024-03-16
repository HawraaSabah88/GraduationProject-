<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>STAFF UPDATE</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="files/style.css">





</head>
<body><div class="header">
		<h1>Welcom Employee !</h1>
		<p>You have successfully completed your Account.</p>
	  </div>

	  
	  <div class="row">
	
		<div class="side">
		 
		 <h2>STAFF INFORMATION</h2>
		  <div class="fakeimg" style="height:300px;padding-bottom: 5px; ">
		<img width="150px"  height="200px"
		style="padding-bottom: 10px;"
		src="files/logo.jpg" alt="" srcset="">
		</div>
		</div>
		<div class="main" >

  <!-----------------Personal Information-------------------->
<div class="cityimage">

<div class="myDiv1">
<h3>Personal Information ( المعلومات الشخصية )</h3><hr>

<?php

//$fk_id = $_POST['fk_id'];



$id =$_GET['id'];
$conn =mysqli_connect("localhost","root","","info");

//$query ="SELECT * FROM pinfo,acinfo1,acinfo2,active1,active2,pap1,pap2,pap3 WHERE id='$id'";
$resul ="SELECT * FROM pinfo
	INNER JOIN acinfo1
	ON acinfo1.fk_id = pinfo.id
	INNER JOIN acinfo2
	ON acinfo2.fk_id = pinfo.id
	INNER JOIN active1
	ON active1.fk_id = pinfo.id
	INNER JOIN active2
	ON active2.fk_id = pinfo.id
	INNER JOIN pap1
	ON pap1.fk_id = pinfo.id
	INNER JOIN pap2
	ON pap2.fk_id = pinfo.id
	INNER JOIN pap3
	ON pap3.fk_id = pinfo.id
     WHERE pinfo.id=$id";


$query_run = mysqli_query($conn, $resul);
//if($query_run){ 
  
//$query1 ="SELECT * FROM pinfo WHERE pinfo.id=$id";
//$query_run1 = mysqli_query($conn, $query1);

if(mysqli_num_rows($query_run) > 0)
{ foreach($query_run as $row)
  {?>
	 <form action="A_S_C.php" method="POST" enctype="multipart/form-data" >
     <table>
 <tr>

					<td>الاسم الثلاثي بالعربي:</td>
					<td>

						<input type="text" name="tname1" value="<?php  echo $row['tname1']; ?>"size="25">
						<input type="hidden" name="user_id1"value="<?php  echo $row['id']; ?>"/>

					</td>
					</tr>
					<tr>
					<td>الاسم الثلاثي بالانكليزي :</td>
					<td>
						<input type="text" name="tname2"value="<?php  echo $row['tname2']; ?>" size="25">
					</td>	
  </tr>

				
    </table>
    <table>
     <tr>
					<td> Password :</td>
					<td>
						<input type="password" name="psw" value="<?php  echo $row['psw']; ?>"  size="25">
					</td></tr><tr>
					<td> رقم الهاتف :</td>
					<td>
						<input type="tel"name="num"
						value="<?php  echo $row['num']; ?>" style="height: 30px;width: 190px;" size="25">
					</td></br>
					

				</tr>
   </table>
   <table>
   <tr>
   <td>Email Personal( الايميل الشخصي ) :</td>
					<td>
						<input type="email" name="emailp" value="<?php  echo $row['emailp']; ?>" size="25">
					</td></tr><tr>
					<td>Email Formal( الايميل الجامعي ) :</td>
					<td>
						<input type="email" name="emailf" value="<?php  echo $row['emailf']; ?>" size="25">
				   </tr>
    </table>
    <table>
	<tr>
	<td> عنوان السكن : </td>
					<td>
						<input type="text" name="address" value="<?php  echo $row['address']; ?>"   size="25">
					</td></tr>
    </table>
    <table>
    <tr>
	<td>السيرة الذاتية</td>
					<td>
						<input type="file"name="cv_pdf" size="20">
						<input type="hidden" name="old_cv_pdf" value="<?php  echo $row['cv_pdf']; ?>"/>

					</td>
					<td>الصورة الشخصية</td>
					<td>
						<input type="file"name="image1" accept="image/*" size="20">
						<input type="hidden" name="old_image1" value="<?php  echo $row['image1']; ?>"/>

					</td>
					

				</tr>
   </table>
   </div>
   <div class="myDiv2">
   <img src="<?php echo "upload/".$row['image1'];?>" width="100%"height="100%" alt="Image"/>
    </div></div>
     <!-- ------------------------- Acadmic Information ------------- -->
    <div class="city">
     <h3>Acadmic Information ( المعلومات الاكاديمية )</h3><hr>
	 <?php
	 
?>
     <table>
	 <input type="hidden" name="user_id2"value="<?php  echo $row['fk_id']; ?>"/>
 
    	<tr>
		<td>التخصص العام </td>
		<td>					
		<input type="text" name="gfield" value="<?php  echo $row['gfield']; ?>">
       </td>
	   <td>التخصص الدقيق</td>
		<td>	
		<input type="text" name="sfield"  value="<?php  echo $row['sfield']; ?>">
        </td>
      </tr>
      <tr>
	  <td>الرتبة العلمية </td>
					<td>
						<input type="text" name="srank"  value="<?php  echo $row['srank']; ?>">
					</td>
					<td>تاريخ الرتبة العلمية </td>
                    <td>
						<input type="date" value="<?php  echo $row['srdate']; ?>" name="srdate">
					</td>
					<td>تاريخ التعيين </td>
					<td>
						<input type="date" value="<?php  echo $row['edate']; ?>" name="edate" >
					</td>
			
				</tr>
				<tr>
				
					<td>
						<input type="radio" name="bsradio"checked="checked"
						 <?php if (isset($bsradio) && $bsradio=="Yes")
                        echo "checked";?> value="'Yes">نعم
					</td><td>
						<input type="radio" name="bsradio" checked="checked"
						 <?php if (isset($bsradio) && $bsradio=="No")
                        echo "checked";?> value="'No">كلا
					</td>
					<td colspan="2"> هل لديك شهادة البكالوريوس</td>
					<td>BSC تاريخ شهادة</td>
					<td>
						<input type="date" name="bsdate"  value="<?php  echo $row['bsdate']; ?>">
					</td>
					</tr><tr>
					<td >شهادة البكالوريوس </td>
					<td>
						<input type="file" name="filecerbs" >
						<input type="hidden" name="old_filecerbs" value="<?php  echo $row['filecerbs']; ?>"/>

					</td>
			
				</tr>
				<?php
  //}
  
?>

<?php
?>
				<tr>
				<input type="hidden" name="user_id3"value="<?php  echo $row['fk_id']; ?>"/>
			
			
					<td>
						<input type="radio" name="msradio" checked="checked" 
                        <?php if (isset($msradio) && $msradio=="Yes")
                         echo "checked";?> value="Yes">نعم 
					</td>
					<td>
						<input type="radio" name="msradio"  checked="checked" 
                        <?php if (isset($msradio) && $msradio=="No")
                         echo "checked";?> value="No">كلا
					</td>
					<td colspan="2">هل لديك شهادة الماجستير</td>
					<td>MSC تاريخ شهادة </td>
					<td>
						<input type="date" name="msdate"value="<?php  echo $row['msdate']; ?>" >
					</td>
</tr><tr>
                     <td > شهادة الماجستير </td>
					<td>
						<input type="file" name="filecerms" >
						<input type="hidden" name="old_filecerms" value="<?php  echo $row['filecerms']; ?>"/>

					</td>
			
				</tr>


				<tr>
				
					<td>
						<input type="radio" name="pdradio"  checked="checked" 
                        <?php if (isset($pdradio) && $pdradio=="Yes")
                         echo "checked";?> value="Yes">نعم 
					</td>
					<td>
						<input type="radio" name="pdradio"  checked="checked" 
                        <?php if (isset($pdradio) && $pdradio=="No")
                         echo "checked";?> value="No">كلا
					</td>
					<td colspan="2">هل لديك شهادة الدكتوراه</td>
					<td>PHD تاريخ شهادة </td>
					<td>
						<input type="date" name="pddate" value="<?php  echo $row['pddate']; ?>">
					</td>
</tr><tr>
                    <td>PHD تاريخ شهادة </td>
					<td>
						<input type="file" name="filecerpd" >
						<input type="hidden" name="old_filecerpd" value="<?php  echo $row['filecerpd']; ?>"/>

					</td>
			
				</tr>
				
            </table>

       </div>
	   <?php
  

?>
           <!-- ------------------------- Activities ------------- -->
          <div class="citywork">
		  <h3>Activities (  الفعاليات )</h3><hr>
         <table>
		 <?php
		 
		?>        <tr>
              <td>عنوان الورشة </td>
		<td>		
		<input type="hidden" name="user_id4"value="<?php  echo $row['fk_id']; ?>"/>

		<input type="text" name="wkname1" value="<?php  echo $row['wkname1']; ?>" >
       </td>
					
					<td>
						<input type="radio" name="lecradio1" checked="checked"
                        <?php if (isset($lecradio1) && $lecradio1=="Lecture")
                        echo "checked";?> value="Lecture">محاضر
					</td>
					<td>
						<input type="radio" name="lecradio1"checked="checked"
                        <?php if (isset($lecradio1) && $lecradio1=="Attendence")
                        echo "checked";?> value="Attendence">حاضر
					</td>
					<td colspan="2"> هل كنت في الورشة </td>
					<br/>
				
					</tr>

					<tr>
					<td>تاريخ الورشة </td>
					<td>
						<input type="date" name="wkdate1" value="<?php  echo $row['wkdate1']; ?>" >

					</td>

					<td >ملف الورشة </td>
					<td>
						<input type="file" name="wkfile1" >
						<input type="hidden" name="old_wkfile1" value="<?php  echo $row['wkfile1']; ?>"/>

					</td>
				</tr>
			
           </table>
        <table>
          <tr>

		  <td>عنوان الورشة </td>
		<td>					
		<input type="text" name="wkname2" value="<?php  echo $row['wkname2']; ?>">
       </td>
			
					<td>
						<input type="radio" name="lecradio2"checked="checked"
                        <?php if (isset($lecradio2) && $lecradio2=="Lecture")
                        echo "checked";?> value="Lecture">محاضر
					</td>
					<td>
						<input type="radio" name="lecradio2" checked="checked"
                        <?php if (isset($lecradio2) && $lecradio2=="Attendence")
                        echo "checked";?> value="Attendence">حاضر
					</td>
					<td colspan="2"> هل كنت في الورشة  </td>
					<br/>

					</tr>

					<tr>
					<td>تاريخ الورشة</td>
					<td>
						<input type="date" name="wkdate2" value="<?php  echo $row['wkdate2']; ?>" >
					</td>

					<td >ملف الورشة </td>
					<td>
						<input type="file" name="wkfile2">
						<input type="hidden" name="old_wkfile2" value="<?php  echo $row['wkfile2']; ?>"/>

					</td></tr><tr>
					<td >اخرى</td>
					<td>
						<input type="file" name="wkfile3"  >
						<input type="hidden" name="old_wkfile3" value="<?php  echo $row['wkfile3']; ?>"/>

					</td></br>
				</tr>

				<?php
 
 
  
?>
          <?php
?>						
        </table>
       <table>
        <tr>
		<td>عنوان الدورة التدريبية </td>
		<td>	
				
		<input type="text" name="tcname1" value="<?php  echo $row['tcname1']; ?>">
		<input type="hidden" name="user_id5"value="<?php  echo $row['fk_id']; ?>"/>

       </td>
				
					<td>
						<input type="radio" name="lecradio3" 
                       <?php if (isset($lecradio3) && $lecradio3=="Lecture")
                       echo "checked";?> value="Lecture">محاضر
					</td>
					<td>
						<input type="radio" name="lecradio3"
						<?php if (isset($lecradio3) && $lecradio3=="Attendence")
                       echo "checked";?> value="Attendence">حاضر
					</td>
					<td colspan="2">هل كنت في الدورة التدريبية </td>
					<br/>

					</tr>

					<tr>
					<td>تاريخ الدورة التدريبية </td>
					<td>
						<input type="date" name="tcdate1"value="<?php  echo $row['tcdate1']; ?>" >
					</td>

					<td >ملف الدورة التدريبية </td>
					<td>
						<input type="file" name="tcfile1" >
						<input type="hidden" name="old_tcfile1" value="<?php  echo $row['tcfile1']; ?>"/>

					</td>
					
				</tr>



				<tr>


				<td>عنوان الدورة التدريبية </td>
		<td>					
		<input type="text" name="tcname2" value="<?php  echo $row['tcname2']; ?>">
       </td>
				
					<td>
						<input type="radio" name="lecradio4"
						 <?php if (isset($lecradio4) && $lecradio4=="Lecture")
                         echo "checked";?> value="Lecture">محاضر
					</td>
					<td>
						<input type="radio" name="lecradio4" 
						<?php if (isset($lecradio4) && $lecradio4=="Attendence")
                        echo "checked";?> value="Attendence">حاضر
					</td>
					<td colspan="2">هل كنت في الدورة التدريبية </td>
					</tr>

					<tr>
					<td>تاريخ الدورة التدريبية </td>
					<td>
						<input type="date" name="tcdate2"value="<?php  echo $row['tcdate2']; ?>" >
					</td>

					<td >ملف الدورة التدريبية </td>
					<td>
						<input type="file" name="tcfile2">
						<input type="hidden" name="old_tcfile2" value="<?php  echo $row['tcfile2']; ?>"/>

					</td></tr><tr>
					<td >اخرى</td>
					<td>
						<input type="file" name="tcfile3" >
						<input type="hidden" name="old_tcfile3" value="<?php  echo $row['tcfile3']; ?>"/>

					</td>
				</tr>
				</table>
				<?php
    //  }
     
          
        ?>

              </div>
          <!-- -------------------------Papers ------------- ----->
		  <?php
	 ?>
     <div class="city">
          <h3>Papers ( البحوث )</h3><hr><br>

	
			<table width="100%">
				<tr>
				<td>Sl No  </td>
					<td>عنوان البحث  </td>
					<td>اسماء المؤلفين  </td>
					<td>نوع البحث </td>
					<td>تاريخ البحث</td>
					<td>رابط البحث </td>
				</tr>
				<tr>
					<td>1</td>
					<td>
						<input type="text" name="pname1" size="20"value="<?php  echo $row['pname1']; ?>">
						<input type="hidden" name="user_id6" value="<?php  echo $row['fk_id']; ?>"/>

					</td>
					<td>
						<input type="text" name="aname1"  size="20"value="<?php  echo $row['aname1']; ?>">
					</td>
					<td>
						<input type="text" name="ptype1"  size="20"value="<?php  echo $row['ptype1']; ?>" >
					</td>
					<td>
						<input type="date" name="pdate1" size="20"value="<?php  echo $row['pdate1']; ?>">
					</td>
					<td>
						<input type="url" name="plink1" value="https://<?php  echo $row['plink1']; ?>" size="20">
					</td>
					
				</tr>
				<tr>
					<td>2</td>
					<td>
						<input type="text" name="pname2" size="20"value="<?php  echo $row['pname2']; ?>">
					</td>
					<td>
						<input type="text" name="aname2" size="20"value="<?php  echo $row['aname2']; ?>">
					</td>
					<td>
						<input type="text" name="ptype2" size="20"value="<?php  echo $row['ptype2']; ?>">
					</td>
					<td>
						<input type="date" name="pdate2" size="20"value="<?php  echo $row['pdate2']; ?>">
					</td>
					<?php
       //  }
   
        ?>


<?php
     	 
          ?>

					<td>
						<input type="url" name="plink2" value="https://<?php  echo $row['plink2']; ?>" size="20">
						<input type="hidden" name="user_id7" value="<?php  echo $row['fk_id']; ?>"/>

					</td>
				</tr>
				<tr>
					<td>3</td>
					<td>
						<input type="text" name="pname3" size="20"value="<?php  echo $row['pname3']; ?>">
					</td>
					<td>
						<input type="text" name="aname3" size="20"value="<?php  echo $row['aname3']; ?>">
					</td>
					<td>
						<input type="text" name="ptype3" size="20"value="<?php  echo $row['ptype3']; ?>" >
					</td>
					<td>
						<input type="date"  name="pdate3" size="20"value="<?php  echo $row['pdate3']; ?>">
					</td>
					<td>
						<input type="url" name="plink3" value="https://<?php  echo $row['plink3']; ?>" size="20">
					</td>
				</tr>
				<tr>
					<td>4</td>
					<td>
						<input type="text" name="pname4" size="20"value="<?php  echo $row['pname4']; ?>" >
					</td>
					<td>
						<input type="text" name="aname4" size="20"value="<?php  echo $row['aname4']; ?>" >
					</td>
					<td>
						<input type="text" name="ptype4" size="20"value="<?php  echo $row['ptype4']; ?>">
					</td>
					<?php
      //  }
      
        ?>
<?php
?>
					<td>
					<input type="hidden" name="user_id8"value="<?php  echo $row['fk_id']; ?>"/>

						<input type="date"  name="pdate4" size="20"value="<?php  echo $row['pdate4']; ?>">
					</td>
					<td>
					<input type="url" name="plink4" value="https://<?php  echo  $row['plink4']; ?>" size="20">
					</td>
				</tr>
			</table>
			</br></br>
		<table><tr>
			<td>Papers Link</td>
			<td>
						<input type="file" name="plinkfile">
						<input type="hidden" name="old_plinkfile" value="<?php  echo $row['plinkfile']; ?>"/>

					</td>

	</tr>
	<?php
 //}
  
  
?>        
	  </table>

	  <br><br><br>
	  <table>
	  <tr>
	  <td>
						<input style="background-color:#93a8a5; height: 40px; width: 90px;font-size:25px;  
						font-family: Times New Roman;" type="Submit" value="Submit" name="update"class="button">
					</td>
					<td>
						<a class="button" style=" none;height: 40px; width: 90px;font-size:25px;  background-color:#93a8a5; border-radius: 20%; font-family:Times New Roman ;
						 " href="../index.php">Log out</a>
					</td>
					
    </tr>
	</table>
	<?php
}}
  
  else
  {
	  echo"NO RECORD AVAIBALE";
  }
	
?>
</form>
          </div>
        <!-- -------------------------Footer ,The End------------- -->
		</div>
            
			</div></div>
				<!-- -------------------------Footer ,The End------------- -->
			<div class="footer">
			<h2><a  style="color:black;font-size:25px;" href="https://eng.nahrainuniv.edu.iq/computer/">COMP.ENG.</a></h2>
				 </div>
 
</body>
</html>

