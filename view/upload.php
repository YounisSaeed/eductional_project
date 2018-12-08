<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$file = $_FILES["file"];
move_uploaded_file($file["tmp_name"], "../Uploaded_Courses/" . $file["name"]);

header("Location: courses.php");
?>