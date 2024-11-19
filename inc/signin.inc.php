
<?php 

//By kirulu

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $pwd = $_POST['password'];

    require_once './config.php';
    require_once './functions.php';


    if(emptyinputssignin($email, $pwd) !== false){
        header("Location:../signin.php?error=emptyinputs");
        exit();
    }

    session_start();

    $sql = "SELECT * FROM user WHERE email='$email' AND password='$pwd'";

    $result = $conn->query($sql);


    if($result->num_rows > 0){
        //fetch the user details to associative array
        $user = $result->fetch_assoc();
        $_SESSION['user_id'] = $user['UID'];
        $_SESSION['ufirst_name'] = $user['first_name'];
        $_SESSION['ulast_name'] = $user['last_name'];
        $_SESSION['ugender'] = $user['gender'];
        $_SESSION['uphone_No'] = $user['phone_No'];
        $_SESSION['uemail'] = $user['email'];
        $_SESSION['uaddress'] = $user['address'];
        $_SESSION['udob'] = $user['dob'];
        $_SESSION['uplan'] = $user['planID'];
        $_SESSION['upassword'] = $user['password'];
    
        $plan_id = $user['plan'];
    
        //CHECK THE FOLLOWING SQL QUERY
        $sql_plan = "SELECT * FROM plan where planId='$plan_id'";
        $result_plan = $conn->query($sql_plan);
        $plan = $result_plan->fetch_assoc();
        $_SESSION['plan_name'] = $plan['planName'];
    
        //redirect to the user.php page
        header("Location: ../user.php?message=Login_success");
    
    } else {
        //redirect back to the user log in page with error message
        header("Location: ../signin.php?message=Invalid User Email or Password");
    }

}
else{
    header('Location:../signin.php?=error_submit');

}



?>