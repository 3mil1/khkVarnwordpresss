<?php
/**
 * Plugin name: Esimene Plugin
 * PLugin url: http://varnomasingemil.ikt.khk.ee/
 * Desc.: Esimene maailmas plugin
 * Verion: 1.0
 * Autor: Emil Varnomasing
 * Autori url: http://varnomasingemil.ikt.khk.ee/
 */

function my_plugin_test() {
    echo 'Hello World'; exit;
}
add_action('admin_head', 'my_plugin_test');