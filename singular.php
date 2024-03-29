<?php get_header();

?>
<main role="main">
	<nav>
		<div class="container mx-auto px-2 md:px-4 text-center flex flex-col">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" class="mx-auto mt-12 mb-6" alt="occult agency logo" width="60" />
			<a href="/" class="text-black mx-auto text-3xl sm:text-5xl font-sans font-semibold">occult.agency</a>
			<p class="font-light">Amsterdam - Berlin - Geneva - London - Milan</p>
			<div class="text-right">
				<a href="/about" class="hover:underline">contact &amp; about</a>
			</div>
		</div>
	</nav>
	<div class="container mx-auto px-4">
		<a href="/" class="text-zinc-600 hover:underline hover:text-zinc-800 mx-auto text-md font-sans">&lsaquo; all artists</a>
	</div>
	<section class="mt-20">
		<div class="container mx-auto flex flex-col md:flex-row">
			<div class="basis-1/3 px-4">

				<h1 class="text-5xl font-semibold pb-5 md:hidden"><?php echo the_field('name');	?></h1>
				<img src="<?php echo the_field('profile_picture');	?>" alt="<?php echo the_field('name');	?>" width="auto" height="auto" class="h-96 w-full object-cover" />
				<div class="py-4 my-2 border-b border-b-zinc-500">
					<h3 class="font-bold text-lg uppercase py-2">Location</h3>
					<p class="text-zinc-700"><?php echo the_field('location'); ?></p>
				</div>
				<div class="py-4 my-2 border-b border-b-zinc-500">
					<h3 class="font-bold text-lg uppercase py-2">Booking</h3>
					<a href="mailto:<?php echo the_field('booking');	?>" class="text-zinc-700 hover:underline hover:text-zinc-900 hover:underline-offset-2"><?php echo the_field('booking');	?></a>
				</div>
				<?php
				$management = get_field('management');
				if ($management) { ?>
					<div class="py-4 my-2 border-b border-b-zinc-500">
						<h3 class="font-bold text-lg uppercase py-2">Management</h3>
						<a href="mailto:<?php echo the_field('management');	?>" class="text-zinc-700 hover:underline hover:text-zinc-900 hover:underline-offset-2"><?php echo the_field('management');	?></a>
					</div>
				<?php } ?>
				<div class="py-4 my-2 border-b border-b-zinc-500">
					<h3 class="font-bold text-lg uppercase py-2">Socials</h3>
					<?php
					$socials = get_field('socials');
					if ($socials) :
						foreach ($socials as &$value) {
							if ($value) {	?>
								<a href="<?= $value['url'] ?>" target="<?= $value['target'] ?>" class="block mb-1 text-zinc-700 hover:text-zinc-900 hover:underline"><?= $value['title'] ?></a>
					<?php	}
						}
					endif; ?>
				</div>
				<!-- <div class="py-4 my-2 border-b border-b-zinc-500">
					<a href="/booking/?artist=<?php // echo the_field('name');
																		?>" class="text-white bg-zinc-800 rounded px-4 py-2 hover:bg-zinc-900">BOOK NOW</a>
				</div> -->


			</div>
			<div class="basis-2/3 px-4 md:px-12">
				<h1 class="text-7xl font-semibold pb-10 hidden md:block"><?php echo the_field('name');	?></h1>
				<div class="space-y-2 text-lg text-zinc-700">
					<?php echo the_field('description');	?>
				</div>
				<div class="mt-4 py-10">
					<?php
					$iframe = get_field('youtube_embed');
					if ($iframe) :
						// Add extra attributes to iframe HTML.
						$attributes = 'class="w-full aspect-video"';
						$iframe = str_replace('width="640" height="360"', $attributes, $iframe);
						echo $iframe;
					endif; ?>
				</div>
			</div>
		</div>
	</section>
</main><!-- #site-content -->
<?php get_footer(); ?>