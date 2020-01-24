<?php
//creating database connection 
$servername="localhost";
$username="root";
$password="";
$database="phpdata";
$conn=mysqli_connect($servername,$username,$password,$database);
//checking to connection 
if(!$conn)
{
    die("Failed to connect".mysqli_connect_error());
}
else{
    echo"connection successful";
}
$sql="INSERT INTO `user` (`rollno`, `Name`, `age`, `salary`) VALUES ('171500282', 'Saket Shubham', '20', '75000000')";
if(mysqli_query($conn,$sql))
{
    echo"Success";

}
else{
    echo "error".mysqli_error($conn);
}

mysqli_close($conn);


?>