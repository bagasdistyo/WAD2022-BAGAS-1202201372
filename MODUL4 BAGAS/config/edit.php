        <?php

        include('..\config\connector.php');

        $id_mobil = $_GET[("id_mobil")];
        $query = mysqli_query($kon, "SELECT * FROM modul3 WHERE id_mobil = $id_mobil");
        $hasil = mysqli_fetch_assoc($query);
        if (isset($_POST['edit'])){
            $id_mobil =$_POST['id_mobil'];
            $nama_mobil=$_POST['nama_mobil'];
            $pemilik_mobil=$_POST['pemilik_mobil'];
            $merk_mobil=$_POST['merk_mobil'];
            $tanggal_beli=$_POST['tanggal_beli'];
            $deskripsi=$_POST['deskripsi'];

            $foto_mobil=$_FILES['foto_mobil']["name"];
            $temp = $_FILES["foto_mobil"]["tmp_name"];
            $folder = "../asset/image/" . $foto_mobil;
            move_uploaded_file($temp, '../asset/image/'.$foto_mobil);
            $status_pembayaran=$_POST['status_pembayaran'];

            $query = mysqli_query($kon,"UPDATE modul3 SET id_mobil='$id_mobil', nama_mobil='$nama_mobil', pemilik_mobil='$pemilik_mobil', merk_mobil='$merk_mobil', tanggal_beli='$tanggal_beli', deskripsi='$deskripsi', foto_mobil='$foto_mobil', status_pembayaran='$status_pembayaran' WHERE id_mobil='$id_mobil'");

            if ($query){
                header('Location: ..\pages\Detail-Bagas.php?id_mobil='.$hasil['id_mobil']);
            } 
        }
        ?>


