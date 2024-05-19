<?php
session_start();
require './includes/conn.php';
require "./includes/head.php";

// Memeriksa apakah parameter ID artikel diterima
if (isset($_GET['id'])) {
    $articleId = $_GET['id'];

    // Mengeksekusi query untuk mendapatkan artikel dengan ID yang sesuai
    $query = "SELECT * FROM `artikel` WHERE id = '$articleId'";
    $result = mysqli_query($con, $query);

    // Memeriksa apakah artikel ditemukan
    if (mysqli_num_rows($result) > 0) {
        $article = mysqli_fetch_assoc($result);
        ?>
        <section class="breadcrumb breadcrumb_bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="breadcrumb_iner">
                            <div class="breadcrumb_iner_item">
                                <h2>#article</h2>
                                <p>Home <span>-</span> Blog <span>-</span> Article</p>
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
                                        <h2><?php echo $article['title']; ?></h2>
                                        <br>
                                        <img width="1000px" src="img/<?php echo $article['image']; ?>" alt="" />
                                        <br><br>
                                        <p><?php echo $article['content']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="blog.php" class="btn btn-primary">Back to Blog</a>
            </div>
        </section>

        <?php
    } else {
        echo "Article not found.";
    }
} else {
    echo "Invalid request.";
}

require "./includes/footer.php";
?>
