<?php
      include_once('includes/navbar.php');
      include_once('includes/restriction.php');
       if(!(isset($_SESSION['role']))){
        header("LOcation: login.php?unauthorizedAccess");
       }
?>

<h4 class="adm-h4"> All Books</h4>
<h5 style="position:absolute;right:150px"><a href="add-post.php">Add Books</a></h5>
<br><br>

<?php
            include "includes/config.php";

            $limit = 4;
            if(isset($_GET['page'])){
                $page = $_GET['page'];

                switch($page){
                    case 1: $sn = 0; break;
                    case 2: $sn = 4; break;
                    case 3: $sn = 8; break;
                    case 4: $sn = 12; break;
                    case 5: $sn = 16; break;
                    case 6: $sn = 20; break;
                }
            }else {
                    $page = 1;
                    switch($page){
                        case 1: $sn = 0; break;
                        case 2: $sn = 4; break;
                        case 3: $sn = 8; break;
                        case 4: $sn = 12; break;
                        case 5: $sn = 16; break;
                        case 6: $sn = 20; break;
                    }
                }
            //define from which  row to start extracting data from databse 
            $offset = ($page - 1) * $limit;

            if($_SESSION['customer_role'] == 'admin'){
                //select query of post table for admin user

                $sql = "SELECT * FROM books ORDER BY books.book_id DESC LIMIT {$offset},{$limit}"; 
            }
            elseif($_SESSION['user_role'] == 'normal'){
                   $sql = "SELECT * FROM books WHERE book_author = '{$_SESSION['customer_name']}' ORDER BY books.book_id DESC LIMIT {$offset}, {$limit}";
            }

            $result = $conn->query($sql) or die("Query Failed");

            if($result->num_rows > 0){
?>

<div class ="table-cont">
    <table>
        <thead>
            <th class = "short">S.N</th>
            <th class = "large">Title</th>
            <th class = "medium">Category</th>
            <th class = "medium">Publication Date</th>
            <th class = "medium">Author</th>
            <th class = "short">Edit</th>
            <th class = "short">Delete</th>
        </thead>
        <tbody>
            <?php
            while($row = $result->fetch_assoc()){
                $sn = $sn +1;
            ?>

            <tr>
                <td><?php echo $sn?></td>
                <td><?php echo $row["book_title"]?></td>
                <td><?php echo $row["book_catag"]?></td>
                <td><?php echo $row["book_date"]?></td>
                <td><?php echo $row["book_author"]?></td>
                 <td><a class = "fn_link" href="update-post.php?id=<?php echo$row["book_id"]?>"><i class="fa-regular fa-pen-to-square"></i></a></td>
                 <td><a class = "fn_link" href="delete_post.php?id=<?php echo$row["book_id"]?>"><i class="fa-solid fa-trash"></i></a></td>
            </tr>
            
            <?php
            }}else {
                echo "No results";
            }
            $conn-> close();
            ?>
        </tbody>
    </table>
</div>

<!-- pagination -->
<?php
                include "includes/config.php"; 
               // Pagination btn using php with active effects 

                $sql1 = "SELECT * FROM books";
                $result1 = mysqli_query($conn, $sql1) or die("Query Failed.");

                if(mysqli_num_rows($result1) > 0){

                  $total_products = mysqli_num_rows($result1);
                  $total_page = ceil($total_products / $limit);

                  echo "<div class='pagination'>";
          
                  for($i=1; $i<=$total_page; $i++){

                    //important this is for active effects that denote in which page you are in current position
                    if($page==$i){
                      $active = "active";
                    }else{
                      $active = "";
                    }

                        echo "<a href='index.php?page={$i}' class='{$active}'>".$i."</a>";
                  }
            
                }
                echo "</div>";
?>

