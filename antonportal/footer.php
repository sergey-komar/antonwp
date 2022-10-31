<footer class="footer">
    <div class="container">
      <div class="footer__inner">
        <?php the_custom_logo();?>

                <?php
                wp_nav_menu(
                array(
                    'theme_location' => 'menu-footer',
                    'menu_id'        => 'nav',
                    'container'      => '',
                    'menu_class'	 => 'menu__list'
                )
                );
                ?>
       
                <?php
                wp_nav_menu(
                array(
                    'theme_location' => 'menu-footermobile',
                    'menu_id'        => 'nav',
                    'container'      => '',
                    'menu_class'	 => 'menu__list'
                )
                );
                ?>
     

        <div class="footer__block">
          <div class="form__header form__footer">
            <form class="form__search form__search-footer" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>">
            <input class="form__search-input form__search-input-footer" type="search" name="s" id="s" value="<?php echo get_search_query(); ?>" placeholder="Поиск">
            <button type="submit" class="form__btn form__btn-footer" value=""></button>
            </form>
          </div>
          <div class="footer__copy">
            Copyright © 2020—2022
          </div>
        </div>
      </div>
    </div>
  </footer>
  <?php wp_footer();?>
</body>

</html>