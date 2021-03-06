<?php
// Template name: Login Page

if (!class_exists('Timber')){
    echo 'Timber not activated. Make sure you activate the plugin in <a href="/wp-admin/plugins.php#timber">/wp-admin/plugins.php</a>';
}
$context = Timber::get_context();
$context['post'] = Timber::get_post();

if ( get_current_user_id() ) {
    $context['logged_in'] = true;
}

Timber::render( 'login.twig', $context );