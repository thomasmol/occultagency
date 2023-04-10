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
    <nav>
        <div class="container mx-auto px-2 md:px-4 text-center flex flex-col">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" class="mx-auto mt-12 mb-6" alt="occult agency logo" width="60" />
            <a href="/" class="text-black mx-auto text-3xl sm:text-5xl font-sans font-semibold">occult.agency</a>
            <p class="font-light">Amsterdam - Berlin - Geneva - London - Milan</p>
        </div>
    </nav>
    <section class="container mx-auto px-2 md:px-1 ">
        <?php
        the_content();
        ?>
    </section>
</main><!-- #site-content -->
<?php get_footer(); ?>