<?php
session_start();
require_once("includes/functions.php");
require_once("includes/db_cons.php");
$id = $_GET['id'];
// connect to database
$db = mysqli_connect($servername, $db_user, $db_password, $database);
$query = "UPDATE orders SET order_status='approved' WHERE id='$id'";
if (mysqli_query($db, $query)) {
    header('Location: purchase_orders.php');
}
?>