<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="http://code.jquery.com/jquery.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<?php
if(!isset($_SESSION)) {session_start();}
require_once("db_connect.php");
$link = connect();
function generateRandomString($length = 6) {
$characters = '0123456789';
$charactersLength = strlen($characters);
$randomString = '';
for ($i = 0; $i < $length; $i++) {
    $randomString .= $characters[rand(0, $charactersLength - 1)];
}
return $randomString;
}
$email=$_GET['email'];


if(isset($_POST['code'])){
  if($_POST['code']==$_SESSION['login_otp']){
    $sql1="update users set user_status='active' where user_email='".$email."'";
    if(insert($sql1)=="success"){
      $_SESSION['msg'] = "Registration successful";
      unset($_SESSION['login_otp']);
      header("Location: login.php");
    } else{
      $_SESSION['msg'] = "Registration Failed, Try again! - DB Issues ".insert($sql1);
      header("Location: signup.php");
    }
  } else {
    $message = '<label class="text-danger">Invalid OTP Number</label>';
    echo $_SESSION['login_otp'];
    echo '<br />
    <div class="container" style="width:800px">
     <h3 align="center">Verify Email</h3>
     <br />
     <div class="panel panel-default">
      <div class="panel-heading">
       <h3 class="panel-title">Enter OTP Number</h3>
      </div>
      <div class="panel-body">
       '.$message.'
       <form method="post" action="#">
        <div class="form-group">
         <label>Enter OTP Number sent to '.$email.'</label>
         <input type="text" name="code" class="form-control" required/>
        </div>
        <div class="form-group">
         <input type="submit" name="verify" class="btn btn-success" value="Submit" />
        </div>
       </form>
      </div>
     </div>
    </div>
    <br />
    <br />';
  }
} else {
  $_SESSION['login_otp']=generateRandomString();
  $message = '';
  include 'phpmailer.php';
}

  ?>
  </body>
  </html>
