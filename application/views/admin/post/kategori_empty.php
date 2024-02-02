<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
	<?php $this->load->view('admin/_partials/head.php') ?>
</head>

<body>
	<main class="max-w-7xl max-w mx-auto flex lg:py-5 pb-32 px-4 pt-4 lg:gap-8">

		<?php $this->load->view('admin/_partials/side_nav.php') ?>

		<div class="flex flex-col w-full">
			<?php $this->load->view('admin/_partials/topbar.php') ?>
			<h1 class="text-xl font-bold lg:mb-2.5">Categories is Empty</h1>
			<p class="mb-8 text-lg">No Categories to show. Please create new Categories.</p>

			<div class="">
				<a href="<?= site_url('admin/post/new_categories') ?>" class="bg-primary p-2 text-center rounded-lg text-white mb-3">+ Create New Categories</a>
			</div>
		</div>
	</main>
</body>

</html>