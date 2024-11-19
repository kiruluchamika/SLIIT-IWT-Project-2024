<?php 

if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $plan = $_POST['plan'];
    $dob = $_POST['dob'];
    $pwd = $_POST['pwd'];
    $pwdrepeat = $_POST['pwdrepeat'];
    

    require_once './config.php';
    require_once './functions.php';

    $emptyinputs = emptyinputssignup($fname, $lname, $gender, $mobile, $email, $address, $plan, $pwd, $pwdrepeat);
    $invaliduid = invaliduid($fname, $lname);
    $invalidemail = invalidemail($email);

    if($emptyinputs !== false){
        header("Location:../signup.php?message=Fill all inputs !");
        exit();
    }

     if($invaliduid !== false){
        header("Location:../signup.php?message=Invalid User Name !");
        exit();
     }

    if($invalidemail !== false){
        header("Location:../signup.php?message=Invalid Email !");
        exit();
    }

    createuser($conn, $fname, $lname, $gender, $mobile, $email, $address, $dob, $plan, $pwd);

}

else{
    header('Location:../signup.php?');
}

?>