<!-- File ini digunakan untuk fitur "Add Article" atau menambah artikel baru. -->
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

<!-- Menampilkan halaman "Add Article" pada admin panel dalam bentuk form-form. -->
<div class="mainContainer">
    
    <!-- Memasukkan konten sidebar yang terdapat dalam file "sidebar.php" ke dalam halaman. -->
    <?php require "includes/sidebar.php" ?>
    <div class="allContainer">
        <div class="container jumbotron jumbotron-fluid col-md-6 bg-light my-4 p-4 text-center">
            <div class="container">
                <h1 class="display-4">Add Article</h1>
            </div>
        </div>
        <div class="container col-md-6 my-4">
            
            <!-- Membuat form untuk mengirimkan data artikel baru ke halaman "addarticle.php" -->
            <form class="row g-3" action="manage/addarticle.php" method="POST">
                
                <!-- Membuat form judul artikel. -->
                <div class="row-md-6">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" id="title">
                </div>

                <!-- Membuat form isi artikel. -->
                <div class="row-md-6">
                    <label for="content" class="form-label">Content</label>
                    <textarea type="text" name="content" class="form-control" id="content"></textarea>
                </div>

                <!-- Membuat form gambar artikel. -->
                <div class="col-md-6">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" class="form-control" id="image">
                </div>

                <!-- Buttom untuk submit. -->
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>


