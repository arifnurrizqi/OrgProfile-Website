<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
	<?php $this->load->view('admin/_partials/head.php') ?>
	<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
</head>

<body>
	<main class="max-w-7xl max-w mx-auto flex lg:py-5 pb-32 px-4 pt-4 lg:gap-8">

		<?php $this->load->view('admin/_partials/side_nav.php') ?>

		<div class="flex flex-col w-full right-0">

			<?php $this->load->view('admin/_partials/topbar.php') ?>

			<div class="p-4 rounded-xl border-2 mb-4">
				<h1 class="text-xl font-bold lg:mb-2.5">Edit Website</h1>

				<form action="<?= base_url() ?>admin/manage/submit_edit" method="POST" enctype="multipart/form-data">
					<div class="mb-3 w-full flex gap-4 flex-wrap lg:flex-nowrap">
						<div class="w-full lg:w-1/2">
							<label for="organisasi" class="w-full font-medium text-gray-900 dark:text-white">Nama Organisasi</label>
							<input type="hidden" name="id" value="<?= $landing->id; ?>">
							<input type="text" name="organisasi" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:border-primary focus:outline-none focus:ring-1 block w-full p-2.5 mt-1" placeholder="Masukan nama organisasi" value="<?= $landing->organisasi ?>" required />
						</div>
						<div class="w-full lg:w-1/2">
							<label for="universitas" class="w-full font-medium text-gray-900 dark:text-white">Universitas</label>
							<input type="text" name="universitas" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:border-primary focus:outline-none focus:ring-1 block w-full p-2.5 mt-1" placeholder="Masukan nama universitas" value="<?= $landing->universitas ?>" required />
						</div>
					</div>
					<div class="mb-3 w-full flex gap-4 flex-wrap lg:flex-nowrap">
						<div class="w-full lg:w-1/2">
							<label for="kabinet" class="w-full font-medium text-gray-900 dark:text-white">Kabinet</label>
							<input type="text" name="kabinet" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:border-primary focus:outline-none focus:ring-1 block w-full p-2.5 mt-1" placeholder="Masukan nama kabinet" value="<?= $landing->kabinet ?>" required />
						</div>
						<div class="w-full lg:w-1/2">
							<label for="periode" class="w-full font-medium text-gray-900 dark:text-white">Tahun Periode</label>
							<input type="text" name="periode" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:border-primary focus:outline-none focus:ring-1 block w-full p-2.5 mt-1" placeholder="Masukan tahun periode" type="number" value="<?= $landing->tahun_periode ?>" required />
						</div>
					</div>
					<div>
						<label for="organisasi" class="w-full font-medium text-gray-900 dark:text-white">Visi</label>
						<input type="hidden" name="id_landing" value="<?= $landing->id; ?>">
						<textarea type="text" name="visi" rows="2" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:border-primary focus:outline-none focus:ring-1 block w-full p-2.5 mt-1 mb-4" placeholder="Masukan visi organisasi anda" value="" required><?= $about->visi ?></textarea>
					</div>
					<div class="mb-3">
						<label for="universitas" class="w-full font-medium text-gray-900 dark:text-white">Misi</label>
						<textarea type="text" name="misi" rows="8" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:border-primary focus:outline-none focus:ring-1 block w-full p-2.5 mt-1 mb-1" placeholder="Masukan misi organisasi anda" value="" required><?= $about->misi ?></textarea>
						<span class="text-xs italic"><span class="font-bold text-rose-500">* </span>Pisahkan antar misi dengan <b>"."</b> (titik)</span>
					</div>
					<div class="w-full">
						<label for="about" class="w-full font-medium text-gray-900 dark:text-white">Tentang Organisasi</label>
						<textarea type="text" name="about" rows="8" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:border-primary focus:outline-none focus:ring-1 block w-full p-2.5 mt-1 mb-4" placeholder="Masukan tentang kabinet/organisasi anda" required><?= $landing->about ?></textarea>
					</div>
					<div>
						<label for="kabinet" class="w-full font-medium text-gray-900 dark:text-white">Filosofi Kabinet</label>
						<textarea type="text" name="filosofi" rows="8" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:border-primary focus:outline-none focus:ring-1 block w-full p-2.5 mt-1 mb-4" placeholder="Masukan sejarah organisasi anda" value=""><?= $about->filosofi ?></textarea>
					</div>
					<div class="w-full flex flex-wrap mb-3">
						<div class="w-full md:w-2/3 flex flex-wrap mb-2">
							<label for="logo" class="w-full mb-2 font-medium text-gray-900 dark:text-white">Pilih Logo Kabinet</label>
							<input type="hidden" name="logoname" value="<?= $landing->logo; ?>">
							<input class="p-2 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-primary/10 file:text-primary hover:file:bg-primary/20" type="file" name="logo" id="logo" accept="image/png, image/jpeg, image/jpg, image/gif, image/webp">
							<p class="italic text-xs font-normal mt-1 mb-3"><span class="font-bold text-rose-500">* </span>Ukuran logo max. <b>1 MB</b></p>
						</div>
						<div class="w-full md:w-1/3 flex items-center justify-center">
							<?php
							$logo = base_url('public/img/logo/' . $landing->logo);
							?>
							<p class="mt-1 font-light text-sm">Logo kabinet saat ini:</span></p>
							<img src="<?= $logo ?>" alt="<?= htmlentities($landing->kabinet, TRUE) ?>" class="rounded-lg h-20 px-6">
						</div>
						<?php if (isset($upload_logo_error)) : ?>
							<div class="text-sm font-semibold flex"><span class="font-bold text-rose-500">*</span><?= $upload_logo_error ?></div>
						<?php endif; ?>
					</div>
					<div class="w-full flex flex-wrap mb-3">
						<div class="w-full md:w-2/3 flex flex-wrap mb-2">
							<label for="cover" class="w-full mb-2 font-medium text-gray-900 dark:text-white">Pilih gambar cover <span class="text-xs italic">(foto bersama)</span></label>
							<input type="hidden" name="covername" value="<?= $about->img_cover; ?>">
							<input class="p-2 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-primary/10 file:text-primary hover:file:bg-primary/20" type="file" name="cover" id="cover" accept="image/png, image/jpeg, image/jpg, image/gif, image/webp, image/webp">
							<p class="italic text-xs font-normal mt-1 mb-3"><span class="font-bold text-rose-500">* </span>Ukuran foto cover max. <b>1 MB</b></p>
						</div>
						<div class="w-full md:w-1/3 flex items-center justify-center">
							<?php
							$cover = base_url('public/img/about/' . $about->img_cover);
							?>
							<p class="mt-1 font-light text-sm">Cover saat ini:</span></p>
							<img src="<?= $cover ?>" alt="<?= htmlentities($landing->kabinet, TRUE) ?>" class="rounded-lg h-20 px-6">
						</div>
						<?php if (isset($upload_cover_error)) : ?>
							<div class="text-sm font-semibold flex"><span class="font-bold text-rose-500">*</span><?= $upload_cover_error ?></div>
						<?php endif; ?>
					</div>
					<div class="w-full flex flex-wrap mb-3">
						<div class="w-full md:w-2/3 flex flex-wrap mb-2">
							<label for="booklet" class="w-full mb-2 font-medium text-gray-900 dark:text-white">Pilih file Booklet <span class="text-xs italic">(Opsional)</span></label>
							<input type="hidden" name="bookletname" value="<?= $about->booklet; ?>">
							<input class="p-2 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-primary/10 file:text-primary hover:file:bg-primary/20" type="file" name="booklet" id="booklet" accept="application/pdf">
							<p class="italic text-xs font-normal mt-1 mb-3"><span class="font-bold text-rose-500">* </span>Ukuran booklet max. <b>50 MB</b></p>
						</div>
						<div class="w-full md:w-1/3 flex items-center justify-center">
							<?php
							$cover = base_url('public/file/' . $about->booklet);
							?>
							<a href="<?= $cover ?>" target="_blank" rel="noopener noreferrer" class="mt-1 font-light text-sm text-center hover:underline hover:text-primary">
								<p class="mt-1 font-light text-sm">Booklet saat ini:</span></p>
								<iframe src="<?= $cover ?>" frameborder="0" class="rounded-lg h-32 w-60 pl-2"></iframe>
							</a>
						</div>
						<?php if (isset($upload_cover_error)) : ?>
							<div class="text-sm font-semibold flex"><span class="font-bold text-rose-500">*</span><?= $upload_cover_error ?></div>
						<?php endif; ?>
					</div>

					<div class="w-full mt-3">
						<button type="submit" name="save" class="bg-primary py-2 px-3 text-center rounded-lg text-white mt-2" value="false">Update</button>
					</div>
				</form>
			</div>
		</div>
	</main>
</body>

</html>