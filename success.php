<?php
session_start();

include("db.php");

if(isset($_SESSION['name']))
{
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $duration = $_SESSION['duration'];
    $plan = $_SESSION['plan'];

    $sql = "INSERT INTO members(name,email,duration,plan)
            VALUES('$name','$email','$duration','$plan')";

    mysqli_query($conn,$sql);

    session_destroy();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Success</title>

<meta http-equiv="refresh" content="5;url=home.php">

</head>
<body>

<center>
<h1 style="color:green;margin-top:250px;">
Registration Successful!
</h1>

<p>Redirecting to Home Page...</p>
</center>

</body>
</html>