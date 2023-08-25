


<?php




session_start();

// if ($_SESSION['usermail']=="" OR $_SESSION['role']=="User") {
//   header('location:login.php');
// }
include_once'connectdb.php';
include_once'header.php';
error_reporting(0);
//error_reporting(0);
if($_SESSION['username']=="" OR $_SESSION['role']=="User"){
    
    
    header('location:lock.php');
}
try {

    # code...
    //code...
    $id=$_GET['id'];
    $del=$PDO->prepare("select * from user where uid='$id'");
    $del->execute();
    $row=$del->fetch(PDO::FETCH_ASSOC);
    if ($del->execute()) {
      # code...
    
      $_SESSION['uid']=$row['Uid'];
      $_SESSION['gender']=$row['Gender'];
      $_SESSION['password']=$row['password'];
      $_SESSION['uname']=$row['Uname'];
      $_SESSION['email']=$row['email'];
      $_SESSION['role']=$row['role'];
      $_SESSION['user_type']=$row['user_type'];
      //$_SESSION['IMG']=$row['IMG'];

    
    
    }else {
      # code...
    }
  } catch (exception $e) {
  


  
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
  
}





try {
  //code...
  
  
  if (isset($_POST['bsasve'])) {
    # code...
    
    $uname=$_POST['fname'];
    $gender=$_POST['genders'];
    $email=$_POST['email'];
    $role=$_POST['role'];
    $password=$_POST['password'];
    $repass=$_POST['repassword'];
    $accesstype=$_POST['usertype'];
    //$gimg=$_POST['gimg'];

   // $gtts="";
  

  //  $f_name = $_FILES['myfile']['name'];
  //  $f_temp = $_FILES['myfile']['tmp_name'];

   
  //  $f_size = $_FILES['myfile']['size'];
  //  $f_extension = explode('.',$f_name);
  //  $f_extension= strtolower(end($f_extension));
  //  $f_newfile = uniqid().'.'. $f_extension;
  //  $store = "upload/".$f_newfile;
  
  //  if($f_extension=='jpg' ||$f_extension=='jpeg' || $f_extension=='png' || $f_extension=='gif'){
       
  //      if($f_size>=995000){
           
           //echo  'Max file should be 1Mb';

      //      echo'<script type="text/javascript">
      //          jQuery(function validation(){
                 
      //            swal({
      //              title: "Max file should be 1Mb",
      //              text: "error",
      //              icon: "warning",
      //              button: "Ok!",
      //            });
                 
      //          });
               
      //          </script>';




      //  }else {
      


      //   if(move_uploaded_file($f_temp,$store))
      //   {


      //     $productimage =$f_newfile;
      //     $gimg=$f_newfile;
      //     //$gimg=$_GET[$f_newfile];
          
            
          

          if ($password==$repass) {
       
            //$id=$_GET['id'];
            # code...
            // echo $uname ."_".$gender."-".$email ."_".$role."-".$password ."_".$repass."-";
            
            $update = $PDO->prepare("update  `user` set `Uname`=:pname,Gender=:cole, email=:email,password=:passwords,role=:roles,user_type=:access where Uid =".$id);
            $update->bindParam(':pname',$uname);        
            $update->bindParam(':cole',$gender);
            $update->bindParam(':email',$email);
            $update->bindParam(':passwords',$password);
            $update->bindParam(':roles',$role);
            $update->bindParam(':access',$accesstype);
           // $update->bindParam(':acc',$gimg);
            
            $update->execute();
            
            if ($update->rowCount()) {
              echo'<script type="text/javascript">
              jQuery(function validation(){
                
                swal({
                  title: "update Successful",
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
                  title: "Update Not Successful!",
                  text: "No changes made",
                  icon: "warning",
                  button: "Ok!",
                });
                
              });
              
              </script>';
              
            }
            //update count ends here
            
        }else {
            echo'<script type="text/javascript">
              jQuery(function validation(){
                
                swal({
                  title: "Passwords do not match!",
                  text: "Error",
                  icon: "error",
                  button: "Ok!",
                });
                
              });
              
              </script>';
              
            }
              //passwords ends here!!!

          



      //     echo'<script type="text/javascript">
      //     jQuery(function validation(){
            
      //       swal({
      //         title: "Add success",
      //         text: "Error",
      //         icon: "error",
      //         button: "Ok!",
      //       });
            
      //     });
          
      //     </script>';
    
  
      
  
      // }else {






      
//else for file size
  //   }   else {
  //     echo'<script type="text/javascript">
  //         jQuery(function validation(){
            
  //           swal({
  //             title: "file extension error",
  //             text: "Error",
  //             icon: "error",
  //             button: "Ok!",
  //           });
            
  //         });
          
  //         </script>';
  //   }
  //   //extension if ends here

  // } 
      
      
  }


  }catch (exception $e) {


  
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
       Edit User
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

          <div class="col-md-4">

<!-- this one is left -->


<div class="register-box-body">
    <p class="login-box-msg">Please Edit Prefered Column</p>

    <form role="form" action="" method="post" enctype="multipart/form-data">


    
    <!-- <div class="form-group has-feedback">
            <label>Change Employee Image(Optional!)</label>
            <input type="file" name="myfile" />
                </div>

    <fieldset disabled>
    <div class="form-group has-feedback">
        <input for="disabledTextInput" type="disabled" class="form-control" placeholder="No Image Found" value="<?php if(isset($_SESSION['IMG'])){echo $_SESSION['IMG'];}?>" name="gimg" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      </fieldset> -->
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="User Name" value="<?php if(isset($_SESSION['uname'])){echo $_SESSION['uname'];}?>" name="fname" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
       <!-- select -->
       <div class="form-group">
                  <label>Gender</label>
                  <select class="form-control" name="genders"  required>
                  <option><?php if(isset($_SESSION['gender'])){echo $_SESSION['gender'];}?></option>
                    <option>Male</option>
                    <option>Female</option>
                    
                  </select>
                </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email" value="<?php if(isset($_SESSION['email'])){echo $_SESSION['email'];}?>" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>






      <!-- select -->
      <div class="form-group">
                  <label>Role</label>
                  <select class="form-control" name="role"  required>
                  <option><?php if(isset($_SESSION['role'])){echo $_SESSION['role'];}?></option>
                    <option>Admin</option>
                    <option>User</option>
                  </select>
                </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" value="<?php if(isset($_SESSION['password'])){echo $_SESSION['password'];}?>" name="password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Retype_password" name="repassword"  required>
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="form-group">
                  <label>Access Type</label>
                  <select class="form-control" name="usertype"  required>
                  <option><?php if(isset($_SESSION['user_type'])){echo $_SESSION['user_type'];}?></option>
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
            <div class="box-body table-responsive no-padding">
              <table id="example1" class="table table-hover">
              <thead>
              <!-- <th>IMG</th> -->
            <th>#</th>
            <th>User Name</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Pwd.</th>
            <th>Role</th>
            <th>Access Type</th>
            <th>Del.</th>
            <th>Edit</th>
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
       
        <td>'.$row->Uid.'</td>
        <td>'.$row->Uname.'</td>
        <td>'.$row->Gender.'</td>
        <td><span class="label label-primary">'.$row->email.'</span></td>
        <td >'.$row->password.'</td>
        <td>'.$row->role.'</td>
        <td>'.$row->user_type.'</td>
        <td><button id='.$row->Uid.'    class="btn btn-danger btndelete"  ><i class="glyphicon glyphicon-trash" ></i></button></td>
        <td><a href="register.php?id='.$row->Uid.'" button type="submit"  class="btn btn-info" name="bedits" ><i class="glyphicon glyphicon-edit" ></i></button></td>

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

  <?php

include_once'footer.php';

?>




<script>
  $(document).ready( function () {
    $('#example1').DataTable();
} );  
    
    
</script>


<script>
$(document).ready(function() {
    $('.btndelete').click(function() {
            var tdh = $(this);
            var id = $(this).attr("id");
             swal({
  title: "Do you want to delete User?",
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