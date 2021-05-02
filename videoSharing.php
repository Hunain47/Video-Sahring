<?php
session_start();
error_reporting(0);
?>
<?php
include("myphp.php");
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="video_Sharing.css">
    <link rel="stylesheet" href="https://cdn.plyr.io/3.6.7/plyr.css" />
    <!-- <link rel="stylesheet" href="https://cdn.plyr.io/3.6.7/plyr.css" /> -->
    <!-- <link rel="stylesheet" href="skin/skin.css"> -->
	<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Balsamiq+Sans:ital@1&family=Signika:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.plyr.io/3.6.7/plyr.polyfilled.js" crossorigin="anonymous"></script>


  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-132699580-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-132699580-1');
      document.addEventListener('DOMContentLoaded', () => { 
  // This is the bare minimum JavaScript. You can opt to pass no arguments to setup.
  const player = new Plyr('#player');
  
  // Expose
  window.player = player;

  // Bind event listener
  function on(selector, type, callback) {
    document.querySelector(selector).addEventListener(type, callback, false);
  }

  // Play
  on('.js-play', 'click', () => { 
    player.play();
  });

  // Pause
  on('.js-pause', 'click', () => { 
    player.pause();
  });

  // Stop
  on('.js-stop', 'click', () => { 
    player.stop();
  });

  // Rewind
  on('.js-rewind', 'click', () => { 
    player.rewind();
  });

  // Forward
  on('.js-forward', 'click', () => { 
    player.forward();
  });
});
    </script>


 
  
    <title>Video Sharing</title>
    <link rel="shortcut icon" type="image/png" href="favicon.png">
 <style>
 .sign-up{
      margin-left: -18px;
      /* padding: 0px 0px; */
      width: 87px;
      margin-right: -29px;
      color:white;
      background: none;
      border: none;
      text-decoration: underline;
      outline-style:none;
  }
  .sign-up:hover{
    background:none;
    color:#cec7c7;
    text-decoration: underline;
  }
  .close-sign-up{
    margin-left: 93px;
      margin-top: 8px;
      /* padding: 0px 0px; */
      width: 177px;
      margin-right: -52px;
      background-color: #ff0000ba;
  }
  .close-sign-up:hover{
    background-color:#ff0000ba;
  }
  .sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 60px;
    left: 0;
    background-color: #fff;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
    border-right: 1px solid #d2cece;

}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #040000;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color:  #7b6969;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}


/* .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
} */

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 73px;}
  .sidenav a {font-size: 18px;}
}
.flowplayer{
  width:20% ;
  height:20%;
}
.fp-ratio{
  padding-top: 45.67%;
}
.video-player{
  max-width: 30%;
  margin: 0 auto;
}
.plyr {
  border-radius: 4px;

  margin-bottom: 15px;
}

.videobody{
  margin-top: 68px;
    position: absolute;
}
.image{
  position:absolute;
  margin-top: 68px;
  width: 15%;
    margin-left: 94px;
   height:100%;
    float: left;

	


}
.logo{
  margin-left: 112px;
    position: absolute;
    top: 15px;
    border-radius: 15px;
    width: 38px;
    height: 31px;
    filter: drop-shadow(1px 4px 6px black);



}



.link{
  text-decoration:none;
  color: color;
 
  
}
.link:hover{
  text-decoration:none
}
.name{
  font-family: 'Orelega One', cursive;
    position: absolute;
    margin-left: 161px;
    top: -5px;
    font-size: 29px;
    color: white;
    filter: drop-shadow(3px 5px 7px black);
}



 </style>
</head>



<?php

 $otp_str=str_shuffle("12345678");
 "</br>";
 $otp=substr($otp_str, 1, 5);

 
 $act_str=rand(10000,100000);
 "</br>";
 $active_code=str_shuffle("abcdefgkmln".$act_str);

 if(isset($_POST["submit-signup"]))
 {
	 $otp=$_POST["otp"];
	 $active_code=$_POST["active_code"];
	 $name= mysqli_real_escape_string($conn, $_POST['user-name']);
	$email=mysqli_real_escape_string($conn,$_POST['user-email']);
	$phone=mysqli_real_escape_string($conn,$_POST['phone']);
	$cpassword=mysqli_real_escape_string($conn,$_POST['Cpassword']);
	$Ppassword=mysqli_real_escape_string($conn,$_POST['Ppassword']);

	$emailquery="select * from registration_table where user_email='$email'";
	$query=mysqli_query($conn,$emailquery) ;
	$emailcount=mysqli_num_rows($query);
	if($emailcount>0)
	{
		$selectrow=mysqli_fetch_assoc($emailcount);
		$status=$selectrow["status"];
		if($status == 1)
		     {

			echo '<script>alert("email already exist")</script>';
		     }
		else
		     {
			$sqlupdate="UPDATE registration_table SET name='$name', user_email='$email', phone_number='$phone', password='$cpassword', confirm_passowrd='$Ppassword',
			otp_code='$otp', active_code='$active_code'";
			$updaterow=mysqli_query($conn,$sqlupdate) ;
			if($updaterow)
			{
				$name=$_POST['user-name'];
				$to=$_POST['user-email'];
			
				$from="hanzala.abdullah@infomystery.com";
			$headers="From: $from";
			$subject = "confirmation Code" ;
			$message="Hi $name,
			your confirmation code  is <b>".$otp."</b>";
			if(mail($to, $subject, $message, $headers))
              {
				  echo '<script>alert(" send mail")</script>';
              }
			  else
		      {
				  echo '<script>alert("Failed to send mail")</script>';
				}
				
				
			}
			
			
		}
			
		}
	else
	{
		$name=$_POST['user-name'];
		$to=$_POST['user-email'];
		
		$from="hanzala.abdullah@infomystery.com";
		$headers="From: $from";
		$subject = "confirmation Code" ;
		$message="<html>
		Hi $name,
		your confirmation code  is <b>".$otp."</b>
		</html>";
		$headers  = 'MIME-Version: 1.0' . "\r\n";
         $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
         $headers .= "From:" . $from."\r\n";
		if(mail($to, $subject, $message, $headers))
		 {
			 echo '<script>alert("Email sent")</script>';
			 $sqlinsert="INSERT INTO registration_table (name,user_email,phone_number,password,confirm_passowrd,otp_code,active_code) VALUES('$name','$email','$phone','$cpassword','$Ppassword','$otp','$active_code')";
			 $sqlquery=mysqli_query($conn,$sqlinsert) ;		
			 if($sqlquery)
			 {

				 echo '<script>alert("check email code")</script>';
				 header('location:email_verify.php?code='.$active_code);
			
			}else{
				echo '<script>alert("'.mysqli_error($conn).'")</script>';
			}
		}
	  else
	  {
		   echo '<script>alert("Failed to send mail")</script>';
	 }
		
	}

 }
?>


<?php

if(isset($_POST['login']))
{
	$emailadress=$_POST['emailadress'];
	    $password=$_POST['password'];

	$query="select * from registration_table where user_email= '$emailadress' AND password='$password'";
$run_query=mysqli_query($conn,$query);
$total=mysqli_num_rows($run_query);
if($total)
{
	

    $email_pass=mysqli_fetch_assoc($run_query);
     $_SESSION['name']=$email_pass['name'];
	//  $_SESSION['text']="verify your email";
	$id=$email_pass["id"];
	 $status=$email_pass["status"];
	 if($status == 1)
	 {
		 echo '<script>alert("Login ok")</script>';
		 header('location:videoSharing.php');

	 }
	 else
	 {
		// echo '<script>alert("Please Verify your email")</script>';
		header('location:email_verify.php?id='.$id);
		
		
	 }
	 
		
	 ?>
	 <script>
	 location.replace("videoSharing.php");
	 </script>
	 <?php
	}
	else
	{
		echo '<script>alert("login failed")</script>';
	}

}

?>



<!-- ..................................BODY.................................................... -->



<body>
<div class="image">
<?php

$query="SELECT * FROM video_table";
$runquery=mysqli_query($conn,$query) ;

while($rows=mysqli_fetch_assoc($runquery)){
  
  $id=$rows['id'];
  $name=$rows['name'];
  $thumb=$rows['thumb'];
  
  ?>
     

   <?php

echo "<a href='watch.php?id=$id'>";
?>

      <img class='imagee link' src= "<?php echo $rows['thumb'];  ?>" alt=" " height="110" width="205">
     
      <?php
      echo "</a>";
      ?>
  <?php 

   echo  "<a class='link' href='watch.php?id=$id'>".substr($name,0,50). '...';"  </a>";
   
   ?>
   

<?php  
    //  echo "<div class='videobody'><a href='watch.php?id=$id'>".$name." "."</a></div>";
    
  }
  ?>
  </div>

<ul>
       <h2 class="name">VidVoo</h2>
    <li>
    <img class="logo" height="20" width="20" src="logo.jpg" alt="">
     </li>
    <!-- <li class="mennuu" ><a href="" class="mennu"><img class="menu" src="setup.png"  alt=""></a></li> -->
    <span style="font-size:30px;cursor:pointer" class="menu" onclick="openNav()">&#9776;</span>
  <!-- <li><a class="active" href="#home">Home</a></li> -->
  
  <li style="float:right" class="liCheckk"> <button class="liCheck" onclick=login()>Login </button> </li>
  <li class="hello">
		<h4>&nbsp;<?php echo  $_SESSION['name']; ?></h4>
</li>
  <li style="float:right" > <button class="liCheck" onclick=upload()>Upload </button> </li>
  <script>
  function upload(){
    window.location='uploadFolder.php';
  }
  </script>
  <!-- <li style="float:right" ><a href="#about">Uploads</a></li> -->
  <li class="search">
  <input type="text" placeholder="Search for any videos or images you need" name="q" id="search_keyword_top" value="" maxlength="250">
</li>
</ul>



<!-- <<<<<<<<<<<<<<<<<<<<<<<<<...................... Sign in..........................>>>>>>>>>>>>>>>>>>>>>>>>>> -->


<div class="login_form" id="sign-in-form">
<form action="" method="POST">
<div class="form-group">
    <label for="Email1">Email address</label>
    <input type="email" class="form-control"name="emailadress" id="Email1" aria-describedby="emailHelp" placeholder="Enter email">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="Password1">Password</label>
    <input type="password" class="form-control" name="password" id="Password1" placeholder="Password">
  </div>
  <button type="submit" name="login" id="login-button" class="btn btn-primary login-btn">Login</button><br>
  <small id="emailHelp" class="form-text text-muted">Don't have an account?</small>
  <button type="button"  id="signup-button" class="btn btn-primary sign-up "  onclick="signUp()" >Sign Up</button><br>
  <button type="button" id="login-button-Close" onclick="closeLogin()" class="btn btn-primary">Close</button>
</form>
 </div>


<!-- <<<<<<<<<<<<<<<<<<<<<<...................... Sign in..........................>>>>>>>>>>>>>>>>>>>>>>>>>> -->




 <div class="signup-form" id="signUp-form">
 <form action="" method="POSt" >
 <input type="hidden" name="otp" value="<?php echo $otp; ?>">
 <input type="hidden" name="active_code" value="<?php echo $active_code; ?>">
 <div class="form-group">
<label for="name">Name</label>
<input type="text" class="form-control" name="user-name" id="name" aria-describedby="emailHelp" placeholder="Enter Name" requires>
    
</div> <div class="form-group">
  <label for="exampleInputEmail1">Email address</label>
  <input type="email" class="form-control" name="user-email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required >
  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
 </div> 
 <div class="form-group">
   <label for="phoneNumber">Phone Number</label>
   <input type="text" class="form-control" name="phone" id="phoneNumber"  placeholder="Phone Number" required>
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Create Password</label>
    <input type="password" class="form-control" name="Cpassword" id="exampleInputEmail1"  placeholder="Password"required>
</div>
<div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" class="form-control" name="Ppassword" id="Password1" placeholder="Confirm Password" required>
</div>
  <button type="submit" id="signup-button" name="submit-signup" class="btn btn-primary signup-button" onclick="signup()" >Sign Up</button>
  <button type="button" id="button-Close" onclick="closeLogin()" class="btn btn-primary close-sign-up">Close</button>
</form>
	</div>

  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="videoSharing.php">Home</a>
  <a href="uploadFolder.php">Uploads</a>
  <!-- <a href="#">Clients</a>
  <a href="#">Contact</a> -->
</div>

<!-- <div id="main">
  <h2>Body</h2>



<div class="video-player">
  <video
            controls
            crossorigin
            playsinline
            data-poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg"
            id="player"
         control >
<source
              src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4"
              type="video/mp4"
              size="576"
            /> 
          
</div>

  
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
</div> -->

 <script>
   
document.getElementById("sign-in-form").style.display = "none";
document.getElementById("signUp-form").style.display = "none";

    
function login()
{
	
   
	document.getElementById("sign-in-form").style.display = "block";
	document.getElementById("signUp-form").style.display = "none";
}
function closeLogin()
{
	document.getElementById("sign-in-form").style.display = "none";
	document.getElementById("signUp-form").style.display = "none";

}
function signUp(){

  document.getElementById("sign-in-form").style.display = "none";
	document.getElementById("signUp-form").style.display = "block";


}
function openNav() {
  document.getElementById("mySidenav").style.width = "166px";
  document.getElementById("main").style.marginLeft = "166px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}


 </script>
</body>
</html>