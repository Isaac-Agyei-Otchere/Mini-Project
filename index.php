


<?php
include_once'connectdb.php';
session_start();
if(isset($_POST['btn_login'])){
$useremail = $_POST['txt_email'];
$password =   $_POST['txt_password']; 
$uuid = $_POST['txt_uid'];
$uuser =   $_POST['txt_user']; 
$urole = $_POST['txt_role'];
$utype =   $_POST['txt_utype'];  
$date =   $_POST['txt_date'];  
//echo $useremail." - ".$password;
$select= $PDO->prepare("select * from user where email='$useremail' AND  password='$password'");  
$select->execute();
$row= $select->fetch(PDO::FETCH_ASSOC);
if($row['email']==$useremail AND $row['password']==$password AND $row['role']=="Admin" and $row['user_type']=="Access" ){
$_SESSION['Uid']=$row['Uid'];
$_SESSION['username']=$row['Uname'];
$_SESSION['email']=$row['email'];
$_SESSION['role']=$row['role'];
$_SESSION['usertype']=$row['user_type'];
$_SESSION['IMG']=$row['IMG'];
// date_default_timezone_set('Africa/Nairobi');
date_default_timezone_set('UTC');
$datetime = date("h:i:sa");
//$dtime = date("dd:mm:yy");
$logtype="Log In";
$insert = $PDO->prepare("INSERT INTO `register` ( `uid`, `username`, `role`, utype,`date`,`time`,log_type) VALUES(:fooditem,:descriptions,:price,:uta,:dates,:timess,:logs)");
$insert->bindParam(':fooditem',$uuid);
$insert->bindParam(':descriptions',$uuser);
$insert->bindParam(':price',$urole);
$insert->bindParam(':uta',$utype);
$insert->bindParam(':dates',$date);
$insert->bindParam(':timess',$datetime);
 $insert->bindParam(':logs',$logtype);
// $insert->bindParam(':access',$accesstype);
$message = 'success';
header('refresh:2;blank.php');  
$insert->execute();

if ($insert->rowCount()) {

 
  
}else{
  // echo'<script type="text/javascript">
  // jQuery(function validation(){
    
  //   swal({
  //     title: "Insert Not Successful!",
  //     text: "Error",
  //     icon: "error",
  //     button: "Ok!",
  //   });
    
  // });
  
  // </script>';
  
}










// echo'<script type="text/javascript">
// jQuery(function validation(){
// swal({
//   title: "Good job!'.$_SESSION['username'].'",
//   text: "Details Matched",
//   icon: "success",
//   button: "Loading.....",
//   timer: 2000
//  });
//  });
// </script>';
 
   
    
}else if($row['email']==$useremail AND $row['password']==$password AND $row['role']=="User" AND $row['user_type']=="Access"){
  $_SESSION['userid']=$row['uid'];
  $_SESSION['username']=$row['Uname'];
  $_SESSION['useremail']=$row['email'];
  $_SESSION['role']=$row['role'];
  $_SESSION['usertype']=$row['user_type'];
  $_SESSION['IMG']=$row['IMG'];
    
  date_default_timezone_set('UTC');
  $datetime = date("h:i:sa");
  //$dtime = date("dd:mm:yy");
  $logtype="Log In";
  $insert = $PDO->prepare("INSERT INTO `register` ( `uid`, `username`, `role`, utype,`date`,`time`,log_type) VALUES(:fooditem,:descriptions,:price,:uta,:dates,:timess,:logs)");
  $insert->bindParam(':fooditem',$uuid);
  $insert->bindParam(':descriptions',$uuser);
  $insert->bindParam(':price',$urole);
  $insert->bindParam(':uta',$utype);
  $insert->bindParam(':dates',$date);
  $insert->bindParam(':timess',$datetime);
   $insert->bindParam(':logs',$logtype);
  // $insert->bindParam(':access',$accesstype);
  
  $insert->execute();
  
  if ($insert->rowCount()>0) {
    $message = 'success';
    header('refresh:3;Blank.php');
   
    
  }else{
    // echo'<script type="text/javascript">
    // jQuery(function validation(){
      
    //   swal({
    //     title: "Insert Not Successful!",
    //     text: "Error",
    //     icon: "error",
    //     button: "Ok!",
    //   });
      
    // });
    
    // </script>';
    
  }
  
  
  
  


$message = 'success';
header('refresh:3;user.php');

}else{
$errormsg='error';    
    

} 
// $uuid = $_POST['txt_uid'];
// $uuser =   $_POST['txt_user']; 
// $urole = $_POST['txt_role'];
// $utype =   $_POST['txt_utype'];  




}
?>






<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Jaydels live | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script src="bower_components/sweetalert/sweetalert.js"></script>
  
  
  
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">


  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page"> 

<div class="login-box">

<div class="lockscreen-image">
      <img src="upload/d7.gif" alt="User Image">
    </div>

  <div class="login-logo">
    <a href="index.php"><b>Jaydels</b>Live</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="" method="post">
     
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="txt_email" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
    <input type="password" class="form-control" placeholder="Password" name="txt_password"  required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <!-- $_SESSION['Uid']=$row['Uid'];
$_SESSION['username']=$row['Uname'];
$_SESSION['email']=$row['email'];
$_SESSION['role']=$row['role'];
$_SESSION['usertype']=$row['user_type'];
$_SESSION['IMG']=$row['IMG']; -->
      <input type="hidden" class="form-control" placeholder="Email" value="<?php if(isset($_SESSION['Uid'])){echo $_SESSION['Uid'];}?>" name="txt_uid" >
      <input type="hidden" class="form-control" placeholder="Email" value="<?php if(isset($_SESSION['username'])){echo $_SESSION['username'];}?>" name="txt_user" >
      <input type="hidden" class="form-control" placeholder="Email" value="<?php if(isset($_SESSION['role'])){echo $_SESSION['role'];}?>" name="txt_role" >
      <input type="hidden" class="form-control" placeholder="Email" value="<?php if(isset($_SESSION['usertype'])){echo $_SESSION['usertype'];}?>" name="txt_utype" >
      <input type="hidden" value="<?php echo date('Y-m-d');?>" name="txt_date">
      <!-- <input type="text" class="form-control" placeholder="Email" value="" name="txt_email" > -->

      <div class="row">
        <div class="col-xs-8">
<a href="#" onclick="swal('To Get Password','Please Contact to Admin OR Service Provider','error');" >I forgot my password</a><br>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
     <button type="submit" class="btn btn-primary btn-block btn-flat" name="btn_login">Login</button>
        </div>
        <!-- /.col -->
      </div>
      
      
      <?php
      
      if(!empty($message)){
          
echo'<script type="text/javascript">
jQuery(function validation(){
swal({
  title: "Welcome!'.$_SESSION['username'].'",
  text: "Details Matched",
  icon: "success",
  button: "Loading.....",
  });
 });
</script>';
         
    }else{}
      
      
      
      if(empty($errormsg)){
          
      }else{
          
          
           echo'<script type="text/javascript">
jQuery(function validation(){


swal({
  title: "EMAIL OR PASSWORD IS WRONG!",
  text: "Details Not Matched",
  icon: "error",
  button: "Ok",
});


});

</script>'; 
          
      }
      
      ?>
      
      
      
      
    </form>

   

      
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->





<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>

</body>
</html>





