<?php

session_start();
if($_SESSION['customer_role'] != 'admin'){
    header("location:../index.php?AdminRestricted");
}
?>