<?php
/**
 * Plugin name: Esimene Plugin
 * PLugin url: http://varnomasingemil.ikt.khk.ee/
 * Desc.: Esimene maailmas plugin
 * Verion: 1.0
 * Autor: Emil Varnomasing
 * Autori url: http://varnomasingemil.ikt.khk.ee/
 */

function MyPlug() {
    if (!is_front_page()) {
        echo '<a href="';
        echo get_option('home');
        echo '">Home';
        echo "</a> » ";
        if (is_category() || is_single()) {
            the_category(' ');
            if (is_single()) {
                echo " » ";
                the_title();
            }
        } elseif (is_page()) {
            echo the_title();
        }
    }
    else {
        echo 'Home';
    }
}