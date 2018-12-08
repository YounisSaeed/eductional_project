<?php
include_once 'connection.php';
?>

<?php    
if(isset($_POST["submit"])){
    
$usertype = $_POST["usertype"];
$pname =  $_POST["pagename"];
//$newpage = implode(',' , $_POST["pagename"]);
for ($i=0; $i<sizeof($pname); $i++)
        {
          $sql= "insert into `privilage` values( (select id FROM `usertype` where typ = '$usertype' ) , (select page_id from `urls` where page_name = '$pname[$i]' ) , 'no' )" ;
          $result = mysqli_query($conn, $sql);
        }
if($result)
 {
      header("Location: controlPanel.php?cooooont=success");
 }
} 

<<<<<<< HEAD
=======
   
>>>>>>> 2f07de5432d77f3e4d34cfc646868a5f398871ac

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
    header("Location: controlPanel.php?cooooont=success");
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
    header("Location: controlPanel.php?cooooont=success");

}

}


else if(isset($_POST["block"])){
    
$state= $_POST["state"];
for ($i=0; $i<sizeof($state); $i++)
        {
          $sql = " update `usertype` set state=0 where typ= '$state[$i]' " ;
          $result = mysqli_query($conn, $sql);
        }
    header("Location: BlockUserType.php?cooooont=success");

}

else if(isset($_POST["Unblock"])){
    
$state= $_POST["state"];
for ($i=0; $i<sizeof($state); $i++)
        {
          $sql = " update `usertype` set state=1 where typ= '$state[$i]' " ;
          $result = mysqli_query($conn, $sql);
        }
    header("Location: BlockUserType.php?cooooont=success");

}
 //////////////////////////////// admin privilege //////////////////////////////////


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