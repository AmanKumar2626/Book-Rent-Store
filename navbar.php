<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel = "stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Bootstrap js link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!--fontawesome link--> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body style="padding-top : 80px">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" >
    <div class="container-fluid">
    <img src="Images\book_store_logo.png" alt="book store logo" style="width:80px;height:80px;">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto ">
        <li class="nav-item ml-3">
          <a class="nav-link" href="./index.php">Home</a>
        </li>
        <li class="nav-item ml-3">
          <a class="nav-link" href="./products.php?type=new">Products</a>
        </li>
        <li class="nav-item ml-3">
          <a class="nav-link" href="javascript:void(0)">Genres</a>
        </li>
        <li class="nav-item ml-3">
          <a class="nav-link" href="./about.php">About</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Search"  style="border-color: #555;">
        <button class="btn btn-primary" type="button">Search</button>
      </form>
      <div class ="log-sign">                 
            <button class='btn btn-info my-3 me-3' style='font-size:14px'>
                <a href="./login.php" style='text-decoration:none;color:white'>Log In</a></button>
            <button class='btn btn-info my-3 ms-3' style='font-size:14px'>
            <a href="./register.php" style='text-decoration:none;color:white'>Sign In</a></button></div>
    </div>
  </div>
</nav>
</body>
</html>