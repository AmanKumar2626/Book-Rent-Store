<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="C:/xampp/htdocs/Book-Rental-Store/css/style.css">
    <!--Bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Bootstrap js link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!--fontawesome link--> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <nav class = "navbar-expand-lg navbar-light" style="background-color:rgb(60, 124, 197) ">
     <div class = "container-fluid">
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <div class = "collapse navbar-collapse" id = "navbarNavDropdown">
            <ul class = "navbar-nav">
                <li class = "nav-item">
                    <a class="nav-link"href="index.php" ><b>Books</b></a>
                </li>
                <li class = "nav-item">
                    <a class="nav-link" href="category.php" ><b>Category</b></a>
                </li>
                <li class = "nav-item">
                    <a class="nav-link" href="customer.php" ><b>Customer</b></a>
                </li>
                <li class = "nav-item">
                    <a class="nav-link" href="order.php"><b>Order</b></a>
                </li>
                <li class = "nav-item">
                    <a class="nav-link" href="return.php" ><b>Return</b></a>
                </li>
                <li class = "nav-item">
                    <a class="nav-link" href="feedback.php"><b>Feedback</b></a>
                </li>
            </ul>
            <button class="btn-info" style="border:none; background:white;margin-left:10px"> <a  href="../index.php" style="text-decoration:none" ><b>Home Page</b></a> </button>
        </div>
     </div>
</nav>
</body>
</html>