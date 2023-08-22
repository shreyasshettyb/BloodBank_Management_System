<?php include "db_config.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link type="text/css" rel="stylesheet" href="../css/homepage.css">
    <!--<link rel="stylesheet" href="login.css">-->
    <script src="https://kit.fontawesome.com/c5e1e9640e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
    <div class="menu_bar">
    <nav class="navbar navbar-expand-lg bg-img">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Blood Bank</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../user_registration.php">User Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../view_samples.php">Available Blood Samples</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../hospital_registration.php">Hospital Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../contact.php">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>

<section class='banner'>
    <div class="bannerImg">
      <div class="center">
          <span class="text1">Welcome To</span>
          <span class="text2">Blood Bank System</span>
      </div>
    </div>
  </section>
</body>
<footer>
<p>Designed by Shreyas Shetty B </p>
</footer>
</html>