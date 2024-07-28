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
    <title> SIGN_IN</title>
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
                 <a class="nav-link active" aria-current="page" href="#">تسجيل</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link active" aria-current="page" href="index.php">الرئيسية</a>
               </li>
               <!-- <span> </span> -->
               <li class="nav-item">
                 <a class="nav-link" href="#" > <i class="fa-regular fa-user u"></i></a>
               </li>
             
             </ul>
           </div>
         </div>
       </nav>
</div>

<!-------------------------------------End Header-------------------------->
<!-- Start landing -->
<div class="landing">
     <div class="row pt-3">
<center>
 <div class="text  rows">
  <!-- Start Form input -->
 <form class="signin" method="POST" action="">
 <div >
   <h4>تسجيل الدخول</h4> 
   <input type="text" name="stuid" placeholder="Enter Your ID">
   <input type="text" name="stuname" placeholder="Enter Your User Name">
   <input type="password" name="stupass" placeholder=" Enter Your Password">
   <a href="signup.php" > اذا كنت تريد التسجيل لاول مرة </a>
    <input type="submit" name="log" value="ادخل">
   
 </div>
</form>
 <!--  End Form input -->
</div>
 <?php 
  include "conect.php";
  $conn;
 

  session_start();
 if(isset($_POST['stuid'])){
  $id= $_POST['stuid'];
 }
if(isset($_POST['stuname'])){
 $name= $_POST['stuname'];
}
if(isset($_POST['stupass'])){
 $pass= $_POST['stupass'];
}



   if(isset($_POST['log'])){
  $sql= "SELECT * FROM student WHERE  stuid='$id' AND stuname='$name'  AND stupass='$pass'   ";
  $result = $conn ->query($sql);

  while($row = $result -> fetch_assoc()) {
  $count= $result -> num_rows;
   }

  if ($count > 0) {

  
   $_SESSION['stuid']=$id;
   $_SESSION['stuname']=$name;
   $_SESSION['stupass']=$pass;

   header('location:http://localhost/Elections/index.php');

   } 
   else{ header('location:http://localhost/Elections/signin.php');  }

}

?>
 </div>
</center>
 </div>
</div>
<!-- End landing -->
</body>
</html>