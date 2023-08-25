


<?php
include_once'connectdb.php';

session_start();
error_reporting(0);
include_once'header.php';

try {

//todays orders


  # code...
  //code...
  //$id=$_GET['id'];
  date_default_timezone_set('UTC');
  $dtime = date('Y-m-d');
  $del=$PDO->prepare("SELECT count(*) as total from orders where date='$dtime'");
  $del->execute();
  $row=$del->fetch(PDO::FETCH_ASSOC);
  if ($del->execute()) {
    # code...
  
    $_SESSION['total']=$row['total'];
  //   $_SESSION['gender']=$row['Gender'];
  //   $_SESSION['password']=$row['password'];
    //$_SESSION['uname']=$row['Uname'];
   // $_SESSION['email']=$row['email'];
  //   $_SESSION['role']=$row['role'];
  //   $_SESSION['user_type']=$row['user_type'];
   // $_SESSION['IMG']=$row['IMG'];

  
  
  }else {
    # code...
  }
} catch (exception $e) {

}
try{


  //sum all amount orders

  //date_default_timezone_set('UTC');
 // $dtime = date('Y-m-d');
 $del=$PDO->prepare("SELECT SUM(amount)as totals  FROM `orders`");
 $del->execute();
 $row=$del->fetch(PDO::FETCH_ASSOC);
 if ($del->execute()) {
   # code...
 
   $_SESSION['totals']=$row['totals'];
 //   $_SESSION['gender']=$row['Gender'];
 //   $_SESSION['password']=$row['password'];
   //$_SESSION['uname']=$row['Uname'];
  // $_SESSION['email']=$row['email'];
 //   $_SESSION['role']=$row['role'];
 //   $_SESSION['user_type']=$row['user_type'];
  // $_SESSION['IMG']=$row['IMG'];


 
 
 }else {
   # code...
 }
} catch (exception $e) {

echo'<script type="text/javascript">
jQuery(function validation(){
 
 swal({
   title: "error'.$e->getMessage().'",
   text: "error",
   icon: "warning",
   button: "Ok!",
 });
 
});

</script>';

}

try{


  //sum todays amount orders

  //date_default_timezone_set('UTC');
 // $dtime = date('Y-m-d');
 $del=$PDO->prepare("SELECT SUM(amount)as tsum  FROM `orders` where date ='$dtime'");
 $del->execute();
 $row=$del->fetch(PDO::FETCH_ASSOC);
 if ($del->execute()) {
   # code...
 
   $_SESSION['tsum']=$row['tsum'];
 //   $_SESSION['gender']=$row['Gender'];
 //   $_SESSION['password']=$row['password'];
   //$_SESSION['uname']=$row['Uname'];
  // $_SESSION['email']=$row['email'];
 //   $_SESSION['role']=$row['role'];
 //   $_SESSION['user_type']=$row['user_type'];
  // $_SESSION['IMG']=$row['IMG'];


 
 
 }else {
   # code...
 }
} catch (exception $e) {

echo'<script type="text/javascript">
jQuery(function validation(){
 
 swal({
   title: "error'.$e->getMessage().'",
   text: "error",
   icon: "warning",
   button: "Ok!",
 });
 
});

</script>';

}





try{


  //sum todays amount orders

  //date_default_timezone_set('UTC');
 // $dtime = date('Y-m-d');
 $del=$PDO->prepare("SELECT count(*) as user from user ");
 $del->execute();
 $row=$del->fetch(PDO::FETCH_ASSOC);
 if ($del->execute()) {
   # code...
 
   $_SESSION['user']=$row['user'];
 //   $_SESSION['gender']=$row['Gender'];
 //   $_SESSION['password']=$row['password'];
   //$_SESSION['uname']=$row['Uname'];
  // $_SESSION['email']=$row['email'];
 //   $_SESSION['role']=$row['role'];
 //   $_SESSION['user_type']=$row['user_type'];
  // $_SESSION['IMG']=$row['IMG'];


 
 
 }else {
   # code...
 }
} catch (exception $e) {

echo'<script type="text/javascript">
jQuery(function validation(){
 
 swal({
   title: "error'.$e->getMessage().'",
   text: "error",
   icon: "warning",
   button: "Ok!",
 });
 
});

</script>';

}










?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Admin Dashboard
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">






      <!--------------------------
        | Your Page Content Here |
        -------------------------->
          <div class="box box-warning">
            <form  action="" method="post" name="">
           
            <div class="box-header with-border">
                <h3 class="box-title">Admin live</h3>
            </div>
          










              <div class="box-body"></div>
              </form>
              </div>
        
        
        

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php

include_once'footer.php';

?>






