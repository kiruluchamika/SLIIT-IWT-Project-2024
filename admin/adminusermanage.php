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
$sql = "SELECT * FROM user;";
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
	<link rel="stylesheet" href="./adminusermanagestyles.css">
    <!-- ADD JS -->
    <script src="../js/generaljs.js"></script>
    
	
</head>

<?php include('../header/adminafterlog.php'); ?>

<div class="size">

<div class="main">
<h2>User Details</h2>
</div>


    
   <center> <table border="4">
        <tr>
            <th>User ID</th>
            
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Telephone</th>
            <th>Email</th>
            <th>Address</th>
            <th>Date of Birthday</th>
            <th>Plan</th>
            <th>Remove User</th>

        </tr>
        <?php while($row = $result->fetch_assoc()) { ?>
        <tr>
            
            
            <td><?php echo $row['UID']; ?></td>
            <td><?php echo $row['first_name']; ?></td>
            <td><?php echo $row['last_name']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['phone_No']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['dob']; ?></td>
            <td><?php
            if("p1"==$row['planID']) {
                echo "Individual & Family Plans";
            }
            else if("p2"==$row['planID']) {
                echo "Group Health Insurance Plans";
            }
            else if("p3"==$row['planID']) {
                echo "Medicare & Medicaid Plans";
            }
            else if("p4"==$row['planID']) {
                echo "Short-Term Health Insurance";
            }
            else if("p5"==$row['planID']) {
                echo "Emergency Services";
            }
            else if("p6"==$row['planID']) {
                echo "Elder Citizen Coverage";
            }
            else {
                echo "No plan selected";
            }
            
            ?></p></td>
            
            <td><a href="../user/user_delete.php?UID=<?php echo $row['UID']; ?>"><button class ="function-btnd" onclick="return confirmDelete()">Delete</button></a></td>
        </tr>
        <?php } ?>
    </table></center>

    </div>

<?php include('../footer/footer.php')?>