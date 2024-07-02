<div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80 min-h-screen" aria-hidden="true">
	<div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#77eaee] to-[#5f89ff] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
</div>
<nav class="flex justify-around lg:justify-start lg:flex-col gap-1 lg:gap-4 h-fit fixed lg:sticky lg:top-4 bottom-0 p-3 lg:p-0 shadow-2xl lg:shadow-none shadow-gray-700 bg-white dark:bg-slate-700 z-50 left-0 w-screen lg:w-fit lg:mt-16 lg:bg-transparent dark:lg:bg-transparent">
	<a href="<?= site_url('admin/dashboard') ?>" class="<?php echo ($this->uri->segment(2) === 'dashboard') ? 'bg-primary text-white' : ''; ?> p-2 rounded-xl lg:px-4 font-semibold flex gap-2 items-center">
		<svg class="h-8 <?php echo ($this->uri->segment(2) === 'dashboard') ? 'fill-white' : 'fill-dark'; ?>" viewBox="-2.4 -2.4 28.80 28.80" xmlns="http://www.w3.org/2000/svg" id="dashboard" class="icon glyph">
			<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
			<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
			<g id="SVGRepo_iconCarrier">
				<rect x="2" y="2" width="9" height="11" rx="2"></rect>
				<rect x="13" y="2" width="9" height="7" rx="2"></rect>
				<rect x="2" y="15" width="9" height="7" rx="2"></rect>
				<rect x="13" y="11" width="9" height="11" rx="2"></rect>
			</g>
		</svg>
		<span class="hidden lg:block ">Overview</span>
	</a>
	<a href="<?= site_url('admin/post') ?> " class="<?php echo ($this->uri->segment(2) === 'post') ? 'bg-primary text-white' : ''; ?> p-2 rounded-xl lg:px-4 font-semibold flex gap-2 items-center">
		<svg class="h-7" viewBox="0 0 23 23" xmlns="http://www.w3.org/2000/svg">
			<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
			<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
			<g id="SVGRepo_iconCarrier">
				<path class="<?php echo ($this->uri->segment(2) === 'post') ? 'fill-white' : 'fill-dark'; ?>" fill-rule="evenodd" clip-rule="evenodd" d="M4.4 3h15.2A3.4 3.4 0 0 1 23 6.4v11.2a3.4 3.4 0 0 1-3.4 3.4H4.4A3.4 3.4 0 0 1 1 17.6V6.4A3.4 3.4 0 0 1 4.4 3ZM7 9a1 1 0 0 1 1-1h8a1 1 0 1 1 0 2H8a1 1 0 0 1-1-1Zm1 2a1 1 0 1 0 0 2h8a1 1 0 1 0 0-2H8Zm-1 4a1 1 0 0 1 1-1h4a1 1 0 1 1 0 2H8a1 1 0 0 1-1-1Z"></path>
			</g>
		</svg>
		<span class="hidden lg:block">Post</span>
	</a>
	<a href="<?= site_url('admin/manage') ?> " class="<?php echo ($this->uri->segment(2) === 'manage') ? 'bg-primary text-white' : ''; ?> py-2 px-3 rounded-xl lg:px-4 font-semibold flex gap-2 items-center">
		<svg class="h-8 <?php echo ($this->uri->segment(2) === 'manage') ? 'fill-white' : 'fill-dark'; ?>" xmlns="http://www.w3.org/2000/svg" viewBox="20 10 60 80" enable-background="new 0 0 98 98" xml:space="preserve">
			<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
			<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
			<g id="SVGRepo_iconCarrier">
				<g>
					<path d="M77.9,47.2l-3.7-1.7c-0.5-0.3-1.2-0.3-1.7,0l-11,5.3c1.8-0.6,3.7-0.9,5.6-0.9c3.1,0,6,0.8,8.6,2.2l2.1-1 C79.5,50.2,79.5,48,77.9,47.2z"></path>
					<path d="M20.2,36.9L47,49.6c1.2,0.6,2.7,0.6,3.9,0l26.9-12.7c1.6-0.8,1.6-2.9,0-3.7L50.9,20.5 c-1.2-0.6-2.7-0.6-3.9,0L20.2,33.3C18.5,34,18.5,36.2,20.2,36.9z"></path>
					<path d="M20.2,50.9L47,63.7c0.7,0.4,1.5,0.5,2.3,0.4c1-4.8,3.9-8.8,7.9-11.4l-6.2,3c-1.2,0.6-2.7,0.6-3.9,0 L25.6,45.5c-0.5-0.3-1.2-0.3-1.7,0l-3.7,1.7C18.5,48,18.5,50.1,20.2,50.9z"></path>
					<path d="M49,70.2c-0.7,0-1.3-0.2-1.9-0.4L25.5,59.5c-0.5-0.3-1.2-0.3-1.7,0l-3.6,1.7c-1.6,0.8-1.6,2.9,0,3.7 L47,77.7c1.2,0.6,2.7,0.6,3.9,0l0.6-0.3C50.2,75.2,49.3,72.8,49,70.2z"></path>
				</g>
				<path d="M67.2,56.2c-6.5,0-11.9,5.3-11.9,11.9S60.6,80,67.2,80s11.9-5.3,11.9-11.9S73.7,56.2,67.2,56.2z M76.6,66.9 h-3.1c-0.1-2.8-0.8-5.3-1.7-7.1C74.4,61.3,76.2,63.9,76.6,66.9z M66,59.1v7.8h-2.7C63.5,63.2,64.6,60.3,66,59.1z M66,69.3v7.8 c-1.3-1.1-2.5-4.1-2.7-7.8H66z M68.4,77.1v-7.8h2.7C70.9,73,69.7,76,68.4,77.1z M68.4,66.9v-7.8c1.3,1.1,2.5,4.1,2.7,7.8H68.4z M62.6,59.8c-1,1.9-1.5,4.3-1.7,7.1h-3.1C58.1,63.9,60,61.3,62.6,59.8z M57.8,69.3h3.1c0.1,2.8,0.8,5.3,1.7,7.1 C60,75,58.1,72.4,57.8,69.3z M71.8,76.4c1-1.9,1.5-4.3,1.7-7.1h3.1C76.2,72.4,74.4,75,71.8,76.4z"></path>
			</g>
		</svg>
		<span class="hidden lg:block">Manage</span>
	</a>
	<a href="<?= site_url('admin/service') ?> " class="<?php echo ($this->uri->segment(2) === 'service') ? 'bg-primary text-white' : ''; ?> p-2 rounded-xl lg:px-4 font-semibold flex gap-2 items-center">
		<svg class="h-7 <?php echo ($this->uri->segment(2) === 'service') ? 'fill-white' : 'fill-dark'; ?>" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#000000">
			<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
			<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
			<g id="SVGRepo_iconCarrier">
				<g>
					<path fill="none" d="M0 0h24v24H0z"></path>
					<path d="M14.121 10.48a1 1 0 0 0-1.414 0l-.707.706a2 2 0 1 1-2.828-2.828l5.63-5.632a6.5 6.5 0 0 1 6.377 10.568l-2.108 2.135-4.95-4.95zM3.161 4.468a6.503 6.503 0 0 1 8.009-.938L7.757 6.944a4 4 0 0 0 5.513 5.794l.144-.137 4.243 4.242-4.243 4.243a2 2 0 0 1-2.828 0L3.16 13.66a6.5 6.5 0 0 1 0-9.192z"></path>
				</g>
			</g>
		</svg>
		<span class="hidden lg:block">Layanan</span>
	</a>
	<a href="<?= site_url('admin/pengurus') ?> " class="<?php echo ($this->uri->segment(2) === 'pengurus') ? 'bg-primary text-white' : ''; ?> p-2 rounded-xl lg:px-4 font-semibold flex gap-2 items-center">
		<svg class="h-7 <?php echo ($this->uri->segment(2) === 'pengurus') ? 'fill-white' : 'fill-dark'; ?>" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" class="bi bi-people-fill" stroke="#000000" stroke-width="0.00016">
			<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
			<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
			<g id="SVGRepo_iconCarrier">
				<path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
				<path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"></path>
				<path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"></path>
			</g>
		</svg>
		<span class="hidden lg:block">Pengurus</span>
	</a>
	<a href="<?= site_url('admin/setting') ?> " class=" <?php echo ($this->uri->segment(2) === 'setting') ? 'bg-primary text-white' : ''; ?> p-2 rounded-xl lg:px-4 font-semibold flex gap-1 items-center">
		<svg class="h-7" viewBox="1 2 23.00 20.00" fill="none" xmlns="http://www.w3.org/2000/svg">
			<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
			<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.4800000000000001"></g>
			<g id="SVGRepo_iconCarrier">
				<path d="M20.1 9.2214C18.29 9.2214 17.55 7.9414 18.45 6.3714C18.97 5.4614 18.66 4.3014 17.75 3.7814L16.02 2.7914C15.23 2.3214 14.21 2.6014 13.74 3.3914L13.63 3.5814C12.73 5.1514 11.25 5.1514 10.34 3.5814L10.23 3.3914C9.78 2.6014 8.76 2.3214 7.97 2.7914L6.24 3.7814C5.33 4.3014 5.02 5.4714 5.54 6.3814C6.45 7.9414 5.71 9.2214 3.9 9.2214C2.86 9.2214 2 10.0714 2 11.1214V12.8814C2 13.9214 2.85 14.7814 3.9 14.7814C5.71 14.7814 6.45 16.0614 5.54 17.6314C5.02 18.5414 5.33 19.7014 6.24 20.2214L7.97 21.2114C8.76 21.6814 9.78 21.4014 10.25 20.6114L10.36 20.4214C11.26 18.8514 12.74 18.8514 13.65 20.4214L13.76 20.6114C14.23 21.4014 15.25 21.6814 16.04 21.2114L17.77 20.2214C18.68 19.7014 18.99 18.5314 18.47 17.6314C17.56 16.0614 18.3 14.7814 20.11 14.7814C21.15 14.7814 22.01 13.9314 22.01 12.8814V11.1214C22 10.0814 21.15 9.2214 20.1 9.2214ZM12 15.2514C10.21 15.2514 8.75 13.7914 8.75 12.0014C8.75 10.2114 10.21 8.7514 12 8.7514C13.79 8.7514 15.25 10.2114 15.25 12.0014C15.25 13.7914 13.79 15.2514 12 15.2514Z" class="<?php echo ($this->uri->segment(2) === 'setting') ? 'fill-white' : 'fill-dark'; ?>"></path>
			</g>
		</svg>
		<span class="hidden lg:block">Settings</span>
	</a>
	<a href="<?= site_url('auth/logout') ?> " class=" <?php echo ($this->uri->segment(2) === 'logout') ? 'bg-primary py-3 text-white' : 'py-2'; ?> rounded-xl px-4 font-semibold hidden lg:flex gap-2 items-center border-2 hover:bg-primary hover:text-white group transition duration-300 ease-in-out cursor-pointer">
		<svg class="h-7" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
			<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
			<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
			<g id="SVGRepo_iconCarrier">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M16.125 12C16.125 11.5858 15.7892 11.25 15.375 11.25L4.40244 11.25L6.36309 9.56944C6.67759 9.29988 6.71401 8.8264 6.44444 8.51191C6.17488 8.19741 5.7014 8.16099 5.38691 8.43056L1.88691 11.4306C1.72067 11.573 1.625 11.7811 1.625 12C1.625 12.2189 1.72067 12.427 1.88691 12.5694L5.38691 15.5694C5.7014 15.839 6.17488 15.8026 6.44444 15.4881C6.71401 15.1736 6.67759 14.7001 6.36309 14.4306L4.40244 12.75L15.375 12.75C15.7892 12.75 16.125 12.4142 16.125 12Z" class="fill-dark group-hover:fill-white"></path>
				<path d="M9.375 8C9.375 8.70219 9.375 9.05329 9.54351 9.3055C9.61648 9.41471 9.71025 9.50848 9.81946 9.58145C10.0717 9.74996 10.4228 9.74996 11.125 9.74996L15.375 9.74996C16.6176 9.74996 17.625 10.7573 17.625 12C17.625 13.2426 16.6176 14.25 15.375 14.25L11.125 14.25C10.4228 14.25 10.0716 14.25 9.8194 14.4185C9.71023 14.4915 9.6165 14.5852 9.54355 14.6944C9.375 14.9466 9.375 15.2977 9.375 16C9.375 18.8284 9.375 20.2426 10.2537 21.1213C11.1324 22 12.5464 22 15.3748 22L16.3748 22C19.2032 22 20.6174 22 21.4961 21.1213C22.3748 20.2426 22.3748 18.8284 22.3748 16L22.3748 8C22.3748 5.17158 22.3748 3.75736 21.4961 2.87868C20.6174 2 19.2032 2 16.3748 2L15.3748 2C12.5464 2 11.1324 2 10.2537 2.87868C9.375 3.75736 9.375 5.17157 9.375 8Z" class="fill-dark group-hover:fill-white"></path>
			</g>
		</svg>
		<span class="hidden lg:block">Logout</span>
	</a>
</nav>