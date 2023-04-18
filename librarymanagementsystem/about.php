<?php
session_start();
if(!isset($_SESSION["user"])){
    header("Location: about.php");
}
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
    <title>About Us</title>

    <style>  
        .container {   
            background-color: #f5f5f5; 
            align-items: center;  
            justify-content: center; 
        }   
    </style>
</head>
<body>
<?php include 'navbar.php' ?>
    <div class="container p-5"> 
    <img src="ab1.png" class="float-right img-thumbnail" alt="Paris" width="370" height="300"> 
        <h2><i>Library Management System<i></h2><br>
        <P>
            A library management system is software that is designed to manage all the functions of a library. 
            It helps librarian to maintain the database of new books and the books that are borrowed by members 
            along with their due dates.
            <br><br>
            This system completely automates all your library's activities. The best way to maintain, 
            organize, and handle countless books systematically is to implement a library management system 
            software
            <br><br>
            You can find books in an instant, issue/reissue books quickly, and manage all the data efficiently 
            and orderly using this system. The purpose of a library management system is to provide instant 
            and accurate data regarding any type of book, thereby saving a lot of time and effort.
        </P>
        <h2><i>Benefits of Library Management System<i></h2><br>
            <ul>
                <li>Simple and easy to operate</li>
                <li>Mobile access, anytime, anywhere</li>
            </ul>
    </div>
</body>
</html>