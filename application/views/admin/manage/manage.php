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
			<h1 class="text-xl font-bold lg:mb-2.5">List Landing Page</h1>

			<div class="w-full md:flex md:justify-between py-3 flex-wrap">
				<form action="" method="GET">
					<div class=" flex gap-2 w-full">
						<input type="search" name="keyword" placeholder="Cari halaman" class="py-2 px-3 rounded-lg w-full border-2 border-slate-200" value="<?= html_escape($keyword) ?>">
						<input type="submit" value="Cari" class="bg-primary rounded-lg py-2 px-3 text-white ">
					</div>
				</form>
				<div class="flex gap-3">
					<a href="<?= site_url('admin/manage/new') ?>" class="border border-primary text-primary rounded-2xl lg:bg-transparent dark:lg:bg-transparent dark:bg-slate-700 bg-white lg:shadow-none shadow-xl z-20 overflow-hidden lg:p-1 p-3 lg:rounded-lg font-semibold lg:static fixed bottom-24 right-5 md:bottom-28 md:right-10  hover:bg-primary hover:text-white transition duration-300 ease-in-out cursor-pointer" role="button">
						<div class="cursor-pointer">
							<span class="lg:block hidden px-3 py-1">Tambah Data</span>
							<div class="w-8 lg:hidden">
								<svg class="stroke-primary hover:stroke-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2">
									<path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"></path>
								</svg>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="relative overflow-x-auto pb-6">
				<table class="table rounded-xl w-full">
					<thead>
						<tr class="border-b-2 border-slate-300 mb-2">
							<th class="text-left py-3 px-4">Kabinet</th>
							<th style="width: 18%;" class="text-center py-3 px-4">Logo</th>
							<th style="width: 12%;" class="text-center py-3 px-4">Fokus Isu</th>
							<th style="width: 10%;" class="text-center py-3 px-4">Status</th>
							<th style="width: 15%;" class="text-center py-3 px-4">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($data_landing as $landing) : ?>
							<tr class="border-b hover:bg-white">
								<td class="px-4">
									<p class="font-medium whitespace-nowrap"><?= $landing->kabinet ?></p>
									<div class="text-gray-500"><small><?= $landing->organisasi . ' ' . $landing->tahun_periode ?><small></div>
								</td>
								<td>
									<div class="flex flex-wrap gap-2 lg:gap-0 justify-center p-2 items-center">
										<?php
										$logo = base_url('public/img/logo/' . $landing->logo);
										?>
										<img src="<?= $logo ?>" alt="<?= htmlentities($landing->kabinet, TRUE) ?>" class="rounded-lg h-14 mx-auto">
										<a href="<?= site_url('admin/manage/filosofi/' . $landing->id) ?>" class="h-full bg-primary rounded-lg p-2 text-white text-sm text-center whitespace-nowrap" role="button"><span class="font-bold border-2 border-white rounded-md px-1">+</span> Filosofi</a>
									</div>
								</td>
								<td>
									<div class="flex flex-wrap gap-2 lg:gap-0 justify-center p-2 items-center">
										<a href="<?= site_url('admin/manage/fokusIsu/' . $landing->id) ?>" class="h-full bg-primary rounded-lg p-2 text-white text-sm text-center whitespace-nowrap" role="button"><span class="font-bold border-2 border-white rounded-md px-1">+</span> Fokus</a>
									</div>
								</td>
								<td class="px-6">
									<form class="js-form flex justify-center items-center flex-wrap" method="POST" action="<?= site_url('admin/manage/submit_status_landing') ?>">
										<label class="relative inline-flex items-center cursor-pointer justify-center">
											<?php
											$get_status = $landing->status == 'true' ? 'checked' : '';
											$value = $get_status == 'checked' ? 'true' : 'false';
											?>
											<input type="hidden" name="api_key" value="<?= $landing->id; ?>" />
											<input type="checkbox" class="sr-only peer js-switch" id="switch" name="status_feedback" value="<?= $value; ?>" <?php echo $get_status; ?> <?php if ($landing->status === 'true') : ?> disabled <?php endif ?> />
											<div class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary/40 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all  peer-checked:bg-primary"></div>
										</label>
										<?php if ($landing->status === 'false') : ?>
											<span class="text-xs font-medium text-gray-900 whitespace-nowrap mt-1">Non-aktif</span>
										<?php else : ?>
											<span class="text-xs font-medium text-gray-900 mt-1">Aktif</span>
										<?php endif ?>
									</form>
								</td>
								<td>
									<div class="flex flex-wrap gap-1 justify-center p-2">
										<a href="<?= site_url('admin/manage/edit/' . $landing->id) ?>" class="bg-green-500 rounded-lg py-2 px-3 text-white" role="button">Detail</a>
									</div>
								</td>
							</tr>
						<?php endforeach ?>

					</tbody>
				</table>
			</div>
			<?php $this->load->view('admin/_partials/footer.php') ?>
		</div>
	</main>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script>
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