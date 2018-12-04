<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $dsn='mysql:host=localhost;dbname=education';
        $user='root';
        $pass='';
        $option=array(
            PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8',
            
        );
        try{
            $con = new PDO($dsn,$user,$pass,$option);
            $connn ->setAttribute (PDO:: ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
echo'failed to connect  '.$e->getMessage();
        }
        ?>
    </body>
</html>
