<?php

/**
 * Template Name: Homepage Template
 * Template Post Type: page
 * 
 * 
 */
get_header();
?>

<section id="artists" class="mt-20">
    <div class="container mx-auto px-2 md:px-4">
        <div class="grid gap-4 md:grid-cols-2 md:gap-8 lg:grid-cols-4">
            <?php
            $args = array(
                'post_type' => 'artists',
                'post_status' => 'publish',
                'posts_per_page' => 100,
                'orderby' => 'title',
                'order' => 'ASC',
            );

            $loop = new WP_Query($args);

            while ($loop->have_posts()) : $loop->the_post();
            ?>
                <a id="artist" href="artists/<?php global $post;
                                                echo $post->post_name; ?>" class="h-80 overflow-hidden border border-transparent grayscale transition duration-200 ease-in-out hover:border hover:border-zinc-500 hover:grayscale-0 md:h-96">
                    <h2 class="absolute px-6 py-4 text-lg font-semibold uppercase text-white">
                        <?php echo the_field('name'); ?>
                    </h2>
                    <img src="<?php echo the_field('profile_picture'); ?>" alt="" class="h-full w-full object-cover" />
                </a>
            <?php
            endwhile;

            wp_reset_postdata();

            ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>