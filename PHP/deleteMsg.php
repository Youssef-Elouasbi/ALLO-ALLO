<?php
    include_once 'config.php';
    $idP = mysqli_real_escape_string($con, $_POST['idP']);
    if(isset($_POST['idP'])){
        $qry = mysqli_query($con, "DELETE from message where id = {$idP}");
    }
?>