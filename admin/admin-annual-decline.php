<?php 
session_start(); 
require_once '../inc/config.php';

$feeId = $_POST['feeID'];
$approve_sql = "UPDATE annualFee SET Status='Declined' WHERE feeID='$feeId'";

if($conn->query($approve_sql) === TRUE){
    header("Location:./adminannualapp.php");
} else{
    echo "Error in query!";
}
?>