<?php
/**
 * @file
 * Example view file
 */

/** @var WGR_ExamplePageModel $pageModel */
/** @var WGR_ExamplePageView $this */

?>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?= $pageModel->pageTitle ?></title>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=Martel+Sans:wght@200;300;400;600;700;800;900&display=swap" 
		rel="stylesheet">
		<link rel="stylesheet" href="/css/style.css">
	</head>
	<body>
		<div class="l-header">
			<div class="l-constrained">
				<div class="header-logo">
					<img src="/images/logo.png">
				</div>
				<div class="nav site-nav">
				<ul>
					<?php

					if ($pageModel->categories) {
						// Loop names of categories
						foreach ($pageModel->categories as $category) {
							?>
							<li>
								<a href="#" title="<?= $category->name ?>"><?= $category->name ?></a>
							</li>
							<?php
						}
					}

					?>
				</ul>
				<div>
					<input class="js-search-input" type="search" placeholder="Sök...">
					<button class="search-btn">🔍</button>
				</div>
				</div>
			</div>
		</div>
		<div class="startpage-hero">
			<!-- Hero image -->
			<img src="/images/hero_image_polish.png" class="hero-image-polish">
			<!-- Hero text -->
			<div class="hero-text">
			<h1><?= $pageModel->heroTitle ?></h1>
			<p><?= $pageModel->heroDesc ?></p>
			<?php $product2 = $pageModel->getProductById(2); ?>
			<button id="buy-now-btn" class="btn btn--primary">Shoppa nu!</button>
			</div>
			<img src="/images/hero_image_face.png" class="hero-image-face">
		</div>
		<div class="startpage-banner">
			<div class="l-constrained">
				<h1><?= $pageModel->pageTitle ?></h1>
				<p><?= $pageModel->pageDesc ?></p>
			</div>
		</div>

		<div class="l-constrained">
			<?php

			if ($pageModel->products) {
				?>
				<h2>Nyheter</h2>
				<ul class="product-gallery">
					<?php

					// Loop names of products
					foreach ($pageModel->products as $product) {
						?>
						<li data-title="<?= $product->name . $product->color?>" class="product-item js-product is-visible">
							<div class="product-item__img">
								<img src="/images/products/<?= $product->imageFileName ?>">
							</div>
							<h3 class="product-item__title"><?= $product->name ?></h3>
							<div class="product-item__body">	
								<span class="product-item__price"><?= $product->price ?></span>
								<div class="product-item__buttons">
									<a href="#" class="btn">Info</a>
									<a href="#" class="btn btn--primary">Köp</a>
								</div>
							</div>
						</li>
						<?php
					}

					?>
				</ul>
				<?php

			}

			?>
		</div>

		<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="js/scripts.js"></script>
		<script>
		WGR.example();
		</script>
		<!-- The Modal -->
		<div id="product-modal" class="modal">
  			<div class="modal-content">
    			<span class="close">&times;</span>

    			<img src="/images/products/<?= $product2->imageFileName ?>" 
         		alt="<?= $product2->name ?>" class="modal-img">

    			<h2><?= $product2->name ?></h2>
    			<p> <?= $product2->price ?> </p>
    			<button class="btn btn--primary">Köp nu</button>
 			 </div>
		</div>
	</body>
</html>
