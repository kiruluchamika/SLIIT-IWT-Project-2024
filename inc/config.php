<?php 

$severname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'carepro';

$conn = mysqli_connect($severname, $username, $password, $dbname);

    //check connection

if(mysqli_connect_error()){
    die('Database not connceted !'.mysqli_conncet_error());
}
 else {
    //echo "Connection successful."; 
}



?>