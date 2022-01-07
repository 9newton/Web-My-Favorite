<?php
include'conn_db.php';
?>

<?php


$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];


$check = $conn->prepare('SELECT id FROM log_movie WHERE user = ?');
$check->bind_param('s', $username);
$check->execute();
$check->store_result();


if($check->num_rows > 0){
    
   
    $check->close();
    $conn->close();
    
    header('location:signupfail.html');

}else{
    $stmt = $conn->prepare('INSERT INTO log_movie(user, pass, email) VALUES(?, ?, ?)');
    $stmt->bind_param('sss', $username, $password, $email);
    $stmt->execute();

    // ยุติการเชื่อมต่อ และไปยังหน้าแสดงผล
    $stmt->close();
    $conn->close();

    header('location:signupsuccess.html');

}

?>



