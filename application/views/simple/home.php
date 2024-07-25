<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
	<?php $this->load->view('simple/_partials/head.php'); ?>
</head>

<?php $this->load->view('simple/_partials/navbar.php'); ?>

<!-- Hero Section Start -->
<section id="home" class="pt-36 dark:bg-dark">
	<div class="container relative isolate">
		<div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80 min-h-screen" aria-hidden="true">
			<div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#77eaee] to-[#5f89ff] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
		</div>
		<div class="flex flex-wrap">
			<div class="w-full self-center px-4 lg:w-1/2">
				<h2 class="text-lg font-semibold text-primary md:text-2xl mb-3"><?= $landing[0]->organisasi ?> </h2>
				<h1> <span class="mt-1 block text-4xl font-bold text-dark dark:text-white lg:text-5xl mb-3 uppercase"><?= $landing[0]->universitas ?></span></h1>
				<h2 class="mb-5 text-lg font-medium text-secondary lg:text-2xl">Kabinet <span class="text-dark dark:text-white"><?= $landing[0]->kabinet ?></span></h2>
				<p class="mb-10 font-medium leading-relaxed text-secondary"></p>

				<a href="#about" class="rounded-full bg-primary py-3 px-8 text-base font-semibold text-white transition duration-300 ease-in-out hover:opacity-80 hover:shadow-lg">Read More</a>
			</div>
			<div class="w-full self-end px-4 lg:w-1/2">
				<div class="relative mt-10 lg:right-0 lg:mt-9 p-10">
					<img src="<?= base_url('public/img/logo/' . $landing[0]->logo) ?>" width="400px" alt="Logo Kabinet <?= $landing[0]->kabinet ?>" class="relative z-10 mx-auto max-w-full" />
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Hero Section End -->

<!-- about Section Start -->
<section id="about" class=" pt-20 pb-24 lg:pt-36 lg:pb-32 dark:bg-dark">
	<div class="container">
		<div class="flex flex-wrap">
			<div class="mb-10 w-full px-4 lg:w-3/5">
				<h4 class="mb-3 text-lg font-bold uppercase text-primary">About</h4>
				<h2 class="mb-5 max-w-md text-3xl font-bold text-dark dark:text-white lg:text-4xl"> <?= $identitas[0]->nama_website ?></h2>
				<?php
				$longText = $landing[0]->about;

				// Memecah teks menjadi array berdasarkan tanda "."
				$paragraphs = explode("\n", $longText);

				// Menampilkan tag paragraf HTML untuk setiap elemen array
				foreach ($paragraphs as $paragraph) {
					echo "<p class='max-w-2xl text-base font-medium text-secondary lg:text-lg mb-3'>{$paragraph}</p>";
				}
				?>
				<br>
				<a href="<?= base_url('about/' . $landing[0]->slug) ?>" class=" rounded-full bg-primary py-3 px-8 text-base font-semibold text-white transition duration-300 ease-in-out hover:opacity-80 hover:shadow-lg">Profile Kabinet</a>
			</div>
			<div class="w-full px-4 lg:w-2/5">
				<h3 class="mb-4 text-2xl font-semibold text-dark dark:text-white lg:pt-10 lg:text-3xl">Ikuti Kami</h3>
				<p class="mb-6 text-base font-medium text-secondary lg:text-lg">
					Kami sebagai HIMA-TE Unwiku. Kami berkomitmen untuk berkontribusi demi kejayaan Universitas Wijayakusuma Purwokerto. Saksikan dan ikuti setiap langkah serta kisah kami.
				</p>
				<div class="flex items-center">
					<?php
					$allSosmed = $identitas[0]->sosmed;

					// Memecah teks menjadi array berdasarkan tanda "."
					$sosmed = explode(",", $allSosmed); ?>

					<!-- Instagram -->
					<a href="<?= $sosmed[0]; ?>" target="_blank" class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
						<svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
							<title>Instagram</title>
							<path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
						</svg>
					</a>

					<!-- TikTok -->
					<a href="<?= $sosmed[1]; ?>" target="_blank" class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
						<svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
							<title>TikTok</title>
							<path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z" />
						</svg>
					</a>

					<!-- Youtube -->
					<a href="<?= $sosmed[2]; ?>" target="_blank" class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
						<svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
							<title>YouTube</title>
							<path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
						</svg>
					</a>

					<!-- Twitter -->
					<a href="<?= $sosmed[3]; ?>" target="_blank" class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
						<svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
							<title>Twitter</title>
							<path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
						</svg>
					</a>

					<!-- Facebook -->
					<a href="<?= $sosmed[4]; ?>" target="_blank" class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
						<svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
							<title>Facebook</title>
							<path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
						</svg>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- about Section End -->

<!-- Activity Section Start -->
<section id="kajian" class="bg-slate-100 pt-28 lg:pt-32 pb-20 dark:bg-slate-800">
	<div class="container">
		<div class="w-full px-4">
			<div class="mx-auto mb-16 max-w-xl text-center">
				<h4 class="mb-2 text-lg font-semibold text-primary">Activity</h4>
				<h2 class="mb-4 text-3xl font-bold text-dark dark:text-white sm:text-4xl lg:text-5xl">Aktivitas Terbaru</h2>
				<!-- <p class="text-md font-medium text-secondary md:text-lg">
						Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus porro consequuntur alias, commodi nemo enim aliquam ipsam obcaecati? Assumenda, ipsam?
				</p> -->
			</div>
		</div>

		<div class="flex w-full flex-wrap justify-center xl:mx-auto xl:w-10/12" id="cards-kajian-container">
			<?php foreach ($data_aktifitas as $aktifitas) : ?>
				<div class="mb-10 overflow-hidden rounded-xl bg-white shadow-lg dark:bg-slate-900">
					<img src="<?= base_url('public/img/artikel/' . $aktifitas->gambar) ?>" alt="<?= $aktifitas->keterangan_gambar ?>" class="object-cover shadow-sm w-full h-auto md:h-72" />
					<div class="py-8 px-6">
						<h3>
							<a href="<?= base_url('article/'. $aktifitas->slug) ?>" target="_blank" class="mb-2 block truncate text-xl font-semibold text-dark hover:text-primary dark:text-white"><?= $aktifitas->title ?></a>
						</h3>
						<div class="w-full flex items-center gap-2">
							<svg class="w-4 h-4 text-gray-400 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
								<path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M10 6v4l3.276 3.276M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
							</svg>
							<p class="text-sm text-gray-400"><?= $aktifitas->created_at ?></p>
						</div>
						<div class="mb-4 mt-2 text-base font-medium text-secondary"><?= $aktifitas->content ?></div>
						<a href="<?= base_url('article/'. $aktifitas->slug) ?>" target="_blank" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-primary rounded-lg focus:ring-4 focus:outline-none focus:ring-primary/30 dark:focus:ring-primary transition duration-500 hover:opacity-80 hover:shadow-lg">Baca Selengkapnya
							<svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
							</svg>
						</a>
					</div>
				</div>
			<?php endforeach ?>
		</div>

		<div class="w-full px-4 flex items-center justify-center">
			<a href="<?= base_url('/kategori/activity') ?>" target="_blank" class="rounded-full bg-primary py-3 px-8 text-base font-semibold text-white transition duration-500 hover:opacity-80 hover:shadow-lg">Load More</a>
		</div>
	</div>
</section>
<!-- Activity Section End -->

<!-- layanan Section Start -->
<section id="layanan" class="bg-slate-800 pt-28 pb-32 dark:bg-slate-300">
	<div class="container">
		<div class="w-full px-4">
			<div class="mx-auto mb-16 text-center">
				<h4 class="mb-2 text-lg font-semibold text-primary">Services</h4>
				<h2 class="mb-4 text-3xl font-bold text-white dark:text-dark sm:text-4xl lg:text-5xl">Layanan Yang Kami Sediakan</h2>
				<p class="text-md font-medium text-secondary md:text-lg">Kawan elektro apabila ada hal-hal yang perlu disampaikan, jangan risau dan khawatir bisa hubungi layanan di bawah ini.</p>
			</div>
		</div>

		<div class="flex w-full flex-wrap justify-center md:px-4">
			<?php foreach ($data_service as $service) : ?>
				<!-- Card-->
				<div class="mb-4 p-2 lg:w-1/3 lg:p-4 block transition duration-200 ease-out transform hover:scale-105">
					<div class="p-8 bg-dark rounded-2xl shadow-lg">
						<div class="text-2xl font-bold card-title text-white"><?= $service->name_service ?></div>
						<p class="mt-4 text-sm md:text-base font-normal leading-6 text-gray-500 mb-6"><?= $service->keterangan ?></p>
						<a href="<?= $service->link ?>" target="_blank" class="rounded-lg bg-primary py-2 px-4 text-sm font-medium text-white hover:opacity-80">Get Started</a>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</section>
<!-- layanan Section End -->

<!-- Blog Section Start -->
<section id="blog" class="bg-slate-100 pt-28 pb-20 lg:pt-36 lg:pb-32 dark:bg-dark">
	<div class="container">
		<div class="w-full px-4">
			<div class="mx-auto mb-16 max-w-xl text-center">
				<h4 class="mb-2 text-lg font-semibold text-primary">Article</h4>
				<h2 class="mb-4 text-3xl font-bold text-dark dark:text-white sm:text-4xl lg:text-5xl">Tulisan Terkini</h2>
				<p class="text-md font-medium text-secondary md:text-lg"></p>
			</div>
		</div>

		<div class="relative grid grid-cols-12 col-span-12 gap-7 mb-10 px-2" id="cards-blog-container">
		</div>

		<div class="w-full px-4 flex items-center justify-center">
			<a href="https://news.HIMA-TEunwiku.com/" target="_blank" class="rounded-full bg-primary py-3 px-8 text-base font-semibold text-white transition duration-500 hover:opacity-80 hover:shadow-lg">Load More</a>
		</div>
	</div>
</section>
<!-- Blog Section End -->

<!-- Contact Section Start -->
<section id="contact" class="pt-36 pb-32 dark:bg-slate-800">
	<div class="container">
		<div class="w-full">
			<div class="mx-auto mb-10 max-w-xl text-center">
				<h4 class="mb-2 text-lg font-semibold text-primary">Contact</h4>
				<h2 class="mb-4 text-3xl font-bold text-dark dark:text-white sm:text-4xl lg:text-5xl">Hubungi Kami</h2>
				<!-- <p class="text-md font-medium text-secondary md:text-lg">Apabila ada hal-hal yang perlu disampaikan, langsung saja hubungi kami.</p>
					</div> -->
			</div>
			<!-- alert success -->
			<?php if ($this->session->flashdata('success')) { ?>
				<div class="w-full lg:mx-auto lg:w-2/3 " id="alert-success">
					<div id="alert" class="flex p-4 mx-4 mb-4 bg-green-100 rounded-lg dark:bg-green-200" role="alert">
						<svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-green-700 dark:text-green-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
						</svg>
						<span class="sr-only">Info</span>
						<p class="ml-3 text-sm font-medium text-green-700 dark:text-green-800">
							<?php echo $this->session->flashdata('success') ?>
						</p>
						<button type="button" id="closeSuccess" class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-green-200 dark:text-green-600 dark:hover:bg-green-300 close">
							<span class="sr-only">Close</span>
							<svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
							</svg>
						</button>
					</div>
				</div>
			<?php   } else if ($this->session->flashdata('message')) {
			?>
				<!-- alert failed -->
				<div class="w-full lg:mx-auto lg:w-2/3" id="alert-danger">
					<div id="alert" class="flex p-4 mx-4 mb-4 bg-red-100 rounded-lg dark:bg-red-200">
						<svg class="flex-shrink-0 w-5 h-5 text-red-700 dark:text-red-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
							<path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
						</svg>
						<span class="sr-only">Info</span>
						<p class="ml-3 text-sm font-medium text-red-700 dark:text-red-800">
							<?php echo $this->session->flashdata('message') ?>
						</p>
						<button type="button" id="closeDanger" class="ms-auto -mx-1.5 -my-1.5  text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-2" aria-label="Close">
							<span class="sr-only">Close</span>
							<svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
								<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
							</svg>
						</button>
					</div>
				</div>
			<?php } ?>
			<form action="" method="post">
				<div class="w-full lg:mx-auto lg:w-2/3">
					<div class="mb-8 w-full px-4">
						<label for="name" class="text-base font-bold text-primary">Nama</label>
						<input type="text" id="name" class="w-full rounded-md bg-slate-200 p-3 text-dark focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary text-sm" name="name" placeholder="Your Name Here" require />
					</div>
					<div class="mb-8 w-full px-4">
						<label for="email" class="text-base font-bold text-primary">Email</label>
						<input type="email" id="email" class="w-full rounded-md bg-slate-200 p-3 text-dark focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary text-sm" name="email" placeholder="your email here" require />
					</div>
					<div class="mb-8 w-full px-4">
						<label for="message" class="text-base font-bold text-primary">Pesan</label>
						<textarea type="text" id="email" class="h-32 w-full rounded-md bg-slate-200 p-3 text-dark focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary text-sm" name="message" placeholder="Leave a message..." require></textarea>
					</div>
					<div class="w-full px-4">
						<button class="w-full rounded-full bg-primary py-3 px-8 text-base font-semibold text-white transition duration-500 hover:opacity-80 hover:shadow-lg btn-sending" type="submit">Kirim</button>
					</div>
				</div>
			</form>
		</div>
</section>
<!-- Contact Section End -->

<?php $this->load->view('simple/_partials/footer.php'); ?>



<script>
	const successAlert = document.querySelector('#alert-success');
	const dangerAlert = document.querySelector('#alert-danger');
	const closeSuccess = document.getElementById('closeSuccess');
	const closeDanger = document.getElementById('closeDanger')

	closeSuccess?.addEventListener('click', e => {
		successAlert.classList.toggle('hidden');
	})
	closeDanger?.addEventListener('click', e => {
		dangerAlert.classList.toggle('hidden');
	})
</script>
</body>

</html>