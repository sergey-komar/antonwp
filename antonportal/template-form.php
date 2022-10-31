<?php 
/*
Template Name: Шаблон страницы формы
*/ 
get_header();
?>
            <!-- <div class="log clients__form review-form" >
                        <input type="text" name="name" class="log__input" placeholder="Имя">
                        <input type="email" name="email" class="log__input" placeholder="Email">
                        <input type="tel" name="tel" class="log__input" placeholder="Телефон">
                        <textarea class="log__text" placeholder="Телефон">Сообщение</textarea>
                        <button class="btn"  type="submit">Отправить</button>
            </div> -->
<?php echo do_shortcode('[contact-form-7 id="133" title="Форма"]');?>            

<?php
get_footer();
?>