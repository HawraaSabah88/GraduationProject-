<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>form</title>
	<link rel="stylesheet" href="files/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

<div class="header">
		<h1>Hi Employee !</h1>
		<p>Let's Create Your Account...</p>
	  </div>

	  
	  <div class="row">
		<div class="side">
		 
		 <h2>STAFF INFORMATION</h2>


		  <div class="fakeimg" style="height:300px; padding-bottom: 5px; ">
		<img width="150px"  height="200px" style="padding-bottom: 10px;"
		 src="files/logo.jpg" alt="" srcset=""/>
		</div>
		</div>
		<div class="main" >
  <!-----------------Personal Information-------------------->
<div class="cityimage" >
<div class="myDiv1">
	 <form action="A_A_Code.php" method="POST" enctype="multipart/form-data" >
     <table>
 <tr>
	 <h3>Personal Information ( المعلومات الشخصية )</h3><hr>

					<td>الاسم الثلاثي بالعربي:</td>
					<td>
						<input type="text" name="tname1" size="25">
						<input type="hidden" name="id" size="20">

					</td></tr><tr>
					<td>الاسم الثلاثي بالانكليزي :</td>
					<td>
						<input type="text" name="tname2" size="20">
					</td>
					

				</tr>
    </table>
    <table>
     <tr>
					<td> Password :</td>
					<td>
						<input type="password" name="psw"  size="25">
					</td></tr><tr>
					<td> رقم الهاتف :</td>
					<td>
						<input type="number" name="num"

						style="height: 30px; width: 190px;"  size="25">
					</td>
					

				</tr>
   </table>
   <table>
   <tr>
					<td>Email Personal( الايميل الشخصي ) :</td>
					<td>
						<input type="email" name="emailp" size="25">
					</td></tr><tr>
					<td>Email Formal( الايميل الجامعي ) :</td>
					<td>
						<input type="email" name="emailf" size="25">
				   </tr>
    </table>
    <table>
	<tr>
					<td> عنوان السكن : </td>
					<td>
						<input type="text" name="address"  size="25">
					</td></tr>
    </table>
    <table>
    <tr>
					<td>السيرة الذاتية</td>
					<td>
						<input type="file"name="cv_pdf" placeholder="First Name" size="25">
					</td>
					
					<td>
						<input type="file"name="image1" accept="image/*" size="25">
					</td>
					<td>الصورة الشخصية</td>

				</tr>
   </table>
   </div>
   <div class="myDiv2">
   <img src="upload\defult.png" style="width:100%; height: 100%"/>
    </div></div>
     <!-- ------------------------- Acadmic Information ------------- -->
    <div class="city">
     <h3>Acadmic Information ( المعلومات الاكاديمية )</h3><hr>
     <table>
    	<tr>
		<td>التخصص العام </td>
		<td>					
		<input type="text" name="gfield" value="work">
       </td>
		<td>التخصص الدقيق </td>
		<td>	
		<input type="text" name="sfield" value="work">
        </td>
      </tr>
      <tr>
					<td>الرتبة العلمية </td>
					<td>
						<input type="text" name="srank" value="work">
					</td>
					<td>تاريخ الرتبة العلمية </td>
                    <td>
						<input type="date" name="srdate">
					</td>
					<td>تاريخ التعيين </td>
					<td>
						<input type="date" name="edate" >
					</td>
			
				</tr>
				<tr>
				
					<td>
						<input type="radio" name="bsradio" value="yes">نعم
					</td>
					<td>
						<input type="radio" name="bsradio" value="No">كلا
					</td>
					<td colspan="2"> هل لديك شهادة البكالوريوس</td>
					<td>BSC تاريخ شهادة</td>
					<td>
						<input type="date" name="bsdate" >
					</td></tr><tr>

					<td >شهادة البكالوريوس </td>
					<td>
						<input type="file" name="filecerbs"  size="10">
					</td>
			
				</tr>

				<tr>
					
					<td>
						<input type="radio" name="msradio" value="yes">نعم
					</td>
					<td>
						<input type="radio" name="msradio" value="No">كلا
					</td>
					<td colspan="2">هل لديك شهادة الماجستير</td>
					<td>MSC تاريخ شهادة </td>
					<td>
						<input type="date" name="msdate" >
					</td></tr><tr>

					<td > شهادة الماجستير </td>
					<td>
						<input type="file" name="filecerms"   size="25" >
					</td>
			
				</tr>


				<tr>
					
					<td>
						<input type="radio" name="pdradio" value="yes">نعم
					</td>
					<td>
						<input type="radio" name="pdradio" value="no">كلا
					</td>
					<td colspan="2">هل لديك شهادة الدكتوراه</td>
					<td>PHD تاريخ شهادة </td>
					<td>
						<input type="date" name="pddate" >
					</td></tr><tr>

					<td >شهادة الدكتوراه</td>
					<td>
						<input type="file" name="filecerpd"  size="25">
					</td>
			
				</tr>
				
            </table>

       </div>
           <!-- ------------------------- Activities ------------- -->
          <div class="citywork">
            <h3>Activities (  الفعاليات )</h3><hr>
         <table>
           <tr>

                <td>عنوان الورشة </td>
		<td>					
		<input type="text" name="wkname1" value="work">
       </td>
					<br>
					<td>
						<input type="radio" name="lecradio1" value="Lecture">محاضر 
					</td>
					<td>
						<input type="radio" name="lecradio1" value="Attendence">حاضر 
					</td>
					<td colspan="2"> هل كنت في الورشة </td>
					</tr>

					<tr>
					<td>تاريخ الورشة </td>
					<td>
						<input type="date" name="wkdate1" >
					</td>

					<td >ملف الورشة </td>
					<td>
						<input type="file" name="wkfile1" >
					</td>
				</tr>
			
           </table>
        <table>
          <tr>

           <td>عنوان الورشة </td>
		<td>					
		<input type="text" name="wkname2" value="work">
       </td>
					<br>
					<td>
						<input type="radio" name="lecradio2" value="Lecture">محاضر 
					</td>
					<td>
						<input type="radio" name="lecradio2" value="Attendence">حاضر 
					</td>
					
					<td colspan="2"> هل كنت في الورشة  </td>
					</tr>

					<tr>
					<td>تاريخ الورشة</td>
					<td>
						<input type="date" name="wkdate2" >
					</td>

					<td >ملف الورشة </td>
					<td>
						<input type="file" name="wkfile2" >
					</td></tr><tr>
					<td >اخرى </td>
					<td>
						<input type="file" name="wkfile3" >
					</td></br>
				</tr>


			
        </table>
       <table>
        <tr>
         <td>عنوان الدورة التدريبية </td>
		<td>					
		<input type="text" name="tcname1" value="work">
       </td>
					
					<td>
						<input type="radio" name="lecradio3" value="yes">محاضر 
					</td>
					<td>
						<input type="radio" name="lecradio3" value="no">حاضر 
					</td>
					<td colspan="2">هل كنت في الدورة التدريبية </td>
					<br/>

					</tr>

					<tr>
					<td>تاريخ الدورة التدريبية </td>
					<td>
						<input type="date" name="tcdate1" >
					</td>

					<td >ملف الدورة التدريبية </td>
					<td>
						<input type="file" name="tcfile1" >
					</td>
					
				</tr>



				<tr>


          <td>عنوان الدورة التدريبية </td>
		<td>					
		<input type="text" name="tcname2" value="work">
       </td>
					
					<td>
						<input type="radio" name="lecradio4" value="yes">محاضر 
					</td>
					<td>
						<input type="radio" name="lecradio4" value="no">حاضر
					</td>
					<td colspan="2">هل كنت في الدورة التدريبية </td>
					</tr>

					<tr>
					<td>تاريخ الدورة التدريبية </td>
					<td>
						<input type="date" name="tcdate2" >
					</td>

					<td >ملف الدورة التدريبية </td>
					<td>
						<input type="file" name="tcfile2" >
					</td></tr><tr>
					<td >اخرى </td>
					<td>
						<input type="file" name="tcfile3" >
					</td>
				</tr>
				</table>


              </div>
          <!-- -------------------------Papers ------------- ----->

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
						<input type="text" name="pname1" size="20">
					</td>
					<td>
						<input type="text" name="aname1"  size="20">
					</td>
					<td>
						<input type="text" name="ptype1"  size="20">
					</td>
					<td>
						<input type="date" name="pdate1" size="20">
					</td>
					<td>
						<input type="url" name="plink1" value="https://" size="20">
					</td>
					
				</tr>
				<tr>
					<td>2</td>
					<td>
						<input type="text" name="pname2" size="20">
					</td>
					<td>
						<input type="text" name="aname2" size="20">
					</td>
					<td>
						<input type="text" name="ptype2" size="20">
					</td>
					<td>
						<input type="date" name="pdate2" size="20">
					</td>
					<td>
						<input type="url" name="plink2" value="https://" size="20">
					</td>
				</tr>
				<tr>
					<td>3</td>
					<td>
						<input type="text" name="pname3" size="20">
					</td>
					<td>
						<input type="text" name="aname3" size="20">
					</td>
					<td>
						<input type="text" name="ptype3" size="20">
					</td>
					<td>
						<input type="date"  name="pdate3" size="20">
					</td>
					<td>
						<input type="url" name="plink3" value="https://" size="20">
					</td>
				</tr>
				<tr>
					<td>4</td>
					<td>
						<input type="text" name="pname4" size="20">
					</td>
					<td>
						<input type="text" name="aname4" size="20">
					</td>
					<td>
						<input type="text" name="ptype4" size="20">
					</td>
					<td>
						<input type="date"  name="pdate4" size="20">
					</td>
					<td>
						<input type="url" name="plink4" value="https://" size="20">
					</td>
				</tr>
			</table>
			</br></br>
		<table><tr>
			<td>ملف البحوث </td>
			<td>
						<input type="file" name="plinkfile" >
					</td>

	</tr>
                
	  </table>
	  <br><br><br>
	  <table>
	  <tr>
                    <td>
						<input style="background-color:#93a8a5; height: 40px;width: 90px;font-size:25px;  font-family: "Times New Roman type="Submit" value="Submit" name="submit"class="button">
					</td>
					<td>
						<input  style="background-color:#93a8a5; height: 40px;width: 90px;font-size:25px;  font-family: "Times New Roman", Times, serif;" type="Reset" value="Reset" name="reset" class="button">
					</td>
					</form>
    </tr>
	</table>
	</div>
            
 </div></div>
     <!-- -------------------------Footer ,The End------------- -->
 <div class="footer">
 <h2><a  style="color:black;font-size:25px;" href="https://eng.nahrainuniv.edu.iq/computer/">COMP.ENG.</a></h2>
	  </div>
</body>
</html>

