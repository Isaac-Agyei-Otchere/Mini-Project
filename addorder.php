<?php


include_once'connectdb.php';

session_start();
error_reporting(0);
if($_SESSION['username']=="" OR $_SESSION['role']=="User"){
    
    
    header('location:lock.php');
}


include_once'header.php';







try {
//code...


if (isset($_POST['bsasve'])) {
  # code...
  
  $uname=$_POST['fname'];
  $gender=$_POST['gender'];
 

  $update = $PDO->prepare("update  `stock` set  chair=:email,canopy=:acc");
               
  $update->bindParam(':email',$uname);
  $update->bindParam(':acc',$gender);

  
  $update->execute();
    
    if ($update->rowCount()) {

      echo'<script type="text/javascript">
      jQuery(function validation(){
        
        swal({
          title: "Updated Successful",
          text: "Updated",
          icon: "success",
          button: "Ok!",
        });
        
      });
      
      </script>';
  }



  }
    else{
     // echo 'files not under any type';

     

  

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
      Update Stock Form
      <small>Rentals</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href=""><i class="fa fa-dashboard"></i> Level</a></li>
      <li class="active">Here</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content container-fluid">

    <!--------------------------
      | Your Page Content Here |
      -------------------------->

        <div class="col-md-4">

<!-- this one is left -->


<div class="register-box-body">
  <p class="login-box-msg">Register a new membership</p>

  <form action="" method="post" enctype="multipart/form-data">


  <?php
          
          if (isset($_POST['bedits'])) {

            echo'<script type="text/javascript">
            jQuery(function validation(){
              
              swal({
                title: "edit Successful",
                text: "Deleted",
                icon: "success",
                button: "Ok!",
              });
              
            });
            
            </script>';

            # code...
          }
 
          ?>

<!--<input type="file" name="myfile" required/>-->

         

    <div class="form-group has-feedback">
         <label for="">Chairs</label>
      <input type="number" class="form-control" placeholder="Chair" name="fname" required>
      <span class="glyphicon glyphicon-user form-control-feedback"></span>
    </div>
    <label for="">Canopy</label>
    <div class="form-group has-feedback">
      <input type="number" class="form-control" placeholder="Canopy" name="gender" required>
      <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    </div>
  
    <div class="row">
      <div class="col-xs-8">
        <div class="checkbox icheck">
          <label>
            <!-- <input type="checkbox"> I agree to the <a href="#">terms</a> -->
          </label>
        </div>
        
      </div>


      <!-- /.col -->
      <div class="col-xs-4">
        <button type="submit" class="btn btn-primary btn-block btn-flat" name="bsasve">Update</button>

      </div>
      
      <!-- /.col -->
    </div>
    
  </form>

</div>
<!-- /.form-box -->
</div>
<!-- /.register-box -->




<!-- this one is for the table on the right -->
          <div class="col-md-8">

          <div class="row">
      <div class="col-xs-12">
      <div class="box">
          <div class="box-header">
            <h3 class="box-title">Use the text box to filter details</h3>
          </div>
          <div class="box-body table-responsive ">
            <table id="example1" class="table table-image">
            <thead>
           
          <th>#</th>
          <th>Chair</th>
          <th>Canopy</th>
          
          <!-- <th>Del.</th>
          <th>Edit</th> -->
      </thead>
      <tbody>


      <?php


//get data into table


try {



    //$search = mysql_real_escape_string($search);
   // $query = "SELECT * FROM user WHERE `Uid`, `Uname`, `Gender`, `email`, `password`, `role` LIKE '%{$search}%'";
   $select = $PDO->prepare("select * from stock ");
   $select->execute();
    
    while ($row = $select->fetch(PDO::FETCH_OBJ)) {
      echo'
      <tr>
     
      <td>'.$row->id.'</td>
      <td>'.$row->chair.'</td>
      <td>'.$row->canopy.'</td>
     
     

      </td>
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


<script>
  $(document).ready( function () {
    $('#example1').DataTable();
} );  
    
    
</script>



<?php

include_once'footer.php';

?>


<script>
$(document).ready(function() {
    $('.btndelete').click(function() {
            var tdh = $(this);
            var id = $(this).attr("id");
             swal({
  title: "Do you want to delete Order?",
  text: "Once Order is deleted, you can not recover it!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
      
       $.ajax({
                            url: 'delsales.php',
                            type: 'post',
                            data: {
                            pidd: id
                            },
                            success: function(data) {
                            tdh.parents('tr').hide();
                            }


                        });
      
      
      
    swal("Your Order has been deleted!", {
      icon: "success",
    });
  } else {
    swal("Your Order is safe!");
  }
});
            
                     

        });
    });     
       


 </script>