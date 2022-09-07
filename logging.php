<html>
<head><title>Login Status</title>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link rel="icon" href="icon.png">

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"><link rel="stylesheet" href="./style.css">

</head>   
<body>

		<?php

	    session_start();
		$conn = mysqli_connect("localhost", "ashok","2002", "ticketstore") or die("didn't conect");
		
		
		$mobile = $_REQUEST['mobileno'];
		$pass = $_REQUEST['password'];
        $check=0;
       

		
		$sql = "select mobileno,password from users";
        $res = mysqli_query($conn, $sql);
		
        while($row=mysqli_fetch_assoc($res))
        {
            if($mobile == $row['mobileno'] and $pass == $row['password'])
            {
                $check=1;
                break;
            }
            elseif($mobile == $row['mobileno'])
            {
                $check=2;
            
                break;
            }
        }


        if($check==1)
        {
            $_SESSION['mobile']=$mobile;

            header("Location:home/index.php?mob=$mobile");
            die;

            
        }
        elseif($check==2)
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
            margin-bottom: 20px;'>    Invalid Password!    </h1> <br><br><br>
            <a href='index.html'><button style='
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
        else{
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
            margin-bottom: 20px;'>    Invalid User Details!    </h1> <br><br><br>
            <a href='index.html'><button style='
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



		
		
	
		mysqli_close($conn);
		?>

</body>

</html>
