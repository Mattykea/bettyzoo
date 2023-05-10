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
                <img class="img left" src="" alt="" />
                <div class="right">
                <h2 class="h2"></h2>
                <p class="beskrivelse"></p>
                <div>
                    <h3>Størrelse</h3>
                    <div class="str">                   
                        <button>A4</button>
                        <button>A3</button>
                        <button>A2</button>
                        <button>A1</button>
                    </div>
                </div>
                <div>
                    <h3>Farve</h3>
                    <div class="farve">                   
                        <button>Lilla</button>
                        <button>Grøn</button>
                    </div>
                </div>
                <div>
                <h3 class="pris"></h3>
                    <div class="kob">                   
                        <button class="sek">Læg i indkøbskurv</button>
                        <button class="pri">Køb nu</button>
                    </div>
                </div>
                </div>
            </article>

            <section class="andre">
                <h2>Andre har også set</h2>
                <div class="billeder">
                <img src="/billeder/cityscape.webp" alt="Cityscape - illustration af en nøgen dame der ligger på maven i sin seng foran et vindue med udsigt over byen">
                <img src="/billeder/cityscape.webp" alt="Cityscape - illustration af en nøgen dame der ligger på maven i sin seng foran et vindue med udsigt over byen">
                <img src="/billeder/cityscape.webp" alt="Cityscape - illustration af en nøgen dame der ligger på maven i sin seng foran et vindue med udsigt over byen">
                </div> 
            </section>

		</main><!-- #main -->

        <style> 
        /* Skrifttyper */
        @import url("https://fonts.googleapis.com/css2?family=Shrikhand&display=swap");

        h1,
        h2,
        h3 {
            font-family: "Shrikhand", cursive;
            font-weight: 400;
            letter-spacing: 2px;
            color: #ec7322;
            margin: 0;
        }

        h3 {
            font-size: 28px;
        }

        p {
            color: #072E29;
            font-family: "Calibri", sans-serif;
        }
        
        #content {
            background-color: #D7EBD5;
        }

        article {
            margin-inline: 5%;
        }

        .h2 {
            margin-block-start: 10%;
        }

        .beskrivelse {
            margin-block-end: 15%;
        }

        /* KNAPPER GRØNNE*/
        .str, .farve, .kob {
            display: flex;
            gap: 4%;
            flex-wrap: wrap;
            margin-top: 2%;
            margin-bottom: 7%;
        }

        .str button, .farve button {
            color: #072E29;
            background-color: #F8FFF6;
            border-radius: 0;
            font-weight: bold;
            border: 4px solid #347A62;
            box-shadow: 8px 8px #11554C;
            width: 48%;
            margin-bottom: 4%;
        }

        .str button:hover, .farve button:hover {
            box-shadow: 12px 12px #11554C;
            background-color: #F8FFF6;
        }

        .str button:focus, .farve button:focus {
            color: white;
            background-color: #347A62;
            box-shadow: 12px 12px #11554C;

        }

        /* KNAP PRIMÆR */
        .kob .pri {
            color: white;
            background-color: #F07F66;
            border-radius: 0;
            font-weight: bold;
            border: 4px solid #F07F66;
            box-shadow: 8px 8px #EC7322;
            width: 100%;
            margin-block-start: 4%;
        }

        .kob .pri:hover {
            box-shadow: 12px 12px #EC7322;
            background-color: #F07F66;
        }

        .kob .pri:active{
            color: #F07F66;
            background-color: white;
        }
    
        /* KNAP SEKUNDÆR */
        .kob .sek {
            color: #EC7322;
            background-color: white;
            border-radius: 0;
            font-weight: bold;
            border: 4px solid #F07F66;
            box-shadow: 8px 8px #F07F66;
            width: 100%;
        }

        .kob .sek:hover {
            box-shadow: 12px 12px #F07F66;
            background-color: white;
        }

        .kob .sek:active{
            color: white;
            background-color: #EC7322;
        }

        /* ANDRE HAR OGSÅ KØBT */
        .andre {
            background-color: #E4F2E2;
            margin-block-start: 15%;
            width: 100%;
            padding: 15%;
        }

        /* BILLEDER */
        article img, .billeder img {
            aspect-ratio: 1/1.2;
            object-fit: cover;
            object-position: 50%;
            box-shadow: 10px 10px #F07F66;

        }

         article img:hover, .billeder img:hover {
            box-shadow: 14px 14px #F07F66;

        }

        @media (min-width: 800px) {
            article {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 10%;
                margin-top: 5%;
                margin-inline: 10%;
            }

            .str, .farve, .kob {
                margin-block-end: 4%;
            }

            .str button, .farve button {
                width: 20%;
            }

            .kob {
                flex-wrap: none;

            }

            .kob .sek, .kob .pri {
                width: 48%;
            }

            .kob .pri {
                margin-block-start: 0;
            }

            .h2 {
                margin-block-start: 0;
            }           

            .beskrivelse {
                font-size: 18px;
                margin-block-end: 7%;
            }

            .andre {
                margin-block-start: 5%;
                padding-block: 5%;
                padding-inline: 10%;
            }

            .billeder {
                display: flex;
                gap: 5%;
                max-width: 1fr;
                margin-block-start: 3%;
            }
        }

    
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