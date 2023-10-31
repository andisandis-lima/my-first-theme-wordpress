<?php

if ( ! defined( 'OLDLAKE_CSS_URI' ) ) {
	define( 'OLDLAKE_CSS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/css' );
}

if ( ! defined( 'OLDLAKE_CSS_DIR_PATH' ) ) {
	define( 'OLDLAKE_CSS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/css' );
}

if ( ! function_exists( 'myfirsttheme_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which runs
     * before the init hook.
     */
    function myfirsttheme_setup() {

        add_theme_support( 'wp-block-styles' ); // Add support for block styles.
                   
        add_editor_style( 'editor-style.css' );  // Enqueue editor styles.

        add_theme_support('custom-background'); // permite que os usuarios personalizem a imagem de fundo do site
      
        add_theme_support('custom-header'); //usuarios personalizem o cabecalho do site
      
        add_theme_support('title-tag'); //permite que o WordPress gerencie o titulo da pagina, o que e importante para otimizaacao de mecanismos de busca (SEO).

        add_theme_support('custom-logo'); //permite que os usuarios enviem um logotipo personalizado

        add_theme_support('menus'); //permite que voce crie menus personalizados em seu tema

        add_theme_support('widgets'); //Habilita a possibilidade de usar widgets em areas de widget do tema.

        add_theme_support('custom-post-types', array(' ')); //permite que voce registre tipos de post personalizados, que sao uteis para criar conteudo especifico para o seu site.
    
    }
    endif;
       
add_action( 'after_setup_theme', 'myfirsttheme_setup'); 

    function oldlake_register_styles() {
        wp_register_style( 'main-css', OLDLAKE_CSS_URI . '/main.css', [], filemtime( OLDLAKE_CSS_DIR_PATH . '/main.css' ), 'all' );
        wp_enqueue_style( 'main-css' );
    }

add_action( 'wp_enqueue_scripts', 'oldlake_register_styles');   

