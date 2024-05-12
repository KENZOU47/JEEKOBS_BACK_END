<?php
include 'conn.php';

if(isset($_POST['Login'])){
    $username= $_POST['Username'];
    $password = $_POST['Password'];
    $sql ="SELECT* FROM admins WHERE User_Name ='$username' AND Password ='$password'";
    $rs = $conn->query($sql);
    if($rs->num_rows > 0) {
        session_start();
      $row= $rs->fetch_assoc();
      $_SESSION['Username'] = $row['Username'];
      header("Location:  Dashboard.html");
      exit();
    
    
    }else{
        $message = "No Record Found, Invalid/Incorrect Email or Password";
        echo "<script type='text/javascript'>alert('$message');</script>"; 
    }
    }
?>