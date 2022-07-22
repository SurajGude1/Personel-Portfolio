
<?php

if(isset($_POST['Name'])){
$host="localhost";
$user="root";
$password="";
$db="contact";

$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Mobile_Number=$_POST['Mobile_Number'];
$Message=$_POST['Message'];

$conn = mysqli_connect($host,$user,$password,$db);
$sql = "INSERT INTO connections  VALUES ('','$Name','$Email','$Mobile_Number','$Message','')";

if($conn->query($sql) == true){
    
    echo "submitted <br>";
}
$conn->close();
}
?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>subnitted</title>
</head>
<body>
    <div class="submit">
    <h3><a href="index.html">Go To Home Page</a></h3></div> 
</body>
</html>





