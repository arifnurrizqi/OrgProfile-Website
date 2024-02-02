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

      <h1 class="text-xl font-bold lg:mb-2.5">Edit Profile Website</h1>

      <form action="<?= base_url() ?>admin/setting/submit_editIdentitas" method="POST" enctype="multipart/form-data">
        <div class="flex w-full flex-wrap lg:flex-nowrap lg:gap-3">
          <div class="w-full lg:w-1/2">
            <label for="nama_website" class="w-full mb-2 font-medium text-gray-900 dark:text-white">Nama Website</label>
            <input type="hidden" name="id" value="<?= $profile[0]->id; ?>">
            <input type="text" id="nama_website" name="nama_website" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:border-primary focus:outline-none focus:ring-1 block w-full p-2.5 mb-3 focus:ring-primary" value="<?= $profile[0]->nama_website; ?>" required maxlength="32" />
          </div>
          <div class="w-full lg:w-1/2">
            <label for="email" class="w-full mb-2 font-medium text-gray-900 dark:text-white">Email</label>
            <input type="text" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:border-primary focus:outline-none focus:ring-1 block w-full p-2.5 mb-3 focus:ring-primary" value="<?= $profile[0]->email; ?>" required maxlength="32" />
          </div>
        </div>
        <div>
          <label for="alamat" class="w-full mb-2 font-medium text-gray-900 dark:text-white">Alamat</label>
          <input type="text" id="alamat" name="alamat" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:border-primary focus:outline-none focus:ring-1 block w-full p-2.5 mb-3 focus:ring-primary" value="<?= $profile[0]->address; ?>" required />
        </div>
        <div class="flex w-full flex-wrap lg:flex-nowrap lg:gap-3">
          <div class="w-full lg:w-1/2">
            <label for="domain" class="w-full mb-2 font-medium text-gray-900 dark:text-white">Url Website</label>
            <input type="text" name="domain" id="domain" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:border-primary focus:outline-none focus:ring-1 block w-full p-2.5 mb-3 focus:ring-primary" value="<?= $profile[0]->url; ?>" required />
          </div>
          <div class="w-full lg:w-1/2">
            <label for="telp" class="w-full mb-2 font-medium text-gray-900 dark:text-white">Nomer Telepon</label>
            <input type="text" name="telp" id="telp" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:border-primary focus:outline-none focus:ring-1 block w-full p-2.5 mb-3 focus:ring-primary" value="<?= $profile[0]->no_telp; ?>" required />
          </div>
        </div>
        <div>
          <label for="maps" class="w-full mb-2 font-medium text-gray-900 dark:text-white">Google Maps</label>
          <textarea type="text" name="maps" id="maps" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:border-primary focus:outline-none focus:ring-1 block w-full p-2.5 mb-3 focus:ring-primary h-20" value="" required><?= $profile[0]->maps; ?></textarea>
        </div>
        <div>
          <label for="seo_keyword" class="w-full mb-2 font-medium text-gray-900 dark:text-white">Meta Keyword</label>
          <textarea type="text" name="seo_keyword" id="seo_keyword" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:border-primary focus:outline-none focus:ring-1 block w-full p-2.5 mb-3 focus:ring-primary h-20" value="" required><?= $profile[0]->keyword; ?></textarea>
        </div>
        <div>
          <label for="seo_deskripsi" class="w-full mb-2 font-medium text-gray-900 dark:text-white">Deskripsi</label>
          <textarea type="text" name="seo_deskripsi" id="seo_deskripsi" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:border-primary focus:outline-none focus:ring-1 block w-full p-2.5 mb-3 focus:ring-primary h-40" value="" required><?= $profile[0]->description; ?></textarea>
        </div>
        <div>
          <label for="sosmed" class="w-full mb-2 font-medium text-gray-900 dark:text-white">Link Sosmed <span class="text-xs italic">*pisahkan dengan koma (instagram, tiktok, youtube, twiter, facebook) </span></label>
          <textarea type="text" name="sosmed" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:border-primary focus:outline-none focus:ring-1 block w-full p-2.5 mb-3 focus:ring-primary h-20" value="" required><?= $profile[0]->sosmed; ?></textarea>
        </div>
        <div>
          <div class="flex w-full flex-wrap lg:flex-nowrap lg:gap-3">
            <div class="w-full md:w-2/3 flex flex-wrap ">
              <label for="favicon" class="w-full mb-2 font-medium text-gray-900 dark:text-white">Favicon</label>
              <input type="hidden" name="favicon_name" value="<?= $profile[0]->favicon; ?>">
              <input class="p-2 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-primary/10 file:text-primary hover:file:bg-primary/20" type="file" name="favicon" id="favicon" accept="image/png, image/jpeg, image/jpg, image/gif, image/webp">
              <p class="italic text-xs font-normal mt-1 mb-3"><span class="font-bold text-rose-500">* </span>Ukuran file max. <b>1 MB</b> dimensi maks. <b>1080x1080</b></p>
            </div>
            <div class="w-full md:w-1/3 flex items-center justify-center">
              <?php
              $fotoPengurus = base_url('public/img/' . $profile[0]->favicon);
              ?>
              <p class="mt-1 font-light text-sm">Foto saat ini:</span></p>
              <img src="<?= $fotoPengurus ?>" alt="<?= htmlentities($profile[0]->favicon, TRUE) ?>" class="rounded-lg h-8 px-6">
            </div>
          </div>
          <?php if (isset($upload_error)) : ?>
            <div class="text-sm font-semibold flex mb-2"><span class="font-bold text-rose-500">*</span><?= $upload_error ?></div>
          <?php endif; ?>
        </div>

        <div>
          <button type="submit" name="save" class="bg-primary py-2 px-3 text-center rounded-lg text-white mt-2">Save Update</button>
        </div>
      </form>
    </div>
  </div>

</body>

</html>