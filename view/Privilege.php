
<?php
    $host="127.0.0.1";
    $username="root";
    $password="";
    $dbName="educational";
    $conn= mysqli_connect($host, $username, $password, $dbName);
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
else {
    echo 'errooor';
}
}

?>