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
        $flag=4;
        if($job=='instructor'){
            $flag=3;
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
        /**************             */
//        'name'=> mysqli_real_escape_string($data->conn,$name),
//        'username'=> mysqli_real_escape_string($data->conn,$usrname),
//        'password'=> mysqli_real_escape_string($data->conn,$pass),
//        'email'=> mysqli_real_escape_string($data->conn,$email),
//        'phone'=> mysqli_real_escape_string($data->conn,$phone),
//        'u_date'=> mysqli_real_escape_string($data->conn,$date),
//        'gender'=> mysqli_real_escape_string($data->conn,$gender),
//        'job'=> mysqli_real_escape_string($data->conn,$job)
        );
        if($data->insertInfo('users',$ins)){
            return TRUE;
        }
    }
    
    
}
