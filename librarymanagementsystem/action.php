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
        .col-md-10{   
         /* background-color: #ffffff;   */
         background-color: #ADD8E6;
        } 
  
</style>
</head>
</head>
<?php  include 'navbar.php'; ?>

<div class="container justify-content-center">
    <div class="row justify-content-center">
        <div class="col-md-10 mt-2 rounded">
        <?php
           
// Get the search term and column from the form submission
if (!isset($_POST['search-term']) || !isset($_POST['search-column'])) {
  die("Search term and column not provided.");
}
$search_term = $_POST['search-term'];
$search_column = $_POST['search-column'];

$output = '';
include 'db.php';


// Check for errors in the connection
if (mysqli_connect_errno()) {
  die("Failed to connect to MySQL: " . mysqli_connect_error());
}

// Query the database for results matching the search term and column
$query = "SELECT * FROM filters WHERE $search_column LIKE '%$search_term%'";
$result = mysqli_query($conn, $query);

// Check for errors in the query
if (!$result) {
  die("Error in query: " . mysqli_error($conn));
}
$row_count = mysqli_num_rows($result);

// If there are results, display them in a table
if ($row_count > 0) {
  echo "<h2 class='text-dark'>Number of rows displayed: $row_count</h2>";
  echo "<table class='table table-hover table-light table-striped'>";
  echo " <thead class='bg-light text-dark'>";
  echo "<tr><th>Id</th><th>Title</th><th>Author</th><th>Publish_date</th><th>Subject</th></tr>";
  while ($row = mysqli_fetch_assoc($result)) {
    echo " <tbody class='bg-light text-dark'>";
    echo "<tr><td>{$row['id']}</td><td>{$row['title']}</td><td>{$row['author']}</td><td>{$row['publish_date']}</td><td>{$row['subject']}</td></tr>";
  }
  echo "</table>";
} else {
  echo "No results found.";
}

// Close the database connection
mysqli_close($conn);
?>
        
        </div>
    </div>
</div>