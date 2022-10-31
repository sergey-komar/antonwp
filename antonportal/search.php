<?php
get_header();
?>
<div class="container">
  <h1 class="search_page">
        <?php
        /* translators: %s: search query. */
        printf( esc_html__( 'Результаты поиска по фразе: %s' ), '<span>' . get_search_query() . '</span>' );
        ?>
    </h1>
</div>
  

    <main class="main">
    <section class="blog">
        <div class="container">
            <div class="blog__inner">
                <div class="blog__content">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <!-- Вывода постов, функции цикла: the_title() и т.д. -->
                    <div class="blog__content-item">
                        <img src="<?php the_post_thumbnail_url();?>" alt="images" class="blog__content-img">
                        <p class="blog__content-text">
                        <?php the_content();?>
                        </p>
                    </div>
                <?php endwhile; else: ?>
                    Записей нет.
                <?php endif; ?>    
                    
                </div>
                <div class="blog__aside">
                <?php get_sidebar();?>
                </div>
            </div>
        </div>
    </section>
</main>


<?php
get_footer();
?>