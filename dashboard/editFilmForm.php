<html>
    <head>
        <title>Edit Film Form</title>
    </head>
    <body>
        <?php
            include "connection.php";
            $id = $_GET['id'];
            $query = "SELECT * FROM film WHERE id=$id";
            $result = mysqli_query($connect, $query);
        ?>

        <form action="editFilmProcess.php" method="post" enctype="multipart/form-data">
            <table>
                <?php
                    while($row=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td> ID : </td>
                    <td><input type="text" name="fid" value="<?php echo $row['id'];?>"readonly></td>
                </tr>
                <tr>
                    <td> Judul : </td>
                    <td><input type="text" name="fjudul" value="<?php echo $row['judul'];?>"></td>
                </tr>
                <tr>
                    <td>Genre : </td>
                    <td><input type="text" name="fgenre" value="<?php echo $row['genre'];?>"></td>
                </tr>
                <tr>
                    <td>Rating age : </td>
                    <td><input type="number" name="fratingAge" value="<?php echo $row['ratingAge'];?>"></td>
                </tr>
                <tr>
                    <td>Tanggal rilis : </td>
                    <td><input type="date" name="ftglRilis" value="<?php echo $row['tglRilis'];?>"></td>
                </tr>
                <tr>
                    <td>Harga sewa : </td>
                    <td><input type="number" name="fhrgSewa" value="<?php echo $row['hrgSewa'];?>"></td>
                </tr>
                <tr>
                    <td>Harga beli : </td>
                    <td><input type="number" name="fhrgBeli" value="<?php echo $row['hrgBeli'];?>"></td>
                </tr>
                <tr>
                    <td>Deskripsi : </td>
                    <td>
                        <textarea name="fdeskripsi" cols="30" rows="10"><?php echo $row['deskripsi'];?></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Link : </td>
                    <td><input type="url" name="flinkFilm" value="<?php echo $row['link'];?>"></td>
                </tr>
                <tr>
                    <td>Image poster : </td>
                    <td><input type="file" name="fimg" width="300" length="400"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="save" value="save"></td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </form>
    </body>
</html>