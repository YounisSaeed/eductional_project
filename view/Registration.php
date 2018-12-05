<<<<<<< HEAD
<?php
    //include ('source.php');
    include ('../classes/User.php');
    $usr=new User;
    if(isset($_POST['submit'])){
        if($usr->AddUser('name','username','password','email','number','birthday','kind','job')){
            header("Location: login.php");
        }
    }
=======
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
            
                $sql="INSERT INTO `users` (id ,name,username,email,password,phonenumber,meetingTime,kind,job) VALUES(3,'$name','$username','$email','$password','$phonenumber','$birthday','$kind','$job') ";
              $result= mysqli_query($conn, $sql);
              if($result){
            header('location: login.php');
        }
        }

>>>>>>> 45c19a2c2aa1a7c38cde39ca87e15e4d46016414
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
<<<<<<< HEAD
<link rel="stylesheet" href="create.css"/>

=======
<link rel="stylesheet" a href="create.css"/>
       
>>>>>>> 45c19a2c2aa1a7c38cde39ca87e15e4d46016414
    </head>
    <body>
        
        <div class="createbox">
            <h2>Register</h2>
<<<<<<< HEAD
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
=======
            <form method="post" action="source.php">
                
                
                <div class="named">
                    <label>Name:</label><br/>
                    <input type="text" name="name" placeholder="Enter your name"  ><br/>
                </div>
                <div class="unamed">
                    <label>Username:</label><br/>
                    <input type="text" name="username" placeholder="Enter your username" required ><br/>
                </div>
                <div class="emaild">
                    <label>Email:</label><br/>
                    <input type="email" name="email" placeholder="Enter your email" required><br/>
                </div>
                <div class="passnumd">
                    <label>Password:</label><br/>
                    <input type="password" name="password" placeholder="Enter your password" required><br/><br/>
                    <label>Phone number:</label><br/>
                    <input type="number" name="phonenumber" placeholder="Enter your number" required><br/>
                </div>
                <div class="repassbirthd">
                    <label>Repassword:</label><br/>
                    <input type="password" name="repassword" placeholder="Re-enter your password" required><br/><br/>
                    <label>Birthday:</label><br/>
                    <input type="date" name="meetingTime" placeholder="DD-MM-YYYY" class="input-reset ba b--black-20 pa2 mb2 db w-100" /><br/>
                </div>
                
                <div>
                <div class="kindmaled">
                    <input  type="radio" name="kind" value="male" required>Male
                </div>
                <div class="kindfemaled">
                    <input  type="radio" name="kind" value="female" required>female
>>>>>>> 45c19a2c2aa1a7c38cde39ca87e15e4d46016414
                </div>
                    </div>
                <div>
                <div class="stud">
<<<<<<< HEAD
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
    
=======
                    <input  type="radio" name="job" value="student" required>Student
                </div>
                <div class="inst">
                    <input  type="radio" name="job" value="instructor" required>Instructor
                </div>
                </div>  
           
            <div class="check">
                <input  type="checkbox" name="terms" value="CheckBox">
                <span>I agree to the <a href="#" style="color:#FFF;">Terms</a> of Service and privacy policy.</span>
            </div>
                <input type="submit" value="Create Account" name="CreateAccount"  >
           <!-- <input type="button" value="" class="submit">-->
             </form>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/es6-shim/0.35.3/es6-shim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.5.0/flatpickr.min.js"></script>    
<script src="/vendors/formvalidation/dist/js/FormValidation.min.js"></script>
<script src="/vendors/formvalidation/dist/js/plugins/Tachyons.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function(e) {
    const form = document.getElementById('demoForm');
    const fv = FormValidation.formValidation(
        form,
        {
            fields: {
                meetingTime: {
                    validators: {
                        date: {
                            format: 'DD-MM-YYYY',
                            message: 'The value is not a valid date',
                        }
                    }
                },
            },
            plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                tachyons: new FormValidation.plugins.Tachyons(),
                submitButton: new FormValidation.plugins.SubmitButton(),
                icon: new FormValidation.plugins.Icon({
                    valid: 'fa fa-check',
                    invalid: 'fa fa-times',
                    validating: 'fa fa-refresh',
                }),
            },
        }
    );

    flatpickr(form.querySelector('[name="meetingTime"]'), {
        enableTime: true,
        // See https://flatpickr.js.org/formatting/
        dateFormat: 'd-m-y',
        // After selecting a date, we need to revalidate the field
        onChange: function() {
            fv.revalidateField('meetingTime');
        },
    });
});
</script>
        </div>
    
        <?php
         /*$username="";
        $email="";
        $db= mysqli_connect('localhost', 'root', '', 'educational');
        if (isset($_POST['Create Account'])){
            $name = mysql_real_escape_string($_POST['username']);
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
        $student = mysql_real_escape_string($_POST['student']);
        }
        if($_SERVER['REQUEST_METHOD']=='POST'):
            $name=$_POST['name'];
            $username=$_POST['username'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $repassword=$_POST['repassword'];
            $phonenumber=$_POST['phonenumber'];
            $birthday=$_POST['birthday'];
            $experience=$_POST['experience'];
            $male=$_POST['male'];
            $female=$_POST['female'];
            $instructor=$_POST['inistructor'];
            $student=$_POST['stsudent'];
            if(! empty($name)):
                echo $name;
            else:
                echo 'name canot be empty ';
            endif;
            
        endif;*/
    // include 'test.php';
        
         
      
        
        ?>
>>>>>>> 45c19a2c2aa1a7c38cde39ca87e15e4d46016414
    </body>
</html>
