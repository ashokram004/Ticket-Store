<!DOCTYPE html>
<html>
<head><title>Signup Status</title>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link rel="icon" href="icon.png">

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"><link rel="stylesheet" href="./style.css">

</head>   
<body>
        
    
<?php

$user="ashok";
$pass="2002";

$conn= mysqli_connect("localhost",$user,$pass,"ticketstore") or die("can't connect somehow :(");

$username = $_REQUEST['username'];
$mobileno = $_REQUEST['mobileno'];
$password = $_REQUEST['password'];

$query = "insert into users values('$username','$mobileno','$password')";

if(mysqli_query($conn,$query))
{
    echo "
    
    <br><br><br><br><br><br><br><br><br><br><br>
    <center>

    <div style='padding: 30px;
    width: 100%;
    height: 100%;
    
    background-size: cover;
    background-repeat: no-repeat;
    background-image: url('tollywoodbg.jpg');
    overflow: hidden;
    box-sizing: border-box;'>


    <h1 style='font-size: 6vmax;
    color: white;
    line-height: 1;
    font-weight: 900;
    margin-top: 100px;
    margin-bottom: 20px;'>    Account created successfully :)    </h1> <br><br><br>
    <a href='home/index.php?mob=$mobileno'><button style='
    color: #fff;
    font-size: 16px;
    padding: 12px 35px;
    border-radius: 50px;
    display: inline-block;
    border: 0;
    outline: 0;
    cursor: pointer;
    box-shadow: 0px 4px 20px 0px #49c628a6;
    background-image: linear-gradient(135deg, #70F570 10%, #49C628 100%);'>   LOGIN   </button></a></div></center>";
}
else
{
    $error = strval(mysqli_error($conn));
   if($error =  "Duplicate entry '$mobileno' for key 'PRIMARY'")
   {
    echo "
    
    <br><br><br><br><br><br><br><br><br><br><br>
    <center>

    <div style='padding: 30px;
    width: 100%;
    height: 100%;
    
    background-size: cover;
    background-repeat: no-repeat;
    background-image: url('tollywoodbg.jpg');
    overflow: hidden;
    box-sizing: border-box;'>


    <h1 style='font-size: 6vmax;
    color: white;
    line-height: 1;
    font-weight: 900;
    margin-top: 100px;
    margin-bottom: 20px;'>    Mobile Number Already Exists!    </h1> <br><br><br>
    <a href='signup.html'><button style='
    color: #fff;
    font-size: 16px;
    padding: 12px 35px;
    border-radius: 50px;
    display: inline-block;
    border: 0;
    outline: 0;
    cursor: pointer;
    box-shadow: 0px 4px 20px 0px #49c628a6;
    background-image: linear-gradient(135deg, #70F570 10%, #49C628 100%);'>   TRY AGAIN  </button></a></div></center>";
   }
else
{
    echo mysqli_error($conn);
}
}

mysqli_close($conn)


?>





</body>
</html>