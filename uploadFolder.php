<?php
 include ("myphp.php");

?>
<?php

if(isset($_POST["submit"])){ 
// print_r($_FILES);
$name=$_FILES["file1"]["name"];
$tmp_name=$_FILES["file1"]["tmp_name"];
$name1=$_FILES["file2"]["name"];
$tmp_name2=$_FILES["file2"]["tmp_name"];
// $folder="upload-images/".$name;
if(move_uploaded_file($tmp_name,$name) &&  move_uploaded_file($tmp_name2,$name1))
{
    $query="INSERT INTO video_table (name, thumb) VALUES ('$name', '$name1')";
    $runquery=mysqli_query($conn,$query) ;
    if($runquery)
    {
        
        echo "File Uploaded";
    }
    else{

        echo "failed to upload";
        echo("Error description: " . mysqli_error($conn));
    }

   
}

}

?>

<!DOCTYPE html>
<html>

<head>
  <title>upload video</title>
  <link rel="shortcut icon" type="image/png" href="favicon.png">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="video_Sharing.css">
  <script src="js/jquery-1.10.2.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.form.js"></script>
  <style>
    .container {
        border: 1px solid black;
    padding: 44px;
    margin-top: 8px;
    padding-top: 4px;
    width: 18%;
    text-align: center;
    margin-left: 31%;
    height: 57%;
    padding: 58px 110px;
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
  <li style="float:right" > <button class="liCheck" onclick="uploadFile()">Upload</button> </li>
  <script>
  function upload(){
    window.location='uploadFolder.php';
  }
  </script>
  <!-- <li style="float:right" ><a href="#about">Uploads</a></li> -->
  <!-- <li class="search">
  <input type="text" placeholder="Search for any videos or images you need" name="q" id="search_keyword_top" value="" maxlength="250">
</li> -->
</ul>

      <!-- <button class="btn"  onclick="uploadFile()">Upload Video</button> -->
  <div class="container" id="form-upload">
    <center>
      <h2>Upload Your Video</h2>
      
      <div >
      <form action="" id="upload_form" enctype="multipart/form-data" method="POST">
       
        <input type="file" name="file1" id="file"><br><br>
        <div class="form-group">
    <label for="file2">Add thumbnail</label>
    <input type="file" class="form-control" name="file2" id="file2"  required>
</div><br>
       
        <input type="submit" name="submit" value="Upload File" onclick="uploadfile()"><br>

      </form>
      </div>
    </center>
  </div>

</body>

<script>
    document.getElementById("form-upload").style.display = "none";
function uploadFile(){
    document.getElementById("form-upload").style.display = "block";
}
</script>
</html>