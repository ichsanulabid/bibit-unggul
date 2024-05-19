<!-- File ini digunakan untuk fitur "Add Product" atau menambah product baru. -->
<?php
require 'includes/conn.php';

session_start();

// Memeriksa apakah sesi admin (admin_email) telah diinisialisasi, yaitu admin telah melakukan login sebelumnya.
if (!isset($_SESSION['admin_email'])) {

    // Jika sesi admin tidak ada (belum login), maka kode akan mengarahkan pengguna ke halaman login dengan menggunakan 
    // JavaScript redirect ke halaman login. 
    echo "<script> location.href='/bibit_unggul/admin/login.php'; </script>";
    exit();
}

// Jika sesi admin ada (sudah login), maka kode akan melanjutkan eksekusi dan melanjutkan ke baris selanjutnya.
require "includes/header.php";
?>

<!-- Menampilkan halaman "Add Product" pada admin panel dalam bentuk form-form. -->
<div class="mainContainer">

    <!-- Memasukkan konten sidebar yang terdapat dalam file "sidebar.php" ke dalam halaman. -->
    <?php require "includes/sidebar.php" ?>
    <div class="allContainer">
        <div class="container jumbotron jumbotron-fluid col-md-6 bg-light my-4 p-4 text-center">
            <div class="container">
                <h1 class="display-4">Add Product</h1>
            </div>
        </div>
        <div class="container col-md-6 my-4">

            <!-- Membuat form untuk mengirimkan data product baru ke halaman "addproduct.php" -->
            <form class="row g-3" action="manage/addproduct.php" method="POST">
                
                <!-- Membuat form nama product. -->
                <div class="col-md-6">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" id="title">
                </div>

                <!-- Membuat form kategori product. -->
                <div class="form-group col-md-6">
                    <label for="category">Category</label>
                    <select id="category" name="category" class="form-control my-2">
                        <option selected>Select a category</option>
                        <option value="Seeds">Seeds</option>
                        <option value="Plants">Plants</option>
                    </select>
                </div>

                <!-- Membuat form harga product. -->
                <div class="col-md-6">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" name="price" class="form-control" id="price">
                </div>

                <!-- Membuat form stok product. -->
                <div class="col-md-6">
                    <label for="qty" class="form-label">Quantity</label>
                    <input type="number" name="qty" class="form-control" id="qty">
                </div>

                <!-- Membuat form gambar product. -->
                <div class="col-md-6">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" class="form-control" id="image">
                </div>

                <!-- Membuat form deskripsi product. -->
                <div class="col-md-6">
                    <label for="desc" class="form-label">Description</label>
                    <input type="text" name="desc" class="form-control" id="desc">
                </div>

                <!-- Button untuk submit. -->
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>