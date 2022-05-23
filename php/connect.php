<?php

$Username = $_POST['Username'];
$Email = $_POST['Email'];
$pwd = $_POST['pwd'];
$cnfmpwd = $_POST['cnfmpwd'];

//DB connection

$conn = new mysqli('localhost','root','','tripsterdb');
if($conn->connect_error){
    die('Connection Faild : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(Username, Email, pwd, cnfmpwd)
    values(?,?,?,?)")
    $stmt->bind_param("ssss",$Username, $Email, $pwd, $cnfmpwd);
    $stmt->execute();
    echo "Registration Succesfull !";
    $stmt->close();
    $conn->close();
}

?>