<!-- BY KIRULU -->

<?php session_start();?>
<?php $_SESSION['user_id']?>
<?php require_once('../inc/config.php'); ?>


<?php 
	//check if a user is logged in
	if(!isset($_SESSION['user_id'])){
		header("Location: ../signin.php?message=not_login");
	} 
?> 

<?php

$uid=$_SESSION['user_id'];
// Fetch all records
$sql = "SELECT * FROM claim WHERE UID = '$uid'";
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
	<link rel="stylesheet" href="./claimstyle.css">
    <!-- ADD JS FILES -->
    <script src="../js/generaljs.js"></script>
    
	
</head>

<?php include('../header/headerlog.php')?>

<div class="size">

<div class="main">
<h2 class="head">Claim Details</h2>
</div>


    <a href="claim_add.php"><button class = "add-btn" onclick="return confirmAdd()">Add claim</button></a>
   <center> <table border="4">
        <tr>
            <th>claimID</th>
            
            <th>RefaranceID</th>
            <th>Note</th>
            <th>Date</th>
            <th>Time</th>
            <th>Status</th>
            <th>Update</th>
            <th>Delete</th>

        </tr>
        <?php while($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['claimID']; ?></td>
            
            <td><?php echo $row['filereferance']; ?></td>
            <td><?php echo $row['note']; ?></td>
            <td><?php echo $row['claimdate']; ?></td>
            <td><?php echo $row['claimtime']; ?></td>
            <td><?php echo $row['Status']; ?></td>
            <td><a href="claim_update.php?UID=<?php echo $row['claimID']; ?>" onclick="return confirmUpdate()"><button class ="function-btnu">Update</button></a></td>
            <td><a href="claim_delete.php?UID=<?php echo $row['claimID']; ?>" onclick="return confirmDelete()"><button class ="function-btnd">Delete</button></a></td>
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