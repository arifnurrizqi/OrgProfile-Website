<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <?php $this->load->view('admin/_partials/head.php') ?>
</head>

<body>
  <main class="max-w-7xl max-w mx-auto flex lg:py-5 pb-32 px-4 pt-4 lg:gap-8">

    <?php $this->load->view('admin/_partials/side_nav.php') ?>

    <div class="flex flex-col w-full">
      <?php $this->load->view('admin/_partials/topbar.php') ?>

      <div class="w-full flex justify-between items-center py-3">
        <h1 class="text-xl font-bold">Fokus Isu Strategis, Kabinet <span class="text-primary"><?= $landing->kabinet ?></span></h1>
        <a href="<?= site_url('admin/manage/new_fokusIsu/' . $landing->id) ?>" class="bg-primary p-2 text-center rounded-lg text-white flex items-center justify-center" role="button"><span class="font-bold border-2 border-white rounded-md px-1 mr-1">+</span> Data</a>
      </div>
      <div class="relative overflow-x-auto pb-6">
        <table class="table rounded-xl w-full">
          <thead>
            <tr class="border-b-2 border-slate-300 mb-2">
              <th class="text-left py-3 px-4">Fokus Isu Startegis</th>
              <th style="width: 15%;" class="text-center py-3 px-4">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data_fokusIsu as $fokusIsu) : ?>
              <tr class="border-b hover:bg-white">
                <td class="px-4">
                  <h4 class="font-medium"><?= $fokusIsu->lingkup ?></h4>
                  <p class="text-gray-500 text-sm"><?= $fokusIsu->poin_fokus ?></p>
                </td>
                <td>
                  <div class="flex flex-wrap gap-1 justify-center p-2">
                    <a href="<?= site_url('admin/manage/edit_fokusIsu/' . $landing->id . '/'  . $fokusIsu->id) ?>" class="bg-green-500 rounded-lg py-1.5 px-2.5 text-white" role="button">Edit</a>
                    <a href="#" data-delete-url="<?= site_url('admin/manage/delete_fokusIsu/' . $landing->id . '/'  . $fokusIsu->id) ?>" class="rounded-lg bg-rose-500 p-1 flex items-center justify-center" role="button" onclick="deleteConfirm(this)">
                      <svg class="h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                          <path d="M10 12V17" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          <path d="M14 12V17" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          <path d="M4 7H20" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          <path d="M6 10V18C6 19.6569 7.34315 21 9 21H15C16.6569 21 18 19.6569 18 18V10" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          <path d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                      </svg>
                    </a>
                  </div>
                </td>
              </tr>
            <?php endforeach ?>

          </tbody>
        </table>
      </div>
    </div>
  </main>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    function deleteConfirm(event) {
      Swal.fire({
        title: 'Delete Confirmation!',
        text: 'Are you sure to delete the item?',
        icon: 'warning',
        showCancelButton: true,
        cancelButtonText: 'No',
        confirmButtonText: 'Yes Delete',
        customClass: {
          popup: 'rounded-xl',
          confirmButton: 'bg-rose-500 text-white px-6 py-2 rounded-lg mr-2',
          cancelButton: 'bg-green-500 text-white px-6 py-2 rounded-lg mr-2',
        },
        buttonsStyling: false,
      }).then(dialog => {
        if (dialog.isConfirmed) {
          window.location.assign(event.dataset.deleteUrl);
        }
      });
    }

    const switches = document.querySelectorAll('.js-switch');
    const forms = document.querySelectorAll('.js-form');

    switches.forEach(function(switchElem, index) {
      switchElem.addEventListener('change', function() {
        this.value = this.checked;
        forms[index].submit();
      });
    });
  </script>
  <?php if ($this->session->flashdata('message')) : ?>
    <script>
      const Toast = Swal.mixin({
        toast: true,
        position: 'top',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })

      Toast.fire({
        icon: 'success',
        title: '<?= $this->session->flashdata('message') ?>'
      })
    </script>
  <?php endif ?>
</body>

</html>