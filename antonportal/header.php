<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head();?>
</head>

<body>

  <header class="header">
    <div class="container">
      <div class="header__inner">
        <?php the_custom_logo();?>
        <div class="nav-icon">
          <div class="nav-icon__middle"></div>
        </div>
        <nav class="menu">
          <?php
                wp_nav_menu(
                array(
                    'theme_location' => 'menu-header',
                    'menu_id'        => 'nav',
                    'container'      => '',
                    'menu_class'	 => 'menu__list'
                )
                );
                ?>  
               
        </nav> 
          <form class="form__header" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>">
          <div class="form__search">
          <input class="form__search-input"  placeholder="Поиск" required="" type="search" value="<?php echo get_search_query(); ?>" name="s" id="s">
          <button type="submit" class="form__btn" ></button>
          </div>
          </form>
          

          </div>
        </div>
      </div>
    </div>
  </header>