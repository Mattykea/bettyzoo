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
                    <div class="pris-con">
                        <h3 class="pris"></h3>
                        <div class="kob">                   
                            <button class="sek">Læg i indkøbskurv</button>
                            <button class="pri">Køb nu</button>
                        </div>
                    </div>
                    <div>
                        <h3>Beskrivelse</h3>
                        <p class="beskrivelse"></p>
                    </div>

                </div>
            </article>

            <section class="andre">
                <h2>Andre har også set</h2>
                <div class="billeder"> 
                    <a href="https://mathildese.dk/kea/4sem/bettyzoo/print/posing-2/">
                        <img src="https://mathildese.dk/kea/4sem/bettyzoo/wp-content/uploads/2023/05/posing-384051_1080x.webp" alt="Blæk-tegning af mand uden bluse">
                    </a>
                    <a href="https://mathildese.dk/kea/4sem/bettyzoo/print/skaterboy/">
                        <img src="https://mathildese.dk/kea/4sem/bettyzoo/wp-content/uploads/2023/05/skaterboy-665102_1080x.webp" alt="Print af man der skater væk på et skateboard">
                    </a>
                    <a href="https://mathildese.dk/kea/4sem/bettyzoo/print/grl-pwr/">
                        <img src="https://mathildese.dk/kea/4sem/bettyzoo/wp-content/uploads/2023/05/girlpwr-412301_1080x.webp" alt="Linjetegning a to kvinder uden bluse med ryggen til">
                    </a>
                    <a href="https://mathildese.dk/kea/4sem/bettyzoo/print/cityscape/">
                        <img src="https://mathildese.dk/kea/4sem/bettyzoo/wp-content/uploads/2023/05/cityscape-917817_740x.webp" alt="Nøgen kvinder ligger på en seng på maven med udsigt over byen">
                    </a>
                </div> 
            </section>

		</main><!-- #main -->

        <style>  
        
        article {
            margin-block-start: 10%;
            margin-inline: 10%;
        }        

        .h2 {
            margin-block-start: 10%;
            margin-block-end: 5%;
        }

        .right h3 {
            font-size: 1.2rem;
        }

        .beskrivelse {
            margin-block-end: 15%;
        }

        /* KNAPPER GENERELT*/
        .str, .farve, .kob {
            display: flex;
            gap: 4%;
            flex-wrap: wrap;
            margin-top: 2%;
            margin-bottom: 7%;
        }

        /* KNAPPER GRØNNE*/
        .str button, .farve button {
            padding-block: 8px;
            color: #072E29;
            background-color: #F8FFF6;
            border-radius: 0;
            font-family: 'Rubik', sans-serif;
            font-weight: bold;
            border: 4px solid #347A62;
            box-shadow: 8px 8px #11554C;
            width: 48%;
            margin-bottom: 4%;
        }

        .str button:hover, .farve button:hover {
            box-shadow: 12px 12px #11554C;
            background-color: #F8FFF6;
            color: white;
            background-color: #347A62;
        }       

        /* KNAP PRIMÆR */
        .pris-con {
            margin-block: 10%;
        }

        .kob .pri {
            color: white;
            background-color: #F07F66;
            border-radius: 0;
            font-family: 'Rubik', sans-serif;
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
            font-family: 'Rubik', sans-serif;
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

        .billeder img {
            margin-block: 5%;
        }
       
        /* Tablet og Web */
        @media (min-width: 800px) {
            article {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 10%;
                margin-top: 5%;
                margin-inline: 10%;
            }

            /* KNAPPER GRØNNE */
            .str, .farve, .kob {
                margin-block-end: 4%;
            }

            .str button, .farve button {
                width: 20%;
            }

            .str button:hover, .farve button:hover {
                box-shadow: 12px 12px #11554C;
                background-color: #F8FFF6;
                color: #072E29;
            }

            .str button:focus, .farve button:focus {
                color: white;
                background-color: #347A62;
                box-shadow: 12px 12px #11554C;

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
                justify-content: space-between;
                margin-block-start: 3%;
            }

            .billeder a {
                width: 23%;
                margin-block: 0%;               
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
                document.querySelector(".pris").textContent = print.pris  + " kr.";
                document.querySelector(".beskrivelse").textContent = print.beskrivelse;

            }

            getJson();

        </script>

	</div><!-- #primary -->

<?php get_footer(); ?>