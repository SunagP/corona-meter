<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'corona_stats_db';
$user = $_POST['username'];
$pass = $_POST['password'];

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}

$sql = "SELECT username,password FROM corona_database";
$result = $conn->query($sql);

$flag = 0;
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        if($row['username']==$user and $row['password']==$pass){
            $flag = 1;
        }
    }
}

if($flag==0){
    echo'
    <script type="text/javascript">
    alert("INVALID USERNAME OR PASSWORD");
    </script>'
    include 'log-in.html';
    exit;
}

else{
    include 'home.html';
    exit;
}

$conn->close();
?>