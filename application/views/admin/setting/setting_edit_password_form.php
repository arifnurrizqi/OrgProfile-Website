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

			<h1 class="text-xl font-bold lg:mb-2.5">Reset Password</h1>

			<form action="" method="POST">
				<div class="w-full flex flex-wrap mb-2">
					<label for="password" class="w-full mb-2 font-medium text-gray-900 dark:text-white">Password Baru</label>
					<input type="password" name="password" class="<?= form_error('password') ? 'focus:ring-rose-500' : 'focus:ring-primary' ?> bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:border-primary focus:outline-none focus:ring-1  block w-full p-2.5 " value="<?= set_value("password") ?>" required />
					<div class="font-semibold text-rose-500">
						<?= form_error('password') ?>
					</div>
				</div>
				<div class="w-full flex flex-wrap mb-2">
					<label for="password_confirm" class="w-full mb-2 font-medium text-gray-900 dark:text-white">Konfirmasi Password Baru</label>
					<input type="password" name="password_confirm" class="<?= form_error('password_confirm') ? 'focus:ring-rose-500' : 'focus:ring-primary' ?> bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:border-primary focus:outline-none focus:ring-1 block w-full p-2.5 mb-3" value="<?= set_value("password_confirm") ?>" required />
					<div class="font-semibold">
						<?= form_error('password_confirm') ?>
					</div>
				</div>

				<div>
					<button type="submit" name="save" class="bg-primary py-2 px-3 text-center rounded-lg text-white mt-2">Save Password</button>
				</div>
			</form>
		</div>
	</div>

</body>

</html>