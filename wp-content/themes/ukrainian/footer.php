<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package project
 */


$footer_phone       = get_field('footer_phone');
$footer_email       = get_field('footer_email');
$footer_address     = get_field('footer_address');
$footer_copyright   = get_field('footer_copyright');

?>

</div><!-- #content -->

<!----- footer ----->
<footer>
    <div class="container">
        <p><?php echo $footer_phone; ?></p>
        <p><?php echo $footer_email; ?></p>
        <p><?php echo $footer_address; ?></p>
        <p><?php echo $footer_copyright; ?></p>
    </div>
</footer>
<!---x- footer -x--->


<?php wp_footer(); ?>

<!-- Javascript
    ==================== -->



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery-3.4.1.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/main.js"></script>

</body>

</html>