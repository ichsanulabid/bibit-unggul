<?php
session_start();
require './includes/head.php';
require './includes/conn.php';
require './includes/is_added_to_cart.php';
?>

<section class="banner_part">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12">
				<div class="banner_slider owl-carousel">
					<div class="single_banner_slider">
						<div class="row">
							<div class="col-lg-5 col-md-8">
								<div class="banner_text">
									<div class="banner_text_iner">
										<h1>Delivering Plants, Delivering Happiness</h1>
										<p>
											Bring freshness to your garden 
											by buying high quality of plants here.
										</p>
										<a href="category.php" class="btn_2">Buy now</a>
									</div>
								</div>
							</div>
							<div class="banner_img d-none d-lg-block">
								<img src="img/banner.png" alt="" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="services" id="services">
	<div class="services-text">
		<h1 style="text-align: center; font-size: 40px; font-weight: 650; line-height: 1.1;">What will you get <br> by shopping here!</h1>
	</div>
	<div class="row-items" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, auto)); grid-gap: 2rem; align-items: center; text-align: center; margin-top: 5rem;">
		<div class="service-box" style="background: #fff; border: 2px solid #f0eded; padding: 50px 10px; border-radius: 4px; transition: all 1s ease 0s; cursor: pointer;">
			<div class="service-img">
				<img src="img/bx-leaf.svg" style="padding-bottom: 5%; width: 80px; height: 80px;">
			</div>
			<h4 style="font-weight: 800">Exceptional Quality</h4>
			<span style="text-align: center; color: #1c7a4b;">Our seedlings are carefully <br> nurtured using advanced <br> cultivation techniques, <br> resulting in strong and <br> disease-resistant plants.</span>
		</div>
		<div class="service-box" style="background: #fff; border: 2px solid #f0eded; padding: 50px 10px; border-radius: 4px; transition: all 1s ease 0s; cursor: pointer;">
			<div class="service-img">
				<img src="img/bxs-sun.svg" style="padding-bottom: 5%; width: 80px; height: 80px;">
			</div>
			<h4 style="font-weight: 800">Sustainibility</h4>
			<span style="text-align: center; color: #1c7a4b;">Our seedlings are grown <br> using environmentally friendly <br> practices, ensuring that you <br> contribute to a greener and <br> more sustainable future.</span>
		</div>
		<div class="service-box" style="background: #fff; border: 2px solid #f0eded; padding: 50px 10px; border-radius: 4px; transition: all 1s ease 0s; cursor: pointer;">
			<div class="service-img">
				<img src="img/bx-lemon.svg" style="padding-bottom: 5%; width: 80px; height: 80px;">
			</div>
			<h4 style="font-weight: 800">Expert Guidance</h4>
			<span style="text-align: center; color: #1c7a4b;">Our knowledgeable team is <br> always available to provide <br> personalized advice and <br> guidance to help you achieve <br> gardening success.</span>
		</div>
	</div>
</section>

<section class="article" id="article">
	<div class="services-text">
		<h1 style="text-align: center; font-size: 40px; font-weight: 650; line-height: 1.1; padding-bottom: 3%;">Plant Make Life Better</h1>
	</div>
	<div class="img">
		<img src="img/3356667.png" style="padding-left: 33%; padding-bottom: 3%">
	</div>
	<div class="article-container">
		<p style="text-align: center;">We are thrilled to introduce our premium selection of high-quality seedlings, meticulously grown to ensure the best possible start for your garden. With our expertise and dedication, we have cultivated a wide variety of robust and healthy seedlings that are ready to flourish in any environment.</p>
		<div class="collapse" id="readmore">
			<p style="text-align: center;">Don't miss the opportunity to enhance your garden with the finest seedlings available. Place your order today and experience the joy of nurturing beautiful and thriving plants.</p>
		</div>
		<a href="#readmore" data-toggle="collapse" style="padding-left: 47%;">Read more</a>
	</div>
</section>

<section class="product_list section_padding">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="services-text">
					<h1 style="text-align: center; font-size: 40px; font-weight: 650; line-height: 1.1; padding-bottom: 3%;">Plant's On Month</h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="product_list_slider owl-carousel">
					<div class="single_product_list_slider">
						<div class="row align-items-center justify-content-between">
						<?php
						$query = "SELECT * from `products`";
						$result = mysqli_query($con, $query);
						while ($row = mysqli_fetch_array($result)) {
							echo '<div class="col-lg-3 col-sm-6" style="padding: 10px 20px !important;">
									<div class="single_product_item">
										<img width="120px" src="img/product/'.$row['image'].'" alt="djwij" />
										<div class="single_product_text">
											<h4>'. $row['title'] .'</h4>
											<h3>Rp '. $row['price'] .'</h3>';
											if (!check_if_added_to_cart($row['id'])) {
												echo '<a href="scripts/cart_add.php?id='.$row['id'].'&qty=1" class="add_cart">+ add to cart<i class="ti-heart"></i></a>';
											} else {
												echo '<a href="detail_product.php" class="add_cart" disabled>+ add to cart<i class="ti-shopping-cart"></i></a>';
											}
									echo ' </div>
									</div>
								</div>';
						}
						?>
						</div>
					</div>
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
<script src="js/contact.js"></script>
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
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"7721abfb4f723390","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.3","si":100}' crossorigin="anonymous"></script>

</body>
</html>
