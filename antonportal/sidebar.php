<div class="blog__aside">
        <form class="form__header" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>">
        <div class="form__search">
        <input class="form__search-input"  placeholder="Поиск" required="" type="search" value="<?php echo get_search_query(); ?>" name="s" id="s">
        <button type="submit" class="form__btn" ></button>
        </div>
        </form>
        <?php if ( ! dynamic_sidebar('sidebar-blog') ) : ?>
        <?php dynamic_sidebar( 'sidebar-blog' ); ?>
        <?php endif; ?>
    </div>
</div>