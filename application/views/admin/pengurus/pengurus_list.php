<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
	<?php $this->load->view('admin/_partials/head.php') ?>
	<script src="<?= base_url('/public/js/vanilla-dataTables.min.js') ?>" type="text/javascript"></script>
</head>

<body>
	<main class="max-w-7xl max-w mx-auto flex lg:py-5 pb-32 px-4 pt-4 lg:gap-8">

		<?php $this->load->view('admin/_partials/side_nav.php') ?>

		<div class="flex flex-col w-full">
			<?php $this->load->view('admin/_partials/topbar.php') ?>
			<h1 class="text-xl font-bold lg:mb-2.5">Pilih kabinet kepengurusan</h1>

			<div class="w-full md:flex md:justify-between py-3 flex-wrap">
				<form action="<?= site_url('admin/pengurus/index'); ?>" method="GET">
					<div class="flex gap-2 w-full">
						<select name="kabinet" id="" class=" py-2 px-3 rounded-lg w-full p-2 active:ring-2 active:ring-primary border-primary focus:outline-none focus:ring-2 focus:ring-primary">
							<option value="">Pilih kabinet</option>
							<?php foreach ($kabinets as $kabinet) : ?>
								<option value="<?= $kabinet->id ?>" <?= ($selectedLanding == $kabinet->id) ? 'selected' : ''; ?>>
									<?= $kabinet->kabinet ?>
								</option>
							<?php endforeach ?>
						</select>
						<button type="submit" value="Submit" class="bg-primary rounded-lg py-2 px-3 text-white">Tampilkan</button>
					</div>
				</form>
				<button class="border border-primary text-primary rounded-2xl lg:bg-transparent dark:lg:bg-transparent dark:bg-slate-700 bg-white lg:shadow-none shadow-xl z-20 overflow-hidden lg:p-1 p-3 lg:rounded-lg font-semibold lg:static fixed bottom-24 right-5 md:bottom-28 md:right-10 hover:bg-primary hover:text-white transition duration-300 ease-in-out cursor-pointer <?php echo ($selectedLanding) ? 'bg-primary cursor-pointer' : 'bg-primary/50 cursor-not-allowed' ?>" role="button" <?php echo ($selectedLanding) ? '' : 'disabled' ?> data-menko="<?= site_url('admin/pengurus/menko_form/' . $selectedLanding) ?>" data-menteri="<?= site_url('admin/pengurus/menteri_form/' . $selectedLanding) ?>" data-staff="<?= site_url('admin/pengurus/staff_form/' . $selectedLanding) ?>" onclick="addPengurus(this)" id="tambahPengurus">
					<div class="cursor-pointer">
						<span class="lg:block hidden px-3 py-1">Tambah Pengurus</span>
						<div class="w-8 lg:hidden">
							<svg class="stroke-primary hover:stroke-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2">
								<path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"></path>
							</svg>
						</div>
					</div>
				</button>
			</div>
			<div class="relative overflow-x-auto pb-4 border rounded-2xl px-2">
				<?php if ($selectedLanding) : ?>
					<?php if ($data_presWapres) : ?>
						<table class="table w-full" id="myTable">
							<thead>
								<tr class="border-b-2">
									<th class="text-left py-3 px-4">Nama</th>
									<th style="width: 25%;" class="text-left py-3 px-4">Jabatan</th>
									<th style="width: 15%;" class="text-center py-3 px-4 hidden md:table-cell">Prodi, Angkatan</th>
									<th style="width: 15%;" class="text-center py-3 px-4">Action</th>
								</tr>
							</thead>
							<tbody>
								<!-- ketum & waketum -->
								<?php foreach ($data_presWapres as $pimpinan) : ?>
									<tr class="border-b-[1px]">
										<td class="pl-4 py-4"><?= $pimpinan->nama ?></td>
										<td class=" px-2">
											<span class="whitespace-nowrap bg-indigo-300 rounded-lg px-2 py-0.5"><?= $pimpinan->jabatan ?></span>
										</td>
										<td class="text-center px-2 hidden md:table-cell"><?= $pimpinan->prodi ?>, <?= $pimpinan->angkatan ?></td>
										<td class="text-center px-2">
											<div class="flex gap-1 justify-center items-center">
												<a href="<?= site_url('admin/pengurus/ketum_edit/' . $pimpinan->id_landing . '/' . $pimpinan->id) ?>" class="bg-green-500 rounded-lg py-1 px-2 text-white" role="button">Edit
												</a>
											</div>
										</td>
									</tr>
								<?php endforeach ?>
								<!-- Menko, Menteri, Staf -->
								<?php foreach ($data_koordinator as $koor) : ?>
									<tr class="border-b-[1px]">
										<td class="pl-4 py-4"><?= $koor->nama ?></td>
										<td class=" px-2">
											<span class="whitespace-nowrap bg-sky-300 rounded-lg px-2 py-0.5"><?= $koor->jabatan ?></span>
										</td>
										<td class="text-center px-2 hidden md:table-cell"><?= $koor->prodi ?>, <?= $koor->angkatan ?></td>
										<td class="text-center px-2">
											<div class="flex gap-1 justify-center items-center">
												<a href="<?= site_url('admin/pengurus/menko_edit/' . $koor->id_landing . '/' . $koor->id) ?>" class="bg-green-500 rounded-lg py-1 px-2 text-white" role="button">Edit
												</a>
												<a href="#" data-delete-url="<?= site_url('admin/pengurus/delete/' . $koor->id . '/' . $koor->id_landing) ?>" class="rounded-lg bg-rose-500 p-1" role="button" onclick="deleteConfirm(this)">
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
									<?php
									$data_menteri = $this->pengurus_model->findMenteriByIdKoordinator($koor->id, $koor->id_landing);
									?>
									<?php foreach ($data_menteri as $menteri) : ?>
										<tr class="border-b-[1px]">
											<td class="pl-4 py-4"><?= $menteri->nama ?></td>
											<td class=" px-2">
												<span class="whitespace-nowrap bg-teal-300 rounded-lg px-2 py-0.5"><?= $menteri->jabatan ?></span>
											</td>
											<td class="text-center px-2 hidden md:table-cell"><?= $menteri->prodi ?>, <?= $menteri->angkatan ?></td>
											<td class="text-center px-2">
												<div class="flex gap-1 justify-center items-center">
													<a href="<?= site_url('admin/pengurus/menteri_edit/' . $menteri->id_landing . '/' . $menteri->id) ?>" class="bg-green-500 rounded-lg py-1 px-2 text-white" role="button">Edit
													</a>
													<a href="#" data-delete-url="<?= site_url('admin/pengurus/delete/' . $menteri->id . '/' . $menteri->id_landing) ?>" class="rounded-lg bg-rose-500 p-1" role="button" onclick="deleteConfirm(this)">
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
										<?php
										$data_staf = $this->pengurus_model->findStafByIdMenteri($menteri->id, $menteri->id_landing);
										?>
										<?php foreach ($data_staf as $staf) : ?>
											<tr class="border-b-[1px]">
												<td class="pl-4 py-4"><?= $staf->nama ?></td>
												<td class=" px-2">
													<span class="whitespace-nowrap bg-yellow-300 rounded-lg px-2 py-0.5"><?= $staf->jabatan ?></span>
												</td>
												<td class="text-center px-2 hidden md:table-cell"><?= $staf->prodi ?>, <?= $staf->angkatan ?></td>
												<td class="text-center px-2">
													<div class="flex gap-1 justify-center items-center">
														<a href="<?= site_url('admin/pengurus/staff_edit/' . $staf->id_landing . '/' . $staf->id) ?>" class="bg-green-500 rounded-lg py-1 px-2 text-white" role="button">Edit
														</a>
														<a href="#" data-delete-url="<?= site_url('admin/pengurus/delete/' . $staf->id . '/' . $staf->id_landing) ?>" class="rounded-lg bg-rose-500 p-1" role="button" onclick="deleteConfirm(this)">
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
									<?php endforeach ?>
								<?php endforeach ?>

								<!-- <?php foreach ($pengurusList as $pengurus) : ?>
									<tr class="border-b-[1px]">
										<td class="pl-4 py-4"><?= $pengurus->nama ?></td>
										<td class=" px-2">
											<span class="whitespace-nowrap 
											<?php if ($pengurus->level == '1') {
													echo 'bg-indigo-300 rounded-lg px-2 py-0.5';
												} elseif ($pengurus->level == '2') {
													echo 'bg-sky-300 rounded-lg px-2 py-0.5';
												} elseif ($pengurus->level == '3') {
													echo 'bg-teal-300 rounded-lg px-2 py-0.5';
												} elseif ($pengurus->level == '4') {
													echo 'bg-yellow-300 rounded-lg px-2 py-0.5';
												} ?>"><?= $pengurus->jabatan ?></span>
										</td>
										<td class="text-center px-2 hidden md:table-cell"><?= $pengurus->prodi ?>, <?= $pengurus->angkatan ?></td>
										<td class="text-center px-2">
											<div class="flex gap-1 justify-center items-center">
												<a href="
												<?php if ($pengurus->level == '1') {
													echo site_url('admin/pengurus/ketum_edit/' . $pengurus->id_landing . '/' . $pengurus->id);
												} elseif ($pengurus->level == '2') {
													echo site_url('admin/pengurus/menko_edit/' . $pengurus->id_landing . '/' . $pengurus->id);
												} elseif ($pengurus->level == '3') {
													echo site_url('admin/pengurus/menteri_edit/' . $pengurus->id_landing . '/' . $pengurus->id);
												} elseif ($pengurus->level == '4') {
													echo site_url('admin/pengurus/staff_edit/' . $pengurus->id_landing . '/' . $pengurus->id);
												}  ?>" class="bg-green-500 rounded-lg py-1 px-2 text-white" role="button">Edit
												</a>
												<a href="#" data-delete-url="<?= site_url('admin/pengurus/delete/' . $pengurus->id . '/' . $pengurus->id_landing) ?>" class="rounded-lg bg-rose-500 p-1 <?php if ($pengurus->level == '1') {
																																																																																									echo 'hidden';
																																																																																								} ?>" role="button" onclick="deleteConfirm(this)">
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
								<?php endforeach ?> -->

							</tbody>
						</table>
					<?php else : ?>
						<p class="mt-4">Saat ini tidak ada pengurus untuk kabinet ini.</p>
					<?php endif; ?>
				<?php else : ?>
					<p class="mt-4">Silahkan pilih kabinet dan tekan "Tampilkan" untuk menampilkan pengurus.</p>
				<?php endif; ?>
			</div>
			<?php $this->load->view('admin/_partials/footer.php') ?>
		</div>
	</main>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script>
		var myTable = document.querySelector("#myTable");
		var dataTable = new DataTable(myTable);

		function deleteConfirm(event) {
			Swal.fire({
				title: 'Delete Confirmation!',
				text: 'Are you sure to delete the person?',
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
		// Fungsi untuk menampilkan SweetAlert dengan tiga tombol kustom
		function addPengurus() {
			var element = document.getElementById('tambahPengurus');
			var dataMenko = element.dataset.menko;
			var dataMenteri = element.dataset.menteri;
			var dataStaff = element.dataset.staff;

			Swal.fire({
				title: 'Pilih Jabatan Pengurus',
				text: 'Silakan pilih jabatan pengrus yang akan ditambahkan:',
				icon: 'question',
				showCancelButton: true,
				showDenyButton: true,
				confirmButtonText: 'Menko',
				denyButtonText: 'Menteri',
				cancelButtonText: 'Staff',
				customClass: {
					popup: 'rounded-xl',
					confirmButton: 'bg-sky-500 text-white px-6 py-2 rounded-lg mr-2',
					denyButton: 'bg-teal-500 text-white px-6 py-2 rounded-lg mr-2',
					cancelButton: 'bg-green-500 text-white px-6 py-2 rounded-lg mr-2',
					cancelButton: 'bg-yellow-500 text-white px-6 py-2 rounded-lg'
				},
				buttonsStyling: false,
				closeButtonAriaLabel: 'Tutup dialog'
			}).then((result) => {
				if (result.isConfirmed) {
					// Redirect ke halaman form Menko
					window.location.assign(dataMenko);
				} else if (result.dismiss === Swal.DismissReason.deny) {
					window.location.assign(dataMenteri);
				} else if (result.dismiss === Swal.DismissReason.cancel) {
					window.location.assign(dataStaff);
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