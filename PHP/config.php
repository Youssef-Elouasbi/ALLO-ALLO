<?php
    $con = mysqli_connect('localhost', 'root', '', 'allo');
    //$con = mysqli_connect('sql108.epizy.com', 'epiz_27728145', 'dnXKT6jrxS9RY', 'epiz_27728145_allo');
    //$con = mysqli_connect('localhost', 'id16444854_youssef_allo', 'yctcCXm=N1D8%?[w', 'id16444854_allo');
    if(!$con){
        echo 'error'.mysqli_connect_error();
    }
?>