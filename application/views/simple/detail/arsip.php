<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="<?= base_url('public/img/' .  $identitas[0]->favicon) ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= $identitas[0]->description ?>">
  <meta name="author" content="Arif Nur Rizqi">
  <meta name="keywords" content="<?= $identitas[0]->keyword ?>">
  <title><?= $title; ?> </title>
  <link href="<?= base_url('public/css/output.css') ?>" rel="stylesheet">
  <script src="<?= base_url('public/js/alpine.js') ?>" defer></script>
  <script>
    if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark');
    }
  </script>
</head>

<?php $this->load->view('simple/_partials/navbar.php'); ?>

<!-- Hero Section Start -->
<section id="home" class="pt-72 pb-48 flex items-center px-10 dark:bg-dark">
  <div class="container relative isolate">
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
      <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#77eaee] to-[#5f89ff] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <h1 class="text-3xl lg:text-4xl font-extrabold uppercase text-dark text-center dark:text-white">Sejarah <span class="text-primary"><?= $identitas[0]->nama_website ?></span>
    </h1>
    <h6 class="mt-2 text-lg lg:text-lg text-slate-500 text-center">Dari <span class="font-bold">Tahun ke Tahun</span></h6>
    <div class="mt-10 flex items-center justify-center gap-x-6">
      <a href="#about" class="rounded-full bg-primary py-3 px-8 text-base font-semibold text-white transition duration-300 ease-in-out hover:opacity-80 hover:shadow-lg leading-6">Read more <span aria-hidden="true">→</span></a>
    </div>
  </div>
</section>
<!-- Hero Section End -->

<!-- About kabinet Section Start -->
<section id="about" class="pt-14 pb-10 lg:pt-36 lg:pb-10 dark:bg-dark <?php echo empty($identitas[0]->description) ? 'hidden' : '';	?>">
	<div class="container">
		<div class="flex flex-wrap">
      <div class="w-full p-16 lg:w-2/5 flex items-center flex-wrap gap-0">
        <img src="<?= base_url('public/img/' . $identitas[0]->favicon) ?>" alt="gambar logo <?= ($identitas[0]->nama_website) ?>" class="rounded-full w-full shadow-xl">
			</div>
			<div class="mb-10 w-full px-4 lg:w-3/5">
				<h4 class="mb-3 text-lg font-bold uppercase text-primary">About</h4>
				<h2 class="mb-5 max-w-md text-3xl font-bold text-dark dark:text-white lg:text-4xl"><?= $identitas[0]->nama_website ?></h2>
				<?php
				$longText = $identitas[0]->description;

				// Memecah teks menjadi array berdasarkan tanda "."
				$paragraphs = explode("\n", $longText);

				// Menampilkan tag paragraf HTML untuk setiap elemen array
				foreach ($paragraphs as $paragraph) {
					echo "<p class='max-w-2xl text-base font-medium text-secondary lg:text-lg mb-3'>{$paragraph}</p>";
				}
				?>
				<br>
				<a href="#sejarah" class=" rounded-full bg-primary py-3 px-8 text-base font-semibold text-white transition duration-300 ease-in-out hover:opacity-80 hover:shadow-lg">Daftar Kepengurusan</a>
			</div>
		</div>
	</div>
</section>
<!-- about Section End -->

<!-- sejarah Section Start -->
<section id="sejarah" class="bg-slate-100 pt-24 lg:pt-28 pb-32 dark:bg-slate-800">
  <div class="container max-w-6xl">
    <div class="flex flex-wrap">
      <div class="w-full px-4">
        <div class="mx-auto mb-16 max-w-xl text-center">
          <h4 class="mb-2 text-lg font-semibold text-primary">Daftar Kabinet</h4>
          <h2 class="mb-2 text-3xl font-bold text-dark dark:text-white sm:text-4xl lg:text-5xl"><?= $identitas[0]->nama_website ?></h2>
          <h6 class="mt-2 text-md lg:text-lg text-slate-500 text-center">Dari <span class="font-bold">Tahun ke Tahun</span></h6>
        </div>
      </div>
      <div class="w-full bg-white rounded-3xl p-8 pb-12 mb-8 flex flex-wrap lg:flex-nowrap dark:bg-dark">
        <div class="w-full px-4">
          <h4 class="text-lg font-bold uppercase text-primary text-center lg:text-left">Periode</h4>
          <h2 class="my-2 lg:my-3 text-center text-4xl font-bold text-dark dark:text-white lg:text-5xl lg:text-left">Sebelumnya</h2>
          <p class="text-md font-medium text-secondary md:text-xl text-center lg:text-left">Input process...</b></p>
        </div>
      </div>
      <!-- 2019-2020 -->
      <div class="w-full bg-white rounded-3xl p-8 pb-12 mb-8 flex flex-wrap lg:flex-nowrap dark:bg-dark">
        <div class="mb-8 lg:mb-0 w-full px-4 lg:w-3/5">
          <h4 class="text-lg font-bold uppercase text-primary text-center lg:text-left">Periode</h4>
          <h2 class="my-2 lg:my-3 text-center text-4xl font-bold text-dark dark:text-white lg:text-5xl lg:text-left">2019 - 2020</h2>
          <p class="text-md font-medium text-secondary md:text-xl text-center lg:text-left">Kabinet <b>Bangkit Panca Jaya</b></p>
          <div class="flex w-full md:gap-4 items-center flex-wrap justify-center lg:justify-start">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 20 154 256" preserveAspectRatio="xMidYMid meet" class="w-20">
              <g transform="translate(0.100000,256) scale(0.03,-0.0400000)" fill="#aaaa" stroke="none" class="max-w-24 fill-dark dark:fill-slate-300">
                <path d="M2281 4864 c-253 -68 -410 -331 -346 -579 67 -256 329 -415 580 -350 256 67 415 329 350 578 -67 259 -333 419 -584 351z"></path>
                <path d="M3720 4160 l-275 -238 -364 -4 -363 -3 -157 -352 c-86 -194 -158 -353 -161 -353 -3 0 -75 159 -161 353 l-157 352 -102 3 c-125 3 -189 -9 -278 -54 -80 -40 -167 -125 -206 -202 -55 -109 -56 -120 -56 -714 l0 -548 -200 0 c-110 0 -200 2 -200 5 0 8 -321 1209 -324 1212 -1 1 -18 -2 -37 -7 -19 -5 -53 -14 -76 -20 -41 -10 -41 -11 -32 -42 8 -30 0 -43 -161 -269 l-170 -238 77 -195 c43 -108 81 -196 85 -196 3 0 73 81 155 179 81 99 150 180 153 180 3 1 41 -135 85 -302 l81 -302 -318 -3 -318 -2 0 -560 0 -560 120 0 119 0 6 -33 c3 -17 37 -237 75 -487 38 -250 72 -470 75 -487 l6 -33 519 0 520 0 0 520 0 520 160 0 160 0 0 -520 0 -520 560 0 560 0 0 520 0 520 160 0 160 0 0 -520 0 -520 520 0 519 0 6 33 c3 17 37 237 75 487 38 250 72 470 75 488 l6 32 119 0 120 0 0 560 0 560 -318 2 -318 3 81 302 c44 167 82 303 85 302 3 0 72 -81 153 -180 82 -98 152 -179 155 -179 4 0 42 88 84 195 l78 195 -163 227 c-90 126 -166 233 -170 239 -3 6 -2 25 3 42 8 31 8 32 -33 42 -23 6 -57 16 -75 22 -18 5 -35 8 -37 6 -4 -3 -325 -1203 -325 -1213 0 -3 -126 -5 -280 -5 l-280 0 0 290 0 290 -81 163 c-45 89 -83 164 -85 166 -4 5 -144 -60 -144 -66 0 -2 34 -71 75 -153 l75 -150 0 -270 0 -270 -200 0 -200 0 0 560 0 560 320 0 319 0 321 322 320 323 -117 117 c-65 65 -120 118 -123 117 -3 0 -129 -108 -280 -239z m-1800 -1200 l0 -560 -80 0 -80 0 0 560 0 560 80 0 80 0 0 -560z m560 -80 l0 -80 -80 0 -80 0 0 80 0 80 80 0 80 0 0 -80z m154 -812 c55 -16 138 -99 154 -154 28 -94 8 -169 -63 -239 -101 -102 -229 -102 -330 0 -102 101 -102 229 0 330 70 71 145 90 239 63z"></path>
              </g>
            </svg>
            <div>
              <h4 class="uppercase font-bold text-lg text-primary text-center md:text-left">Presiden</h4>
              <h5 class="text-dark text-lg font-semibold text-center md:text-left dark:text-white">Alfachry Zhiha Zinda Ihram</h5>
              <p class="text-secondary text-center md:text-left">Program Studi Teknik Sipil 2016</p>
            </div>
          </div>
          <div class="flex w-full md:gap-4 items-center flex-wrap justify-center lg:justify-start">
            <svg class="w-20 fill-dark dark:fill-slate-300 pt-5 pb-3" fill="" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-6 0 164 216" enable-background="new 0 0 154 216" xml:space="preserve">
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M77.012,2c12.112,0,21.931,9.819,21.931,21.931s-9.819,21.931-21.931,21.931S55.08,36.044,55.08,23.931S64.899,2,77.012,2z M41.037,84.229c0-1.672,1.082-2.802,2.823-2.785c1.527,0.015,2.748,1.289,2.748,2.816v12.206h60.748V84.229 c0-1.66,1.067-2.785,2.785-2.785c1.66,0,2.785,1.067,2.785,2.785v12.236h19.321V78.658c0-15.231-12.445-27.618-27.618-27.618h-5.571 L82.412,76.332l-2.46-19.886l2.46-5.476l-10.823,0.01l2.46,5.466l-2.46,19.886L55.913,51.039h-6.519 c-15.231,0-27.618,12.445-27.618,27.618v17.808h19.3L41.037,84.229z M10.094,56.507l6.803-6.803c0.503,0.111,1.02,0.173,1.548,0.173 c1.912,0,3.708-0.744,5.06-2.096l5.962-5.961c2.789-2.79,2.789-7.33,0-10.12c-1.351-1.352-3.148-2.096-5.06-2.096 c-1.911,0-3.708,0.744-5.06,2.096l-5.962,5.962c-1.734,1.734-2.389,4.144-1.967,6.39l-9.195,9.196v70.758h19.678L33.141,254h87.741 l11.217-129.995h19.678v-21.636H10.094V56.507z"></path> </g>
            </svg>
            <div>
              <h4 class="uppercase font-bold text-lg text-primary text-center md:text-left">Wakil Presiden</h4>
              <h5 class="text-dark text-lg font-semibold text-center md:text-left dark:text-white">Adi Setiawan</h5>
              <p class="text-secondary text-center md:text-left">Program Studi Adm. Negara 2016</p>
            </div>
          </div>
        </div>
        <div class="w-full lg:pt-10 lg:w-2/5 flex items-center justify-center flex-wrap gap-0">
          <img src="<?= base_url('public/img/logo/bangkit-panca-jaya.png') ?>" alt="Logo Kabinet Bangkit Panca Jaya" width="200px" class="rounded-2xl">
          <button class="mx-auto mt-8 w-full" disabled><span class="cursor-not-allowed rounded-full bg-primary py-2 px-6 text-base font-semibold text-white transition duration-300 ease-in-out hover:opacity-80 hover:shadow-lg">Details</span></button>
        </div>
      </div>
      <!-- 2021 -->
      <div class="w-full bg-white rounded-3xl p-8 pb-12 mb-8 flex flex-wrap lg:flex-nowrap dark:bg-dark">
        <div class="mb-8 lg:mb-0 w-full px-4 lg:w-3/5">
          <h4 class="text-lg font-bold uppercase text-primary text-center lg:text-left">Periode</h4>
          <h2 class="my-2 lg:my-3 text-center text-4xl font-bold text-dark dark:text-white lg:text-5xl lg:text-left">2021</h2>
          <p class="text-md font-medium text-secondary md:text-xl text-center lg:text-left">Kabinet <b>Gema Restorasi</b></p>
          <div class="flex w-full md:gap-4 items-center flex-wrap justify-center lg:justify-start">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 20 154 256" preserveAspectRatio="xMidYMid meet" class="w-20">
              <g transform="translate(0.100000,256) scale(0.03,-0.0400000)" fill="#aaaa" stroke="none" class="max-w-24 fill-dark dark:fill-slate-300">
                <path d="M2281 4864 c-253 -68 -410 -331 -346 -579 67 -256 329 -415 580 -350 256 67 415 329 350 578 -67 259 -333 419 -584 351z"></path>
                <path d="M3720 4160 l-275 -238 -364 -4 -363 -3 -157 -352 c-86 -194 -158 -353 -161 -353 -3 0 -75 159 -161 353 l-157 352 -102 3 c-125 3 -189 -9 -278 -54 -80 -40 -167 -125 -206 -202 -55 -109 -56 -120 -56 -714 l0 -548 -200 0 c-110 0 -200 2 -200 5 0 8 -321 1209 -324 1212 -1 1 -18 -2 -37 -7 -19 -5 -53 -14 -76 -20 -41 -10 -41 -11 -32 -42 8 -30 0 -43 -161 -269 l-170 -238 77 -195 c43 -108 81 -196 85 -196 3 0 73 81 155 179 81 99 150 180 153 180 3 1 41 -135 85 -302 l81 -302 -318 -3 -318 -2 0 -560 0 -560 120 0 119 0 6 -33 c3 -17 37 -237 75 -487 38 -250 72 -470 75 -487 l6 -33 519 0 520 0 0 520 0 520 160 0 160 0 0 -520 0 -520 560 0 560 0 0 520 0 520 160 0 160 0 0 -520 0 -520 520 0 519 0 6 33 c3 17 37 237 75 487 38 250 72 470 75 488 l6 32 119 0 120 0 0 560 0 560 -318 2 -318 3 81 302 c44 167 82 303 85 302 3 0 72 -81 153 -180 82 -98 152 -179 155 -179 4 0 42 88 84 195 l78 195 -163 227 c-90 126 -166 233 -170 239 -3 6 -2 25 3 42 8 31 8 32 -33 42 -23 6 -57 16 -75 22 -18 5 -35 8 -37 6 -4 -3 -325 -1203 -325 -1213 0 -3 -126 -5 -280 -5 l-280 0 0 290 0 290 -81 163 c-45 89 -83 164 -85 166 -4 5 -144 -60 -144 -66 0 -2 34 -71 75 -153 l75 -150 0 -270 0 -270 -200 0 -200 0 0 560 0 560 320 0 319 0 321 322 320 323 -117 117 c-65 65 -120 118 -123 117 -3 0 -129 -108 -280 -239z m-1800 -1200 l0 -560 -80 0 -80 0 0 560 0 560 80 0 80 0 0 -560z m560 -80 l0 -80 -80 0 -80 0 0 80 0 80 80 0 80 0 0 -80z m154 -812 c55 -16 138 -99 154 -154 28 -94 8 -169 -63 -239 -101 -102 -229 -102 -330 0 -102 101 -102 229 0 330 70 71 145 90 239 63z"></path>
              </g>
            </svg>
            <div>
              <h4 class="uppercase font-bold text-lg text-primary text-center md:text-left">Presiden</h4>
              <h5 class="text-dark text-lg font-semibold text-center md:text-left dark:text-white">Batis Reka Guliwan</h5>
              <p class="text-secondary text-center md:text-left">Program Studi Adm. Negara 2018</p>
            </div>
          </div>
          <div class="flex w-full md:gap-4 items-center flex-wrap justify-center lg:justify-start">
            <svg class="w-20 fill-dark dark:fill-slate-300 pt-5 pb-3" fill="" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-6 0 164 216" enable-background="new 0 0 154 216" xml:space="preserve">
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M77.012,2c12.112,0,21.931,9.819,21.931,21.931s-9.819,21.931-21.931,21.931S55.08,36.044,55.08,23.931S64.899,2,77.012,2z M41.037,84.229c0-1.672,1.082-2.802,2.823-2.785c1.527,0.015,2.748,1.289,2.748,2.816v12.206h60.748V84.229 c0-1.66,1.067-2.785,2.785-2.785c1.66,0,2.785,1.067,2.785,2.785v12.236h19.321V78.658c0-15.231-12.445-27.618-27.618-27.618h-5.571 L82.412,76.332l-2.46-19.886l2.46-5.476l-10.823,0.01l2.46,5.466l-2.46,19.886L55.913,51.039h-6.519 c-15.231,0-27.618,12.445-27.618,27.618v17.808h19.3L41.037,84.229z M10.094,56.507l6.803-6.803c0.503,0.111,1.02,0.173,1.548,0.173 c1.912,0,3.708-0.744,5.06-2.096l5.962-5.961c2.789-2.79,2.789-7.33,0-10.12c-1.351-1.352-3.148-2.096-5.06-2.096 c-1.911,0-3.708,0.744-5.06,2.096l-5.962,5.962c-1.734,1.734-2.389,4.144-1.967,6.39l-9.195,9.196v70.758h19.678L33.141,254h87.741 l11.217-129.995h19.678v-21.636H10.094V56.507z"></path> </g>
            </svg>
            <div>
              <h4 class="uppercase font-bold text-lg text-primary text-center md:text-left">Wakil Presiden</h4>
              <h5 class="text-dark text-lg font-semibold text-center md:text-left dark:text-white">Fajar Felik Pujianto</h5>
              <p class="text-secondary text-center md:text-left">Program Studi Manajemen 2018</p>
            </div>
          </div>
        </div>
        <div class="w-full lg:pt-10 lg:w-2/5 flex items-center justify-center flex-wrap gap-0">
          <img src="<?= base_url('public/img/logo/gema-restorasi.png') ?>" alt="Logo Kabinet Gema Restorasi" width="250px" class="rounded-2xl">
          <button class="mx-auto mt-8 w-full" disabled><span class="cursor-not-allowed rounded-full bg-primary py-2 px-6 text-base font-semibold text-white transition duration-300 ease-in-out hover:opacity-80 hover:shadow-lg">Details</span></button>
        </div>
      </div>

      <?php 
        $groupedData = [];
        foreach ($data_landing as $data) {
          $groupedData[$data->id][] = $data;
        }
      ?>

      <?php foreach ($groupedData as $group) : ?>
        <div class="w-full bg-white rounded-3xl p-8 pb-12 mb-8 flex flex-wrap lg:flex-nowrap dark:bg-dark">
          <div class="mb-8 lg:mb-0 w-full px-4 lg:w-3/5">
            <h4 class="text-lg font-bold uppercase text-primary text-center lg:text-left">Periode</h4>
            <h2 class="my-2 lg:my-3 text-center text-4xl font-bold text-dark dark:text-white lg:text-5xl lg:text-left"><?= $group[0]->tahun_periode ?></h2>
            <p class="text-md font-medium text-secondary md:text-xl text-center lg:text-left">Kabinet <b><?= $group[0]->kabinet ?></b></p>
            <?php foreach ($group as $data) : ?>
              <div class="flex w-full md:gap-4 items-center flex-wrap justify-center lg:justify-start">
                <!-- <img src="<?php echo (($data->jabatan == 'Presiden')) ?  base_url('public/img/president.png') : base_url('public/img/vice-president.png') ?>" alt="" class="w-20"> -->
                <?php if ($data->jabatan == 'Presiden') { ?>
                  <svg xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 20 154 256" preserveAspectRatio="xMidYMid meet" class="w-20">
                    <g transform="translate(0.100000,256) scale(0.03,-0.0400000)" fill="#aaaa" stroke="none" class="max-w-24 fill-dark dark:fill-slate-300">
                      <path d="M2281 4864 c-253 -68 -410 -331 -346 -579 67 -256 329 -415 580 -350 256 67 415 329 350 578 -67 259 -333 419 -584 351z"></path>
                      <path d="M3720 4160 l-275 -238 -364 -4 -363 -3 -157 -352 c-86 -194 -158 -353 -161 -353 -3 0 -75 159 -161 353 l-157 352 -102 3 c-125 3 -189 -9 -278 -54 -80 -40 -167 -125 -206 -202 -55 -109 -56 -120 -56 -714 l0 -548 -200 0 c-110 0 -200 2 -200 5 0 8 -321 1209 -324 1212 -1 1 -18 -2 -37 -7 -19 -5 -53 -14 -76 -20 -41 -10 -41 -11 -32 -42 8 -30 0 -43 -161 -269 l-170 -238 77 -195 c43 -108 81 -196 85 -196 3 0 73 81 155 179 81 99 150 180 153 180 3 1 41 -135 85 -302 l81 -302 -318 -3 -318 -2 0 -560 0 -560 120 0 119 0 6 -33 c3 -17 37 -237 75 -487 38 -250 72 -470 75 -487 l6 -33 519 0 520 0 0 520 0 520 160 0 160 0 0 -520 0 -520 560 0 560 0 0 520 0 520 160 0 160 0 0 -520 0 -520 520 0 519 0 6 33 c3 17 37 237 75 487 38 250 72 470 75 488 l6 32 119 0 120 0 0 560 0 560 -318 2 -318 3 81 302 c44 167 82 303 85 302 3 0 72 -81 153 -180 82 -98 152 -179 155 -179 4 0 42 88 84 195 l78 195 -163 227 c-90 126 -166 233 -170 239 -3 6 -2 25 3 42 8 31 8 32 -33 42 -23 6 -57 16 -75 22 -18 5 -35 8 -37 6 -4 -3 -325 -1203 -325 -1213 0 -3 -126 -5 -280 -5 l-280 0 0 290 0 290 -81 163 c-45 89 -83 164 -85 166 -4 5 -144 -60 -144 -66 0 -2 34 -71 75 -153 l75 -150 0 -270 0 -270 -200 0 -200 0 0 560 0 560 320 0 319 0 321 322 320 323 -117 117 c-65 65 -120 118 -123 117 -3 0 -129 -108 -280 -239z m-1800 -1200 l0 -560 -80 0 -80 0 0 560 0 560 80 0 80 0 0 -560z m560 -80 l0 -80 -80 0 -80 0 0 80 0 80 80 0 80 0 0 -80z m154 -812 c55 -16 138 -99 154 -154 28 -94 8 -169 -63 -239 -101 -102 -229 -102 -330 0 -102 101 -102 229 0 330 70 71 145 90 239 63z"></path>
                    </g>
                  </svg>
                <?php } else { ?>
                  <svg class="w-20 fill-dark dark:fill-slate-300 pt-5 pb-3" fill="" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-6 0 164 216" enable-background="new 0 0 154 216" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M77.012,2c12.112,0,21.931,9.819,21.931,21.931s-9.819,21.931-21.931,21.931S55.08,36.044,55.08,23.931S64.899,2,77.012,2z M41.037,84.229c0-1.672,1.082-2.802,2.823-2.785c1.527,0.015,2.748,1.289,2.748,2.816v12.206h60.748V84.229 c0-1.66,1.067-2.785,2.785-2.785c1.66,0,2.785,1.067,2.785,2.785v12.236h19.321V78.658c0-15.231-12.445-27.618-27.618-27.618h-5.571 L82.412,76.332l-2.46-19.886l2.46-5.476l-10.823,0.01l2.46,5.466l-2.46,19.886L55.913,51.039h-6.519 c-15.231,0-27.618,12.445-27.618,27.618v17.808h19.3L41.037,84.229z M10.094,56.507l6.803-6.803c0.503,0.111,1.02,0.173,1.548,0.173 c1.912,0,3.708-0.744,5.06-2.096l5.962-5.961c2.789-2.79,2.789-7.33,0-10.12c-1.351-1.352-3.148-2.096-5.06-2.096 c-1.911,0-3.708,0.744-5.06,2.096l-5.962,5.962c-1.734,1.734-2.389,4.144-1.967,6.39l-9.195,9.196v70.758h19.678L33.141,254h87.741 l11.217-129.995h19.678v-21.636H10.094V56.507z"></path> </g></svg>
                <?php } ?>
                <div>
                  <h4 class="uppercase font-bold text-lg text-primary text-center md:text-left"><?= $data->jabatan ?></h4>
                  <h5 class="text-dark text-lg font-semibold text-center md:text-left dark:text-white"><?= $data->nama ?></h5>
                  <p class="text-secondary text-center md:text-left">Program Studi <?= $data->prodi . ' ' . $data->angkatan ?></p>
                </div>
              </div>
            <?php endforeach ?>
          </div>
          <div class="w-full lg:pt-10 lg:w-2/5 flex items-center justify-center flex-wrap gap-0">
            <img src="<?= base_url('public/img/logo/'. $group[0]->logo) ?>" alt="Logo <?= $group[0]->kabinet ?>" width="250px" class="rounded-2xl">
            <button class="mx-auto mt-8 w-full"><a href="<?= base_url('about/'. $group[0]->slug) ?>" target="_blank" class=" rounded-full bg-primary py-2 px-6 text-base font-semibold text-white transition duration-300 ease-in-out hover:opacity-80 hover:shadow-lg">Details</a></button>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</section>
<!-- sejarah Section End -->

<!-- Footer Start -->
<?php $this->load->view('simple/_partials/footer.php'); ?>

 
</body>

</html>