<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://use.fontawesome.com/be1ba39dfe.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="css/style.css" rel = "stylesheet">
    <title>Book Rental Store</title>
</head>
<body>
    <?php include_once 'navbar.php'
    ?> 
<div class="section-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section-1-text">
                    <h1 class="section-1-h2">India's Online Book Rental Service</h1>
                    <p>Welcome to Online Book Store, your premier online book rental destination! Explore a diverse collection of genres, enjoy flexible rental plans. Discover the joy of reading without the commitment of purchasing. Join us and embark on a literary journey today!</p>
                    <button type="button" class="btn btn-outline-primary">Let's Start ></button>
                  </div>
            </div>
            <div class="col-lg-6">
                <img src="https://images.pexels.com/photos/4855552/pexels-photo-4855552.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Rent books" class="img-fluid">
            </div>
        </div>
    </div>
</div>
<div class="section-2">
        <h2 style='margin-bottom:10px'>Latest Products</h2>
        <!-- <a href="#"><img src="./images/img_2.jpg" alt=""> -->
        <div class="gallery">
           
        <?php
             include "admin\includes\config.php";
             $limit = 10;
             
             $sql = "SELECT * FROM books ORDER BY books.book_id DESC LIMIT {$limit}";
             $result = $conn->query($sql);
             if ($result->num_rows > 0) {
             // output data of each row
             while($row = $result->fetch_assoc()) {
             ?>
            <div class="image-holder">
                <a href="./purchase.php?id=<?php echo $row['book_id']?>">
                <img class='image' src="admin/upload/<?php echo $row['book_img'] ?>"  alt="book-img">
                </a>
            </div>



<?php }}else { echo "No Books Found"; }
             $conn->close(); 
             ?>

        </div>

    </div>
<div class="section-3">
        <h2 style="">Featured Brands</h2>
     <div class="brand-container">
            <img class='brand' src="./Images/Rupa.png" alt="">
            <img class='brand' src="./Images/Niyogi.jpg" alt="">
            <img class='brand' src="./Images/Kamla.jpg" alt="">
            <img class='brand' src="./Images/Aleph.jpg" alt="">
            <img class='brand' src="./Images/Calcutta_University.png" alt="">
     </div>
    </div>
    <div class="section-4" id = "msg">
        <div class="heading">
            <h2> Contact Us </h2>
            <p>Leave us a message or suggestion</p>
      </div>
      <div class="column">
        <form action="/action_page.php">
        <div class="mb-3">
           <label for="uname">Name </label>
           <input type="text" class="form-control" id="name" placeholder="Enter your name" name="uname">
       </div>
       <div class="mb-3 mt-3">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email">
      </div>
        <div class="mb-3">
            <label for="comment">Comments:</label>
            <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
        </div>
        <div class="text-center"> 
               <button type="submit" class="btn btn-secondary">Submit</button>
        </div>
        </form>
      </div>
</div>
</body>
</html>