<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="icon.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link rel="stylesheet" href="ticketcss.php">

<style>
    body
{
  background-image: linear-gradient(135deg, #d58cff 10%, #1904E5 100%);
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
  font-family: "Open Sans", sans-serif;
  color: #333333;
}

.ticket 
{
    position: relative;
    
    background-image: url("ticket2.png");
    background-size:contain;
    background-repeat: no-repeat;
    color:black; 
    width:50%;
    height:300px; 
    margin-top:20px; 
    margin-left: 525px;
    border-radius:30px;   
}

h1 
{
    font-size: 22px;
}
.text
{
  position: relative;
  left: 180px;
  top:20px;
}
  
.heading
{
    margin-top:100px;
   
   font-size:40px;
   color:aliceblue;
    
    
}
 
</style>


</head>
<body>


<?php 
   
$user="ashok";
$pass="2002";

$conn= mysqli_connect("localhost",$user,$pass,"ticketstore") or die("can't connect somehow :(");

$mobile = $_REQUEST['cmob'];
$cname = $_REQUEST['cname'];
$ctheatre = $_REQUEST['ctheatre'];
$cdate = $_REQUEST['cdate'];
$ctime = $_REQUEST['ctime'];
$cloc = $_REQUEST['cloc'];

$query = "insert into tickets values('$mobile','$cname','$ctheatre','$cdate','$ctime','$cloc',150)";

if(mysqli_query($conn,$query))
{
    echo "
    <center><h1 class='heading'>Ticket Booked Succesfully!<br></h1></center>
    <div class='ticket'>

<br>
<div class='text'>
  <h1 class='mname'> $cname </h1> 
  <h1 class='theatre'> $ctheatre </h1> 
  <h1 class='time'> $ctime , $cdate </h1> 
  
  <h1 class='loc'> $cloc </h1> 
  <h1 class='cost'> 150/- </h1> 
  </div>
</div>";
}
else
{
    
    echo mysqli_error($conn);

}

mysqli_close($conn)


?>











<
</body>
</html>