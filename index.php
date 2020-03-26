<?php
$title = "OnlineT";
 ?>
<?php
session_start();
if(isset($_SESSION['username']) && (!isset($_SESSION['key']))){
   header('location:account.php?q=1');
}
else if(isset($_SESSION['username']) && isset($_SESSION['key']) && $_SESSION['key'] == '54585c506829293a2d4c3b68543b316e2e7a2d277858545a36362e5f39'){
   header('location:dash.php?q=0');
}
else{}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="favicon.ico" type="image/icon" sizes="16x16">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title> <?php echo $title; ?>  </title>

 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>
  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<?php
if (@$_GET['w']) {
    echo '<script>alert("' . @$_GET['w'] . '");</script>';
}
?>
<script>
function validateForm() {
  var y = document.forms["form"]["name"].value;
  if (y == null || y == "") {
    document.getElementById("errormsg").innerHTML="Name must be filled out.";
    return false;
  }
  var br = document.forms["form"]["branch"].value;
  if (br == "") {
    document.getElementById("errormsg").innerHTML="Please select your branch";
    return false;
  }
  if (m.length < 10) {
    document.getElementById("errormsg").innerHTML="Passwordr must be 12 digits long";
    return false;
  }
  var g = document.forms["form"]["gender"].value;
  if (g=="") {
    document.getElementById("errormsg").innerHTML="Please select your gender";
    return false;
  }
  var x = document.forms["form"]["username"].value;
  if (x.length == 0) {
    document.getElementById("errormsg").innerHTML="Please enter a valid username";
    return false;
  }
  if (x.length < 4) {
    document.getElementById("errormsg").innerHTML="Username must be at least 4 characters long";
    return false;
  }
  var m = document.forms["form"]["phno"].value;
  if (m.length != 10) {
    document.getElementById("errormsg").innerHTML="Phone number must be 10 digits long";
    return false;
  }
  var a = document.forms["form"]["password"].value;
  if(a == null || a == ""){
    document.getElementById("errormsg").innerHTML="Password must be filled out";
    return false;
  }
  if(a.length<4 || a.length>15){
    document.getElementById("errormsg").innerHTML="Passwords must be 4 to 15 characters long.";
    return false;
  }
  var b = document.forms["form"]["cpassword"].value;
  if (a!=b){
    document.getElementById("errormsg").innerHTML="Passwords must match.";
    return false;
  }
}
</script>
</head>
<body>
<div class="header">
<div class="row">
<div class="col-lg-6">
<span class="logo"><?php echo $title; ?></span></div>
<div class="col-md-2 col-md-offset-4">
<a href="#" class="btn btn-primary logb" data-toggle="modal" data-target="#myModal"> <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1"><b> Login </b> </span></a></div>
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span style="color:darkblue;font-size:12px;font-weight: bold">Login to your Account</span></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="login.php?q=index.php" method="POST">
<fieldset>
<div class="form-group">
  <label class="col-md-3 control-label" for="username"></label>
  <div class="col-md-6">
  <input id="username" name="username" placeholder="Username" class="form-control input-md" type="username">

  </div>
</div>
<div class="form-group">
  <label class="col-md-3 control-label" for="password"></label>
  <div class="col-md-6">
    <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">

  </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Log in</button>
    </fieldset>
</form>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<div class="bg1" id="particle-canvas">
<div class="row">

<div class="col-md-7"></div>
<div class="col-md-4 panel">
  <form class="form-horizontal" name="form" action="sign.php?q=account.php" onSubmit="return validateForm()" method="POST">
<fieldset>
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>
  <div class="col-md-12">
  <h3 align="center">انشاء عضو جديد</h3>

  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>
  <div class="col-md-12">
  <div id="errormsg" style="font-size:14px;font-family:calibri;font-weight:normal;color:red"><?php
if (@$_GET['q7']) {
    echo '<p style="color:red;font-size:15px;">' . @$_GET['q7'];
}
?></div>

  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>
  <div class="col-md-12">
  <label class="label label-primary form-r">ادخل اسمك الكامل</label><br><br>
  <input id="name" name="name" placeholder="ادخل اسمك هنا" class="form-control input-md" type="text" value="<?php
if (isset($_GET['name']))
{
echo $_GET['name'];
}?>">

  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for="rollno"></label>
  <div class="col-md-12">
    <label class="label label-primary form-r">رقم عشوائي للعضو</label><br><br>
  <input id="rollno" name="rollno" placeholder="ادخل رقم عشوائي للعضوم (Ex.732116104***)" class="form-control input-md" type="text" value="<?php
if (isset($_GET['rollno']))
{
echo $_GET['rollno'];
}?>">

  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for="gender"></label>
  <div class="col-md-12">
      <label class="label label-primary form-r">الجنس</label><br><br>
    <select id="gender" name="gender" placeholder="اختر جنسك" class="form-control input-md" >
   <option value="" <?php
if (!isset($_GET['gender']))
    echo "selected";
?>>اختار جنسك</option>
  <option value="M" <?php
  if (isset($_GET['gender']))
  {
if ($_GET['gender'] == "M")
    echo "selected";
  }
?>>ذكر</option>
  <option value="F" <?php
  if (isset($_GET['gender']))
  {
if ($_GET['gender'] == "F")
    echo "selected";
  }
?>>انثى</option> </select>
  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for="branch"></label>
  <div class="col-md-12">
    <label class="label label-primary form-r">الصف الدراسي</label><br><br>
    <select id="branch" name="branch" placeholder="Select your branch" class="form-control input-md" >
   <option value="" <?php
if (!isset($_GET['branch']))
    echo "selected";
?>>تحديد الصف</option>
  <option value="الصف الاول الثانوي" <?php
  if (isset($_GET['branch']))
  {
if ($_GET['branch'] == "الصف الاول الثانوي")
    echo "selected";
  }
  ?>>الصف الاول الثانوي</option>
  <option value="الصف الثانى الثانوي" <?php
  if (isset($_GET['branch']))
  {
if ($_GET['branch'] == "الصف الثانى الثاوي")
    echo "selected";
  }
?>>الصف الثانى الثانوي</option>
  <option value="الصف الثالث الثانوي" <?php
  if (isset($_GET['branch']))
  {
if ($_GET['branch'] == "الصف الثالث الثانوي")
    echo "selected";
  }
?>>الصف الثالث الثانوي</option>
 </select>
  </input>
  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label title1" for="username"></label>
  <div class="col-md-12">
    <label class="label label-primary form-r"><span class="badge">يستخدم لتسجيل الدخول</span> اسم المستخدم</label><br><br>

    <input id="username" name="username" placeholder="اكتب هنا اسم المستخدم" class="form-control input-md" type="username" value="<?php
if (isset($_GET['username']))
{
echo $_GET['username'];
};
?>" style="<?php
if (isset($_GET['q7']))
    echo "border-color:red";
?>">

  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for="phno"></label>
  <div class="col-md-12">
  <label class="label label-primary form-r"><span class="badge">اختياري</span> رقم الهاتف</label><br><br>
  <input id="phno" name="phno" placeholder="ادخل رقم الهاتف" class="form-control input-md" type="number" value="<?php
if (isset($_GET['phno']))
{
echo $_GET['phno'];
}
?>">

  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for="password"></label>
  <div class="col-md-12">
    <label class="label label-primary form-r">كلمة المرور</label><br><br>
    <input id="password" name="password" placeholder="********" class="form-control input-md" type="password">

  </div>
</div>

<div class="form-group">
  <label class="col-md-12control-label" for="cpassword"></label>
  <div class="col-md-12">
    <label class="label label-primary form-r">تاكيد كلمة المرور</label><br><br>
    <input id="cpassword" name="cpassword" placeholder="********" class="form-control input-md" type="password">

  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12" style="text-align: center">
    <input  type="submit" value=" التسجيل الان " class="btn btn-primary" style="text-align:center" />
  </div>
</div>

</fieldset>
</form>
</div>
</div></div>
</div>
<div class="row footer">
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#login" style="color:lightyellow">Admin Login</a></div>
<div class="col-md-3 box">
<span href="#" data-target="#login" style="color:lightyellow">Developed by<li class="label"><a class="label label-primary" href="http://fb.com/abdo0m">Abdulrahman Mohamed</a></li><br><br></span>
</div>


<div class="col-md-2 box">
<a href="feedback.php" style="color:lightyellow;" onmouseover="this.style('color:yellow')" target="new">Feedback</a></div>

   <div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:darkblue;font-size:12px;font-weight: bold">Login to Server</span></h4>
      </div>
      <div class="modal-body title1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form role="form" method="post" action="admin.php?q=index.php">
<div class="form-group">
<input type="text" name="uname" maxlength="20"  placeholder="Username" class="form-control"/>
</div>
<div class="form-group">
<input type="password" name="password" maxlength="30" placeholder="Password" class="form-control"/>
</div>
<div class="form-group" align="center">
<input type="submit" name="login" value="Login" class="btn btn-primary" />
</div>
</form>
</div><div class="col-md-3"></div></div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
