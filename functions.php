<?php
//  Setup theme
// ####################
// Ajoute une action qui sera déclenchée après que le thème soit initialisé
add_action('after_setup_theme','mdc_setup');
// La fonction mdc_setup sera appelée lors de l'action 'after_setup_theme'
function mdc_setup(){
  // Ajoute le support des images mises en avant (thumbnails) pour les articles
  add_theme_support('post-thumbnails');
  // Ajoute le support des menus dans le thème
  add_theme_support('menus');
  // Ajoute le support pour la balise <title> dans l'en-tête HTML
  add_theme_support('title-tag');
  // Enregistre un emplacement de menu appelé 'menu' avec le label 'Menu principal'
  register_nav_menus(array(
    'menu' => 'Menu principale'
  ));
  // Ajoute une taille personnalisée pour les images appelée 'article' avec une largeur de 705 pixels, une hauteur de 512 pixels, et en mode de recadrage automatique (true)
//   add_image_size('article', 705, 512, true);
}

function enqueue_bootstrap() {
    // Charger Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');

    // Charger jQuery (nécessaire pour Bootstrap JavaScript)
    wp_enqueue_script('jquery');

    // Charger Bootstrap JavaScript
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'enqueue_bootstrap');