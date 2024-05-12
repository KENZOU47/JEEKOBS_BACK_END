<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'login';
$conn = new mysqli($host, $user, $pass, $db);

if($conn -> connect_error){
    die ('Connection Failed'.$conn -> connect_error);
}

?>

<?php
if (isset($_SESSION['Username'])){
    $username = $_SESSION['Username'];
    $query = mysqli_query($conn, "SELECT * FROM `admins` WHERE admins.User_Name = '$username'");

    while ($row = mysqli_fetch_array($query)){
        echo $row['first_name']. ' '.$row['last_name'];
    }
}

?>