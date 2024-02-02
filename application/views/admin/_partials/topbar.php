<section class="">
	<div class="flex justify-between">
		<h2 class="text-3xl font-bold"><?= $title; ?></h2>
		<div class="mb-3 md:mb-5 relative">
			<a href="<?= site_url('admin/feedback') ?> " class=" <?php echo ($this->uri->segment(2) === 'feedback') ? 'bg-primary text-white' : ''; ?> rounded-xl font-semibold flex gap-2 items-center">
				<svg class="h-10 <?php echo ($this->uri->segment(2) === 'feedback') ? 'fill-white' : 'fill-dark'; ?>" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" xml:space="preserve">
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
			</a>
			<!-- <span class="<?php echo ($pesan[0]->ada_pesan == 0) ? 'hidden' : 'absolute' ?>"></span> -->
			<span class="rounded-full bg-rose-500 text-[0.5rem] font-semibold py-0.5 px-1.5 absolute top-[-2px] left-7 text-white ring-white ring-1"><?= $pesan[0]->ada_pesan ?></span>
			<span class=" <?php echo ($pesan[0]->ada_pesan == 0) ? 'hidden' : 'absolute' ?> rounded-full bg-rose-500 py-0.5 px-1.5 top-[-1px] left-[1.85rem] text-white animate-ping h-3"></span>
		</div>
	</div>
</section>