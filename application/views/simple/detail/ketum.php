<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <?php $this->load->view('simple/_partials/head.php'); ?>
</head>

<?php $this->load->view('simple/_partials/navbar.php'); ?>

<!-- Hero Section Start -->
<section id="home" class="min-h-screen flex items-center px-10 dark:bg-dark">
  <div class="container relative isolate">
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
      <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#77eaee] to-[#5f89ff] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <h1 class="text-3xl lg:text-4xl font-extrabold  uppercase text-dark text-center dark:text-white">Ketua Himpunan <span class="text-primary">& Wakil Ketua Himpunan</span>
    </h1>
    <h6 class="mt-2 text-lg lg:text-lg text-slate-500 text-center">Kabinet <span class="font-bold"><?= $landing[0]->kabinet ?></span></h6>
    <div class="mt-10 flex items-center justify-center gap-x-6">
      <a href="#about" class="rounded-full bg-primary py-3 px-8 text-base font-semibold text-white transition duration-300 ease-in-out hover:opacity-80 hover:shadow-lg leading-6">Read more <span aria-hidden="true">→</span></a>
    </div>
  </div>
</section>
<!-- Hero Section End -->

<!-- about Section Start -->
<section id="about" class="bg-slate-100 py-24 dark:bg-slate-800">
  <div class="container">
    <div class="flex flex-wrap">
      <div class="w-full bg-white rounded-3xl p-8 pb-12 flex flex-wrap lg:flex-nowrap dark:bg-dark">
        <div class="mb-8 lg:mb-0 w-full px-4 lg:w-3/5">
          <h4 class="text-lg font-bold uppercase text-primary text-center lg:text-left">Periode</h4>
          <h2 class="my-2 lg:my-3 text-center text-4xl font-bold text-dark dark:text-white lg:text-5xl lg:text-left"><?= $landing[0]->tahun_periode ?></h2>
          <p class="text-md font-medium text-secondary md:text-xl text-center lg:text-left">Kabinet <b><?= $landing[0]->kabinet ?></b></p>
          <?php foreach ($data_presWapres as $data) : ?>
            <div class="flex w-full md:gap-4 items-center flex-wrap justify-center lg:justify-start">
              <?php if ($data->jabatan == 'Ketua Himpunan') { ?>
                <svg xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 20 154 256" preserveAspectRatio="xMidYMid meet" class="w-20">
                  <g transform="translate(0.100000,256) scale(0.03,-0.0400000)" fill="#aaaa" stroke="none" class="max-w-24 fill-dark dark:fill-slate-300">
                    <path d="M2281 4864 c-253 -68 -410 -331 -346 -579 67 -256 329 -415 580 -350 256 67 415 329 350 578 -67 259 -333 419 -584 351z"></path>
                    <path d="M3720 4160 l-275 -238 -364 -4 -363 -3 -157 -352 c-86 -194 -158 -353 -161 -353 -3 0 -75 159 -161 353 l-157 352 -102 3 c-125 3 -189 -9 -278 -54 -80 -40 -167 -125 -206 -202 -55 -109 -56 -120 -56 -714 l0 -548 -200 0 c-110 0 -200 2 -200 5 0 8 -321 1209 -324 1212 -1 1 -18 -2 -37 -7 -19 -5 -53 -14 -76 -20 -41 -10 -41 -11 -32 -42 8 -30 0 -43 -161 -269 l-170 -238 77 -195 c43 -108 81 -196 85 -196 3 0 73 81 155 179 81 99 150 180 153 180 3 1 41 -135 85 -302 l81 -302 -318 -3 -318 -2 0 -560 0 -560 120 0 119 0 6 -33 c3 -17 37 -237 75 -487 38 -250 72 -470 75 -487 l6 -33 519 0 520 0 0 520 0 520 160 0 160 0 0 -520 0 -520 560 0 560 0 0 520 0 520 160 0 160 0 0 -520 0 -520 520 0 519 0 6 33 c3 17 37 237 75 487 38 250 72 470 75 488 l6 32 119 0 120 0 0 560 0 560 -318 2 -318 3 81 302 c44 167 82 303 85 302 3 0 72 -81 153 -180 82 -98 152 -179 155 -179 4 0 42 88 84 195 l78 195 -163 227 c-90 126 -166 233 -170 239 -3 6 -2 25 3 42 8 31 8 32 -33 42 -23 6 -57 16 -75 22 -18 5 -35 8 -37 6 -4 -3 -325 -1203 -325 -1213 0 -3 -126 -5 -280 -5 l-280 0 0 290 0 290 -81 163 c-45 89 -83 164 -85 166 -4 5 -144 -60 -144 -66 0 -2 34 -71 75 -153 l75 -150 0 -270 0 -270 -200 0 -200 0 0 560 0 560 320 0 319 0 321 322 320 323 -117 117 c-65 65 -120 118 -123 117 -3 0 -129 -108 -280 -239z m-1800 -1200 l0 -560 -80 0 -80 0 0 560 0 560 80 0 80 0 0 -560z m560 -80 l0 -80 -80 0 -80 0 0 80 0 80 80 0 80 0 0 -80z m154 -812 c55 -16 138 -99 154 -154 28 -94 8 -169 -63 -239 -101 -102 -229 -102 -330 0 -102 101 -102 229 0 330 70 71 145 90 239 63z"></path>
                  </g>
                </svg>
              <?php } else { ?>
                <svg class="w-20 fill-dark dark:fill-slate-300 pt-5 pb-3" fill="" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-6 0 164 216" enable-background="new 0 0 154 216" xml:space="preserve">
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                  <g id="SVGRepo_iconCarrier">
                    <path d="M77.012,2c12.112,0,21.931,9.819,21.931,21.931s-9.819,21.931-21.931,21.931S55.08,36.044,55.08,23.931S64.899,2,77.012,2z M41.037,84.229c0-1.672,1.082-2.802,2.823-2.785c1.527,0.015,2.748,1.289,2.748,2.816v12.206h60.748V84.229 c0-1.66,1.067-2.785,2.785-2.785c1.66,0,2.785,1.067,2.785,2.785v12.236h19.321V78.658c0-15.231-12.445-27.618-27.618-27.618h-5.571 L82.412,76.332l-2.46-19.886l2.46-5.476l-10.823,0.01l2.46,5.466l-2.46,19.886L55.913,51.039h-6.519 c-15.231,0-27.618,12.445-27.618,27.618v17.808h19.3L41.037,84.229z M10.094,56.507l6.803-6.803c0.503,0.111,1.02,0.173,1.548,0.173 c1.912,0,3.708-0.744,5.06-2.096l5.962-5.961c2.789-2.79,2.789-7.33,0-10.12c-1.351-1.352-3.148-2.096-5.06-2.096 c-1.911,0-3.708,0.744-5.06,2.096l-5.962,5.962c-1.734,1.734-2.389,4.144-1.967,6.39l-9.195,9.196v70.758h19.678L33.141,254h87.741 l11.217-129.995h19.678v-21.636H10.094V56.507z"></path>
                  </g>
                </svg>
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
          <img src="<?= base_url('public/img/logo/' . $landing[0]->logo) ?>" alt="Logo Kabinet <?= $landing[0]->kabinet ?>" width="250px" class="rounded-2xl">
        </div>
      </div>
    </div>
  </div>
</section>
<!-- about Section End -->

<!-- Struktur kabinet Section Start -->
<section id="struktur-kabinet" class="pt-32 pb-32 dark:bg-dark">
  <div class="container">
    <div class="w-full px-4">
      <div class="mx-auto mb-8 max-w-xl text-center">
        <h4 class="mb-2 text-lg font-semibold text-primary">Struktur</h4>
        <h2 class="mb-4 text-3xl font-bold text-dark dark:text-white sm:text-4xl lg:text-4xl">Lingkar Ketua Himpunan</h2>
      </div>
    </div>
    <div class="w-full">
      <!-- Press wapress -->
      <div class="max-w-full mt-10 flex items-center justify-center">
        <h4 class="w-full lg:max-w-xl text-center rounded-full mx-2 mb-8 bg-gradient-to-tr from-slate-500 to-dark py-2 text-lg font-semibold lg:font-semibold text-white transition duration-300 ease-in-out hover:opacity-80 hover:shadow-lg dark:bg-gradient-to-tr dark:from-slate-500 dark:to-slate-300 dark:text-dark">Ketua Himpunan & Wakil Ketua Himpunan</h4>
      </div>
      <div class="flex w-full gap-6 flex-wrap justify-center px-4 xl:mx-auto xl:w-10/12">
        <?php foreach ($data_presWapres as $ketum) : ?>
          <div class="max-w-72 py-4 lg:px-4 px-4 rounded-3xl shadow-md dark:bg-slate-800 h-full border dark:border-dark">
            <div class="overflow-hidden rounded-3xl shadow-md px-8 dark:bg-slate-800 h-72 border dark:border-dark">
              <img src="<?php echo (!empty($ketum->foto)) ?  base_url('public/img/pengurus/' . $ketum->foto) : base_url('public/img/pengurus/profile.png') ?>" alt="<?= $ketum->jabatan ?>" class="mt-3 object-cover shadow-sm w-full object-center h-full" />
            </div>
            <p class="mt-3 text-xl font-bold text-dark text-center mb-2 dark:text-slate-100"><?= $ketum->nama ?></p>
            <p class="text-base font-medium text-secondary text-center"><?= $ketum->prodi . ' ' . $ketum->angkatan ?> </p>
            <!-- sosmed -->
            <div class="flex items-center justify-center mt-2 gap-2">
              <!-- Instagram -->
              <a href="https://instagram.com/<?= $ketum->ig; ?>" target="_blank" class="flex h-8 w-8 items-center justify-center rounded-xl border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <title>Instagram</title>
                  <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                </svg>
              </a>

              <!-- TikTok -->
              <a href="https://tiktok.com/@<?= $ketum->tiktok; ?>" target="_blank" class="flex h-8 w-8 items-center justify-center rounded-xl border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <title>TikTok</title>
                  <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z" />
                </svg>
              </a>

              <!-- Twitter -->
              <a href="https://twiter.com/<?= $ketum->twiter; ?>" target="_blank" class="flex h-8 w-8 items-center justify-center rounded-xl border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <title>Twitter</title>
                  <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                </svg>
              </a>

              <!-- Facebook -->
              <a href="https://facebook.com/<?= $ketum->fb; ?>" target="_blank" class="flex h-8 w-8 items-center justify-center rounded-xl border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <title>Facebook</title>
                  <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                </svg>
              </a>
            </div>
          </div>
        <?php endforeach ?>
      </div>
      <!-- Menko -->
      <div class="max-w-full mt-10 flex items-center justify-center">
        <h4 class="w-full lg:max-w-xl text-center rounded-full mx-2 mb-6 bg-gradient-to-tr from-slate-500 to-dark py-2 text-lg font-semibold lg:font-semibold text-white transition duration-300 ease-in-out hover:opacity-80 hover:shadow-lg dark:bg-gradient-to-tr dark:from-slate-500 dark:to-slate-300 dark:text-dark">Menteri Koordinator</h4>
      </div>
      <div class="flex w-full gap-6 flex-wrap justify-center px-4 xl:mx-auto">
        <p class="text-md font-medium text-secondary md:text-lg">Klik foto untuk melihat informasi detail</p>
        <!-- kemenkoan -->
        <div class="flex w-full gap-6 flex-wrap justify-center px-4 xl:mx-auto">
          <?php foreach ($data_koordinator as $koor) : ?>
            <div class="max-w-72 lg:w-1/4">
              <a href="<?php echo (stripos($koor->jabatan, 'PLT') !== false || stripos($koor->jabatan, 'PJ') !== false) ? '#' : base_url('kemenkoan/' . $koor->id . '/' . $this->uri->segment(3)); ?>">
                <div class="max-w-72 py-4 lg:px-4 px-4 rounded-3xl shadow-md dark:bg-slate-800 h-full">
                  <div class="overflow-hidden rounded-3xl shadow-md px-8 dark:bg-slate-800 h-72">
                    <img src="<?php echo (!empty($koor->foto)) ?  base_url('public/img/pengurus/' . $koor->foto) : base_url('public/img/pengurus/profile.png') ?>" alt="<?= $koor->jabatan ?>" class="mt-3 object-cover shadow-sm w-full object-center h-full" />
                  </div>
                  <h3 class=" mt-4 mb-3 text-md font-semibold text-white dark:text-dark text-center bg-gradient-to-t from-slate-500 to-dark rounded-full px-6 py-2 dark:bg-gradient-to-t dark:from-slate-500 dark:to-slate-300 truncate"><?= $koor->jabatan ?></h3>
                  <p class="text-xl font-bold text-dark text-center mb-2 dark:text-slate-100 truncate"><?= $koor->nama ?></p>
                  <p class="text-base font-medium text-secondary text-center"><?= $koor->prodi . ' ' . $koor->angkatan; ?></p>
                </div>
              </a>
            </div>
          <?php endforeach ?>
        </div>
      </div>
    </div>
</section>

<!-- Footer Start -->
<?php $this->load->view('simple/_partials/footer.php'); ?>

</body>

</html>