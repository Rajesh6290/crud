<?php
$servername = 'localhost';
$username = "root";
$password = "";
$db = 'library';

$conn = mysqli_connect($servername,$username,$password,$db);
if($conn){
    ?>
        <script>
            alert('Connection successfull');
        </script>
   <?php

}else
{
    ?>
        <script>
            alert('Connection Failed');
        </script>
   <?php
}



?>