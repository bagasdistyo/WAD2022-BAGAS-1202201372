        <?php

        include('..\config\connector.php');


        if (isset($_POST['submit'])){
            $id_mobil = rand();
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

            $query = mysqli_query($kon,"INSERT INTO modul3(id_mobil,nama_mobil,pemilik_mobil,merk_mobil,tanggal_beli,deskripsi,foto_mobil,status_pembayaran)  ('$id_mobil','$nama_mobil','$pemilik_mobil','$merk_mobil','$tanggal_beli','$deskripsi','$foto_mobil','$status_pembayaran')");

            if ($query){
                header('Location: ..\pages\ListCar-Bagas.php');
            }
        }
        ?>
        
