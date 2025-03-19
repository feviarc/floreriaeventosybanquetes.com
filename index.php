<?php require_once 'config.php' ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>VANESSA | Arreglos & Flores</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<link rel="stylesheet" href="assets/css/main.css">
		<noscript><link rel="stylesheet" href="assets/css/noscript.css"></noscript>
	</head>
	<body class="is-preload-0 is-preload-1 is-preload-2">
		<!-- Main -->
		<div id="main">
			<!-- Header -->
			<header id="header">
				<h1 style="font-size: 0">Florería Vanessa</h1>
				<img itemprop="logo" class="logo" src="./assets/img/logo-floreria-vanessa-sahuayo.png" alt="Logotipo Floreria Vanessa">
				<div itemscope itemprop="address" itemtype="http://schema.org/PostalAddress">
					<p><span itemprop="addressLocality">Sahuayo</span><span itemprop="addressRegion"> Michoacán</span></p>
					<p itemprop="streetAddress">Morelos #186-A, Col. Centro</p>
				</div>
				<p itemprop="telephone">TEL1: (353) 532-1795</p>
				<p itemprop="telephone">TEL2: (353) 532-3540</p>
				<ul class="icons">
					<li class="no-mobile">
						<a href="./facebook" target="_blank">
							<img src="./assets/img/facebook-icon.png" alt="Salón de eventos Garden Palace en Facebook" title="Página de Facebook">
						</a>
					</li>
					<li>
						<a href="./instagram" target="_blank">
							<img src="./assets/img/instagram-icon.png" alt="Salón de eventos Garden Palace en Instagram" title="Página de Instagram">
						</a>
					</li>
					<li>
						<a itemprop="email" href="mailto:marcocardenas_garden@yahoo.com.mx">
							<img src="./assets/img/email-icon.png" alt="Email de contacto del salón Garden Palace" title="Email de contacto">
						</a>
					</li>
					<li>
						<a itemprop="telephone" href="tel:(353)532-1795">
							<img id="mobile-phone-icon" src="./assets/img/phone-icon.png" alt="Número de teléfono de Florería Vanessa" title="Llamar al (353) 532-1795">
						</a>
					</li>
					<li>
						<a itemprop="telephone" href="tel:(353)532-3540">
							<img id="mobile-phone-icon" src="./assets/img/phone-icon.png" alt="Número de teléfono de Florería Vanessa" title="Llamar al (353) 532-3540">
						</a>
					</li>
				</ul>
			</header>
			<!-- Thumbnail -->
			<section id="thumbnails">
				<?php for($picture=$LAST_PICTURE; $picture>=$FIRST_PICTURE; $picture--) { ?>
				<article>
					<header>
						<a
						 class="wa-button--quote"
						 target="_blank"
						 href="https://api.whatsapp.com/send/?phone=<?= htmlspecialchars($PHONE) ?>&text=Hola%21+%F0%9F%91%8B%F0%9F%8F%BC%0AMe+gustar%C3%ADa+saber+el+precio+del+Arreglo+%F0%9F%92%90+<?= htmlspecialchars($picture) ?>%0A%0A%0Ahttps://floreriaeventosybanquetes.com/images/fulls/<?= htmlspecialchars($picture) ?>.png"
						>
							<img src="./assets/img/whatsapp-button-lightgreen.png"
							 alt="WhatsApp Button"
							 width="150"
							 height="47"
							>
						</a>
					</header>
					<a
					 class="thumbnail"
					 href="<?= htmlspecialchars($PATH_FULLS) ?><?= htmlspecialchars($picture) ?>.png"
					 data-position="left center"
					>
						<img
						 src="<?= htmlspecialchars($PATH_THUMBS) ?><?= htmlspecialchars($picture) ?>.jpg"
						 alt="Arreglo de flores #<?= htmlspecialchars($picture) ?>"
						>
					</a>
					<span>💐 Arreglo: <?= htmlspecialchars($picture) ?></span>
				</article>
				<?php } ?>
			</section>
			<!-- Footer -->
			<footer id="footer">
				<div class="copyright">
					<p>
						VANESSA Arreglos & Flores (2025)
					</p>
					<p>
						<span>Algunos de derechos reservados</span>
						<span>CC BY-NC 2.5 MX</span>
					</p>
					<p>
						Sitio Web desarrollado por
						<a href="https://oitsys.com" target="_blank"><img src="assets/img/Logo.OITSYS.aux.small.png" id="developer" alt="Logo OITSYS" title="Sitio Web desarrollado por OITSYS"></a>
					</p>
				</div>
			</footer>
		</div>
		<!-- Scripts -->
		<script src="assets/js/jquery.min.js" defer></script>
		<script src="assets/js/browser.min.js" defer></script>
		<script src="assets/js/breakpoints.min.js" defer></script>
		<script src="assets/js/main.js" defer></script>
	</body>
</html>
