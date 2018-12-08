<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Connection
 *
 * @author walid
 */
class Connection {
    //put your code here
//    private $servername;
//    private $username;
//    private $password;
//    private $DBname;
//    
//    public function connect(){
//        $this->servername="127.0.0.1";
//        $this->username="root";
//        $this->password="";
//        $this->DBname="educational";
//        $conn =new mysqli($this->servername,$this->username,$this->password,$this->DBname);
//        if(!$conn){
//            echo 'database connection failed'. mysqli_connect_error($this->conn);
//        }else            echo 'Success !!';
//    
//    }
//    
    public $conn;
    public function __construct() {
        $this->conn= mysqli_connect("127.0.0.1", "root", "", "educational");
        if(! $this->conn){
            echo 'database connection failed'. mysqli_connect_error($this->conn);
        }//else            echo 'Success !!';
    }
    
    
    public function InsertInfo($tablename,$data){
        $string="INSERT INTO ".$tablename." (";
        $string .= implode(",", array_keys($data)).') VALUES(';
        $string .= "'". implode("','", array_values($data))."')";
        if (mysqli_query($this->conn, $string)) {
            return TRUE;
        } else {
            echo mysqli_error($this->conn);
        }
    }
}
