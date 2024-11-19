<?php 
//by kirulu

function emptyinputssignup($fname, $lname, $gender, $mobile, $email, $address, $plan, $pwd, $pwdrepeat){
    $result;
    if(empty($fname) || empty($lname) || empty($gender) || empty($mobile) || empty($email) || empty($address) || empty($plan) || empty($pwd) || empty($pwdrepeat)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invaliduid($fname, $lname){
    $result;

    if(!preg_match("/^[a-zA-Z]*$/", $fname) ||!preg_match("/^[a-zA-Z]*$/", $lname)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidemail($email){
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}



function createuser($conn, $fname, $lname, $gender, $mobile, $email, $address, $dob, $plan, $pwd){
    
    $sql = "INSERT INTO user VALUES (NULL, '$fname', '$lname', '$gender', '$mobile', '$email', '$address', '$dob', '$plan', '$pwd')";
    
    if ($conn->query($sql)) {
        echo "Signup successful!";
        header("location:../signin.php?message=Registration successful !");
         exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        header("location:../signup.php?error=sqlerror");
        exit();
    }
}


function emptyinputssignin( $email, $pwd,){
    $result;
    if(empty($email) || empty($pwd)){
        $result = true;
    }else{
        $result = false;
    }

    return $result;
}

//use only need

/*function loginUser($conn, $email, $pwd){
    $sql = "SELECT * FROM user WHERE email='$email' AND password='$pwd'";

    $result = $conn->query($sql);


    if($result->num_rows > 0){
        //fetch the user details to associative array
        $user = $result->fetch_assoc();
        $_SESSION['user_id'] = $user['UID'];
        $_SESSION['first_name'] = $user['first_name'];
    
        //$_SESSION['plan_id'] = $user['planId'];
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
        header("Location: ../signin.php?message=Invalid_user_id_or_password");
    }


}*/