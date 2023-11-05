<?php
$servername = "127.0.0.1:3307";
$username = "root";
$password = "";
$database = "web";

// Create connection
$conn = new mysqli($servername,$username,$password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

mysqli_select_db($conn,'web');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = "insert into userinfodata ( user, email, mobile, comment) values ('$user','$email','$mobile','$comment') ";

// $query = "INSERT INTO `userinfodata`(`user`, `email`, `mobile`, `comment`) VALUES ('$user','$email','$mobile','$comment')";

// $query = "INSERT INTO `userinfodata` (`id`, `user`, `email`, `mobile`, `comment`) VALUES ('2', 'bachin', 'vadregahsdf@gmail.com', '5489754698', 'i like not this video')";
// $result = mysqli_query($conn, $query);

// if ($result) {
//   echo "record has been inseerted";
// }
// else{
// // echo "not inserted";
// mysqli_error($conn);
// }


  echo "$query";

mysqli_query($conn ,$query);
header('location:index.php');

?>