<?php
include "includes/config.php";

$sql = "DELETE FROM books WHERE book_id = {$_GET['id']}";
$conn->query($sql);

header('http://localhost/book-rental-store/admin/index.php?successfullyDeleted');

?>