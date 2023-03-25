<?php

/**
 * Template Name: Homepage Template
 * Template Post Type: page
 *
 *
 */

get_header();
?>
<section class="h-auto md:h-[800px] bg-cover bg-center overflow-hidden" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/background.webp')">
    <div class="grid lg:grid-cols-3 gap-4 items-center h-full py-12">
        <div class="text-white text-base font-thin px-8 lg:justify-self-end max-w-xl">
            <?php the_field('homepage_text'); ?>
        </div>
        <nav class="order-first lg:order-none">
            <div class="container mx-auto px-2 md:px-4 text-center flex flex-col text-white">
                <svg id="Layer_1" data-name="Layer 1" class="mx-auto mt-12 mb-6" width="60" height="60" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 413.69 580">
                    <path fill="white" d="M142.75,590H93.15c.12-1,.19-1.94.37-2.9q2.4-12.44,4.83-24.85,10.07-51.37,20.1-102.79,7.47-38.13,15-76.22,8-40.83,16-81.68,7.42-37.83,14.88-75.65,8.61-44,17.18-88T198.76,50L206.61,10H256.2c-2.52,13.17-5,26.13-7.52,39.22H351.39c-2.54-13.22-5-26.13-7.55-39.26h49.54c.1.46.18.82.25,1.19Q405.08,69.6,416.5,128,428,186.63,439.63,245.3q13.13,66.78,26.15,133.64,9.75,49.85,19.49,99.68,8.94,45.57,17.9,91.06c1.32,6.77,2.46,13.55,3.68,20.32h-49.6c-5-25.3-10-50.59-14.89-75.91-.54-2.9-1.46-3.72-4.39-3.71-36.73.12-73.46.08-110.2.08h-3.55V590H275.79V510.76a6.13,6.13,0,0,0-1.2-.27q-57.15,0-114.28-.07c-1.8,0-2.07,1-2.33,2.27Q150.38,551.35,142.75,590ZM433.21,460.76Q397.8,279.65,362.51,99H324.46v361.8ZM275.64,99.11a4.31,4.31,0,0,0-.84-.33c-11.86,0-23.72-.07-35.58,0-.67,0-1.75,1.27-1.94,2.1-3.19,15.82-6.28,31.66-9.37,47.49Q222,178.69,216.1,209q-6.6,33.87-13.27,67.75-6.21,31.86-12.4,63.74Q185,368.39,179.5,396.22q-5.15,26.11-10.3,52.32c-.79,4-1.45,8.06-2.17,12.13H275.64Z" transform="translate(-93.15 -10)" />
                </svg>
                <a href="/" class=" mx-auto text-3xl sm:text-5xl font-sans font-semibold">occult.agency</a>
                <p class="font-light">Amsterdam - Berlin - Geneva - London - Milan</p>
                <div class="text-right">
                    <a href="/about" class="hover:underline">contact &amp; about</a>
                </div>
            </div>
        </nav>
    </div>
    <div class="text-center text-white text-lg -mt-14 py-2 z-10 mx-auto">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-center mx-auto inline-block">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 5.25l-7.5 7.5-7.5-7.5m15 6l-7.5 7.5-7.5-7.5" />
        </svg>

    </div>
</section>

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
                        <?php if (get_field('management_toggle')) : ?> <h3 class="uppercase">Management</h3><?php endif; ?>
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