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
                                                echo $post->post_name; ?>" class="group h-80 overflow-hidden border border-transparent grayscale transition duration-200 ease-in-out hover:border hover:border-zinc-500 hover:grayscale-0 md:h-96">
                    <h2 class="absolute px-6 py-4 text-lg font-semibold uppercase text-white">
                        <?php the_field('name'); ?>
                    </h2>
                    <div class="hidden group-hover:block absolute bottom-0 text-white px-6 py-4 font-semibold">
                        <?php if (get_field('management')) : ?> <h3 class="uppercase">Management</h3><?php endif; ?>
                        <?php if (get_field('worldwide_booking')) : ?> <h3 class="uppercase">Worldwide booking</h3><?php endif; ?>
                        <?php if (get_field('custom_booking_text')) : ?> <h3 class="uppercase"><?php the_field('custom_booking_text'); ?></h3><?php endif; ?>
                    </div>
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