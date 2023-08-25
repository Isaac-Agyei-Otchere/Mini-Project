


<?php
include_once'connectdb.php';

session_start();
//error_reporting(0);
if($_SESSION['username']=="" OR $_SESSION['role']=="User"){
    
    
  header('location:lock.php');
}
include_once'header.php';

?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Proccessed Order Form
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
           
            <!-- <div class="box-header with-border">
                <h3 class="box-title">Register</h3>
            </div> -->
            <!-- /.box-header -->
            <!-- form start -->
                <div class="col-md-12" >
                
<div class="row">
<div class="col-xs-12">
<div class="box">
<div class="box-header">
  <!-- <h3 class="box-title">kkkl</a></h3></div> -->
  <!-- <div class="text-center">
        <a href="export.php" class="btn btn-primary" target="blank">Export to excel</a>
        <input type="hidden" value="<?php echo date('Y-m-d');?>" name="txt_date">
      </div> -->
  <div class="box-body table-responsive no-padding">






  
  </div>
</div>
</div>
</div>
</div>             
                
               </div>



            <div class="col-md-12">

<div class="row">
<div class="col-xs-12">
<div class="box">
<div class="box-header">
  <h3 class="box-title">Use the text box to filter details   </h3>
  <!-- <a href="export.php" class="btn btn-primary" target="blank">Export to excel</a> -->
</div>
<div class="box-body table-responsive no-padding">
  <table id="example1" class="table table-hover">
  <thead>
  <!-- <th>IMG</th> -->
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
$select = $PDO->prepare("select * from `processed_order` ");

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
<td >'.$row->canopy.'</td>
<td>'.$row->number_of_days.'</td>
<td>'.$row->amount.'</td>
<td>'.$row->date.'</td>
<td>'.$row->time.'</td>

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
<!-- /.box-body -->
</div>
<!-- /.box -->

</div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
    
  <?php

include_once'footer.php';

?>



<script>
  $(document).ready( function () {
    $('#example1').DataTable();
} );  
    
    
</script>


