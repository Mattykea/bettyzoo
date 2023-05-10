<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">


		<section class="footer-section">

		<div class="logo">
			<a href="https://mathildese.dk/kea/4sem/bettyzoo/">
				<img src="billeder/nyt-logo-16.svg" alt="Betty Zoos logo">
			</a>			
		</div>
			
			<div class="voresfooter">

			<?php get_template_part( 'template-parts/footer/footer', 'widgets' ); ?>
			
			<div class="find">
			<h2>Find os her</h2>
			<p>Møntergade 4 <br> 1116 København K</p>
			<p>+45 70 60 40 54</p>
			<p>info@bettyzoo.dk</p>
			</div>

			<div class="folg">
				<h2>Følg os</h2>
				<a href="https://www.facebook.com/bettyzootattoo">Fa</a>
				<a href="https://www.instagram.com/bettyzootattoo/">In</a>
				<a href="https://www.tiktok.com/@bettyzootattoo">Ti</a>
				<a href="https://www.pinterest.dk/bettyzootattoo/">Pi</a>			
			
				<div class="brev">
					<h2>Vi har et nyhedsbrev!</h2>
					<form>
  						<input type="email" placeholder="nogen@email.dk">
  						<input type="submit" value="Tilmeld" class="button">
					</form>
				</div>
			</div>
			</div>

			<div class="ophavsret">
				<p>Ophavsret © 2023, Betty Zoo Tattoo.</p>
			</div>
		</section>

	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

<style>
	.footer-section {
		background-color: #347A62;
		color: white;
	}

	.voresfooter {
		padding: 5%;
		display: flex;
		flex-wrap: wrap;
		justify-content: space-between;
		padding-inline: 10%;
	}

	.voresfooter a {
		color: white;
	}

	.footer-section .voresfooter h2, .widget .widget-title{
		color: white;
		font-size: 28px;
		margin-top: 0;
	}

	.find p, .folg a, .folg .brev form {
		margin-top: 11px;
	}

	#colophon .widget-area, #colophon .site-info {
    	margin: 0;
	}

	.widget_nav_menu ul li, .voresfooter p, .voresfooter a, p {
		font-size: 18px;
	}

	#colophon .widget-column .widget {
    margin-right: 0;
    width: 100%;
	}

	.brev {
		margin-top: 15%;
	}

	.brev form input {
		font-family: "Calibri", sans-serif;
	}

	.ophavsret, .logo {
		display: flex;
		justify-content: center;
	}

	.logo {
		padding-top: 5%;
	}


	/* Særlig style til prints osv */
	
	.voresfooter h2 {
		font-weight: 400;
		margin-block: 1rem;
	}

	.voresfooter a {
		font-weight: 400;
		text-decoration: underline;
	}

	.voresfooter a:hover {
		color: #EC7322;
	}

	.voresfooter p, .ophavsret p {
		color: white;
		font-size: 18px;
	}

	.ophavsret p {
		margin-block: 1em;
	}

	#menu-footer {
		margin-block: 0;
	}

	footer .button {
		background-color: #F07F66;
		box-shadow: 8px 8px #EC7322;
		border-radius: 0;
	}

	footer .button:hover {
		background-color: #F07F66;
		box-shadow: 12px 12px #EC7322;		
	}
	
</style>
