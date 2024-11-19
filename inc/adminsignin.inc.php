
<?php 

//By kirulu

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $pwd = $_POST['password'];

    require_once './config.php';
    require_once './functions.php';


    if(emptyinputssignin($email, $pwd) !== false){
        header("Location:../admin.php?error=emptyinputs");
        exit();
    }

    //loginUser($conn , $email, $pwd);   //use only need
    session_start();

    $sql = "SELECT * FROM admin WHERE email='$email' AND password='$pwd'";

    $result = $conn->query($sql);


    if($result->num_rows > 0){
        //fetch the user details to associative array
        $admin = $result->fetch_assoc();
        $_SESSION['adminID'] = $admin['adminID'];
        $_SESSION['afirst_name'] = $admin['firstName'];
        $_SESSION['aLast_name'] = $admin['lastName'];
        $_SESSION['adminRegisterDate'] = $admin['adminRegisterDate'];
        $_SESSION['arole'] = $admin['role'];
        $_SESSION['aEmail'] = $admin['email'];
        $_SESSION['apassword'] = $admin['password'];
    
       
    
        //CHECK THE FOLLOWING SQL QUERY
        $sql_noti = "SELECT * FROM notification";
        $result_noti = $conn->query($sql_noti);
        $noti = $result_noti->fetch_assoc();
        $_SESSION['notiId'] = $noti['notificationID'];
    
        //redirect to the user.php page
        header("Location: ../admin/admindash.php?message=Admin_Login_success");
    
    } else {
        //redirect back to the user log in page with error message
        header("Location: ../admin.php?message=Invalid Admin email or password");
    }

}
else{
    header('Location:../inc/admin.php?=error_submit');

}



?>