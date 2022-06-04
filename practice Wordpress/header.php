<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Переддипломна практика</title>

  <?php wp_head();?>
    
</head>
<body>  
  <!-- Блок в якому міститься шлях до каталогу Wordpress -->
<div id="template_directory" style="display: none;">
    <?php bloginfo('template_url'); ?>  
</div>

      <header class="header">
        <div class="container">
        <div class="header__top">
             <?php the_custom_logo(); ?>
    
         <nav class="menu">          
        <button class="menu__btn">
            <span>
              
            </span>
          </button>
   
         <ul class="menu__list">
   <?php   wp_nav_menu(array(
                  'theme_location'   => 'top',
                  'container'        =>  null,
                   'menu_class'      => 'menu__list'
                )); ?>
         </ul>
         </nav>

        <a href="tel:<?php the_field('phone');?>" class="phone"><img class="phone__img" src="<?php bloginfo('template_url');?>/assets/images/phone.svg" alt=""></a>
   
        </div>
         </div> <!-- container -->
         <div class="header__content">
           
           <div class="container">
            <?php $myposts = get_posts([ 
  'numberposts' => 1,
  'category'=>16
]);

if( $myposts ){
  foreach( $myposts as $post ){
    setup_postdata( $post );
    ?>
              <h1 class="title">
               <?php the_title(); ?>
             </h1>
    <?php 
  }
} else {
  echo "Постов немає";
}
wp_reset_postdata(); // Сбрасываем $post
?>  
           
             
              <!-- Слайдер -->
     <div class="header-slider"> 
     <!-- виведення постів -->        
<?php
global $post;

$myposts = get_posts([ 
  'numberposts' => -1,
  'category'=>3
]);

if( $myposts ){
  foreach( $myposts as $post ){
    setup_postdata( $post );
    ?>
                <div class="header-slider__item"
             >
                  <p class="header-slider__text" href="#"><?php the_title(); ?> </p>
                  <p class="header-slider__text" href="#"> <?php the_content(); ?> </p>
                </div>
    <?php 
  }
} else {
  echo "Постов немає";
}
wp_reset_postdata(); // Сбрасываем $post
?>  
</div>       
<!--header-slider  -->
         <a href="#" class="header__content-btn">ВЫБРАТЬ</a>     
              <!-- Зміна мови -->
              <div class="header__content-box">
                    <a href="#" class="header__content-link--active">RU</a>/<a href="#" class="header__content-link">EN</a>
                  </div>
            </div> <!-- container -->

         </div><!-- header__content -->
      </header> <!-- header -->
