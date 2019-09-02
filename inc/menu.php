<?php

add_action( 'after_setup_theme', 'oportfolio_register_nav_menus' );

function oportfolio_register_nav_menus() {
    register_nav_menus(
        [
            'main-menu'            => 'Menu principal'
            
        ]
    );
}

add_filter('nav_menu_css_class', 'oportfolio_nav_menus_li_classes');

function oportfolio_nav_menus_li_classes( $classes ) {
    // J'ajoute ma classe CSS personnalisée sur tous les li de menu généré par WordPress
    $classes[] = 'menu__list__item';
    // Je retourne le tableau de classes CSS modifiées
    return $classes;
}

add_filter( 'nav_menu_link_attributes', 'oportfolio_nav_menus_a_attributes' );

function oportfolio_nav_menus_a_attributes( $atts ) {
    // Je vérifie si l'attribut class n'est pas déjà défini en vue d'une concaténation de la classe CSS que je veux ajouter
    if ( ! isset( $atts['class'] ) ) {
        // Si l'attribut n'existe pas, je le crée à vide
        $atts['class'] = '';
    }
    // J'ajoute une classe CSS à tous les <a> généré dans les menus. J'utilise la concaténation afin d'éviter d'écraser le travail des traitements précédents sur le même s'ils ont eux aussi modifié l'attribut class.
    $atts['class'] .= ' menu__list__item__link';
    // Je supprime les espaces inutiles de mon attribut classe (utile uniquement s'il n'y a pas eu d'autres classes ajoutée avant le traitement en cours)
    $atts['class'] = ltrim($atts['class']);
    return $atts;
}
