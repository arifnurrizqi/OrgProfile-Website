<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
	<?php $this->load->view('admin/_partials/head.php') ?>
</head>

<body>
	<div class="max-w-7xl max-w mx-auto flex lg:py-5 pb-32 px-3 pt-4 lg:gap-8">

		<?php $this->load->view('admin/_partials/side_nav.php') ?>

		<div class="flex flex-col w-full right-0">

			<?php $this->load->view('admin/_partials/topbar.php') ?>

			<h1 class="text-xl font-bold lg:mb-2.5">Upload Avatar</h1>

			<form action="" method="POST" enctype="multipart/form-data">
				<div class="w-full flex flex-wrap mb-2">
					<label for="avatar" class="w-full mb-2 font-medium text-gray-900 dark:text-white">Pilih Gambar Avatar</label>
					<input class="p-2 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-primary/10 file:text-primary hover:file:bg-primary/20" type="file" name="avatar" id="avatar" accept="image/png, image/jpeg, image/jpg, image/gif, image/webp">
					<p class="italic text-xs font-normal mt-1 mb-3"><span class="font-bold text-rose-500">* </span>Ukuran foto max. <b>1 MB</b></p>
				</div>

				<?php if (isset($error)) : ?>
					<div class="text-sm font-semibold flex"><span class="font-bold text-rose-500">*</span><?= $error ?></div>
				<?php endif; ?>

				<div>
					<button type="submit" name="save" class="bg-primary py-2 px-3 text-center rounded-lg text-white mt-2">Upload</button>
				</div>
			</form>
		</div>
	</div>

</body>

</html>