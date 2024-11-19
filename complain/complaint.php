<?php session_start();?>
<?php require_once('../inc/config.php'); ?>


<?php 
    //check if an admin and user logged in
    if(!isset($_SESSION['user_id'])){
        header("Location: ../home.php?message=not_login");
        exit(); 
    }
?>

<?php

$uid=$_SESSION['user_id'];
// Fetch all records
$sql = "SELECT * FROM complaint WHERE UID = '$uid';";
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
<?php include('../header/headerlog.php'); ?>


<div class="main">
<h2>Complaint Details</h2>
</div>

<a href="complaint_add.php"><button class="add-btn" onclick="return confirmAdd()">Add Complaint</button></a>

<div class="size">
    
   <center> <table border="4">
        <tr>
            <th>Complaint ID</th>
            <th>Date</th>
            <th>Time</th>
            <th>Complaint Type</th>
            <th>Description</th>
            <th>Update</th>
            <th>Dlete</th>
            
        </tr>
                <?php while($row = $result->fetch_assoc()) { ?>
                <tr>
                <td><?php echo $row['complaintID']; ?></td>
                <td><?php echo $row['comdate']; ?></td>
                <td><?php echo $row['comtime'];?></td>
                <td><?php echo $row['type'];?></td>
                <td><?php echo $row['description'];?></td>
                <td><a href="complaint_update.php?UID=<?php echo $row['complaintID'];?>"><button class="function-btnd" onclick="return confirmUpdate()">Update</button></a></td>
                <td><a href="complaint_delete.php?UID=<?php echo $row['complaintID'];?>"><button class ="function-btnu" onclick="return confirmDelete()">Delete</button></a> </td>

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