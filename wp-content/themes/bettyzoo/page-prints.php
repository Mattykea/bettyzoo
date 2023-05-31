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

            <section id="top">
                <h1>Prints</h1>
                <p class="p1">Alle Betty Zoos kunstprint er printet på 200g naturlig kunstpapir med en mat, ubehandlet overflade og en let tekstureret overflade som sikrer farvernes tydelighed og intensitet. Papirets kvalitet sikrer at kunstprintet bevares på den bedst mulige måde. Alle prints er omhyggeligt udviklet og skabt af Betty Zoo i København. De passer i rammer i standard mål og dine prints vil blive omhyggeligt pakket og sendt. Vi håber du bliver glad for dit nye kunstværk!</p>
            </section>
        
            <nav id="filtrering"></nav>

	        <section class="printcontainer"></section>

		</main><!-- #main -->

        <style> 
       #top {
        text-align: left;
        margin: 10%;
        margin-inline: 15%;
       }

       #top h1 {
        text-align: center;
       }

        #filtrering {
            display: flex;
            justify-content: center;
            gap: 2%;
            flex-wrap: wrap;
        }

        #filtrering button {
            color: #072E29;
            background-color: #F8FFF6;
            border-radius: 0;
            font-family: 'Rubik', sans-serif;
            font-weight: bold;
            border: 4px solid #347A62;
            box-shadow: 8px 8px #11554C;
        }

        #filtrering button:hover {
            box-shadow: 12px 12px #11554C;
            background-color: #F8FFF6;

        }

        #filtrering button:focus {
            color: white;
            background-color: #347A62;
            box-shadow: 12px 12px #11554C;

        }

        .printcontainer {
            display: flex;
            margin: 3%;
            gap: 3.5%;

            flex-wrap: wrap;
            justify-content: center;

        }

        article {
            max-width: 300px;
            margin-bottom: 2%;
            cursor: pointer;

        }

        article img {
            aspect-ratio: 1/1.4;
            object-fit: cover;
            object-position: 50%;
            box-shadow: 10px 10px #F07F66;

        }

        article img:hover {
            box-shadow: 14px 14px #F07F66;
        }

        article h2 {
            font-size: 1rem;
            margin-top: 3%;
        }

        @media (max-width: 850px) {
            #top {
                text-align: left;
            }
            
            #filtrering button{
                margin: 2%;
            }

            #filtrering button:hover {
                color: white;
                background-color: #347A62;

            }

            article {
            margin-top: 8%;           
            }
        }


        </style>


        <script> 
        console.log("nu starter script");
        let prints;
        let categories;
        let filterPrint = "alle";

        const dbUrl = "https://mathildese.dk/kea/4sem/bettyzoo/wp-json/wp/v2/print?per_page=100";
        const catUrl = "https://mathildese.dk/kea/4sem/bettyzoo/wp-json/wp/v2/categories";

    
        async function getJson() {
            const data = await fetch(dbUrl);
            const catData = await fetch(catUrl);

            prints = await data.json();
            categories = await catData.json();

            console.log(categories);
            visPrints();
            opretKnapper();
        }

        function opretKnapper() {

        categories.forEach(cat =>{
          document.querySelector("#filtrering").innerHTML += 
          `<button class="filter" data-print="${cat.id}">${cat.name}</button>`
        })

        addEventListenersToButtons();
      }

      function addEventListenersToButtons(){
          document.querySelectorAll("#filtrering button").forEach(elm => {
            elm.addEventListener("click", filtrering);
          })

      };

      function filtrering() {
           filterPrint = this.dataset.print;
           console.log(filterPrint);

           visPrints();
      }

        function visPrints() {
            let temp = document.querySelector("template");
            let container = document.querySelector(".printcontainer");
            container.innerHTML = "";
            prints.forEach(print => {

                if (filterPrint == "alle" || print.categories.includes(parseInt(filterPrint))) {
                let klon = temp.cloneNode(true).content;
                klon.querySelector("h2").textContent = print.title.rendered;
                klon.querySelector("img").src = print.billede.guid;
                klon.querySelector(".pris").textContent = print.pris  + " kr.";
                klon.querySelector("article").addEventListener("click", ()=> {location.href = print.link;})

                container.appendChild(klon);
                }
            })
        }

        getJson();

        </script>


	</div><!-- #primary -->

<?php
get_footer();