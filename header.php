<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="keywords" content="occult, agency, music, dj, artist, artists, techno">
    <meta name="author" content="Thomas Mol">
    <title>occult.agency</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() . '/favicon/favicon.ico'; ?> ">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() . '/favicon/apple-touch-icon.png'; ?> ">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() . '/favicon/favicon-32x32.png'; ?> ">
    <link rel="manifest" href="<?php echo get_template_directory_uri() . '/favicon/site.webmanifest'; ?> ">
    <link rel="mask-icon" href="<?php echo get_template_directory_uri() . '/favicon/safari-pinned-tab.svg'; ?> " color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>

<body>
    <nav>
        <div class="container mx-auto px-2 md:px-4 text-center flex flex-col">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" class="mx-auto mt-12 mb-6" alt="occult agency logo" width="60" />
            <a href="/" class="text-black mx-auto text-3xl sm:text-5xl font-sans font-semibold">occult.agency</a>
            <div class="text-right">
                <a href="/about" class="hover:underline">contact &amp; about</a>
            </div>
        </div>
    </nav>

    <div class="bottom-5 right-5 fixed">
        <a href="https://linktr.ee/occultagency" target="_blank" class="p-3 block">
            <img src="<?php echo get_template_directory_uri(); ?>/images/linktree.svg" alt="linktree" class="h-6 w-6">
        </a>
    </div>