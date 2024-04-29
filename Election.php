<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link rel="stylesheet" type="text/css" href="./css/home.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elections</title>
</head>
<body>
    <script src="js/all.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
<!-- Start Header -->
    <div class="header">     
        <nav class="navbar navbar-expand-lg " >
            <div class="container-fluid">
              <a class="navbar-brand logo" href="#"> <img src="./img/logo.png" alt="">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars "></i>
              </button>
              <div class="collapse navbar-collapse itms" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="Election.php"> انتخاب</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="nominate.php">كيفية ترشح</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.php">اتحاد الطلاب</a>
                  </li>
                  <li class="nav-item">
                    <?php session_start();
                  if (isset($_SESSION['stuname'])) {
                  }else { echo  '<a class="nav-link active" aria-current="page" href="signin.php">تسجيل</a>'; }
                  ?>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">الرئيسية</a>
                  </li>
                  <!-- <span> </span> -->
                  <li class="nav-item">
                 <a class="nav-link" href="" > <i class="fa-regular fa-user u"></i>
                  <?php   
                  if (isset($_SESSION['stuname'])) {
                    echo $_SESSION['stuname']; 
                  }
                  ?>
                </a>
               </li>
               <?php
               if (isset($_SESSION['stuname'])) {
                echo '
               <li class="nav-item">
               <form method="POST" >
               <a class="nav-link out" href="" ><i class="fa-sharp fa-solid fa-arrow-right-from-bracket"></i>
                  <input  type="submit" name="ou" value="Logout">  
                  </a>
                  </form>
               </li>
              ';
               }
               if(isset($_POST['ou'])){   header('location:signin.php'); session_destroy();}
                ?>
                </ul>
              </div>
            </div>
          </nav>
        </div>
<!-------------------------------------End Header-------------------------->
<div class="landing">
 <div class="container">
 <div class="row ">
  
 </div>
</div>
</div>
</div>
<!-- Start Footer -->
<div class="footer">
 <div class="row">

 <div class="col"> <p> <a class="navbar-brand" href="#">Elections  </a> <br/><br/>  </p>
</div> 
 <div class="col">
 <a href="https://www.facebook.com/hicmis"> <i class="icon fa-brands fa-facebook-f"></i></a>
 <a href=""> <i class="icon fa-brands fa-whatsapp"></i></a>
 <a href=""> <i class="icon fa-solid fa-phone"></i> </a>
   </div> 

 <!-- <div class="col ">
 <p class="tom"></p> <i class=" fa-brands fa-facebook-f">  </i>   تابع طلبك علي </p>
 <p class="tom"></p> <i class=" fa-brands fa-whatsapp"> </i>   تابع طلبك علي </p> 
 <p class="tom"></p> <i class=" fa-solid fa-phone"> </i>    تابع طلبك علي </p> 
 </div>  -->


</div>

<center>
<div class="admin">
<p><a  href="signin.php"></a></p>
</div>
<center>
<!-- End Footer -->
</div>