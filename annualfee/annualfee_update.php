<?php session_start();?>
<?php require_once('../inc/config.php'); ?>


<?php 
	//check if a user is logged in
	if(!isset($_SESSION['user_id'])){
		header("Location: ../signin.php?message=not_login");
	} 
?> 

<?php
if (isset($_GET['UID'])){
  $id = $_GET['UID'];

  $sql="SELECT * FROM annualfee WHERE feeID = '$id'";
  $result = $conn->query($sql);
  $row=$result->fetch_assoc();
}

if(isset($_POST['submit'])) {

  $id=$_GET['UID'];
  $UID = $_SESSION['user_id'];
  $feeID = $_POST['feeID'];
  $amount = $_POST['amount'];
  $transactionID = $_POST['transactionID'];

  $sql = "UPDATE annualfee SET UID='$UID', amount='$amount', transactionID='$transactionID'  WHERE feeID='$id'";

  if($conn->query($sql)===TRUE){

    header("Location: ./annualfee.php?msg=Updated Successfully");

  }
  else{
    echo "Error: ". $sql . "<br>" . $conn->error;
  }

}
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
	<link rel="stylesheet" href="./annualfeestyle.css">
    
	
</head>

<?php include('../header/headerlog.php')?>


<div class="updatefile">

<h2>UPDATE PAYEMENT</h2>
  <form action="" method="POST">

      
      TransactionID : <input type="text" name="transactionID" value="<?php echo $row['transactionID'];?>" required><br><br>
      Amount : <input type="text" name="amount" value="<?php echo $row['amount'];?>" required><br><br>

      <input type="submit" name="submit" value="Update">

  </form>
  
</div>



<?php include('../footer/footer.php')?>
