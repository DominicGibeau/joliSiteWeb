

<?php get_header(); ?>

<h1>FRONT.PHP</h1>

        <div id="entete" class="global">
            <header class="entete__header">
                <h1>Theme wp</h1>
                <h2>le jauli site wèbe</h2>
            </header>

            <?php  get_template_part('gabarits/vague'); ?>


        </div>

        <div id="acceuil" class="global">
            <section>
                <h2>Acceuil</h2>

<div class="cours">



<?php 
/*
if(have_posts()){
    while(have_posts()){
        the_post();
        the_title('<h3>','<h4>');
        echo wp_trim_words(get_the_content(), 30);
    }
}
*/
if(have_posts()):
    while(have_posts()): the_post(); 

    $titre = get_the_title();
    $sigle =substr($titre,0,7);
    $duree = substr($titre, -6,6);
    $titreFinale = trim(substr($titre, 7), $duree);


    ?>
    <div class="carte">
        <p> <?php echo $sigle;?></p>
        <p> <?php echo $titreFinale;?></p>
        <p> <?php echo $duree;?></p>
    <p> <?php  echo wp_trim_words(get_the_content(), 20); ?> </p>

    </div>
    <?php endwhile; ?>
    <?php endif; ?>

    </div>


                <h2>fuck off</h2>
            </section>
            

        </div>
        
        <div id="evenement" class="global diagonal">
            <section>
                <h2>Evenement</h2>
                <button>
        <a href="https://images.theconversation.com/files/311566/original/file-20200123-162199-1qn3vm.jpg?ixlib=rb-1.1.0&q=45&auto=format&w=926&fit=clip">regarder cette drole de girafe</a>
     
                </button>

                <div class="texteDrole"></div>
            </section>
          

        </div>


        
        <div id="galerie" class="global">
            
            <section>
                <h2>Galerie</h2>
                <img src="img/aucune idée.png" alt="">
                <h4>tsé genre quan tu...</h4>
            </section>
        </div>


        <div id="footer" class="global">

         

            <footer>
                <h2>Footer</h2>
              
                <a href="https://www.youtube.com/channel/UCtaLgfIokNyxrX03heg888g">voici mon youtube</a>
             
            </footer>


            <div class="vague">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill" style="fill: var(--couleur-arriere-galerie);"></path>
                </svg>
            </div>
            

        </div>
    </body>
</html>
