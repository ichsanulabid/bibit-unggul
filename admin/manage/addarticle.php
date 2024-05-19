<!-- File ini digunakan untuk mengatur penambahan artikel. -->
<?php
require "../includes/conn.php";

// Disini akan diproses data yang dikirimkan melalui metode POST dari halaman formulir penambahan artikel (articles.php) 
// dan menyimpannya ke dalam tabel "artikel" pada database.

// Memeriksa apakah permintaan HTTP adalah POST melalui $_SERVER["REQUEST_METHOD"]. Ini digunakan untuk memastikan bahwa 
// kode ini hanya dieksekusi saat formulir dikirimkan, bukan saat halaman diakses secara langsung.
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    
    // Mengambil nilai-nilai yang dikirimkan, yaitu judul, isi, dan gambar artikel.
    $title = $_POST["title"];
    $content = $_POST["content"];
    $image = $_POST["image"];

    // Menyisipkan data ke dalam tabel "artikel".
    $query = "INSERT INTO artikel (title, content, image) VALUES (?, ?, ?)";

    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "sss", $title, $content, $image);

    if (mysqli_stmt_execute($stmt)) {
        echo "Inserted";
        header("Location: ../articles.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>
