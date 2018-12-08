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
            //header("Location: check.php");
        }
        else{
            echo "<script>alert('invalid email or password') ;</script>";
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
        <meta http-equiv="cache-control" content="private, max-age=0, no-cache">
        <meta http-equiv="pragma" content="no-cache">
        <meta http-equiv="expires" content="0">
        <title>Education system</title>
        <link rel="stylesheet" href="styles/login.css"/>
        <script type="text/javascript">
            function noBack(){window.history.forward()}
            noBack();
            window.onload=noBack;
            window.onpageshow=function(evt){if(evt.persisted)noBack()}
            window.onunload=function(){void(0)}
        </script>        
    </head>
    <body>
        <div class="box">
            <h2>Login</h2>
            <form method="POST" action="check.php">
                <!-- display validation errors here -->
               <?php include ('errors.php');?>
                <label>E-mail:</label><br/>
                <input type="text" name="useremail" placeholder="Enter your E-mail" required=""><br/>
                <label>Password:</label><br/>
                <input type="password" name="password" placeholder="Enter your password" required=""><br/>
                
                <input type="submit" name="submit" value="submit" class="button">
            </form>
               <!-- <a href="forgetpass.php" class="forget"><p>Forget  your password?</p></a><br/>-->
            
                <a href="forgetPass.php" class="forget"><p>Forget  your password?</p></a><br/>
                <a href="Registration.php" class="create"><p>Create New Account</p></a>
            
        </div>

    </body>
</html>
