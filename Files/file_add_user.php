<?php
include ('../classes/User.php');
include '../classes/Enc_Dec.php';
    $enc=new Enc_Dec;
    $usr=new User;
    if(isset($_POST['submit'])){
        $Password = 'key:'.$_POST['password'];
        $enc_Pass=$enc->encryption($Password);
        if($usr->AddUser('name','username',$enc_Pass,'email','number','birthday','kind','job')){
            header("Location: login.php");
        }
    }
?>
