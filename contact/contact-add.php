<?php require_once('../inc/config.php'); ?>
<?php
if(isset($_POST["submit-btn"]))
{
    $name = $_POST["name"];
    $number = $_POST["contact"];
    $email = $_POST["mail"];
    $massage = $_POST["massage"];
    $inquiry = $_POST["enquiry"];

     $sql = "INSERT INTO contact(name,number,email,inquiryType,message) values('$name','$number','$email','$inquiry','$massage')";

    if($conn -> query($sql) === true)
    {
        session_start();
        $_SESSION['success_message'] = "Thank you for your inquiry! We will get back to you soon.";
       
        header("location:../contact.php?success=1");
    }
    else{
        echo "Error: ". $sql. "<br>". $conn->error;
    }
   
}



?>