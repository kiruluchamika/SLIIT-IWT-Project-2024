<?php session_start();?>
<?php require_once('../inc/config.php'); ?>


<?php 
    //check if an admin logged in
    if(!isset($_SESSION['adminID'])) {
        header("Location: ../home.php?message=not_login");
        exit(); 
    }
?>

<?php

$uid=$_SESSION['adminID'];
// Fetch all records
$sql = "SELECT * FROM complaint;";
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
	<link rel="stylesheet" href="./complaintstyle.css">
    <!-- ADD JS FILES -->
    <script src="../js/generaljs.js"></script>
	
</head>
<?php  include('../header/adminafterlog.php');  ?>


<div class="main">
<h2>Complaint Details</h2>
</div>


<div class="size">
    
<center> <table border="4">
        <tr>
            <th>Complaint ID</th>
            <th>Date</th>
            <th>Time</th>
            <th>Complaint Type</th>
            <th>Description</th>
           
            
        </tr>
                <?php while($row = $result->fetch_assoc()) { ?>
                <tr>
                <td><?php echo $row['complaintID']; ?></td>
                <td><?php echo $row['comdate']; ?></td>
                <td><?php echo $row['comtime'];?></td>
                <td><?php echo $row['type'];?></td>
                <td><?php echo $row['description'];?></td>
                

                </tr>
                <?php } ?>
                </table></center>

                

</div>

<?php include('../footer/footer.php')?>