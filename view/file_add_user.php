<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include ('../classes/User.php');
    $usr=new User;
    if(isset($_POST['submit'])){
        if($usr->AddUser('name','username','password','email','number','birthday','kind','job')){
            header("Location: login.php");
        }
    }
    
?>
