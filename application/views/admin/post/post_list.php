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
			<h1 class="text-xl font-bold lg:mb-2.5">List Artikel</h1>

			<div class="w-full md:flex md:justify-between py-3 flex-wrap">
				<form action="" method="GET">
					<div class=" flex gap-2 w-full">
						<input type="search" name="keyword" placeholder="Cari artikel" class="py-2 px-3 rounded-lg w-full border-2 border-slate-200" value="<?= html_escape($keyword) ?>">
						<button type="submit" value="Cari" class="bg-primary rounded-lg py-2 px-3 text-white w-auto">Cari</button>
					</div>
				</form>
				<div class="flex gap-3 mt-2 md:mt-0">
					<a href="<?= site_url('admin/post/kategori') ?>" class="bg-primary p-2 text-center rounded-lg text-white w-full md:w-auto" role="button">Kategori</a>
					<a href="<?= site_url('admin/post/new') ?>" class="border border-primary text-primary rounded-2xl lg:bg-transparent dark:lg:bg-transparent dark:bg-slate-700 bg-white lg:shadow-none shadow-xl z-20 overflow-hidden lg:p-1 p-3 lg:rounded-lg font-semibold lg:static fixed bottom-24 right-5 md:bottom-28 md:right-10hover:bg-primary hover:text-white transition duration-300 ease-in-out cursor-pointer" role="button">
						<div class="cursor-pointer">
							<span class="lg:block hidden px-3 py-1">Tambah Artikel</span>
							<div class="w-8 lg:hidden">
								<svg class="stroke-primary hover:stroke-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2">
									<path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"></path>
								</svg>
							</div>
						</div>
					</a>
				</div>
			</div>

			<table class="table w-full">
				<thead>
					<tr class="border-b-2">
						<th class="text-left py-2">Title</th>
						<th class="text-center py-2 px-4 w-1/4 lg:w-1/6">Status</th>
						<th class="text-center py-2 px-4 w-1/4 lg:w-1/6">Action</th>
					</tr>
				</thead>
				<tbody>

					<?php foreach ($articles as $article) : ?>
						<tr class="border-b-2">
							<td>
								<div><?= $article->title ?></div>
								<div class="text-gray-500"><small><?= $article->created_at ?><small></div>
							</td>
							<?php if ($article->draft === 'true') : ?>
								<td class="text-center text-gray-500">Draft</td>
							<?php else : ?>
								<td class="text-center text-primary">Published</td>
							<?php endif ?>
							<td>
								<div class="flex flex-wrap gap-1 justify-center py-1">
									<a href="<?= site_url('article/' . $article->slug) ?>" class="bg-primary rounded-lg p-1 text-white flex items-center" target="_blank" role="button">
										<svg class="h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
											<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
											<g id="SVGRepo_iconCarrier">
												<circle cx="12" cy="12" r="3" stroke="#ffff" stroke-width="2"></circle>
												<path d="M20.188 10.9343C20.5762 11.4056 20.7703 11.6412 20.7703 12C20.7703 12.3588 20.5762 12.5944 20.188 13.0657C18.7679 14.7899 15.6357 18 12 18C8.36427 18 5.23206 14.7899 3.81197 13.0657C3.42381 12.5944 3.22973 12.3588 3.22973 12C3.22973 11.6412 3.42381 11.4056 3.81197 10.9343C5.23206 9.21014 8.36427 6 12 6C15.6357 6 18.7679 9.21014 20.188 10.9343Z" stroke="#fff" stroke-width="2"></path>
											</g>
										</svg>
									</a>
									<a href="<?= site_url('admin/post/edit/' . $article->id) ?>" class="bg-green-500 rounded-lg py-1 px-2 text-white" role="button">Edit</a>
									<a href="#" data-delete-url="<?= site_url('admin/post/delete/' . $article->id) ?>" class="rounded-lg bg-rose-500 p-1 flex items-center" role="button" onclick="deleteConfirm(this)">
										<svg class="h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
											<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
											<g id="SVGRepo_iconCarrier">
												<path d="M10 12V17" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M14 12V17" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M4 7H20" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M6 10V18C6 19.6569 7.34315 21 9 21H15C16.6569 21 18 19.6569 18 18V10" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											</g>
										</svg>
									</a>
								</div>
							</td>
						</tr>
					<?php endforeach ?>

				</tbody>
			</table>

			<?= $this->pagination->create_links(); ?>
			<?php $this->load->view('admin/_partials/footer.php') ?>
		</div>
	</main>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script>
		function deleteConfirm(event) {
			Swal.fire({
				title: 'Delete Confirmation!',
				text: 'Are you sure to delete the item?',
				icon: 'warning',
				showCancelButton: true,
				cancelButtonText: 'No',
				confirmButtonText: 'Yes Delete',
				customClass: {
					popup: 'rounded-xl',
					confirmButton: 'bg-rose-500 text-white px-6 py-2 rounded-lg mr-2',
					cancelButton: 'bg-green-500 text-white px-6 py-2 rounded-lg mr-2',
				},
				buttonsStyling: false,
			}).then(dialog => {
				if (dialog.isConfirmed) {
					window.location.assign(event.dataset.deleteUrl);
				}
			});
		}
	</script>

	<?php if ($this->session->flashdata('message')) : ?>
		<script>
			const Toast = Swal.mixin({
				toast: true,
				position: 'top',
				showConfirmButton: false,
				timer: 3000,
				timerProgressBar: true,
				didOpen: (toast) => {
					toast.addEventListener('mouseenter', Swal.stopTimer)
					toast.addEventListener('mouseleave', Swal.resumeTimer)
				}
			})

			Toast.fire({
				icon: 'success',
				title: '<?= $this->session->flashdata('message') ?>'
			})
		</script>
	<?php endif ?>
</body>

</html>