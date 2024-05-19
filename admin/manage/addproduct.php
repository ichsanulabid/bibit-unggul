<!-- File ini digunakan untuk mengatur penambahan product. -->
<?php require "../includes/conn.php" ?>

<!-- Disini akan diproses data yang dikirimkan melalui metode POST dari halaman formulir penambahan product (product.php) 
dan menyimpannya ke dalam tabel "products" pada database. -->

<?php
// Mendefinisikan variabel kosong yang akan digunakan untuk menyimpan nilai-nilai yang dikirimkan melalui formulir.
$title = $category = $qty = $price = $desc = $image = "";

// Memeriksa apakah permintaan HTTP adalah POST melalui $_SERVER["REQUEST_METHOD"]. Ini digunakan untuk memastikan bahwa 
// kode ini hanya dieksekusi saat formulir dikirimkan, bukan saat halaman diakses secara langsung.
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Mengambil nilai-nilai yang dikirimkan, yaitu nama, kategori, harga, stok, deskripsi, dan gambar produk.
    $title = $_POST['title'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];
    $desc = $_POST['desc'];
    $image = $_POST['image'];
}

// Menyisipkan data ke dalam tabel "products".
$query = "INSERT INTO `products`(`category`, `title`, `price`, `qty`, `desc`, `image`) VALUES ('$category','$title','$price','$qty','$desc','$image')";

// Memeriksa apakah eksekusi query berhasil dan menampilkan produk yang baru ditambahkan pada file "products.php".
if (mysqli_query($conn, $query)) {
    echo "inserted";
    header("Location: ../products.php");
}
?>