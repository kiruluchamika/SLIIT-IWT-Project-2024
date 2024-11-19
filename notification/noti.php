<!-- BY KIRULU -->

<?php session_start();?>
<?php $_SESSION['adminID']?>
<?php require_once('../inc/config.php'); ?>


<?php 
	//check if a admin is logged in
	if(!isset($_SESSION['adminID'])){
		header("Location: ../admin.php?message=not_login");
	} 
?> 


<?php

// Fetch all records
$sql = "SELECT * FROM notification";
$result = $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarePro Insurance Admin</title>
	<link rel="icon" type="image/png" href="../images/Logo3t.png">
	
	<!-- ADD CSS FILES -->
    <link rel="stylesheet" href="../styles/generalstyle.css">
	<link rel="stylesheet" href="./notistyle.css">
    <!-- ADD JS FILES -->
    <script src="../js/generaljs.js"></script>
	
</head>

<?php include('../header/adminafterlog.php')?>

<div class="size">

<div class="main">
<h2>NOTIFICATIONS</h2>
</div>


    <a href="noti_add.php"><button class = "add-btn" onclick="return confirmAdd()">Add Notification</button></a>
   <center> <table border="4">
        <tr>
            <th>Notification ID</th>
            
            <th>Admin ID</th>
            <th>Notification</th>
            <th>Date</th>
            <th>Time</th>
            
            <th>Delete</th>

        </tr>
        <?php while($row = $result->fetch_assoc()) { ?>
        <tr>
            
            <td><?php echo $row['notificationID']; ?></td>
            <td><?php echo $row['adminID']; ?></td>
            <td><?php echo $row['notification']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['time']; ?></td>
            
            <td><a href="noti_delete.php?UID=<?php echo $row['notificationID']; ?>" onclick="return confirmDelete()"><button class ="function-btnd">Delete</button></a></td>
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