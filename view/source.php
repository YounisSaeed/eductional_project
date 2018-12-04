<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
        <?php
        $host="127.0.0.1";
         $username="root";
       // $email="";
         $password="";
         $dbName="educational";
         $conn= mysqli_connect($host, $username, $password, $dbName);
        if(isset($_POST['CreateAccount'])){
           /* $name = mysql_real_escape_string($_POST['username']);
              $username = mysql_real_escape_string($_POST['username']);
             $email = mysql_real_escape_string($_POST['email']);
              $password = mysql_real_escape_string($_POST['password']);
               $repassword = mysql_real_escape_string($_POST['repassword']);
               $phonenumber = mysql_real_escape_string($_POST['phonenumber']);
               $birthday = mysql_real_escape_string($_POST['birthday']);
               $experience= mysql_real_escape_string($_POST['birthday']);
               $male = mysql_real_escape_string($_POST['male']);
               $female = mysql_real_escape_string($_POST['female']);
               $instructor = mysql_real_escape_string($_POST['instructor']);
               $student = mysql_real_escape_string($_POST['student']);*/
            
            
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
        ?>
