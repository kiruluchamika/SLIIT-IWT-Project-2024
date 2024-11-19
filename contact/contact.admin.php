<?php session_start();?>
<?php require_once('../inc/config.php'); ?>


<?php 
	//check if a admin is logged in
	if(!isset($_SESSION['adminID'])){
		header("Location: ../admin.php?message=not_login");
	} 
?> 


<?php

$uid=$_SESSION['adminID'];
// Fetch all records
$sql = "SELECT * FROM contact;";
$result = $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarePro Insurance</title>
	<link rel="icon" type="image/png" href="../images/Logo3t.png">
	
	<!-- ADD CSS FILES -->
    <link rel="stylesheet" href="../styles/generalstyle.css">
	<link rel="stylesheet" href="./contactadminstyles.css">
    <!-- ADD JS FILES -->
    <script src="../js/generaljs.js"></script>
	
</head>

<?php include('../header/adminafterlog.php'); ?>

<div class="size">

<div class="main">
<h2>CONTACT US DETAILS</h2>
</div>

   <center> <table>
        <tr>
            <th>Name</th>
            <th>Number</th>
            <th>Email</th>
            <th>Inquiry Type</th>
            <th>Message</th>
            <th>Date</th>
            <th>Time</th>
        </tr>

        <?php while($row = $result->fetch_assoc()) { ?>
        <tr>
            
            
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['number']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['inquiryType']; ?></td>
            <td><?php echo $row['message']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['time']; ?></td>
            
        </tr>
        <?php } ?>
    </table></center>

    </div>

<?php include('../footer/footer.php')?>