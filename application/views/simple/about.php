<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
	<?php $this->load->view('simple/_partials/head.php'); ?>
</head>

<?php $this->load->view('simple/_partials/navbar.php'); ?>
<?php
$allSosmed = $identitas[0]->sosmed;

// Memecah teks menjadi array berdasarkan tanda "."
$sosmed = explode(",", $allSosmed);
?>

<!-- Hero Section Start -->
<section id="home" class="pt-36 dark:bg-dark bg-cover bg-no-repeat bg-bottom" style="background-image: url(<?= base_url('public/img/about/' . $landing[0]->img_cover) ?>)">
	<div class="pb-32 lg:py-36 bg-gradient-to-t from-white dark:from-dark">
		<div class="container w-full te">
			<div class="flex flex-wrap">
				<div class="w-full self-center px-4 lg:w-2/3">
					<h2 class="text-xl font-semibold text-primary md:text-2xl mb-8"><?= $landing[0]->organisasi ?></h2>
					<h1> <span class="mt-1 block text-4xl font-bold text-dark dark:text-white lg:text-5xl mb-3 uppercase"><?= $landing[0]->universitas ?></span></h1>
					<h2 class="mb-5 text-xl font-medium text-slate-600 dark:text-slate-400 lg:text-2xl">Kabinet <span class="text-dark dark:text-white"><?= $landing[0]->kabinet ?></span></h2>
					<div class="flex items-start flex-wrap">
						<a href="<?= base_url('booklet/'. $this->uri->segment(2)) ?>" class="<?php echo empty($landing[0]->booklet) ? 'hidden' : '';	?> rounded-lg m-2 bg-primary py-1.5 px-4 text-lg font-semibold text-white transition duration-300 ease-in-out hover:opacity-80 hover:shadow-lg" target="_blank">Booklet</a>
						<a href="#about" class="<?php echo empty($landing[0]->filosofi) ? 'hidden' : '';	?> rounded-lg m-2 bg-primary py-1.5 px-4 text-lg font-semibold text-white transition duration-300 ease-in-out hover:opacity-80 hover:shadow-lg">About Kabinet</a>
						<a href="#fokus-isu" class="<?php echo empty($data_fokusIsu) ? 'hidden' : '';	?> rounded-lg m-2 bg-primary py-1.5 px-4 text-lg font-semibold text-white transition duration-300 ease-in-out hover:opacity-80 hover:shadow-lg">Fokus Isu Strategis</a>
						<a href="#struktur-kabinet" class="rounded-lg m-2 bg-primary py-1.5 px-4 text-lg font-semibold text-white transition duration-300 ease-in-out hover:opacity-80 hover:shadow-lg">Struktur Kabinet</a>
					</div>
				</div>
				<div class="w-full lg:w-1/3 text-center lg:justify-start justify-center lg:flex hidden">
					<div class="flex items-end lg:pl-16 pl-0" style="z-index: 1">
						<div class="container mx-auto flex flex-wrap items-center">
							<div class="card rounded-xl p-5 bg-white flex flex-col md:ml-auto w-full mt-10 md:mt-0 space-y-5">
								<div class="flex items-center space-x-4">
									<div class="border rounded-full p-1">
										<img src="<?= base_url('public/img/logo/' . $landing[0]->logo) ?>" width="50" alt="" />
									</div>
									<div class="text-left">
										<p class="font-semibold text-base mb-1"><?php echo str_replace("https://www.instagram.com/", "", $sosmed[0]); ?></p>
										<p class="font-light text-xs text-gray-1">
											BEM UNWIKU
										</p>
									</div>
								</div>
								<div class="grid grid-cols-2 text-left">
									<div>
										<p class="font-medium text-base mb-0.5" style="color: #ff7468">
											3,200+
										</p>
										<p class="font-light text-xs text-gray-1">
											Followers
										</p>
									</div>
									<div>
										<p class="font-medium text-base mb-0.5" style="color: #1b8171">
											1,000+
										</p>
										<p class="font-light text-xs text-gray-1">
											Postingan
										</p>
									</div>
								</div>
								<a href="<?= $sosmed[0]; ?>" target="_blank" rel="noopener noreferrer" class="bg-primary font-semibold text-white text-base py-3 px-12 mb-0.5 rounded-xl hover:opacity-80 hover:shadow-lg">
									Follow me
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Hero Section End -->

<!-- About kabinet Section Start -->
<section id="about" class="pt-20 pb-10 lg:pt-36 lg:pb-10 dark:bg-dark <?php echo empty($landing[0]->filosofi) ? 'hidden' : '';	?>">
	<div class="container">
		<div class="flex flex-wrap">
			<div class="mb-10 w-full px-4 lg:w-3/5">
				<h4 class="mb-3 text-lg font-bold uppercase text-primary">About</h4>
				<h2 class="mb-5 max-w-md text-3xl font-bold text-dark dark:text-white lg:text-4xl"><?= $landing[0]->kabinet ?></h2>
				<?php
				$longText = $landing[0]->filosofi;

				// Memecah teks menjadi array berdasarkan tanda "."
				$paragraphs = explode("\n", $longText);

				// Menampilkan tag paragraf HTML untuk setiap elemen array
				foreach ($paragraphs as $paragraph) {
					echo "<p class='max-w-2xl text-base font-medium text-secondary lg:text-lg mb-3'>{$paragraph}</p>";
				}
				?>
				<br>
				<a href="#visi" class=" rounded-full bg-primary py-3 px-8 text-base font-semibold text-white transition duration-300 ease-in-out hover:opacity-80 hover:shadow-lg">Visi & Misi</a>
			</div>
			<div class="w-full px-4 lg:w-2/5 flex items-center flex-wrap gap-0">
				<div>
					<img src="<?= base_url('public/img/about/' . $landing[0]->img_cover) ?>" alt="gambar pengurus <?= ($landing[0]->kabinet) ?>" class="rounded-2xl w-full shadow-xl">
					<div class="flex items-center w-full justify-center mt-4">

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
	</div>
</section>
<!-- about Section End -->

<!-- Visi & Misi Section Start -->
<section id="visi" class=" pt-20 lg:pt-28 pb-32 dark:bg-dark">
	<div class="container">
		<h4 class="mb-3 px-4 text-lg font-bold uppercase text-center lg:text-left text-primary dark:text-primary">Visi & Misi</h4>
		<h2 class="mb-5 px-4 text-3xl font-bold text-dark dark:text-white lg:text-4xl text-center lg:text-left"><?= $landing[0]->kabinet ?></h2>
		<div class="flex px-4 flex-wrap mb-8 lg:mb-0">
			<div class="w-full lg:w-1/3">
				<img src="<?= base_url('public/img/' . $landing[0]->img_visi) ?>" width="250px" alt="Logo Kabinetet Muara Perubahan" class="relative mx-auto max-w-full filter rounded-md dark:shadow-slate-500 mb-8" />
			</div>
			<div class="w-full flex items-center justify-center lg:px-16 lg:w-2/3">
				<div class="w-full rounded-2xl p-8 bg-slate-100 dark:bg-slate-800 lg:bg-white lg:p-0 lg:dark:bg-dark text-center lg:text-left">
					<h3 class="mb-4 text-2xl font-semibold text-dark dark:text-white lg:text-3xl w-full">Visi</h3>
					<p class="text-base font-medium text-secondary lg:text-lg">
						<?= $landing[0]->visi; ?>
					</p>
				</div>
			</div>
		</div>
		<div class="flex px-4 flex-wrap">
			<div class="w-full flex items-center justify-center lg:w-2/3">
				<div class="w-full bg-slate-100 p-8 dark:bg-slate-800 rounded-2xl lg:bg-white lg:p-0 lg:dark:bg-dark">
					<h3 class="mb-4 text-2xl font-semibold text-dark dark:text-white lg:text-3xl text-center lg:text-left">Misi</h3>
					<ul class="space-y-2 max-w-full list-inside text-gray-500 dark:text-gray-400 text-justify lg:pr-10">
						<?php
						$allMisi = $landing[0]->misi;

						// Memecah teks menjadi array berdasarkan tanda "."
						$missions = explode("\n", $allMisi);

						// Menampilkan tag paragraf HTML untuk setiap elemen array
						foreach ($missions as $misi) {
							echo "<li class='flex text-base font-medium text-secondary lg:text-lg'>
								<svg class='w-4 h-4 mr-3 mt-0.5 text-green-500 dark:text-green-400 flex-shrink-0' fill='currentColor' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'>
									<path fill-rule='evenodd' d='M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z' clip-rule='evenodd'></path>
								</svg>
								$misi
							</li>";
						}
						?>
					</ul>
				</div>
			</div>
			<div class="w-full lg:w-1/3 flex items-center">
				<img src="<?= base_url('public/img/' . $landing[0]->img_misi) ?>" width="250px" alt="Ilustrasi misi <?= $landing[0]->kabinet ?>" class="relative mx-auto max-w-full filter rounded-md dark:shadow-slate-500 hidden lg:block" />
			</div>
		</div>
	</div>
</section>
<!-- Visi & Misi Section End -->

<!-- fokus isu strategis Section Start -->
<section id="fokus-isu" class="bg-slate-100 py-32 dark:bg-slate-800 <?php echo empty($data_fokusIsu) ? 'hidden' : '';	?>">
	<div class="container">
		<div class="w-full px-4">
			<div class="mx-auto mb-12 max-w-xl text-center">
				<h4 class="text-lg font-semibold text-primary">Fokus Isu Strategis</h4>
				<h2 class="mb-2 text-3xl font-bold text-dark dark:text-white sm:text-4xl lg:text-4xl">BEM UNWIKU <?= $landing[0]->tahun_periode ?></h2>
				<p class="text-md font-medium text-secondary md:text-lg">Kabinet <b><?= $landing[0]->kabinet ?></b></p>
			</div>
			<div class="flex w-full flex-wrap justify-center md:px-4 gap-8 lg:flex-nowrap">

				<?php foreach ($data_fokusIsu as $fokus) : ?>
					<!-- Card-->
					<div class="p-8  rounded-2xl shadow-lg lg:w-1/3 w-full min-h-full  bg-white dark:bg-slate-900 block transition duration-200 ease-out transform hover:scale-105">
						<h4 class="text-2xl font-bold card-title text-dark dark:text-white mb-3"><?= $fokus->lingkup ?></h4>
						<ul class="space-y-2 max-w-full list-inside text-gray-500 dark:text-gray-400 text-justify">
							<?php
							$allPoinFokus = $fokus->poin_fokus;

							// Memecah teks menjadi array berdasarkan tanda "."
							$missions = explode(",", $allPoinFokus);

							// Menampilkan tag paragraf HTML untuk setiap elemen array
							foreach ($missions as $poinFokus) {
								echo "<li class='flex text-base font-medium text-secondary lg:text-lg'>
								<svg class='w-4 h-4 mr-3 mt-0.5 text-green-500 dark:text-green-400 flex-shrink-0' fill='currentColor' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'>
									<path fill-rule='evenodd' d='M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z' clip-rule='evenodd'></path>
								</svg>
								$poinFokus
							</li>";
							}
							?>
						</ul>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
</section>
<!-- fokus isu strategis Section End -->

<!-- filosofi logo Section Start -->
<section id="filosofi-logo" class="bg-slate-800 pt-28 pb-32 dark:bg-slate-300 <?php echo empty($data_filosofi) ? 'hidden' : '';	?>">
	<div class="container">
		<div class="w-full px-4">
			<div class="mx-auto mb-12 max-w-xl text-center">
				<h4 class="text-lg font-semibold text-primary">Filosofi Logo</h4>
				<h2 class="my-3 text-3xl font-bold dark:text-dark text-white sm:text-4xl lg:text-5xl">Kabinet</h2>
				<h2 class="mb-2 text-3xl font-bold dark:text-dark text-white sm:text-4xl lg:text-5xl"><?= $landing[0]->kabinet ?></h2>
			</div>
			<div class="max-w-3xl mx-auto">
				<div id="indicators-carousel" class="relative" data-carousel="static">
					<!-- Carousel wrapper -->
					<div class="relative overflow-hidden rounded-3xl h-96">
						<?php foreach ($data_filosofi as $filosofi) : ?>
							<!-- Item  -->
							<div class=" w-full duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-0 z-20 bg-slate-200 dark:bg-dark" data-carousel-item="active">
								<div class="md:flex pt-6 pb-8 px-8 rounded-3xl absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 md:px-20">
									<div class="p-2 md:w-5/12 md:flex md:items-center">
										<a href="">
											<img src="<?= base_url('public/img/logo/filosofi/' . $filosofi->img_logo) ?>" alt="Logo <?= $filosofi->nama_element ?>" class="mx-auto w-36 md:w-48" />
										</a>
									</div>
									<div class="md:w-7/12 md:p-4">
										<h3 class="lg:mb-2 text-base md:text-xl font-semibold text-dark dark:text-white text-center md:text-left md:px-0 rounded-full px-4 py-2"><?= $filosofi->nama_element ?></h3>
										<p class="text-xs md:text-base font-medium text-secondary text-justify"><?= $filosofi->makna_element ?></p>
									</div>
								</div>
							</div>
						<?php endforeach ?>
					</div>
					<!-- Slider indicators -->
					<div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
						<?php foreach ($data_filosofi as $filosofi) : ?>
							<button type="button" class="w-3 h-3 rounded-full bg-white dark:bg-gray-800" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
						<?php endforeach ?>
					</div>
					<!-- Slider controls -->
					<button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev="">
						<span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-slate-300 dark:bg-gray-600/30 group-hover:bg-white/50 dark:group-hover:bg-gray-600/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-600/70 group-focus:outline-none">
							<svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
							</svg>
							<span class="sr-only">Previous</span>
						</span>
					</button>
					<button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next="">
						<span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-slate-300 dark:bg-gray-600/30 group-hover:bg-white/50 dark:group-hover:bg-gray-600/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-600/70 group-focus:outline-none">
							<svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
							</svg>
							<span class="sr-only">Next</span>
						</span>
					</button>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- filodsofi logo Section End -->

<!-- Struktur kabinet Section Start -->
<section id="struktur-kabinet" class="pt-32 pb-32 dark:bg-dark/95">
	<div class="container">
		<div class="w-full px-4">
			<div class="mx-auto mb-8 max-w-xl text-center">
				<h4 class="mb-2 text-lg font-semibold text-primary">Struktur Kabinet</h4>
				<h2 class="mb-4 text-3xl font-bold text-dark dark:text-white sm:text-4xl lg:text-4xl">BEM UNWIKU <?= $landing[0]->tahun_periode ?></h2>
				<p class="text-md font-medium text-secondary md:text-lg">Klik foto untuk melihat informasi detail</p>
			</div>
		</div>

		<div class="w-full">
			<!-- Presiden & Wapres -->
			<div class="max-w-full flex items-center justify-center">
				<h4 class="w-full lg:max-w-xl text-center rounded-full mx-2 mb-8 bg-gradient-to-tr from-slate-500 to-dark py-2 text-lg font-semibold lg:font-semibold text-white transition duration-300 ease-in-out hover:opacity-80 hover:shadow-lg dark:bg-gradient-to-tr dark:from-slate-500 dark:to-slate-300 dark:text-dark">Presiden & Wakil Presiden</h4>
			</div>
			<div class="flex w-full gap-6 flex-wrap justify-center px-4 xl:mx-auto xl:w-10/12">
				<?php foreach ($data_presWapres as $ketum) : ?>
					<a href="<?= base_url('ketum/' . $ketum->id . '/' . $this->uri->segment(2)); ?>">
						<div class="max-w-72 py-4 lg:px-4 px-4 rounded-3xl shadow-md dark:bg-slate-800 h-full">
							<div class="overflow-hidden rounded-3xl shadow-md px-8 dark:bg-slate-800 h-80">
								<img src="<?= base_url('public/img/pengurus/' . $ketum->foto) ?>" alt="<?= $ketum->jabatan ?>" class="mt-3 object-cover shadow-sm w-full h-full object-center" />
							</div>
							<h3 class=" mt-4 mb-3 text-md font-semibold text-white dark:text-dark text-center bg-gradient-to-t from-slate-500 to-dark rounded-full px-8 py-2 dark:bg-gradient-to-t dark:from-slate-500 dark:to-slate-300 "><?= $ketum->jabatan ?></h3>
							<p class=" text-xl font-bold text-dark text-center mb-2 dark:text-slate-100"><?= $ketum->nama ?> </p>
							<p class="text-base font-medium text-secondary text-center"><?= $ketum->prodi . ' ' . $ketum->angkatan ?> </p>
						</div>
					</a>
				<?php endforeach ?>
			</div>
			<!-- kemenkoan -->
			<?php foreach ($data_koordinator as $koor) : ?>
				<div class="max-w-full mt-8 flex items-center justify-center">
					<h4 class="<?php echo (stripos($koor->jabatan, 'PLT') !== false || stripos($koor->jabatan, 'PJ') !== false) ? 'hidden' : ''; ?> w-full lg:max-w-xl text-center rounded-full mx-2 mb-8 bg-gradient-to-tr from-slate-500 to-dark py-2 text-lg font-semibold mt-8 lg:font-semibold text-white transition duration-300 ease-in-out hover:opacity-80 hover:shadow-lg dark:bg-gradient-to-tr dark:from-slate-500 dark:to-slate-300 dark:text-dark">
						<?php
						$koordinator = str_replace("Menko", "", $koor->jabatan);
						echo "Kemenkoan" . $koordinator;
						?></h4>
				</div>
				<div class="flex w-full flex-wrap justify-center px-4 xl:mx-auto xl:w-10/12">
					<div class="max-w-full md:px-14 lg:px-8">
						<a href="<?php echo (stripos($koor->jabatan, 'PLT') !== false || stripos($koor->jabatan, 'PJ') !== false) ? '#' : base_url('kemenkoan/' . $koor->id . '/' . $this->uri->segment(2)); ?>">
							<div class="max-w-72 py-4 lg:px-4 px-4 rounded-3xl shadow-md dark:bg-slate-800 h-full">
								<div class="overflow-hidden rounded-3xl shadow-md px-8 dark:bg-slate-800 h-72">
									<img src="<?php echo (!empty($koor->foto)) ?  base_url('public/img/pengurus/' . $koor->foto) : base_url('public/img/pengurus/profile.png') ?>" alt="<?= $koor->jabatan ?>" class="mt-3 object-cover shadow-sm w-full object-center h-full" />
								</div>
								<h3 class=" mt-4 mb-3 text-md font-semibold text-white dark:text-dark text-center bg-gradient-to-t from-slate-500 to-dark rounded-full px-6 py-2 dark:bg-gradient-to-t dark:from-slate-500 dark:to-slate-300"><?= $koor->jabatan ?></h3>
								<p class="text-xl font-bold text-dark text-center mb-2 dark:text-slate-100"><?= $koor->nama ?></p>
								<p class="text-base font-medium text-secondary text-center"><?= $koor->prodi . ' ' . $koor->angkatan; ?></p>
							</div>
						</a>
					</div>
				</div>
				<!-- kementerian -->
				<?php
				$data_menteri = $this->pengurus_model->findMenteriByIdKoordinator($koor->id, $koor->id_landing);
				?>
				<div class="flex w-full mt-8 gap-6 flex-wrap justify-center px-4 xl:mx-auto">
					<?php foreach ($data_menteri as $menteri) : ?>
						<div class="max-w-72 lg:w-1/4">
							<a href="<?php echo (stripos($menteri->jabatan, 'PLT') !== false || stripos($menteri->jabatan, 'PJ') !== false) ? '#' : base_url('kementerian/' . $menteri->id . '/' . $this->uri->segment(2)); ?>">
								<div class="w-full py-4 lg:px-4 px-4 rounded-3xl shadow-md dark:bg-slate-800 h-full">
									<div class=" overflow-hidden rounded-3xl shadow-md px-8 dark:bg-slate-800 h-72">

										<img src="<?php echo (!empty($menteri->foto)) ?  base_url('public/img/pengurus/' . $menteri->foto) : base_url('public/img/pengurus/profile.png') ?>" class="mt-3 object-cover shadow-sm w-full object-center h-full" />

									</div>
									<h3 class=" mt-4 mb-3 text-md font-semibold text-white dark:text-dark text-center bg-gradient-to-t from-slate-500 to-dark rounded-full px-8 py-2 dark:bg-gradient-to-t dark:from-slate-500 dark:to-slate-300 truncate" title="<?= $menteri->jabatan ?>"><?= $menteri->jabatan ?></h3>
									<p class="text-xl font-bold text-dark text-center mb-2 dark:text-slate-100 truncate" title="<?= $menteri->nama ?>"><?= $menteri->nama ?></p>
									<p class="text-base font-medium text-secondary text-center"><?= $menteri->prodi . " " . $menteri->angkatan; ?></p>
								</div>
							</a>
						</div>
					<?php endforeach ?>
				</div>
			<?php endforeach ?>

			<!-- Kementerian tanpa Koordinator -->
			<?php
				$data_menteri = $this->pengurus_model->findMenteriByIdLanding($landing[0]->id);
			?>
			<div class="<?php echo empty($data_menteri) ? 'hidden' : '';	?> max-w-full mt-8 flex items-center justify-center">
				<h4 class="w-full lg:max-w-xl text-center rounded-full mx-2 mb-8 bg-gradient-to-tr from-slate-500 to-dark py-2 text-lg font-semibold lg:font-semibold text-white transition duration-300 ease-in-out hover:opacity-80 hover:shadow-lg dark:bg-gradient-to-tr dark:from-slate-500 dark:to-slate-300 dark:text-dark">Menteri Kabinet</h4>
			</div>
			<div class="flex w-full gap-6 flex-wrap justify-center px-4 xl:mx-auto xl:w-10/12">
				<?php foreach ($data_menteri as $menteri) : ?>
					<div class="max-w-72 lg:w-1/3">
						<a href="<?php echo (stripos($menteri->jabatan, 'PLT') !== false || stripos($menteri->jabatan, 'PJ') !== false) ? '#' : base_url('kementerian/' . $menteri->id); ?>">
							<div class="w-full py-4 lg:px-4 px-4 rounded-3xl shadow-md dark:bg-slate-800 h-full">
								<div class=" overflow-hidden rounded-3xl shadow-md px-8 dark:bg-slate-800 h-72">

									<img src="<?= base_url('public/img/pengurus/' . $menteri->foto) ?>" alt="<?= $menteri->jabatan ?>" class="mt-3 object-cover shadow-sm w-full object-center h-full" />

								</div>
								<h3 class=" mt-4 mb-3 text-md font-semibold text-white dark:text-dark text-center bg-gradient-to-t from-slate-500 to-dark rounded-full px-8 py-2 dark:bg-gradient-to-t dark:from-slate-500 dark:to-slate-300 truncate" title="<?= $menteri->jabatan ?>"><?= $menteri->jabatan ?></h3>
								<p class="text-xl font-bold text-dark text-center mb-2 dark:text-slate-100 truncate" title="<?= $menteri->nama ?>"><?= $menteri->nama ?></p>
								<p class="text-base font-medium text-secondary text-center"><?= $menteri->prodi . " " . $menteri->angkatan; ?></p>
							</div>
						</a>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
</section>
<!-- Struktur kabinet Section End -->

<?php $this->load->view('simple/_partials/footer.php'); ?>

<script src="<?= base_url('public/js/flowbite.js') ?>"></script>

</body>

</html>