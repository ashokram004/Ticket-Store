
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pick your theatre</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="icon" href="icon.png">


  <link rel="stylesheet" type="text/css" media="screen" href="theatre1.php" />
  
  


</head>

<body>
         <?php
        
          $mindex = $_REQUEST['index'];
          $mobile = $_REQUEST['mob'];
      
         
            if($mindex==0)
            {
                $mimg = "acharya3.jpg";
                $bg = "acharya2.jpg";
                $mname="Acharya";
                $mcast="Chiranjeevi, Ram charan, Kajal";
                $mdir="Koratala shiva";
            }
            else if($mindex==1)
            {
              $bg = "bn.jpg";
              $mimg = "bn5.jpg";
              $mname="Bheemla Nayak";
              $mcast="Pawan kalyan, Rana";
              $mdir="Sagar K. Chandra";
            }
            else if($mindex==2)
            {
              $bg = "rs5.jpg";
              $mimg = "rs3.jpg";
              $mname="Radhe Shyam";
              $mcast="Prabhas, Pooja hegde";
              $mdir="Radha Krishna Kumar";
            }
            else if($mindex==3)
            {
              $mimg = "pushpa2.jpg";$bg = "push2.jpg";
              $mname="Pushpa";
              $mcast="Allu arjun, Fahad fasil, Rashmika";
              $mdir="Sukumar";
            }
            else if($mindex==4)
            {
              $mimg = "2_02.jpg";$bg = "2_0.jpg";
              $mname="2.0";
              $mcast="Rajini kanth, Akshay kumar";
              $mdir="Shankar";
            }
            else if($mindex==5)
            {
              $mimg = "spidy4.jpg";$bg = "spidy2.jpg";
              $mname="Spiderman:No way home";
              $mcast="Tom holland, Tobey Maguire, Andrew garfield, Zendaya";
              $mdir="Jon watts";
            }
            else if($mindex==6)
            {
              $mimg = "saaho.jpg";$bg = "saaho2.jpg";
              $mname="Saaho";
              $mcast="Prabhas, Shraddha kapoor";
              $mdir="Sujeeth";
            }
            else if($mindex==7)
            {
              $mimg = "svp2.jpg";$bg = "svp4.jpg";
              $mname="Sarkaru vaari paata";
              $mcast="Mahesh babu, Keerthi suresh";
              $mdir="Parasuram petla";
            }
            else if($mindex==8)
            {
              $mimg = "an2.jpg";$bg = "an.jpg";
              $mname="Aakasham nee haddhura";
              $mcast="Suriya, Aparna";
              $mdir="Sudha kongara";
            }
            else if($mindex==9)
            {
              $mimg = "tj2.jpg";$bg = "tj.jpg";
              $mname="Tuck Jagadeesh";
              $mcast="Nani, Ritu varma";
              $mdir="Shiva nirvana";
            }
            else if($mindex==10)
            {
              $bg = "rgs2.jpg";
              $mimg = "rgs3.jpg";
              $mname="Rangasthalam";
              $mcast="Ram charan, Samantha";
              $mdir="Sukumar";
            }
            else if($mindex==11)
            {
              $mimg = "krack2.jpg";$bg = "krack3.jpg";
              $mname="Krack";
              $mcast="Ravi teja, Sruthi hassan";
              $mdir="Gopichand malineni";
            }
            else if($mindex==12)
            {
              $mimg = "upp3.jpg";$bg = "upp2.jpg";
              $mname="Uppena";
              $mcast="Vaishnav tej, Kriti shetty";
              $mdir="Bucchi babu";
            }
            else if($mindex==13)
            {
              $mimg = "cokancharapalem.jpg";$bg = "cok2.jpg";
              $mname="C/O Kancharapalem";
              $mcast="Praveen paruchuri, Karthik rathnam";
              $mdir="Maha venkatesh";
            }
            else if($mindex==14)
            {
              $mimg = "vs2.jpg";$bg = "vs3.jpg";
              $mname="Vakeel Saab";
              $mcast="Pawan kalyan, Anjali";
              $mdir="Venu sriram";
            }
            
           
      
         ?>

      <center>


    <div id="title" >
      <img src=<?php echo "$bg" ?> class="bgimg" width="100%" height="100%">

         <img class="imag" src=<?php echo "$mimg" ?>>
         <br>
        
        <h6 class="mname"><?php echo "$mname" ?></h6><br>
        <h6 class="mcast"><?php echo "$mcast" ?></h6>
        <h6 class="mdir"><?php echo "$mdir" ?></h6>
        
        
    </div>
   

    <br>


    <div id="date">
          <button id="day" style="background-color: rgb(47, 0, 85); border:2px solid rgb(47, 0, 85); color: white; box-shadow: 0 0 10px 2px #0e004294;" onclick="this_day(event)">
                Feb <br> 4
          </button>
          <button id="day" onclick="this_day(event)">
                Feb <br> 5
          </button>
          <button id="day" onclick="this_day(event)">
            Feb <br> 6
          </button>
          <button id="day" onclick="this_day(event)">
            Feb <br> 7
      </button>
      <button id="day" onclick="this_day(event)">
            Feb <br> 8
      </button>
      <h5 id="location">Vizag</h5>
      
    </div>
     


    <div id="theatres">
            <div id="divs" class="divs" >
               
                <p id="1">Sarat Theatre - 4k Dolby Atmos: Vizag
                      <div class="times">
                      <a href="ticket.php?cmob=<?php echo $mobile ?> & cname=<?php echo $mname?> & ctheatre=Sarat Theatre - 4k Dolby Atmos & cdate=Feb 4 & ctime=10:45AM & cloc=Vizag " onclick="post"><button id="b1" class="but"><b>10:45AM</b></button></a>
                      <a href="ticket.php?cmob=<?php echo $mobile ?> & cname=<?php echo $mname?> & ctheatre=Sarat Theatre - 4k Dolby Atmos & cdate=Feb 4 & ctime=02:30PM & cloc=Vizag " onclick="post"> <button id="b1" class="but" onclick="func(event)"><b>02:30PM</b></button></a>
                      <a href="ticket.php?cmob=<?php echo $mobile ?> & cname=<?php echo $mname?> & ctheatre=Sarat Theatre - 4k Dolby Atmos & cdate=Feb 4 & ctime=06:15PM & cloc=Vizag " onclick="post"> <button id="b1" class="but" onclick="func(event)"><b>06:15PM</b></button></a>
                      <a href="ticket.php?cmob=<?php echo $mobile ?> & cname=<?php echo $mname?> & ctheatre=Sarat Theatre - 4k Dolby Atmos & cdate=Feb 4 & ctime=09:45PM & cloc=Vizag " onclick="post"><button  id="b2"class="but" onclick="func(event)"><b>09:45PM</b></button></a>
                  </div>
              </p>
             
              <hr>
            
              
                <p id="2">Jagadamba 4k: Jagadamba jn., Vizag
                  <div class="times">
                       
                  <a href="ticket.php?cmob=<?php echo $mobile ?> & cname=<?php echo $mname?> & ctheatre=Jagadamba 4k & cdate=Feb 4 & ctime=10:00AM & cloc=Jagadamba jn., Vizag " onclick="post"><button id="b3" class="but" onclick="func(event)"><b>10:00AM</b></button></a>
                  <a href="ticket.php?cmob=<?php echo $mobile ?> & cname=<?php echo $mname?> & ctheatre=Jagadamba 4k & cdate=Feb 4 & ctime=01:30PM & cloc=Jagadamba jn., Vizag " onclick="post"><button id="b1" class="but" onclick="func(event)"><b>01:30PM</b></button></a>
                  <a href="ticket.php?cmob=<?php echo $mobile ?> & cname=<?php echo $mname?> & ctheatre=Jagadamba 4k & cdate=Feb 4 & ctime=05:45PM & cloc=Jagadamba jn., Vizag " onclick="post"><button id="b1" class="but" onclick="func(event)"><b>05:45PM</b></button></a>
                  <a href="ticket.php?cmob=<?php echo $mobile ?> & cname=<?php echo $mname?> & ctheatre=Jagadamba 4k & cdate=Feb 4 & ctime=09:15PM & cloc=Jagadamba jn., Vizag " onclick="post"><button id="b4" class="but" onclick="func(event)"><b>09:15PM</b></button></a>
                  </div>
                </p>
                <hr>
             

                <p id="3">INOX: Varun beach, Beach Road.       
                  <div class="times">   
                  <a href="ticket.php?cmob=<?php echo $mobile ?> & cname=<?php echo $mname?> & ctheatre=INOX & cdate=Feb 4 & ctime=10:00AM & cloc=Varun beach, Beach road " onclick="post"><button id="b5" class="but" onclick="func(event)"><b>10:00AM</b></button></a>
                  <a href="ticket.php?cmob=<?php echo $mobile ?> & cname=<?php echo $mname?> & ctheatre=INOX & cdate=Feb 4 & ctime=02:30PM & cloc=Varun beach, Beach road " onclick="post"><button id="b1" class="but" onclick="func(event)"><b>02:30PM</b></button></a>
                  <a href="ticket.php?cmob=<?php echo $mobile ?> & cname=<?php echo $mname?> & ctheatre=INOX & cdate=Feb 4 & ctime=06:30PM & cloc=Varun beach, Beach road " onclick="post"><button id="b6" class="but" onclick="func(event)"><b>06:30PM</b></button></a>
                  </div>
                </p>
                <hr >

              
              
                <p id="4">Sree Rama Theatre 4k Dolby Atmos: Vizag
                  <div class="times">
                  <a href="ticket.php?cmob=<?php echo $mobile ?> & cname=<?php echo $mname?> & ctheatre=Sree Rama Theatre 4k Dolby Atmos & cdate=Feb 4 & ctime=10:30AM & cloc=Vizag " onclick="post"><button id="b1" class="but" onclick="func(event)"><b>10:30AM</b></button></a>
                  <a href="ticket.php?cmob=<?php echo $mobile ?> & cname=<?php echo $mname?> & ctheatre=Sree Rama Theatre 4k Dolby Atmos & cdate=Feb 4 & ctime=02:30PM & cloc=Vizag " onclick="post"><button id="b1" class="but" onclick="func(event)"><b>02:00PM</b></button></a>
                  <a href="ticket.php?cmob=<?php echo $mobile ?> & cname=<?php echo $mname?> & ctheatre=Sree Rama Theatre 4k Dolby Atmos & cdate=Feb 4 & ctime=05:15PM & cloc=Vizag " onclick="post"><button id="b0" class="but" onclick="func(event)"><b>05:15PM</b></button></a>
                  </div>
                </p>
                <hr>

              
                <p id="5">Sri Lakshmi Narasimha Picture Palace: 104 Area
                  <div class="times">
                  <a href="ticket.php?cmob=<?php echo $mobile ?> & cname=<?php echo $mname?> & ctheatre=Sri Lakshmi Narasimha Picture Palace & cdate=Feb 4 & ctime=12:30PM & cloc=104 Area " onclick="post"><button id="b7" class="but" onclick="func(event)"><b>12:30PM</b></button></a>
                  <a href="ticket.php?cmob=<?php echo $mobile ?> & cname=<?php echo $mname?> & ctheatre=Sri Lakshmi Narasimha Picture Palace & cdate=Feb 4 & ctime=04:00PM & cloc=104 Area " onclick="post"><button id="b8" class="but" onclick="func(event)"><b>04:00PM</b></button></a>
                  <a href="ticket.php?cmob=<?php echo $mobile ?> & cname=<?php echo $mname?> & ctheatre=Sri Lakshmi Narasimha Picture Palace & cdate=Feb 4 & ctime=07:30PM & cloc=104 Area " onclick="post"><button id="b9" class="but" onclick="func(event)"><b>07:30PM</b></button>  </a>
                  </div>
                </p>
                <hr>


                <p id="6">Tata Picture Palace: Thagarapuvalasa
                  <div class="times">
                  <a href="ticket.php?cmob=<?php echo $mobile ?> & cname=<?php echo $mname?> & ctheatre=Tata Picture Palace & cdate=Feb 4 & ctime=01:30PM & cloc=Thagarapuvalasa " onclick="post"><button id="b15" class="but" onclick="func(event)"><b>1:30PM</b></button></a>
                  <a href="ticket.php?cmob=<?php echo $mobile ?> & cname=<?php echo $mname?> & ctheatre=Tata Picture Palace & cdate=Feb 4 & ctime=05:00PM & cloc=Thagarapuvalasa " onclick="post"><button id="b10" class="but" onclick="func(event)"><b>05:00PM</b></button></a>
                  <a href="ticket.php?cmob=<?php echo $mobile ?> & cname=<?php echo $mname?> & ctheatre=Tata Picture Palace & cdate=Feb 4 & ctime=08:30PM & cloc=Thagarapuvalasa " onclick="post"><button id= "b12" class="but" onclick="func(event)"><b>08:30PM</b></button></a>
                  </div>
                </p>
                <hr>

              
                <p id="7">Sri Melody 4k Dolby Atmos: Vizag
                  <div class="times">
                  <a href="ticket.php?cmob=<?php echo $mobile ?> & cname=<?php echo $mname?> & ctheatre=Sri Melody 4k Dolby Atmos & cdate=Feb 4 & ctime=10:00AM & cloc=Vizag " onclick="post"><button id="b1" class="but" onclick="func(event)"><b>10:00AM</b></button></a>
                  <a href="ticket.php?cmob=<?php echo $mobile ?> & cname=<?php echo $mname?> & ctheatre=Sri Melody 4k Dolby Atmos & cdate=Feb 4 & ctime=02:00PM & cloc=Vizag " onclick="post"><button id="b1" class="but" onclick="func(event)"><b>2:00PM</b></button></a>
                  <a href="ticket.php?cmob=<?php echo $mobile ?> & cname=<?php echo $mname?> & ctheatre=Sri Melody 4k Dolby Atmos & cdate=Feb 4 & ctime=06:00PM & cloc=Vizag " onclick="post"><button id="b13"class="but" onclick="func(event)"><b>6:00PM</b></button></a>
                  <a href="ticket.php?cmob=<?php echo $mobile ?> & cname=<?php echo $mname?> & ctheatre=Sri Melody 4k Dolby Atmos & cdate=Feb 4 & ctime=09:30PM & cloc=Vizag " onclick="post"> <button id="b14" class="but" onclick="func(event)"><b>09:30PM</b></button></a>
                  </div>
                </p>
                <hr>

              
                <p id="8">Cinepolis: Sreekanya Cineglitz, Madhurawada
                  <div class="times">
                  <a href="ticket.php?cmob=<?php echo $mobile ?> & cname=<?php echo $mname?> & ctheatre=Cinepolis: Sreekanya Cineglitz & cdate=Feb 4 & ctime=05:00PM & cloc=Madhurawada " onclick="post"><button id="b11" class="but" onclick="func(event)"><b>05:00PM</b></button></a>
                  <a href="ticket.php?cmob=<?php echo $mobile ?> & cname=<?php echo $mname?> & ctheatre=Cinepolis: Sreekanya Cineglitz & cdate=Feb 4 & ctime=09:15PM & cloc=Madhurawada " onclick="post"> <button id="b16" class="but" onclick="func(event)"><b>09:15PM</b></button></a>
                  </div>
                </p>
               <br>
           
              </div>

    </div>
    <br/>
    
</center>
</body>
</html>