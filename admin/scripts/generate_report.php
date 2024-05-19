<!-- File ini digunakan untuk mengatur proses dalam menampilkan laporan penjualan (report.php). -->
<?php
require '../includes/conn.php';

// Membuat query untuk mengambil data order.
$query = 'SELECT orders.id, orders.order_date, orders.product_id, orders.status, orders.user_id, orders.order_amount, products.title, products.image, users.first_name, users.last_name FROM `orders`, `products`, `users` where orders.product_id=products.id and orders.user_id=users.id order by id';
$result = mysqli_query($conn, $query);

// Membuat fungsi untuk mencetak laporan.
function printReport($data) {
    echo "<table>
            <thead>
                <tr>
                    <th>Order Id</th>
                    <th>Order Date</th>
                    <th>Product Name</th>
                    <th>Product Id</th>
                    <th>Customer Name</th>
                    <th>Customer Id</th>
                    <th>Order Amount</th>
                    <th>Order Status</th>
                </tr>
            </thead>
            <tbody>";

    while ($row = mysqli_fetch_array($data)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['order_date'] . "</td>";
        echo "<td>" . $row['title'] . "</td>";
        echo "<td>" . $row['product_id'] ."</td>";
        echo "<td>" . $row['first_name'] ." " .$row['last_name']. "</td>";
        echo "<td>" . $row['user_id'] . "</td>";
        echo "<td>Rp " . $row['order_amount'] . "</td>";
        echo "<td>" . $row['status'] . "</td>";
        echo "</tr>";
    }

    echo "</tbody></table>";
}

// Mencetak laporan
echo "<h1>Report</h1>";
printReport($result);
?>

<!-- Tombol Print -->
<script>
    window.onload = function() {
        window.print();
    }
</script>
