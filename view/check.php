<?php
include_once 'connection.php';
?>

<?php
<<<<<<< HEAD
=======
include '../database/Connection.php';
$data=new Connection;
>>>>>>> 2f07de5432d77f3e4d34cfc646868a5f398871ac
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $user = $_POST['useremail'];
    $pass = $_POST['password'];
    $sql = "select id,email,password from `users` where email ='".$user."' and password='".$pass."'";
<<<<<<< HEAD
    $result = mysqli_query($conn, $sql);
=======
    $result = mysqli_query($data->conn, $sql);
>>>>>>> 2f07de5432d77f3e4d34cfc646868a5f398871ac
    if($result)
    {
        if($row = mysqli_fetch_assoc($result))
        {
            $_SESSION['user'] = $user;
            $id = $row['id'];
            $_SESSION['user_id'] = $id;
            $sql_idtype = "select pg_id from `privilage` where usr_id = '".$id."'";        
<<<<<<< HEAD
            $result_id = mysqli_query($conn, $sql_idtype);
=======
            $result_id = mysqli_query($data->conn, $sql_idtype);
>>>>>>> 2f07de5432d77f3e4d34cfc646868a5f398871ac
            if($result_id)
            {
                $array_id = array();
                while($row = mysqli_fetch_array($result_id)){
                     $array_id[] = $row['pg_id'];
                }
                //echo $array_id[2];
                $i=1;
                $j=0;
                while ($i <= sizeof($array_id)){
                    $_SESSION['page' . $i] = $array_id[$j];
                    $i++;
                    $j++;
                }
                
//                echo '<pre>';
//                print_r($array_id);
//                print_r($_SESSION);
//                echo '</pre>';
//                $i = 1;
//                while ($i <= sizeof($array_id)){
//                    echo $_SESSION['page' . $i];
//                    $i++;
//                }
 
                $sql_fpage = "select page_url_header from `urls` where page_id = '".$_SESSION['page1']."'";
<<<<<<< HEAD
                $result_fpage = mysqli_query($conn, $sql_fpage);
=======
                $result_fpage = mysqli_query($data->conn, $sql_fpage);
>>>>>>> 2f07de5432d77f3e4d34cfc646868a5f398871ac
                if($page=mysqli_fetch_assoc($result_fpage))
                {
                    header("Location: ".$page['page_url_header']);
                }

//                echo 'you will redirect';
//                header("REFRESH:2; URL = Admin.php");
                
//                echo $_SESSION['page1'] . '<br>';
//                echo $_SESSION['page2'] . '<br>';
//                echo $_SESSION['page3'] . '<br>';
//                echo $_SESSION['page4'];
            } 
        }
        else{
            echo 'sorry you are not admin';
        }
    }
   /* $n_array = array();
    while($row = mysql_fetch_array($result)){
        $n_array[] = $row['email'];
    }*/
    /*if($result)
    {
        $res= mysqli_fetch_array($result);
        if(in_array($user, $res) and in_array($pass, $res))
        {
            $_SESSION['user'] = $user;
            echo 'Welcome ' . $_SESSION['user'] . ' you will be redirect to next page';
            header('REFRESH:2; URL=Admin.php');
        }
    }
    else{
        echo 'sorry you are not admin';
    }*/
}else{
    echo 'Youcan\'t browser this page';
}

