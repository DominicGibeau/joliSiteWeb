
<?php get_header(); ?>

<div id="accueil" class="global">
    <section>
        <h2>Accueil (h2)</h2>
        <div class="cours">
        <?php
        /*
            if (have_posts()){
                while(have_posts()){
                    the_post();
                    the_title('<h3>','</h3>');
                    echo wp_trim_words(get_the_content(),30);

                }
            }
        */
     if (have_posts()): the_post();?>
           
                      <div class="carte">
                <h3><?php echo $titre; ?></h3>  
                <p><?php the_content(); ?> </p>
            </div> 
 
        <?php endif; ?>
        </div>
    </section>
</div>

<div id="galerie" class="global">
    <section>
        <h2>Galerie (h2)</h2>
    </section>


<?php  get_template_part('gabarits/vague'); ?>
</div>
<?php get_footer(); ?>