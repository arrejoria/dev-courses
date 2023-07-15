<?php

if(!defined('ABSPATH')) die();




get_header(); ?>


<main class="devc-login__hero container-center">
    <?php get_template_part('template-parts/page-heading'); ?>
</main>

<section class="devc-login__form container-center">
    <?php if (!is_user_logged_in()) : ?>
        <?php
        $args = array(
            'echo'           => true,
            // Default 'redirect' value takes the user back to the request URI.
            'form_id'        => 'devc-loginForm',
            'redirect' => 'home',
            'label_username' => __('Username or Email Address'),
            'label_password' => __('Password'),
            'label_remember' => __('Remember Me'),
            'label_log_in'   => __('Log In'),
            'id_username'    => 'user_login',
            'id_password'    => 'user_pass',
            'id_remember'    => 'rememberme',
            'id_submit'      => 'wp-submit',
            'remember'       => true,
            'value_username' => '',
            // Set 'value_remember' to true to default the "Remember me" checkbox to checked.
            'value_remember' => false,
        );
        wp_login_form($args); ?>
    <?php else :
        wp_redirect(wp_login_url());
        exit;
    endif; ?>
</section>

<?php get_footer();
