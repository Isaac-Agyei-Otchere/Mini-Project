<?php


include_once'connectdb.php';

session_start();
//error_reporting(0);
error_reporting(0);
if($_SESSION['username']=="" OR $_SESSION['role']=="User"){
    
    
    header('location:lock.php');
}


include_once'header.php';

try {

    # code...
    //code...
    $id=$_GET['id'];
    $del=$PDO->prepare("select * from orders where id='$id'");
    $del->execute();
    $row=$del->fetch(PDO::FETCH_ASSOC);
    if ($del->execute()) {
      # code...
    
      $_SESSION['id']=$row['id'];
      $_SESSION['name']=$row['name'];
      $_SESSION['email']=$row['email'];
      $_SESSION['contact']=$row['contact'];
      $_SESSION['activity']=$row['activity'];
      $_SESSION['chairs']=$row['chairs'];
      $_SESSION['canopy']=$row['canopy'];
      $_SESSION['number_of_days']=$row['number_of_days'];
      $_SESSION['amount']=$row['amount'];
      $_SESSION['date']=$row['date'];
      $_SESSION['time']=$row['time'];

    




     // $id=$_GET['id'];
  $del=$PDO->prepare("select * from stock");
  $del->execute();
  $row=$del->fetch(PDO::FETCH_ASSOC);
  if ($del->execute()) {
    # code...
  
   $idss= $_SESSION['id']=$row['id'];
    $_SESSION['chairs1']=$row['chair'];
    $_SESSION['canopys']=$row['canopy'];
   

  
    //$_SESSION['IMG']=$row['IMG'];

  
  
  }

      //$_SESSION['IMG']=$row['IMG'];

    
    
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







try {
//code...


if (isset($_POST['bsasve'])) {
  # code...
  $id=$_GET['id'];
  $fname=$_POST['name'];
  $email=$_POST['email'];
  $contact=$_POST['contact'];
  $fcnt=$_POST['activity'];
  $fch=$_POST['chairs'];
  $fcno=$_POST['canopy'];
  $fnodays=$_POST['number_of_days'];
  $famnt=$_POST['amount'];
  $date=$_POST['date'];
  $time=$_POST['time'];
  $pchair=$_POST['chair1'];
  $pcanopy=$_POST['canopy1'];




  
            
          // $update = $PDO->prepare("update  `stock` set  chair=:email,canopy=:acc");
               
          // $update->bindParam(':email',$pchair);
          // $update->bindParam(':acc',$pcanopy);
        
          
          // $update->execute();
            
          //   if ($update->rowCount()) {

             


              $insert = $PDO->prepare("INSERT INTO `processed_order`(`name`, `email`, `contact`,`activity`,`chairs`, `canopy`, `number_of_days`, `amount`,`date`, `time`) VALUES(:fname,:email,:contact,:act,:chair,:canopy,:numberdays,:total,:dates,:timess)");
              $insert->bindParam(':fname',$fname);
              $insert->bindParam(':email',$email);
              $insert->bindParam(':contact',$contact);
              $insert->bindParam(':act',$fcnt);
              $insert->bindParam(':chair',$fch);
              $insert->bindParam(':canopy',$fcno);
              $insert->bindParam(':numberdays',$fnodays);
              $insert->bindParam(':total',$famnt);
              $insert->bindParam(':dates',$date);
              $insert->bindParam(':timess',$time);
             
              
              $insert->execute();
              
              if ($insert->rowCount()>0) {
        
          $update = $PDO->prepare("update  `stock` set  chair=:email,canopy=:acc");
               
          $update->bindParam(':email',$pchair);
          $update->bindParam(':acc',$pcanopy);
        
          
          $update->execute();
            
            if ($update->rowCount()) {


          }


                $del=$PDO->prepare("delete from orders where id=".$id);
                if ($del->execute()) {
                
              echo'<script type="text/javascript">
              jQuery(function validation(){
                
                swal({
                  title: "Request Added Successful",
                  text: "Qureied",
                  icon: "success",
                  button: "Ok!",
                });
                
              });
              
              </script>';
                
               }


              }



            // }
            //else{
            //   echo'<script type="text/javascript">
            //   jQuery(function validation(){
                
            //     swal({
            //       title: "Insert Not Successful!",
            //       text: "No Changes Made",
            //       icon: "error",
            //       button: "Ok!",
            //     });
                
            //   });
              
            //   </script>';
              
            // }
            

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
      Pending Request  Form
      <small>Rentals</small>
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

        <div class="col-md-4">

<!-- this one is left -->


<div class="register-box-body">
  <p class="login-box-msg">Delete or View Order</p>

  <form action="" method="post" ><!-- enctype="multipart/form-data" -->


  <div class="form-group has-feedback">
        <!-- <label for="">Full Name</label> -->
      <input type="text" class="form-control" placeholder="name" value="<?php if(isset($_SESSION['name'])){echo $_SESSION['name'];}?>" name="name" required>
      <!-- <span class="glyphicon /glyphicon-user form-control-feedback"></span> -->
    </div>
 
    <div class="form-group has-feedback">
    <!-- <label for="">Email</label> -->
      <input type="text" class="form-control" placeholder="Email" value="<?php if(isset($_SESSION['email'])){echo $_SESSION['email'];}?>" name="email" required>
      <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
    </div>




    <div class="form-group has-feedback">
    <!-- <label for="">Contact</label> -->
    <input type="text" class="form-control" placeholder="contact" value="<?php if(isset($_SESSION['contact'])){echo $_SESSION['contact'];}?>" name="contact" required>
      <!-- <span class="glyphicon glyphicon-lock form-control-feedback"></span> -->
    </div>

    <div class="form-group has-feedback">
        <!-- <label for="">Activity</label> -->
      <input type="text" class="form-control" placeholder="Activity" value="<?php if(isset($_SESSION['activity'])){echo $_SESSION['activity'];}?>" name="activity" required>
      <!-- <span class="glyphicon glyphicon-user form-control-feedback"></span> -->
    </div>
    <!-- <fieldset disabled> -->
    <div class="form-group has-feedback">
    <label for="">Chairs</label>
      <input type="number" class="form-control" id="chair"value="<?php if(isset($_SESSION['chairs'])){echo $_SESSION['chairs'];}?>" placeholder="Chairs" name="chairs" required>
      <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    </div>




    <div class="form-group has-feedback">
    <label for="">Canopy</label>
    <input type="number" class="form-control" placeholder="Canopy" value="<?php if(isset($_SESSION['canopy'])){echo $_SESSION['canopy'];}?>"  id="canopy"  name="canopy" required>
      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    
    <div class="form-group has-feedback">
        <label for="">Number of days</label>
      <input type="number" class="form-control" id="days" placeholder="Number of days" value="<?php if(isset($_SESSION['number_of_days'])){echo $_SESSION['number_of_days'];}?>" name="number_of_days" required>
      <span class="glyphicon glyphicon-user form-control-feedback"></span>
    </div>
 
    <div class="form-group has-feedback">
    <label for="">Amount</label>
      <input type="number" class="form-control" id="amount" placeholder="Amount" value="<?php if(isset($_SESSION['amount'])){echo $_SESSION['amount'];}?>" name="amount" required>
      <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    </div>

    <!-- </fieldset> -->


    <div class="form-group has-feedback">
    <!-- <label for="">Date</label> -->
    <input type="hidden" class="form-control"  value="<?php if(isset($_SESSION['date'])){echo $_SESSION['date'];}?>" name="date" required>
      <!-- <span class="glyphicon glyphicon-lock form-control-feedback"></span> -->
    </div>
    <div class="form-group has-feedback">
    <!-- <label for="">Date</label> -->
    <input type="hidden" class="form-control"  value="<?php if(isset($_SESSION['time'])){echo $_SESSION['time'];}?>" name="time" required>
      <!-- <span class="glyphicon glyphicon-lock form-control-feedback"></span> -->
    </div>

    <div class="form-group has-feedback">
    <!-- <label for="">Previous chairs</label> -->
      <input type="hidden" class="form-control" placeholder="chair" id ="pchair" value="<?php if(isset($_SESSION['chairs1'])){echo $_SESSION['chairs1'];}?>" name="pchair" required>
      <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
    </div>




    <div class="form-group has-feedback">
    <!-- <label for="">Privious canopies</label> -->
    <input type="hidden" class="form-control" id="pcanopy" value="<?php if(isset($_SESSION['canopys'])){echo $_SESSION['canopys'];}?>" name="pcanopy" required>
      <!-- <span class="glyphicon glyphicon-lock form-control-feedback"></span> -->
    </div>

    <div class="form-group has-feedback">
    <!-- <label for="">calculate chairs</label> -->
      <input type="hidden" class="form-control" id="calchair" placeholder="chair" name="chair1" required>
      <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
    </div>




    <div class="form-group has-feedback">
    <!-- <label for="">calculate canopies</label> -->
    <input type="hidden" class="form-control" id="calcanopy"  name="canopy1" required>
      <!-- <span class="glyphicon glyphicon-lock form-control-feedback"></span> -->
    </div>

    <!-- <div class="form-group has-feedback">
    <label for="">Time</label>
    <input type="date" class="form-control"  value="<?php if(isset($_SESSION['time'])){echo $_SESSION['time'];}?>" name="PRICE" required>
      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div> -->

    
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
        <button type="submit" class="btn btn-danger btn-block btn-flat" name="bsasve">Update</button>

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
            <th>DELETE</th>
            <th>ADD</th>
      </thead>
      <tbody>


      <?php


//get data into table


try {



    //$search = mysql_real_escape_string($search);
   // $query = "SELECT * FROM user WHERE `Uid`, `Uname`, `Gender`, `email`, `password`, `role` LIKE '%{$search}%'";
   $select = $PDO->prepare("select * from orders ");
   $select->execute();
    
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
      
      <td><a href="delsales1.php?id='.$row->id.'" button type="submit"  class="btn btn-danger" name="bedits1" ><i class="glyphicon glyphicon-trash" ></i></button></td>
      <td><a href="orderchange.php?id='.$row->id.'" button type="submit"  class="btn btn-info" name="bedits" ><i class="glyphicon glyphicon-pencil" ></i></button></td>

      </td>
      </tr>
      ';

// header("Content-Type: application/xls");
// header("Content-Dispoition: attachment; filename=download.xls");

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
 <script src="main.js"></script>
<!-- 
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
                            url: 'delfood.php',
                            type: 'post',
                            data: {
                            salo: id
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
       


 </script> -->