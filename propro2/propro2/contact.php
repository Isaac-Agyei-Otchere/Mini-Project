<?php
include_once'connectdb.php';
// session_start();
// error_reporting(0);
if(isset($_POST['btn_pay'])){
$chairs = $_POST['numberOfChairs'];
$canopy =   $_POST['numberOFCanopies']; 
$numberdays = $_POST['numbers'];
$activity =   $_POST['activity']; 
$total =   $_POST['Total']; 
$date =   $_POST['txt_date'];  
$fname =   $_POST['fname']; 
$email =   $_POST['email']; 
$contact =   $_POST['contact'];  
date_default_timezone_set('UTC');
  $datetime = date("h:i:sa");
  //$dtime = date("dd:mm:yy");

  $insert = $PDO->prepare("INSERT INTO `orders`(`Name`, `email`, `contact`,`activity`,`chairs`, `canopy`, `number_of_days`, `amount`,`date`, `time`) VALUES(:fname,:email,:contact,:act,:chair,:canopy,:numberdays,:total,:dates,:timess)");
  $insert->bindParam(':fname',$fname);
  $insert->bindParam(':email',$email);
  $insert->bindParam(':contact',$contact);
  $insert->bindParam(':act',$activity);
  $insert->bindParam(':chair',$chairs);
  $insert->bindParam(':canopy',$canopy);
  $insert->bindParam(':numberdays',$numberdays);
  $insert->bindParam(':total',$total);
  $insert->bindParam(':dates',$date);
  $insert->bindParam(':timess',$datetime);
 
  
  $insert->execute();
  
  if ($insert->rowCount()>0) {
    //$message = 'success';
    header('refresh:3;contact.php');
    //header('refresh:3;https://paystack.com/pay/t2uf1l6t26');
    
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
  
  
  
  


// $message = 'success';
// header('refresh:3;user.php');

}else{
$errormsg='error';    
    

} 






?>







<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;1,200&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <title></title>
  </head>
  <body>
    <section class="sub-header">
      <nav>
        <a href="index.html"><img src="_img/352-3522093_canopy-logo.png" /></a>
        <div class="nav-links" id="navLinks">
          <i class="bi bi-x-square-fill" onclick="hideMenu()"></i>
          <ul>
            <li><a href="index.html">HOME</a></li>
            <li><a href="about.html">ABOUT</a></li>
            <li><a href="products.html">PRODUCTS</a></li>
            <li><a href="contact.php">CONTACT</a></li>
          </ul>
        </div>
        <i class="bi bi-distribute-vertical" onclick="showMenu()"></i>
      </nav>
      <h1>Contact Us</h1>
    </section>

    <!---Contact Us---->
    <section class="location">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253609.49358172854!2d-1.7561948798709945!3d6.690406700796618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdb93e59a4e4c49%3A0x829c711d7b65e682!2sKumasi!5e0!3m2!1sen!2sgh!4v1627594504430!5m2!1sen!2sgh"
        width="600"
        height="450"
        style="border: 0"
        allowfullscreen=""
        loading="lazy"
      ></iframe>
    </section>

    <!-- <section class="contact-us">
      <div class="box-body">
        <div class="col-md-6">
          <div class="form-group">
            
               <label>Customer Name</label>
               <input type="text" class="form-control"name="txtcus" placeholder="Enter Customer Name" required>
          </div>
     </div>
  </div> -->


 
</section>





    <section class="contact-us">
      <div class="row">
        <div class="contact-col">
          <div>
            <i class="bi bi-house-fill"></i>
            <span>
              <h5>ABC Road, BAB Building</h5>
              <p>Ayeduase, Kumasi, IN</p>
            </span>
          </div>

          <div>
            <i class="bi bi-phone"></i>
            <span>
              <h5>+233 545555544</h5>
              <p>Monday to Sunday, 10AM to 8PM</p>
            </span>
          </div>
          <div>
            <i class="bi bi-envelope"></i>
            <span>
              <h5>info@mawuli.com</h5>
              <p>Email us your Query</p>
            </span>
          </div>
          <div>
            <i class="bi bi-envelope"></i>
            <span>
              <h5>info@mawuli.com</h5>
              <p>Email us your Query</p>
            </span>
          </div>
        </div>
        
        <div class="contact-col">
          <form action="" method="post">
            <span style="font-size: 10px; color: red">
              1 chair for one day is GHC1</span
            ><br />
            <span style="font-size: 10px; color: red">
              1 canopy for one day is GHC10</span
            >
            <br />

            <div class="form-group">
            <span style="font-size: 15px; color: green">
              Please select Event Activity</span
            >
                <select class="form-control" name="activity" required>
                <option></option>
                <option >Wedding</option>
              <option >Funerals</option>
              <option >Birthday</option>
                  
                </select>
              </div>

            <!-- <select name="act" id="" required>
              <option value="disabled"></option >
              <option value="#">Wedding</option>
              <option value="">Funerals</option>
              <option value="">Birthday</option>
            </select> -->
            <br />
            <br />
            <input
              type="text"
              name="fname"
              placeholder="Enter Full Name"
              
              id="fname"
              required
            /> <input
              type="email"
              name="email"
              placeholder="Enter Email"
              
              id="email"
              required
            /> <input
              type="text"
              name="contact"
              placeholder="Enter Contact"
              
              id="contact"
              required
            />
            <input
              type="number"
              name="numberOfChairs"
              placeholder="Enter Number  Of Chairs"
              min="15"
              max="100"
              id="chair"
              required
            />
            <input
              type="number"
              name="numberOFCanopies"
              placeholder="Enter number of canopies"
              min="1"
              max="10"
              id="canopies"
              required
            />
            <input
              type="number"
              name="numbers"
              placeholder="Enter number of days"
              min="1"
              id="days"
             
              required
            /><br />
            <input
              type="text"
              name="Total"
              placeholder="Enter Number  Of Chairs"
              
              id="totals"

            />
            <input type="hidden" value="<?php echo date('Y-m-d');?>" name="txt_date">
            
            <div id="totalPrice" name="total"></div>
            <span style="font-size: 12px; color: #ccc"
              >Items should be return after the number of days is due , failure
              to do so will result in additional charges</span
            >
            <br />
            <div class="box-footer">
            <button type="submit" name="btn_pay" class="btn btn-danger" >Request</button>
              </div>
            <!-- <a
              href="https://paystack.com/pay/t2uf1l6t26"
              class="phil-between red-between"
              >Pay
            </a> -->
          </form>
        </div>
      </div>
    </section>

    <!----footer---->
    <section class="footer">
      <h4>About Us</h4>
      <p>Est. 2021 <br> BEST AMONGST THE BEST
      </p>
      <div class="icons">
        <i class="bi bi-facebook"></i>
        <i class="bi bi-twitter"></i>
        <i class="bi bi-instagram"></i>
        <i class="bi bi-linkedin"></i>
      </div>
    </section>

    <!----JavaScript--->
    <script>
      var navLinks = document.getElementById("navLinks");

      function showMenu() {
        navLinks.style.right = "0";
      }
      function hideMenu() {
        navLinks.style.right = "-200px";
      }
    </script>
<script>





// function mult(value)
// {
// var resources = document.getElementById('chair').value;
// var minutes = document.getElementById('canopies').value; 
// document.getElementById('days').value = parseInt(resources)*parseInt(minutes);
//    }








// var days = document.getElementById("days");
// var chairs = document.getElementById("chair");
// var canopies = document.getElementById("canopies");
// totalPrice = document.getElementById("totalPrice");
// var txttotal = document.getElementById("totals");


// let price = (chairs.value * 1 + canopies.value * 10) * days.value;
// console.log("price");

// days.addEventListener("input", (e) => {
//   if (days.value == 0 || undefined || null) {
//     price = null;
//   } else {
//     price = (chairs.value * 1 + canopies.value * 10) * days.value;
   
//   }
// });

// chairs.addEventListener("input", (e) => {
//   if (days.value == 0 || undefined || null) {
//     price = null;
//   } else {
//     price = (chairs.value * 1 + canopies.value * 10) * days.value;
    
//   }
// });
// canopies.addEventListener("input", (e) => {
//   if (days.value == 0 || undefined || null) {
//     price = null;
//   } else {
//     price = (chairs.value * 1 + canopies.value * 10) * days.value;

  
//   }
// });





</script>



    <script src="./main.js"></script>
  </body>
</html>
