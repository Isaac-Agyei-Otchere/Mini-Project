<?php


include_once'connectdb.php';

session_start();
error_reporting(0);
if($_SESSION['username']=="" OR $_SESSION['role']=="User"){
    
    
    header('location:lock.php');
}


include_once'header.php';


// try {

//   # code...
//   //code...
//   $id=$_GET['id'];
//   $del=$PDO->prepare("delete from user where uid=".$id);
//   if ($del->execute()) {
//     # code...
  
//     echo'<script type="text/javascript">
//     jQuery(function validation(){
      
//       swal({
//         title: "Delete Successful",
//         text: "Deleted",
//         icon: "success",
//         button: "Ok!",
//       });
      
//     });
    
//     </script>';
  
  
//   }else {
//     # code...
//   }
// } catch (exception $e) {




// echo'<script type="text/javascript">
// jQuery(function validation(){
  
//   swal({
//     title: "error'.$e->getMessage().'",
//     text: "error",
//     icon: "warning",
//     button: "Ok!",
//   });
  
// });

// </script>';

// }





try {
//code...


if (isset($_POST['bsasve'])) {
  # code...
  
  $uname=$_POST['fname'];
  $gender=$_POST['gender'];
  $email=$_POST['email'];
  $role=$_POST['role'];
  $password=$_POST['password'];
  $repass=$_POST['repassword'];
  $accesstype=$_POST['usertype'];




  $f_name = $_FILES['myfile']['name'];
  $f_temp = $_FILES['myfile']['tmp_name'];
  //$store = "upload/".$f_name;
  //move_uploaded_file($f_temp,$f_name);
 // $f_temp = $_FILES['myfile']['tmp_name'];
  
  $f_size = $_FILES['myfile']['size'];
  $f_extension = explode('.',$f_name);
  $f_extension= strtolower(end($f_extension));
  $f_newfile = uniqid().'.'. $f_extension;
  $store = "upload/".$f_newfile;
  if($f_extension=='jpg' ||$f_extension=='jpeg' || $f_extension=='png' || $f_extension=='gif'){
      
      if($f_size>=995000){
          
          //echo  'Max file should be 1Mb';

          echo'<script type="text/javascript">
              jQuery(function validation(){
                
                swal({
                  title: "Max file should be 1Mb",
                  text: "error",
                  icon: "warning",
                  button: "Ok!",
                });
                
              });
              
              </script>';

      }
      else{
      

        $seelect=$PDO->prepare("select * from user where email='$email'");

        $seelect->execute();
    if ($seelect->rowCount() > 0) {
    
      echo'<script type="text/javascript">
            jQuery(function validation(){
              
              swal({
                title: "Email Already Exist!!!",
                text: "error",
                icon: "warning",
                button: "Ok!",
              });
              
            });
            
            </script>';
    
    }else {
      # code...
      
      if(move_uploaded_file($f_temp,$store))
      {


        $productimage =$f_newfile;
         // echo $f_name.'was uploaded successfuly';
          

          
          
          if ($password==$repass) {
            # code...
            // echo $uname ."_".$gender."-".$email ."_".$role."-".$password ."_".$repass."-";
           // $data = file_get_contents($_FILES['myfile']['tmp_name']);
            $insert = $PDO->prepare("INSERT INTO `user` ( `IMG`,`Uname`, `Gender`, `email`, `password`, `role`,`user_type`) VALUES(:images,:uname,:gender,:email,:passwords,:roles,:access)");
            $insert->bindParam(':images',$productimage);
            $insert->bindParam(':uname',$uname);
            $insert->bindParam(':gender',$gender);
            $insert->bindParam(':email',$email);
            $insert->bindParam(':passwords',$password);
            $insert->bindParam(':roles',$role);
            $insert->bindParam(':access',$accesstype);
            
            $insert->execute();
            
            if ($insert->rowCount()) {

             
              echo'<script type="text/javascript">
              jQuery(function validation(){
                
                swal({
                  title: "Insert Successful",
                  text: "Qureied",
                  icon: "success",
                  button: "Ok!",
                });
                
              });
              
              </script>';
            }else{
              echo'<script type="text/javascript">
              jQuery(function validation(){
                
                swal({
                  title: "Insert Not Successful!",
                  text: "Error",
                  icon: "error",
                  button: "Ok!",
                });
                
              });
              
              </script>';
              
            }
            
            
          }else {
            # code...
            
            echo'<script type="text/javascript">
            jQuery(function validation(){
              
              swal({
                title: "Password Miss-Match",
                text: "error",
                icon: "warning",
                button: "Ok!",
              });
              
            });
            
            </script>';
            
            
          }
      }
          
        }


          
  
          }
  }
    else{
     // echo 'files not under any type';

      echo'<script type="text/javascript">
      jQuery(function validation(){
        
        swal({
          title: "files not under any type!!!",
          text: "error",
          icon: "warning",
          button: "Ok!",
        });
        
      });
      
      </script>';
  }


  

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
      Registration Form
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
  <p class="login-box-msg">Register a new membership</p>

  <form action="registration.php" method="post" enctype="multipart/form-data">


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
          <label>Add Employee Image(Required)</label>
          <input type="file" name="myfile" required/>
              </div>

    <div class="form-group has-feedback">
      <input type="text" class="form-control" placeholder="User Name" name="fname" required>
      <span class="glyphicon glyphicon-user form-control-feedback"></span>
    </div>
     <!-- select -->
     <div class="form-group">
                <label>Gender</label>
                <select class="form-control" name="gender" required>
                <option></option>
                  <option>Male</option>
                  <option>Female</option>
                  
                </select>
              </div>
    <div class="form-group has-feedback">
      <input type="email" class="form-control" placeholder="Email" name="email" required>
      <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    </div>






    <!-- select -->
    <div class="form-group">
                <label>Role</label>
                <select class="form-control" name="role" required>
                <option></option>
                  <option>Admin</option>
                  <option>User</option>
                  
                </select>
              </div>
    <div class="form-group has-feedback">
      <input type="password" class="form-control" placeholder="Password" name="password" required>
      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
      <input type="password" class="form-control" placeholder="Retype_password" name="repassword" required>
      <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
    </div>
    <div class="form-group">
                <label>Access Type</label>
                <select class="form-control" name="usertype" required>
                <option></option>
                  <option>Denied</option>
                  <option>Access</option>
                  
                </select>
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
        <button type="submit" class="btn btn-primary btn-block btn-flat" name="bsasve">Register</button>

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
           <th>IMG</th>
          <th>#</th>
          <th>User Name</th>
          <th>Gender</th>
          <th>Email</th>
          <th>Pwd.</th>
          <th>Role</th>
          <th>Access Type</th>
          <!-- <th>Del.</th>
          <th>Edit</th> -->
      </thead>
      <tbody>


      <?php


//get data into table


try {



    //$search = mysql_real_escape_string($search);
   // $query = "SELECT * FROM user WHERE `Uid`, `Uname`, `Gender`, `email`, `password`, `role` LIKE '%{$search}%'";
   $select = $PDO->prepare("select * from user ");
   $select->execute();
    
    while ($row = $select->fetch(PDO::FETCH_OBJ)) {
      echo'
      <tr>
      <td><img src = "upload/'.$row->IMG.'" class="img-rounded" width="50px" height="50px"/><span class="ml-2"></td>
      <td>'.$row->Uid.'</td>
      <td>'.$row->Uname.'</td>
      <td>'.$row->Gender.'</td>
      <td><span class="label label-primary">'.$row->email.'</span></td>
      <td >'.$row->password.'</td>
      <td>'.$row->role.'</td>
      <td>'.$row->user_type.'</td>
     

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