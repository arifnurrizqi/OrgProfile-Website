<?php
// Set zona waktu ke Asia/Jakarta
date_default_timezone_set('Asia/Jakarta');

// Tampilkan waktu sesuai dengan zona waktu yang telah diatur
$currentDateTime = date('Y-m-d H:i:s');
?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
	<?php $this->load->view('admin/_partials/head.php') ?>
	<script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
	<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
	<script src="<?= base_url('public/js/image-resize.min.js') ?>"></script>
</head>

<body>
	<main class="max-w-7xl max-w mx-auto flex lg:py-5 pb-32 px-4 pt-4 lg:gap-8">

		<?php $this->load->view('admin/_partials/side_nav.php') ?>

		<div class="flex flex-col w-full right-0">

			<?php $this->load->view('admin/_partials/topbar.php') ?>

			<h1 class="text-xl font-bold lg:mb-2.5">Write new Article</h1>

			<form action="" method="POST" enctype="multipart/form-data">
				<div>
					<label for="title" class="w-full font-medium text-gray-900 dark:text-white">Title*</label>
					<input type="text" name="title" class="<?= form_error('title') ? 'focus:ring-rose-500' : 'focus:ring-primary' ?> bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:border-primary focus:outline-none focus:ring-1 block w-full p-2.5 mt-1 mb-4" placeholder="Judul artikel" value="<?= set_value('title') ?>" required />
					<!-- <div class="text-sm font-semibold flex"><span class="font-bold text-rose-500">*</span>
						<?= form_error('title') ?>
					</div> -->
				</div>

				<div>
					<label for="id_kategori" class="w-full font-medium text-gray-900 dark:text-white">Kategori</label>
					<select name="id_kategori" id="" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:border-primary focus:outline-none focus:ring-1 block w-full p-2 my-2">
						<option value="">- Pilih kategori -</option>
						<?php foreach ($categories as $kategori) : ?>
							<option value="<?= $kategori->id ?>">
								<?= $kategori->nama_kategori ?>
							</option>
						<?php endforeach ?>
					</select>
					<p class="italic text-xs font-normal mt-1 mb-3"><span class="font-bold text-rose-500">*</span>Jika pilihan tidak ada, tambahkan Kategori dulu <a href="<?= site_url('admin/post/kategori') ?>" class="italic font-semibold text-primary"><u>disini</u></a></p>
				</div>

				<div class="mb-4">
					<label for="content" class="w-full font-medium text-gray-900 dark:text-white pb-2">Konten</label>
					<input type="hidden" name="content" value="<?= set_value('content') ?>" class="min-h-52">
					<div id="editor" class="min-h-52"><?= set_value('content') ?></div>
				</div>


				<div>
					<div class="w-full flex flex-wrap">
						<label for="cover_artikel" class="w-full mb-2 font-medium text-gray-900 dark:text-white">Upload cover artikel</label>
						<input class="p-2 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none file:mr-4 file:py-1 file:px-2 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-primary/10 file:text-primary hover:file:bg-primary/20" type="file" name="cover_artikel" id="cover_artikel" accept="image/png, image/jpeg, image/jpg, image/gif, image/webp, image/webp">
						<p class="italic text-xs font-normal mt-1 mb-3"><span class="font-bold text-rose-500">* </span>Ukuran gambar max. <b>5 MB</b></p>
					</div>
					<?php $upload_error = $this->input->get('upload_error'); ?>
					<?php if (isset($upload_error)) : ?>
						<div class="text-sm font-medium flex mb-2"><span class="font-bold text-rose-500">*</span><?= $upload_error ?></div>
					<?php endif; ?>
				</div>

				<div>
					<label for="keterangan" class="w-full font-medium text-gray-900 dark:text-white">Keterangan Gambar</label>
					<input type="text" name="keterangan" class="<?= form_error('title') ? 'focus:ring-rose-500' : 'focus:ring-primary' ?> bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:border-primary focus:outline-none focus:ring-1 block w-full p-2.5 mt-1 mb-4" placeholder="Keterangan dari gambar diatas" value="<?= set_value('title') ?>" required />
				</div>

				<div>
					<label for="keterangan" class="w-full font-medium text-gray-900 dark:text-white">Waktu posting</label>
					<input type="text" name="waktu" data-date-format='YYYY-MM-DD HH:mm:ss' class="<?= form_error('title') ? 'focus:ring-rose-500' : 'focus:ring-primary' ?> bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:border-primary focus:outline-none focus:ring-1 block w-full p-2.5 mt-1 mb-4" placeholder="Keterangan dari gambar diatas" value="<?= $currentDateTime; ?>" required />
				</div>

				<div class="flex gap-3 mt-3">
					<button type="submit" name="draft" class="bg-blue-400 py-2 px-3 text-center rounded-lg text-white mt-2" value="true">Save to Draft</button>
					<button type="submit" name="draft" class="bg-primary py-2 px-3 text-center rounded-lg text-white mt-2" value="false">Publish</button>
					<!-- <div class="text-sm font-semibold flex"><span class="font-bold text-rose-500">*</span>
						<?= form_error('draft') ?>
					</div> -->
				</div>
			</form>
		</div>
	</main>

	<script>
		var quill = new Quill('#editor', {
			theme: 'snow',
			modules: {
				imageResize: {},
				toolbar: [
					[{
						header: [1, 2, 3, 4, 5, 6, false]
					}],
					[{
						font: []
					}],
					["bold", "italic"],
					["link", "blockquote", "code-block", "image", "video"],
					[{
						list: "ordered"
					}, {
						list: "bullet"
					}],
					[{
						script: "sub"
					}, {
						script: "super"
					}],
					[{
						color: []
					}, {
						background: []
					}],
				]
			}
		});
		quill.on('text-change', function(delta, oldDelta, source) {
			document.querySelector("input[name='content']").value = quill.root.innerHTML;
		});
	</script>
</body>

</html>