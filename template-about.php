<?php

/**
 * Template Name: About Template
 * Template Post Type: page
 * 
 * 
 */
get_header();
?>
<main role="main">
    <section class="container mx-auto px-2 md:px-1 ">
        <div class="prose max-w-none">
            <?php
            the_content();
            ?>
        </div>
    </section>
</main><!-- #site-content -->
<?php get_footer(); ?>