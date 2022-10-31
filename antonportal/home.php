<?php
get_header();
?>
 <main class="main">
        <section class="blog-page">
        <div class="container">
            <h1 class="blog-page-title">
                Актуальные статьи
            </h1>

            <div class="blog-page__block">

            <?php  
                 if ( have_posts() ) : while ( have_posts() ) : the_post(); 
            ?>
                <div class="blog-page__item">
                    <img src="<?php the_post_thumbnail_url();?>" alt="img" class="blog-page__item-img">
                    <a href="<?php the_permalink();?>" class="blog-page__title"><?php the_title();?></a>
                    <div class="blog-page__text"><?php the_excerpt();?></div>
                </div>
          
                <?php  endwhile; else: ?>
                    Записей нет.
                <?php  endif; ?>

            </div>
        </div>
        </section>
</main>
<?php
 get_footer();
 ?>