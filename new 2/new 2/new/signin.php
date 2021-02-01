<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'corona_stats_db';
$email = $_POST['mail'];
$user = $_POST['username'];
$pass = $_POST['password'];

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}

$sql = "SELECT username FROM corona_database";
$result = $conn->query($sql);

$flag = 0;
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        if($row['username']==$user){
            $flag = 1;
        }
    }
    if($flag==1){
        echo'
        <script type="text/javascript">
        alert("USERNAME ALREADY IN USE");
        </script>';
        include 'sign-in.html';
        exit;
    }
    else{
        $sql = "INSERT INTO  corona_database(email_id,username,password)
        VALUES('$email','$user','$pass')";

        if($conn->query($sql) != TRUE){
            echo "Error: ".$sql."<br>" . $conn->error;
        }
        else{
            include 'home.html';
            exit;
        }
    }
}
else{
    $sql = "INSERT INTO  corona_database(email_id,username,password)
    VALUES('$email','$user','$pass')";

    if($conn->query($sql) != TRUE){
        echo "Error: ".$sql."<br>" . $conn->error;
    }
    else{
        include 'home.html';
        exit;
    }
}

$conn->close();
?>