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

      <h1 class="text-xl font-bold lg:mb-2.5">Create new Fokus Isu Startegis</h1>

      <form action="<?= base_url() ?>admin/manage/submit_fokusIsu" method="POST" enctype="multipart/form-data">
        <div>
          <label for="fokus" class="w-full font-medium text-gray-900 dark:text-white">Lingkup <span class="text-xs italic"><span class="font-bold text-rose-500">*</span>misal Internal, Regional, atau Nasional </span></label>
          <input type="hidden" name="id_landing" value="<?= $landing->id; ?>">
          <input type="text" name="fokus" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:border-primary focus:outline-none focus:ring-1 block w-full p-2.5 mt-1 mb-4" placeholder="Masukan lingkup fokus" value="" required />
        </div>
        <div>
          <label for="poin" class="w-full font-medium text-gray-900 dark:text-white">Poin Fokus Isu Startegis <span class="text-xs italic"><span class="font-bold text-rose-500">*</span>Untuk Lingkup Tertentu pisahkan dengan koma (Kebijakan Kampus, Fasilitas, ...) </span></label>
          <textarea type="text" name="poin" rows="4" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:border-primary focus:outline-none focus:ring-1 block w-full p-2.5 mt-1 mb-4" placeholder="Masukan Poin Fokus berdasarkan Lingkup diatas" value="" required></textarea>
        </div>

        <div class="flex gap-3 mt-3">
          <button type="submit" name="save" class="bg-primary py-2 px-3 text-center rounded-lg text-white mt-2">Simpan</button>
          <a href="<?= site_url('admin/manage/fokusIsu/' . $landing->id) ?>" name="cancel" class="bg-rose-500 py-2 px-3 text-center rounded-lg text-white mt-2">Batal</a>
        </div>
      </form>

    </div>
  </main>
</body>

</html>