<?php
    //include ('source.php');
    include ('../classes/User.php');
    $usr=new User;
    if(isset($_POST['submit'])){
        if($usr->AddUser('name','username','password','email','number','birthday','kind','job')){
            header("Location: login.php");
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
        <title>Educational System master</title>
<link rel="stylesheet" href="create.css"/>

    </head>
    <body>
        
        <div class="createbox">
            <h2>Register</h2>
            <form method="post">
                <!-- display validation errors here -->
               <?php include ('errors.php');?>
                
                <div class="named">
                    <label>Name:</label><br/>
                    <input type="text" name="name" placeholder="Enter your name"><br/>
                </div>
                <div class="unamed">
                    <label>Username:</label><br/>
                    <input type="text" name="username" placeholder="Enter your username"><br/>
                </div>
                <div class="emaild">
                    <label>Email:</label><br/>
                    <input type="email" name="email" placeholder="Enter your email"><br/>
                </div>
                <div class="passnumd">
                    <label>Password:</label><br/>
                    <input type="password" name="password" placeholder="Enter your password"><br/><br/>
                    <label>Phone number:</label><br/>
                    <input type="number" name="number" placeholder="Enter your number"><br/>
                </div>
                <div class="repassbirthd">
                    <label>Repassword:</label><br/>
                    <input type="password" name="repassword" placeholder="Re-enter your password"><br/><br/>
                    <label>Birthday:</label><br/>
                    <input type="date" name="birthday"><br/>
                </div>
                <div>
                <div class="kindmaled">
                    <input  type="radio" name="kind" value="male">Male
                </div>
                <div class="kindfemaled">
                    <input  type="radio" name="kind" value="female">female
                </div>
                    </div>
                <div>
                <div class="stud">
                    <input  type="radio" name="job" value="student">Student
                </div>
                <div class="inst">
                    <input  type="radio" name="job" value="instructor">Instructor
                </div>
                </div>
                <div class="check">
                <input  type="checkbox" name="terms" value="CheckBox">
                <span>I agree to the <a href="#" style="color:#FFF;">Terms</a> of Service and privacy policy.</span>
            </div>
                <center><input type="submit" name="submit" value="Create Account" class="sub"></center>
        
            </form>
        </div>    
    
    </body>
</html>
