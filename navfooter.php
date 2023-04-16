<?php session_start();?>
<!DOCTYPE html>
<html dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MED Share</title>
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,600&family=Quicksand:wght@300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="Imags/icon.jpg">
</head>

<body>
    <?php
    if (isset($_SESSION['username'])) {
	echo '<header>';
    echo '<a href="#" class="logo"><span>الدواء للجميع</span></a>';
    echo '<ul class="navbar">';
    echo '<li><a href="home.php" ><i class="ri-home-heart-fill active"></i></a></li>';
    echo '<li><a href="shop.php">تسوق</a></li>';
    echo '<li><a href="donate.php">خير</a></li>';
    echo '</ul>';
    echo '<div class="main">';
    echo '<h3 style="color: #0496ff;"> مرحبا ' . $_SESSION["username"].'</h3>';
    echo '<div class="bx bx-menu" id="menu-icon"></div>';
    echo '</div>';
    echo '<a href="osell.php"><button type="button">بيع</button></a>';
    echo '</header>';
} else { 
	
    echo '<header>';
    echo '<a href="#" class="logo"><span>الدواء للجميع</span></a>';
    echo '<ul class="navbar">';
    echo '<li><a href="home.php" ><i class="ri-home-heart-fill active"></i></a></li>';
    echo '<li><a href="shop.php">تسوق</a></li>';
    echo '<li><a href="donate.php">خير</a></li>';

    echo '</ul>';
    echo '<div class="main">';
    echo '<a href="login.php" class="user">تسجيل الدخول</a>';
    echo '<a href="reg.php">تسجيل</a>';
    echo '<div class="bx bx-menu" id="menu-icon"></div>';
    echo '</div>';
    echo '<a href="osell.php"><button type="button">بيع</button></a>';
    echo '</header>';
}
?>
    <!-- js link -->
    <script type="text/javascript" src="js/navbar.js"></script>
</html>