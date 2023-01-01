<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Memo App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  </head>
  <style>
    body{
      font-family: poppins;
      background: linear-gradient(90deg, #08d6f2, #09f6f0, rgba(13,246,207,1))
    }
    .title{
      color: white;
      font-size: 2rem;
      font-weight: 600;
    }
    .title:hover{
      color: white;
    }
    nav{
      position: absolute !important;
      top: 0;
      left: 0;
      width: 100%;
    }
  </style>
  <body>

  <nav class="navbar ">
  <div class="container">
    <a class="navbar-brand title" href="index.php">Memos</a>
    <div class="d-flex " role="search">
      <a href="login.php" class="btn btn-primary mx-2"  type="submit">Login</a>
      <a href="register.php" class="btn btn-success mx-2" type="submit">Register</a>
  </div>
  </div>
</nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>