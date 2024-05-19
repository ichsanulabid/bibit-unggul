<!-- File ini digunakan untuk fitur "All Users" atau lihat daftar user. -->
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

<!-- Menampilkan halaman "All Users" pada admin panel dalam bentuk tabel. -->
<div class="mainContainer">

    <!-- Memasukkan konten sidebar yang terdapat dalam file "sidebar.php" ke dalam halaman. -->
    <?php require "includes/sidebar.php" ?>
    <div class="allContainer">
        <div class="container jumbotron jumbotron-fluid col-md-6 bg-light my-4 p-4 text-center">
            <div class="container">
                <h1 class="display-4">All Customers</h1>
            </div>
        </div>
        <div class="container">
            <table class="table container">
                <thead>
                    <tr>
                        <th scope="col">User Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Contact Number</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php require "includes/conn.php" ?>
                    <?php

                    // Mengambil data dari tabel "users" dalam database.
                    $query = 'SELECT * FROM `users`';
                    $result = mysqli_query($conn, $query);

                    // Setiap baris data user ditampilkan dalam baris tabel yang sesuai.
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr><th>" . $row['id'] . "</th>";
                        echo "<th>" . $row['first_name'] . " " . $row['last_name'] ."</th>";
                        echo "<td>" . $row['mobile'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['address'] . "</td>";

                        // Membuat action "Delete" untuk menghapus user. Tautan tersebut mengarahkan ke skrip 
                        // "delete_script_user.php" dengan menyertakan ID user sebagai parameter.
                        echo "<td>
                            <a href='scripts/delete_script_user.php?id={$row['id']}'><button type='button' class='btn btn-danger'>Delete</button></a>
                        </td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>