<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php/*
        session_start();
       $username="";
        $email="";
        $errors=array();
        //connect database
        $db= mysqli_connect('localhost', 'root', '', 'educational');
        //if the registeration button is click
        if(isset($_POST['Registeration'])){
            $name = mysql_real_escape_string($_POST['username']);
            $username = mysql_real_escape_string($_POST['username']);

        
        $host="127.0.0.1";
         $username="root";
       // $email="";
         $password="";
         $dbName="educational";
         $conn= mysqli_connect($host, $username, $password, $dbName);
        if(isset($_POST['CreateAccount'])){
           /* $name = mysql_real_escape_string($_POST['username']);
              $username = mysql_real_escape_string($_POST['username']);
>>>>>>> 45c19a2c2aa1a7c38cde39ca87e15e4d46016414
             $email = mysql_real_escape_string($_POST['email']);
              $password = mysql_real_escape_string($_POST['password']);
               $repassword = mysql_real_escape_string($_POST['repassword']);
               $phonenumber = mysql_real_escape_string($_POST['phonenumber']);
               $birthday = mysql_real_escape_string($_POST['birthday']);
<<<<<<< HEAD
               $male = mysql_real_escape_string($_POST['male']);
               $female = mysql_real_escape_string($_POST['female']);
               $instructor = mysql_real_escape_string($_POST['instructor']);
               $student = mysql_real_escape_string($_POST['student']);
               //ensure that form fields are filled properly
               if(empty($username))
               {
                   array_push($errors,"Username is required");
        
               }
                if(empty($email))
               {
                   array_push($errors,"Email is required");
                    
               }
                if(empty($password))
               {
                   array_push($errors,"password is required");
                    
               }
                if(empty($phonenumber))
               {
                   array_push($errors,"phonenumber is required");
                    
               }
                if(empty($birthday))
               {
                   array_push($errors,"birthday is required");
                    
               }
                if(empty($male))
               {
                   array_push($errors,"male is required");
                    
               }
                if(empty($female))
               {
                   array_push($errors,"female is required");
                    
               }
                if(empty($instructor))
               {
                   array_push($errors,"instructor is required");
                    
               }
                if(empty($student))
               {
                   array_push($errors,"student is required");
                    
               }
               if($password != $repassword){
                   array_push($errors, "The two passwords do not match");
               }
               //if there are no errors, save user to database
               if(count($errors)==0){
                   $password=md5($password);//encrypt password before storing in database(security)
                   $sql="INSERT INTO users(name,username,email,password,phonenumber,birthday,male,female,instructor,student)
                   VALUES('$name','$username','$email','$password','$phonenumber','$birthday','$male','$female','$instructor','$student')";
                   mysqli_query($db, $sql);
                  $_SESSION['email']=$email;
                  $_SESSION['success']="You are now logged in";
                  header('location:../eductional_project/view/index.php' );//home page
        }  }
               
               //log user in form login page
               if(isset($_POST['login'])){
                   $email = mysql_real_escape_string($_POST['email']);
              $password = mysql_real_escape_string($_POST['password']);
              //ensure that form fields are filled properly
                if(empty($email))
               {
                   array_push($errors,"Email is required");
                    
               }
                if(empty($password))
               {
                   array_push($errors,"password is required");
                    
               }
                if(count($errors)==0){
                   $password=md5($password);//encrypt password before comparing with that from  database(security)
                   $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
                   $result= mysqli_query($db, $query);
                   if(musqli_num_rows($result)==1){
                       
                       //log user in
                       $_SESSION['email']=$email;
                  $_SESSION['success']="You are now logged in";
                  header('location:../eductional_project/view/index.php' );// redirect to home page
                   }
 else {
     array_push($errors, "Wrong username/password combination");
 }
                   }
                   
        }

               
            //logout
               if(isset($_GET['logout'])){
                   session_destroy();
                   unset($_SESSION['username']);
                   header('location:login.php');
               }
              
        
        ?>*/
    </body>
</html>

               $experience= mysql_real_escape_string($_POST['birthday']);
               $male = mysql_real_escape_string($_POST['male']);
               $female = mysql_real_escape_string($_POST['female']);
               $instructor = mysql_real_escape_string($_POST['instructor']);
               $student = mysql_real_escape_string($_POST['student']);*/
            
            /*
              $name = $_POST['name'];
              $username = $_POST['username'];
              $email = $_POST['email'];
              $password = $_POST['password'];
               //$repassword =$_POST['repassword'];
               $phonenumber = $_POST['phonenumber'];
               $birthday = $_POST['birthday'];
               //$experience= $_POST['experience'];
               $kind = $_POST['kind'];
               $job = $_POST['job'];
            
                $sql="INSERT INTO `users` (id ,name,username,email,password,phonenumber,birthday,kind,job)
                                 VALUES(3 ,'".$name."','".$username."','".$email."','".$password."','".$phonenumber."','".$birthday."','".$kind."','".$job."') ";
              $result= mysqli_query($conn, $sql);
              if($result){
            header('location: login.php');
        }
        }
        
