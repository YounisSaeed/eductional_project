<?php 
    include ('../classes/Login_Class.php');
    $log=new Login;
    session_start();
    if(isset($_POST['submit'])){
        $u_name= $_POST['username'];
        $u_pass= $_POST['password'];
        if($log->validation($u_name,$u_pass))
        {
            $_SESSION["name"] = $_POST["name"];
            header("Location: index.php");
        }
        else{
            echo "<script>alert('invalid email or password');</script>";
            //header("Location: login.php");
        }
        
    }
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        
        <title>Education system</title>
        <link rel="stylesheet" href="login.css"/>
        
    </head>
    <body>
        <div class="box">
            <h2>Login</h2>

            <form method="POST">
                <!-- display validation errors here -->
               <?php include ('errors.php');?>
                <label>E-mail:</label><br/>
                <input type="text" name="username" placeholder="Enter your E-mail" required=""><br/>
                <label>Password:</label><br/>
                <input type="password" name="password" placeholder="Enter your password" required=""><br/>
                
                <input type="submit" name="submit" value="submit" class="button">
            </form>
               <!-- <a href="forgetpass.php" class="forget"><p>Forget  your password?</p></a><br/>-->
            
                <a href="forgetpass.php" class="forget"><p>Forget  your password?</p></a><br/>
                <a href="Registration.php" class="create"><p>Create New Account</p></a>
            
        </div>

    </body>
</html>
