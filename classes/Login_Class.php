<?php
include '../database/Connection.php';
//include '../view/connection.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author walid
 */
class Login {
    //put your code here
    public function validation($username,$password){
        $data = new Connection;
        $qu="SELECT email,password FROM users WHERE email='".$username."' AND password='".$password."'";
        $result= mysqli_query($data->conn, $qu);
        
        if($row = mysqli_fetch_assoc($result)){
            return true;
        }
        else{
            return false;
        }
    }
}
