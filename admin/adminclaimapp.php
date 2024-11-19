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
$sql = "SELECT * FROM claim;";
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
	<link rel="stylesheet" href="./adminclaimstyle.css">
    <!-- ADD JS FILES -->
    
	
</head>

<?php include('../header/adminafterlog.php'); ?>

<div class="size">

<div class="main">
<h2>Claim Requests </h2>
</div>


   <center> <table border="4">
        <tr>
            <th>claimID</th>
            
            <th>RefaranceID</th>
            <th>Note</th>
            <th>Date</th>
            <th>Time</th>
            <th>Status</th>
            

        </tr>
        <?php while($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['claimID']; ?></td>
            
            <td><?php echo $row['filereferance']; ?></td>
            <td><?php echo $row['note']; ?></td>
            <td><?php echo $row['claimdate']; ?></td>
            <td><?php echo $row['claimtime']; ?></td>
            <td><?php echo $row['Status']; ?></td>

            
          
        </tr>
        <?php } ?>
    </table></center>

    <script src="../js/claim.js"></script>

    </div>


    <hr>
                <div class="form-container">
                    <form action="admin-approve.php" method="post">
                        <label for="">Approve Claim</label>
                        <input type="text" name="claimID">
                        <input type="submit" value="Approve Record" class="green-button">
                    </form>
                </div>

                <div class="form-container">
                    <form action="admin-decline.php" method="post">
                        <label for="">Decline Claim</label>
                        <input type="text" name="claimID">
                        <input type="submit" value="Decline Record" class="red-button">
                    </form> 
                </div>
            </div>

<?php include('../footer/footer.php')?>