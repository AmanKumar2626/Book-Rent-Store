<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Bootstrap js link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href ="./css/login.css" rel = "stylesheet" >
    <!-- <link rel="stylesheet" href="./css/style.css"> -->
    <title>Registration Page</title>
</head>
<body>
<div class="login-page" style="margin-top:-80px; margin-bottom: -80px">
        <div class= "form">
           <div class="login"> 
             <div class="login-header"> <h2>Registration Page</h2></div>
             </div> 
             <form action="./login.php ">
                  <input type="text" name ="name" placeholder = "Name" required>
                  <input type="email" name ="email" placeholder = "Email" required>
                  <input type="phone" name ="phone" placeholder = "Phone" required>
                  <input type="text" name ="address" placeholder = "Address" required>
                  <input type="password" name ="password" placeholder = "Password" required>
                  <input type="password" name ="password2" placeholder = "Password" required>
                  <button type = "submit"> Submit </button>
                </form>
                <a href="index.php" >Home</a>
            </div>
        </div>

</body>
</html>