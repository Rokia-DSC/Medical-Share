<!DOCTYPE html>
<html>

<head>
  <title>Splash Screen</title>
  <link rel="stylesheet" href="css/splash.css">
  <meta http-equiv="refresh" content="4.5; url=home.php">

</head>

<body>
  <div class="splash-container"  id="Splash">
    <img src="images/logo.png" alt="Logo" class="logo" />
    <div class="splash-text">Welcome...</div>
  </div>

  <script>
    setTimeout(() => {
      document.getElementById('Splash').classList.toggle('fade');
    }, 3000);
  </script>
</body>

</html>