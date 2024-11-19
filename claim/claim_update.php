<?php session_start();?>
<?php require_once('../inc/config.php'); ?>



<?php 
	//check if a user is logged in
	if(!isset($_SESSION['user_id'])){
		header("Location: ../signin.php?message=not_login");
	} 
?> 

<?php 
if (isset($_GET['UID'])) {
    $claimID = $_GET['UID'];

    $sql = "SELECT * FROM claim WHERE claimID = '$claimID'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

if (isset($_POST['submit'])) {
    $claimID = $_GET['UID'];
    $UID = $_SESSION['user_id'];
    $file = $_POST['filereferance'];
    $note = $_POST['note'];
	

    $sql = "UPDATE claim SET UID='$UID', filereferance='$file', note='$note' WHERE claimID='$claimID'";

    if ($conn->query($sql) === TRUE) {
        header("Location: ./claim.php?msg=Updated Successfully");
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
	<link rel="icon" type="image/png" href="../images/Logo3t.png">
	
	<!-- ADD CSS FILES -->
    <link rel="stylesheet" href="../styles/generalstyle.css">
	<link rel="stylesheet" href="./claimstyle.css">
    
	
</head>

<?php include('../header/headerlog.php')?>


<div class="updatefile">

<h2>UPDATE CLAIM</h2>
    <form action="" method="POST">
        REFERANCE CODE : <input type="text" name="filereferance" value="<?php echo $row['filereferance']; ?>" required><br><br>
        NOTE : <input type="text" name="note" value="<?php echo $row['note']; ?>" required><br><br>
        <input type="submit" name="submit" value="Update">
    </form>

</div>


<?php include('../footer/footer.php')?>
