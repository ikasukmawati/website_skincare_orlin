<?php
    include '../koneksi/koneksi.php';
    $nama = $_POST['nama'];
    $gambar = $_FILES['img']['name'];

    if($gambar != ""){
        $format = array('png', 'jpg');
        $x = explode('.', $gambar);
        $extensi = strtolower(end($x));
        $file_temp = $_FILES['img']['tmp_name'];
        $angka_nama = rand(1, 999);
        $nama_gambar = $angka_nama.'-'.$gambar;
        if(in_array($extensi, $format) === true){
            move_uploaded_file($file_temp, '../img/'.$nama_gambar);
            $query = "INSERT INTO products (nama, img) VALUES ('$nama', '$nama_gambar')";
            $result = mysqli_query($conn, $query);

            if(!$result){
                die("query gagal atau salah: ".mysqli_errno($conn)).
                " - ".mysqli_error($conn);
            }else{
                echo "<script>alert('Data Berhasil ditambah');window.location='../manage_products.php';</script>";
            }
        }else{
            echo "<script>alert('pastikan jenis gambar yg diupload benar');window.location='../tambah_products.php';</script>";
        }
    }else{
        echo "<script>alert('harus ada gambar yg diupload');window.location='../tambah_products.php';</script>";
    }
?>