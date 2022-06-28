<?php
    include "connection.php";

    $id = $_GET["id"];
    $query = "DELETE FROM film WHERE id=$id";

    if(mysqli_query($connect, $query)){
        header('Location:film.php');
    }else{
        echo "Failed to delete data <br>" . mysqli_error($connect);
    }

    mysqli_close();
?>