<?php
include_once 'connection.php';
?>

<?php    
if(isset($_POST["submit"])){
    
$usertype = $_POST["usertype"];
$pname =  $_POST["pagename"];
//$newpage = implode(',' , $_POST["pagename"]);

$sql= "update `privilage` set pg_id = (select page_id from `urls` where page_name = '$pname' ) where usr_id = (select id FROM `usertype` where typ = '$usertype' )";
$result = mysqli_query($conn, $sql);
     if($result)
        {
      header("Location: control panel.php?cooooont=success");
      
        }
} 

   

else if(isset($_POST["add"])){
    
$fname = $_POST["f_name"];
$username = $_POST["username"];
$password = $_POST["password"];
$email =  $_POST["email"];
$phone = $_POST["phone"];
$date = $_POST["date"];
$gender = $_POST["gender"];
$sql = " insert into `users` values ( 1 , '".$fname."' , '".$username."' ,'".$password."' , '".$email."' , '".$phone."' ,'".$gender."' ,'".$date."'  )";
$result = mysqli_query($conn, $sql);
if($result)
{
    header("Location: control panel.php?cooooont=success");
    echo $newpage;
}

}
 //////////////////////////////// admin privilege //////////////////////////////////

else if(isset($_POST["send"])){
    
$usertype = $_POST["usertype"];
$pname = $_POST["pagename"];
$newpage = implode("," ,$pname);
$sql= "update `privilage` set pg_id = (select page_id from `urls` where page_name = '$pname' ) where usr_id = (select id FROM `usertype` where typ = '$usertype' )";
$result = mysqli_query($conn, $sql);
if($result)
{
    header("Location: admin.php?cooooont=success");
}

}

else if(isset($_POST["done"])){
    
$upload = $_POST["upload"];
$sql= "update `privilage` set upload = '$upload' where usr_id=3 ";
$result = mysqli_query($conn, $sql);
if($result)
{
    header("Location: admin.php?cooooont=success");
}

}


?>