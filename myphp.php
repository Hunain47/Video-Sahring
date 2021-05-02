

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "video_sharing";

$conn=mysqli_connect($servername, $username, $password, $dbname);

if($conn)
{

    echo "";
}
 else
{

    echo "Connection Error";
}

?>