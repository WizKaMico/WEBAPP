<?php include('../connection/AdminLoginController.php'); ?>
<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title>CAPSTONE APP | HOME</title>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap'>
<link rel="stylesheet" href="./style/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="wrapper">

<div class="heading">
<center>
   <img src="../assets/img/logo-icon.png" style="width:50%; content-align:center;" />
</center>
<h2 style="text-align:center;">Welcome!</h2>
<p style="text-align:center;">Sign In to your account</p>
</div>

    <?php if(!empty($_GET['view'])){ ?>
    <?php if($_GET['view'] == 'LOGIN'){ ?>
    <?php include('route/login.php'); ?>
    <?php } else { ?>

    <?php } ?>
    <?php } else { ?>
    <?php include('route/login.php'); ?>
    <?php } ?>

</div>

<footer>
</footer>
<!-- partial -->
  
</body>
</html>
