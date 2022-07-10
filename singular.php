<?php get_header();

?>
<main role="main">
	<section class="mt-20">
		<div class="container mx-auto flex flex-col md:flex-row">
			<div class=" px-4">
				<h1 class="text-5xl font-semibold pb-5 md:hidden"><?php echo the_field('name');	?></h1>
				<img src="<?php echo the_field('profile_picture');	?>" alt="" width="auto" height="auto" class="h-96 w-full object-cover" />
				<div class="py-4 my-2 border-b border-b-zinc-500">
					<h3 class="font-bold text-lg uppercase py-2">Location</h3>
					<p class="text-zinc-700"><?php echo get_field('location');	?></p>
				</div>
				<div class="py-4 my-2 border-b border-b-zinc-500">
					<h3 class="font-bold text-lg uppercase py-2">Booking</h3>
					<a class="text-zinc-700"><?php echo the_field('booking');	?></p>
				</div>
				<div class="py-4 my-2 border-b border-b-zinc-500">
					<h3 class="font-bold text-lg uppercase py-2">Socials</h3>
					<?php
					$socials = get_field('socials');
					if ($socials) :
						foreach ($socials as &$value) {	?>
							<a href="<?= $value['url'] ?>" class="text-zinc-700 hover:text-zinc-900 hover:underline" target="<?= $value['target'] ?>"><?= $value['title'] ?></p>
						<?php }
					endif; ?>
				</div>
				<div class="py-4 my-2 border-b border-b-zinc-500">
					<h3 class="font-bold text-lg uppercase py-2">Stream</h3>
					<?php
					$socials = get_field('stream');
					if ($socials) :
						foreach ($socials as &$value) {	?>
							<a href="<?= $value['url'] ?>" class="text-zinc-700" target="<?= $value['target'] ?>"><?= $value['title'] ?></p>
						<?php }
					endif; ?>
				</div>
				<div class="py-4 my-2 border-b border-b-zinc-500">
					<h3 class="font-bold text-lg uppercase py-2">Downloads</h3>
					<?php
					$socials = get_field('socials');
					if ($socials) :
						foreach ($socials as &$value) {	?>
							<a href="<?= $value['url'] ?>" class="text-zinc-700" target="<?= $value['target'] ?>"><?= $value['title'] ?></p>
						<?php }
					endif; ?>
				</div>


			</div>
			<div class=" px-4 md:px-12">
				<h1 class="text-7xl font-semibold pb-10 hidden md:block"><?php echo the_field('name');	?></h1>
				<div class="space-y-2 text-lg text-zinc-700">
					<?php echo the_field('description');	?>
				</div>
			</div>
		</div>
	</section>
</main><!-- #site-content -->
<?php get_footer(); ?>