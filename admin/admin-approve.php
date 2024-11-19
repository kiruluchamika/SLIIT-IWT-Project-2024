<?php 
session_start(); 
require_once '../inc/config.php';

$feeId = $_POST['claimID'];
$approve_sql = "UPDATE claim SET Status='Approved' WHERE claimID='$feeId'";

if($conn->query($approve_sql) === TRUE){
    header("Location:./adminclaimapp.php");
} else{
    echo "Error in query!";
}
?>