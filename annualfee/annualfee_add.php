<?php session_start();?>
<?php require_once('../inc/config.php'); ?>


<?php 
	//check if a user is logged in
	if(!isset($_SESSION['user_id'])){
		header("Location: ../signin.php?message=not_login");
	} 

?> 

<?php

if(isset($_POST['submit'])){

    $UID = $_SESSION['user_id'];
    $feeID= $_POST['feeID'];
    $amount=$_POST['amount'];
    $transactionID=$_POST['transactionID'];


    $sql= "INSERT INTO annualfee (UID, feeID, amount, transactionID) VALUES ('$UID', '$feeID', '$amount', '$transactionID')";

    if ($conn->query($sql) === TRUE) {
        header("Location: annualfee.php?msg=Added Successfully");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarePro Insurance</title>
	<link rel="icon" type="image/png" href="./Logo3t.png">
	
	<!-- ADD CSS FILES -->
    <link rel="stylesheet" href="../styles/generalstyle.css">
	<link rel="stylesheet" href="annualfeestyle.css">

</head>    


<?php include('../header/headerlog.php')?>

    <div class="addfile">

<h2>Add New Payment</h2>
    <form action="" method="POST">
       
       TransactionID : <input type="text" name="transactionID" required><br><br>
        Amount : <input type="text" name="amount" required><br><br>
        

        <input type="submit" name="submit" value="Submit">
    </form>

    </div>


<?php include('../footer/footer.php')?>