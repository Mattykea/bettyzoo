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
<template> 
    <article>
          <img src="" alt="" />
          <h2></h2>
          <p class="pris"></p>
        </article>
</template>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

	        <section class="printcontainer"></section>

		</main><!-- #main -->

        <script> 

        let prints;

        const dbUrl = "https://mathildese.dk/kea/4sem/bettyzoo/wp-json/wp/v2/print";
    

        async function getJson() {
            const data = await fetch(dbUrl);
            prints = await data.json();
            console.log(prints);
        }

        function visPrints() {
            let temp = document.querySelector("template");
            let container = document.querySelector(".printcontainer");
            prints.forEach(print => {
                let klon = temp.cloneNode(true).content;
                klon.querySelector("h2").textContent = print.title.rendered;
                klon.querySelector("img").src = anbefaling.billede.guid;
                klon.querySelector(".pris").textContent = print.pris;


            })
        }

        </script>


	</div><!-- #primary -->

<?php
get_footer();