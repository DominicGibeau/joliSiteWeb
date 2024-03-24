
<?php get_header(); ?>


<div id="entete" class="global">
    <section class="entete__header">
       
        <h2><?php echo get_bloginfo("name"); ?></h2>
        <h3><?php echo get_bloginfo("description"); ?></h3>
        <button>Événements</button>
    </section>
<?php get_template_part("gabarits/vague"); ?>
</div>
<div id="accueil" class="global">
    <section>
        <h2>Accueil</h2>
        <div class="cours">
        <?php if (have_posts()):
            while(have_posts()): the_post(); ?>

            <div class="carte">

                <h3><?php the_title(); ?></h3>  

                <p><?php echo wp_trim_words(get_the_content(),10); ?> </p>
                
             <a href="<?php the_permalink(); ?>" >Suite</a>
            </div> 
           <?php endwhile; ?>
        <?php endif; ?>




        
        </div>
    </section>
</div>
<div class="cours">
<?php
// Récupérer les catégories de WordPress
$categories = get_categories();

// Boucle à travers chaque catégorie
foreach ($categories as $category) {
    // Récupérer le titre de la catégorie
    $cat_title = $category->name;

    // Récupérer la description de la catégorie
    $cat_description = $category->description;

    // Limiter la description à 10 mots
    $cat_description_short = implode(' ', array_slice(explode(' ', $cat_description), 0, 10));

    // Récupérer le lien vers la liste des articles de cette catégorie
    $cat_link = get_category_link($category->cat_ID);

    // Récupérer le nombre d'articles dans cette catégorie
    $cat_post_count = $category->count;
    ?>

    <div class="carte">
        <h2><?php echo $cat_title; ?></h2>
        <p><?php echo $cat_description_short; ?>...</p>
        <a href="<?php echo $cat_link; ?>">Voir les destinations</a>
        <p>Nombre d'articles : <?php echo $cat_post_count; ?></p>
    </div>

<?php } ?>
</div>

<div id="evenement" class="global diagonal">



    <section>
        <h2>Événement</h2>
    </section>
</div>
<div id="galerie" class="global">
    <section>
        <h2>Galerie </h2>
    </section>
<?php  get_template_part('gabarits/vague'); ?>
</div>
<div id="footer" class="global">

<?php get_footer(); ?>