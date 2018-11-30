<?php
include_once 'connection.php';
?>

<?php    
if(isset($_POST["submit"])){
$usertype = $_POST["usertype"];
$pname = $_POST["pagename"];
$newpage = implode("," ,$pname);
$sql= "update `privilage` set pg_id = (select page_id from `urls` where page_name = '$pname' ) where usr_id = (select id FROM `usertype` where typ = '$usertype' )";
$result = mysqli_query($conn, $sql);
if($result)
{
    header("Location: control panel.php?cooooont=success");
}

}

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
?>