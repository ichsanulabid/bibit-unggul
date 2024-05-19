<?php
require './includes/is_added_to_cart.php';
session_start();
require './includes/conn.php';
require "./includes/head.php";

// Memeriksa apakah parameter ID artikel diterima
if (isset($_GET['id'])) {
    $Id_product = $_GET['id'];

    // Mengeksekusi query untuk mendapatkan artikel dengan ID yang sesuai
    $query = "SELECT * FROM `products` WHERE id = '$Id_product'";
    $result = mysqli_query($con, $query);

    // Memeriksa apakah artikel ditemukan
    if (mysqli_num_rows($result) > 0) {
        $product = mysqli_fetch_assoc($result);
        ?>
        <section class="breadcrumb breadcrumb_bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="breadcrumb_iner">
                            <div class="breadcrumb_iner_item">
                                <h2>#product</h2>
                                <p>Home <span>-</span> Category <span>-</span> Product</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="cat_product_area section_padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="row align-items-center latest_product_inner">
                            <div class="col-lg-12">
                                <div class="single_product_item">
                                    <div class="single_product_text">
                                        <h2><?php echo $product['title']; ?></h2>
                                        <br>
                                        <img width="500px" src="img/product/<?php echo $product['image']; ?>" alt="" />
                                        <br><br>
                                        <p><?php echo $product['desc']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="category.php" class="btn btn-primary">Back to Product List</a>
            </div>
        </section>

        <?php
    } else {
        echo "Product not found.";
    }
} else {
    echo "Invalid request.";
}

require "./includes/footer.php";
?>
