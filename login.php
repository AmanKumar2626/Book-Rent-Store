<?php
include 'admin\includes\config.php';

    if(isset($_POST['login'])){
        if(empty($_POST['email']))
            echo "<h4>Please enter your valid email</h4>";
        if(empty($_POST['pwd']))
            echo "<h4>Please enter your password</h4>";

    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password =  mysqli_real_escape_string($conn,$_POST['pwd']);

    $sql = "SELECT * FROM customer WHERE customer_email = '{$email}';";
    $result = $conn->query($sql);

    if($result->num_rows == 1){
        $row = $result-> fetch_assoc();
        if($password == $row['customer_pwd']){

            $_SESSION['id'] = $row['customer_id'];
            $_SESSION['customer_role'] = $row['customer_role'];
            $_SESSION['customer_name'] = $row['customer_name'];
            $_SESSION['customer_email'] = $row['customer_email'];
            header("Location:admin/index.php");
        }
        else {
            echo "<h4 style='position:absolute;left:45%;z-index:4;top:70%;'>Incorrect password</h4>";
        }
    }
    else {
        if($_POST['email']){
            echo "<h4 style='position:absolute;left:42%;z-index:4;top:70%;'>(unavailable) please signup first</h4>";
        }
    }
}
?> 


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
    <title>Login Page</title>
</head>
<body>
<?php include_once 'navbar.php'
    ?> 
    <div class="login-page">
        <div class= "form">
           <div class="login">
             <div class="login-header"> <h2>Login Page</h2></div>
             </div>
                 <form class="login-form" action="<?php echo $_SERVER['PHP_SELF']; ?> " method="post">
                      <input type="email" name='email' placeholder="Email" required/>
                      <input type="password" name='pwd' placeholder="Password" required/>
                      <button type='submit' name='login'>Login</button>
                 </form>
                 <p class="message">Not registered? <a href="./Register.php">Create an account</a></p>
                 </div>
    </div>
</body>
</html>
