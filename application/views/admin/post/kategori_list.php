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
			<h1 class="text-xl font-bold lg:mb-2.5">List Kategori</h1>

			<div class="w-full flex justify-between py-3">
				<div class=" flex">
					<form action="" method="GET">
						<input type="search" name="keyword" placeholder="Cari kategori" class="py-2 px-3  rounded-lg" value="<?= html_escape($keyword) ?>">
						<input type="submit" value="Cari" class="bg-primary rounded-lg py-2 px-3 text-white ">
					</form>
				</div>
				<div class="flex gap-3">
					<a href="<?= site_url('admin/post/new_kategori') ?>" class="border border-primary text-primary rounded-2xl lg:bg-transparent dark:lg:bg-transparent dark:bg-slate-700 bg-white lg:shadow-none shadow-xl z-20 overflow-hidden lg:p-1 p-3 lg:rounded-lg font-semibold lg:static fixed bottom-24 right-5 md:bottom-28 md:right-10hover:bg-primary hover:text-white transition duration-300 ease-in-out cursor-pointer" role="button">
						<div class="cursor-pointer">
							<span class="lg:block hidden px-3 py-1">Tambah Kategori</span>
							<div class="w-8 lg:hidden">
								<svg class="stroke-primary hover:stroke-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2">
									<path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"></path>
								</svg>
							</div>
						</div>
					</a>
				</div>
			</div>

			<table class="table">
				<thead>
					<tr class="border-b-2">
						<th class="text-left py-3 px-4">Title</th>
						<th style="width: 10%;" class="text-center py-3 px-4">Posisi</th>
						<th style="width: 10%;" class="text-center py-3 px-4">Status</th>
						<th style="width: 25%;" class="text-center py-3 px-4">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($categories as $kategori) : ?>
						<tr class="border-b-2">
							<td class="px-4">
								<div><?= $kategori->nama_kategori ?></div>
							</td>
							<td class="px-4 text-center">
								<div><?= $kategori->sidebar ?></div>
							</td>
							<td class="px-6">
								<form class="js-form flex justify-center items-center flex-wrap" method="POST" action="<?= site_url('admin/post/submit_status_kategori') ?>">
									<label class="relative inline-flex items-center cursor-pointer justify-center">
										<?php
										$get_status = $kategori->status == 'true' ? 'checked' : '';
										$value = $get_status == 'checked' ? 'true' : 'false';
										?>
										<input type="hidden" name="api_key" value="<?= $kategori->id; ?>" />
										<input type="checkbox" class="sr-only peer js-switch" id="switch" name="status_kategori" value="<?= $value; ?>" <?php echo $get_status; ?>>
										<div class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary/40 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all  peer-checked:bg-primary"></div>
									</label>
									<?php if ($kategori->status === 'false') : ?>
										<span class="text-xs font-medium text-gray-900 whitespace-nowrap mt-1">Non-aktif</span>
									<?php else : ?>
										<span class="text-xs font-medium text-gray-900 mt-1">Aktif</span>
									<?php endif ?>
								</form>
							</td>
							<td>
								<div class="flex flex-wrap gap-1 justify-center p-2">
									<a href="<?= site_url('admin/post/edit_kategori/' . $kategori->id) ?>" class="bg-green-500 rounded-lg py-1.5 px-2.5 text-white" role="button">Edit</a>
									<a href="#" data-delete-url="<?= site_url('admin/post/delete_kategori/' . $kategori->id) ?>" class="rounded-lg bg-rose-500 p-1 flex items-center justify-center" role="button" onclick="deleteConfirm(this)">
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
		const switches = document.querySelectorAll('.js-switch');
		const forms = document.querySelectorAll('.js-form');

		switches.forEach(function(switchElem, index) {
			switchElem.addEventListener('change', function() {
				this.value = this.checked;
				forms[index].submit();
			});
		});
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