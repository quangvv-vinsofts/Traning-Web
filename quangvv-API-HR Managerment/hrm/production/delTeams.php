<?php
include ('connect.php');
if(isset($_GET['id']))
{
    $id = $_GET['id'];

    $sql =  "DELETE FROM `teams` WHERE id=$id";
    mysqli_query($conn,$sql);
    unlink("$link");
    $url = 'http://localhost/hrm/production';
    echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
}
?>