<?php
session_start();
if(isset($_GET['id'])){
    $id = $_GET['id'];
    // echo $id;
    unset($_SESSION['cart'][$id]);
}
header("location:cart.php?id=$id&message=deleted");