<!DOCTYPE html>
<html lang="en">
<?php
    include 'components/header.php';
?>
<body>
    <div class="container">
    <!-- MEMBUAT NAVBAR DENGAN BOOTSTRAP 4 -->
        <?php
            include 'components/navbar.php';
        ?>
    </div>
    <!-- MEMBUAT ISI KONTENT HOME -->
    <div class="container mt-5">
        <div class="row"  style="margin-top: 130px; margin-bottom: 100px;">
            <div class="col-lg-6 align-self-center">
                <h1>Welcome</h1>
                <h6 class="mt-3">Produk kami sangat terpercaya dan hasilnya tidak akan mengecewakan anda semua, untuk detail product bisa dilihat di tomboh dibawah ini</h6>
                <a href="products.php" class="btn btn-primary mt-3">Lihat Products</a>
            </div>
            <img src="img/1.png" alt="">
        </div>
    </div>
    <div class="p-4 text-center text-white bg-dark mb-4">
        <h1 class="text-center my-2">Deskripsi Produk</h1>
        <p class="my-5 p-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet atque, culpa facere voluptatem rem recusandae fuga ullam tenetur sit natus cupiditate expedita, repellendus dolorum suscipit officiis repudiandae, voluptatibus magni cumque excepturi iste quos blanditiis ratione consequuntur. Expedita eaque sed rem!</p>
    </div>
    <h1 class="text-center mb-5">Products</h1>
    <div class="container my-5">
        <div class="row text-center">
            <div class="col-lg-4">
                <div class="card shadow mb-5">
                    <div class="card-header">
                        <img src="img/2.jpg" alt="" style="width: 300px;">
                    </div>
                    <div class="card-body">
                        <h5>Paket Acne Glowwing</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card shadow mb-5">
                    <div class="card-header">
                        <img src="img/4.jpg" alt="" style="width: 300px;">
                    </div>
                    <div class="card-body">
                        <h5>Paket Flek Platinum</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card shadow mb-5">
                    <div class="card-header">
                        <img src="img/6.jpg" alt="" style="width: 300px;">
                    </div>
                    <div class="card-body">
                        <h5>Night Cream Flek Platinum</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="p-5 my-5 text-center bg-dark text-white">
        <h1 class="mb-5">Price List</h1>
        <img src="img/3.jpg" alt="" width="400px">
    </div>
    <h1 class="text-center mb-5" style="margin-bottom: 100px;">Legal</h1>
    <div class="container text-center mt-5">
        <img src="img/bpom.png" alt="" width="200px">
    </div>
    <?php
        include 'components/footer.php';
    ?>
</body>
</html>