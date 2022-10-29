<?php
include 'connection.php';


$idd =$_GET['id'];
$deletequery = "DELETE FROM `librarydata` WHERE id=$idd";
$deleteresult = mysqli_query($conn,$deletequery);
if($deleteresult){
    ?>
        <script>
            alert('Delete successfully !');
        </script>
    <?php
    header('location:display.php');

}else
{
    ?>
        <script>
            alert(' Failed');
        </script>
    <?php
}


?>