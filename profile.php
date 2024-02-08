<?php
   $today_date = date('Y/n/j/');
   session_start();

   include 'admin\includes\config.php';
    
   include_once './navbar.php';

   if(!(isset($_SESSION['id']))){
    header("location:login.php?Unathorized");
    die();
   }

   if(isset($_POST['update'])){
    
    $sql = "UPDATE customer 
              SET customer_name = '{$_POST['name']}',
                   customer_email = '{$_POST['email']}',
                   customer_pwd = '{$_POST['pwd']}',
                   customer_phone = '{$_POST['phone']}',
                   customer_address = '{$_POST['address']}' 
              WHERE customer_id = '{$_SESSION['id']}' ";
         
         $conn-> query($sql);
         echo "<h3 style='text-align:center;position:absolute;top:70px;left:11%;padding:0'>Your Profile Updated Successfully</h3>";
}
$sql = "SELECT * FROM customer WHERE customer_id = '{$_SESSION['id']}';";
$result = $conn->query($sql);
$row = $result->fetch_assoc();


$_SESSION['role'] = $row['customer_role'];
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Profile </title>
    <style>

    </style>
</head>
<body>
     <table style ="margin-top:100px">
     
        <thead>
            <tr>
            <th>My Profile</th>
          </tr>
        </thead>
        <tbody>
            <tr>
                <td>Name </td>
                <td><?php $row['customer_name']?></td>
            </tr>
            <tr>
                <td>Phone </td>
                <td><?php $row['customer_phone']?></td>
            </tr>
            <tr>
                <td>Email </td>
                <td><?php $row['customer_email']?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><?php $row['customer_address']?></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><?php $row['customer_pwd']?></td>
            </tr>
        </tbody>
     </table>
     <?php    echo $row['customer_role'];?>
</body>
</html>