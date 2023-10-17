<!DOCTYPE html>
<html lang="en">
<?php
    include 'components/header.php';
?>
<body>
    <?php
        include 'components/navbar.php';
    ?>
    <div class="container">
        <div class="row" style="margin-top: 130px; margin-bottom: 100px;">
            <div class="col-lg-12">
                <div class="card shadow">
                    <div class="card-body">
                        <table class="table">
                            <a href="tambah_products.php" class="btn btn-primary mb-3">Tambah</a>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Product</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- MENAMPILKAN DATA YG ADA PADA DATABASE KE DALAM TABLE DATA -->
                                <?php
                                    include 'koneksi/koneksi.php';
                                    $query = 'SELECT * FROM products';
                                    $result = mysqli_query($conn, $query);
                                    while($product = mysqli_fetch_array($result)){
                                ?>
                                <tr>
                                    <td><?= $product['id'] ?></td>
                                    <td><?= $product['nama'] ?></td>
                                    <td>
                                        <img src="img/<?= $product['img'] ?>" alt="" width="100px" height="100px">
                                    </td>
                                    <th>
                                        <a href="edit_products.php?id=<?= $product['id'] ?>" class="btn btn-warning btn-sm ml-2">Edit</a>
                                        <a href="handle_form/hapus_products.php?id=<?= $product['id'] ?>" onclick="return confirm('apakah anda yakin akan menghapus data ini')" class="btn btn-danger btn-sm">Hapus</a>
                                    </th>
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
<div class="fixed-bottom">
<?php
        include 'components/footer.php'
    ?>
    </div>
</html>