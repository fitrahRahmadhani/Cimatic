<?php
    include "connection.php";

    $id = $_POST["fid"];
    $judul = $_POST["fjudul"];
    $genre = $_POST["fgenre"];
    $ratingAge = $_POST["fratingAge"];
    $tglRilis = $_POST["ftglRilis"];
    $hrgSewa = $_POST["fhrgSewa"];
    $hrgBeli = $_POST["fhrgBeli"];
    $deskripsi = $_POST["fdeskripsi"];
    $link = $_POST["flinkFilm"];
    $img = $_POST["fimg"];

    $target_path = "directory/";

    $target_path = $target_path . basename(
        $_FILES['fimg']['name']);

    if(move_uploaded_file($_FILES['fimg']['tmp_name'],$target_path)) {
        $img = $target_path;
    }

    $query = "UPDATE film SET judul='$judul', genre='$genre', ratingAge='$ratingAge',
            tglRilis='$tglRilis', hrgSewa='$hrgSewa', hrgBeli='$hrgBeli', deskripsi='$deskripsi',
            link='$link', img='$img' WHERE id='$id'";

    if(mysqli_query($connect, $query)){
        header('Location:film.php');
    }else{
        echo "Failed to update data <br>" . mysqli_error($connect);
    }

    mysqli_close($connect);
?>