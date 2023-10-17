<!DOCTYPE html>
<html lang="en">
<?php
    include 'components/header.php';
?>
<body>
    <?php
        include 'components/navbar.php'
    ?>
    <div class="container mt-5 text-center">
        <div class="row" style="margin-top: 200px; margin-bottom: 100px;">
        <?php
                        include 'koneksi/koneksi.php';
                        $query = "SELECT * FROM products";
                        $result = mysqli_query($conn, $query);
                        while($product = mysqli_fetch_array($result)){
                    ?>
            <div class="col-lg-4 text-center">
                <div class="card shadow mt-3">
                    <div class="card-header">
                        <img src="img/<?= $product['img']; ?>" alt="" width="300px" height="300px">
                    </div>
                    <div class="card-body">
                        <h5><?= $product['nama']; ?></h5>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <?php
        include 'components/footer.php';
    ?>
</body>
</html>