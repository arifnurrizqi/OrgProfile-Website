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
    <h1 class="text-3xl lg:text-4xl font-extrabold  uppercase text-dark text-center dark:text-white">kementerian <span class="text-primary">
        <?php
        $kementerian = str_replace("Menteri", "", $menteri->jabatan);
        echo $kementerian;
        ?></span>
    </h1>
    <h6 class="mt-2 text-lg lg:text-lg text-slate-500 text-center">Kabinet <span class="font-bold"><?= $landing[0]->kabinet ?></span></h6>
    <div class="mt-10 flex items-center justify-center gap-x-6">
      <a href="#about" class="rounded-full bg-primary py-3 px-8 text-base font-semibold text-white transition duration-300 ease-in-out hover:opacity-80 hover:shadow-lg leading-6">Read more <span aria-hidden="true">→</span></a>
    </div>
  </div>
</section>
<!-- Hero Section End -->

<!-- about Section Start -->
<section id="about" class=" pt-24 lg:pt-28 pb-32 dark:bg-dark">
  <div class="container">
    <div class="flex flex-wrap">
      <div class="mb-10 w-full px-4 lg:w-3/5">
        <h4 class="mb-3 text-lg font-bold uppercase text-primary">About</h4>
        <h2 class="mb-5 max-w-md text-3xl font-bold text-dark dark:text-white lg:text-4xl"><?= str_replace("Menteri", "Kementerian", $menteri->jabatan) ?></h2>
        <?php
        $longText = $menteri->about;

        // Memecah teks menjadi array berdasarkan tanda "."
        $paragraphs = explode("\n", $longText);

        // Menampilkan tag paragraf HTML untuk setiap elemen array
        foreach ($paragraphs as $paragraph) {
          echo "<p class='max-w-2xl text-base font-medium text-secondary lg:text-lg mb-3'>{$paragraph}</p>";
        }
        ?>
        <br>
        <a href="#struktur-kabinet" class=" rounded-full bg-primary py-3 px-8 text-base font-semibold text-white transition duration-300 ease-in-out hover:opacity-80 hover:shadow-lg">Pengurus</a>
      </div>
      <div class="w-full px-4 lg:w-2/5 flex items-center justify-center flex-wrap gap-0">
        <img src="<?= base_url('public/img/group.png') ?>" alt="gambar pengurus <?= ($landing[0]->kabinet) ?>" width="400px" class="rounded-2xl">
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
        <h2 class="mb-4 text-3xl font-bold text-dark dark:text-white sm:text-4xl lg:text-4xl">Kementerian
          <?php
          $kementerian = str_replace("Menteri", "", $menteri->jabatan);
          echo $kementerian;
          ?>
        </h2>
        <!-- <p class="text-md font-medium text-secondary md:text-lg">Klik foto menteri untuk melihat detail kementrian</p> -->
      </div>
    </div>
    <div class="w-full">
      <!-- Menteri -->
      <div class="max-w-full flex items-center justify-center">
        <h4 class="w-full lg:max-w-xl text-center rounded-full mx-2 mb-8 bg-gradient-to-tr from-slate-500 to-dark py-2 text-lg font-semibold lg:font-semibold text-white transition duration-300 ease-in-out hover:opacity-80 hover:shadow-lg dark:bg-gradient-to-tr dark:from-slate-500 dark:to-slate-300 dark:text-dark"><?= $menteri->jabatan ?></h4>
      </div>
      <div class="flex w-full gap-6 flex-wrap justify-center px-4 xl:mx-auto xl:w-10/12">
        <div class="max-w-72 py-4 lg:px-4 px-4 rounded-3xl shadow-md dark:bg-slate-800 h-full border dark:border-dark">
          <div class="overflow-hidden rounded-3xl shadow-md px-8 dark:bg-slate-800 h-72 border dark:border-dark">
            <img src="<?php echo (!empty($menteri->foto)) ?  base_url('public/img/pengurus/' . $menteri->foto) : base_url('public/img/pengurus/profile.png') ?>" alt="<?= $menteri->jabatan ?>" class="mt-3 object-cover shadow-sm w-full object-center h-full" />
          </div>
          <p class="mt-3 text-xl font-bold text-dark text-center mb-2 dark:text-slate-100"><?= $menteri->nama ?></p>
          <p class="text-base font-medium text-secondary text-center"><?= $menteri->prodi . ' ' . $menteri->angkatan ?> </p>
          <!-- sosmed -->
          <div class="flex items-center justify-center mt-2 gap-2">
            <!-- Instagram -->
            <a href="https://instagram.com/<?= $menteri->ig; ?>" target="_blank" class="flex h-8 w-8 items-center justify-center rounded-xl border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
              <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>Instagram</title>
                <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
              </svg>
            </a>

            <!-- TikTok -->
            <a href="https://tiktok.com/@<?= $menteri->tiktok; ?>" target="_blank" class="flex h-8 w-8 items-center justify-center rounded-xl border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
              <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>TikTok</title>
                <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z" />
              </svg>
            </a>

            <!-- Twitter -->
            <a href="https://twiter.com/<?= $menteri->twiter; ?>" target="_blank" class="flex h-8 w-8 items-center justify-center rounded-xl border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
              <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>Twitter</title>
                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
              </svg>
            </a>

            <!-- Facebook -->
            <a href="https://facebook.com/<?= $menteri->fb; ?>" target="_blank" class="flex h-8 w-8 items-center justify-center rounded-xl border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
              <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>Facebook</title>
                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
              </svg>
            </a>
          </div>
        </div>
      </div>
      <!-- Staf -->
      <div class="max-w-full mt-10 flex items-center justify-center">
        <h4 class="w-full lg:max-w-xl text-center rounded-full mx-2 mb-8 bg-gradient-to-tr from-slate-500 to-dark py-2 text-lg font-semibold lg:font-semibold text-white transition duration-300 ease-in-out hover:opacity-80 hover:shadow-lg dark:bg-gradient-to-tr dark:from-slate-500 dark:to-slate-300 dark:text-dark">Staf Kementerian <?= $kementerian ?></h4>
      </div>
      <div class="flex w-full gap-6 flex-wrap justify-center px-4 xl:mx-auto">
        <?php foreach ($data_staf as $staf) : ?>
          <div class="max-w-72 lg:w-1/4">
            <div class="w-full py-4 lg:px-4 px-4 rounded-3xl shadow-md dark:bg-slate-800 h-full">
              <div class=" overflow-hidden rounded-3xl shadow-md px-8 dark:bg-slate-800 h-72 border dark:border-dark">

                <img src="<?php echo ($staf->foto !== NULL) ?  base_url('public/img/pengurus/' . $staf->foto) : base_url('public/img/pengurus/profile.png') ?>" alt="<?= $staf->jabatan ?>" class="mt-3 object-cover shadow-sm w-full object-center rounded-2xl h-full" />

              </div>
              <p class="mt-3 text-xl font-bold text-dark text-center mb-2 dark:text-slate-100 truncate" title="<?= $staf->nama ?>"><?= $staf->nama ?></p>
              <p class="text-base font-medium text-secondary text-center"><?= $staf->prodi . " " . $staf->angkatan; ?></p>
              <!-- sosmed -->
              <div class="flex items-center justify-center mt-2 gap-2">
                <!-- Instagram -->
                <a href="https://instagram.com/<?= $staf->ig; ?>" target="_blank" class="flex h-8 w-8 items-center justify-center rounded-xl border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                  <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <title>Instagram</title>
                    <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                  </svg>
                </a>

                <!-- TikTok -->
                <a href="https://tiktok.com/@<?= $staf->tiktok; ?>" target="_blank" class="flex h-8 w-8 items-center justify-center rounded-xl border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                  <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <title>TikTok</title>
                    <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z" />
                  </svg>
                </a>

                <!-- Twitter -->
                <a href="https://twiter.com/<?= $staf->twiter; ?>" target="_blank" class="flex h-8 w-8 items-center justify-center rounded-xl border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                  <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <title>Twitter</title>
                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                  </svg>
                </a>

                <!-- Facebook -->
                <a href="https://facebook.com/<?= $staf->fb; ?>" target="_blank" class="flex h-8 w-8 items-center justify-center rounded-xl border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                  <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <title>Facebook</title>
                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
</section>

<!-- Footer Start -->
<?php $this->load->view('simple/_partials/footer.php'); ?>

</body>

</html>