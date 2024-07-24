<!-- Header Start -->
<header class="absolute top-0 left-0 z-10 flex w-full items-center bg-transparent">
	<div class="container">
		<div class="relative flex items-center justify-between">
			<div class="px-4">
				<a href="<?= base_url() ?>" class="block py-4 text-lg font-bold text-primary"><?= $identitas[0]->nama_website ?></a>
			</div>
			<div class="flex items-center px-4">
				<button id="hamburger" name="hamburger" type="button" class="absolute right-4 block lg:hidden">
					<span class="hamburger-line origin-top-left transition duration-300 ease-in-out"></span>
					<span class="hamburger-line transition duration-300 ease-in-out"></span>
					<span class="hamburger-line origin-bottom-left transition duration-300 ease-in-out"></span>
				</button>
				<nav id="nav-menu" class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg bg-white py-5 shadow-lg dark:bg-dark dark:shadow-slate-500 lg:static lg:block lg:max-w-full lg:rounded-none lg:bg-transparent lg:shadow-none lg:dark:bg-transparent">
					<ul class="block lg:flex">
						<li class="group">
							<a href="<?= base_url() ?>" class="mx-8 flex py-2 text-base font-medium text-dark group-hover:text-primary dark:text-white">Home</a>
						</li>
						<div id="dropdown" class="relative group">
							<button id="dropdownButton" class="flex flex-row items-center w-full mx-8 py-2 text-base font-medium text-dark group-hover:text-primary dark:text-white">
								<span>Profile</span>
								<svg id="dropdownIcon" fill="currentColor" viewBox="0 0 20 20" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1 rotate-0">
									<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
								</svg>
							</button>
							<div id="dropdownContent" class="hidden absolute right-0 lg:left-2 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-52">
								<div class="px-2 py-2 bg-white rounded-md shadow dark:bg-gray-800">
									<a class="block px-4 py-2 mt-2 text-sm font-medium bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-300 dark:focus:bg-gray-300 dark:focus:text-white dark:hover:text-primary dark:text-gray-200 md:mt-0 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline hover:text-primary" href="<?php echo ($this->uri->segment(1) != 'about' && $this->uri->segment(1) != 'booklet' && $this->uri->segment(1) != 'arsip' && $this->uri->segment(1) != 'kementerian' && $this->uri->segment(1) != 'kemenkoan' && $this->uri->segment(1) != 'ketum')  ? base_url('about/' . $this->uri->segment(1)) : base_url('about'); ?>">Profile Kabinet</a>
									<a class="block px-4 py-2 mt-2 text-sm font-medium bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-300 dark:focus:bg-gray-300 dark:focus:text-white dark:hover:text-primary dark:text-gray-200 md:mt-0 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline hover:text-primary" href="<?= base_url('arsip') ?>">Sejarah HIMA-TE UNWIKU</a>
								</div>
							</div>
						</div>
						<li class="group">
							<a href="<?= base_url('#kajian') ?>" class="mx-8 flex py-2 text-base font-medium text-dark group-hover:text-primary dark:text-white">Study</a>
						</li>
						<li class="group">
							<a href="<?= base_url('#layanan') ?>" class="mx-8 flex py-2 text-base font-medium text-dark group-hover:text-primary dark:text-white">Services</a>
						</li>
						<li class="group">
							<a href="<?= base_url('#blog') ?>" class="mx-8 flex py-2 text-base font-medium text-dark group-hover:text-primary dark:text-white">Article</a>
						</li>
						<li class="group">
							<a href="<?= base_url('#contact') ?>" class="mx-8 flex py-2 text-base font-medium text-dark group-hover:text-primary dark:text-white">Contact</a>
						</li>
						<li class="mt-3 flex items-center pl-8 lg:mt-0">
							<div class="flex">
								<span class="mr-2 text-sm text-slate-500">light</span>
								<input type="checkbox" class="hidden" id="dark-toggle" />
								<label for="dark-toggle">
									<div class="flex h-5 w-9 cursor-pointer items-center rounded-full bg-slate-500 p-1">
										<div class="toggle-circle h-4 w-4 rounded-full bg-white transition duration-300 ease-in-out"></div>
									</div>
								</label>
								<span class="ml-2 text-sm text-slate-500">dark</span>
							</div>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</header>