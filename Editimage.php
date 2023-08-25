


<?php
include_once'connectdb.php';

session_start();

include_once'header.php';
error_reporting(0);
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
  //   $_SESSION['gender']=$row['Gender'];
  //   $_SESSION['password']=$row['password'];
    $_SESSION['uname']=$row['Uname'];
    $_SESSION['email']=$row['email'];
  //   $_SESSION['role']=$row['role'];
  //   $_SESSION['user_type']=$row['user_type'];
   // $_SESSION['IMG']=$row['IMG'];

  
  
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
  // $gender=$_POST['genders'];
  $email=$_POST['email'];
  // $role=$_POST['role'];
  // $password=$_POST['password'];
  // $repass=$_POST['repassword'];
  // $accesstype=$_POST['usertype'];

 // $gtts="";


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
// $gimg=$_GET[$f_newfile];
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




     }else {
    


      if(move_uploaded_file($f_temp,$store))
      {


        $productimage =$f_newfile;
       
        //$gimg=$_GET[$f_newfile];
        
          
        

        if ($password==$repass) {
     
          //$id=$_GET['id'];
          # code...
          // echo $uname ."_".$gender."-".$email ."_".$role."-".$password ."_".$repass."-";
          
          $update = $PDO->prepare("update  `user` set `Uname`=:pname, email=:email,IMG=:acc where Uid =".$id);
          $update->bindParam(':pname',$uname);        
          $update->bindParam(':email',$email);
          $update->bindParam(':acc',$productimage);
          
          $update->execute();
          
          if ($update->rowCount()>0) {
          $gecho='<script type="text/javascript">
            jQuery(function validation(){
              
              swal({
                title: "update Successful",
                text: "Qureied",
                icon: "success",
                button: "Ok!",
              });
              
            });
            
            </script>';
            echo $gecho;
            
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

        



        echo'<script type="text/javascript">
        jQuery(function validation(){
          
          swal({
            title: "Updated Successfully",
            text: "Updated!",
            icon: "success",
            button: "Ok!",
          });
          
        });
        
        </script>';
  
       // session_unset();
    

    }else {






    }

  }
//else for file size
  }   else {
    echo'<script type="text/javascript">
        jQuery(function validation(){
          
          swal({
            title: "file extension error",
            text: "Please Select a valid image format eg. jpg, png,jpeg or gif.",
            icon: "error",
            button: "Ok!",
          });
          
        });
        
        </script>';
  }
  //extension if ends here

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
       Edit Image Form
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
    <p class="login-box-msg" >Select image</p>

    <form role="form" action="" method="post" enctype="multipart/form-data">


    
    <div class="form-group has-feedback">
            <label style="color: red";>Change Employee Image(Required!!!!)</label>
            <input type="file" name="myfile" required />
                </div>

    <fieldset disabled>
    
      
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="User Name" value="<?php if(isset($_SESSION['uname'])){echo $_SESSION['uname'];}?>" name="fnasme" >
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="emasil" value="<?php if(isset($_SESSION['email'])){echo $_SESSION['email'];}?>" >
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>

</fieldset>




      <!-- <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" value="" name="password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Retype_password" name="repassword"  required>
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div> -->
      <!-- <div class="form-group">
                  <label>Access Type</label>
                  <select class="form-control" name="usertype"  required>
                  <option></option>
                    <option>Denied</option>
                    <option>Access</option>
                  </select>
                </div> -->
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
             
            </label>
          </div>
        </div>

        
      <div class="form-group has-feedback">
        <input type="hidden" class="form-control" placeholder="User Name" value="<?php if(isset($_SESSION['uname'])){echo $_SESSION['uname'];}?>" name="fname" required>
        <!-- <span class="glyphicon glyphicon-user form-control-feedback"></span> -->
      </div>
      
      <div class="form-group has-feedback">
        <input type="hidden" class="form-control" placeholder="Email" name="email" value="<?php if(isset($_SESSION['email'])){echo $_SESSION['email'];}?>" required>
        <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
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
              <th>IMG</th>
                <th>#</th>
            <th>User Name</th>
            <th>Email</th>
            <!-- <th>Del.</th> -->
            <th>Edit</th>
            <th>View</th>
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
        <td><img src = "upload/'.$row->IMG.'" class="img-rounded" width="60px" height="60px"/></td>
        <td>'.$row->Uid.'</td>
        <td>'.$row->Uname.'</td>
        <td><span class="label label-primary">'.$row->email.'</span></td>
      
        <td><a href="editimage.php?id='.$row->Uid.'" button type="submit"  class="btn btn-info" name="bedits" ><i class="glyphicon glyphicon-pencil" ></i></button></td>
        <td><a href="viewimage.php?id='.$row->Uid.'" button type="submit"  class="btn btn-eye" name="bedi" ><i class="glyphicon glyphicon-eye-open" ></i></button></td>
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
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>


<script>
$(document).ready(function() {
    $('.btndelete').click(function() {
            var tdh = $(this);
            var delis = $(this).attr("id");
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
                            url: 'deluser.php',
                            type: 'post',
                            data: {
                            delio: delis
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




