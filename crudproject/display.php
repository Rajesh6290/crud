<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

 <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

</head>

<body>
    <section>
        <!--for demo wrap-->
        <h1>Database Details</h1><span style="background-color:blue ;color:white;text-align:center;"><a href="index.php"><button type="submit">MENU</button></a></span>
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>MOBILE_NO</th>
                        <th>BOOK_NAME</th>
                        <th>DESCRIPTION</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
                <tbody>
                    <?php
                    include 'connection.php';

                    $displayquery = "SELECT * FROM librarydata";
                    $query = mysqli_query($conn,$displayquery);
                    $num = mysqli_num_rows($query);
                    $result = mysqli_fetch_array($query);
                    $num=0;
                    while($result = mysqli_fetch_array($query)){
                        $num=$num+1;
                    ?>
                    <tr>
                        <td><?php echo $num   ?></td>
                        <td><?php echo $result['name']   ?></td>
                        <td><?php echo $result['email']   ?></td>
                        <td><?php echo $result['mobile']   ?></td>
                        <td><?php echo $result['title']   ?></td>
                        <td><?php echo $result['summery']   ?></td>
                        <td><a href="update.php?id=<?php echo $result['id']   ?>" data-toggle="tooltip" data-placement="top" title="update"><i class="fa-solid fa-pen-to-square style="color:red;"></i></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="delete.php?id=<?php echo $result['id']   ?>" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa-solid fa-trash" ></i></a></td>
                    </tr>
                    <?php
                    }
                    ?>
                    
                    
                    
                    
                    
                    
                </tbody>
            </table>
        </div>
    </section>


    <!-- follow me template -->
    <div class="made-with-love">
        Made with
        <i>♥</i> by
        <a target="_blank" href="https://codepen.io/nikhil8krishnan">Nikhil Krishnan</a>
    </div>

    <script>
        // '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
        $(window).on("load resize ", function () {
            var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
            $('.tbl-header').css({ 'padding-right': scrollWidth });
        }).resize();
    </script>
   <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
</body>

</html>