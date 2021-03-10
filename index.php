<?php
/**
 * Main template file
 * 
 * @package webdesigner
 */
get_header();
?>

<header>
	<div class="container-nav" id="containerNav">
		<nav class="navMenu" id="navMenu">
			<ul class="nav-links">
				<li>
					<a class="menuLink" href="#slider">HOME</a>
				</li>
				<li>
					<a class="menuLink" href="#o-mnie">O MNIE</a>
				</li>
				<li>
					<a class="menuLink" href="#umiejetnosci">UMIEJĘTNOŚCI</a>
				</li>
				<li>
					<a class="menuLink" href="#portfolio">PROJEKTY</a>
				</li>
				<li>
					<a class="menuLink" href="#blog">BLOG</a>
				</li>
				<li>
					<a class="menuLink" href="#kontakt">KONTAKT</a>
				</li>
			</ul>
			<div class="burger float-right" id="toggle">
				<div class="line1"></div>
				<div class="line2"></div>
				<span class="text">MENU</span>
			</div>
	</div>
    </nav>
    <script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>
    </header>
    <main>

<?php
get_sidebar();
?>



<?php
get_footer();
?>