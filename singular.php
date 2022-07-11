<?php get_header();

?>
<main role="main">
	<div class="container mx-auto px-4">
		<a href="/" class="text-zinc-600 hover:underline hover:text-zinc-800 mx-auto text-md font-sans">&lsaquo; all artists</a>
	</div>
	<section class="mt-20">
		<div class="container mx-auto flex flex-col md:flex-row">
			<div class="basis-1/3 px-4">

				<h1 class="text-5xl font-semibold pb-5 md:hidden"><?php echo the_field('name');	?></h1>
				<img src="<?php echo the_field('profile_picture');	?>" alt="" width="auto" height="auto" class="h-96 w-full object-cover" />
				<div class="py-4 my-2 border-b border-b-zinc-500">
					<h3 class="font-bold text-lg uppercase py-2">Location</h3>
					<p class="text-zinc-700"><?php echo the_field('location'); ?></p>
				</div>
				<div class="py-4 my-2 border-b border-b-zinc-500">
					<h3 class="font-bold text-lg uppercase py-2">Booking</h3>
					<a href="mailto:<?php echo the_field('booking');	?>" class="text-zinc-700 hover:underline hover:text-zinc-900 hover:underline-offset-2"><?php echo the_field('booking');	?></a>
				</div>
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
				<div class="py-4 my-2 border-b border-b-zinc-500">
					<h3 class="font-bold text-lg uppercase py-2">Stream</h3>
					<?php
					$streams = get_field('stream');
					if ($streams) :
						foreach ($streams as &$value) {
							if ($value) {	?>
								<a href="<?= $value['url'] ?>" target="<?= $value['target'] ?>" class="block mb-1 text-zinc-700 hover:text-zinc-900 hover:underline"><?= $value['title'] ?></a>
					<?php	}
						}
					endif; ?>
				</div>
				<div class="py-4 my-2 border-b border-b-zinc-500">
					<h3 class="font-bold text-lg uppercase py-2">Downloads</h3>
					<?php
					$downloads = get_field('downloads');
					if ($downloads) :
						foreach ($downloads as &$value) {
							if ($value) {	?>
								<a href="<?= $value['url'] ?>" target="<?= $value['target'] ?>" class="block mb-1 text-zinc-700 hover:text-zinc-900 hover:underline"><?= $value['title'] ?></a>
					<?php	}
						}
					endif; ?>
				</div>

			</div>
			<div class="basis-2/3 px-4 md:px-12">
				<h1 class="text-7xl font-semibold pb-10 hidden md:block"><?php echo the_field('name');	?></h1>
				<div class="space-y-2 text-lg text-zinc-700">
					<?php echo the_field('description');	?>
				</div>
			</div>
		</div>
	</section>
</main><!-- #site-content -->
<?php get_footer(); ?>