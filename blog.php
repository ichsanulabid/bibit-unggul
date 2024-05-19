<?php 
session_start();
require './includes/conn.php';
require "./includes/head.php" 
?>

<?php
$query = 'SELECT * FROM `artikel`';
$result = mysqli_query($con, $query);
$sum = 0;
while ($row = mysqli_fetch_array($result)) {
    $sum++;
}
?>

<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <h2>#read more</h2>
                        <p>Home <span>-</span> Blog</p>
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
                <div class="row align-items-center latest_product_inner justify-content-center">
                    <?php
                    $result = mysqli_query($con, $query);
                    $count = 0; // Variabel untuk menghitung jumlah kontainer pada setiap baris
                    while ($row = mysqli_fetch_array($result)) {
                        $content = $row['content'];
                        $content = substr($content, 0, 90); // Batasi 100 karakter untuk tampilan awal
                        echo '<div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="single_product_item mb-4">
                                    <a href="article.php?id='.$row['id'].'">
                                        <img width="1000px" src="img/'.$row['image'].'" alt="" />
                                    </a>
                                    <div class="single_product_text">
                                        <h4>'. $row['title'] .'</h4>
                                        <p>'. $content .'</p>
                                        <a href="article.php?id='.$row['id'].'" class="btn btn-primary">Read More</a>
                                    </div>
                                </div>
                            </div>';
                        
                        $count++;
                        if ($count % 3 == 0) {
                            echo '</div><div class="row align-items-center latest_product_inner justify-content-center">';
                        }
                    }
                    ?>
                </div>
            </div>  
        </div>
    </div>
</section>





<?php require "./includes/footer.php" ?>

<script src="js/jquery-1.12.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/masonry.pkgd.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/custom.js"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"7721ac2eee593390","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.3","si":100}' crossorigin="anonymous"></script>
</body>
</html>
