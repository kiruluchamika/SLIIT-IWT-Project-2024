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
    $userID = $_GET['UID'];

    $sql = "SELECT * FROM user WHERE UID = '$userID'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

if (isset($_POST['submit'])) {

    $fname =$_POST['first_name'];
    $lname =$_POST['last_name'];
    $email =$_POST['email'];
    $number=$_POST['phone_number'];
    $address=$_POST['address'];
 
     
 
     $sql = "UPDATE user SET first_name ='$fname', last_name='$lname', phone_No='$number',email='$email',address='$address' WHERE UID = '$userID'";
 
     if ($conn->query($sql) === TRUE) {
         header("Location:user_details.php?msg=Update successful");
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
	<link rel="stylesheet" href="./userupdatestyle.css">
    
	
</head>

<?php include('../header/headerlog.php')?>

<div class="main">
<form method="post" action="">
    <h2>Update User Details</h2>

  First Name:  <input type="text" id="first_name" name="first_name" value= "<?php echo $row['first_name']; ?>"required><br><br>
  Last Name: <input type="text" id="last_name" name="last_name" value= "<?php echo $row['last_name']; ?>" required><br><br>
  Gender: <input type="text" id="gender" name="gender" value="<?php echo $row['gender']; ?>"disabled><br><br>
  Phone Number:<input type="text" id="phone_number" name="phone_number" value="<?php echo $row['phone_No']; ?>" required ><br><br>
  Email: <input type="text" id="email" name="email" value="<?php echo $row['email']; ?>" required><br><br>
  Address: <input type="text" id="address" name="address" value="<?php echo $row['address']; ?>" required><br><br>
  DOB: <input type="text" id="dob" name="dob" value="<?php echo $row['dob']; ?>" disabled><br><br>
  Plan ID: <input type="text" id="plan_id" name="plan_id" value="<?php echo $row['planID']; ?>" disabled><br><br>
  Password:<input type="password" id="password" name="password" value="<?php echo $row['password']; ?>" disabled><br><br>

  <input type="submit" name="submit" value="UPDATE" >
</form>
</div>
