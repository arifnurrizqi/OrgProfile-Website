<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="<?= base_url('public/img/logo/' . $landing[0]->logo) ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Arif Nur Rizqi">
	<meta name="robots" content="noindex, nofollow">
	<title>HIMA-TE UNWIKU <?= $landing[0]->tahun_periode . ' | Kabinet ' . $landing[0]->kabinet; ?> </title>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
	<link href="<?= base_url('public/css/output.css') ?>" rel="stylesheet">
	<!-- <link href="<?= base_url('public/css/output.css') ?>" rel="stylesheet"> -->
	<!-- <script>
			if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
					document.documentElement.classList.add('dark');
			} else {
					document.documentElement.classList.remove('dark');
			}
	</script> -->
</head>

<body>
	<section class="dark:bg-gray-900 container">
		<div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80 min-h-screen" aria-hidden="true">
			<div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#77eaee] to-[#5f89ff] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
		</div>
		<div class="flex flex-col items-center justify-center px-1 py-8 mx-auto h-screen lg:py-0">
			<a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
				<img class="w-8 h-8 mr-2" src="<?= base_url('public/img/favicon.png') ?>" alt="logo">
				HIMA-TE UNWIKU
			</a>
			<div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
				<div class="p-6 space-y-4 md:space-y-6 sm:p-8">
					<h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
						Masuk ke Dashboard
					</h1>
					<?php if ($this->session->flashdata('message_login_error')) : ?>
						<div class="w-full lg:mx-auto" id="alert-danger">
							<div id="alert" class="flex p-4 mb-4 bg-red-100 rounded-lg dark:bg-red-200">
								<svg class="flex-shrink-0 w-5 h-5 text-red-700 dark:text-red-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
									<path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
								</svg>
								<span class="sr-only">Info</span>
								<p class="ml-3 text-sm font-medium text-red-700 dark:text-red-800">
									<?= $this->session->flashdata('message_login_error') ?>
								</p>
							</div>
						</div>
					<?php endif ?>
					<form class="space-y-3 md:space-y-4" action="<?= base_url('auth/validate_captcha') ?>" method="post">
						<div>
							<label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email/Username</label>
							<input type="text" name="username" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary block w-full p-2.5 " placeholder="Your username or email" required="">
						</div>
						<div>
							<label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
							<input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary block w-full p-2.5 " required="">
						</div>
						<div>
							<div class="flex items-center justify-between">
								<label for="captcha" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Security Code</label>
								<?php echo $captcha_image; ?>
							</div>
							<input type="captcha" name="captcha" id="captcha" placeholder="masukan kode diatas" class="mt-0 bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary block w-full p-2.5 " required="">
						</div>
						<div class="flex items-center justify-between">
							<div class="flex items-start">
								<div class="flex items-center h-5">
									<input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray dark:focus:ring-primary dark:ring-offset-gray-800" required="">
								</div>
								<div class="ml-3 text-sm">
									<label for="remember" class="text-gray-500 dark:text-gray-300">Remember me</label>
								</div>
							</div>
							<a href="#" class="text-right text-sm font-medium text-primary hover:underline dark:text-primary-500">Forgot password?</a>
						</div>
						<input type="submit" value="Sign In" class="w-full text-white bg-primary hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary dark:hover:bg-primary-700 dark:focus:ring-primary-800"></input>
					</form>
				</div>
			</div>
			<span class="text-xs text-center font-semibold py-6 text-secondary">
				&copy; 2024 HIMA-TE UNWIKU All Right Reserved <br> Developed with ❤️ in Purwokerto by <a href="https://instagram.com/arifnur.rizqi" target="_blank" class="font-bold text-primary">ARNUR</a>
			</span>
		</div>
	</section>
</body>

</html>