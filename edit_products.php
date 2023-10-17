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
                        <h4 class="text-center my-3">Form Edit Product</h4>
                        <form action="handle_form/edit_product.php" class="p-5" method="POST" enctype="multipart/form-data">
                            <?php
                                //  MENGAMBIL DATA SESUAI DENGAN ID YANG TELAH DIPILIH
                                include 'koneksi/koneksi.php';
                                $id = $_GET['id'];
                                $query = "SELECT * FROM products where id = $id";
                                $result = mysqli_query($conn, $query);
                                // MEMECAH ARRAY
                                while($product = mysqli_fetch_array($result)){
                            ?>
                            <label class="label" for="nama">Nama Product</label>
                            <input type="text" id="nama" name="nama" value="<?= $product['nama'] ?>" class="form-control">
                            <div class="input-group my-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="img" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile01" id='file-upload-filename'><?= $product['img'] ?></label>
                                </div>
                            </div>
                            <input type="hidden" name="id" value="<?= $product['id']; ?>">
                            <?php } ?>
                            <div class="mt-5">
                                <button type="submit" class="btn btn-success">Simpan</button>
                                <button type="reset" class="btn btn-danger">Hapus</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        include 'components/footer.php';
    ?>
</body>
<script>
    var input = document.getElementById( 'inputGroupFile01' );
var infoArea = document.getElementById( 'file-upload-filename' );

input.addEventListener( 'change', showFileName );

function showFileName( event ) {
  
  // the change event gives us the input it occurred in 
  var input = event.srcElement;
  
  // the input has an array of files in the `files` property, each one has a name that you can use. We're just using the name here.
  var fileName = input.files[0].name;
  
  // use fileName however fits your app best, i.e. add it into a div
  infoArea.textContent = fileName;
}
</script>
</html>