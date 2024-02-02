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
			<h1 class="text-xl font-bold lg:mb-2.5">Feedback is Empty</h1>

			<p class="mb-8 text-lg">No Feedback to show</p>

		</div>
	</main>
</body>

</html>