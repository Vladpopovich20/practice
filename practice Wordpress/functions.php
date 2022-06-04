<?php
/*подія для додавання cтилів*/
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

function theme_name_scripts() {
	/*main css*/
	wp_enqueue_style('style',get_stylesheet_uri());

	/*Roboto Slab*/
   wp_enqueue_style('roboto', 'https://fonts.googleapis.com/css2?family=Roboto&family=Roboto+Slab:wght@300;400;700&display=swap');


   /*reset*/
	wp_enqueue_style('reset',get_template_directory_uri(). '/assets/css/reset.css');

	/*slick*/
	wp_enqueue_style('slick',get_template_directory_uri(). '/assets/css/slick.css');

/*fancybox*/
wp_enqueue_style('fancybox',get_template_directory_uri(). '/assets/css/jquery.fancybox.css');

/*style*/
wp_enqueue_style('first_style',get_template_directory_uri(). '/assets/css/style.css');


wp_deregister_script( 'jquery' ); /*дереєстрація скрипту*/
	wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.min.js'); /*реєстрація скрипту*/
	wp_enqueue_script( 'jquery' ); /*підключення jquery*/
      /*slick-js*/
  wp_enqueue_script( 'js-slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), 'null', true );
	/*fancybox-js*/
  wp_enqueue_script( 'js-fancybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array('jquery'), 'null', true );
    /*main-js*/
	wp_enqueue_script( 'js-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), 'null', true ); /*true якщо в footer мають підключитися скрипти*/
}


 /*Регистрирует поддержку новых возможностей темы в WordPress*/
add_theme_support('post-thumbnails'); /*пости щоб підтримували картинки*/
add_theme_support('title-tag'); /*Эта функция позволит плагинам и темам изменять метатег <title>*/
add_theme_support('custom-logo'); /*Добавляет возможность загрузить картинку логотипа в настройках темы в админке.*/


/*меню*/
add_action('after_setup_theme','myMenu');
function myMenu(){
 register_nav_menu('top','Меню в шапці');
 register_nav_menu('bottom', 'Меню в футері');
}

/*завантаження svg*/
add_filter( 'upload_mimes', 'svg_upload_allow' );

 // Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
  $mimes['svg']  = 'image/svg+xml';

  return $mimes;
}

add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

  // WP 5.1 +
  if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) )
    $dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
  else
    $dosvg = ( '.svg' === strtolower( substr($filename, -4) ) );

  // mime тип был обнулен, поправим его
  // а также проверим право пользователя
  if( $dosvg ){

    // разрешим
    if( current_user_can('manage_options') ){

      $data['ext']  = 'svg';
      $data['type'] = 'image/svg+xml';
    }
    // запретим
    else {
      $data['ext'] = $type_and_ext['type'] = false;
    }

  }

  return $data;
}
?>