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

			<h1 class="text-xl font-bold lg:mb-2.5">Feedback</h1>

			<?php foreach ($feedbacks as $feedback) : ?>
				<div class="w-full px-4 py-3 border-2 rounded-2xl mb-3 <?php echo ($feedback->status == 0) ? 'bg-primary/20 transition duration-300 ease-in-out' : '' ?>">
					<div class="mb-4">
						<div class="flex flex-nowrap items-center">
							<span class="text-sm w-1/6 lg:w-1/12">Nama </span>
							<p class=" text-lg font-semibold w-5/6 lg:w-11/12">: <?= $feedback->name ?></p>
						</div>
						<div class="flex flex-nowrap">
							<span class="text-sm w-1/6 lg:w-1/12">Email </span>
							<p class="text-gray-500 text-sm font-semibold w-5/6 lg:w-11/12">: <?= $feedback->email ?></p>
						</div>
						<div class="flex flex-nowrap items-center mb-2">
							<span class="text-sm w-1/6 lg:w-1/12">Waktu </span>
							<p class="text-gray-500 text-sm font-semibold w-5/6 lg:w-11/12">: <?= $feedback->created_at ?></p>
						</div>
						<div class="flex flex-nowrap mb-2">
							<span class="text-sm w-1/6 lg:w-1/12 ">Pesan </span>
							<div class="text-gray-500 text-sm font-semibold w-5/6 lg:w-11/12">:</div>
						</div>
						<p class="px-4 py-2 bg-slate-50 rounded-none rounded-r-xl rounded-bl-xl"><?= $feedback->message ?></p>
					</div>
					<div class="flex items-center gap-4">
						<button data-delete-url="<?= site_url('admin/feedback/delete/' . $feedback->id) ?>" class="bg-rose-500 py-2 px-3 text-center rounded-lg text-white hover:bg-rose-400 transition duration-300 ease-in-out cursor-pointer" role="button" onclick="deleteConfirm(this)">Delete</button>
						<form class="js-form" method="POST" action="<?= site_url('admin/feedback/submit_status') ?>">
							<label class="relative inline-flex items-center cursor-pointer">
								<?php
								$get_status = $feedback->status == 1 ? 'checked' : '';
								$value = $get_status == 'checked' ? '1' : '0';
								?>
								<input type="hidden" name="api_key" value="<?= $feedback->id; ?>" />
								<input type="checkbox" class="sr-only peer js-switch" id="switch" name="status_feedback" value="<?= $value; ?>" <?php echo $get_status; ?> />
								<div class="w-11 h-6 bg-gray-200 ring-2 ring-slate-300 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer  peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all  peer-checked:bg-primary"></div>
								<span class="ml-2 text-sm font-medium text-gray-900">telah dibaca</span>
							</label>
						</form>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>

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

	<?php if ($this->session->flashdata('success')) : ?>
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
				title: '<?= $this->session->flashdata('success') ?>'
			})
		</script>
	<?php endif ?>
</body>

</html>