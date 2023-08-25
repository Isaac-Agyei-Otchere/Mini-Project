


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
    ;
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
 $del=$PDO->prepare("SELECT SUM(amount)as tsum  FROM `processed_order` where date ='$dtime'");
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



// stocks


try{


  //sum todays amount orders

  //date_default_timezone_set('UTC');
 // $dtime = date('Y-m-d');
 $del=$PDO->prepare("SELECT SUM(chair)as tsum1  FROM `stock` ");
 $del->execute();
 $row=$del->fetch(PDO::FETCH_ASSOC);
 if ($del->execute()) {
   # code...
 
   $_SESSION['tsum1']=$row['tsum1'];
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
 $del=$PDO->prepare("SELECT SUM(canopy)as tsum2  FROM `stock` ");
 $del->execute();
 $row=$del->fetch(PDO::FETCH_ASSOC);
 if ($del->execute()) {
   # code...
 
   $_SESSION['tsum2']=$row['tsum2'];
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
            <!-- /.box-header -->
            <!-- form start -->
 
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php if(isset($_SESSION['total'])){echo $_SESSION['total'];}?></h3>

              <p>Today's Orders</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="order.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php if(isset($_SESSION['totals'])){echo $_SESSION['totals'];}?><sup style="font-size: 20px">.00</sup></h3>

              <p>Total Pending orders</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="orderchange.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
            <h3><?php if(isset($_SESSION['tsum'])){echo $_SESSION['tsum'];}?><sup style="font-size: 20px">.00</sup></h3>

              <p>Todays Sales</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="order.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
            <h3><?php if(isset($_SESSION['user'])){echo $_SESSION['user'];}?></h3>

              <p>Total Emplpoyees</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="registration.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>

</br>
</br>
</br>
</br>
</br>

 <!-- Second Line boxes (Stat box) -->
 <!-- <section class="content"> -->
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-plus"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Chairs</span>
              <!-- <h3></h3> -->
              <span class="info-box-number"><?php if(isset($_SESSION['tsum1'])){echo $_SESSION['tsum1'];}?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-plus"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Canopies</span>
              <span class="info-box-number"><?php if(isset($_SESSION['tsum2'])){echo $_SESSION['tsum2'];}?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <!-- <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span> -->

            <!-- <div class="info-box-content">
              <span class="info-box-text">Total Processed Order</span>
              <span class="info-box-number">760</span>
            </div> -->
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
       
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->




 <!-- TABLE: LATEST ORDERS -->
 <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Todays Order list</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                  <th>ID</th>
                  <th>FULL NAME</th>
                  <th>EMAIL</th>
                  <th>CONTACT</th>
                  <th>ACTIVITY</th>
                  <th>CHAIRS</th>
                  <th>CANOPY</th>
                  <th>NUMBER OF DAYS </th>
                  <th>AMOUNT</th>
                  <th>DATE</th>
                  <th>TIME</th>
                  <th>STATUS</th>
                  </tr>
                  </thead>
                  <tbody>


                <?php


                //get data into table


                try {



                //$search = mysql_real_escape_string($search);
                // $query = "SELECT * FROM user WHERE `Uid`, `Uname`, `Gender`, `email`, `password`, `role` LIKE '%{$search}%'";
                date_default_timezone_set('UTC');
                  $datetime = date("Y-m-d");
                //$changeDate = date("d-m-Y", strtotime($currDate));
                $select = $PDO->prepare("select * from `orders` where date='$dtime' ");

                // $select->bindParam(':fooditem',$datetime);
                $select->execute();
                //echo  $datetime;
                while ($row = $select->fetch(PDO::FETCH_OBJ)) {
                echo'
                <tr>

                <td>'.$row->id.'</td>
                <td>'.$row->name.'</td>
                <td><span class="label label-info">'.$row->email.'</span></td>
                <td >'.$row->contact.'</td>
                <td>'.$row->activity.'</td>
                <td><span class="label label-primary">'.$row->chairs.'</span></td>
                <td><span class="label label-warning">'.$row->canopy.'</span></td>
                <td>'.$row->number_of_days.'</td>
                <td>'.$row->amount.'</td>
                <td>'.$row->date.'</td>
                <td>'.$row->time.'</td>
                <td><span class="label label-primary">pending</span></td>
                </tr>
                ';
                }

                } catch (exception $f) {



                echo'<script type="text/javascript">
                jQuery(function validation(){

                swal({
                title: "error'.$f->getMessage().'",
                text: "error",
                icon: "warning",
                button: "Ok!",
                });

                });

                </script>';

                }



                ?>


                </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a href="order.php" class="btn btn-sm btn-info btn-flat pull-left">View All Orders</a>
              <!-- <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a> -->
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->











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






