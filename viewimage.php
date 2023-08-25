


<?php
include_once'connectdb.php';

session_start();
error_reporting(0);
if($_SESSION['username']=="" OR $_SESSION['role']=="User"){
    
    
    header('location:index.php');
}
include_once'header.php';

?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Veiw Image
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

<div class="box-header with-border">
<h3 class="box-title"><a href="editimage.php" class="btn btn-primary" role="button">Back to Image List</a></h3>

</div>

</div>



<?php

$id=$_GET['id'];
$del=$PDO->prepare("select * from user where uid='$id'");
$del->execute();
while($row=$del->fetch(PDO::FETCH_OBJ)){

echo'

<p class="login-box-msg"></p>

<ul class="list-group">


<center><p class="list-group-item list-group-item-success"><b>Image</b></p></center>
<img src = "upload/'.$row->IMG.'" class="img-responsive" />


</ul>






';



}




?>





</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

  <?php

include_once'footer.php';

?>






