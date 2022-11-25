        <?php
        include ('..\config\connector.php');

        $id_mobil=$_GET['id_mobil'];
        $query="DELETE FROM modul3 WHERE id_mobil=$id_mobil";
        mysqli_query($kon, $query);
        if ($query){
            header('Location: ..\pages\ListCar-Bagas.php');
        }


        ?>