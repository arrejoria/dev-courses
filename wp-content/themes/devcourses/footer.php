<?php

if(!defined('ABSPATH')) die();

?>


<footer class="footer container section">
    <hr>
    <div class="footer-content">
        <?php
        $args = array(
            'menu' => 'main-menu',
            'theme_location' => 'main-menu',
            'container' => 'nav',
            'container_class' => 'menu-container',
            'menu_class' => 'menu-content footer-menu__items',
            'menu_id' => 'mainMenu',
        );

        wp_nav_menu($args);
        ?>
        <?php
        $siteName = get_bloginfo('name');
        $year = Date("Y");
        ?>
        <small class="copyright">Todos los derechos reservados. &copy;
            <?php echo $siteName . ' ' . $year ?>
        </small>
    </div>

</footer>
<?php wp_footer(); ?>
</body>

</html>