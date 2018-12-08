<?php
include ('../classes/User.php');
include '../classes/Enc_Dec.php';
    $enc=new Enc_Dec;
    $usr=new User;
    if(isset($_POST['submit'])){
//        $enc_name=$enc->encryption('key:'.$_POST['name']);;
//        $enc_username=$enc->encryption('key:'.$_POST['username']);;
        $enc_Pass=$enc->encryption('key:'.$_POST['password']);
//        $enc_email=$enc->encryption('key:'.$_POST['email']);;
//        $enc_phoneNum=$enc->encryption('key:'.$_POST['number']);;
//        $enc_Birth=$enc->encryption('key:'.$_POST['birthday']);;
//        $enc_kind=$enc->encryption('key:'.$_POST['kind']);;
//        $enc_job=$enc->encryption('key:'.$_POST['job']);
        
        if($usr->AddUser('name','username',$enc_Pass,'email','number','birthday','kind','job')){
            header("Location: login.php");
        }
//        if($usr->AddUser($enc_name,$enc_username,$enc_Pass,$enc_email,$enc_phoneNum,$enc_Birth,$enc_kind,$enc_job)){
//            header("Location: login.php");
//        }
    }
?>
