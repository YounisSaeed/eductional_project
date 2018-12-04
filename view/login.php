<?php include ('source.php');?>
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
            <form method="POST" action="Login.php">
                              <label>E-mail:</label><br/>
                <input type="text" name="e-mail" placeholder="Enter your E-mail"><br/>
                <label>Password:</label><br/>
                <input type="password" name="password" placeholder="Enter your password"><br/>
                <input type="button" value="Submit" class="button">
            </form>
            
                <a href="forgetpass.php" class="forget"><p>Forget  your password?</p></a><br/>
                <a href="Registration.php" class="create"><p>Create New Account</p></a>
            
        </div>
        <?php
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
</html>
