<!-- File ini digunakan untuk fitur "Order Status" untuk memproses pesanan customer. -->
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

<!-- Menampilkan halaman "Order Status" pada admin panel dalam bentuk tabel. -->
<div class="mainContainer">

    <!-- Memasukkan konten sidebar yang terdapat dalam file "sidebar.php" ke dalam halaman. -->
    <?php require "includes/sidebar.php" ?>
    <div class="allContainer">
        <div class="container jumbotron jumbotron-fluid col-md-6 bg-light my-4 p-4 text-center">
            <div class="container">
                <h1 class="display-4">Order Status</h1>
            </div>
        </div>
        <div class="container">
            <table class="table container">
                <thead>
                    <tr>
                        <th scope="col">Order Id</th>
                        <th scope="col">Order Date</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Product Id</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Customer Id</th>
                        <th scope="col">Order Amount</th>
                        <th scope="col">Address</th>
                        <th scope="col">Payment Proof</th>
                        <th scope="col">Order Status</th>
                        <th scope="col" colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php require "includes/conn.php" ?>
                    <?php

                    // Mengeksekusi query SQL dengan mengambil data dari tabel orders, products, dan users dengan menggunakan 
                    // beberapa kolom yang spesifik. Data yang diambil antara lain id pesanan, tanggal pesanan, id produk, 
                    // status pesanan, id pengguna, jumlah pesanan, metode pembayaran, judul produk, gambar produk, nama depan 
                    // pengguna, nama belakang pengguna, dan alamat pengguna. Hasil query disimpan dalam variabel $result.
                    $query = 'SELECT orders.id, orders.order_date, orders.product_id, orders.status, orders.user_id, orders.order_amount, orders.payment, products.title, products.image, users.first_name, users.last_name, users.address FROM `orders`, `products`, `users` where orders.product_id=products.id and orders.user_id=users.id order by id';
                    $result = mysqli_query($conn, $query);

                    // Setiap baris data pesanan ditampilkan dalam baris tabel yang sesuai.
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<th>" . $row['id'] . "</th>";
                        echo "<th>" . $row['order_date'] . "</th>";
                        echo "<th>" . $row['title'] . "</th>";
                        echo "<td><img class='adminimg' src='../img/product/" . $row['image'] . "' /></td>";
                        echo "<td>" . $row['product_id'] ."</td>";
                        echo "<td>" . $row['first_name'] ." " .$row['last_name']. "</td>";
                        echo "<td>" . $row['user_id'] . "</td>";
                        echo "<td>Rp " . $row['order_amount'] . "</td>";
                        echo "<td>" . $row['address'] . "</td>";
                        echo "<td><img class='adminimg' src='../img/" . $row['payment'] . "' /></td>";
                        echo "<td>" . $row['status'] . "</td>";
                        
                        // Menampilkan tiga tombol aksi ("Shipped", "Delivered", dan "Cancel") pada setiap baris pesanan 
                        // dalam tabel yang dihasilkan. 

                        // Tombol "Shipped": Ketika tombol ini diklik, tautan akan mengarahkan ke skrip "order_shipped.php" 
                        // dengan menyertakan parameter ID pesanan. Tujuan utama dari skrip ini mungkin untuk menandai pesanan 
                        // sebagai "Shipped" atau dikirim.

                        // Tombol "Delivered": Ketika tombol ini diklik, tautan akan mengarahkan ke skrip "order_delivered.php" 
                        // dengan menyertakan parameter ID pesanan. Skrip ini mungkin bertujuan untuk mengkonfirmasi bahwa pesanan 
                        // telah diterima atau "Delivered".

                        // Tombol "Cancel": Ketika tombol ini diklik, tautan akan mengarahkan ke skrip "order_deleted.php" 
                        // dengan menyertakan parameter ID pesanan. Skrip ini mungkin bertujuan untuk membatalkan pesanan tersebut.
                        echo "<td colspan='2'>
                                <a href='scripts/order_shipped.php?id=".$row['id']."'><button class='btn btn-success'>Shipped</button></a>
                                <a href='scripts/order_delivered.php?id=".$row['id']."'><button class='btn btn-secondary'>Delivered</button></a>
                                <a href='scripts/order_deleted.php?id=".$row['id']."'><button class='btn btn-danger'>Cancel</button></a>
                            </td>";
                        echo "</tr>";
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