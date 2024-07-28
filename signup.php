<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="css/sssin.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SIGN_UP</title>
</head>
<body>
    <script src="js/all.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
<!-- Start Header -->
    <div class="header">
     <nav class="navbar navbar-expand-lg " >
         <div class="container-fluid">
         <!-- <a class="navbar-brand logo" href="#"> <img src="./img/logo.png" alt=""> -->
           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
             <i class="fa-solid fa-bars "></i>
           </button>
           <div class="collapse navbar-collapse itms" id="navbarNav">
            <!-- Start nav bar -->
             <ul class="navbar-nav">
             <li class="nav-item">
                    <a class="nav-link" href="Election02.php">   انتخاب الامين المساعد للاتحاد  </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Election01.php">   انتخاب الامين العام للاتحاد  </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="candidview.php">   عرض المرشحين للانتخاب     </a>
                  </li>
               <li class="nav-item">
                 <a class="nav-link" href="nominate.php">كيفية ترشح</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="about.php">اتحاد الطلاب</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link active" aria-current="page" href="signin.php">تسجيل</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link active" aria-current="page" href="index.php">الرئيسية</a>
               </li>
               <!-- <span> </span> -->
               <li class="nav-item">
                 <a class="nav-link" href="#" > <i class="fa-regular fa-user u"></i></a>
               </li>
             </ul>
              <!-- Start nav bar -->
           </div>
         </div>
       </nav>
</div>



<div class="landing">
     <div class="row pt-3">
<center>
 <div class="text  rows">
<form class="signup" method="POST" action="">
 <div >
  <h4>التسجيل  </h4>
  <input type="text" name="stuname" placeholder=" Enter Your Name">
   <input type="password" name="stupass" placeholder=" Enter Your Password">
  <input type="text" name="stutil" placeholder=" Enter Your Phone">
  <a href="signin.php" > الرجوع الي صفحة الدخول  </a>
  <input type="submit" name="add" value="ادخل">
</div>
</form>
<div >
<!-- START php conect -->
<?php 
  include "conect.php";
  $conn;
  ?>
<?php 
  if(isset($_POST['stuname'])){
    $name = $_POST['stuname'];
  }
  if(isset($_POST['stupass'])){
    $pass = $_POST['stupass'];
  }
  if(isset($_POST['stutil'])){
    $phone = $_POST['stutil'];
  }
  if ($_SERVER["REQUEST_METHOD"]=="POST"){
    
    if(isset($_POST['add'])){
       $query = "INSERT INTO student (stuname,stupass,stutil)
             VALUE ('$name','$pass','$phone')";
       mysqli_query($conn , $query);
       echo  "<center style='color:#000; font-size:25px;'>" . " تم التسجيل بنجاح " . "</center>" ;
     } 
     else{echo  "<center style='color:#f10; font-size:25px;'>" . "Wrrong" . "</center>" ;}
    }
?>
<!-- End php conect -->
 </div>
</center>
 </div>
 <!-- End Landing -->
</div>



</body>
</html>