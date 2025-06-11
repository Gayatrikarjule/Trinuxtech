<?php
$fullname= $_POST['fullname'];
$mobile= $_POST['mobile'];
$email= $_POST['email'];
$college= $_POST['college'];
$branch= $_POST['branch'];
$passout= $_POST['passout'];
$designation= $_POST['designation'];
$message= $_POST['message'];
$referred= $_POST['referred'];

//database connection

$con = new mysqli('localhost', 'root','','trinux');
if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into career(fullname, mobile, email, college, branch, passout, designation, message,referred)
    values(?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssssssi",$fullname, $mobile, $email, $college, $branch, $passout, $designation, $message, $referred);
    $stmt->execute();
    echo "submit scuccessfully....";
    $stmt->close();
    $conn->close();
}
?>