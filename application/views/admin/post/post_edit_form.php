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

			<h1 class="text-xl font-bold lg:mb-2.5">Edit Article</h1>

			<form action="" method="POST" enctype="multipart/form-data">
				<div>
					<label for="title" class="w-full font-medium text-gray-900 dark:text-white">Title*</label>
					<input type="hidden" name="id" value="<?= $article->id ?>">
					<input type="text" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:border-primary focus:outline-none focus:ring-1 block w-full p-2.5 mt-1 mb-4" value="<?= $article->title ?>" required />
				</div>

				<div>
					<label for="id_kategori" class="w-full font-medium text-gray-900 dark:text-white">Kategori</label>
					<select name="id_kategori" id="" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:border-primary focus:outline-none focus:ring-1 block w-full p-2 my-2">
						<?php foreach ($categories as $kategori) : ?>
							<?php if ($article->id_kategori == $kategori->id) {
								echo "<option value='$kategori->id' selected> $kategori->nama_kategori</option> ";
							} else {
								echo "<option value='$kategori->id'>$kategori->nama_kategori</option>";
							}
							?>
						<?php endforeach ?>
					</select>
					<p class="italic text-xs font-normal mt-1 mb-3"><span class="font-bold text-rose-500">*</span>Jika pilihan tidak ada, tambahkan Kategori dulu <a href="<?= site_url('admin/post/kategori') ?>" class="italic font-semibold text-primary"><u>disini</u></a></p>
				</div>

				<div class="mb-3">
					<label for="content" class="w-full font-medium text-gray-900 dark:text-white pb-2">Konten</label>
					<?php $content = form_error('content') ? set_value('content') : $article->content ?>
					<input type="hidden" name="content" value="<?= html_escape($content) ?>" class="rounded-t-2xl">
					<div id="editor" style="min-height: 160px;" class=""><?= $content ?></div>
				</div>

				<div class="w-full flex flex-wrap">
					<div class="w-full md:w-2/3 flex flex-wrap ">
						<label for="cover_artikel" class="w-full mb-2 font-medium text-gray-900 dark:text-white">Upload cover artikel</label>
						<input type="hidden" name="gambarName" value="<?= $article->gambar ?>">
						<input class="p-2 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none file:mr-4 file:py-1 file:px-2 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-primary/10 file:text-primary hover:file:bg-primary/20" type="file" name="cover_artikel" id="cover_artikel" accept="image/png, image/jpeg, image/jpg, image/gif, image/webp, image/webp">
						<p class="italic text-xs font-normal mt-1 mb-3"><span class="font-bold text-rose-500">* </span>Ukuran gambar max. <b>5 MB</b></p>
					</div>
					<div class="w-full md:w-1/3 flex items-center justify-center">
						<?php
						$coverArtikel = base_url('public/img/artikel/' . $article->gambar);
						?>
						<p class="mt-1 font-light text-sm">Gambar saat ini:</span></p>
						<img src="<?= $coverArtikel ?>" alt="<?= htmlentities('Foto' . $article->title, TRUE) ?>" class="rounded-lg h-24 px-6">
					</div>

					<?php if (isset($upload_error)) : ?>
						<div class="text-sm font-medium flex mb-2"><span class="font-bold text-rose-500">*</span><?= $upload_error ?></div>
					<?php endif; ?>
				</div>

				<div>
					<label for="keterangan" class="w-full font-medium text-gray-900 dark:text-white">Keterangan Gambar</label>
					<input type="text" name="keterangan" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:border-primary focus:outline-none focus:ring-1 block w-full p-2.5 mt-1 mb-4" placeholder="Keterangan dari gambar diatas" value="<?= $article->keterangan_gambar ?>" required />
				</div>

				<div>
					<label for="keterangan" class="w-full font-medium text-gray-900 dark:text-white">Waktu posting</label>
					<input type="text" name="waktu" data-date-format='YYYY-MM-DD HH:mm:ss' class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:border-primary focus:outline-none focus:ring-1 block w-full p-2.5 mt-1 mb-4" placeholder="Keterangan dari gambar diatas" value="<?= $article->created_at ?>" required />
				</div>

				<div>
					<button type="submit" name="draft" class="bg-blue-400 py-2 px-3 text-center rounded-lg text-white mt-2" value="true">Save to Draft</button>
					<button type="submit" name="draft" class="bg-primary py-2 px-3 text-center rounded-lg text-white mt-2" value="false">Publish Update</button>
					<!-- <div class="text-sm font-semibold flex"><span class="font-bold text-rose-500">*</span>
						<?= form_error('draft') ?>
					</div>
				</div> -->
			</form>

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
		</div>
	</main>
</body>

</html>