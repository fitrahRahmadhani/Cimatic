<?php
    include "connection.php";

    $target_path = "directory/";

    $target_path = $target_path . basename(
        $_FILES['img']['name']);

    if(move_uploaded_file($_FILES['img']['tmp_name'],$target_path)) {
        $img = $target_path;
    }

    $judul = $_POST["judul"];
    $genre = $_POST["genre"];
    $ratingAge = $_POST["ratingAge"];
    $tglRilis = $_POST["tglRilis"];
    $hrgSewa = $_POST["hrgSewa"];
    $hrgBeli = $_POST["hrgBeli"];
    $img = $_POST["img"];
    $deskripsi = $_POST["deskripsi"];
    $link = $_POST["linkFilm"];

    $query = "INSERT INTO film(judul, genre, ratingAge, tglRilis, hrgSewa, hrgBeli, img, deskripsi, link)
                VALUE('$judul', '$genre', '$ratingAge', '$tglRilis', '$hrgSewa', '$hrgBeli', '$img',
                '$deskripsi', '$link')";

    if (mysqli_query($connect, $query)) {
        header("Location:homeCRUD.html");
    } else {
        echo "New film's data is failed to added <br>" . mysqli_error($connect);
    }
    
?>