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

$uid = $_SESSION['user_id'];
//Fetch all records
$sql = "SELECT*From annualfee WHERE UID ='$uid'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarePro Insurance</title>
	  <link rel="icon" type="image/png" href="../images/Logo3t.png">
	
	  <!-- ADD CSS FILES -->
    <link rel="stylesheet" href="../styles/generalstyle.css">
	  <link rel="stylesheet" href="./annualfeestyle.css">
    <!-- ADD JS FILES -->
    <script src="../js/generaljs.js"></script>


</head>

<?php include('../header/headerlog.php')?>

<div class="size">

<div class='main'>
  <h2 class='hz'>Annual Payment Details</h2>
</diV>

<a href="annualfee_add.php"><button class="add-btn" onclick="return confirmAdd()">Add Payment</button></a>

<center><table border="4">
  <tr>
    <th>PaymentID</th>
    <th>Amount</th>
    <th>TransactionID</th>
    <th>Date</th>
    <th>Time</th>
    <th>Status</th>
    <th>Update</th>
    <th>Delete</th>
</tr>

<?php while($row = $result->fetch_assoc()) { ?>
<tr>
  <td><?php echo $row['feeID']; ?></td>
  <td><?php echo $row['amount']; ?></td>
  <td><?php echo $row['transactionID'];?></td>
  <td><?php echo $row['paytdate'];?></td>
  <td><?php echo $row['paytime'];?></td>
  <td><?php echo $row['Status'];?></td>
  <td><a href="annualfee_update.php?UID=<?php echo $row['feeID'];?>"><button class="function-btnd" onclick="return confirmUpdate()">Update</button></a></td>
  <td><a href="annualfee_delete.php?UID=<?php echo $row['feeID'];?>"><button class ="function-btnu" onclick="return confirmDelete()">Delete</button></a> </td>

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

