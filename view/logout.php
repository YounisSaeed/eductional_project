<<<<<<< HEAD
<?php
echo '<script type="text/javascript">
function noBack(){window.history.forward()}
noBack();
window.onload=noBack;
window.onpageshow=function(evt){if(evt.persisted)noBack()}
window.onunload=function(){void(0)}
</script>';
session_start();
session_unset();
session_destroy();

header("Location:index.php");

=======
<?php  
 //logout.php  
 session_start();  
 session_destroy();  
 header('location:login.php');  
 ?>  
>>>>>>> 995a18aabf13116de4446bf7929a12d0a23affbb
