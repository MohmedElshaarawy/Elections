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
    <title>Elections</title>
</head>
<body>
    <script src="js/all.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
<!-- Start Header -->
    <div class="header">     
        <nav class="navbar navbar-expand-lg " >
            <div class="container-fluid">
            
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars "></i>
              </button>
              <div class="collapse navbar-collapse itms" id="navbarNav">
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
        <center>
        <div class="cont">
        </div> 
        </div>
        </div>
   

 <div class="text  rows">
<form class="signup" method="POST" action="">
 <div >
  <h4> انتخب الامين المساعد للاتحاد</h4>
  <label for="">رقم المرشح  </label>
  <input type="number" name="canid" >
  <label for=""> اسم المرشح </label>
   <input type="text" name="cannam" >
   <label for="">رقم الطالب</label>
  <input type="number" name="stuid" >
  <label for="">  ماهو اختيارك للمرشح   </label>
  <input type="text" name="Whatyourchoicecandasst" >
  <label for="">تاريخ الترشح   </label>
  <input type="date" name="electiondate" >
 
  <input type="submit" name="add" value="انتخب">
</div>
</form>
<div >
<!-- START php conect -->
<?php 
  include "conect.php";
  $conn;
  ?>
<?php 
  if(isset($_POST['canid'])){
    $cid = $_POST['canid'];
  }
  if(isset($_POST['cannam'])){
    $cnam = $_POST['cannam'];
  }
  if(isset($_POST['stuid'])){
    $stid = $_POST['stuid'];
  }
  if(isset($_POST['Whatyourchoicecandasst'])){
    $chcand = $_POST['Whatyourchoicecandasst'];
  }
  if(isset($_POST['electiondate'])){
    $edte = $_POST['electiondate'];
  }
  if ($_SERVER["REQUEST_METHOD"]=="POST"){
    
    if(isset($_POST['add'])){
       $query = "INSERT INTO assistantsecretary (canid,cannam,stuid,Whatyourchoicecandasst,electiondate)
             VALUE ('$cid','$cnam','$stid','$chcand','$edte')";
       mysqli_query($conn , $query);
       echo  "<center style='color:#000; font-size:25px;'>" . "تم الانتخاب بنجاح  " . "</center>" ;
     } 
     else{echo  "<center style='color:#f10; font-size:25px;'>" . "Wrrong" . "</center>" ;}
    }
?>


</div>

  
</body>
</html>