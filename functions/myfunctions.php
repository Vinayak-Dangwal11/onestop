<?php


include('config/dbcon.php');
function getAll($table)
{
    global $con;
    $query= "SELECT *FROM $table";
    return $query_run= mysqli_query($con, $query);
}

function redirect($url, $message){
    $_SESSION['message']=$message;
    header('Location: '.$url);
    exit();
}

function getIDActive($table, $id){
    global $con;
    $query= "SELECT * FROM $table WHERE id='$id'";
    return $query_run=mysqli_query($con, $query);
}

function getSlugActive($table, $slug){
    global $con;
    $query= "SELECT * FROM $table WHERE slug='$slug'";
    return $query_run=mysqli_query($con, $query);
}






