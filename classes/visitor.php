<?php
include '../database/Connection.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of visitor
 *
 * @author walid
 */
class visitor{
    
    public function sendMessage($name,$email,$message){
        $data= new Connection;
        $ins= array(
        'visitor_name'=> mysqli_real_escape_string($data->conn,$_POST[$name]),
        'email'=> mysqli_real_escape_string($data->conn,$_POST[$email]),
        'message'=> mysqli_real_escape_string($data->conn,$_POST[$message])
        );
        if($data->InsertInfo('contact',$ins)){
            return TRUE;
        }
    }
}
