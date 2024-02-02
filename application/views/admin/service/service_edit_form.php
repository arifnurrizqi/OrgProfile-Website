<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
	<?php $this->load->view('admin/_partials/head.php') ?>
</head>

<body>
	<main class="max-w-7xl max-w mx-auto flex lg:py-5 pb-32 px-4 pt-4 lg:gap-8">

		<?php $this->load->view('admin/_partials/side_nav.php') ?>

		<div class="flex flex-col w-full right-0">

			<?php $this->load->view('admin/_partials/topbar.php') ?>

			<h1 class="text-xl font-bold lg:mb-2.5">Edit Layanan</h1>

			<form action="<?= base_url() ?>admin/service/submit_edit" method="POST" enctype="multipart/form-data">
				<div>
					<label for="service" class="w-full font-medium text-gray-900 dark:text-white">Nama Layanan</label>
					<input type="hidden" name="id" value="<?= $service->id; ?>">
					<input type="text" name="service" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:border-primary focus:outline-none focus:ring-1 block w-full p-2.5 mt-1 mb-4" placeholder="Masukan nama layanan" value="<?= $service->name_service ?>" required />
				</div>
				<div>
					<label for="keterangan" class="w-full font-medium text-gray-900 dark:text-white">Keterangan</label>
					<textarea type="text" name="keterangan" rows="6" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:border-primary focus:outline-none focus:ring-1 block w-full p-2.5 mt-1 mb-4" placeholder="Masukan sedikit penjelasan dari layanan tersebut" value="" required><?= $service->keterangan ?></textarea>
				</div>
				<div>
					<label for="backlink" class="w-full font-medium text-gray-900 dark:text-white">Link Layanan <span class="text-xs italic">(misal link gform, atau semisalnya)</span></label>
					<input type="text" name="backlink" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:border-primary focus:outline-none focus:ring-1 block w-full p-2.5 mt-1 mb-4" placeholder="https://..." value="<?= $service->link ?>" required />
				</div>

				<div class="flex gap-3 mt-3">
					<button type="submit" name="save" class="bg-primary py-2 px-3 text-center rounded-lg text-white mt-2">Simpan</button>
				</div>
			</form>

		</div>
	</main>
</body>

</html>