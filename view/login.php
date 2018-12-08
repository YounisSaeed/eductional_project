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
        <meta http-equiv="cache-control" content="private, max-age=0, no-cache">
        <meta http-equiv="pragma" content="no-cache">
        <meta http-equiv="expires" content="0">
        <title>Education system</title>
        <link rel="stylesheet" href="login.css"/>
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
            <form action="check.php" method="POST">
                <label>E-mail:</label><br/>
                <input type="text" name="useremail" placeholder="Enter your E-mail"><br/>
                <label>Password:</label><br/>
                <input type="password" name="password" placeholder="Enter your password"><br/>
                <input type="submit" value="Submit" name="login" class="button">
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
