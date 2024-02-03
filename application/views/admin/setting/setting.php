<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
	<?php $this->load->view('admin/_partials/head.php') ?>
</head>

<body>
	<div class="max-w-7xl max-w mx-auto flex lg:py-5 pb-32 px-3 pt-4 lg:gap-8">

		<?php $this->load->view('admin/_partials/side_nav.php') ?>

		<div class="flex flex-col w-full right-0">

			<?php $this->load->view('admin/_partials/topbar.php') ?>

			<h1 class="text-xl font-bold mb-2.5">User account</h1>

			<div class="w-full rounded-2xl bg-gradient-to-r from-slate-50 to-primary/50 p-4 border-2 mb-3">
				<span class="text-lg font-bold">Avatar</span>
				<div class="mt-4 flex gap-4">
					<?php
					$avatar = $current_user->avatar ?
						base_url('public/img/avatar/' . $current_user->avatar)
						: get_gravatar($current_user->email)
					?>
					<img src="<?= $avatar ?>" alt="<?= htmlentities($current_user->name, TRUE) ?>" class="rounded-full h-24">
					<div class="flex items-center gap-3">
						<a href="<?= site_url('admin/setting/remove_avatar') ?>" class=" text-red-500 items-center flex px-3 py-2 bg-red-100 rounded-xl hover:bg-red-200 transition duration-300 ease-in-out cursor-pointer">Remove Avatar</a>
						<a href="<?= site_url('admin/setting/upload_avatar') ?>" class=" items-center flex px-3 py-2 bg-primary/20 rounded-xl hover:bg-primary/50 transition duration-300 ease-in-out cursor-pointer">Change Avatar</a>
					</div>
				</div>
			</div>
			
			<div id="accordion-collapse" data-accordion="collapse">
				<h2 id="accordion-collapse-heading-2">
					<button type="button" class="flex items-center justify-between w-full p-3 font-medium rtl:text-right border-2 rounded-2xl border-gray-200  dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-primary/20 dark:hover:bg-gray-800 gap-3 transition duration-300 ease-in-out cursor-pointer" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
					<span class="text-lg font-bold">-- Template Website</span>
						<svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0 transition-transform duration-200 transform" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
							<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
						</svg>
					</button>
				</h2>
				<div id="accordion-collapse-body-2" class="hidden mt-1" aria-labelledby="accordion-collapse-heading-2">
					<div class="p-3 border rounded-2xl border-gray-200 dark:border-gray-700">
						<table class="table rounded-xl w-full">
							<thead>
								<tr class="border-b-2 border-slate-300 mb-2">
									<th class="text-left pb-2 ">Template</th>
									<th style="width: 10%;" class="text-center pb-2 ">Status</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($data_template as $template) : ?>
									<tr class="border-b hover:bg-white">
										<td class="">
											<p class="font-medium whitespace-nowrap"><?= $template->nama_template ?></p>
											<span class="text-gray-500 text-xs font-medium">Dibuat oleh <?= $template->author ?></span>
										</td>
										<td class="px-6">
											<form class="js-form flex justify-center items-center flex-wrap" method="POST" action="<?= site_url('admin/setting/submit_status_template') ?>">
												<label class="relative inline-flex items-center cursor-pointer justify-center">
													<?php
													$get_status = $template->status == 'true' ? 'checked' : '';
													$value = $get_status == 'checked' ? 'true' : 'false';
													?>
													<input type="hidden" name="api_key" value="<?= $template->id_template; ?>" />
													<input type="checkbox" class="sr-only peer js-switch" id="switch" name="status_feedback" value="<?= $value; ?>" <?php echo $get_status; ?> <?php if ($template->status === 'true') : ?> disabled <?php endif ?> />
													<div class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary/40 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all  peer-checked:bg-primary"></div>
												</label>
												<?php if ($template->status === 'false') : ?>
													<span class="text-xs font-medium text-gray-900 whitespace-nowrap mt-1">Non-aktif</span>
												<?php else : ?>
													<span class="text-xs font-medium text-gray-900 mt-1">Aktif</span>
												<?php endif ?>
											</form>
										</td>
									</tr>
								<?php endforeach ?>

							</tbody>
						</table>
					</div>
				</div>
			</div>

			<div class="w-full rounded-2xl border-2 p-3 mt-4">
				<div class="flex flex-nowrap justify-between">
					<span class="text-lg font-bold">Profile Website</span>
					<a href="<?= site_url('admin/setting/edit_identitas') ?>" class="py-1 px-2 text-primary bg-primary/10 rounded-xl hover:bg-primary/30 transition duration-300 ease-in-out cursor-pointer">Edit Profile</a>
				</div>
				<div class="w-full py-2">
					<div class="w-full flex justify-between md:flex-nowrap border-b-2 items-center mb-2 md:justify-start">
						<div class="py-1 font-medium text-dark md:w-1/5">Nama Website</div>
						<div class="text-gray-700 font-light md:w-4/5 flex gap-1"><span class="hidden md:block">: </span> <?= html_escape($profile[0]->nama_website) ?></div>
					</div>
					<div class="w-full flex justify-between md:flex-nowrap border-b-2 items-center mb-2 md:justify-start">
						<div class="py-1 font-medium text-dark md:w-1/5">Nomer Telp</div>
						<div class="text-gray-700 font-light md:w-4/5 flex gap-1"><span class="hidden md:block">: </span> <?= html_escape($profile[0]->no_telp) ?></div>
					</div>
					<!-- <div class="w-full flex justify-between md:flex-nowrap border-b-2 items-center mb-2 md:justify-start">
						<div class="py-1 font-medium text-dark md:w-1/5">Favicon</div>
						<div class="md:w-4/5 flex gap-1">
							<?php
							$fotoPengurus = base_url('public/img/' . $profile[0]->favicon);
							?>
							<span class="hidden md:block">: </span>
							<img src="<?= $fotoPengurus ?>" alt="<?= htmlentities($profile[0]->favicon, TRUE) ?>" class="rounded-lg h-8 py-1">
						</div>
					</div> -->
					<div class="w-full flex flex-wrap justify-between md:flex-nowrap border-b-2 items-center mb-2 md:justify-start">
						<div class="py-1 font-medium text-dark md:w-1/5">Url Website</div>
						<div class="text-gray-700 font-light md:w-4/5 flex gap-1"><span class="hidden md:block">: </span> <?= html_escape($profile[0]->url) ?></div>
					</div>
					<div class="w-full flex flex-wrap justify-between md:flex-nowrap border-b-2 items-center mb-2 md:justify-start">
						<div class="py-1 font-medium text-dark md:w-1/5">Email</div>
						<div class="text-gray-700 font-light md:w-4/5 flex gap-1"><span class="hidden md:block">: </span> <?= html_escape($profile[0]->email) ?></div>
					</div>
					<div class="w-full flex flex-wrap justify-between md:flex-nowrap border-b-2 items-center mb-2 md:justify-start">
						<div class="py-1 font-medium text-dark md:w-1/5">Alamat</div>
						<div class="text-gray-700 font-light md:w-4/5 flex gap-1"><span class="hidden md:block">: </span> <?= html_escape($profile[0]->address) ?></div>
					</div>
				</div>
			</div>

			<div class="w-full rounded-2xl border-2 p-3 mt-4">
				<div class="flex flex-nowrap justify-between">
					<span class="text-lg font-bold">Profile Settings</span>
					<a href="<?= site_url('admin/setting/edit_profile') ?>" class="py-1 px-2 text-primary bg-primary/10 rounded-xl hover:bg-primary/30 transition duration-300 ease-in-out cursor-pointer">Edit Profile</a>
				</div>
				<div class="w-full py-2">
					<div class="w-full flex flex-wrap justify-between md:flex-nowrap border-b-2 items-center mb-2 md:justify-start">
						<div class="py-1 font-medium text-dark md:w-1/5">Nama</div>
						<div class="text-gray-700 font-light md:w-4/5 flex gap-1"><span class="hidden md:block">:</span><?= html_escape($current_user->name) ?></div>
					</div>
					<div class="w-full flex flex-wrap justify-between md:flex-nowrap border-b-2 items-center mb-2 md:justify-start">
						<div class="py-1 font-medium text-dark md:w-1/5">Email</div>
						<div class="text-gray-700 font-light md:w-4/5 flex gap-1"><span class="hidden md:block">:</span><?= html_escape($current_user->email) ?></div>
					</div>
				</div>
			</div>

			<div class="w-full rounded-2xl border-2 p-3 my-4">
				<div class="flex flex-nowrap justify-between items-center">
					<span class="text-lg font-bold">Security & Password</span>
					<a href="<?= site_url('admin/setting/edit_password') ?>" class="py-1 px-2 text-primary bg-primary/10 rounded-xl hover:bg-primary/30 transition duration-300 ease-in-out cursor-pointer whitespace-nowrap">Edit Password</a>
				</div>
				<div class="w-full py-2">
					<div class="w-full flex flex-wrap justify-between md:flex-nowrap border-b-2 items-center mb-2 md:justify-start">
						<div class="py-1 font-medium text-dark md:w-1/5">Your Password</div>
						<div class="text-gray-700 font-light md:w-4/5 flex gap-1"><span class="hidden md:block">:</span>******</div>
					</div>
					<div class="w-full flex flex-wrap justify-between md:flex-nowrap border-b-2 items-center mb-2 md:justify-start">
						<div class="py-1 font-medium text-dark md:w-1/5">Last Changed</div>
						<div class="text-gray-700 font-light md:w-4/5 flex gap-1"><span class="hidden md:block">:</span><?= $current_user->password_updated_at ?></div>
					</div>
				</div>
			</div>

			<hr>
			
			<div class="w-full rounded-xl border-2 py-2 px-3 mt-4">
				<div class="flex flex-nowrap justify-between items-center">
					<span class="text-lg font-bold">Perlu Bantuan?</span>
					<a href="https://t.me/arifnurrizqi" class="py-1 px-2 text-primary bg-primary/10 rounded-xl hover:bg-primary/30 transition duration-300 ease-in-out cursor-pointer whitespace-nowrap">Hubungi Developer</a>
				</div>
			</div>
			<div class="w-full rounded-xl border-2 py-2 px-3 mt-2">
				<div class="flex flex-nowrap justify-between items-center">
					<span class="text-lg font-bold">Source Code</span>
					<a href="https://github.com/arifnurrizqi/OrgProfile-Website" target="_blank" class="py-1 px-2 text-primary bg-primary/10 rounded-xl hover:bg-primary/30 transition duration-300 ease-in-out cursor-pointer whitespace-nowrap">Kunjungi Github</a>
				</div>
			</div>
			<div class="grid lg:hidden gap-2 mt-3">
				<span class="text-center text-secondary">Versi Aplikasi 1.1.0</span>
				<a href="<?= site_url('auth/logout') ?> " class="btn-outline" type="button">Keluar</a>
			</div>

			<?php $this->load->view('admin/_partials/footer.php') ?>

		</div>
	</div>

	<script src="<?= base_url('public/js/flowbite.js') ?>"></script>
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