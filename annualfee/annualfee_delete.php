<?php session_start();?>
<?php require_once('../inc/config.php'); ?>

<?php

if(isset($_GET['UID'])){
  $id = $_GET['UID'];

  $sql = "DELETE FROM annualfee WHERE feeID=$id";

  if($conn->query($sql)===TRUE){
      header("Location: ./annualfee.php?msg=Deleted Successfuly");
  }
  else{
    echo "Error deteling record: " . $conn->error;
  }

}