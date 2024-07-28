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
 <div class="row5 ">
  <!-- Start titleforpage -->
    <div class="titleforpage">
      <h2>الترشح لانتخابات اتحاد الطلاب</h2>
      <h5>تجرى انتخابات اتحاد الطلاب سنويا طبقا للقواعد الآتية:-</h5>
      <ol>
        <li>حدد رئيس الجامعة مواعيد الانتخابات فى الكلية خلال شهر نوفمبر سنوياً والإعلان عن فتح باب الترشيح لمدة ثلاث أيام</li>
        <li> يكون التقدم للترشيح على النموذج الذي تعده الجامعة لذلك ويقدم لمكتب رعاية الشباب بالكلية من ثلاث نسخ.</li>
        <li> يشكل عميد الكلية لجنة لفحص طلبات الترشيح والتأكد من توافر شروط الترشيح وتتكون اللجنة من خمس أعضاء هم:-</li>
      </ol>
      <ol>
        <li> عضوين من أعضاء هيئة التدريس.</li>
        <li>مدير رعاية الشباب.</li>
        <li>عضوين من الطلاب الأوائل فى فرقتهم من غير المرشحين.</li>
      </ol>
    </div> 
    <!-- End titleforpage -->
    <div class="titlenominate">
      <h4>تعلن إدارة الكلية عن أسماء المرشحين المستوفين لشروط الترشيح فى مدى أربعة أيام من قفل الترشيح.</h4>
      <ol>
        <li> يتم بعد ذلك فتح باب تلقى الطعون.</li>
        <li>يتم إعلان الكشف النهائي لأسماء المرشحين.</li>
        <li> يشكل عميد الكلية عدداً من اللجان للإشراف على عملية الانتخابات وتتكون من:</li>
      </ol>
      <ol>
        <li> عضوين من أعضاء هيئة التدريس.</li>
        <li> أحد العاملين برعاية الشباب.</li>
        <li> أحد الطلاب الأوائل فى الفرقة من غير المرشحين.</li>
      </ol>
      <ul>
        <li> تقوم هذه اللجنة بفرز الأصوات فى يوم الانتخابات بحضور ممثل لكل مرشح لم يفز بالتزكية ويحرر بما أتبع من إجراءات نتيجة الانتخاب محضر يوقع عليه أعضاء اللجنة ويعتمده عميد الكلية.</li>
        <li>تجرى عملية انتخاب الأمين والأمين المساعد من لجان الإتحاد من بين أعضاء كل لجنة على حده فى مدى أسبوع من تاريخ إعلان نتائج الانتخابات لأعضاء اللجان.</li>
        <li> يقوم الأمناء والأمناء المساعدين بانتخابات أمين الإتحاد والأمين المساعد للإتحاد فى الجلسة الأولى لمجلس الإتحاد بدعوة من السيد الأستاذ الدكتور / عميد الكلية.</li>
      </ul>
    </div>
    <div class="parenttitle">
      <h3>شروط الترشيح لعضوية لجان مجلس اتحاد الطلاب</h3>
      <ol>
        <li> أن يكون متمتعا بجنسية جمهورية مصر العربية.</li>
        <li>أن يكون متصفا بالخلق القويم والسمعة الحسنة</li>
        <li> أن يكون طالبا نظاميا مستجدا فى فرقته وغير باق للإعادة فيها لأي سبب.</li>
        <li>أن يسدد الرسوم الدراسية.</li>
        <li> أن يكون من ذوى النشاط الملحوظ فى مجال عمل اللجنة التي ترشح نفسه فيها.</li>
        <li> ألا يكون قد سبق الحكم عليه بعقوبة مقيدة للحرية أو تقرير إسقاط أو وقف عضويته بأحد الاتحادات الطلابية أو لجانها.</li>
      </ol>
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