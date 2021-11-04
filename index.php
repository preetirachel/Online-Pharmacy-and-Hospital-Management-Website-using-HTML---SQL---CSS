<html>
<head>
<title> VIT Hospital </title>

<link href="css/style.css" type="text/css" rel="stylesheet">

</head>
<body>

<div class="top">
<div>
Contact Us +91 96366 20000 / 01 | VIT@hospital.com
</div>
</div>

<div class="logo">
<div>
<table>
<tr>
<td width="600px" style="font-size:50px;font-family:forte;"> <font color="#428bca"> VIT  </font><font color="#000"> Hospital</font> </td>
<td> <br> <br>
<font size="4px">
<a href="index.html">HOME</a>
<a href="about.html">ABOUT US</a>
<a href="service.html">SERVICE</a>
<a href="doctor.html">PHARMACY</a>
<a href="contact.html">CONTACT US</a>
</font>
</td>
</tr>
</table>
</div>
</div>

<div class="middle">
<div style="background-image:url('img/a.jpg');">
<p>
<br> <br>
Health Care Services  <br>
<font size="5px"> We Care About Your Health </font>
</p>
</div>
</div>

<div class="bottom">
<div>
<table border="0">
<tr>
<td width="700px">
<font color="#000"> The best medical center in Chennai  </font> <br> <br>

<font color="#000" size="5px"> We Have Medicare Plan Options for You! </font> <br> <br>

VIT Hospital welcomes you to our website! We provide the best healthcare for the people of vellore, Tempting discounts for VIT students and VIT Alumni. <br><br>

At VIT hospital,we provide the best services,we use modern technologies,and have highly reputed doctors here to help you.
Choose the preferred package from below, however if you're a student or alumni of VIT consult the concerned authority for a discount <br><br>
<ul>
<li>Medical checkup
<p>To get a medical checkup,you can simply book an appointment with the doctor of your choice.</p>
<li>Nursing Services
<p>Our nurses are available 24x7 to proovide help and support to the patients. If you
require nurses to take care of the elderly or the paralysed at home,you can call us for more information.</p>
<li>Pharmacy
<p>The pharmacy at out hospital has a wide array of medicines.You will not have to go to a seperate shop to get your medicines,
all the medicines prescribed by the doctor will be available at the pharmacy store 24x7 </p>
<li>Gym service
<p>we care about your physical and mental health,join our gym to lead a better and healthier life.</p>
<li>Neurology
<p>Our specially euipped neuro- surgeons are there to help you with any condition related to the brain.</p>
</ul>
<br>
</td>


<td> </td>
</tr>


</table>
</div>
</div>

<div class="bottom_up">
<div>
Make an Appointment
<form method="post">

<table>

<tr>
<td width="500px"> </td>
<td>	<input type="text" placeholder="First Name" name="fn">
<td> 	<input type="text" placeholder="Last Name" name="ln">
</tr>
<tr height="30px">

</tr>
<tr>
<td width="500px"> </td>
<td>	<input type="text" placeholder="Email Id" name="email">
<td> 	<input type="text" placeholder="Mobile No" name="mobile">
</tr>

<tr height="30px">

</tr>
<tr>
<td width="500px"> </td>
<td>	<select> <option name="sex"> -- Sex -- </option> <option> Male </option> <option> Female </option> </select>
<td> 	<input type="text" placeholder="Appointment date" name="appointment">
</tr>

<tr height="30px">

</tr>
<tr>
<td width="500px"> </td>
<td colspan="2">	<textarea placeholder="Message" name="text"> </textarea>
</tr>

<tr height="30px">

</tr>
<tr>
<td width="500px"> </td>
<td colspan="2">	<button type='submit' value="submit"> SUBMIT </button>

</tr>
</form>
</table>




<?php
    //connect to the data base
    $host="localhost";
    $uname="root";
    $pass="";
    $dbname="patient";
    // if data is submitted it is added to the database
    if(isset($_POST['submit']))
    {
        $fn=$_POST['fn'];
        $ln=$_POST['ln'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $sex=$_POST['sex'];
      
        $appointment=$_POST['appointment'];
        $text=$_POST['text'];
        $query= "INSERT INTO patient(fn,ln,email,mobile,sex,appointment,text)VALUES('$fn','$ln','$email','$mobile','$sex','$appointment','$text')";
        
        $con=mysql_connect($host,$uname,$pass);
        $result=mysql_select_db("$patient",$con);
        $result=mysql_query($query,$con);
    }
    ?>


     
</div>
</div>





<div class="nav_down">
<div>
&copy; VIT Hospital, site designed & developed by PREETI_RACHEL
</div>
</div>
