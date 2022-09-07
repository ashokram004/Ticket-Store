<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="icon.png">
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


</style>




</head>



<body class="main">
    <center>
      <br>
        <h1 style="color:aliceblue; font-size:30px">Tickets Purchased</h1>
    </center>
<?php

	
$conn = mysqli_connect("localhost", "ashok","2002", "ticketstore") or die("didn't conect");
$mob = $_REQUEST['mob'];



$sql = "select *from tickets where mobileno=$mob";


$result = mysqli_query($conn, $sql);

while($record=mysqli_fetch_array($result))
{


    echo "
    



<div class='ticket'>

<br>
<div class='text'>
  <h1 class='mname'> $record[1] </h1> 
  <h1 class='theatre'> $record[2] </h1> 
  <h1 class='time'> $record[4] , $record[3] </h1> 
  
  <h1 class='loc'> $record[5] </h1> 
  <h1 class='cost'> $record[6]/- </h1> 
  </div>
</div>

    


";
}



?>










</body>
</html>