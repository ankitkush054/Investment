<?php 
session_start();
    echo $_SESSION['role'];
// if(!isset($_SESSION['name']) ){
    if(!$_SESSION['role']==1)
    {

        header('Location:login.php');

    }
    else{
        // header('Location: purchase.php');
        header('Location:index.php'); }


// }
?>