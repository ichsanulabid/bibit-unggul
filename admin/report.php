<!-- File ini digunakan untuk fitur "Report" atau laporan penjualan. -->
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

<!-- Menampilkan halaman "Report" pada admin panel. -->
<div class="mainContainer">

    <!-- Memasukkan konten sidebar yang terdapat dalam file "sidebar.php" ke dalam halaman. -->
    <?php require "includes/sidebar.php" ?>
    <div class="allContainer">
        <div class="container jumbotron jumbotron-fluid col-md-6 bg-light my-4 p-4 text-center">
            <div class="container">
                <h1 class="display-4">Report</h1>
            </div>
        </div>
        <div class="container">

            <!-- Membuat formulir filter report berdasarkan bulan. Saat pengguna memilih bulan dan mengklik tombol "Filter", 
            formulir akan melakukan pengiriman metode GET ke halaman yang sama dengan parameter bulan yang dipilih 
            sebagai nilai.-->
            <form method="GET" action="">
                <div class="mb-3 row">
                    <label for="month" class="col-sm-2 col-form-label">Filter by Month:</label>
                    <div class="col-sm-4">
                        <select class="form-select" name="month" id="month">
                            <option value="">All Months</option>
                            <option value="01">January</option>
                            <option value="02">February</option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                    </div>
                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-primary">Filter</button>
                    </div>
                </div>
            </form>

            <table class="table container">
                <thead>
                    <tr>
                        <th scope="col">Order Id</th>
                        <th scope="col">Order Date</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Product Id</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Customer Id</th>
                        <th scope="col">Address</th>
                        <th scope="col">Order Amount</th>
                        <th scope="col">Order Status</th>
                    </tr>
                </thead>
                <tbody>

                    <!-- Menampilkan data pesanan (orders) dengan kemampuan untuk melakukan filter berdasarkan bulan dan 
                    menghasilkan laporan cetak. -->
                    <?php
                    $whereClause = "";

                    // Melakukan pengecekan terhadap parameter GET month untuk memeriksa apakah pengguna telah memilih 
                    // bulan tertentu sebagai filter. Jika parameter month ada dan tidak kosong, maka dibuat klausa WHERE 
                    // dalam query SQL untuk memfilter data pesanan berdasarkan bulan yang dipilih.
                    if (isset($_GET['month']) && $_GET['month'] != '') {
                        $month = $_GET['month'];
                        $whereClause = "WHERE MONTH(orders.order_date) = '$month'";
                    }

                    // Setelah itu, query SQL dieksekusi dengan menggunakan INNER JOIN untuk menggabungkan tabel orders, 
                    // products, dan users agar data yang relevan dari masing-masing tabel dapat ditampilkan. Klausa WHERE 
                    // yang dibuat sebelumnya juga dimasukkan ke dalam query untuk membatasi data berdasarkan bulan yang dipilih.
                    $query = "SELECT orders.id, orders.order_date, orders.product_id, orders.status, orders.user_id, orders.order_amount, products.title, users.first_name, users.last_name, users.address 
                              FROM orders
                              INNER JOIN products ON orders.product_id = products.id
                              INNER JOIN users ON orders.user_id = users.id
                              $whereClause 
                              ORDER BY orders.id";

                    // Menyimpan hasil query.
                    $result = mysqli_query($conn, $query);

                    // Selanjutnya, data hasil query akan diiterasi menggunakan perulangan while, dan setiap baris data akan 
                    // ditampilkan dalam elemen-elemen <td> yang sesuai dalam tabel. Informasi seperti ID pesanan, tanggal pesanan, 
                    // judul produk, ID produk, nama pengguna, alamat, jumlah pesanan, dan status akan ditampilkan.
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['order_date'] . "</td>";
                        echo "<td>" . $row['title'] . "</td>";
                        echo "<td>" . $row['product_id'] . "</td>";
                        echo "<td>" . $row['first_name'] . " " . $row['last_name'] . "</td>";
                        echo "<td>" . $row['user_id'] . "</td>";
                        echo "<td>" . $row['address'] . "</td>";
                        echo "<td>Rp " . $row['order_amount'] . "</td>";
                        echo "<td>" . $row['status'] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>

            <!-- Membuat tautan "Print" yang mengarah ke skrip generate_report.php. Tautan ini memungkinkan pengguna untuk 
            mencetak laporan dari data pesanan yang ditampilkan. -->
            <div class="text-center mt-4">
                <a href="scripts/generate_report.php" class="btn btn-secondary">Print</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>
