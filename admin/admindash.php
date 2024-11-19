<?php session_start();?>
<?php require_once('../inc/config.php'); ?>

<?php 
	//check if a admin is logged in
	if(!isset($_SESSION['adminID'])){
		header("Location: ../admin.php?message=not_login");
	} 
?>


<?php 

$sql = "SELECT * FROM admin";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc()

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarePro Insurance</title>
	<link rel="icon" type="image/png" href="../images/settings.jpg">
	
	<!-- ADD CSS FILES -->
    <link rel="stylesheet" href="../styles/generalstyle.css">
	<link rel="stylesheet" href="./adminstyles.css">
    
	
<?php include('../header/adminheaderlog.php'); ?>


</head>
<div class="containerpanel">
        <div class="header">
            <h1>Hello ! Welcome to CarePro Helath Insurance !</h1>
            <p>Admin Name: <?php echo  $_SESSION['afirst_name'] . " " . $_SESSION['aLast_name']; ?> </p>
            <p>Title: <?php echo $_SESSION['arole']; ?></p>
            <p>Email: <?php echo $_SESSION['aEmail']; ?><?php
          
            
            ?></p>
        </div>

       <div class="section">
            <h3 class='c1'><strong>USER MANAGEMENT DETAILS</strong> </h3>
            <center><button class="b1" onclick="window.location.href='./adminusermanage.php';" >User Management Details</button></center>
            
         </div>

         <div class="section">
            <h3 class='c2'><strong>CLAIM PAYMENT DETAILS</strong> </h3>
            <center><button class="b1" onclick="window.location.href='./adminclaimapp.php';">Claims</button></center>
            
         </div>

         <div class="section">
            <h3 class='c3'><strong>ANNUAL PAYMENT DETAILS</strong> </h3>
            <center> <button class="b1" onclick="window.location.href='./adminannualapp.php';" >Annual Payment</button></center>
            
         </div>

        <div class="section">
           <h3 class='c4'><strong>EMPLOYEE MANAGEMENT DETAILS</strong> </h3>
           <center><button class="b1" onclick="window.location.href='../employee/employee.php';" >Employee Management </button></center>
            
        </div>

       <div class="section">
            <h3 class='c5'><strong>USER COMPLAINT REVIEW DETAILS</strong> </h3>
             <center><button class="b1" onclick="window.location.href='../complain/admincomplaint.php';" >Complaint Management</button></center>
             
        </div>

       <div class="section">
            <h3 class='c6'><strong>PLAN MANAGEMENT DETAILS</strong> </h3>
            <center><button class="b1" onclick="window.location.href='../plan/planmanage.php';" >Plan Management</button></center>
            
        </div>

        <div class="section">
            <h3 class='c7'><strong>NOTIFICATION MANAGEMENT</strong> </h3>
            <center> <button class="b1" onclick="window.location.href='../notification/noti.php';" >Notifications</button></center>
            
        </div>

        <div class="section">
            <h3 class='c8'><strong>VISITOR COMMENTS</strong> </h3>
            <center> <button class="b1" onclick="window.location.href='../contact/contact.admin.php';" >Contact</button></center>
            
        </div>
    </div>

