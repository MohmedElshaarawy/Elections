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
<!-- Start landing-->
<div class="landing">
 <div class="container">
 <div class="row ">
  <img src="img/2.jpg" alt="">
  <h5>اتحاد الطلاب</h5>
   <div class="text">
        <h4>رسالة الموقع</h4>
          <p>التعاون  في العموم والشمول يكمن في  تحقيق الاهداف  المعينه والمخطط لها .. لذا سهلنا على الطلاب الناخبين والمنتخبين الاجرائات التي تخص العمليه الانتخابيه واصبحت الكترونيه عكس العاده واصبح للجميع احقيه التصويت عن طريق هواتفهم في اي وقت واي مكان دون النزول والتكدس في الجامعات وعالج الموقع مشكله من ضمن المشاكل الاساسيه وهي تكراار التصويت لشخصين   يتبع</p>
        </div>
        <div class="txtforpage">
     <h4>أهدف الموقع</h4>
     <div class="p">
     <p> 1 - عمل ملف تعريفي لكل طالب له الحق في المشاركة في الانتخابات   </p>
        <p> 2 - عمل سيرة ذاتية للمرشحين لاتحاد الطلاب </p>
        <p> 3 - اجراء تصويت الكتروني عن طريق الموقع   </p>
     </div>
 </div>
 </div>
</div>
</div>
</div>



<center>
<div class="admin">
<p><a  href="signin.php"></a></p>
</div>
<center>
<!-- End Footer -->
</div>

</body>
</html>