<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elections</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link rel="stylesheet" type="text/css" href="./css/home.css">
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
<!-- Start loading  -->
<div class="loading">
<div class="container">
  <div class="row4">
    <div class="title">
        <h2>اتحاد الطلاب</h2>
        <p>هى التنظيمات الشرعية التى تعبر عن آراء الطلاب وطموحاتهم بالجامعات والكليات والمعاهد، ويمارسون خلالها كافة الأنشطة الطلابية في إطار التقاليد والقيم الجامعية الأصيلة، وهى التى ترعى مصالحهم، وتقوم على تنظيم النشاط الطلابي وكفالة ممارسته، وتمثيل الطلاب أمام الجهات المعنية.</p>
    </div>
    <div class="titleForpage">
        <h3>اتحادالطلاب الكلية</h3>
        <p>يشكل اتحاد طلاب الكلية من الطلاب المنتخبين عن الطلاب في انتخابات اتحاد الطلبة وينتخب الطلاب الفائزين فيما بينهم أمينًا وأمينًا مساعدًا للجان إدارة رعاية الطلاب ثم ينتخب من بينهم أمينًا وأمينًا مساعدًا للاتحاد.</p>
        <h4>شروط ترشح الطلاب لانتخابات مجلس اتحاد الطلاب</h4>
        <ol>
          <li>أن يكون مصري الجنسية.</li>
          <li>أن يكون طالبًا نظاميًا مستجدًا في فرقته ( أي لا يكون باق للإعادة ).</li>
          <li>أن يكون ذو سمعة حسنة.</li>
          <li>أن يكون من ذوى النشاط في مجال عمل اللجنة المرشح لها.</li>
          <li>ألا يكون قد سبق الحكم عليه بعقوبة مقيدة للحرية أو أي عقوبة تأديبية داخل الكلية أو الجامعة.</li>
          <li> ألا يكون منتميًا إلى أي تنظيم أو كيان أو جماعة إرهابية مؤسسة على خلاف القانون.</li>
        </ol>
    </div>
    <div class="monerElypter">
        <h4>اختصاصات اتحاد الطلاب </h4>
        <ol>
          <li>رسم سياسة اتحاد طلاب الكلية في ضوء البرامج والأنشطة المقدمة من اللجان.</li>
          <li>اعتماد برامج عمل مجلس الاتحاد ومتابعة تنفيذها.</li>
          <li>تنسيق العمل بين لجان الاتحاد المختلفة.</li>
          <li>العمل على توثيق العلاقات بين اتحادات كليات الجامعة.</li>
        </ol>
        <h5>أهداف اتحاد الطلاب</h5>
        <ol>
          <li> تنمية القيم الروحية والأخلاقية والوعى الوطنى بين الطلاب وإتاحة الفرصة للطلاب للتعبير المسئول عن اَرائهم.</li>
          <li> بث الروح الجامعية بين الطلاب وتوثيق الروابط بينهم وبين أعضاء هيئة التدريس.</li>
          <li>أن يكون اتحاد الطلاب همزة الوصل بين الطلاب وأعضاء هيئة التدريس وإدارات الكلية.</li>
        </ol>
    </div>

  </div>  
</div>
</div>


<center>
<div class="admin">
<p><a  href="admin/signin.php"></a></p>
</div>
</div>
<center>

<!-- End Footer -->
</body>
</html>