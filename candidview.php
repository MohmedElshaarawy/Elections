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

        <div class="container">
    <h2 class="special-heading pt-5 pb-5" > عرض بيانات المرشحين  </h2>
      <div class="row">
  
    <table  class="maste" border="1">

<thead class="text-center " >
<tr >
  <th class="">   رقم المرشح الانتخابى</th>
  <th class="">  اسم المرشح   </th>
  <th class="">   المنصب المرشح       </th>
  <th class="">    الرمز الانتخابى    </th>

</tr>
</thead>

<tbody class="cont">


  <?php  
  include 'conect.php';
  $conn;
   
   // show Data order 

 
  $sql = " SELECT * FROM  candidates ";
  $query = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($query);
    while ($pro = mysqli_fetch_array($query)){
?>         
   

   <tr class=" text-center border-2 pe-5" >
          <td><?php echo $pro ["canid"] ; ?></td>
          <td><?php echo $pro ["cannam"] ; ?></td>
          <td><?php echo $pro ["candnotes"]; ?></td>
          <td><?php echo $pro ["electsymbol"] ; ?></td>
      
          
       </tr>   
        
<?php   
    }
 ?>

  </tbody>
  </table>
</div>
</div>

  
</body>
</html>