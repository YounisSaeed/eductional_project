<<<<<<< HEAD
<?php 
    include'source.php';
    include ('../classes/Login_Class.php');
    $log=new Login;
    if(isset($_POST['submit'])){
        $u_name= $_POST['username'];
        $u_pass= $_POST['password'];
        if($log->validation($u_name,$u_pass))
        {
            header("Location: index.php");
        }
        else{
          
            header("Location: login.php");
        }
    
    }
?>
=======
<?php include ('source.php');?>
>>>>>>> 45c19a2c2aa1a7c38cde39ca87e15e4d46016414
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
<<<<<<< HEAD
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
=======
            <form method="POST" action="Login.php">
                              <label>E-mail:</label><br/>
                <input type="text" name="e-mail" placeholder="Enter your E-mail"><br/>
                <label>Password:</label><br/>
                <input type="password" name="password" placeholder="Enter your password"><br/>
                <input type="button" value="Submit" class="button">
            </form>
            
                <a href="forgetpass.php" class="forget"><p>Forget  your password?</p></a><br/>
>>>>>>> 45c19a2c2aa1a7c38cde39ca87e15e4d46016414
                <a href="Registration.php" class="create"><p>Create New Account</p></a>
            
        </div>
        <?php
<<<<<<< HEAD
        // put your code here
        ?>
    
    </body>
    <script>
        
    </script>
=======
        /*include 'connect.php';
        $userid=$_GET['id'];
        $stmt = $con->prepare("selsct*from 'user' where id=?");
        $stmt ->execute($userid);
        $count=$stmt->rowcount();
        while ($row=$stmt->fetch()){
            $id=$row['id'];
            $name=$row['name'];
        }*/
        ?>
    </body>
>>>>>>> 45c19a2c2aa1a7c38cde39ca87e15e4d46016414
</html>
