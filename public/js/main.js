// Navbar Fixed
window.onscroll = function () {
    const header = document.querySelector('header');
    const fixedNav = header.offsetTop;
    const toTop = document.querySelector('#to-top');
  
    if (window.pageYOffset > fixedNav) {
      header.classList.add('navbar-fixed');
      toTop.classList.remove('hidden');
      toTop.classList.add('flex');
    } else {
      header.classList.remove('navbar-fixed');
      toTop.classList.remove('flex');
      toTop.classList.add('hidden');
    }
  };

  //Dropdown
  const dropdown = document.querySelector('#dropdown');
  const dropdownIcon = document.getElementById('dropdownIcon');
  const dropdownContent = document.getElementById('dropdownContent');

  let open = false;

  dropdown.addEventListener('click', function () {
    dropdownContent.classList.toggle('hidden');
    open = !open;
    updateDropdown();
  });

  dropdown.addEventListener('mouseenter', function () {
    dropdownContent.classList.remove('hidden');
    open = !open;
    updateDropdown();
  });

  window.addEventListener('click', function (e) {
    if (!dropdown.contains(e.target)) {
      dropdownContent.classList.add('hidden');
      open = false;
      updateDropdown();
    }
  });

  function updateDropdown() {
    dropdownIcon.classList.toggle('rotate-0', !open);
    dropdownIcon.classList.toggle('rotate-180', open);
  }
  
  // Hamburger
  const hamburger = document.querySelector('#hamburger');
  const navMenu = document.querySelector('#nav-menu');
  
  hamburger.addEventListener('click', function () {
    hamburger.classList.toggle('hamburger-active');
    navMenu.classList.toggle('hidden');
  });

  
  // Klik di luar hamburger
  window.addEventListener('click', function (e) {
    if (e.target != hamburger && !dropdown.contains(e.target)) {
      hamburger.classList.remove('hamburger-active');
      navMenu.classList.add('hidden');
    }
  });
  
  // Darkmode toggle
  const darkToggle = document.querySelector('#dark-toggle');
  const html = document.querySelector('html');
  
  darkToggle.addEventListener('click', function () {
    if (darkToggle.checked) {
      html.classList.add('dark');
      localStorage.theme = 'dark';
    } else {
      html.classList.remove('dark');
      localStorage.theme = 'light';
    }
  });
  
  // pindahkan posisi toggle sesuai mode
  if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    darkToggle.checked = true;
  } else {
    darkToggle.checked = false;
  }

  const colorList = ['#94a3b8', '#f43f5e', '#0ea5e9', '#a3e635', '#10b981', '#818cf8', '#d946ef'];

  function getRandomColor() {
    const randomIndex = Math.floor(Math.random() * colorList.length);
    return colorList[randomIndex];
  }

  function batasiKarakter(teks, batas) {
    if (teks.length > batas) {
      return teks.slice(0, batas) + "...";
    } else {
      return teks;
    }
  }

  document.addEventListener("DOMContentLoaded", function() {
    const url = "http://localhost/news/";
    const assetUrl = url + "asset/foto_berita/";

    fetch(url + 'async/kajian')
      .then(response => response.json())
      .then(data => {
        // console.log(data);

        // Data JSON yang ingin ditampilkan
        var jsonData = {data};

        const cardsContainer = document.getElementById('cards-kajian-container');

        jsonData.data.forEach(item => {
          const card = document.createElement('div');
          card.classList.add('w-full', 'px-2', 'md:w-1/2', 'md:px-4');

          card.innerHTML = `
            <div class="mb-10 overflow-hidden rounded-xl bg-white shadow-lg dark:bg-slate-900">
              <img src="${assetUrl + item.gambar}" alt="${item.keterangan_gambar}" class="object-cover shadow-sm w-full h-auto md:h-72" />
              <div class="py-8 px-6">
                <h3>
                  <a href="${url + item.judul_seo}" target="_blank" class="mb-2 block truncate text-xl font-semibold text-dark hover:text-primary dark:text-white">${item.judul}</a>
                </h3>
                <div class="w-full flex items-center gap-2">
                  <svg class="w-4 h-4 text-gray-400 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M10 6v4l3.276 3.276M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                  </svg>
                  <p class="text-sm text-gray-400">${item.hari}, ${item.tanggal}</p>
                </div>
                <div class="mb-4 mt-2 text-base font-medium text-secondary">${batasiKarakter(item.isi_berita, 90)}</div>
                <a href="${url + item.judul_seo}" target="_blank" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-primary rounded-lg focus:ring-4 focus:outline-none focus:ring-primary/30 dark:focus:ring-primary transition duration-500 hover:opacity-80 hover:shadow-lg">Baca Selengkapnya
                  <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                  </svg>
                </a>
              </div>
            </div>
          `;
          // Tambahkan card ke dalam container
          cardsContainer?.appendChild(card);
        });
      });

    fetch(url + 'async/berita')
      .then(response => response.json())
      .then(data => {
        // console.log(data);
        
        var jsonData = {data};

        const cardsContainer = document.getElementById('cards-blog-container');

        jsonData.data.forEach(item => {
          const card = document.createElement('div');
          card.classList.add('flex', 'flex-col', 'items-start', 'col-span-12', 'overflow-hidden', 'shadow-sm', 'rounded-xl', 'md:col-span-6', 'lg:col-span-4');

          card.innerHTML =`
            <a href="${url + item.judul_seo}" class="block transition duration-200 ease-out transform hover:scale-110 w-full">
              <img class="object-cover object-center shadow-sm w-full h-60" src="${assetUrl + item.gambar}" alt="Gambar ${item.judul}">
            </a>
            <div class="h-full relative flex flex-col items-start px-6 bg-white border border-t-0 border-gray-200 py-7 rounded-b-2xl w-full">
              <div style="background-color: ${getRandomColor()};" class="absolute top-0 -mt-3 flex items-center px-3 py-1.5 leading-none w-auto rounded-full text-xs font-medium uppercase text-white">
                <span>${item.nama_kategori}</span>
              </div>
              <h2 class="text-base font-bold sm:text-lg md:text-xl hover:text-primary">
                <a href="${url + item.judul_seo}">${batasiKarakter(item.judul, 50)}</a>
              </h2>
              <div class="mt-2 text-sm text-gray-500">${batasiKarakter(item.isi_berita, 120)}</div>
            </div>
          `;
          // Tambahkan card ke dalam container
          cardsContainer?.appendChild(card);
        })
      })
  })
