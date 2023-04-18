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
  <title>Login</title>  
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
.login-form {   
    width: 400px;  
    margin: 20px;  
}  
.sign-up {  
    text-align: center;  
    padding: 20px 0 0;  
}   
</style>  
<body>  
  <div class="container">  
    <div class="card login-form">  
        <div class="card-body">  
            <h3 class="card-title text-center"> Login</h3>  
            <div class="card-text">  


<?php

if(isset( $_POST["login"])){
    $email= $_POST["email"];
    $password= $_POST["password"];

    require_once "db.php";
    $sql ="SELECT * FROM user WHERE email='$email'";
    $result=mysqli_query($conn, $sql);
    $user=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if($user){
        if(password_verify($password, $user["password"])){
            session_start();
            $_SESSION["user"] = "yes";
            header("Location: index.php");
            die();
        }
        else{
            echo "<div class='alert alert-danger'>Incorrect password</div>";
        }
    }
    else{
        echo "<div class='alert alert-danger'>Email does not exist</div>";
    }

}
?>
                <form action="login.php" id="form" method="post">  
                    <div class="form-group">  
                        <label for="email"> Enter Email </label>  
                        <input type="email" class="form-control form-control-sm" id="email" placeholder="Enter Email" name="email" onblur="validate()" required>  
                    </div>  
                    <div class="form-group">  
                        <label for="password">Enter Password </label> 
                        <input type="password" class="form-control form-control-sm" id="password" placeholder="Enter Password" name="password">  
                    </div>  
                    <button type="submit" class="btn btn-primary btn-block" name="login">Login</button>  
                    
                    <div class="sign-up">  
                        Don't have an account? <a href="./reg.php"> Register </a>  
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
 alert("Invalid Mail id");
 }

 }
 
</script>
</body>  
</html>  