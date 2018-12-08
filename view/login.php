<?php 
    include 'init.php';
    
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
<<<<<<< HEAD
        <link rel="stylesheet" href="login.css"/>
        <script type="text/javascript">
            function noBack(){window.history.forward()}
            noBack();
            window.onload=noBack;
            window.onpageshow=function(evt){if(evt.persisted)noBack()}
            window.onunload=function(){void(0)}
        </script>
=======
        <link rel="stylesheet" href="styles/login.css"/>
>>>>>>> 995a18aabf13116de4446bf7929a12d0a23affbb
        
    </head>
    <body>
        <div class="box">
            <h2>Login</h2>
<<<<<<< HEAD
            <form action="check.php" method="POST">
                <label>E-mail:</label><br/>
                <input type="text" name="useremail" placeholder="Enter your E-mail"><br/>
                <label>Password:</label><br/>
                <input type="password" name="password" placeholder="Enter your password"><br/>
                <input type="submit" value="Submit" name="login" class="button">
=======

            <form method="POST">
                <!-- display validation errors here -->
               <?php include ('errors.php');?>
                <label>E-mail:</label><br/>
                <input type="text" name="username" placeholder="Enter your E-mail" required=""><br/>
                <label>Password:</label><br/>
                <input type="password" name="password" placeholder="Enter your password" required=""><br/>
                
                <input type="submit" name="submit" value="submit" class="button">
>>>>>>> 995a18aabf13116de4446bf7929a12d0a23affbb
            </form>
               <!-- <a href="forgetpass.php" class="forget"><p>Forget  your password?</p></a><br/>-->
            
                <a href="forgetPass.php" class="forget"><p>Forget  your password?</p></a><br/>
                <a href="Registration.php" class="create"><p>Create New Account</p></a>
            
        </div>

    </body>
</html>
