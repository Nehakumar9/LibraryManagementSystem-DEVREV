<?php       
          require_once "db.php";   
      
          $per_page_record = 10;      
          if (isset($_GET["page"])) {    
              $page  = $_GET["page"];    
          }    
          else {    
            $page=1;    
          }    
      
          $start_from = ($page-1) * $per_page_record;     
      
          $query = "SELECT * FROM filters LIMIT $start_from, $per_page_record";     
          $rs_result = mysqli_query ($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    
    <title>Filter</title>
    <style>
         .container{   
        background-color: #f5f5f5; 
        align-items: center;  
        justify-content: center; 
        }   
        .col-md-11{   
         /* background-color: #ffffff;   */
         background-color: #ADD8E6;
        } 
        .navbar{
            background-color: #f5f5f5; 
        }
     
        input, button{   
            height: 34px;   
        }   
  
    .pagination {   
        display: inline-block;   
    }   
    .pagination a {   
        font-weight:bold; 
        font-size:18px;
        color: black;     
        padding: 8px 16px;    
        border:1px solid black;   
    }   
    .pagination a.active {   
            background-color: pink;   
    }   
    .pagination a:hover:not(.active) {   
        background-color: skyblue;   
    }   
</style>
</head>
<body >
<nav class="navbar navbar-expand-sm">
  <ul class="navbar-nav">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Library Management System</a>
        </div>
        <li class="nav-item">
            <a class="nav-link active" href="about.php">About US</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="filter.php">Filter</a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <a href="logout.php"><i class="fa fa-sign-out"></i>  Logout</a>
    </ul>
</nav>

<div class="container">
    <div class="row justify-content-center pb-3">
        <div class="col-md-11 mt-2 rounded ">
            <h3 class="p-2">Search the required books..</h3>
            <form method="POST" action="action.php">
                <label for="search-term"><strong>Filter For:</strong></label>
                <input type="text" id="search-term" name="search-term">
                
                <label for="search-column"><strong>Filter By:</strong></label>
                <select id="search-column" name="search-column">
                    <option value="title">Title</option>
                    <option value="author">Author</option>
                    <option value="subject">Subject</option>
                </select>
                <hr>
                <input type="submit" value="Filter" class="btn btn-info text-body"><br><br>
	        </form>
           
            <table class="table table-hover table-light table-striped" id="table-data">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>TITLE</th>
                        <th>AUTHOR</th>
                        <th>PUBLISH_DATE</th>
                        <th>SUBJECT</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while ($row = mysqli_fetch_array($rs_result))
                        {
                    ?>
                    <tr>
                        <td><?= $row['id']; ?></td>
                        <td><?= $row['title']; ?></td>
                        <td><?= $row['author']; ?></td>
                        <td><?= $row['publish_date']; ?></td>
                        <td><?= $row['subject']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="pagination">    
      <?php  
        $query = "SELECT COUNT(*) FROM filters";     
        $rs_result = mysqli_query($conn, $query);     
        $row = mysqli_fetch_row($rs_result);     
        $total_records = $row[0];     
          
    echo "</br>";     
          
        $total_pages = ceil($total_records / $per_page_record);     
        $pagLink = "";       
      
        if($page>=2){   
            echo "<a href='filter.php?page=".($page-1)."'>  Prev </a>";   
        }       
                   
        for ($i=1; $i<=$total_pages; $i++) {   
          if ($i == $page) {   
              $pagLink .= "<a class = 'active' href='filter.php?page="  
                                                .$i."'>".$i." </a>";   
          }               
          else  {   
              $pagLink .= "<a href='filter.php?page=".$i."'>   
                                                ".$i." </a>";     
          }   
        };     
        echo $pagLink;   
  
        if($page<$total_pages){   
            echo "<a href='filter.php?page=".($page+1)."'>  Next </a>";   
        }   
  
      ?> 
    </div>
    </div>
    
</div> 
</body>
</html>