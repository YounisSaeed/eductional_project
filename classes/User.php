<?php
include '../database/Connection.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author walid
 */
class User {
    //put your code here

    public function AddUser($name,$usrname,$pass,$email,$phone,$date,$gender,$job){
        $data =new Connection;
        $flag=3;
        if($job=='instructor'){
            $flag=2;
        }
            
        $ins= array(
            
        'id'=> mysqli_real_escape_string($data->conn,$flag),
        'name'=> mysqli_real_escape_string($data->conn,$_POST[$name]),
        'username'=> mysqli_real_escape_string($data->conn,$_POST[$usrname]),
        'password'=> mysqli_real_escape_string($data->conn,$pass),
        'email'=> mysqli_real_escape_string($data->conn,$_POST[$email]),
        'phone'=> mysqli_real_escape_string($data->conn,$_POST[$phone]),
        'u_date'=> mysqli_real_escape_string($data->conn,$_POST[$date]),
        'gender'=> mysqli_real_escape_string($data->conn,$_POST[$gender]),
        'job'=> mysqli_real_escape_string($data->conn,$_POST[$job])
        );
        if($data->insertInfo('users',$ins)){
            return TRUE;
        }
    }
    
    
}
