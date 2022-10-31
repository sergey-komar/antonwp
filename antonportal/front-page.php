<?php
/*
Template name: Главная
*/ 
?>
<?php
get_header();
?>
<main class="main">
<?php 
    global $portal_options;
    ?>
    <section class="heading">
      <div class="container">
        <div class="heading__inner">
          <div class="heading__item heading__item-one">
            <h1 class="heading__item-title">
            <?php echo  $portal_options['title_video14'];?>
            </h1>
            <p class="heading__item-text">
            <?php echo  $portal_options['popup_video140'];?>
            </p>
            <a href="<?php echo  $portal_options['popup_video14'];?>" class="heading__item-link">Подробнее</a>
          </div>
          <div class="heading__item">
            <h2 class="heading__item-title">
            <?php echo  $portal_options['title_video15'];?>
            </h2>
            <p class="heading__item-text">
            <?php echo  $portal_options['popup_video150'];?>
            </p>
            <a href="<?php echo  $portal_options['popup_video15'];?>" class="heading__item-link heading__item-link--two">Разместить заявку</a>
          </div>
        </div>
      </div>
    </section>

    <div class="heading-block">
      <div class="container">
        <div class="heading-block__inner">

         <?php		
            global $post;
            $query = new WP_Query( [
              'posts_per_page' => '5',
               'post_type'        => 'controls',
             ] );
              if ( $query->have_posts() ) {
               while ( $query->have_posts() ) {
                 $query->the_post();
          ?>
          <div class="heading-block__item">
            <img src="<?php the_post_thumbnail_url();?>" alt="images" class="heading-block__item-img">
            <div class="heading-block__item-title"><?php the_title();?></div>
            <a href="<?php the_permalink();?>" class="heading-block__item-link">Читать</a>
          </div>
         
          <?php 
                  }
                } else {
                  // Постов не найдено
                }
              wp_reset_postdata(); // Сбрасываем $post
          ?>

        </div>
      </div>
    </div>
    
    <div class="building" style="background: url('<?php echo $portal_options['home_video1']['url'];?>') no-repeat center / cover">
      <div class="container">
        <h3 class="building__title"><?php echo  $portal_options['title_video1'];?></h3>
        <a href="<?php echo  $portal_options['popup_video1'];?>" class="building__link">Читать</a>
      </div>
    </div>

    <section class="control">
      <div class="container">
        <div class="control-block">

            <div class="control-block__img control-block__img-one" style="background: url('<?php echo $portal_options['home_video']['url'];?>') no-repeat center / cover">
            <div class="control-block__img-tile"><?php echo  $portal_options['title_video'];?></div>
            <a href="<?php echo  $portal_options['popup_video'];?>" class="control-block__img-link">Читать</a>
            </div>

            
            <div class="control-block__img control-block__img-two" style="background: url('<?php echo $portal_options['home_video2']['url'];?>') no-repeat center / cover">
            <div class="control-block__img-tile"><?php echo  $portal_options['title_video2'];?></div>
            <a href="<?php echo  $portal_options['popup_video2'];?>" class="control-block__img-link">Читать</a>
            </div>

          <div class="control-block__img control-block__img-three" style="background: url('<?php echo $portal_options['home_video3']['url'];?>') no-repeat center / cover">
            <div class="control-block__img-tile"><?php echo  $portal_options['title_video3'];?></div>
            <a href="<?php echo  $portal_options['popup_video3'];?>" class="control-block__img-link">Читать</a>
          </div>


          <div class="control-block__img control-block__img-four" style="background: url('<?php echo $portal_options['home_video4']['url'];?>') no-repeat center / cover">
            <div class="control-block__img-tile"><?php echo  $portal_options['title_video4'];?></div>
            <a href="<?php echo  $portal_options['popup_video4'];?>" class="control-block__img-link">Читать</a>
          </div>


          <div class="control-block__img control-block__img-fife" style="background: url('<?php echo $portal_options['home_video5']['url'];?>') no-repeat center / cover">
            <div class="control-block__img-tile"><?php echo  $portal_options['title_video5'];?></div>
            <a href="<?php echo  $portal_options['popup_video5'];?>" class="control-block__img-link">Читать</a>
          </div>

        </div>
      </div>
    </section>

    <div class="control-vidi" style="background: url('<?php echo $portal_options['home_video6']['url'];?>') no-repeat center / cover">
      <div class="container">
        <h3 class="control-vidi__title"><?php echo  $portal_options['title_video6'];?></h3>
        <a href="<?php echo  $portal_options['popup_video6'];?>" class="control-vidi__link control-vidi__link-btn">Читать</a>
      </div>
    </div>

    <section class="vidi">
      <div class="container">
        <div class="vidi-block">

          <div class="vidi-block__img vidi-block__img-two" style="background: url('<?php echo $portal_options['home_video7']['url'];?>') no-repeat center / cover">
            <div class="vidi-block__img-tile"><?php echo  $portal_options['title_video7'];?></div>
            <a href="<?php echo  $portal_options['popup_video7'];?>" class="vidi-block__img-link">Читать</a>
          </div>

          <div class="vidi-block__img vidi-block__img-one" style="background: url('<?php echo $portal_options['home_video8']['url'];?>') no-repeat center / cover">
            <div class="vidi-block__img-tile"><?php echo  $portal_options['title_video8'];?></div>
            <a href="<?php echo  $portal_options['popup_video8'];?>" class="vidi-block__img-link">Читать</a>
          </div>

          <div class="vidi-block__img vidi-block__img-three" style="background: url('<?php echo $portal_options['home_video9']['url'];?>') no-repeat center / cover">
            <div class="vidi-block__img-tile vidi-block__img-tile--three"><?php echo  $portal_options['title_video9'];?></div>
            <a href="<?php echo  $portal_options['popup_video9'];?>" class="vidi-block__img-link">Читать</a>
          </div>

          <div class="vidi-block__img vidi-block__img-four"  style="background: url('<?php echo $portal_options['home_video10']['url'];?>') no-repeat center / cover">
            <div class="vidi-block__img-tile"><?php echo  $portal_options['title_video10'];?></div>
            <a href="<?php echo  $portal_options['popup_video10'];?>" class="vidi-block__img-link">Читать</a>
          </div>

          <div class="vidi-block__img vidi-block__img-fife" style="background: url('<?php echo $portal_options['home_video11']['url'];?>') no-repeat center / cover">
            <div class="vidi-block__img-tile"><?php echo  $portal_options['title_video11'];?></div>
            <a href="<?php echo  $portal_options['popup_video11'];?>" class="vidi-block__img-link">Читать</a>
          </div>

        </div>
      </div>
    </section>
    <section class="mission">
      <div class="container">
        <div class="mission-block">
          <div class="mission-block__info">
            <div class="mission-block__info-title"><?php echo  $portal_options['title_video13'];?></div>
            <p class="mission-block__info-text">
            <?php echo  $portal_options['title_video_text13'];?>
            </p>
            <p class="mission-block__info-text">
            <?php echo  $portal_options['title_video_text113'];?>
            </p>
            <a href="<?php echo  $portal_options['popup_video13'];?>" class="mission-block__info-link">Подробнее</a>
          </div>
          <div class="mission-block__img" style="background: url('<?php echo $portal_options['home_video12']['url'];?>') no-repeat center / cover">
            <div class="mission-block__img-tile"><?php echo  $portal_options['title_video12'];?></div>
            <a href="<?php echo  $portal_options['popup_video12'];?>" class="mission-block__img-link">Читать</a>
          </div>
        </div>
      </div>
    </section>

    <div class="partners">
      <div class="container">
        <div class="partners__inner">
          <img src="<?php echo get_template_directory_uri();?>./assets/images/partners/partners1.png" alt="images" class="partners__inner-img">
          <img src="<?php echo get_template_directory_uri();?>./assets./images/partners/partners2.png" alt="images" class="partners__inner-img">
          <img src="<?php echo get_template_directory_uri();?>./assets./images/partners/partners1.png" alt="images" class="partners__inner-img">
        </div>
      </div>
    </div>


       
  </main>
 <?php
 get_footer();
 ?>