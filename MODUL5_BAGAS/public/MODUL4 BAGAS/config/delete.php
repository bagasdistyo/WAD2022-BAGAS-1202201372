        <?php
        include ('..\config\connector.php');

        $id_mobil=$_GET['id_mobil'];
        $query="DELETE FROM showroom_bagas_table WHERE id_mobil=$id_mobil";
        mysqli_query($con, $query);
        if ($query){
            header('Location: ..\pages\ListCar-Bagas.php');
        }


        ?>