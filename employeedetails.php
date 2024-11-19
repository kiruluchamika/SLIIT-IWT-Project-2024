<?php session_start();?>
<?php require_once('./inc/config.php'); ?>

<?php


// Fetch all records
$sql = "SELECT * FROM employee;";
$result = $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarePro Insurance</title>
	<link rel="icon" type="image/png" href="./images/Logo3t.png">
	
	<!-- ADD CSS FILES -->
    <link rel="stylesheet" href="./styles/generalstyle.css">
	<link rel="stylesheet" href="./styles/employeedetailsstyles.css">
    
	
</head>

<?php 
    
    
    include('./header/header.php')?>	

    <div class="size">

    <div class="main">
<h2>Employee Details</h2>
</div>


    
   <center> <table border="4">
        <tr>
            <th>Employee ID</th>
            
            <th>Employee Name</th>
            <th>Date of Birth</th>
            <th>Contact info</th>
            <th>Role</th>
            

        </tr>
        <?php while($row = $result->fetch_assoc()) { ?>
        <tr>
            
            
            <td><?php echo $row['employeeID']; ?></td>
            <td><?php echo $row['employeeName']; ?></td>
            <td><?php echo $row['dob']; ?></td>
            <td><?php echo $row['contact']; ?></td>
            <td><?php echo $row['role']; ?></td>
            
        </tr>
        <?php } ?>
    </table></center>

    </div>

<?php include('./footer/footer_home.php')?>