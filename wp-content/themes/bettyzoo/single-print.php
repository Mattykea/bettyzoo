<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>
 
    


	<div id="primary" class="content-area">
		<main id="main" class="site-main">

	        <article>
                <img class="img" src="" alt="" />
                <h2></h2>
                <p class="pris"></p>
                <p class="beskrivelse"></p>

            </article>

		</main><!-- #main -->

        <style> 

        
    
    
        </style>

        

        <script> 
            let print;

            const dbUrl = "https://mathildese.dk/kea/4sem/bettyzoo/wp-json/wp/v2/print/<?php echo get_the_ID(); ?>";

            async function getJson() {
                const data = await fetch(dbUrl);
                print = await data.json();
                console.log(print);
                visPrints();
            }

            function visPrints() {
                console.log("visPrints?");

                document.querySelector("h2").textContent = print.title.rendered;
                document.querySelector(".img").src = print.billede.guid;
                document.querySelector(".pris").textContent = print.pris;
                document.querySelector(".beskrivelse").textContent = print.beskrivelse;

            }

            getJson();

        </script>

	</div><!-- #primary -->

<?php get_footer(); ?>