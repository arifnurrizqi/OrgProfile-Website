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

			<div class="w-full rounded-2xl bg-gradient-to-r from-slate-50 to-primary/50 p-4 border-2">
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
	<?php if ($this->session->flashdata('message')) : ?>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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