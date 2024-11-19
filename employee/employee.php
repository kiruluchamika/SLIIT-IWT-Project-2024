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
$sql = "SELECT * FROM employee;";
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
	<link rel="stylesheet" href="./employeestyles.css">
    <!-- ADD JS FILES -->
    <script src="employeejs.js"></script>
	
</head>

<?php include('../header/adminafterlog.php'); ?>

<div class="size">

<div class="main">
<h2 class='head'>Employee Details</h2>
</div>


    <a href="employee_add.php"><button class = "add-btn" onclick="return confirmAdd()">Add Employee</button></a>
   <center> <table border="4">
        <tr>
            <th>Employee ID</th>
            
            <th>Employee Name</th>
            <th>Date of Birth</th>
            <th>Contact info</th>
            <th>Role</th>
            <th>Update</th>
            <th>Dlete</th>

        </tr>
        <?php while($row = $result->fetch_assoc()) { ?>
        <tr>
            
            
            <td><?php echo $row['employeeID']; ?></td>
            <td><?php echo $row['employeeName']; ?></td>
            <td><?php echo $row['dob']; ?></td>
            <td><?php echo $row['contact']; ?></td>
            <td><?php echo $row['role']; ?></td>
            <td><a href="employee_update.php?UID=<?php echo $row['employeeID']; ?>" onclick="return confirmUpdate()"><button class ="function-btnu">Update</button></a></td>
            <td><a href="employee_delete.php?UID=<?php echo $row['employeeID']; ?>" onclick="return confirmDelete()"><button class ="function-btnd">Delete</button></a></td>
        </tr>
        <?php } ?>
    </table></center>

    <center><?php

    // Check if the 'message' parameter is set in the URL
if (isset($_GET['msg'])) {
    // Get the message from the URL and sanitize it
    $message = htmlspecialchars($_GET['msg'], ENT_QUOTES, 'UTF-8');
    
    // Display the message
    echo "<div class='alert alert-success'>$message</div>";
}
?></center>

    </div>

<?php include('../footer/footer.php')?>