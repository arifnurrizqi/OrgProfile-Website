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

			<h1 class="text-xl font-bold lg:mb-2.5">Edit Filosofi Logo</h1>

			<form action="<?= base_url() ?>admin/manage/submit_edit_filosofi" method="POST" enctype="multipart/form-data">
				<div>
					<label for="element" class="w-full font-medium text-gray-900 dark:text-white">Nama Element Logo</label>
					<input type="hidden" name="id_landing" value="<?= $landing->id; ?>">
					<input type="hidden" name="id" value="<?= $filosofi->id; ?>">
					<input type="text" name="element" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:border-primary focus:outline-none focus:ring-1 block w-full p-2.5 mt-1 mb-4" placeholder="Masukan nama element logo" value="<?= $filosofi->nama_element ?>" required />
				</div>
				<div>
					<label for="keterangan" class="w-full font-medium text-gray-900 dark:text-white">Keterangan</label>
					<textarea type="text" name="keterangan" rows="4" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:border-primary focus:outline-none focus:ring-1 block w-full p-2.5 mt-1 mb-4" placeholder="Masukan keterangan dari element logo tersebut" value="" required><?= $filosofi->makna_element ?></textarea>
				</div>
				<div class="w-full flex flex-wrap mb-3">
					<div class="w-full md:w-2/3 flex flex-wrap mb-2">
						<label for="element_logo" class="w-full mb-2 font-medium text-gray-900 dark:text-white">Pilih element logo</label>
						<input type="hidden" name="elementName" value="<?= $filosofi->img_logo; ?>">
						<input class="p-2 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-primary/10 file:text-primary hover:file:bg-primary/20" type="file" name="element_logo" id="element_logo" accept="image/png, image/jpeg, image/jpg, image/gif, image/webp, image/webp">
						<p class="italic text-xs font-normal mt-1 mb-3"><span class="font-bold text-rose-500">* </span>Ukuran file komponen logo max. <b>1 MB</b></p>
					</div>
					<div class="w-full md:w-1/3 flex items-center justify-center">
						<?php
						$element = base_url('public/img/logo/filosofi/' . $filosofi->img_logo);
						?>
						<p class="mt-1 font-light text-sm">Element logo saat ini:</span></p>
						<img src="<?= $element ?>" alt="<?= htmlentities($filosofi->nama_element, TRUE) ?>" class="rounded-lg h-20 px-6">
					</div>
					<?php if (isset($upload_cover_error)) : ?>
						<div class="text-sm font-semibold flex"><span class="font-bold text-rose-500">*</span><?= $upload_cover_error ?></div>
					<?php endif; ?>
				</div>

				<div class="flex gap-3 mt-3">
					<button type="submit" name="save" class="bg-primary py-2 px-3 text-center rounded-lg text-white mt-2">Simpan</button>
				</div>
			</form>

		</div>
	</main>
</body>

</html>