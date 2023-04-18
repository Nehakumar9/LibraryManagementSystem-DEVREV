<?php
session_start();
if(isset($_SESSION["user"])){
    header("Location: index.php");
}
?>
<! DOCTYPE html>  
<html lang="en" >  
<head>  
  <meta charset="UTF-8">  
  <title>Registration</title>  
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">  
</head>  
<style>   
.container {  
    height: 100%;  
    display: flex; 
    align-items: center;  
    justify-content: center;  
    background-color: #f5f5f5;  
}  
form {  
    padding-top: 10px;  
    font-size: 14px;  
    margin-top: 30px;  
}  
.card-title {   
font-weight: 500;  
 }  
.btn {  
    font-size: 14px;  
    margin-top: 20px;  
}  
.reg-form {   
    width: 500px;  
    margin: 40px;  
}  
.login{  
    text-align: center;  
    padding: 20px 0 0;  
}   
</style>  
<body>  
  <div class="container">  
    <div class="card reg-form">  
        <div class="card-body">  
            <h3 class="card-title text-center"> Register</h3>  
            <div class="card-text">  

            <?php

if(isset( $_POST["submit"])){
    $name= $_POST["name"];
    $email= $_POST["email"];
    $password= $_POST["password"];

    $passwordHash = password_hash($password,PASSWORD_DEFAULT);

    $errors= array();

    if(empty($name) OR empty($email)OR empty($password)){
        array_push($errors,"All fields are required");
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        array_push($errors,"Email is not valid");
    }

    if(strlen($password)<8){
        array_push($errors,"Password must be alteast 8 characters long");
    }
    require_once "db.php";
    $sql ="SELECT * FROM user WHERE email='$email'";
    $result=mysqli_query($conn, $sql);
    $row=mysqli_num_rows($result);
    if($row>0){
        array_push($errors,"Email already exixts");
    }
    if(count($errors)>0){
        foreach($errors as $error){
            echo "<div class='alert alert-danger'>$error</div>";
        }
    }
    else{

        $sql="INSERT INTO user (name, email, password)  values (?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        $prestmt = mysqli_stmt_prepare($stmt, $sql);

        if($prestmt){
            mysqli_stmt_bind_param($stmt,"sss",$name,$email,$passwordHash);
            mysqli_stmt_execute($stmt);
            echo "<div class='alert alert-success'>Registration SuccessFull..</div>";
        }
        else{
            die("Unsuccessfull");
        }
    }
}

?>
                <form action="reg.php" id="form" method="post">  
                    <div class="form-group">  
                        <label for="name"> Enter Name </label>  
                        <input type="text" class="form-control form-control-sm" id="name" placeholder="Enter Name" name=" name">  
                    </div>  

                    <div class="form-group">  
                        <label for="email"> Enter Email </label>  
                        <input type="email" class="form-control form-control-sm" id="email" placeholder="Enter Email" name="email" onblur="validate()" required>  
                    </div>  

                    <div class="form-group">  
                        <label for="password"> Enter password </label>  
                        <input type="password" class="form-control form-control-sm" id="password" placeholder="Enter password" name="password">  
                    </div>  

                    <button type="submit" class="btn btn-primary btn-block" name="submit">Register</button>  
                    
                    <div class="login">  
                        Already have account? <a href="./login.php"> Login </a>  
                    </div>  
                </form>  
            </div>  
        </div>  
    </div> 
    <script>
    function validate() 
 { 
 var x=document.getElementById("email").value; 
 var atposition=x.indexOf("@"); 
 var dotposition=x.lastIndexOf("."); 
 if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){ 
 alert("Invalid Mail id ");
 }

 }
 
</script>   
</body>  
</html>  