<?php 
session_start();
require './includes/conn.php';
require "./includes/head.php"; 
?>

<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <h2>#let's talk</h2>
                        <p>Home <span>-</span> About</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about-head" class="section-p1" style="display: flex; align-items: center;">
    <img src="img/Logo1.png" alt="" style="width: 50%; height: auto;">
    <div style="padding-left: 40px;">
        <h2>Who We Are?</h2>
        <p style="text-align: justify;">
            Website jual beli bibit unggul ini adalah sebuah e-commerce berbasis website yang bertujuan untuk 
            membantu masyarakat yang mengalami kesulitan dalam menemukan tempat terpercaya untuk membeli bibit. Web ini memliki 
            fitur knowledge (pengetahuan) yang berfungsi untuk menampilkan informasi-informasi terkait bibit atau tanaman dan juga 
            cara perawatannya sehingga konsumen akan mendapatkan wawasan terkait bibit dan tanaman tersebut.</p>
        <p style="padding: top 3%;" tittle="">Enjoy and Happy Shopping!!!</p>
    </div>
</section>

<section id="contact-details" class="section-p1" style="display: flex; align-items: center; justify-content: space-between; padding: 40px 60px; gap: 45px;">
    <div class="details" style="width: 40;">
        <span style="font-size: 12px;">GET IN TOUCH </span>
        <h2 style="font-size: 26px; font-weight: 800; line-height: 36px; padding: 20px 0;"> Come Visit Our Agriculture Corner</h2>
        <div>
            <li style="list-style: none; display: flex; padding: 10px 0;">
                <i class='bx bxs-map' style="font-size: 14px; padding-right: 22px;"></i>
                <p style="margin: 0px; font-size: 14px;">Soekarno-Hatta 8th Street, Lombok Indonesia</p>
            </li>
            <li style="list-style: none; display: flex; padding: 10px 0;">
                <i class='bx bxl-gmail' style="font-size: 14px; padding-right: 22px;"></i>
                <p style="margin: 0px; font-size: 14px;">bibit.unggul@gmail.com</p>
            </li>
            <li style="list-style: none; display: flex; padding: 10px 0;">
                <i class='bx bxs-phone' style="font-size: 14px; padding-right: 22px;"></i>
                <p style="margin: 0px; font-size: 14px;">+62-819-9777-2333</p>
            </li>
            <li style="list-style: none; display: flex; padding: 10px 0;">
                <i class='bx bxs-time-five' style="font-size: 14px; padding-right: 22px;"></i>
                <p style="margin: 0px; font-size: 14px;">Monday to Friday 9:00am to 16:00pm</p>
            </li>
        </div>
    </div>
    <div class="map" style="width: 55%; height: 400px;">
        <iframe style="width: 100%; height: 100%;"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.056898103364!2d116.12222487488!3d-8.686139491362127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdbc72b2891b69%3A0xd1a749d2aab48dd1!2sJl.%20Soekarno%20-%20Hatta%20No.8%2C%20Gerung%20Utara%2C%20Kec.%20Gerung%2C%20Kabupaten%20Lombok%20Barat%2C%20Nusa%20Tenggara%20Bar.%2083363!5e0!3m2!1sid!2sid!4v1684381962312!5m2!1sid!2sid"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</section>

<section id="form-details" class="section-p1">
    <div class="people">
        <h2 style="padding-bottom: 5%;"> Meet Our Team </h2>
        <div style="display: flex;">
            <img src="img/Mei1.jpg" alt="" style="padding-bottom: 3%;"/>
            <p style="padding-left: 5%;">
                <span><br>MEI SUKRIANI</span><br/> Phone : 0823-4005-0936<br/> Email : mei.sukriani@gmail.com
            </p>
        </div>
        <div style="display: flex;">
            <img src="img/Abid1.jpg" alt="" style="padding-bottom: 3%;"/>
            <p style="padding-left: 5%;">
                <span><br>ICHSANUL ABID</span><br /> Phone : 0819-9777-2333<br/> Email : ichsanul.abid@gmail.com
            </p>
        </div>
        <div style="display: flex;">
            <img src="img/Fiqar1.jpg" alt="" style="padding-bottom: 3%;"/>
            <p style="padding-left: 5%;">
                <span><br>MUHAMMAD DZULFIQAR RIZKY AZHARY</span><br /> Phone : 0818-0520-5111<br /> Email : dzulfiqar.rizky@gmail.com
            </p>
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
