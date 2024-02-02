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

			<h1 class="text-xl font-bold lg:mb-2.5">Tambah Kategori</h1>

			<form action="<?= base_url() ?>admin/post/submit_new_kategori" method="POST" enctype="multipart/form-data">
				<div>
					<label for="nama_kategori" class="w-full font-medium text-gray-900 dark:text-white">Nama Kategori</label>
					<input type="text" id="nama_kategori" name="nama_kategori" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:border-primary focus:outline-none focus:ring-1 block w-full p-2.5 mt-1 mb-4" placeholder="Masukan nama kategori" value="" required />
				</div>
				<div>
					<label for="urutan" class="w-full font-medium text-gray-900 dark:text-white">Posisi Urutan</label>
					<input type="text" name="urutan" id="urutan" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:border-primary focus:outline-none focus:ring-1 block w-full p-2.5 mt-1 mb-4" placeholder="Masukan posisi urutan, misal: 1, 2, 3, ..." value="" required />
				</div>
				<div>
					<div class="w-full flex flex-wrap mb-2">
						<label for="cover_kategori" class="w-full mb-2 font-medium text-gray-900 dark:text-white">Upload cover kategori</label>
						<input class="p-2 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-primary/10 file:text-primary hover:file:bg-primary/20" type="file" name="cover_kategori" id="cover_kategori" accept="image/png, image/jpeg, image/jpg, image/gif, image/webp, image/webp">
						<p class="italic text-xs font-normal mt-1 mb-3"><span class="font-bold text-rose-500">* </span>Ukuran foto max. <b>1 MB</b></p>
					</div>
					<?php $upload_error = $this->input->get('upload_error'); ?>
					<?php if (isset($upload_error)) : ?>
						<div class="text-sm font-semibold flex"><span class="font-bold text-rose-500">*</span><?= $upload_error ?></div>
					<?php endif; ?>
				</div>

				<div class="flex gap-3 mt-2">
					<button type="submit" name="save" class="bg-primary py-2 px-3 text-center rounded-lg text-white mt-2">Simpan</button>
					<a href="<?= base_url() ?>admin/post/kategori" name="cancel" class="bg-rose-500 py-2 px-3 text-center rounded-lg text-white mt-2">Batal</a>
				</div>
			</form>

		</div>
	</main>
</body>

</html>