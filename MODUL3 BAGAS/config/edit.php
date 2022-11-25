        <?php

        include('..\config\connector.php');


        if (isset($_GET['edit'])){
            $id_mobil =$_GET['id_mobil'];
            $nama_mobil=$_GET['nama_mobil'];
            $pemilik_mobil=$_GET['pemilik_mobil'];
            $merk_mobil=$_GET['merk_mobil'];
            $tanggal_beli=$_GET['tanggal_beli'];
            $deskripsi=$_GET['deskripsi'];

            $foto_mobil=$_FILES['foto_mobil']["name"];
            $temp = $_FILES["foto_mobil"]["tmp_name"];
            $folder = "../asset/image/" . $foto_mobil;
            move_uploaded_file($temp, '../asset/image/'.$foto_mobil);
            $status_pembayaran=$_GET['status_pembayaran'];

            $query = mysqli_query($kon,"UPDATE modul3  id_mobil='$id_mobil', nama_mobil='$nama_mobil', pemilik_mobil='$pemilik_mobil', merk_mobil='$merk_mobil', tanggal_beli='$tanggal_beli', deskripsi='$deskripsi', foto_mobil='$foto_mobil', status_pembayaran='$status_pembayaran' where id_mobil='id_mobil'");

            if ($query){
                header('Location: ..\pages\Edit-Bagas.php');
            } 
        }
        ?>
