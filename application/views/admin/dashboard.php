<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
	<?php $this->load->view('admin/_partials/head.php') ?>
</head>

<body data-url="<?= base_url(); ?>">
	<div class="max-w-7xl max-w mx-auto flex lg:py-5 pb-32 px-3 pt-4 lg:gap-8">

		<?php $this->load->view('admin/_partials/side_nav.php') ?>

		<div class="flex flex-col w-full right-0 min-h-screen">

			<?php $this->load->view('admin/_partials/topbar.php') ?>
			<h1 class="text-xl font-bold hidden md:block lg:mb-3">Overview</h1>
			<div class="flex gap-3 md:gap-5 w-full flex-wrap lg:flex-nowrap rounded-2xl md:p-0 lg:p-0">
				<h1 class="text-xl font-bold md:hidden lg:mb-3">Overview</h1>
				<!-- <a href="<?= site_url('admin/post') ?>" class="w-full lg:w-1/3 rounded-2xl p-4 md:py-6 md:px-6 xl:px-8 lg:h-full bg-slate-100"> -->
				<a href="#" class="w-full lg:w-1/3 rounded-2xl p-4 md:py-6 md:px-6 xl:px-8 lg:h-full bg-slate-100">
					<div class="flex flex-nowrap items-center">
						<svg class="h-5" viewBox="0 0 23 23" xmlns="http://www.w3.org/2000/svg">
							<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
							<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
							<g id="SVGRepo_iconCarrier">
								<path class="fill-primary" fill-rule="evenodd" clip-rule="evenodd" d="M4.4 3h15.2A3.4 3.4 0 0 1 23 6.4v11.2a3.4 3.4 0 0 1-3.4 3.4H4.4A3.4 3.4 0 0 1 1 17.6V6.4A3.4 3.4 0 0 1 4.4 3ZM7 9a1 1 0 0 1 1-1h8a1 1 0 1 1 0 2H8a1 1 0 0 1-1-1Zm1 2a1 1 0 1 0 0 2h8a1 1 0 1 0 0-2H8Zm-1 4a1 1 0 0 1 1-1h4a1 1 0 1 1 0 2H8a1 1 0 0 1-1-1Z"></path>
							</g>
						</svg>
						<h4 class="pl-2 font-semibold">Total Artikel</h4>
					</div>
					<div>
						<div class="lg:pt-2.5 flex items-center lg:block">
							<p class="pl-8 text-left text-sm">
								<span class="font-bold text-3xl text-primary"><?= $article_count ?></span>
							</p>
							<p class="pl-2 lg:pl-8 text-left text-sm">
								Dari <span class="font-semibold text-primary"><?= $kategori_count ?></span> Kategori Artikel</p>
						</div>
					</div>
				</a>
				<a href="<?= site_url('admin/feedback') ?>" class="w-full lg:w-1/3 rounded-2xl p-4 md:py-6 md:px-6 xl:px-8 lg:h-full bg-slate-100">
					<div class="flex flex-nowrap items-center">
						<svg class="h-6 fill-primary" xmlns="http://www.w3.org/2000/svg" viewBox="15 15 70 70" xml:space="preserve">
							<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
							<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
							<g id="SVGRepo_iconCarrier">
								<g>
									<g>
										<path d="M79.1,56.5c-0.1-0.4-0.1-0.9,0.2-1.2C81,52.2,82,48.7,82,45c0-11.6-9.9-21-22-21c-5.2,0-10,1.8-13.8,4.7 C58.7,31.4,68,42.2,68,55c0,3.6-0.7,7.1-2.1,10.2c2-0.5,3.9-1.3,5.7-2.4c0.4-0.2,0.8-0.3,1.2-0.1l6.4,2.3c1.1,0.4,2.2-0.7,1.9-1.9 L79.1,56.5z"></path>
									</g>
									<g>
										<path d="M40,34c-12.1,0-22,9.4-22,21c0,3.7,1,7.2,2.8,10.3c0.2,0.4,0.3,0.8,0.2,1.2l-2.1,6.7 c-0.4,1.2,0.7,2.3,1.9,1.9l6.4-2.3c0.4-0.1,0.9-0.1,1.2,0.1c3.4,2,7.3,3.1,11.6,3.1c12.1,0,22-9.4,22-21C62,43.4,52.1,34,40,34z M28,59c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4c2.2,0,4,1.8,4,4C32,57.2,30.2,59,28,59z M40,59c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4 c2.2,0,4,1.8,4,4C44,57.2,42.2,59,40,59z M52,59c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4c2.2,0,4,1.8,4,4C56,57.2,54.2,59,52,59z"></path>
									</g>
								</g>
							</g>
						</svg>
						<h4 class="pl-2 font-semibold">feedback Masuk</h4>
					</div>
					<div>
						<div class="lg:pt-2.5 flex items-center lg:block">
							<p class="pl-8 text-left text-sm">
								<span class="font-bold text-3xl text-primary"><?= $feedback_count ?></span>
							</p>
							<p class="pl-2 lg:pl-8 text-left text-sm">
								Ada <span class="font-semibold text-primary"><?= $pesan_unread[0]->ada_pesan ?></span> Feedback belum dibaca</p>
						</div>
					</div>
				</a>
				<a href="<?= site_url('admin/pengurus') ?>" class="w-full lg:w-1/3 rounded-2xl p-4 md:py-6 md:px-6 xl:px-8 lg:h-full bg-slate-100">
					<div class="flex flex-nowrap items-center">
						<svg class="h-6 fill-primary" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" class="bi bi-people-fill" stroke="#000000" stroke-width="0.00016">
							<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
							<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
							<g id="SVGRepo_iconCarrier">
								<path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
								<path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"></path>
								<path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"></path>
							</g>
						</svg>
						<h4 class="pl-2 font-semibold">Total Pengurus</h4>
					</div>
					<div>
						<div class="lg:pt-2.5 flex items-center lg:block">
							<p class="pl-8 text-left text-sm">
								<span class="font-bold text-3xl text-primary"><?= $pengurus_count ?></span>
							</p>
							<p class="pl-2 lg:pl-8 text-left text-sm">Dari
								<span class="font-semibold text-primary"><?= $landing_count ?></span> Kabinet kepengurusan
							</p>
						</div>
					</div>
				</a>
			</div>

			<div class="w-full bg-slate-100 mt-5 h-auto rounded-xl px-4 pt-4 pb-2">
				<h3 class="text-lg font-bold">Grafik Kunjungan</h3>
				<div id="chart" class="w-full"></div>
			</div>

			<!-- <div class="w-full bg-slate-100 mt-5 h-auto rounded-xl p-4">
				<div class=" flex flex-nowrap justify-between items-center mb-2">
					<h3 class="text-lg font-bold">Artikel terbaru</h3>
					<a href="<?= site_url('admin/post') ?>" class="py-0.5 whitespace-nowrap px-2 text-primary bg-primary/10 rounded-lg hover:bg-primary/30 transition duration-300 ease-in-out cursor-pointer">Lihat semua <b> > </b></a>
				</div>
				<table class="table w-full">
					<thead>
						<tr class="border-b-2">
							<th class="text-left py-2">Title</th>
							<th class="text-center py-2 px-4 w-1/4 lg:w-1/6">Status</th>
							<th class="text-center py-2 px-4 w-1/4 lg:w-1/6">Action</th>
						</tr>
					</thead>
					<tbody>

						<?php foreach ($articles as $article) : ?>
							<tr class="border-b-2">
								<td>
									<div><?= $article->title ?></div>
									<div class="text-gray-500"><small><?= $article->created_at ?><small></div>
								</td>
								<?php if ($article->draft === 'true') : ?>
									<td class="text-center text-gray-500">Draft</td>
								<?php else : ?>
									<td class="text-center text-primary">Published</td>
								<?php endif ?>
								<td>
									<div class="flex flex-wrap gap-1 justify-center py-1">
										<a href="<?= site_url('article/' . $article->slug) ?>" class="bg-primary rounded-lg p-1 text-white flex items-center" target="_blank" role="button">
											<svg class="h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
												<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
												<g id="SVGRepo_iconCarrier">
													<circle cx="12" cy="12" r="3" stroke="#ffff" stroke-width="2"></circle>
													<path d="M20.188 10.9343C20.5762 11.4056 20.7703 11.6412 20.7703 12C20.7703 12.3588 20.5762 12.5944 20.188 13.0657C18.7679 14.7899 15.6357 18 12 18C8.36427 18 5.23206 14.7899 3.81197 13.0657C3.42381 12.5944 3.22973 12.3588 3.22973 12C3.22973 11.6412 3.42381 11.4056 3.81197 10.9343C5.23206 9.21014 8.36427 6 12 6C15.6357 6 18.7679 9.21014 20.188 10.9343Z" stroke="#fff" stroke-width="2"></path>
												</g>
											</svg>
										</a>
										<a href="<?= site_url('admin/post/edit/' . $article->id) ?>" class="bg-green-500 rounded-lg py-1 px-2 text-white" role="button">Edit</a>
										<a href="#" data-delete-url="<?= site_url('admin/post/delete/' . $article->id) ?>" class="rounded-lg bg-rose-500 p-1 flex items-center" role="button" onclick="deleteConfirm(this)">
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
			</div> -->
			
			<?php $this->load->view('admin/_partials/footer.php') ?>
		</div>
	</div>
	<script src="<?= base_url('public/js/apexcharts.js') ?>"></script>
	<script>
		const BASE_URL = document.body.getAttribute('data-url');

		fetch(BASE_URL + 'admin/dashboard/getDataKunjungan')
			.then(response => response.json())
			.then(data => {
				var options = {
					series: [{
						name: 'Kunjungan',
						data: data.map(item => parseInt(item.jumlah))
					}],
					chart: {
						height: 300,
						type: 'area',
						toolbar: {
							show: true,
							offsetX: 0,
							offsetY: 0,
							tools: {
								download: true,
								selection: false,
								zoom: false,
								zoomin: false,
								zoomout: false,
								pan: false,
								reset: false
							}
						},
					},
					dataLabels: {
						enabled: false
					},
					stroke: {
						curve: 'smooth'
					},
					colors: ['#0891B2'],
					fill: {
						colors: ['#0891B2'], // Warna yang ingin Anda atur
						type: 'gradient', // Jenis pengisian (solid, gradient, pattern)
					},
					xaxis: {
						type: 'datetime',
						categories: data.map(item => item.tanggal)
					},
					tooltip: {
						x: {
							show: true,
							format: 'dd/MM/yy'
						},

						custom: function({
							series,
							seriesIndex,
							dataPointIndex,
							w
						}) {
							return '<div class="bg-white border p-2 rounded shadow-md">' +
								'<span class="font-bold"> Jumlah ' + w.globals.seriesNames[seriesIndex] + ' </span><br> ' +
								'<span class="text-primary ">Ada ' + series[seriesIndex][dataPointIndex] + ' orang</span>' +
								'</div>';
						}
					},
				};

				var chart = new ApexCharts(document.querySelector("#chart"), options);
				chart.render();
			});
	</script>
</body>

</html>