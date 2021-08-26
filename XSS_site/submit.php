<?php 
if(isset($_POST['submit'])){
    $name = ($_POST['username']);
    setcookie("user",$name);
    header("Location: case9.php"); 
    exit;
}else{ 
    header("Location: case9.php");     
    exit; 
} 
?>
