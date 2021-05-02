<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.plyr.io/3.6.7/plyr.css" />
    <link rel="stylesheet" href="video_Sharing.css">
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


    <title>watch video</title>
    <link rel="shortcut icon" type="image/png" href="favicon.png">
<style>

.player{
    width:50%;
    height:50%;
}
.name{
  font-family: 'Orelega One', cursive;
    position: absolute;
    margin-left: 635px;
    top: -14px;
    font-size: 29px;
    color: white;
    filter: drop-shadow(3px 5px 7px black);
}
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
ul{
  list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #3456B5;
    margin-top: -8px;
    height: 69px;
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

.image{
  position:absolute;
  margin-top: 68px;
  width: 15%;
    margin-left: 94px;
   height:100%;
    float: left;

	


}
.logo{
  margin-left: 586px;
    position: absolute;
    top: 15px;
    border-radius: 15px;
    width: 38px;
    height: 31px;
    filter: drop-shadow(1px 4px 6px black);



}
</style>

</head>
<body>
<ul>
       <h2 class="name">VidVoo</h2>
    <li>
    <img class="logo" height="20" width="20" src="logo.jpg" alt="">
     </li>
    <!-- <li class="mennuu" ><a href="" class="mennu"><img class="menu" src="setup.png"  alt=""></a></li> -->
    <span style="font-size:30px;cursor:pointer" class="menu" onclick="openNav()">&#9776;</span>
  <!-- <li><a class="active" href="#home">Home</a></li> -->
  
  <!-- <li style="float:right" class="liCheckk"> <button class="liCheck" onclick=login()>Login </button> </li> -->
  <li class="hello">
		<h4></h4>
</li>
  
 
  <!-- <li style="float:right" ><a href="#about">Uploads</a></li> -->
  <!-- <li class="search">
  <input type="text" placeholder="Search for any videos or images you need" name="q" id="search_keyword_top" value="" maxlength="250">
</li> -->
</ul>

</body>
</html>
<?php
 include ("myphp.php");

?>

<?php
if(isset($_GET["id"])){

$id=$_GET["id"];

$query="SELECT * FROM video_table WHERE id='$id'";
$runquery=mysqli_query($conn,$query) ;

while($rows=mysqli_fetch_assoc($runquery)){


$name=$rows['name'];

echo "<h4>$name</h4>"

?>
<div class="player">
<video
            controls
            crossorigin
            playsinline
            autoplay
            
            id="player"
         control >
<source
              src=" <?php echo $name; ?>"
              type="video/mp4"
              size="576"
            /> 
          
</div>
</div>


<?php






}}



?>