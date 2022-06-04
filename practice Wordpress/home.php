<?php   //рекомендація головну сторінку сюди
/*
 Template Name: home
*/
?>
<?php get_header(); ?>
    <main class="main">
      <section class="product">
        <div class="container">
          <div class="product__inner">

             <div class="product__name"> 
<?php
global $post;
$myposts = get_posts([ 
  'numberposts' => -1,
  'category'=>6
]);
if( $myposts ){
  foreach( $myposts as $post ){
    setup_postdata( $post );
    ?>    
 <h3 class="product__name-item"><?php the_title(); ?></h3>
    <?php 
  }
} else {
  echo "Постов немає";
}
wp_reset_postdata();
?>  
             </div>   <!-- product name -->

              <div class="product__content">
         <!-- Слайдер -->
      <?php if ( have_rows( 'page-slider' ) ) : ?>
  <?php while ( have_rows( 'page-slider' ) ) : the_row(); ?>

      <div class="product__content-element">
                <div class="product__content-box">
                  <?php $photo = get_sub_field( 'photo' ); ?>
    <?php if ( $photo ) { ?>
      <img class="product__content-img"  src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt']; ?>" />
    <?php } ?>

                      <ul class="product__content-list">
                        <li class="product__content-item"><span>Сезон
                          
                      </span>   <?php the_sub_field( 'season' ); ?>
</li>
                      <li class="product__content-item"><span>Диапазон улова</span><?php the_sub_field( 'range_catch' ); ?></li>
                        <li class="product__content-item"><span>Петательные вещества</span>

<?php the_sub_field( 'petals' ); ?></li>
                      </ul>

                </div>
                 <h3 class="product__content-title">  <?php the_sub_field( 'title' ); ?></h3>
                 <p class="product__content-text">  <?php the_sub_field( 'description' ); ?>.</p>
                 <button class="product__content-btn">ЗАКАЗАТЬ</button>
                 </div>

            <?php endwhile; ?>
<?php else : ?>
  <?php // no rows found ?>
<?php endif; ?>

              </div> <!-- product__content -->
          </div>
        </div> <!-- container -->
      </section>

      <div class="seafood-box">
        <div class="container">
          <div class="seafood-box__items">
  <?php
global $post;
$myposts = get_posts([ 
  'numberposts' => -1,
  'category'    => 17
]);
if( $myposts ){
  foreach( $myposts as $post ){
    setup_postdata( $post );
    ?>
 
            <div class="seafood-box__item"><?php the_title(); ?></div>
         
        
    <?php 
  }
} else {
  // Постов не найдено
}
wp_reset_postdata(); // Сбрасываем $post
?>  
 </div>
      </div>   
      </div> <!-- seafood -->
      
      <div class="seafood">
        <div class="container">
          <div class="seafood__items">

<!-- =======================content-1============================= -->
<?php
global $post;
$myposts = get_posts([ 
  'numberposts' => -1,
  'category'    => 12
]);
if( $myposts ){
  foreach( $myposts as $post ){
    setup_postdata( $post );
    ?>
<div class="seafood__item">
               <div class="seafood__item-content">
                 <h3 class="seafood__item-title"><?php the_title(); ?></h3>
                 <p class="seafood__item-text">
                  <?php the_content(); ?> 
                 </p>
               </div>
                 <?php  the_post_thumbnail(
                  array(606,506),
                    array(
                   'class' => 'seafood__item-img'  
                    )
                     )
                     ; ?>
            </div>
    <?php 
  }
} else {
  // Постов не найдено
}
wp_reset_postdata(); // Сбрасываем $post
?>       
      <!--=======================content-1=============================  -->
      

      <!--=======================content-2============================= -->
  <?php
   global $post;
$myposts = get_posts([ 
  'numberposts' => -1,
  'category'    => 13
]);
    if( $myposts ){
  foreach( $myposts as $post ){
    setup_postdata( $post );
    ?>
<div class="seafood__item seafood__item-text-right">
      <?php  the_post_thumbnail(
                  array(420,204),
                    array(
                   'class' => 'seafood__item-img'
                    )
                     )
                     ; ?>
               <div class="seafood__item-content">
                 <h3 class="seafood__item-title"><?php the_title(); ?></h3>
                 <p class="seafood__item-text">
                  <?php the_content(); ?>
                 </p>
               </div>
            </div>
    <?php 
  }
} else {
  // Постов не найдено
}
wp_reset_postdata();
?>
   <!--=======================content-2=============================-->


    <!--=======================content-3=============================-->
  <?php
   global $post;
$myposts = get_posts([ 
  'numberposts' => -1,
  'category'    => 14
]);
    if( $myposts ){
  foreach( $myposts as $post ){
    setup_postdata( $post );
    ?>
 <div class="seafood__item">
               <div class="seafood__item-content">
                 <h3 class="seafood__item-title"><?php the_title(); ?></h3>
                 <p class="seafood__item-text">
                <?php the_content (); ?>
                 </p>
               </div>
               <?php  the_post_thumbnail(
                  array(600,597),
                    array(
                   'class' => 'seafood__item-img'
                    )
                     )
                     ; ?>
            </div>
    <?php 
  }
} else {
  // Постов не найдено
}
wp_reset_postdata();
?>

  <!-- =======================content-3=============================-->
   </div>
     <!-- seafood-items -->


  <!-- ========================blockquote============================-->

   <?php
   global $post;
$myposts = get_posts([ 
  'numberposts' => 1,
  'category'    => 15
]);
    if( $myposts ){
  foreach( $myposts as $post ){
    setup_postdata( $post );
    ?>
 
   <!--blockquote блок для цитат  -->  
          <blockquote class=" seafood__blockquote">
              <?php  the_post_thumbnail(
                  array('800','313'),
                    array(
                   'class' => 'seafood__blockquote-img'
                    )
                     )
                     ; ?>
              <p class="seafood__blockquote-text"><?php the_title(); ?>.</p>
            </blockquote>
               
            </div>
    <?php 
  }
} else {
  // Постов не найдено
}
wp_reset_postdata();
?>
<!-- ========================blockquote============================-->
       
        </div> <!-- container -->
      </div><!-- seafood -->

      <div class="contacts">
        <div class="container">
          <div class="contacts__box">
            <p class="contacts__box-text">
              В Норвегии холодно.
Очень холодно.
            </p>
            <ul class="contacts__box-list">
            <li class="contacts__box-item"> <span>Связаться с нами</span>  <a href="mailto:<?php the_field('email'); ?>"><?php the_field('email');?></a>

</li>
            <li class="contacts__box-item">Телефон: <a href="tel: <?php the_field('phone');?>"><?php the_field('phone-number');?>
 </a> 
</li>
            <li class="contacts__box-item"> <span> Норвежский совет по морепродуктам</span>  
Stortorget 1  PO Box 6176<br>  
</li>
            </ul>
          </div>
        </div>
      </div>
    </main>

<?php get_footer(); ?>
<!-- ctrl+shift+r -->
