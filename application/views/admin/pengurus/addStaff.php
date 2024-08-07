<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <?php $this->load->view('admin/_partials/head.php') ?>
</head>

<body>
  <main class="max-w-7xl max-w mx-auto flex lg:py-5 pb-32 px-4 pt-4 lg:gap-8">

    <?php $this->load->view('admin/_partials/side_nav.php') ?>

    <div class="flex flex-col w-full right-0">

      <?php $this->load->view('admin/_partials/topbar.php') ?>

      <h1 class="text-xl font-bold lg:mb-2.5">Tambah Staff Kementerian</h1>

      <form action="<?= base_url() ?>admin/pengurus/submit_addStaff" method="POST" enctype="multipart/form-data">
        <div>
          <label for="nama" class="w-full font-medium text-gray-900 dark:text-white">Nama Lengkap</label>
          <input type="hidden" name="id_landing" value="<?= $landing->id; ?>">
          <input type="hidden" name="kabinet" value="<?= $landing->kabinet; ?>">
          <input type="text" name="nama" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:border-primary focus:outline-none focus:ring-1 block w-full p-2.5 mt-1 mb-4" placeholder="Masukan nama lengkap" value="" required />
        </div>
        <div>
          <label for="prodi" class="w-full font-medium text-gray-900 dark:text-white">Program Studi <span class="text-sm italic">(Opsional)</span></label>
          <input type="text" name="prodi" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:border-primary focus:outline-none focus:ring-1 block w-full p-2.5 mt-1 mb-4" placeholder="Masukan program studi" value="" />
        </div>
        <div>
          <label for="angkatan" class="w-full font-medium text-gray-900 dark:text-white">Angkatan <span class="text-sm italic">(Opsional)</span></label>
          <input type="text" name="angkatan" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:border-primary focus:outline-none focus:ring-1 block w-full p-2.5 mt-1 mb-4" placeholder="Masukan tahun angkatan" value="" />
        </div>
        <div>
          <label for="jabatan_ref" class="w-full font-medium text-gray-900 dark:text-white">Kementerian</label>
          <select name="jabatan_ref" id="jabatan_ref" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:border-primary focus:outline-none focus:ring-1 block w-full p-2 mt-1 mb-3" required>
            <option value="">-- Pilih Kementerian</option>
            <?php foreach ($coordinators as $kementerian) : ?>
              <option class="<?php echo (stripos($kementerian->jabatan, 'PLT') !== false || stripos($kementerian->jabatan, 'PJ') !== false) ? 'hidden' : '' ?>" value="<?= $kementerian->id ?>" data-jabatan="<?= str_replace('Menteri', '', $kementerian->jabatan) ?>">
                <?= str_replace('Menteri', 'Kementerian', $kementerian->jabatan) ?> - <?= $kementerian->nama ?>
              </option>
            <?php endforeach ?>
          </select>
          <p class="italic text-xs font-normal mt-1 mb-3"><span class="font-bold text-rose-500">*</span>Jika pilihan tidak ada, tambahkan <b>Menteri nya</b> terlebih dahulu, sebelum menambahkan staff!</p>
        </div>
        <div>
          <input type="hidden" name="jabatan" id="jabatan" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:border-primary focus:outline-none focus:ring-1 block w-full p-2.5 mt-1 mb-4" placeholder="Masukan nama kementerian" value="" required />
        </div>
        <div id="sosmed">
          <label for="element" class="w-full font-medium text-gray-900 dark:text-white">Sosmed <span class="text-sm italic">(Opsional)</span></label>
          <div class="flex mt-1 mb-4">
            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-l-lg border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
              <svg class="h-7 fill-slate-600" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <g id="Layer_2" data-name="Layer 2">
                    <g id="invisible_box" data-name="invisible box">
                      <rect width="48" height="48" fill="none"></rect>
                      <rect width="48" height="48" fill="none"></rect>
                    </g>
                    <g id="icons_Q2" data-name="icons Q2">
                      <path d="M24,7.6h8.1a10.8,10.8,0,0,1,3.7.7,6.7,6.7,0,0,1,3.8,3.8,10.8,10.8,0,0,1,.7,3.7c.1,2.1.1,2.8.1,8.1s0,6-.1,8.1a10.8,10.8,0,0,1-.7,3.7,6.7,6.7,0,0,1-3.8,3.8,10.8,10.8,0,0,1-3.7.7H15.9a10.8,10.8,0,0,1-3.7-.7,6.7,6.7,0,0,1-3.8-3.8,10.8,10.8,0,0,1-.7-3.7c-.1-2.1-.1-2.8-.1-8.1s0-6,.1-8.1a10.8,10.8,0,0,1,.7-3.7,6.7,6.7,0,0,1,3.8-3.8,10.8,10.8,0,0,1,3.7-.7H24M24,4H15.8a17.9,17.9,0,0,0-4.9.9A10,10,0,0,0,7.4,7.4a8.5,8.5,0,0,0-2.3,3.5,14.5,14.5,0,0,0-1,4.9C4,17.9,4,18.6,4,24s0,6.1.1,8.2a14.5,14.5,0,0,0,1,4.9,8.5,8.5,0,0,0,2.3,3.5,8.5,8.5,0,0,0,3.5,2.3,14.5,14.5,0,0,0,4.9,1H32.2a14.5,14.5,0,0,0,4.9-1,8.5,8.5,0,0,0,3.5-2.3A10,10,0,0,0,43,37.1a17.9,17.9,0,0,0,.9-4.9c.1-2.1.1-2.8.1-8.2s0-6.1-.1-8.2a17.9,17.9,0,0,0-.9-4.9,10,10,0,0,0-2.4-3.5A10,10,0,0,0,37.1,5a17.9,17.9,0,0,0-4.9-.9H24"></path>
                      <path d="M24,13.7A10.3,10.3,0,1,0,34.3,24,10.3,10.3,0,0,0,24,13.7m0,17A6.7,6.7,0,1,1,30.7,24,6.7,6.7,0,0,1,24,30.7"></path>
                      <path d="M37.1,13.3a2.4,2.4,0,1,1-2.4-2.4,2.4,2.4,0,0,1,2.4,2.4"></path>
                    </g>
                  </g>
                </g>
              </svg>
            </span>
            <input type="text" name="ig" class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:border-primary focus:outline-none focus:ring-1 block w-full p-2.5" placeholder="Masukan username instagram" value="" />
          </div>
          <div class="flex mt-1 mb-4">
            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-l-lg border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
              <svg class="h-7 fill-slate-600" viewBox="0 0 14 14" role="img" focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <path d="m 4.9520184,12.936803 c -1.12784,-0.2039 -2.19411,-0.9875 -2.66789,-1.9606 -0.32895,-0.6757 -0.45541,-1.3901003 -0.37418,-2.1137003 0.15054,-1.3412 0.84482,-2.4395 1.92406,-3.0439 0.56899,-0.3186 1.38421,-0.4769 1.991,-0.3867 l 0.35091,0.052 9e-5,1.0725 9e-5,1.0725 -0.332,-0.014 c -0.79998,-0.033 -1.39595,0.3096 -1.70379,0.9784 -0.1473,0.32 -0.18461,0.8887 -0.081,1.2351 0.12773,0.4273003 0.50542,0.8132003 0.96145,0.9825003 0.15535,0.058 0.32344,0.08 0.61152,0.079 0.35862,-4e-4 0.42448,-0.013 0.67663,-0.1323 0.36505,-0.1726 0.63141,-0.4231 0.78797,-0.7411 0.10147,-0.2061003 0.13414,-0.3430003 0.16587,-0.6951003 0.0217,-0.2412 0.0401,-2.2122 0.0409,-4.38 l 10e-4,-3.94149998 0.68371,0 c 0.37605,0 0.8277,0.012 1.00368,0.027 l 0.31995,0.027 0,0.1584 c 0,0.3813 0.22299,1.1127 0.45156,1.4812 0.0571,0.092 0.2564996,0.3178 0.4431796,0.5018 0.36068,0.3555 0.66494,0.5352 1.13352,0.6692 0.138,0.04 0.28359,0.089 0.32353,0.109 0.0399,0.02 0.11522,0.038 0.16728,0.038 0.0521,4e-4 0.13701,0.012 0.18876,0.026 l 0.0941,0.025 0,0.9948 0,0.9948 -0.17773,-0.019 c -0.9611,-0.1037 -1.72925,-0.3601 -2.3423096,-0.782 -0.30468,-0.2096 -0.33102,-0.222 -0.30218,-0.1422 0.0104,0.029 0.003,1.1249 -0.0164,2.436 -0.0336,2.2728 -0.0396,2.3992 -0.12781,2.7173003 -0.33904,1.2222 -1.09994,2.1297 -2.10183,2.5068 -0.6126,0.2306 -1.39679,0.2932 -2.09405,0.1671 z"></path>
                </g>
              </svg>
            </span>
            <input type="text" name="tt" class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:border-primary focus:outline-none focus:ring-1 block w-full p-2.5" placeholder="Masukan username tiktok" value="" />
          </div>
          <div class="flex mt-1 mb-4">
            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-l-lg border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
              <svg class="h-7 fill-slate-600" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <path d="M12 2.03998C6.5 2.03998 2 6.52998 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.84998C10.44 7.33998 11.93 5.95998 14.22 5.95998C15.31 5.95998 16.45 6.14998 16.45 6.14998V8.61998H15.19C13.95 8.61998 13.56 9.38998 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96C15.9164 21.5878 18.0622 20.3855 19.6099 18.57C21.1576 16.7546 22.0054 14.4456 22 12.06C22 6.52998 17.5 2.03998 12 2.03998Z"></path>
                </g>
              </svg>
            </span>
            <input type="text" name="fb" class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:border-primary focus:outline-none focus:ring-1 block w-full p-2.5" placeholder="Masukan username facebook" value="" />
          </div>
          <div class="flex mt-1 mb-4">
            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-l-lg border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
              <svg class="h-7 text-slate-600 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="-3 -3 27 27">
                <path fill="currentColor" d="M12.186 8.672 18.743.947h-2.927l-5.005 5.9-4.44-5.9H0l7.434 9.876-6.986 8.23h2.927l5.434-6.4 4.82 6.4H20L12.186 8.672Zm-2.267 2.671L8.544 9.515 3.2 2.42h2.2l4.312 5.719 1.375 1.828 5.731 7.613h-2.2l-4.699-6.237Z" />
              </svg>
            </span>
            <input type="text" name="twiter" class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:border-primary focus:outline-none focus:ring-1 block w-full p-2.5" placeholder="Masukan username twiter" value="" />
          </div>
        </div>
        <div>
          <div class="w-full flex flex-wrap mb-2">
            <label for="foto" class="w-full mb-2 font-medium text-gray-900 dark:text-white">Upload foto <span class="text-sm italic"><span class="text-sm italic">(Opsional)</span></span></label>
            <input class="p-2 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-primary/10 file:text-primary hover:file:bg-primary/20" type="file" name="foto" id="foto" accept="image/png, image/jpeg, image/jpg, image/gif, image/webp">
            <p class="italic text-xs font-normal mt-1 mb-3"><span class="font-bold text-rose-500">* </span>Ukuran foto max. <b>1 MB</b>, foto tanpa background lebih bagus</p>
          </div>
          <?php $upload_error = $this->input->get('upload_error'); ?>
          <?php if (isset($upload_error)) : ?>
            <div class="text-sm font-semibold flex"><span class="font-bold text-rose-500">*</span><?= $upload_error ?></div>
          <?php endif; ?>
        </div>

        <div class="flex gap-3 mt-3">
          <button type="submit" name="save" class="bg-primary py-2 px-3 text-center rounded-lg text-white mt-2">Simpan</button>
        </div>
      </form>

    </div>
  </main>
  <script>
    var jabatanRefSelect = document.getElementById('jabatan_ref');
    var jabatanInput = document.getElementById('jabatan');

    // Mendengarkan perubahan pada elemen select
    jabatanRefSelect.addEventListener('change', function() {
      // Mendapatkan nilai opsi yang dipilih
      var selectedOption = jabatanRefSelect.options[jabatanRefSelect.selectedIndex];
      var jabatanValue = selectedOption.getAttribute('data-jabatan');

      jabatanInput.value = jabatanValue;
    });
  </script>
</body>

</html>