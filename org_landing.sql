-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 03, 2024 at 05:18 PM
-- Server version: 8.0.30
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `org_landing`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` bigint NOT NULL,
  `id_landing` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `visi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `misi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `filosofi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `booklet` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `img_cover` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `img_visi` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'visi.webp',
  `img_misi` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'misi.webp'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `id_landing`, `visi`, `misi`, `filosofi`, `booklet`, `img_cover`, `img_visi`, `img_misi`) VALUES
(11, '65916f11ca88f6.76787631', 'BEM Unwiku sebagai harapan bersama dalam <b>berkarya , bersinergi</b> dan <b>berkolaborasi</b> untuk menebar kebermanfaatan bagi Unwiku dan Indonesia.', 'Mewujudkan nuansa organisasi yang harmonis dengan membangun semangat kolaborasi antar unsur internal dalam BEM Unwiku.\r\nMengoptimalkan BEM Unwiku sebagairumah aspirasi, pelayanan, serta pengembangan mahasiswa yang inovatif, konstruktif dan progresif.\r\nMemperkuat pergerakan dan pengabdian melalui diskusi dan pengawalan isu yang faktual.\r\nMengoptimalisasi pewadahan dan penyaluran bakat mahasiswa Unwiku untuk memberikan kebermanfaatan.\r\nMemperkuat citra lembaga yang atraktif dan interaktif melalui optimalisasi media serta penguatan relasi kerja BEM Unwiku.', 'Muara berarti suatu tempat untuk berlabuh. Dengan harapan BEM Unwiku sebagai tempat berkarya, belajar, dan memperkaya relasi untuk mahasiswa Unwiku di lembah bumi bandhajoenda sehingga tempat berlabuh ini penuh warna untuk melakukan perubahan demi menyongsong Indonesia emas 2045.\r\n\r\nPerubahan artinya disini BEM Unwiku bersifat dinamis, selalu bergerak kedepan melakukan suatu perubahan. Perubahan meliputi, perubahan berfikir, berkarya dan berdaya saing dengan mahasiswa pada umumnya', 'Booklet-Muara_Perubahan.pdf', 'Muara_Perubahan-cover.webp', 'visi.webp', 'misi.webp'),
(12, '659ae8b6052810.72512880', 'Mewujudkan <b> harapan </b> untuk menyambut kebahagiaan dengan <b> cinta </b> yang sesungguhnya melalui <b> kebermanfaatan </b> dan <b> kebaikan </b> untuk Wijayakusuma dan Indonesia.', 'Optimalisasi sumber daya manusia guna mewujudkan birokrasi BEM Unwiku menuju good governance sebagai lembaga tinggi mahasiswa di lingkungan Unwiku.\r\nMendayaguna peran aspirasi melalui advokasi dan pelayanan yang responsif untuk mewujudkan kesejahteraan mahasiswa.\r\nMenebar kebermanfaatan dan kebaikan melalui peran pengabdian dan pemberdayaan secara berkesinambungan berdasarkan Tri Dharma Perguruan Tinggi.\r\nMengaksentuasikan pergerakan strategis melalui gerakan yang sistematis sebagai upaya implementasi peran mahasiswa dikalangan masyarakat.\r\nSinergitas lembaga mahasiswa sebagai upaya mewujudkan cinta yang sesungguhnya melalui harmonisasi untuk Wijayakusuma dan Indonesia.', 'Kabinet Nyala Asa merupakan manifestasi api semangat untuk mewujdukan harapan yang dirangkum dalam bingkai Nyala Asa dengan filosofinya yakni: Nyala, sebagai simbol api yang senantiasa menyalakan cinta dengan harapan terwujudnya harapan mahasiswa Universitas Wijayakusuma Purwokerto. Asa, yang berarti harapan dengan makna seiring berjalannya waktu harapan itu akan terwujud melalui cinta yang sesungguhnya yang dirangkum dan dikemas dalam perjalanan yang beragam dan bermakna.\r\n\r\nKabinet Nyala Asa ini menjadikan BEM Unwiku yang senantiasa membarakan semangatnya dengan menghidupkan langkah bersama-sama untuk menggoreskan cerita dikemudian hari.', 'Booklet-Nyala_Asa.pdf', 'Nyala_Asa-cover.jpg', 'visi.webp', 'misi.webp');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` bigint NOT NULL,
  `id_kategori` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `title` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `slug` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `gambar` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `keterangan_gambar` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `draft` enum('true','false') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'true',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `id_kategori`, `title`, `slug`, `content`, `gambar`, `keterangan_gambar`, `draft`, `created_at`) VALUES
(7, '12', 'Sinergitas Unwiku Peduli Banjir Cilacap', 'sinergitas-unwiku-peduli-banjir-cilacap', '<p>Gabungan Organisasi Mahasiswa (ormawa) Universitas Wijayakusuma Purwokerto yang tergabung dalam Sinergitas Unwiku Peduli bersama Dompet Duafa melakukan pembagian bantuan sembako kepada masyarakat terdampak banjir di sekitar Desa Gentasari Kecamatan Kroya Kabupaten Cilacap Minggu 6 November 2022. Bantuan paket sembako yang terdiri dari 3 kg beras, minyak 1 liter, mie instan 3 pcs, deterjen, gula 1 kg, dan lain sebagainya, senilai&nbsp;Rp 7.861.100 merupakan hasil donasi para mahasiswa dan donatur yang dikumpulkan melalui open donasi.</p><p>Faizal Adi Purnomo selaku Menteri Sosial dan Pengabdian kepada Masyarakat (SPM) BEM UNWIKU sebagai inisiator kegiatan ini mengatakan banjir yang menimpa Desa Gentasari khususnya Dusun Karag&nbsp;warga yang terdampak ada sekitar 123 rumah dengan ketinggian air antara 50 hingga 75 cm.&nbsp;</p><blockquote>\"Kondisi itu menggugah kepedulian kami Sinergitas Unwiku peduli untuk menyerahkan bantuan,\" katanya.</blockquote><p>Bantuan merupakan hasil&nbsp;penggalangan dana melalui open donasi secara online dan turun dijalan secara langsung ke titik-titik jalan center di Purwokerto yang telah dilakukan dari 10-17 Oktober 2022.&nbsp;</p><blockquote>\"Aksi ini merupakan aksi kepedulian kita selaku sinergitas Unwiku Peduli yang bekerja sama dengan Dompet Dhuafa untuk menggalang dana bagi&nbsp;saudara saudara kita yang sedang terkena musibah di Gentansari. Bagaimanapun juga, kita merasa empati kalau ada saudara kita yang terkena musibah,\" tambahnya.</blockquote><p>Presiden BEM Unwiku Andi Sustiawan mengapresiasi Sinergitas Unwiku Peduli yang sudah melakukan aksi. Menurutnya kegiatan tersebut merupakan wujud implementasi dari Tri Darma Perguruan Tinggi yakni Pengabdian kepada Masyarakat.</p><blockquote>\"Maka sudah selayaknya mahasiswa harus sadar hal itu, bukan hanya sebatas belajar di kampus tetapi mahasiswa harus peka terhadap kondisi sosial yang ada di masyarakat dan bergerak melakukan aksi sebagai bentuk rasa empati bagi masyarakat yang terdampak bencana alam,\" tegasnya.</blockquote><p>Andi Sustiawan berharap Ormawa Sinergitas Unwiku Peduli di Universitas Wijayakusuma Purwokerto bisa menjadi pioner untuk aksi kemanusiaan, karena aksi tersebut mencerminkan betapa pentingnya peran mahasiswa membangun peradaban yang berkemajuan dilihat dari kesolidan aksi kemanusiaan secara gotong royong.&nbsp;</p><p>Salah satu pengungsi Sumi mengaku senang mendapat perhatian dan bantuan dari para mahasiswa Unwiku.</p><blockquote>\"Alhamdulillah seneng ada yang membantu, soalnya dari awal banjir itu kami kesusahan buat beli bahan pokok, mau ke warung keterbatasan transportasi juga. Terimakasih banyak mahasiswa Unwiku dan dompet dhuafa atas bantuannya, semoga para donatur mendapat berkah dan balasan kebaikan,\" katanya</blockquote><p><br></p>', 'asdasd.jpg', 'Unwiku Peduli Bersama Dompet Duafa Bantu Korban Banjir Gentasari Kroya Cilacap', 'false', '2022-11-05 22:57:17'),
(8, '1', 'Lagi Rame tentang G20 nih, apa sih G20?', 'lagi-rame-tentang-g20-nih-apa-sih-g20', '<h2>Latar Belakang G20</h2><p>Berdiri pada tahun 1999, G20 lahir sebagai respons atas krisis ekonomi dunia pada tahun 1997-1998. Tujuannya adalah memastikan dunia keluar dari krisis dan menciptakan pertumbuhan ekonomi global yang kuat dan berkesinambungan. Awalnya, G20 merupakan pertemuan Menteri Keuangan dan Gubernur Bank Sentral, dan kini telah berkembang dengan pembahasan di berbagai bidang pembangunan. Sejak 2008, G20 juga mulai menghadirkan Kepala Negara dalam pertemuan KTT.</p><p>Sejak awal dibentuk G20 telah menghasilkan beberapa luaran:</p><ol><li>Penanganan krisis keuangan global 2008.</li><li>Kebijakan pajak.&nbsp;</li><li>Kontribusi dalam penanganan pandemi Covid-19.&nbsp;</li><li>Gerakan Paris Agreement.&nbsp;</li><li>Kontribusi terhadap SDGs 2030, dsb.&nbsp;</li></ol><p><br></p><p>Kini, dunia kembali berada pada masa krisis multidimensional akibat pandemi COVID-19. G20 sebagai kumpulan ekonomi utama dunia, yang memiliki kekuatan politik dan ekonomi, memiliki kapasitas untuk mendorong pemulihan.</p><h2>Apa Itu G20?&nbsp;</h2><p>G20 atau&nbsp;Group of Twenty&nbsp;merupakan forum utama kerja sama ekonomi internasional negara-negara perekonomian besar di dunia.&nbsp;</p><p>G20 merepresentasikan 60% populasi bumi, 75% perdagangan, dan 80% PDB (Produk Domestik Bruto) global.&nbsp;</p><p>G20 punya dua jalur pembahasan yakni&nbsp;Finance Track&nbsp;dan&nbsp;Sherpa Track.&nbsp;Finance Track&nbsp;membahas ekonomi dan keuangan,&nbsp;sementara&nbsp;Sherpa Track&nbsp;fokus di isu yang lebih luas: iklim, pembangunan, perdagangan, energi, antikorupsi, dan geopolitik.&nbsp;</p><p>Indonesia sedang diperhatikan dunia karena jadi tuan rumah Konferensi Tingkat Tinggi (KTT) G20 pada 15-16 November 2022 di Kabupaten Badung, Provinsi Bali.</p><h3>Ada forum dialog apa saja di G20?</h3><h3><img src=\"https://lh5.googleusercontent.com/8QNp7--hxzRB67cw-vz0NN9VAa0VWlgW2Twno0iWbHOMmjv3q-E3qc33wmdO4QWUPEObPPMOcFJqWscF8VHYuzfC5dhPl1Dcq_Z5XdiFfvlXPwqcrH0Kie7P7ONfiTUD_FlfnHSLdOBgDFVHqWpvhzZ-ghXW-OYk4Ibdit4Mt66ZL-QdOm56WHHfbl5ekg\" height=\"267\" width=\"216\"></h3><h3>Siapa saja Anggota G20?</h3><h2><span style=\"background-color: transparent;\"><img src=\"https://lh3.googleusercontent.com/pgcZE5j7UtY31mTYg31XcMPeSyXajMZ_x8JJyWHBn6OI17JgHZpCkj2m43oKpsp3Pi-7QrJxjZjRL4uqlMaCI7C7z5Okw30lO3ve9HX_Eq6tMddjYTHs8aGg_OeMTHi1BrVu2f3AxDELIS2kUT_KFLDv6mfLKdgHNKl-gTZJgrewWIRxJh1p7tLctaN63w\" height=\"202\" width=\"216\">Apa Hasil dari KTT G20 2022?&nbsp;</span></h2><p>Untuk itu, sebagai Presidensi G20, Indonesia mengusung semangat pulih bersama dengan tema “Recover Together, Recover Stronger\". Tema ini diangkat oleh Indonesia, menimbang dunia yang masih dalam tekanan akibat pandemi COVID-19, memerlukan suatu upaya bersama dan inklusif, dalam mencari jalan keluar atau solusi pemulihan ekonomi dunia yang dapat dituangkan dalam kesepakatan dan kesepahaman bersama yang disebut \"Leaders\' Declaration atau Komunike\".</p><p>Untuk mencapai target tersebut, Presidensi Indonesia fokus pada tiga sektor prioritas yang dinilai menjadi kunci bagi pemulihan yang kuat dan berkelanjutan, yaitu:&nbsp;</p><ol><li>Penguatan Arsitektur Kesehatan Global (Global Health Architecture). Berkaca dari pandemi yang saat ini masih berlangsung, arsitektur kesehatan global akan diperkuat. Tidak hanya untuk menanggulangi pandemi saat ini, namun juga untuk mempersiapkan dunia agar dapat memiliki daya tanggap dan kapasitas yang lebih baik dalam menghadapi krisis kesehatan lain ke depannya.</li><li>Transformasi Digital (Digital Transformation). Transformasi digital merupakan salah satu solusi utama dalam menggerakkan perekonomian di kala pandemi, dan telah menjadi salah satu sumber pertumbuhan ekonomi yang baru. Untuk itu, Presidensi Indonesia akan berfokus kepada peningkatan kemampuan digital (digital skills) dan literasi digital (digital literacy) guna memastikan transformasi digital yang inklusif dan dinikmati seluruh negara.​</li><li>Transisi Energi (Sustainable Energy Transition).&nbsp;Guna memastikan masa depan yang berkelanjutan dan hijau dan menangani perubahan iklim secara nyata, Presidensi Indonesia mendorong transisi energi menuju energi baru dan terbarukan dengan mengedepankan keamanan energi, aksesibilitas dan keterjangkauan.</li></ol><p><br></p><h2>Apa Pentingnya untuk Indonesia?</h2><p>Presidensi Indonesia di 2022 hanya terjadi satu kali setiap generasi (+20 tahun sekali). Indonesia adalah satunya negara ASEAN yang jadi anggota G20.&nbsp;</p><ul><li>Presidensi G20 ditengah pandemi jadi persepsi baik atas resiliensi Indonesia terhadap krisis.&nbsp;</li><li>Bentuk pengakuan status Indonesia sebagai salah satu negara dengan ekonomi terbesar di dunia, juga jadi wakil negara berkembang.&nbsp;</li><li>Mengorkestrasi agenda pembahasan G20.&nbsp;</li><li>Menunjukkan kepemimpinan Indonesia dikancah internasional.</li><li>Membuat Indonesia jadi fokus dunia, khususnya bagi pelaku ekonomi &amp; keuangan.&nbsp;</li><li>Jadi sarana untuk memperkenalkan pariwisata dan produk unggulan tanah air.</li></ul><p><br></p><h2>Siapa saja yang Hadir di G20?</h2><p>Berlandaskan prinsip inklusivitas, Presidensi Indonesia turut mengundang negara-negara tamu dan organisasi internasional (invitees) untuk turut berpartisipasi. Dalam berbagai kesempatan, Presiden Joko Widodo menekankan bahwa inklusivitas ini adalah prioritas kepemimpinan Indonesia di G20, untuk mewujudkan “leave no one behind\".&nbsp;</p><p>Visinya adalah Presidensi G20 yang bermanfaat bagi semua pihak, termasuk negara berkembang, negara pulau-pulau kecil, serta kelompok rentan, dan tidak hanya demi kepentingan anggota G20 itu sendiri.</p><p>Untuk itu, Indonesia pun memberikan perhatian besar kepada negara berkembang di Asia, Afrika, Amerika Latin, termasuk negara-negara kepulauan kecil di Pasifik dan Karibia. Selain refleksi spirit of inclusiveness, hal ini juga memberikan representasi yang lebih luas kepada G20.</p><p>Terdapat 9 (sembilan) negara undangan pada Presidensi G20 Indonesia, yaitu Spanyol, Ketua Uni Afrika, Ketua the African Union Development Agency-NEPAD (AU-NEPAD), Ketua Association of Southeast Asian Nations (ASEAN), Belanda, Singapura, Persatuan Emirat Arab, Ketua The Caribbean Community (CARICOM), dan Ketua Pacific Island Forum (PIF).</p><p>Selain itu, terdapat juga 10 organisasi internasional undangan, yaitu Asian Development Bank (ADB), Financial Stability Board (FSB), International Labour Organization (ILO), International Monetary Fund (IMF), Islamic Development Bank (IsDB), Organization for Economic Cooperation and Development (OECD), World Bank, World Health Organization (WHO), World Trade Organization (WTO), dan United Nations (UN).</p><p><br></p><h2>Pesan untuk Mahasiswa</h2><p>Di salah satu forum KTT G20, Mendikbudristek Nadiem Makarim menjadi moderator pada sesi dialog Elon Musk dengan mahasiswa bertajuk \"Intergenerational Dialogue for Our Emerging Future\".</p><p>Elon Musk membagi pandangannya tentang pekerjaan yang&nbsp;banyak diminati di masa depan.&nbsp;</p><p>\"Artificial Intelligence dan Energi Berkelanjutan \", ungkap CEO SpaceX, Tesla, dan Twitter itu.&nbsp;</p><p>\"Miliki rasa keingintahuan yang besar akan banyak hal di dunia ini. Rasa keingintahuan yang besar adalah karakter yang paling penting untuk dimiliki seseorangseseorang, \" pesannya kepada generasi muda. Mas Menteri Nadiem pun sepakat.&nbsp;</p><p>&nbsp;</p><p>Sumber :</p><p>G20 Presidensi Indonesia. (2022). Tentang G20. Diakses pada 14 November 2022, dari&nbsp;<a href=\"https://www.g20.org/idn/about-the-g20-2/\" target=\"_blank\" style=\"color: rgb(33, 37, 41); background-color: transparent;\">https://www.g20.org/idn/about-the-g20-2/</a></p><p>KEMENTERIAN LUAR NEGERI. (2022). Indonesia Usung Semangat Pulih Bersama dalam Presidensi G20 Tahun 2022. Diakses pada 14 November 2022, dari&nbsp;<a href=\"https://kemlu.go.id/portal/id/read/3288/berita/presidensi-g20-indonesia\" target=\"_blank\" style=\"color: rgb(33, 37, 41); background-color: transparent;\">https://kemlu.go.id/portal/id/read/3288/berita/presidensi-g20-indonesia</a></p><p>KEMENTERIAN KEUANGAN REPUBLIK INDONESIA. (2022). Manfaat Presidensi G20 Bagi Indonesia. Diakses pada 15 November 2022, dari&nbsp;<a href=\"https://www.djkn.kemenkeu.go.id/kpknl-jakarta3/baca-artikel/14750/Manfaat-Presidensi-G20-Bagi-Indonesia.html\" target=\"_blank\" style=\"color: rgb(33, 37, 41); background-color: transparent;\">https://www.djkn.kemenkeu.go.id/kpknl-jakarta3/baca-artikel/14750/Manfaat-Presidensi-G20-Bagi-Indonesia.html</a></p><p>BANK INDONESIA. (2022). Presidensi G20 Indonesia 2022. Diakses pada 15 November 2022, dari https://www.bi.go.id/id/g20/default.aspxartikel/14750/Manfaat-Presidensi-G20-Bagi-Indonesia.html</p>', 'Lagi_Rame_tentang_G20_nih,_apa_sih_G20.jpg', 'G20 Indonesia 2022', 'false', '2022-11-16 23:04:53'),
(9, '12', 'HEBOH, TAHUN 2023 RESESI GLOBAL !', 'heboh-tahun-2023-resesi-global', '<h2>Apa itu Resesi?</h2><p>Resesi adalah kondisi ekonomi negara sedang memburuk dan terlihat dari Produk Domestik Bruto (PDB) negatif, pengangguran meningkat, hingga pertumbuhan ekonomi riil bernilai negatif selama dua kuartal berturut-turut. Dikutip dari Tempo.co.</p><p>Jadi, resesi global merupakan keadaan ekonomi yang berdampak secara global dimana ekonomi tersebut mengalami deselerasi (penurunan).&nbsp;</p><p>Sebuah hasil studi dari Bank Dunia (World Bank), terdapat beberapa dampak atau skenario terburuk apabila resesi ekonomi global 2022–2024 terjadi, di antaranya sebagai berikut:</p><ol><li>Terjadi Inflasi.&nbsp;Sejalan dengan dampak resesi pada umumnya, akan terjadi inflasi yang menyebabkan kenaikan harga kebutuhan pokok, pasokan energi, PHK massal, serta kenaikan angka kemiskinan.&nbsp;Hal ini membuat pertumbuhan ekonomi menjadi lambat dan negara akan jatuh ke dalam resesi global.</li><li>Pengetatan kebijakan sejumlah bank sentral dunia.&nbsp;Penurunan perekonomian yang tajam serta terjadinya inflasi akan memicu pengetatan kebijakan sejumlah bank sentral secara global.&nbsp;Menurut World Bank, ekonomi global berkemungkinan akan selamat dari resesi 2023, tapi tidak akan mengalami penurunan dan inflasi yang tajam.</li><li>Memicu re-pricing.&nbsp;Kenaikan suku bunga oleh bank sentral di seluruh dunia akan memicu timbulnya re-pricing pada pasar keuangan global. Apabila perlambatan ekonomi terjadi, tentu akan mengalami kerugian output secara permanen.</li></ol><h2>Wah,, Apakah akan terjadi di Indonesia ???&nbsp;</h2><p>Jangan panik, jangan panik..&nbsp;Indonesia Ngga Bakal Resesi !</p><p>Why?? Yuk kita analisis bareng..&nbsp;</p><ol><li>Pertama.&nbsp;Negara kita ini anti-mainstream. Lihat saat dunia lagi krisis gandum, kita makannya nasi dan produksi beras kita NO.2 di ASEAN dan No.3 di dunia yakni 35,4 juta metrik ton (dikutip dari CNBC Indonesia). Kemudian ketika terjadi pemutusan gas alam Rusia ke Eropa dan akhirnya warga Eropa mencari batu bara buat musim dingin. Indonesia sendiri tidak memiliki musim dingin dan plus negara kita berlimpah batu barabara. Berdasarkan data dari World Top Exports, nilai ekspor batu bara Indonesia pada 2021 tercatat sebesar US$ 26,5 miliar, atau 21,6% dari total ekspor dunia dan menempati posisi kedua setelah Australia dengan nilainya mencapai US$ 43,9 miliar, dengan kontribusi sebesar 35,7% dari ekspor dunia. Selanjutnya, ketika warga Barat krisis minyak goreng biji matahari, kita berlimpah minyaknya dari kelapa sawit. Berdasarkan data FAO, Indonesia kembali menempati peringkat pertama dengan total produksi 55,33 persen dari total sawit globaSangat beruntung kita di Indonesia ya ges ya.</li><li>Kedua.&nbsp;Ekonomi kita itu kuat dan mandiri. Menurut data dari Kementerian Keuangan, dari tahun 2010 itu sekitar 55% dari PDB kita itu domestik (dalam kata lain dari lokal-lokal). Kemudian, sumber daya alam kita itu berlimpah. Membuat kita jadi ngga bergantung sama ekspor-impor, malah zaman sekarang semakin banyak muncul usaha dan industri lokal, seperti cafe-cafe, start-up, restoran, pedagang online (online shop), developer, rumah produksi, dan sebagainya.</li><li>Ketiga.&nbsp;Pertumbuhan ekonomi kita itu bagus terus. Hal ini karena dua alasan sebelumnya dan pertumbuhan dari tahun ke tahunnya lumayan besar. Kata Menteri Perekonomian kita yakni Pak Airlangga Hartanto, kuartal I tahun 2022 itu ada di 5,01%, kuartal II tahun 2022 itu di 5,44%, dan kuartal III tahun 2022 sudah mencapai angka 5,72%. Padahal Q1-Q2-Q3 nya negara-negara lain itu pada turun dan bahkan minus.&nbsp;</li></ol><p>Dalam kata lain, di 2023 itu Indonesia masih kuat walau secara global telah muncul isu-isu akan RESESI.&nbsp;</p><p>Setelah kita ketahui bersama apa itu RESESI, dampaknya dan kabar apakah Indonesia akan resesi atau tidak.&nbsp;</p><p>Bagaimana tanggapan dan pendapat teman-teman sebagai mahasiswa? Apa peran yang harus kita lakukan?Apakah harus tetap santuy dan rebahan saja?</p><p>Silakan sampaikan di kolom komentar untuk sharing-sharing dan membuahkan suatu pemikiran yang dapat menjadi solusi. Thank you.</p>', 'HEBOH,_TAHUN_2023_RESESI_GLOBAL_!.jpg', ' Sumber: https://www.bfi.co.id/', 'false', '2022-11-22 23:08:45'),
(10, '12', 'Sinergitas Unwiku Peduli Salurkan Donasi Untuk Korban Gempa Cianjur', 'sinergitas-unwiku-peduli-salurkan-donasi-untuk-korban-gempa-cianjur', '<p>Mahasiswa Universitas Wijayakusuma (Unwiku) Purwokerto, Kabupaten Banyumas melakukan penggalangan dana pada tanggal 23-30 November 2022 yang ditujukan untuk membantu korban gempa Cianjur. Dana yang terkumpul kemudian di distribusikan pada tanggal 9-11 Desember 2022 dengan nama penyalur donasi Sinergitas Unwiku Peduli.</p><p>Para mahasiswa tersebut melakukan penggalangan dana dengan metode online dan langsung turun ke jalan-jalan. Dana yang terkumpul sejumlah Rp. 10. 560. 000,- yang kemudian disalurkan oleh lima orang perwakilan mahasiswa Unwiku didampingi pihak Dompet Dhuafa ke Daerah Kampung Barulega, Desa Cirumput, Kecamatan Cugenang Kabupaten Cianjur, Jawab Barat.</p><p>Selain menyalurkan donasi dari masyarakat Banyumas dan pihak lain yang turut andil memberikan donasi, mahasiswa Unwiku juga berkesempatan melakukan trauma healing bagi anak-anak korban gempa Cianjur. “kami sengaja turun langsung ke daerah yang terdampak. Mengingat, disana pasti banyak yang membutuhkan bantuan. Bukan hanya sekedar bantuan berupa fisik, tetapi bantuan yang bersifat non fisik seperti pemulihan psikologis anak-anak,” ujar Faizal Adi Purnomo, penanggungjawab lapangan Sinergitas Unwiku Peduli.</p><p>Ungkapan rasa terimakasih disampaikan oleh Presiden BEM Unwiku, Andi Sustiawan kepada para donatur yang menitipkan kepedulian melalui mahasiswa Unwiku. Menurutnya “Sungguh sangat luar biasa kepedulian Sinergitas Unwiku peduli, ini merupakan duka kita bersama. Semoga hasil dari penggalangan dana ini bisa bermanfaat untuk Saudara-saudara kita yang terkena musibah gempa bumi. Terimakasih kepada semua donatur baik dari internal kampus atau masyarakat Banyumas yang telah menyisihkan sedikit rezekinya untuk saudara-saudara kita disana,” terang Andi.</p><p>Seorang warga yang biasa disapa Teh Yuli turut berkomentar terkait dengan aksi solidaritas yang dilakukan mahasiswa Unwiku tersebut. Dirinya menyatakan “. “Syukur sekali ada mahasiswa Unwiku yang hadir di tengah-tengah musibah yang dialami kita, semoga keberkahan selalu menyertai pihak yang telah peduli dan empati terhadap kita,” ungkap warga RT 2 RW 4 desa Cirumput tersebut.</p><p>Peristiwa gempa Cianjur telah berlalu berminggu-minggu lalu, namun masih banyak korban yang belum kembali ke kediaman masing-masing dan bertahan di tenda-tenda pengungsian. Beberapa sekolah malahan masih menggunakan tenda-tenda bantuan untuk menyelenggarakan kegiatan belajar-mengajar. Bantuan dari berbagai pihak masih sangat dibutuhkan oleh masyarakat Cianjur agar segera pulih dari kerugian-kerugian akibat gempa.</p>', 'unwiku_peduli.jpg', 'Sinergitas Unwiku Peduli Salurkan Donasi Untuk Korban Gempa Cianjur', 'false', '2022-12-12 23:11:30'),
(11, '12', 'Pagelaran Budaya Unwiku Purwokerto', 'pagelaran-budaya-unwiku-purwokerto', '<p>Badan Eksekutif Mahasiswa (BEM) Universitas Wijayakusuma (Unwiku) Purwokerto, Kabupaten Banyumas, Jawa Tengah, berkomitmen untuk melestarikan budaya Bangsa Indonesia yang adiluhung.</p><p>\"Salah satunya kami wujudkan dengan menyelenggarakan gelar budaya di Pusat Kegiatan Mahasiswa (PKM) Unwiku pada Minggu (18/12) malam,\" kata Ketua Panitia Gelar Budaya BEM Unwiku Bobby Putra Rizky di Mahasiswa Unwiku Purwokerto komitmen lestarikan budaya bangsa Selasa, 20 Desember 2022 15:39 WIB Gelar budaya yang diselenggarakan Badan Eksekutif Mahasiswa (BEM) Universitas Wijayakusuma (Unwiku) Purwokerto diakhiri dengan nonton bareng final Piala Dunia 2022 di Unwiku Purwokerto, Kabupaten Banyumas, Minggu (18/12/2022).</p><p>Ia mengatakan kegiatan dengan tema \"Abirama ing Budaya, Astamaning Among Praja\" itu ditujukan untuk melestarikan budaya bangsa dan menampilkan kreativitas mahasiswa yang memiliki kemampuan di bidang seni.</p><p>Menurut dia, kegiatan tersebut juga ditujukan untuk menginspirasi mahasiswa dan masyarakat umum untuk selalu menanamkan budaya Bangsa Indonesia sebagai kekayaan yang harus dijaga.</p><p>\"Berbagai penampilan pun digelar sebelum nonton bareng final Piala Dunia 2022, antara lain seni karawitan, kentongan, teatrikal, pentas seni yang dimainkan Teater Proses, serta pentas akustik oleh UKMS dan Kosmik,\" katanya.</p><p>Selain itu, kata dia, panitia juga memberi kesempatan bagi mahasiswa maupun masyarakat untuk berjualan di sekitar lokasi kegiatan. Baca juga: Pelajar Jateng-Kalbar saling kenalkan budaya&nbsp;Lebih lanjut, Bobby mengaku bersyukur karena bisa menyelenggarakan kegiatan yang sebelumnya belum pernah ada di Unwiku, namun sekarang bisa diselenggarakan dengan baik tanpa adanya kendala.</p><p>\"Alhamdulillah berkat dukungan dari berbagai pihak, acara tersebut dapat berjalan dengan semestinya, lancar, dan sukses,\" katanya.</p><p>Sementara itu, Presiden BEM Unwiku Andi Sustiawan memberikan apresiasi kepada seluruh mahasiswa yang terlibat dalam penyelenggaraan kegiatan tersebut. \"Terutama teman-teman di lingkar Kemenkoan Relasi Publik dan Kemenkoan Kemahasiswaan. Kegiatan tersebut selain bertujuan untuk melestarikan budaya bangsa, juga ada keseruan tersendiri karena kita bisa nonton bareng final Piala Dunia 2022 bersama mahasiswa Unwiku dan masyarakat umum,\" katanya.</p><p>Ia mengharapkan kegiatan tersebut khususnya gelar budaya bisa berjalan dengan baik dan menjadi agenda rutin akhir tahun untuk menampilkan kreativitas mahasiswa Unwiku kepada masyarakat umum.</p>', 'Pagelaran_Budaya_Unwiku_Purwokerto.jpg', ' Mahasiswa Unwiku Purwokerto gelar kegiatan budaya', 'false', '2022-12-21 23:12:48'),
(12, '13', 'Tips Mudah Budidaya Jamur', 'tips-mudah-budidaya-jamur', '<p>Mendengar kata budidaya rasanya tidak asing ditelinga masyarakat indonesia terutama mahasiswa yang memilki ketertarikan di suatu bidang baik hewan maupun tumbuhan. Salah satu budidaya yang sedang dilakukan oleh wirekraf BEM Unwiku yakni budidaya jamur tiram. Budidaya jamur tiram sendiri sangat populer di tengah masyarakat untuk memenuhi permintaan pasar.</p><p>Jamur tiram merupakan makanan yang menyehatkan.&nbsp;Jamur tiram mengandung kalori yang rendah dan hampir tak memiliki lemak. Vitamin D dan B12 juga terkandung dalam jamur ini dan sangat cocok untuk dikonsumsi. Jamur tiram memiliki ciri khas berbentuk lebar seperti cangkang tiram, berwarna putih, dan tumbuh bergerombol seperti payung. Lantaran permintaan akan jamur tiram tinggi di Indonesia, membuat budidayanya banyak diminati dan terbilang mudah ditemukan.</p><p>Nah, kira-kira bagaimana untuk pemula dalam berbudidaya jamur tiram ini ?. untuk masalah ini wirekraf mau berbagi cerita agar mahasiswa unwiku secara khusus dapat mengetahui dan mengaplikasikan apabila tertarik untuk budidaya.&nbsp;</p><p><br></p><p><strong>1. Siapkan tempat untuk berbudidaya</strong></p><p>Kumbung atau rumah jamur merupakan tempat untuk merawat baglog dan menumbuhkan jamur. Kumbung biasanya berupa sebuah bangunan atau ruangan yang diisi rak-rak untuk meletakkan baglog atau media tanam untuk meletakkan bibit jamur tiram. Ruangan ini harus memiliki kemampuan menjaga suhu dan kelembapan.</p><p>Kumbung biasanya terbuat dari bambu atau kayu. Dinding kumbung bisa dibuat dari papan. Untuk atap, Anda bisa menggunakan genteng. Dianjurkan untuk tidak menggunakan atap asbes atau seng karena akan mendatangkan panas. Sedangkan pada bagian lantainya, direkomendasikan&nbsp;tetap menggunakan tanah agar air yang digunakan untuk menyiram jamur bisa meresap.</p><p>Di dalam kumbung dilengkapi rak berupa kisi-kisi yang dibuat bertingkat. Rak tersebut berfungsi untuk menyusun baglog. Rangka rak bisa dibuat dari bambu atau kayu. Posisi rak diletakkan berjajar dan antara rak satu dengan yang lain dipisahkan oleh lorong untuk perawatan.</p><p>Ukuran kumbung yang dianjurkan sebaiknya tidak kurang dari 40 cm. Rak bisa dibuat hanya 2-3 tingkat saja. Lebar rak 40 cm dan panjang setiap ruas rak 1 meter. Setiap ruas rak sebesar ini mampu menyimpan 70-80 baglog. Banyaknya rak disesuaikan dengan jumlah baglog yang akan dibudidayakan. Sebelum mamasukkan baglog ke kumbung, ada beberapa hal yang perlu Anda perhatikan :</p><ul><li>Pertama, Anda perlu membersihkan kumbung dan rak-rak dari kotoran.</li><li>Kedua, lakukan pengapuran dan penyemprotan dengan fungisida di bagian dalam kumbung. Perlu diamkan selama 2 hari sebelum baglog dimasukkan ke kumbung.</li><li>Terakhir, saat bau sudah hilang, Anda bisa masukkan baglog yang sudah siap untuk ditumbuhkan, di mana seluruh permukaannya sudah tertutupi dengan serabut putih.</li></ul><p><br></p><p><strong>2. Siapkan Baglog&nbsp;</strong></p><p>Lantaran jamur tiram merupakan jamur kayu sehingga bahan utama dari baglog adalah serbuk gergaji. Baglog dibungkus plastik berbentuk silender, satu di antara ujungnya diberi lubang. Di lubang inilah jamur tiram akan tumbuh menyembul keluar. Pada budidaya jamur tiram skala besar, petani jamur biasanya membuat baglog sendiri. Namun, bagi pemula, biasanya baglog dibeli dari pihak lain sehingga petani bisa fokus hanya menjalankan usaha budidaya saja tanpa harus membuat baglog sendiri.</p><p><br></p><p><strong>3.&nbsp;Cara Merawat Baglog</strong></p><p>Ada dua cara menyusun baglog dalam rak, yaitu dengan diletakkan secara vertikal dan horizontal. Meletakkan secara vertikal di mana lubang baglog menghadap ke atas, sedangkan cara horizontal, lubang baglog menghadap ke samping.&nbsp;Kedua cara budidaya jamur tiram ini memiliki kelebihan masing-masing. Kalau disusun secara horizontal menjadi lebih aman dari siraman air karena jika penyiraman berlebih, air tidak akan masuk ke baglog. Selain itu, untuk melakukan panen lebih mudah. Hanya, penyusunan dengan cara horizontal ini lebih banyak memakan ruang.</p><p>Berikut cara budidaya jamur tiram dan perawatannya:</p><ul><li>Sebelum menyusun baglog, buka terlebih dahulu cincin dan kertas penutup baglog. Diamkan kurang lebih lima hari. Bila lantai terbuat dari tanah, lakukan penyiraman untuk menambah kelembapan.</li><li>Setelah itu, potong ujung baglog untuk memberikan ruang tumbuh lebih lebar. Biarkan selama tiga hari dan jangan disiram. Cukup siram pada bagian lantai saja.</li><li>Lakukan penyiraman dengan sprayer. Penyiraman sebaiknya membentuk kabut, bukan tetesan-tetesan air. Makin sempurna pengabutan, akan makin baik. Anda bisa menyiramnya 2-3 kali sehari, tergantung suhu dan kelembapan kumbung. Anda tetap perlu menjaga suhu pada kisaran 16-24 derajat celsius.</li></ul><p><br></p><p><strong>4. Cara Memanen Jamur Tiram</strong></p><p>Kalau baglog yang digunakan permukaannya telah tertutup sempurna dengan miselium, biasanya dalam waktu 1-2 minggu sejak pembukaan tutup baglog, jamur akan tumbuh dan sudah bisa dipanen. Baglog jamur bisa dipanen 5-8 kali, bila perawatannya baik. Baglog dengan bobot sekitar 1 kilogram akan menghasilkan jamur sebanyak 0,7-0,8 kilogram. Setelah itu baglog dibuang atau bisa dijadikan bahan kompos.</p><p>Panen ini dilakukan pada jamur yang telah mekar dan membesar. Tepatnya bila ujung-ujungnya telah terlihat meruncing. Namun, tudungnya belum pecah, warnanya masih putih bersih. Bila masa panen lewat setengah hari saja, warna bisa menjadi agak kuning kecokelatan dan tudungnya akan pecah. Kalau sudah seperti ini, jamur akan cepat layu dan tidak tahan lama. Jarak panen pertama ke panen berikutnya berkisar 2-3 minggu lagi.</p>', 'jamur.jpg', 'Tips mudah budidaya jamur, tanpa memerlukan lahan yang luas #wirekrafpunyacerita', 'false', '2022-12-25 23:22:53'),
(13, '2', 'Cara Kerja Internet', 'cara-kerja-internet', '<h3><strong>Apa Itu Internet?</strong></h3><p>&nbsp;Secara harifah ,&nbsp;internet&nbsp;(Kependekan dari&nbsp;<em><u>interconnected-networking</u></em>) ialah rangkaian komputer yang terhubung di dalam beberapa rangkaian. Manakala Internet (huruf \'I\' besar) ialah sistem komputer umum, yang terhubung secara global dan mengggunakan TCP/IP sebagai protokol pertukaran paket (<em>packet switching communication protocol</em>). Rangkaian internet yang besar dinamakan&nbsp;Internet.</p><p>Dari penejlasan diatas udah paham atau belum? belum ya? okay kita buatkan ilustrasi untuk mempermudah memahami penjelasan di atas.</p><p>Kita dapat mengumpamakan internet sebagai jalan raya yang menghubungkan antar pulau, misal pulau-pulau yang ada di Indonesia saling terhubung dengan jalan tol, maka aktifitas pengiriman barang, tarveling akan jauh lebih mudah dilakukan.</p><p>Nah sama halnya dengan jaringan internet semua data akan mudah terkirim antar komputer melalui kabel sekalipun terpisah oleh lautan. seperti halnya pengiriman barang, traveling yang membnutuhkan kendaraan, supir, bahan bakar, maka internet juga menuntut syarat berupa ISP, DNS, IP&nbsp;<em>Address, browser,&nbsp;</em>TCP/IP<em>, server,&nbsp;</em>http serta paket informasi.</p><p><br></p><h3><strong>Gambaran Cara Kerja Internet</strong></h3><p><img src=\"https://media.geeksforgeeks.org/wp-content/uploads/20220602145532/HowDoesitWorkWhenYouGoogleFromaWebBrowser.png\" alt=\"How Does it Work When You Google From a Web Browser\"></p><p><span style=\"color: rgb(99, 99, 99);\">Sumber gambar:&nbsp;https://www.geeksforgeeks.org/</span></p><p><br></p><h4><strong>Langkah 1 - ISP dan Browser</strong></h4><p><img src=\"https://techterms.com/img/lg/isp_71.png\" alt=\"ISP (Internet Service Provider) Definition\"></p><p><span style=\"color: rgb(99, 99, 99);\">Sumber gambar:&nbsp;https://techterms.com/</span></p><p>Untuk memulai internet kita membutuhkan yang namanya ISP agar komputer dapat terhubung dengan internet.</p><p>ISP merupakan kepanjangan dari&nbsp;<em>Internet Service Provider,&nbsp;</em>atau penyedia jasa layanan internet seperti Biznet, Indihome atau versi nirkabel dari kartu GSM seperti 3, Telkomsel, XL dan sebagainya.</p><p>Setelah komputer kita terhubung dengan internet melalui ISP, kita bisa mulai main game atau sekedar browser menggunakan browser seperti Google Chrome, Microsoft Edge, Mozilla Firefox, dan lain-lain</p><p><br></p><h4><strong>Langkah 2 - DNS (<em>Domain Name System)</em></strong></h4><h4><img src=\"https://cdn.wpbeginner.com/wp-content/uploads/2019/11/howdomainswork.png\" alt=\"What is DNS? and How Does DNS Work? (Explained for Beginners)\"></h4><p><span style=\"color: rgb(99, 99, 99);\">Sumber gambar:&nbsp;https://www.wpbeginner.com/</span></p><p>DNS&nbsp;adalah sebuah sistem yang menyimpan informasi tentang nama host maupun nama domain dalam bentuk basis data tersebar (distributed database) di dalam jaringan komputer, misalkan: Internet.</p><p>Untuk bisa memuat suatu halaman website, maka DNS (Domain Name System) dibutuhkan, agar (misalnya) google.com tersebut memiliki IP Address dan bisa diakses oleh kita.</p><p>Kita bisa saja memiliki nama domain (misalnya bem-unwiku.com), tapi tak akan bisa diakses jika tak memiliki IP Address.</p><p>DNS menyediakan servis yang cukup penting untuk Internet, bilamana perangkat keras komputer dan jaringan bekerja dengan alamat IP untuk mengerjakan tugas seperti pengalamatan dan penjaluran (routing), manusia pada umumnya lebih memilih untuk menggunakan nama host dan nama domain, contohnya adalah penunjukan sumber universal (URL) dan alamat e-mail. DNS menghubungkan kebutuhan ini.</p><p><br></p><h4><strong>Langkah 3 - TCP/IP</strong></h4><p><img src=\"https://blogger.googleusercontent.com/img/a/AVvXsEhGuaSgZkZR4eoCMlXjw6AGAyISjKyIPKdCkkymMKW1Ft7WkiLPHizJ37nQgOTBk1JMPePw5S05aZRhPI2KjQo1SUrgNUh-Dq3OciaVEIzWsz5zaHcCRuLJKqtTrvHRbcSPi0gimAHPnBjA1P2fpZca-5-yw4_bF4oxGooMzybmBQy5aF74cDGMxPTzqA=w400-h284\" alt=\"Pengertian TCP/IP Beserta Fungsi, Karakteristik, dan Cara Kerjanya - Ayo  Konfig!\">&nbsp;&nbsp;&nbsp;&nbsp;</p><p><span style=\"color: rgb(99, 99, 99);\">Sumber gambar:&nbsp;https://ayokonfig.com/</span></p><p>Sejauh ini kita sudah tahu bahwa diperlukan DNS untuk mengakses sebuah website melalui browser</p><p>Akan tetapi prosesnya tak berhenti sampai di sana, karena agar kita dapat bertukar pesan antara website tujuan dan komputer kita, maka TCP diperlukan.</p><p>Internet Protocol Suite (umumnya dikenal sebagai TCP/IP) adalah seperangkat protokol yang digunakan untuk komunikasi internet dan jaringan lain yang serupa. Hal ini dinamakan dari dua protokol yang paling penting di dalamnya: di Transmission Control Protocol (TCP) dan Internet Protocol (IP), yang pertama dua protokol jaringan yang ditetapkan dalam standar ini. Pada hari ini, jaringan IP merupakan perpaduan dari beberapa perkembangan yang mulai berkembang di tahun 1960-an dan 1970-an, yaitu Internet dan LAN (Local Area Network), yang muncul di pertengahan tahun 1980-an ke-akhir, bersamaan dengan kedatangan of the World Wide Web pada awal tahun 1990-an.</p><p>Kata ‘bertukar pesan’ di sini bukan hanya berarti merujuk pada aktivitas ‘chatingan’ saja. Saat kamu ingin mengakses website tertentu pun sudah bisa disebut sebagai bertukar data, karena kamu meminta data pada website tertentu, kemudian website tersebut mengirimkannya.</p><p><br></p><h4><strong>Langkah 4 - HTTP (Hypertext Transfer Protocol)</strong></h4><p><img src=\"https://img.freepik.com/free-vector/www-concept-illustration_114360-2143.jpg?t=st=1672364436~exp=1672365036~hmac=6c733de08b7b899bc507c2b07fa28f2f9d77bd30a69bf0fa77d230c0edee2a6e\" alt=\"Free vector www concept illustration\" width=\"447\"></p><p><span style=\"color: rgb(99, 99, 99);\">Sumber gambar:&nbsp;https://www.freepik.com/</span></p><p>Hypertext Transfer Protocol (HTTP) adalah sebuah protokol jaringan lapisan aplikasi yang digunakan untuk sistem informasi terdistribusi, kolaboratif, dan menggunakan hipermedia. Penggunaannya banyak pada pengambilan sumber daya yang saling terhubung dengan tautan, yang disebut dengan dokumen hiperteks, yang kemudian membentuk World Wide Web pada tahun 1990 oleh fisikawan Inggris, Tim Berners-Lee.</p><p>Jika langkah 3 di atas berhasil dilakukan, maka jaringan internet akan mulai membangun HTTP (hypertext transfer protocol) yang bertugas untuk menyuguhkan dokumen yang kita inginkan, yang sebagian besar berbentuk HTML.</p><p>Secara sederhana, bentuk asli semua halaman website (artikel, berita, blog, dll) adalah file html yang harus ditransfer dari website ke pengakses website.</p><p>Semua informasi yang kita minta tersebut kemudian akan langsung dikirimkan ke komputer kita – lagi-lagi – melalui TCP di atas dalam bentuk kumpulan bit.</p><p>Dari sini, kecepatan internet kita dan server website yang dikunjungi akan diuji karena data-data tersebut akan ditransmisikan melalui kabel, berpindah dari router ke router, saluran telepon, dan/atau WiFi.</p><p>Semakin lancar proses perjalanannya, maka akan semakin cepat informasi tersebut sampai ke layar komputer kita.</p><p><br></p><h4><strong>Langkah 5 - Browser</strong></h4><p><img src=\"https://img.freepik.com/free-vector/3d-web-browser-icon_23-2147521830.jpg?1&amp;t=st=1672364513~exp=1672365113~hmac=eb9f318ee5299d4517c6cdc481d48362b1699ba3d05afbdc7d1b0cbeec012da1\" alt=\"Free vector 3d web browser icon\" width=\"452\"></p><p><span style=\"color: rgb(99, 99, 99);\">Sumber gambar:&nbsp;https://freepik.com/</span></p><p>Langkah terakhir kembali menjadi tugas browser yang kita gunakan, yang mana akan mengubah semua potongan data tersebut menjadi gambar, artikel, atau video yang bisa kita nikmati seperti halnya kamu membaca artikel cara kerja internet di website kami yang satu ini.</p><p>Dikarenakan kelima langkah ini terjadi hanya dalam hitungan milidetik, mungkin kita tak akan menyadari semua proses tersebut. Canggih bukan?</p><p>Semoga artikel diatas dapat menambah pengetahuan kita akan cara kerja dari internet.</p>', 'Cara_Kerja_Internet.jpg', 'Sumber gambar: https://www.freepik.com/', 'false', '2022-12-31 23:25:01'),
(14, '1', 'Hari Kesaktian Pancasila', 'hari-kesaktian-pancasila', '<p>Sejarah Hari Kesaktian Pancasila yang diperingati setiap tanggal 1 Oktober tidak terlepas dari sebuah insiden berdarah. Insiden tersebut adalah pembantaian terhada 6 enam Jenderal dan seorang Kapten serta beberapa korban lain. Peristiwa berdarah tersebut dikenal sebagai upaya kudeta Partai Komunis Indonesia untuk mengubah ideologi Pancasila dengan ideologi komunis.</p><p>Kajian dapat diakses melalui link dibawah ini atau bagi kamu yang mau mengunduh file kajiannya ada di menu download ya</p><p><br></p><p><a href=\"https://drive.google.com/file/d/1isHLBoeqZakGIjzAhplwCKGi8Iyr-08S/view?usp=sharing\" target=\"_blank\" style=\"color: rgb(0, 71, 178); background-color: transparent;\">Link Hari Kesaktian Pancasila</a></p>', 'Hari_Kesaktian_Pancasila.jpg', 'Monumen Pancasila Sakti', 'false', '2023-09-30 23:30:03'),
(15, '1', 'URGENSI PENGESAHAN RKUHP, PRODUK HUKUM PRO RAKYAT ATAU MENCEKIK RAKYAT ?', 'urgensi-pengesahan-rkuhp-produk-hukum-pro-rakyat-atau-mencekik-rakyat', '<p>Dimulai sejak tahun 1964, pembahasan Rancangan Undang-Undang Kitab Undang-Undang Hukum Pidana (RKUHP) hingga sekarang masih belum disahkan, oleh karena terjadi polemik di dalam pembahasannya. Dalam pembahasan RKUHP, tidak serta merta hanya sekedar mengubah teks/kalimat, redaksi, dan substansi pasal-pasal dari Wetboek van Strafrecht (KUHP). Namun, juga mengubah atau memperluas ide dasar terkait asas-asas di dalamnya. Pembahasan mengenai ide dasar terkait asas-asas dalam RKUHP, khususnya pada asas legalitas diperluas konsepsinya. Hal ini, agar peraturan undang-undang hukum pidana sesuai dengan kultur bangsa Indonesia, tidak hanya dari sisi kepastian hukum, namun juga pada sisi keadilan hukum. Akan tetapi, perluasan konsepsi asas legalitas RKUHP masih menjadi polemik. Mengingat sumber utama hukum tertulis terkait dengan peraturan pidana, maka KUHP atau dalam bahasa Belanda disebut dengan Wetboek van Strafrecht) merupakan Titah Raja tertanggal 15 Oktober 1915 No. 33 yang mulai berlaku pada tanggal 1 Januari 1918.</p><p><br></p><p>Kajian dapat diakses melalui link dibawah ini atau bagi kamu yang mau mengunduh file kajiannya ada di menu download yaa</p><p><br></p><p><a href=\"https://drive.google.com/file/d/1juzcYZm48FKLzSGAuphEFgxfsgEHQTx-/view?usp=sharing\" target=\"_blank\" style=\"color: rgb(0, 0, 255); background-color: transparent;\">Link Kajian Urgensi Pengesahan RKUHP</a></p>', 'berita_UrgensiPengesahanRKUHP.jpeg', 'Sumber gambar: suaradewata.com', 'false', '2022-11-13 23:31:42'),
(16, '1', 'Peristiwa G30S-PKI', 'peristiwa-g30s-pki', '<p>Peristiwa G30S/PKI atau biasa disebut dengan Gerakan 30 September merupakan salah satu peristiwa pemberontakan komunis yang terjadi pada bulan September sesudah beberapa tahun Indonesia merdeka. Peristiwa G30S PKI terjadi di malam hari, tepatnya pada tanggal 30 September tahun 1965. Dalam sebuah kudeta, setidaknya ada 7 perwira tinggi militer yang terbunuh dalam peristiwa tersebut.</p><p><br></p><p>Kajian dapat diakses melalui link dibawah ini atau bagi kamu yang mau mengunduh file kajiannya ada di menu download yaa</p><p><br></p><p><a href=\"https://drive.google.com/file/d/1rB8cU76d18k_kaq-SpLBaKGYRBUFE1ST/view?usp=sharing\" target=\"_blank\" style=\"color: rgb(0, 0, 255); background-color: transparent;\">Link Kajian Peristiwa G30S-PKI</a></p>', 'Peristiwa_G30S-PKI.jpg', 'Jendral yang gugur pada peristiwa G30S-PKI', 'false', '2022-09-29 23:32:37'),
(17, '1', 'Kejadian Tragedi Kanjuruhan', 'kejadian-tragedi-kanjuruhan', '<h2><strong>Kronologi Kejadian</strong></h2><p><br></p><p>Pada awalnya semua berjalan aman dan tertib, penonton sudah memenuhi stadion dan para pemain sedang melakukan pemanasan hingga kick off pukul 20.00 Kick off dimulai dan pertandingan berjalan aman, tanpa kericuhan sedikitpun yang ada hanya supporter Arema saling melontarkan psywar ke arah pemain persebaya. Babak pertama selesai, dan saat jeda istirahat, ada sekitar 2-3 kali kericuhan sedikit di tribun 12-13, yang bisa segera diamankan oleh pihak berwenang. Babak ke-2 berlanjut dan tim persebaya berhasil mencetak gol-nya yang ke-3 Arema FC semakin tampil menyerang menggempur gawang Persebaya, tapi tidak ada gol yang tercipta.</p><p><br></p><p>Kajian dapat diakses melalui link dibawah ini atau bagi kamu yang mau mengunduh file kajiannya ada di menu download yaa</p><p><br></p><p><a href=\"https://drive.google.com/file/d/1KcXoJLot3OjqHmWGTwsDsC7T03Gb8bDs/view?usp=sharing\" target=\"_blank\" style=\"color: rgb(0, 0, 255); background-color: transparent;\">Link Kajian Tragedi kanjaruhan</a></p>', 'Kejadian_Tragedi_Kanjuruhan.jpg', 'Kerusuhan Kanjuruhan', 'false', '2022-10-12 23:34:28'),
(18, '1', 'Duka Banjir Cilacap dan Sekitarnya', 'duka-banjir-cilacap-dan-sekitarnya', '<h2>Kronologi Kejadian</h2><p><br></p><p>Perkembangan Banjir dan Tanah Longsor di Cilacap, Melanda 15 Kecamatan 40 Desa 72 Dusun 3.874 KK, 15.496 jiwa Terdampak. Banjir dan tanah longsor telah mengepung 15 Kecamatan 40 Desa 72 Dusun dengan 3.874 KK 15.496 Jiwa terdampak di kabupaten Cilacap Jumat (7/10). Peristiwa itu terjadi setelah hujan dengan intensitas sedang hingga lebat mengguyur wilayah Kabupaten Cilacap sejak Jumat - Sabtu (07 08/10) siang pukul 13.00 wib hingga malam hari pukul 03.00 wib</p><p><br></p><p>Untuk Selengkapnya&nbsp;Kajian dapat diakses melalui link dibawah ini atau bagi kamu yang mau mengunduh file kajiannya ada di menu download yaa</p><p><br></p><p><a href=\"https://drive.google.com/file/d/1BgHf9Hm2FFtn9hFdmzXhQP0x0KP_1gxS/view?usp=sharing\" target=\"_blank\" style=\"color: rgb(0, 0, 255);\">Link Kajian Duka Banjir Cilacap</a></p>', 'Duka_Banjir_Cilacap_dan_Sekitarnya.jpg', 'ilustrasi banjir', 'false', '2022-10-11 23:37:25'),
(19, '1', 'Pray For Gempa Cianjur', 'pray-for-gempa-cianjur', '<p>Infografis Gempa Bumi magnitudo 5.6 skala richter Kabupaten Cianjur dengan waktu kejadian Senin 21 November 2022 Pukul 13.21 WIB, cut off time 13.00 WIB relase update 22 November 2022 Pukul 16.00 WIB data yang sudah masuk ke POSKO Tanggap Darurat sebagai berikut: 268 jiwa meninggal 122 jiwa teridentifikasi 151 jiwa dalam pencarian, 1.083 luka-luka, 58.362 jiwa menggungsi.</p><p><br></p><p>Untuk Selengkapnya&nbsp;Kajian dapat diakses melalui link dibawah ini atau bagi kamu yang mau mengunduh file kajiannya ada di menu download yaa</p><p><br></p><p><a href=\"https://drive.google.com/file/d/11xIp2YU0OSpEGRSxNUjcGJpA7ZHpcciE/view?usp=sharing\" target=\"_blank\" style=\"color: rgb(0, 0, 255); background-color: transparent;\">Link Kajian Gempa Cianjur</a></p>', 'Pray_For_Gempa_Cianjur.jpg', 'Dampak gempa cianjur', 'false', '2022-11-24 00:00:00'),
(20, '1', 'Penggunaan Kendaraan Listrik bagi Prespektif Kesehata dan Lingkungan', 'penggunaan-kendaraan-listrik-bagi-prespektif-kesehata-dan-lingkungan', '<p>Mobil listrik adalah kendaraan yang menggunakan energi listrik sebagai tenaga utama untuk menggerakkan motor listrik. Energi listrik yang disimpan dalam baterai atau tempat penyimpan energi lainnya. Mobil listrik sangat populer pada akhir abad ke-19 dan awal abad ke-20, tapi kemudian popularitasnya meredup karena teknologi mesin pembakaran dalam yang semakin maju dan harga kendaraan berbahan bakar bensin yang semakin murah.</p><p><br></p><p>Untuk Selengkapnya&nbsp;Kajian dapat diakses melalui link dibawah ini atau bagi kamu yang mau mengunduh file kajiannya ada di menu download yaa</p><p><br></p><p><a href=\"https://drive.google.com/file/d/1bZnRgmmyBrJgNLYzp8i1aSu4naCvPNFY/view?usp=sharing\" target=\"_blank\" style=\"color: rgb(0, 0, 255); background-color: transparent;\">Link kajian Pengunaan Kendaraan Listrik</a></p>', 'michael-marais-HjV_hEECgcM-unsplash.jpg', 'Sumber: freepik', 'false', '2022-11-26 23:45:35'),
(21, '1', 'Fakta Unik Banyumas', 'fakta-unik-banyumas', '<p><strong>#orangapakorakepenak</strong></p><p>&nbsp;Banyumas adalah salah satu kabupaten yang berada di Provinsi Jawa Tengah, yang beribu kota di Purwokerto. Kabupaten ini berbatasan dengan Kabupaten Brebes di utara, Kabupaten Purbalingga, Kabupaten Banjarnegara, dan Kabupaten Kebumen di timur, serta Kabupaten Cilacap di sebelah selatan dan barat. Gunung Slamet, gunung tertinggi di Jawa Tengah terdapat di ujung utara wilayah kabupaten ini.</p><p>Kabupaten Banyumas merupakan bagian dari wilayah budaya Banyumasan, yang berkembang di bagian barat Jawa Tengah. Bahasa yang dituturkan adalah bahasa Banyumasan, yaitu salah satu dialek bahasa Jawa yang cukup berbeda dengan dialek standar bahasa Jawa (dialek Mataraman).</p><p>Masyarakat dari bahasa dan daerah lain kerap menjulukinya \"bahasa ngapak\" karena ciri khas bunyi /k/ yang dibaca penuh pada akhir kata (berbeda dengan dialek Mataraman). Bahasa Ngapak sering disebut juga Dialek Banyumasan dan Bahasa Panginyongan.</p><p><br></p><h3><strong>1. Arti Banyumas</strong></h3><p><img src=\"https://infopurwokerto.com/wp-content/uploads/2021/02/logo-pemkab-banyumas-293x300-1.jpg\" alt=\"ARTI LOGO KABUPATEN BANYUMAS - Info Purwokerto\" width=\"239\"></p><p>Kata Banyumas berasal dari dua kata: banyu dan mas. Banyu berarti \"air\", mas berarti \"emas\". Nama tersebut diberikan oleh seorang pemuda dari Roma yang mengembara hingga ke wilayah ini.</p><p>Saat tiba di Banyumas, ia menyaksikan para penduduk sedang mengantri di sebuah sumber mata air karena musim kemarau. Para penduduk mengatakan \"rega banyu kaya mas\" (harga air seperti emas), sehingga muncullah nama tempat ini.</p><p><br></p><h3><strong>2. Budaya Banyumasan</strong></h3><p>Budaya Banyumasan memiliki ciri khas tersendiri yang berbeda dengan wilayah lain di Jawa Tengah, walaupun akarnya masih merupakan budaya Jawa. Di antara seni pertunjukan yang terdapat di Banyumas antara lain wayang kulit gagrag Banyumas, yaitu kesenian wayang kulit khas Banyumasan.</p><p>Ada dua gagrak (gaya), yakni Gragak Kidul Gunung dan Gragak Lor Gunung. Kekhasan wayang kulit gragak Banyumasan adalah napas kerakyatannya yang begitu kental dalam pertunjukannya. Ada pula Begalan, yaitu seni tutur tradisional yang pada upacara pernikahan. Kesenian ini menggunakan peralatan dapur yang memiliki makna simbolis berisi falsafah Jawa bagi pengantin dalam berumah tangga nantinya.</p><p><br></p><h3><strong>3. Destinasi Wisata</strong></h3><p>Tempat atau destinasi wisata di Banyumas sangat berlimpah. Ada kawasan wisata alam seperti Baturraden, Pancuran Pitu, Pancuran Telu, Gua SaraBadak, Curug Gede, Curug Ceheng, Curug Belot, Bumi Perkemahan Kendalisada, Telaga Sunyi dan Mata Air Panas Kalibacin. Kemudian ada wisata sejarah seperti Masjid Saka Tunggal, Museum Wayang Sendang Mas, Museum BRI Purwokerto, dan Museum Jenderal Soedirman.</p><p>Tak ketinggalan, Banyumas juga punya beragam destinasi khusus untuk yang membawa keluarga. Ada Combong Valley Paint Ball and War Games, Serayu River Voyage, Dreamland Spring Water Park, Depo Bay, Taman Rekreasi Andhang Pangrenan, Baturraden, The Forest Island Baturraden, dan masih banyak lagi.</p><p><br></p><h3><strong>4. Tarian dan Seni Tradisional</strong></h3><p>Banyumas juga kekayaan di bidang budaya. Salah satunya mereka punya banyak tarian tradisional khas Banyumasan. Ada Tari Jengger yang merupakan tarian yang dimainkan oleh dua orang perempuan atau lebih. Di tengah-tengah pertunjukan hadir seorang penari laki-laki disebut badhud (badut/bodor).</p><p>Tarian ini umumnya dilakukan di atas panggung dan diiringi oleh alat musik calung. Ada pula Sintren, tarian yang dimainkan oleh laki-laki yang mengenakan baju perempuan. Lalu ada Aksimuda, yakni kesenian bernapaskan Islam berupa silat yang digabung dengan tari-tarian.</p><p>Ada Buncis, yaitu paduan antara kesenian musik dan tarian yang dimainkan oleh delapan orang. Kesenian ini diiringi alat musik angklung. Ada juga ebeg, yaitu kesenian kuda lumping khas Banyumas. Pertunjukan ini diiringi oleh gamelan yang disebut bendhe.</p><p><br></p><h3><strong>5. Kuliner khas Banyumas</strong></h3><p>Ada banyak makanan khas Banyumas. Yang sudah sangat terkenal adalah tempe mendoan. Tempe mendoan adalah olahan tempe yang dibalut dengan tepung dengan campuran bumbu rempah tertentu kemudian digoreng.</p><p>Ahmad Tohari, penulis sekaligus budayawan dari Banyumas mengatakan bahwa mendoan ditemukan saat proses membuat keripik tempe. Dalam proses menggoreng keripik, tempe digoreng setengah matang. Baru setelah dingin, tempe digoreng lagi. Tohari yang pernah tinggal di dekat sentra keripik tempe di Purwokerto mengaku kini camilan itu kalah pamor dari mendoan.</p><p>Pada November 2021, tempe mendoan resmi diakui sebagai Warisan Budaya Takbenda (WBTb). Penetapannya mengacu pada hasil Sidang Penetapan Warisan Budaya Takbenda Indonesia 2021 oleh Kementerian Pendidikan Kebudayaan Riset dan Teknologi. Kuliner khas lainnya dari Banyumas adalah Soto Sokaraja, Getuk Goreng Sokaraja, Nopia, Mino, Es Dawet, Wedang Runtah, Keripik Tempe, Kue Gelombang Samudra dan masih banyak lagi.</p><p><br></p><h3><strong>6. Batik Banyumas</strong></h3><p>Banyumas juga menghasilkan batik, meskipun tidak setenar Solo, Yogyakarta dan Pekalongan. Batik Banyumas mempunyai keunikan karena kedua sisi muka dan belakang mempunyai kualitas yang hampir sama.</p><p>Batik Banyumas yang sekarang ini cukup terkenal adalah Batik produksi Pak Sugito dari Sokaraja. Selain itu, sentra batik Banyumasan yang lengkap barada di jalan Mruyung di dalam kompleks alun-alun kota Banyumas.</p><p><br></p><p><br></p><p><strong>Sumber literatur :&nbsp;</strong></p><p>https://www.matain.id/article/10002/2021/1230/6-fakta-menarik-banyumas-tanah-penutur-bahasa-ngapak-dan-tempat-kelahiran-tempe-mendoan.html</p><p>https://www.liputan6.com/lifestyle/read/4843873/6-fakta-menarik-banyumas-tanah-penutur-bahasa-ngapak-dan-tempat-kelahiran-tempe-mendoan</p><p> </p>', 'Fakta_Unik_Banyumas.jpg', 'Fakta unik banyumas', 'false', '2022-12-31 23:46:37');
INSERT INTO `article` (`id`, `id_kategori`, `title`, `slug`, `content`, `gambar`, `keterangan_gambar`, `draft`, `created_at`) VALUES
(22, '1', 'Waspada Ancaman Phising', 'waspada-ancaman-phising', '<p>Seiring pesatnya perkembangan teknologi, belakangan ini kita semakin sering menjumpai kasus-kasus cybercrime yang berkaitan dengan kebocoran data pribadi.</p><p>Web phising merupakan salah satu metode paling umum yang mendasari persoalan ini.</p><p>Di Amerika Serikat dan sejumlah negara maju lainnya, bahaya web phising sudah menjadi concern utama yang gencar diperangi sejak lama.</p><h2>Apa itu Web Phising?</h2><p>Menurut laman Wikipedia, web phising (pengelabuhan) adalah situs web yang dirancang untuk melakukan bentuk penipuan dengan cara percobaan untuk mendapatkan informasi sensitif, seperti nomor kartu kredit, kata sandi, atau data-data credentials lainnya.</p><p>Web phising biasanya berbentuk menyerupai website asli baik dari segi tampilan maupun nama domain dengan tujuan untuk meminimalisir kecurigaan calon korban, bahakan sampai dalam bentuk aplikasi seperti yang ramai pada waktu belakangan ini.</p><p>Dari definisi tersebut, secara umum kita bisa menarik kesimpulan bahwa web phising adalah sebuah website biasa yang memang sengaja dibuat untuk melakukan tindak kejahatan.</p><p>Tujuan utama pembuat web phising di Indonesia biasanya untuk mengambil alih akun sosial media orang lain, bahkan kasusnya bisa lebih parah lagi karena melibatkan informasi credentials seperti kartu kredit dan akun bank online pribadi. Seperti yang ramai pada waktu belakangan ini.</p><h2>Cara Kerja Web Phising</h2><p>Setelah mengetahui web phising itu apa, selanjutnya kita bakal mempelajari cara kerja web phising agar kedepannya kita tidak menjadi salah satu korbannya.</p><p>Cara kerja web phising sejatinya cukup sederhana, yakni pelaku biasanya membidik target website yang bonafit dan populer dikalangan pengguna.</p><p>Misalnya seperti facebook.com, twitter.com, instagram.com, gmail.com, atau situs-situs pembayaran semacam paypal, gopay, hingga akun perbangkan mobile seperti brimo dan lain-lain.</p><p>Setelah menemukan target yang ingin dibidik, pembuat web phising biasanya segera merancang website palsu alias bikin web phising dengan tampilan dan nama domain semirip mungkin dari website aslinya.</p><p>Beberapa contoh web phising yang pernah kami temui di antaranya adalah fatebook.com (duplikat facebook.com), kikbca.com (duplikat klikbca.com), serta twlitter.com (duplikat dari Twitter.com, perhatikan huruf “i” diganti dengan huruf “L”). Begitulah kira-kira cara membuat link phising.</p><p>Dengan berbekal nama domain dan tampilan yang mirip, web phising akan bekerja mengumpulkan user untuk login menggunakan informasi asli.</p><p>Kemudian data-data yang dimasukkan tersebut secara otomatis akan tersimpan di database untuk digunakan login ke website asli oleh pelaku penyebar web phising.</p><p>Akun sosial media yang terkena phising biasanya memiliki tanda-tanda sering memposting link berisi hal-hal aneh, status tidak biasa, atau bisa juga digunakan untuk melakukan modus penipuan terencana.</p><h2>Ciri-Ciri Web Phising</h2><p>Ada beberapa ciri web phising yang bisa Anda pelajari. Pertama, yakni bisa dilihat dari ekstensi dan nama domain.</p><p>Perlu diketahui, domain merupakan alamat unik yang hanya bisa didaftarkan satu kali di seluruh dunia.</p><p>Jadi, tidak akan ada nama domain yang sama di dunia ini. Perhatikan juga ekstensi domain yang digunakan, situs populer biasanya menggunakan ekstensi TLD (Top Level Domain) .com atau .id jika di dalam negeri.</p><p>Ciri kedua, Anda bisa memperhatikan pada bagian copywriting di halaman login.</p><p>Website phising biasanya akan menggunakan kata-kata yang sifatnya terlalu berlebihan dan cenderung ke arah memaksa.</p><p>Dalam beberapa kasus Anda juga bakal menemukan kata-kata yang bisa membangkitkan emosi sehingga bakal mendorong Anda untuk segera mengisi informasi yang dibutuhkan.</p><h2>Tips Cara Menghindari Web Phising</h2><p>Ada beberapa tips untuk menghindari Web Phising ataupun Aplikasi Phising</p><ul><li>Selalu Cek Domain Website Bersangkutan. Kalau perlu buat bookmark di browser untuk website penting yang membutuhkan informasi login</li><li>Jangan asal install aplikasi jika bukan dari sumber yang terpercaya. Phising melalui aplikasi juga marak terjadi, jadi waspada ketika kita mendownload aplikasi yang bukan dari situs resmi-nya usahakan install dari play store bagi pengguna android. Dan juga waspada terhadap aplikasi mod atau modifikasi bisa saja aplikasi tersebut merupakan phishing.</li><li>Oleh karena itu jangan sampai lengah, kita harus selalu waspada kalau tak ingin data pribadinya tercuri.</li><li>Jangan Mengklik Link Dari Email Mencurigakan karena bisa jadi email phising</li><li>Memeriksa Akun Secara Rutin</li><li>Rajin Mengganti Password</li><li>Menginstal Patch Keamanan di Komputer/Laptop sebagai cara mengamankan laptop dari hacker</li></ul><h2>Cara Mengamankan Akun yang Terkena Web Phising</h2><p>Katakanlah Anda sedang mengalami nasib sial sehingga akun sosial media atau data Anda terlanjur masuk ke dalam web phising. Lalu, bagaimana langkah-angkah yang harus dilakukan?</p><p>Bila kejadian baru terjadi dan Anda keburu sadar sudah masuk ke dalam jebakan web phising, langkah terbaik yakni dengan cara mengganti password akun Anda.</p><p>Sementara jika kata sandi sudah diganti oleh hacker web phising Anda masih memiliki satu kesempatan untuk menyelamatkan akun tersebut dengan cara sebagai berikut:</p><ol><li>Jika terjadi pada akun sosial media seperti facebook, twitter, dan instagram, sebaiknya Anda segera menuju ke website resmi untuk melakukan reset password lama.</li><li>Pada tahap ini biasanya Anda akan diminta untuk menuliskan username atau alamat email yang pertama kali digunakan untuk mendaftar. Jangan ragu, masukkan saja!</li><li>Setelah sukses, segera login ke email pertama yang Anda gunakan untuk membuat akun sosial media. Kemudian cari link konfirmasi untuk melakukan reset password.</li><li>Buka link tersebut. Namun, sebelumnya Anda harus lebih dulu memastikan sang pengirim email benar-benar kredibel. Hal ini ditandai dengan adanya nama domain di alamat email. Contoh: noreply@facebook.com atau reset@facebook.com.</li><li>Ubah kata sandi Anda dengan pilihan kombinasi alfanumerik yang lebih rumit dari sebelumnya agar akun tersebut bisa kembali lagi ketangan Anda.</li><li>Setelah berhasil, jangan lupa untuk mengaktivkan pengaturan authentifikasi dua langkah menggunakan kode SMS, Google Authentificator, atau email konfirmasi.</li></ol><h2>Kesimpulan</h2><p>Aktivitas web phising dan app phising merupakan salah satu tindak kejahatan cyber yang lumayan sering terjadi, baik di Indonesia maupun di luar negeri.</p><p>Banyak sekali kasus kejahatan phising yang bisa kita temukan. Apalagi dewasa ini masyarakat modern sudah semakin banyak yang memiliki akses digital sehingga potensi kelalaian bakal semakin besar.</p><p>Maka dari itu, pastikan untuk selalu teliti dalam berselancar di jagat dunia maya.</p><p>Bagi pemilik bisnis, pastikan website Anda sudah menggunakan sistem keamanan SSL Certificate agar tidak mudah dibobol. Selain itu, Anda juga bisa mengamankan beberapa ekstensi nama domain sekaligus untuk menghidari potensi cybersquatting.</p><p><br></p><p>Oleh:&nbsp;&nbsp;&nbsp;&nbsp;Kementerian Media Komunikasi dan Informasi</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BEM Unwiku 2022</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kabinet Muara Perubahan</p><p><br></p><p>Referensi:</p><p><a href=\"https://qwords.com/blog/apa-itu-web-phising/\" target=\"_blank\" style=\"color: rgb(33, 37, 41); background-color: transparent;\">https://qwords.com/blog/apa-itu-web-phising/</a></p><p>https://blog.mycoding.id/2020/08/waspada-phishing.html</p>', 'Waspada_Ancaman_Phising.jpg', ' Image by pikisuperstar on Freepik', 'false', '2022-12-31 23:48:07'),
(23, '14', 'KSR Unwiku Juara Lomba Peringatan Hari Relawan.', 'ksr-unwiku-juara-lomba-peringatan-hari-relawan', '<p><strong>Korp Sukarela Unwiku (KSR Unwiku)</strong>&nbsp;memperoleh beberapa penghargaan dari Lomba Peringatan Hari Relawan.</p><p>Lomba Peringatan Hari Relawan kali ini bertemakan \"Totalitas tanpa batas untuk peran relawan yang penuh aksi\" dilaksanakan pada Sabtu, 31 Desember 2022.</p><p>Lomba ini diselenggarakan oleh&nbsp;PMI Banyumas di Aula Syamsuhadi Irshad, Universitas Muhammadiyah Purwokerto.</p><p>KSR Unwiku Memperoleh beberapa Juara yaitu:</p><ul><li>Juara I - Lomba Video Cover mars PMI</li><li>Juara II - Lomba Menghias Tumpeng</li><li>Juara II - Short Movie Peran relawan</li></ul><p><br></p><p>Berikut Dokumentasinya</p><p><br></p><p><img src=\"http://localhost/bem/upload/artikel/Screenshot_2024-01-08_002918.jpg\" alt=\"FotoKSR Unwiku Juara Lomba Peringatan Hari Relawan.\"></p>', 'ksr.jpg', 'Apresiasi Terbaik untuk UKM KSR', 'false', '2022-12-31 23:56:17'),
(24, '1', 'Mengenal Dunia Pergerakan Mahasiswa', 'mengenal-dunia-pergerakan-mahasiswa', '<h2>1. Mahasiswa</h2><p><img src=\"https://penapijar.com/wp-content/uploads/2022/06/Mahasiswa-ideal.jpeg\" alt=\"Bagaimana Menjadi Mahasiswa yang Ideal? - Pena Pijar\"></p><p>&nbsp;Berbicara mengenai mahasiswa lekat kaitannya dengan seluk beluk perjuangan di dunia kampus yang tidak pernah ada habisnya untuk di perbincangkan. Di sudut sudut kampus banyak mahasiswa berkumpul, ber adu gagasan, memikirkan kondisi bangsa yang begitu rumit menjawab tantangan zaman. Dari era demi era, mahasiswa memiliki cara unik dan jitu dalam membangun spirit pergerakan sebagai aksi nyata merawat demokrasi dan pengawal aspirasi masyarakat.&nbsp;</p><p>Secara umum Mahasiswa merupakan bagian dari lapisan masyarakat terdidik yang mendapat kesempatan menikmati dan mengenyam pendidikan di perguruan tinggi. Mahasiswa merupakan generasi muda yang mana memiliki perkembangan usia yang secara emosional selalu bergejolak menuju kematangan serta berproses menemukan jati diri, dan memiliki jiwa yang masih bersih yang belum banyak dicemari kepentingan-kepentingan pragmatis, dan cara berpikirnya selalu beorientasi pada nilai-nilai kebenaran dan ideal.</p><p>Nilai nilai kebenaran yang mahasiswa imani adalah nilai nilai yang berorientasi kepada kepentingan umum selaras dengan harapan masyarakat. Kepedulian daripada kepentingan umum diatas, membuat mahasiswa memiliki suatu gerakan yang masif demi orientasi kecintaan dalam merawat bangsa mengingat tidak bisa dipungkiri birokrasi negeri ini terkadang memainkan peran ketidakberpikan terhadap rakyat atau masyarakat. Bentuk-bentuk pelanggaran baik skala regional, nasional maupun internasional seharusnya menjadi PR bersama tetapi lagi dan lagi mahasiswa menjadi motor ulung untuk menangkal terhadap pelanggaran yang terjadi. Dalam konteks inilah, mahasiswa sering berperan mewarnai perkembangan masyarakat, perubahan sosial maupun politik.&nbsp;</p><p>Gerakan sosial mahasiswa memiliki peran sebagai pengawal kebenaran dan kontrol sosial terhadap lingkungan sosial dan penyelenggaraan pemerintahan pada suatu wilayah maupun negara. Bukan sekedar pemerintah sebagai perhatian besar mahasiswa, tetapi stakeholder yang mengakibatkan dan menciderai masyarakat selalu menjadi garda pengawal dalam menegakan keadilan sesuai dengan ruh pergerakan idealisnya. Maka dari itu, dinamika yang selalu berkembang mengarungi suatu zaman demi zaman, tidak bisa dibendung dengan sebuah janji manis dari penguasa, pemerintah ataupun stakeholder yang merugikan masyarakat umum.</p><p>Tak berlebihan jika mahasiswa diidentikkan dengan berbagai label, di antaranya sebagai agent of change, iron stock, social control dan moral force kadangkala menuntut pertanggungjawaban kepada masyarakat dalam arti luas. Mahasiswa sebagai bagian masyarakat terdidik mesti merespon apa sebenarnya yang sedang terjadi di masyarakat. Berikut ini peneliti sajikan penjelasan singkat tentang agent of change, iron stock, social control dan moral force. Dikatakan gerakan mahasiswa ekstra parlementer, karena gerakan mahasiswa ini merupakan aktivitas/gerakan yang diselenggarakan oleh mahasiswa diluar institusi parlemen/institusi negara untuk memberikan bantuan dan pembelaan (advokasi) terhadap kelompok/masyarakat yang dirugikan atas pelaksanaan kebijakan penguasa yang dirasa tidak memihak kepada kepentingan rakyat.</p><p><br></p><p>&nbsp;Mahasiswa mampu memposiskan diri untuk apa berjuang dan bagaimana berjuang demi kepentingan orang banyak dengan naluri dan ilmu yang di dapat melalui proses perjuangan di kampus. Sebagai ruh insan yang selalu membara, sudah semestinya mengetahui bahwasannya Gerakan Mahasiswa mulai memainkan peranan dalam sejarah sosial sejak berdirinya universitas di Bologna, Paris dan Oxford pada abad ke-13.</p><h2>2. Dinamika Pergerakan Mahasiswa di Indonesia</h2><p><img src=\"https://awsimages.detik.net.id/community/media/visual/2022/04/11/serbu-gedung-dpr-mahasiswa-sampai-pagar-hitam-3_169.jpeg?w=600&amp;q=90\" alt=\"Menyegarkan Kembali Gerakan Mahasiswa\" width=\"680\" style=\"cursor: nwse-resize;\"></p><p>Begitu panjang mengarungi sebuah proses dalam berjuang. Berjuang bukan sekedar mengorbankan semangat, tetapi mengorbankan segalanya entah itu materil, waktu, semangat, gagasan dan lain sebagainya untuk kepentingan bersama. Carut marut berdirinya indonesia titak lepas dari peran mahasiswa/pemuda pada waktu itu yang memiliki ide-ide brilian serta semangat juang yang tinggi demi memerdekakan indonesia. Mahasiswa enggan selalu di perbudak di negeri sendiri. Melihat imperialisme, kolonialisme, dan sistem begitu mepersulit serta memperbudak rakyat menjadikan muncul suatu perlawanan sengit.&nbsp;</p><p>Mulai dari perjuangan pergerakan mahasiswa tahun 1908, dimotori oleh organisasi Budi Oetomo, kemudian lahirnya persatuan muda di segala penjuru di indonesia berupa jong-jong baik jong java, jong sumatera, dan lain sebagainya sampai berikrar di 1 gerakan bernama Sumpah Pemuda 1928, sampai golongan muda mendesak sokarno untuk membacakan teks proklamasi sebagai penanda Merdekanya bangsa indonesia 1945, kemudian peran besar pemuda pada tahun-tahun genting setelah merdekanya Indonesia 1966, 1971, sampai puncak adanya rezim otoriter yang tidak bisa di sentuh sama sekali dengan aspirasi masyakat dan diyakini pemerintahan waktu itu sangat sewenang-wenang tahun 1998.&nbsp;</p><p>Corak dari tahun demi tahun ditambah dengan peristiwa yang begitu memberi kesan dinamis membuat gerakan mahasiswa memiliki marwah begitu kuat hingga masyarakat&nbsp;berdecak kagum. Fungsi agen of change sudah di terapkan dengan baik oleh mahasiswa sebagai insan cendekia. Tonggak sejarah peradaban sosial dan politik selalu di warnai dengan sumbangsih mahasiswa. Gerakan mahasiswa telah memberikan sumbangsih yang luar biasa terhadap perubahan sosial yang ada di Indonesia. Sejarah mencatat gerakan mahasiswa bergreak secara dinamis dengan pasang surutnya. Hal ini terjadi bagaimana gerakan mahasiswa merespon tantangan zaman. gerakan mahasiswa mengalami puncak kejayaannya di era 98 dengan menumbangkan rezim orde baru.&nbsp;</p><p>Pasca reformasi, sekitar 18 tahun berjalan gerakan mahasiswa mengalami beberapa perubahan. Banyak sekali pertanyaan dan kegundahan yang terjadi dalam pikiran rakyat terhadap aktivisme gerakan Mahasiswa. Slogan atau Mitos mahasiswa sebagai agent of change sangat jauh dari realita yang ada sekarang ini. Aktivitas mahasiswa sekarang ini lebih banyak dan bangga jadi peserta tepuk tangan di acara-acara TV, pengembira dalam acara-acara serimonial, duduk manis di pusat perbelanjaan atau di tempat nongkrong modern yang mana semua aktivitas tersebut sangat jauh dari hiruk pikuk kesusahan dan kesulitan hidup rakyat kecil. Di sana mereka dapat leluasa berbicara tentang mode pakaian, artis, film terbaru dan populer dan selalu mencibir setiap kali ada demo yang memacetkan jalan yang memperjuangkan hak masyarakat kecil dan terpinggirkan. Sehingga kehidupan para mahasiswa pada era tahun 80-an kembali lagi di jaman sekarang ini yang sering dibuat jargon oleh masyarakat umum bahwa mahasiswa tidak lebih sebagai “menara gading” yang kehidupannya sangat rapuh.</p><p>Melihat kondisi seperti ini justru gerakan mahasiswa seolah kehilangan arah gerakannya sehingga terpolarisasi kepada banyak kutub. Sebagian mahasiswa telah terlena dalam euforia reformasi sehingga cenderung lebih sering berkutat dengan bangku kuliahnya dibandingkan ikut dalam mempengaruhi proses politik bangsa ini. Menurut Yozar Anwar, pada dasarnya gerakan mahasiswa merupakan gerakan budaya, karena ia memiliki kemandirian dan berdampak politik yang sangat luas. Oleh karena itu mereka tidak boleh cepat puas dengan hasil yang dicapai. Gerakan mahasiswa seharusnya senantiasa menggunakan asas kebenaran politik dan pengungkapan kebenaran publik sekaligus. Selain itu, budaya Indonesia yang cenderung cepat puas dengan keadaan dan tidak peduli dengan perkembangan karena sibuk sendirian, tidaklah patut menjadi paradigma gerakan mahasiswa.&nbsp;</p><p>Ada pula yang terkooptasi oleh kepentingan politik sesaat, ataupun berafiliasi kepada partai yang sudah ada, sehingga pola gerakan dan isu yang dibangun sudah tereduksi oleh kepentingan golongannya. Ini merupakan gejala kemunduruan gerakan mahasiswa, karena stigma yang telah dikenakan kepada mahasiswa sebagai gerakan yang independen dan mengedepankan kepentingan rakyat, bukan golongannya. Ketidakpastian politik di negeri ini, pasca reformasi yang digulirkan oleh gerakan mahasiswa, menggugah berbagai elemen bangsa untuk kembali mempertanyakan eksistensi gerakan mahasiswa dalam perjalanan politik bangsa ini. Gerakan mahasiswa dituntut untuk kembali melakukan perubahan signifikan guna memperbaiki kerusakan yang terjadi di negeri ini.&nbsp;</p><p>Di sisi lain kehidupan mahasiswa dalam bingkai pergerakan organisasi cenderung terkotak-kotakan dengan isu-isu elit yang membuat mahasiswa mengingat sebuah masa lalu yang tidak mereka alami. Mahasiswa seringkali terjebak pada romantisme masa lalu yang mereka dapatkan dari berbagai media. Mereka dibuat seperti seorang baru pertama kali mengenal cinta kemudian ditinggal kekasih. Prestasi bagi mereka adalah ketika berhasil mencapai IPK tinggi, membuat event besar dengan mendatangkan artis terkenal. Itulah kebanggaan mereka yang semua itu merupakan kegiatan yang masih jauh dari kenyataan yang akan mereka hadapi setelah keluar dari kehidupan kampus. Akankah seperti itu terus-menerus mindset yang dibangun ? apakah mahasiswa lupa dengan biaya mahal hanya sekedar mendapatkan ijazah berupa angka bukan value yang berguna membangun masyarakat ?.&nbsp;</p><p>Kalau kita menilik kembali kebelakang bahwasannya mahasiswa masuk kedalam ruang organisasi adalah mengembangkan potensi diri dan intelektual secara nyata yang bisa diperoleh dari pendidikan non formal diluar bangku kuliah. Secara prinsip,&nbsp;mahasiswa diharapkan memiliki semua aspek yang dibutuhkan dalam membangun masyarakat. Kemudian, ada pertanyaan besar yang muncul di benak, sesensitif apa organisasi mahasiswa mendengar jeritan ketidak adilan yang muncul di tengah-tengah masyarakat ? lalu, peran seperti apa organisasi mahasiswa dalam melakukan aktualisasi pembangunan sumber daya masyarakat ?.&nbsp;pertanyaan inilah yang wajib kita jawab dalam bentuk aksi nyata, karya nyata dan pembangunan nyata baik softskill ataupun hardskill. Barulah organisasi mahasiswa memiliki peranan arti nyata di mata masyarakat.&nbsp;</p><p>Dalam menjawab tantang peran dan fungsi mahasiswa saat ini, di jaman modern sekarang ini yang serba super canggih mahasiswa yang merupakan insan intelektual insan cendekia yang merupakan harapan bangsa nantinya akan mengambil alih semua tanggung jawab bangsa dari generasi menuju generasi harus selalu berbenah diri mengingat tongkat estafet tidak lama akan beralih. Adapun langkah yang bisa dilakukan seperti pengawalan aspirasi masyarakat, control terhadap kebijakan pemerintah, rezim yang dianggap tidak berpihak kepada rakyat, kita harus memanfaatkan ruang dan kemampuan kita semua untuk mendengar dan melihat fenomena yang terjadi dilingkungan kita, terutama permasahan yang dialami oleh masyarakat. Semua itu bisa dikerjakan dengan melakukan suatu pergerakan ilmiah dengan mengadakan diskusi ilmiah, dialog publik, seminar, audiensi yang mengambil topik tentang fenomena-fenomena yang terjadi di masyarakat terutama yang sesuai dengan keilmuan trending topic. mahasiswa selaku insan terdidik harus mampu memposisikan diri dalam permasalahan apapun. Perjuangan mahasiswa tidak selalu melulu turun kejalanan seperti era tahun-tahun sebelumnya karena sekarang ini sudah banyak ruang dan media yang dapat dimanfaatkan. Didalam kita berjuang mengaspirasikan ketidakadilan dan ketidakkonsisten pemerintah sesuai dengan idealisme dan kebenaran yang diimani, mahasiswa juga harus cerdas dan bertanggung jawab akan tindakan yang di ambil.</p><p><br></p><p><strong>Oleh:</strong>&nbsp;&nbsp;&nbsp;<strong>Kementerian Analisis dan Aksi Strategis</strong></p><p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BEM unwiku 2022</strong></p><p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kabinet Muara Perubahan</strong></p><p><br></p><p><strong>Referensi literatur :&nbsp;</strong></p><p>Anwar, Yozar. 1982. Protes Kaum Muda!. Jakarta: PT Variasi Jaya.</p><p>Ichsan Pahruddin, “Pergerakan Mahasiswa” diakses dari Ichsanpahruddin.wordpress.com</p><p>Budiman, Arief. 1983 Peranan Mahasiswa sebagai Inteligensia, dalam Aswab Mahasin dan Ismet Natsir (peny.) Cendekiawan dan Politik, LP3ES.</p><p>Prasetyantoko, A. dan Wahyu Indriyo, Wahyu. 2001. Gerakan Mahasiswa dan Demokrasi di Indonesia. Jakarta: Yayasan Hak Azasi Manusia, Demokrasi dan Supremasi Hukum.</p><p><strong>Sumber Gambar :</strong></p><p><a href=\"https://ilhammuzakki.com/saya-mahasiswa-benarkah-17a696526c98\" target=\"_blank\" style=\"color: rgb(33, 37, 41); background-color: transparent;\">https://ilhammuzakki.com/saya-mahasiswa-benarkah-17a696526c98</a></p><p><a href=\"https://independensi.com/2019/09/27/pergerakan-mahasiswa-harus-kristis-dan-konstruktif/\" target=\"_blank\" style=\"color: rgb(33, 37, 41);\">https://independensi.com/2019/09/27/pergerakan-mahasiswa-harus-kristis-dan-konstruktif/</a></p>', 'download_(4).png', 'Sumber Gambar: https://independensi.com/2019/09/27/pergerakan-mahasiswa-harus-kristis-dan-konstruktif/', 'false', '2023-01-01 00:05:25');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `message`, `status`, `created_at`) VALUES
('65be7507134126.87700070', '.htaccess', 'mbuhsapa399@gmail.com', 'pesann lur', '0', '2024-02-03 17:16:55');

-- --------------------------------------------------------

--
-- Table structure for table `filosofi_logo`
--

CREATE TABLE `filosofi_logo` (
  `id` bigint NOT NULL,
  `id_landing` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `img_logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama_element` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `makna_element` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `filosofi_logo`
--

INSERT INTO `filosofi_logo` (`id`, `id_landing`, `img_logo`, `nama_element`, `makna_element`) VALUES
(18, '65916f11ca88f6.76787631', '65916f11ca88f676787631Warna_penyusun.png', 'Warna penyusun', 'Warna Orange : Memberi makna sang muara yang memiliki semangat tinggi untuk mengarungi perubahan.\r\nBackground putih : melambangkan perdamaian dan kesucian.'),
(19, '65916f11ca88f6.76787631', '65916f11ca88f676787631Bintang_bersudut_lima.png', 'Bintang bersudut lima', 'Melambangkan sebuah cahaya yang menyinari semua lini di universitas dengan keceriaan serta melambangkan Pancasila sebagai pedoman yang diyakini oleh Mahasiswa Unwiku.'),
(20, '65916f11ca88f6.76787631', '65916f11ca88f676787631Garis_tiga_mendayu.png', 'Garis tiga mendayu', 'Memberi makna Tri Darma keperguruan tinggi yang harus ditunaikan oleh Mahasiswa Unwiku.'),
(21, '65916f11ca88f6.76787631', '65916f11ca88f676787631Garis_melekuk_menyilang.png', 'Garis melekuk menyilang', 'Melambangkan kebersamaan untuk kolaborasi dan bersinergi dengan elemen apapun.'),
(22, '65916f11ca88f6.76787631', '65916f11ca88f676787631Lima_Kelopak_Bunga_Wijayakusuma.png', 'Lima Kelopak Bunga Wijayakusuma', 'Melambangkan lima fakultas yang ada di Universitas Wijayakusuma Purwokerto'),
(23, '65916f11ca88f6.76787631', '65916f11ca88f676787631Lingkaran.png', 'Lingkaran', 'Melambangkan simbol dari konsentrasi serta fokus yang tinggi dalam menggapai tujuan bersama untuk menunaikan hal baik.'),
(25, '659ae8b6052810.72512880', '659ae8b605281072512880Api.png', 'Api', 'Sebagai salah satu unsur yang terkandung dalam logo kabinet yang mempunyai makna sebagai simbol \"nyala\" untuk senantiasa menyalakan cinta untuk mewujudkan asa serta menjadi penerang, petunjuk, dan semangat yang terus membara.'),
(26, '659ae8b6052810.72512880', '659ae8b605281072512880Burung_Elang.png', 'Burung Elang', 'Burung Elang merupakan manifestasi kepribadian BEM Unwiku 2023 dan menjadi simbol harapan yang bermakna Mampu bertransformasi, kerja keras, fokus, mandiri, tidak pernah gentar mengarungi langit dalam kesendirian dan bahkan dahsyatnya badai dimanfaatkan untuk menambah daya jelajah.'),
(27, '659ae8b6052810.72512880', '659ae8b605281072512880Bunga_Wijayakusuma.png', 'Bunga Wijayakusuma', 'Sebagai salah satu representatif dari Universitas Wijayakusuma yang mempunyai simbol bunga Wijayakusuma yang bermakna agar dapat menebar kebermanfaatan dan kebaikan untuk almamater dan bangsa.'),
(28, '659ae8b6052810.72512880', '659ae8b6052810725128805_Warna_Fakultas.png', '5 Warna Fakultas', 'menjadi representatif atas fakultas yang ada di Universitas Wijayakusuma sebagai perwujudan dan harapan agar dapat menjadi representatif semua fakultas.');

-- --------------------------------------------------------

--
-- Table structure for table `fokus_isu`
--

CREATE TABLE `fokus_isu` (
  `id` bigint NOT NULL,
  `id_landing` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lingkup` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `poin_fokus` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fokus_isu`
--

INSERT INTO `fokus_isu` (`id`, `id_landing`, `lingkup`, `poin_fokus`) VALUES
(1, '659ae8b6052810.72512880', 'Internal', 'Kebijakan Kampus, Fasilitas, Kekerasan Seksual, Kesehatan Mental, Bantuan Biaya Pendidikan'),
(4, '659ae8b6052810.72512880', 'Regional', 'Pemekaran Kab. Banyumas, Konflik Agraria, Kesehatan Masyarakat'),
(5, '659ae8b6052810.72512880', 'Nasional', 'Hukum dan Ham, Lingkungan Hidup, Korupsi, Pendidikan Tinggi, Kebijakan Publik, Perampasan Tanah & Ruang Hidup'),
(6, '65916f11ca88f6.76787631', 'Internal', 'Kebijakan Kampus, Fasilitas, Kekerasan Seksual, Kesehatan Mental, Bantuan Biaya Pendidikan'),
(7, '65916f11ca88f6.76787631', 'Regional', 'Pemekaran Kab. Banyumas, Konflik Agraria, Kesehatan Masyarakat\r\n'),
(8, '65916f11ca88f6.76787631', 'Nasional', 'Hukum dan Ham, Lingkungan Hidup, Korupsi, Pendidikan Tinggi, Kebijakan Publik');

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

CREATE TABLE `identitas` (
  `id` bigint NOT NULL,
  `nama_website` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `address` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `url` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `maps` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `keyword` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `sosmed` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `no_telp` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `favicon` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`id`, `nama_website`, `email`, `address`, `url`, `maps`, `keyword`, `description`, `sosmed`, `no_telp`, `favicon`) VALUES
(1, 'BEM UNWIKU', 'medkominfobemunwiku@gmail.com', 'Jl. Raya Beji Karangsalam No.25 Kec. Kedungbanteng, Kab. Banyumas, Jawa Tengah 53152', 'https://bem-unwiku.com', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d989.1472447212969!2d109.21664152922726!3d-7.399865369730905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655fe7b8e7d637%3A0x4b46e16c75652b78!2sSekretariat%20BEM%20UNWIKU%20Purwokwerto!5e0!3m2!1sid!2sid!4v1672148845997!5m2!1sid!2sid', 'BEM Unwiku, bem unwiku, bem unwiku com, website bem unwiku, landing page bem unwiku, blog bem unwiku, company profile bem unwiku, unwiku indonesia', 'BEM Unwiku merupakan Lembaga Tinggi dalam kepemerintahan mahasiswa dilingkungan Lembaga Kemahasiswaan Universitas Wijayakusuma Purwokerto. BEM Unwiku hadir untuk mewujudkan citacita Yayasan Wijayakusuma yang ingin berperan secara aktif melaksanakan Pembangunan Nasional.\r\n\r\nDalam implementasi upaya perwujudan tersebut, BEM Unwiku dinahkodai oleh Presiden sebagai pimpinan BEM Unwiku dan  idampingi oleh Wakil Presiden serta dibantu oleh para Menteri Koordinator dan Menteri-Menterinya.', 'https://www.instagram.com/bem_unwiku, https://www.tiktok.com/@bemunwiku, https://www.youtube.com/channel/UCtRSMC8d3r5pLkBHa-Kflsw, https://twitter.com/Bem_Unwiku, https://www.facebook.com/bem.unwiku', '08998096556', 'favicon.png');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int NOT NULL,
  `nama_kategori` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `kategori_seo` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `status` enum('true','false') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT 'true',
  `sidebar` int NOT NULL,
  `gambar_utama` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`, `kategori_seo`, `status`, `sidebar`, `gambar_utama`) VALUES
(1, 'Kajian', 'kajian', 'true', 1, 'cover-kajiann.jpg'),
(2, 'Teknologi', 'teknologi', 'true', 3, 'cover-Kegiatan.jpg'),
(12, 'Press Release', 'press-release', 'true', 2, 'cover-Politik.jpg'),
(13, 'Tips & Trick', 'tips-&-trick', 'true', 4, ''),
(14, 'Best Apreciation', 'best-apreciation', 'true', 5, '');

-- --------------------------------------------------------

--
-- Table structure for table `kunjungan`
--

CREATE TABLE `kunjungan` (
  `ip` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  `tanggal` date NOT NULL,
  `hits` int NOT NULL DEFAULT '1',
  `online` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kunjungan`
--

INSERT INTO `kunjungan` (`ip`, `tanggal`, `hits`, `online`) VALUES
('::1', '2023-12-30', 38, '1703980243'),
('192.168.0.16', '2023-12-30', 4, '1703922626'),
('192.168.0.16', '2023-12-29', 1, ''),
('192.168.0.1', '2023-12-29', 1, ''),
('192.168.0.3', '2023-12-29', 1, ''),
('192.168.0.1', '2023-12-28', 1, ''),
('192.168.0.6', '2023-12-28', 1, ''),
('192.168.0.1', '2023-12-26', 1, ''),
('192.168.0.16', '2023-12-27', 1, ''),
('192.168.0.3', '2023-12-27', 1, ''),
('192.168.0.13', '2023-12-27', 1, ''),
('192.168.0.33', '2023-12-27', 1, ''),
('192.168.0.36', '2023-12-27', 1, ''),
('192.168.0.1', '2023-12-29', 1, ''),
('192.168.0.3', '2023-12-29', 1, ''),
('192.168.0.4', '2023-12-29', 1, ''),
('192.168.0.1', '2023-12-29', 1, ''),
('192.168.0.16', '2023-12-29', 1, ''),
('192.168.0.12', '2023-12-29', 1, ''),
('192.168.0.14', '2023-12-29', 1, ''),
('192.168.0.51', '2023-12-29', 1, ''),
('192.168.0.52', '2023-12-29', 1, ''),
('192.168.0.53', '2023-12-29', 1, ''),
('192.168.0.54', '2023-12-29', 1, ''),
('192.168.0.55', '2023-12-29', 1, ''),
('192.168.0.56', '2023-12-29', 1, ''),
('192.168.0.4', '2023-12-30', 5, '1703980390'),
('192.168.0.1', '2023-12-25', 1, ''),
('192.168.0.2', '2023-12-25', 1, ''),
('192.168.0.3', '2023-12-25', 1, ''),
('192.168.0.4', '2023-12-25', 1, ''),
('192.168.0.5', '2023-12-25', 1, ''),
('192.168.0.6', '2023-12-25', 1, ''),
('192.168.0.7', '2023-12-25', 1, ''),
('192.168.0.8', '2023-12-25', 1, ''),
('192.168.0.9', '2023-12-25', 1, ''),
('192.168.0.10', '2023-12-25', 1, ''),
('192.168.0.11', '2023-12-25', 1, ''),
('192.168.0.12', '2023-12-25', 1, ''),
('192.168.0.13', '2023-12-25', 1, ''),
('192.168.0.14', '2023-12-25', 1, ''),
('192.168.0.15', '2023-12-25', 1, ''),
('192.168.0.16', '2023-12-25', 1, ''),
('192.168.0.17', '2023-12-25', 1, ''),
('192.168.0.18', '2023-12-25', 1, ''),
('192.168.0.19', '2023-12-25', 1, ''),
('192.168.0.20', '2023-12-25', 1, ''),
('192.168.0.1', '2023-12-24', 1, ''),
('192.168.0.2', '2023-12-24', 1, ''),
('192.168.0.3', '2023-12-24', 1, ''),
('192.168.0.4', '2023-12-24', 1, ''),
('192.168.0.5', '2023-12-24', 1, ''),
('192.168.0.6', '2023-12-24', 1, ''),
('192.168.0.7', '2023-12-24', 1, ''),
('192.168.0.8', '2023-12-24', 1, ''),
('192.168.0.9', '2023-12-24', 1, ''),
('192.168.0.10', '2023-12-24', 1, ''),
('192.168.0.11', '2023-12-24', 1, ''),
('192.168.0.12', '2023-12-24', 1, ''),
('192.168.0.13', '2023-12-24', 1, ''),
('192.168.0.14', '2023-12-24', 1, ''),
('192.168.0.15', '2023-12-24', 1, ''),
('192.168.0.16', '2023-12-24', 1, ''),
('192.168.0.1', '2023-12-23', 1, ''),
('192.168.0.2', '2023-12-23', 1, ''),
('192.168.0.3', '2023-12-23', 1, ''),
('192.168.0.4', '2023-12-23', 1, ''),
('192.168.0.5', '2023-12-23', 1, ''),
('192.168.0.6', '2023-12-23', 1, ''),
('192.168.0.7', '2023-12-23', 1, ''),
('192.168.0.8', '2023-12-23', 1, ''),
('192.168.0.9', '2023-12-23', 1, ''),
('192.168.0.10', '2023-12-23', 1, ''),
('192.168.0.11', '2023-12-23', 1, ''),
('192.168.0.1', '2023-12-23', 1, ''),
('192.168.0.2', '2023-12-23', 1, ''),
('192.168.0.3', '2023-12-23', 1, ''),
('192.168.0.1', '2023-12-22', 1, ''),
('192.168.0.2', '2023-12-22', 1, ''),
('192.168.0.3', '2023-12-22', 1, ''),
('192.168.0.1', '2023-12-22', 1, ''),
('192.168.0.2', '2023-12-22', 1, ''),
('192.168.0.3', '2023-12-22', 1, ''),
('192.168.0.4', '2023-12-22', 1, ''),
('192.168.0.5', '2023-12-22', 1, ''),
('192.168.0.6', '2023-12-22', 1, ''),
('192.168.0.7', '2023-12-22', 1, ''),
('192.168.0.8', '2023-12-22', 1, ''),
('192.168.0.9', '2023-12-22', 1, ''),
('192.168.0.1', '2023-12-21', 1, ''),
('192.168.0.2', '2023-12-21', 1, ''),
('192.168.0.3', '2023-12-21', 1, ''),
('192.168.0.4', '2023-12-21', 1, ''),
('192.168.0.5', '2023-12-21', 1, ''),
('192.168.0.6', '2023-12-21', 1, ''),
('192.168.0.7', '2023-12-21', 1, ''),
('192.168.0.8', '2023-12-21', 1, ''),
('192.168.0.9', '2023-12-21', 1, ''),
('192.168.0.1', '2023-12-21', 1, ''),
('192.168.0.2', '2023-12-21', 1, ''),
('192.168.0.3', '2023-12-21', 1, ''),
('192.168.0.4', '2023-12-21', 1, ''),
('192.168.0.5', '2023-12-21', 1, ''),
('192.168.0.6', '2023-12-21', 1, ''),
('192.168.0.7', '2023-12-21', 1, ''),
('192.168.0.8', '2023-12-21', 1, ''),
('192.168.0.9', '2023-12-21', 1, ''),
('192.168.0.10', '2023-12-21', 1, ''),
('192.168.0.11', '2023-12-21', 1, ''),
('192.168.0.12', '2023-12-21', 1, ''),
('192.168.0.13', '2023-12-21', 1, ''),
('192.168.0.14', '2023-12-21', 1, ''),
('192.168.0.15', '2023-12-21', 1, ''),
('192.168.0.16', '2023-12-21', 1, ''),
('192.168.0.17', '2023-12-21', 1, ''),
('192.168.0.18', '2023-12-21', 1, ''),
('192.168.0.19', '2023-12-21', 1, ''),
('192.168.0.20', '2023-12-21', 1, ''),
('192.168.0.101', '2023-12-21', 1, ''),
('192.168.0.111', '2023-12-21', 1, ''),
('192.168.0.121', '2023-12-21', 1, ''),
('192.168.0.131', '2023-12-21', 1, ''),
('192.168.0.141', '2023-12-21', 1, ''),
('192.168.0.151', '2023-12-21', 1, ''),
('192.168.0.161', '2023-12-21', 1, ''),
('192.168.0.171', '2023-12-21', 1, ''),
('192.168.0.181', '2023-12-21', 1, ''),
('192.168.0.191', '2023-12-21', 1, ''),
('192.168.0.201', '2023-12-21', 1, ''),
('192.168.0.1', '2023-12-20', 1, ''),
('192.168.0.2', '2023-12-20', 1, ''),
('192.168.0.3', '2023-12-20', 1, ''),
('192.168.0.4', '2023-12-20', 1, ''),
('192.168.0.5', '2023-12-20', 1, ''),
('::1', '2023-12-31', 7, '1704042641'),
('127.0.0.1', '2024-01-04', 1, '1704350577'),
('::1', '2024-01-06', 1, '1704528739'),
('::1', '2024-01-07', 49, '1704651342'),
('::1', '2024-01-08', 23, '1704755810'),
('192.168.0.16', '2024-01-08', 1, '1704711483'),
('::1', '2024-01-09', 5, '1704819020'),
('::1', '2024-01-10', 4, '1704848413'),
('::1', '2024-01-11', 283, '1704988855'),
('::1', '2024-01-12', 230, '1705084167'),
('::1', '2024-01-13', 266, '1705148802'),
('::1', '2024-01-14', 191, '1705255947'),
('::1', '2024-01-14', 191, '1705255947'),
('::1', '2024-01-15', 31, '1705320899'),
('::1', '2024-01-17', 60, '1705517573'),
('::1', '2024-01-18', 40, '1705592663'),
('::1', '2024-01-20', 45, '1705774192'),
('::1', '2024-01-21', 5, '1705861337'),
('36.73.33.120', '2024-01-22', 32, '1705895645'),
('202.43.172.4', '2024-01-22', 1, '1705894359'),
('103.26.211.5', '2024-01-22', 1, '1705894366'),
('103.175.82.68', '2024-01-22', 1, '1705894697'),
('103.184.52.52', '2024-01-22', 6, '1705895780'),
('110.50.81.202', '2024-01-22', 1, '1705895664'),
('103.189.123.6', '2024-01-22', 1, '1705895666'),
('140.213.161.13', '2024-01-22', 5, '1705895958'),
('140.213.173.107', '2024-01-22', 4, '1705906714'),
('115.178.239.190', '2024-01-22', 3, '1705895922'),
('103.144.90.30', '2024-01-22', 1, '1705895858'),
('103.160.201.80', '2024-01-22', 1, '1705895863'),
('140.213.171.108', '2024-01-22', 2, '1705897375'),
('115.178.238.11', '2024-01-22', 1, '1705895878'),
('103.217.224.81', '2024-01-22', 1, '1705895883'),
('27.124.83.163', '2024-01-22', 4, '1705905221'),
('103.144.170.186', '2024-01-22', 2, '1705895949'),
('114.142.170.54', '2024-01-22', 3, '1705896050'),
('112.78.156.165', '2024-01-22', 3, '1705901183'),
('110.138.151.227', '2024-01-22', 10, '1705912953'),
('114.10.18.171', '2024-01-22', 4, '1705897199'),
('115.178.238.6', '2024-01-22', 1, '1705896247'),
('140.213.173.138', '2024-01-22', 1, '1705896258'),
('122.248.46.58', '2024-01-22', 1, '1705896333'),
('114.142.170.51', '2024-01-22', 3, '1705896560'),
('103.144.170.162', '2024-01-22', 2, '1705896638'),
('114.10.127.46', '2024-01-22', 9, '1705904542'),
('114.10.122.238', '2024-01-22', 6, '1705896999'),
('140.213.139.119', '2024-01-22', 2, '1705896941'),
('103.130.128.247', '2024-01-22', 4, '1705896983'),
('140.213.141.206', '2024-01-22', 1, '1705897047'),
('114.79.51.15', '2024-01-22', 1, '1705897257'),
('115.178.237.22', '2024-01-22', 2, '1705897322'),
('182.2.45.142', '2024-01-22', 2, '1705897385'),
('103.144.170.140', '2024-01-22', 4, '1705897584'),
('112.215.165.248', '2024-01-22', 1, '1705897585'),
('114.79.46.15', '2024-01-22', 4, '1705898385'),
('115.178.239.230', '2024-01-22', 1, '1705898510'),
('114.142.168.62', '2024-01-22', 1, '1705899894'),
('103.199.117.107', '2024-01-22', 3, '1705900800'),
('43.128.68.127', '2024-01-22', 2, '1705922065'),
('36.73.33.97', '2024-01-22', 1, '1705901769'),
('114.142.168.28', '2024-01-22', 1, '1705904352'),
('115.178.239.178', '2024-01-22', 1, '1705904364'),
('103.144.170.26', '2024-01-22', 1, '1705905094'),
('112.78.156.166', '2024-01-22', 2, '1705920713'),
('140.213.5.51', '2024-01-22', 1, '1705908439'),
('140.213.35.60', '2024-01-22', 1, '1705908462'),
('193.233.233.29', '2024-01-22', 1, '1705914945'),
('198.235.24.36', '2024-01-22', 1, '1705914955'),
('146.75.160.29', '2024-01-22', 4, '1705926494'),
('112.215.133.73', '2024-01-22', 3, '1705923744'),
('140.213.171.81', '2024-01-22', 1, '1705926088'),
('140.213.163.70', '2024-01-22', 1, '1705929445'),
('43.157.66.187', '2024-01-22', 1, '1705937007'),
('140.213.167.2', '2024-01-22', 2, '1705938530'),
('140.213.175.57', '2024-01-22', 3, '1705938646'),
('114.79.32.65', '2024-01-22', 1, '1705943122'),
('43.135.149.154', '2024-01-22', 1, '1705947172'),
('23.22.35.162', '2024-01-22', 1, '1705958877'),
('3.224.220.101', '2024-01-22', 2, '1705966042'),
('43.159.141.180', '2024-01-23', 1, '1705969104'),
('52.70.240.171', '2024-01-23', 3, '1705969946'),
('23.22.35.162', '2024-01-23', 2, '1705973882'),
('3.224.220.101', '2024-01-23', 2, '1705969938'),
('193.233.233.29', '2024-01-23', 1, '1705970197'),
('43.130.39.101', '2024-01-23', 1, '1705976036'),
('103.125.50.22', '2024-01-23', 2, '1705976671'),
('114.79.46.131', '2024-01-23', 1, '1705980759'),
('36.73.33.120', '2024-01-23', 40, '1705988723'),
('92.223.85.198', '2024-01-23', 1, '1705986398'),
('23.129.64.211', '2024-01-23', 1, '1705993690'),
('43.131.243.208', '2024-01-23', 1, '1705996852'),
('92.223.85.252', '2024-01-23', 1, '1706009630'),
('140.213.175.191', '2024-01-23', 2, '1706019956'),
('43.130.62.164', '2024-01-23', 1, '1706022850'),
('199.45.155.33', '2024-01-23', 1, '1706026468'),
('39.48.186.194', '2024-01-23', 1, '1706027809'),
('199.45.154.49', '2024-01-23', 1, '1706029388'),
('146.190.127.149', '2024-01-23', 1, '1706033919'),
('43.135.149.154', '2024-01-23', 1, '1706033991'),
('156.146.35.180', '2024-01-23', 2, '1706040001'),
('178.254.24.91', '2024-01-23', 1, '1706042555'),
('138.199.60.178', '2024-01-23', 1, '1706042907'),
('150.109.16.20', '2024-01-23', 1, '1706044331'),
('146.70.137.106', '2024-01-23', 1, '1706044838'),
('43.133.38.182', '2024-01-24', 1, '1706055503'),
('205.210.31.54', '2024-01-24', 1, '1706056095'),
('43.131.48.214', '2024-01-24', 2, '1706109207'),
('86.106.74.251', '2024-01-24', 2, '1706067358'),
('128.199.101.128', '2024-01-24', 2, '1706077715'),
('34.106.182.30', '2024-01-24', 2, '1706083095'),
('67.220.86.160', '2024-01-24', 1, '1706090818'),
('138.199.22.229', '2024-01-24', 1, '1706095537'),
('186.179.33.40', '2024-01-24', 1, '1706096382'),
('124.156.193.7', '2024-01-24', 1, '1706102623'),
('45.88.97.14', '2024-01-24', 2, '1706110518'),
('43.159.128.149', '2024-01-24', 1, '1706120044'),
('18.197.97.14', '2024-01-24', 1, '1706134925'),
('136.243.220.210', '2024-01-24', 10, '1706138477'),
('43.159.128.172', '2024-01-25', 1, '1706142089'),
('138.199.60.171', '2024-01-25', 3, '1706216298'),
('156.146.35.167', '2024-01-25', 2, '1706148533'),
('43.131.62.4', '2024-01-25', 1, '1706149487'),
('34.106.44.166', '2024-01-25', 1, '1706151339'),
('35.187.98.121', '2024-01-25', 1, '1706179806'),
('194.38.22.71', '2024-01-25', 1, '1706182789'),
('128.90.165.133', '2024-01-25', 1, '1706183387'),
('129.226.147.7', '2024-01-25', 1, '1706189112'),
('129.226.158.26', '2024-01-25', 1, '1706195955'),
('167.99.52.248', '2024-01-25', 1, '1706199531'),
('66.249.74.109', '2024-01-25', 1, '1706202372'),
('138.199.22.234', '2024-01-25', 2, '1706204160'),
('43.153.110.177', '2024-01-25', 1, '1706206702'),
('142.93.231.225', '2024-01-25', 1, '1706209620'),
('192.71.10.105', '2024-01-25', 1, '1706215302'),
('3.17.152.91', '2024-01-25', 1, '1706219064'),
('129.226.146.179', '2024-01-26', 1, '1706228312'),
('66.249.73.101', '2024-01-26', 2, '1706234632'),
('43.134.66.205', '2024-01-26', 1, '1706233334'),
('66.249.73.102', '2024-01-26', 1, '1706234613'),
('43.133.38.182', '2024-01-26', 1, '1706234929'),
('34.174.233.8', '2024-01-26', 2, '1706239259'),
('34.174.188.99', '2024-01-26', 1, '1706256388'),
('34.174.206.62', '2024-01-26', 1, '1706276131'),
('43.135.166.178', '2024-01-26', 1, '1706282130'),
('170.106.82.193', '2024-01-26', 1, '1706293216'),
('43.133.77.208', '2024-01-27', 1, '1706315103'),
('43.133.38.182', '2024-01-27', 1, '1706321449'),
('66.249.73.101', '2024-01-27', 1, '1706324104'),
('65.154.226.171', '2024-01-27', 2, '1706331996'),
('138.199.60.171', '2024-01-27', 1, '1706356286'),
('206.189.34.67', '2024-01-27', 1, '1706363194'),
('50.114.105.89', '2024-01-27', 1, '1706376677'),
('43.153.110.177', '2024-01-27', 1, '1706379580'),
('161.35.166.180', '2024-01-27', 1, '1706382724'),
('170.106.159.160', '2024-01-28', 1, '1706408395'),
('37.27.13.54', '2024-01-28', 1, '1706411271'),
('43.163.1.85', '2024-01-28', 1, '1706426575'),
('208.80.194.41', '2024-01-28', 1, '1706452386'),
('43.159.128.68', '2024-01-28', 1, '1706455061'),
('36.73.35.34', '2024-01-28', 45, '1706461873'),
('93.158.91.24', '2024-01-28', 1, '1706465643'),
('129.226.158.26', '2024-01-28', 1, '1706465781'),
('43.155.136.16', '2024-01-28', 1, '1706477936'),
('43.131.44.218', '2024-01-29', 1, '1706488462'),
('43.131.248.209', '2024-01-29', 1, '1706494455'),
('138.199.60.187', '2024-01-29', 1, '1706496833'),
('36.73.35.34', '2024-01-29', 13, '1706571995'),
('20.52.98.38', '2024-01-29', 1, '1706504798'),
('114.142.171.33', '2024-01-29', 1, '1706514167'),
('54.167.36.155', '2024-01-29', 1, '1706523960'),
('89.187.163.213', '2024-01-29', 1, '1706534535'),
('43.135.149.154', '2024-01-29', 1, '1706541454'),
('43.134.89.111', '2024-01-29', 1, '1706552142'),
('46.101.90.32', '2024-01-29', 1, '1706554700'),
('173.239.254.16', '2024-01-29', 1, '1706564670'),
('::1', '2024-01-29', 1, '1706572674'),
('::1', '2024-01-30', 286, '1706635458'),
('::1', '2024-01-31', 229, '1706709299'),
('192.168.0.16', '2024-02-01', 12, '1706749410'),
('::1', '2024-02-01', 351, '1706815827'),
('::1', '2024-02-02', 159, '1706901139'),
('::1', '2024-02-03', 9, '1706980615');

-- --------------------------------------------------------

--
-- Table structure for table `landing`
--

CREATE TABLE `landing` (
  `id` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `organisasi` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `universitas` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kabinet` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tahun_periode` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `about` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `logo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `slug` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` enum('true','false') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `landing`
--

INSERT INTO `landing` (`id`, `organisasi`, `universitas`, `kabinet`, `tahun_periode`, `about`, `logo`, `slug`, `status`) VALUES
('65916f11ca88f6.76787631', 'Badan Ekesekutif Mahasiswa', 'Universitas Wijayakusuma Purwokerto', 'Muara Perubahan', '2022', 'BEM Unwiku merupakan Lembaga Tinggi dalam kepemerintahan mahasiswa dilingkungan Lembaga Kemahasiswaan Universitas Wijayakusuma Purwokerto. BEM Unwiku hadir untuk mewujudkan cita-cita Yayasan Wijayakusuma yang ingin berperan secara aktif melaksanakan Pembangunan Nasional. \r\nDalam implementasi upaya perwujudan tersebut, BEM Unwiku memiliki asa yang terus digelorakan dalam periode ini dengan sebutan Muara Perubahan. BEM Unwiku dinahkodai oleh Presiden sebagai pimpinan BEM Unwiku dan didampingi oleh Wakil Presiden serta dibantu oleh para Menteri Koordinator dan Menteri-Menterinya.', 'Muara_Perubahan-logo.png', '2022', 'false'),
('659ae8b6052810.72512880', 'Badan Ekesekutif Mahasiswa', 'Universitas Wijayakusuma Purwokerto', 'Nyala Asa', '2023', 'BEM Unwiku merupakan Lembaga Tinggi dalam kepemerintahan mahasiswa dilingkungan Lembaga Kemahasiswaan Universitas Wijayakusuma Purwokerto. BEM Unwiku hadir untuk mewujudkan citacita Yayasan Wijayakusuma yang ingin berperan secara aktif melaksanakan Pembangunan Nasional.\r\n\r\nDalam implementasi upaya perwujudan tersebut, BEM Unwiku memiliki asa yang terus digelorakan dalam periode ini dengan sebutan Nyala Asa. BEM Unwiku dinahkodai oleh Presiden sebagai pimpinan BEM Unwiku dan idampingi oleh Wakil Presiden serta dibantu oleh para Menteri Koordinator dan Menteri-Menterinya.', 'Nyala_Asa-logo.png', '2023', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `pengurus`
--

CREATE TABLE `pengurus` (
  `id` bigint NOT NULL,
  `id_ref` bigint DEFAULT NULL,
  `id_landing` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `level` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jabatan` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `about` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `prodi` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `angkatan` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `foto` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ig` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tiktok` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fb` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `twiter` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengurus`
--

INSERT INTO `pengurus` (`id`, `id_ref`, `id_landing`, `level`, `nama`, `jabatan`, `about`, `prodi`, `angkatan`, `foto`, `ig`, `tiktok`, `fb`, `twiter`) VALUES
(26, NULL, '65916f11ca88f6.76787631', '1', 'Andi Sustiawan', 'Presiden', NULL, 'Ilmu Hukum', '2019', 'Muara_Perubahan-Andi_Sustiawan.webp', '', '', '', ''),
(27, NULL, '65916f11ca88f6.76787631', '1', 'Afif Verdianzah', 'Wakil Presiden', NULL, 'Manajemen ', '2019', 'Muara_Perubahan-Afif_Verdianzah.webp', '', '', '', ''),
(28, NULL, '65916f11ca88f6.76787631', '2', 'Arif Nur Rizqi', 'Menko Manajemen Kabinet', 'Kemenkoan Manajemen Kabinet atau biasa disebut Kemenkoan Menkab merupakan bagian dari BEM Unwiku 2022 yang membawahi 3 kementerian yaitu Kementerian Sekretaris Kabinet, Kementerian Keuangan, dan Kementerian Media Komunikasi & Informasi.', 'Teknik Elektro', '2021', 'Muara_Perubahan-Arif_Nur_Rizqi.webp', 'arifnur.rizqi', '', '', ''),
(32, 28, '65916f11ca88f6.76787631', '3', 'Bulan Larasati', 'Menteri Sekretaris Kabinet', 'Sekertaris Kabinet (SESKAB) adalah Kementerian di bawah Kemenkoan Manajemen Kabinet. Kementerian ini berfokus terhadap administrasi,\r\ninventarisasi barang, dan kesekretariatan dalam rangka membantu kinerja Presiden BEM Unwiku.', 'Administrasi Publik', '2021', 'Muara_Perubahan-Bulan_Larasati.webp', '', '', '', ''),
(33, 32, '65916f11ca88f6.76787631', '4', 'Risma Diah Ayu W', 'Staff Sekretaris Kabinet', NULL, 'Ekonomi Pembangunan', '2021', 'Muara_Perubahan-Risma_Diah_Ayu_W.jpg', '', '', '', ''),
(34, 32, '65916f11ca88f6.76787631', '4', ' Muhammad Hartadi A', 'Staff Muda Sekretaris Kabinet', NULL, 'Teknik Sipil', '2022', 'Muara_Perubahan-_Muhammad_Hartadi_A.jpg', '', '', '', ''),
(35, 32, '65916f11ca88f6.76787631', '4', 'Difa Heralin Pramono', 'Staff Muda Sekretaris Kabinet', NULL, 'Akuntansi', '2022', 'Muara_Perubahan-Difa_Heralin_Pramono.jpg', '', '', '', ''),
(36, 32, '65916f11ca88f6.76787631', '4', 'Ghabby Aghnia Novaida', 'Staff Muda Sekretaris Kabinet', NULL, 'Akuntansi', '2021', 'Muara_Perubahan-Ghabby_Aghnia_Novaida.jpg', '', '', '', ''),
(37, 32, '65916f11ca88f6.76787631', '4', 'Lulu Wanda Rahmawati', 'Staff Muda Sekretaris Kabinet', NULL, 'Akuntansi', '2022', 'Muara_Perubahan-Lulu_Wanda_Rahmawati.jpg', '', '', '', ''),
(38, 28, '65916f11ca88f6.76787631', '3', 'Fahrani Shafa S', 'Menteri Keuangan', NULL, 'Manajemen ', '2020', 'Muara_Perubahan-Fahrani_Shafa_S.webp', '', '', '', ''),
(39, 38, '65916f11ca88f6.76787631', '4', 'Sofi Susanto', 'Staff Keuangan', NULL, 'Manajemen', '2020', 'Muara_Perubahan-Sofi_Susanto.jpg', '', '', '', ''),
(40, 38, '65916f11ca88f6.76787631', '4', 'Salva Asyraf H', 'Staff Keuangan', NULL, 'Administrasi Negara', '2021', 'Muara_Perubahan-Salva_Asyraf_H.jpg', '', '', '', ''),
(41, 38, '65916f11ca88f6.76787631', '4', 'Anindia Putri Apriatin', 'Staff Muda Keuangan', NULL, 'Akuntansi ', '2022', 'Muara_Perubahan-Anindia_Putri_Apriatin.jpg', '', '', '', ''),
(42, 38, '65916f11ca88f6.76787631', '4', 'Julia Astuti Ningtyas', 'Staff Muda Keuangan', NULL, 'Ilmu hukum', '2022', 'Muara_Perubahan-Julia_Astuti_Ningtyas.jpg', '', '', '', ''),
(43, 28, '65916f11ca88f6.76787631', '3', 'Astri Yuliani ', 'Menteri Media Komunikasi & Informasi', NULL, 'Manajemen', '2020', 'Muara_Perubahan-Astri_Yuliani_.webp', '', '', '', ''),
(44, 28, '65916f11ca88f6.76787631', '3', 'Khavisa Dwina Ramaranjani', 'PLT Menteri Media Komunikasi & Informasi', NULL, 'Manajemen', '2020', 'Muara_Perubahan-Khavisa_Dwina_R.png', '', '', '', ''),
(45, 43, '65916f11ca88f6.76787631', '4', 'Azriel Hafid Wardhana', 'Staff Muda Media Komunikasi & Informasi', NULL, 'Arsitektur', '2022', 'Muara_Perubahan-Azriel_Hafid_Wardhana.png', '', '', '', ''),
(46, 43, '65916f11ca88f6.76787631', '4', 'Oktavia Nur Pratiwi', 'Staff Media Komunikasi & Informasi', NULL, 'Ilmu Hukum', '2022', 'Muara_Perubahan-Oktavia_Nur_Pratiwi.png', '', '', '', ''),
(47, 43, '65916f11ca88f6.76787631', '4', 'Panji Permana', 'Staff Media Komunikasi & Informasi', NULL, 'Manajemen', '2022', 'Muara_Perubahan-Panji_Permana.png', '', '', '', ''),
(48, 43, '65916f11ca88f6.76787631', '4', 'Wasikun', 'Staff Media Komunikasi & Informasi', NULL, 'Arsitektur', '2022', 'Muara_Perubahan-Wasikun.png', '', '', '', ''),
(49, NULL, '65916f11ca88f6.76787631', '2', 'Tri Ayu Suciana', 'Menko Relasi Publik', NULL, 'Ilmu Hukum', '2020', 'Muara_Perubahan-Tri_Ayu_Suciana.webp', '', '', '', ''),
(50, NULL, '65916f11ca88f6.76787631', '2', 'Angelia Laras K', 'Menko PLT Relasi Publik', NULL, 'Teknik Sipil', '2020', 'Muara_Perubahan-Angelia_Laras_K.webp', '', '', '', ''),
(51, 50, '65916f11ca88f6.76787631', '3', 'Nur Fatimah ', 'Menteri Dalam Kampus', NULL, 'Manajemen', '2020', 'Muara_Perubahan-Nur_Fatimah_.webp', '', '', '', ''),
(52, 51, '65916f11ca88f6.76787631', '4', 'Syafangatun Hikmah', 'Staff Dalam Kampus', NULL, '', '2021', 'Muara_Perubahan-Syafangatun_Hikmah.jpg', '', '', '', ''),
(53, 51, '65916f11ca88f6.76787631', '4', 'Tyas Hera P ', 'Staff Dalam Kampus', NULL, '', '2020', 'Muara_Perubahan-Tyas_Hera_P_.jpg', '', '', '', ''),
(54, 51, '65916f11ca88f6.76787631', '4', 'Fadli Akhmad', 'Staff Muda Dalam Kampus', NULL, '', '2022', NULL, '', '', '', ''),
(55, 51, '65916f11ca88f6.76787631', '4', 'Via Aminatun', 'Staff Muda Dalam Kampus', NULL, 'Ilmu Hukum', '2022', 'Muara_Perubahan-Via_Aminatun.jpg', '', '', '', ''),
(56, 51, '65916f11ca88f6.76787631', '4', 'Rafi Alifiantoti Wijaya ', 'Staff Muda Dalam Kampus', NULL, '', '2022', NULL, '', '', '', ''),
(57, 51, '65916f11ca88f6.76787631', '4', 'Sarifah Setiani ', 'Staff Muda Dalam Kampus', NULL, '', '2022', NULL, '', '', '', ''),
(58, 51, '65916f11ca88f6.76787631', '4', 'Danendra Ganesh P', 'Staff Muda Dalam Kampus', NULL, 'Peternakan', '2022', 'Muara_Perubahan-Danendra_Ganesh_P.jpg', '', '', '', ''),
(59, 50, '65916f11ca88f6.76787631', '3', 'Shafy Nur Farah D', 'Menteri Luar Kampus', NULL, 'Manajemen ', '2021', 'Muara_Perubahan-Shafy_Nur_Farah_D.webp', '', '', '', ''),
(60, 59, '65916f11ca88f6.76787631', '4', 'Ridwan Dwi Saputra ', 'Staff Luar Kampus', NULL, 'Administrasi Negara', '2021', 'Muara_Perubahan-Ridwan_Dwi_Saputra_.jpg', '', '', '', ''),
(61, 59, '65916f11ca88f6.76787631', '4', 'Erina Fitriani ', 'Staff Luar Kampus', NULL, 'Administrasi Negara', '2021', 'Muara_Perubahan-Erina_Fitriani_.jpg', '', '', '', ''),
(62, 59, '65916f11ca88f6.76787631', '4', 'Akna Kusnaeni ', 'Staff Muda Luar Kampus', NULL, '', '2022', 'Muara_Perubahan-Akna_Kusnaeni_.jpg', '', '', '', ''),
(63, 59, '65916f11ca88f6.76787631', '4', 'Damar Putranto', 'Staff Muda Luar Kampus', NULL, 'Peternakan', '2022', 'Muara_Perubahan-Damar_Putranto.jpg', '', '', '', ''),
(64, 59, '65916f11ca88f6.76787631', '4', 'Berliana Hallah P', 'Staff Muda Luar Kampus', NULL, 'Adm. Publik', '2022', 'Muara_Perubahan-Berliana_Hallah_P.jpg', '', '', '', ''),
(65, 59, '65916f11ca88f6.76787631', '4', 'Toni Suseno ', 'Staff Muda Luar Kampus', NULL, '', '2022', 'Muara_Perubahan-Toni_Suseno_.jpg', '', '', '', ''),
(66, 50, '65916f11ca88f6.76787631', '3', 'Faizal Adi Purnomo', 'Menteri Sosial & Pengabdian Masyarakat', NULL, 'Teknik Elektro', '2021', 'Muara_Perubahan-Faizal_Adi_Purnomo.webp', '', '', '', ''),
(67, 66, '65916f11ca88f6.76787631', '4', ' Farah Aliyya Devi ', 'Staff Sosial & Pengabdian Masyarakat', NULL, 'Administrasi Negara', '2021', 'Muara_Perubahan-_Farah_Aliyya_Devi_.jpg', '', '', '', ''),
(68, 66, '65916f11ca88f6.76787631', '4', 'Wanda Verolin ', 'Staff Sosial & Pengabdian Masyarakat', NULL, 'Manajemen ', '2021', 'Muara_Perubahan-Wanda_Verolin_.jpg', '', '', '', ''),
(69, 66, '65916f11ca88f6.76787631', '4', 'Anisa Cahya Wulandari', 'Staff Muda Sosial & Pengabdian Masyarakat', NULL, '', '2022', 'Muara_Perubahan-Anisa_Cahya_Wulandari.jpg', '', '', '', ''),
(70, 66, '65916f11ca88f6.76787631', '4', 'Andhika Rian Esha S', 'Staff Muda Sosial & Pengabdian Masyarakat', NULL, 'Teknik Sipil', '2022', 'Muara_Perubahan-Andhika_Rian_Esha_S.jpg', '', '', '', ''),
(71, 66, '65916f11ca88f6.76787631', '4', 'Septiana Nur Hikmah', 'Staff Muda Sosial & Pengabdian Masyarakat', NULL, '', '2022', NULL, '', '', '', ''),
(72, 66, '65916f11ca88f6.76787631', '4', 'Danang Lukmantoro', 'Staff Muda Sosial & Pengabdian Masyarakat', NULL, 'Manajemen', '2021', 'Muara_Perubahan-Danang_Lukmantoro.jpg', '', '', '', ''),
(73, 66, '65916f11ca88f6.76787631', '4', 'Nisa Nurul Azizah ', 'Staff Muda Sosial & Pengabdian Masyarakat', NULL, '', '2022', 'Muara_Perubahan-Nisa_Nurul_Azizah_.jpg', '', '', '', ''),
(74, NULL, '65916f11ca88f6.76787631', '2', 'Alan Ardhian R ', 'Menko Politik Pergerakan', NULL, 'Administrasi Negara', '2020', 'Muara_Perubahan-Alan_Ardhian_Ramadhan_.webp', '', '', '', ''),
(75, 74, '65916f11ca88f6.76787631', '3', 'Tedi Wirmansyah ', 'Menteri Analisis & Aksi Strategis', NULL, 'Administrasi Negara ', '2021', 'Muara_Perubahan-Tedi_Wirmansyah_.webp', '', '', '', ''),
(76, 75, '65916f11ca88f6.76787631', '4', 'Sahrul Romadhon', 'Staff Analisis & Aksi Strategis', NULL, 'Manajemen ', '2021', 'Muara_Perubahan-Sahrul_Romadhon.jpg', '', '', '', ''),
(77, 75, '65916f11ca88f6.76787631', '4', 'Yofita Hartanti ', 'Staff Analisis & Aksi Strategis', NULL, 'Manajemen ', '2021', 'Muara_Perubahan-Yofita_Hartanti_.jpg', '', '', '', ''),
(78, 75, '65916f11ca88f6.76787631', '4', 'Anita Widiyanti ', 'Staff Muda Analisis & Aksi Strategis', NULL, '', '2022', NULL, '', '', '', ''),
(79, 75, '65916f11ca88f6.76787631', '4', 'Riswan Adha Muhamad', 'Staff Muda Analisis & Aksi Strategis', NULL, '', '2022', NULL, '', '', '', ''),
(80, 75, '65916f11ca88f6.76787631', '4', 'Doni Anjas Moro', 'Staff Muda Analisis & Aksi Strategis', NULL, '', '2022', 'Muara_Perubahan-Doni_Anjas_Moro.jpg', '', '', '', ''),
(81, 74, '65916f11ca88f6.76787631', '3', 'Lili Utami', 'Menteri Pemberdaya Perempuan', NULL, 'Ilmu Hukum', '2020', 'Muara_Perubahan-Lili_Utami.webp', '', '', '', ''),
(82, 81, '65916f11ca88f6.76787631', '4', 'Alfiyani Nur Riski', 'Staff Pemberdaya Perempuan', NULL, '', '2021', 'Muara_Perubahan-Alfiyani_Nur_Riski.jpg', '', '', '', ''),
(83, 81, '65916f11ca88f6.76787631', '4', 'Aliyyah Nur Fauziah', 'Staff Pemberdaya Perempuan', NULL, '', '2021', 'Muara_Perubahan-Aliyyah_Nur_Fauziah.jpg', '', '', '', ''),
(84, 81, '65916f11ca88f6.76787631', '4', 'Nala Faizatu Rohmah ', 'Staff Pemberdaya Perempuan', NULL, 'Administrasi Negara', '2021', 'Muara_Perubahan-Nala_Faizatu_Rohmah_.jpg', '', '', '', ''),
(85, 81, '65916f11ca88f6.76787631', '4', 'Amanda Jesya Kayla', 'Staff Muda Pemberdaya Perempuan', NULL, 'Administrasi Negara', '2022', NULL, '', '', '', ''),
(86, 81, '65916f11ca88f6.76787631', '4', 'Rizki Ayu Lestari ', 'Staff Muda Pemberdaya Perempuan', NULL, '', '2022', 'Muara_Perubahan-Rizki_Ayu_Lestari_.jpg', '', '', '', ''),
(87, 81, '65916f11ca88f6.76787631', '4', 'Muhamad Nuhzen ', 'Staff Muda Pemberdaya Perempuan', NULL, '', '2022', NULL, '', '', '', ''),
(88, 81, '65916f11ca88f6.76787631', '4', 'Puput Aditiya ', 'Staff Muda Pemberdaya Perempuan', NULL, 'Administrasi Negara', '2022', 'Muara_Perubahan-Puput_Aditiya_.jpg', '', '', '', ''),
(89, 81, '65916f11ca88f6.76787631', '4', 'Abdurafi Ramadhan ', 'Staff Muda Pemberdaya Perempuan', NULL, '', '2022', NULL, '', '', '', ''),
(90, 74, '65916f11ca88f6.76787631', '3', 'Echa Hermalia Putri ', 'Menteri Advokasi & Kesejahteraan Mahasiswa', NULL, 'Administrasi Negara', '2021', 'Muara_Perubahan-Echa_Hermalia_Putri_.webp', '', '', '', ''),
(91, 90, '65916f11ca88f6.76787631', '4', 'Win Febianti', 'Staff Advokasi & Kesejahteraan Mahasiswa', NULL, 'Ilmu Hukum', '2021', NULL, '', '', '', ''),
(92, 90, '65916f11ca88f6.76787631', '4', 'Gusmila Putri Pangestu', 'Staff Advokasi & Kesejahteraan Mahasiswa', NULL, '', '2022', 'Muara_Perubahan-Gusmila_Putri_Pangestu.jpg', '', '', '', ''),
(93, 90, '65916f11ca88f6.76787631', '4', 'Ica Sustriana', 'Staff Muda Advokasi & Kesejahteraan Mahasiswa', NULL, 'Akuntansi', '2022', 'Muara_Perubahan-Ica_Sustriana.jpg', '', '', '', ''),
(94, 90, '65916f11ca88f6.76787631', '4', 'Firdaus Fatwa Nazwa', 'Staff Muda Advokasi & Kesejahteraan Mahasiswa', NULL, '', '2022', NULL, '', '', '', ''),
(95, 90, '65916f11ca88f6.76787631', '4', 'Habib Nur Ikhsan', 'Staff Muda Advokasi & Kesejahteraan Mahasiswa', NULL, 'Teknik Elektro', '2022', 'Muara_Perubahan-Habib_Nur_Ikhsan.jpg', '', '', '', ''),
(96, 90, '65916f11ca88f6.76787631', '4', 'Erika Dwi Arumaningsih', 'Staff Muda Advokasi & Kesejahteraan Mahasiswa', NULL, '', '2022', 'Muara_Perubahan-Erika_Dwi_Arumaningsih.jpg', '', '', '', ''),
(97, NULL, '65916f11ca88f6.76787631', '2', 'Anthony Charles', 'Menko Kemahasiswaan', NULL, 'Ilmu Hukum', '2020', 'Muara_Perubahan-Anthony_Charles.webp', '', '', '', ''),
(98, 97, '65916f11ca88f6.76787631', '3', 'Septiana', 'Menteri Pemberdaya Mahasiswa', NULL, 'Administrasi Negara ', '2021', 'Muara_Perubahan-Septiana.webp', '', '', '', ''),
(99, 98, '65916f11ca88f6.76787631', '4', 'Bobby Putra Rezky R', 'Staff Pemberdaya Mahasiswa', NULL, 'Ilmu Hukum', '2021', 'Muara_Perubahan-Bobby_Putra_Rezky_R.jpg', '', '', '', ''),
(100, 98, '65916f11ca88f6.76787631', '4', 'Meira Ainunnisa', 'Staff Muda Pemberdaya Mahasiswa', NULL, '', '2022', NULL, '', '', '', ''),
(101, 98, '65916f11ca88f6.76787631', '4', 'Yanuar Erivan Setiavan', 'Staff Muda Pemberdaya Mahasiswa', NULL, '', '2022', NULL, '', '', '', ''),
(102, 98, '65916f11ca88f6.76787631', '4', 'Girinda Risqi Fadilah', 'Staff Muda Pemberdaya Mahasiswa', NULL, '', '2022', 'Muara_Perubahan-Girinda_Risqi_Fadilah.jpg', '', '', '', ''),
(103, 98, '65916f11ca88f6.76787631', '4', 'Falah Fernida Nurdian', 'Staff Muda Pemberdaya Mahasiswa', NULL, 'Teknik Sipil', '2022', 'Muara_Perubahan-Falah_Fernida_Nurdian.jpg', '', '', '', ''),
(104, 98, '65916f11ca88f6.76787631', '4', 'Galan Bery Justisiawan', 'Staff Muda Pemberdaya Mahasiswa', NULL, '', '2022', NULL, '', '', '', ''),
(105, 97, '65916f11ca88f6.76787631', '3', 'Ferdian Juan Permana H', 'Menteri Riset & Pengembangan Keilmuan', NULL, 'Teknik Sipil', '2020', 'Muara_Perubahan-Ferdian_Juan_Permana_H.webp', '', '', '', ''),
(106, 105, '65916f11ca88f6.76787631', '4', 'Meike Amalintang C', 'Staff Riset & Pengembangan Keilmuan', NULL, 'Manajemen', '2021', 'Muara_Perubahan-Meike_Amalintang_C.jpg', '', '', '', ''),
(107, 105, '65916f11ca88f6.76787631', '4', 'Dwi Lusi F ', 'Staff Riset & Pengembangan Keilmuan', NULL, 'Manajemen', '2021', 'Muara_Perubahan-Dwi_Lusi_F_.jpg', '', '', '', ''),
(108, 105, '65916f11ca88f6.76787631', '4', 'Shinta Amelia', 'Staff Riset & Pengembangan Keilmuan', NULL, 'Manajemen', '2021', 'Muara_Perubahan-Shinta_Amelia.jpg', '', '', '', ''),
(109, 105, '65916f11ca88f6.76787631', '4', 'Amin Fauzan', 'Staff Muda Riset & Pengembangan Keilmuan', NULL, '', '2022', NULL, '', '', '', ''),
(110, 105, '65916f11ca88f6.76787631', '4', 'Vicky Dwi Firmansyah', 'Staff Muda Riset & Pengembangan Keilmuan', NULL, '', '2022', 'Muara_Perubahan-Vicky_Dwi_Firmansyah.jpg', '', '', '', ''),
(111, 105, '65916f11ca88f6.76787631', '4', 'Jesika Rosi Ameliana', 'Staff Muda Riset & Pengembangan Keilmuan', NULL, '', '2022', 'Muara_Perubahan-Jesika_Rosi_Ameliana.jpg', '', '', '', ''),
(112, 97, '65916f11ca88f6.76787631', '3', 'Prasetya Nur Syahbani ', 'Menteri Kewirausahaan & Ekonomi Kreatif', NULL, 'Ilmu Hukum', '2020', 'Muara_Perubahan-Prasetya_Nur_Syahbani_.webp', '', '', '', ''),
(113, 112, '65916f11ca88f6.76787631', '4', 'Tri Ayu Mulyaningsih', 'Staff Kewirausahaan & Ekonomi Kreatif', NULL, 'Administrasi Negara', '2021', 'Muara_Perubahan-Tri_Ayu_Mulyaningsih.webp', '', '', '', ''),
(114, 112, '65916f11ca88f6.76787631', '4', 'Anggraeni Adetya P ', 'Staff Kewirausahaan & Ekonomi Kreatif', NULL, 'Manajemen', '2021', 'Muara_Perubahan-Anggraeni_Adetya_P_.jpg', '', '', '', ''),
(115, 112, '65916f11ca88f6.76787631', '4', 'Mawar Althof Hanifah', 'Staff Muda Kewirausahaan & Ekonomi Kreatif', NULL, '', '2022', NULL, '', '', '', ''),
(116, 112, '65916f11ca88f6.76787631', '4', 'Adlan Baihqy', 'Staff Muda Kewirausahaan & Ekonomi Kreatif', NULL, 'Peternakan', '2022', 'Muara_Perubahan-Adlan_Baihqy.jpg', '', '', '', ''),
(117, 112, '65916f11ca88f6.76787631', '4', 'Fikra Fahmi Yahya', 'Staff Muda Kewirausahaan & Ekonomi Kreatif', NULL, 'Akuntansi', '2022', 'Muara_Perubahan-Fikra_Fahmi_Yahya.jpg', '', '', '', ''),
(118, NULL, '659ae8b6052810.72512880', '1', 'Alan Ardian R', 'Presiden', NULL, 'Ilmu Adm. Negara', '2020', 'Nyala_Asa-Alan_Ardian_R.png', '', '', '', ''),
(119, NULL, '659ae8b6052810.72512880', '1', 'Angelia Laras K', 'Wakil Presiden', NULL, 'Teknik Sipil', '2020', 'Nyala_Asa-Angelia_Laras_K.png', '', '', '', ''),
(128, NULL, '659ae8b6052810.72512880', '2', 'Nurita Iman Sari', 'Menko Manajemen Kabinet', 'Kemenkoan Manajemen Kabinet merupakan Kemenkoan yang membawahi 4 kementerian yakni Sekretaris Kabinet, Keuangan, Media Komunikasi dan Informasi dan Personalia', 'Arsitektur', '2021', 'Nyala_Asa-Nurita_Iman_Sari.png', 'nuritaa._', '', '', ''),
(129, NULL, '659ae8b6052810.72512880', '2', 'Win Febianti', 'Menko Relasi Publik', 'Kemenkoan Manajemen Kabinet merupakan Kemenkoan yang membawahi 4 kementerian yakni Sekretaris Kabinet, Keuangan, Media Komunikasi dan Informasi dan Personalia', 'Ilmu Hukum', '2021', 'Nyala_Asa-Win_Febianti.png', '', '', '', ''),
(130, NULL, '659ae8b6052810.72512880', '2', 'Muhammad Rakha Isanto', 'Menko Politik Pergerakan', 'Kemenkoan Manajemen Kabinet merupakan Kemenkoan yang membawahi 4 kementerian yakni Sekretaris Kabinet, Keuangan, Media Komunikasi dan Informasi dan Personalia', 'Akuntansi', '2021', 'Nyala_Asa-Muhammad_Rakha_Isanto.png', '', '', '', ''),
(131, NULL, '659ae8b6052810.72512880', '2', 'Nala Faizatu Rohmah', 'Menko Kemahasiswaan', 'Kemenkoan Manajemen Kabinet merupakan Kemenkoan yang membawahi 4 kementerian yakni Sekretaris Kabinet, Keuangan, Media Komunikasi dan Informasi dan Personalia', 'Administrasi Publik', '2021', 'Nyala_Asa-Nala_Faizatu_Rohmah.png', '', '', '', ''),
(134, 129, '659ae8b6052810.72512880', '3', 'Arif Abdul Wahab', 'Menteri Luar Negeri', 'Kementerian Luar Negeri adalah kementerian yang mengatur dan mengelola hubungan baik berupa kerjasama ataupun kemitraan yang dilakukan BEM Unwiku dengan pihak luar. pihak luar dapat berupa lembaga profit/nonprofit, alumni, dan lain sebagainya.', 'Teknik Elektro', '2021', 'Nyala_Asa-Arif_Abdul_Wahab.png', '', '', '', ''),
(137, 128, '659ae8b6052810.72512880', '3', 'Anggi Widianingsih', 'Menteri Sekretaris Kabinet', 'Kementerian Sekretaris Kabinet bertanggung jawab terhadap pengelolaan dan penataan administrasi, pengelolaan inventarisasi terhadap aset maupun data yang dimiliki BEM Unwiku, serta bertanggung jawab atas kebersihan dan kerapihan Sekretariat BEM Unwiku', 'Manajemen', '2022', 'Nyala_Asa-Anggi_Widianingsih.png', '', '', '', ''),
(138, 128, '659ae8b6052810.72512880', '3', 'Julia Astuti Ningtyas', 'Menteri Keuangan', 'Kementerian Keuangan adalah kementerian yang berfungsi mengelola administrasi keuangan dan menciptakan kemandirian ekonomi BEM Unwiku\r\ndengan mengelola keuangan usaha, penyerapan anggaran, dan sumbersumber pendanaan.', 'Ilmu Hukum', '2022', 'Nyala_Asa-Julia_Astuti_Ningtyas.png', '', '', '', ''),
(139, 128, '659ae8b6052810.72512880', '3', 'Berliana Hallah Pramesthi', 'Menteri Personalia', 'Kementerian Personalia adalah kementerian yang bertanggung jawab untuk menjalankan kaderisasi di internal BEM Unwiku, memberikan upaya\r\npenjagaan, pengawasan, evaluasi, serta penilaian dalam mengembangkan potensi dan kualitas sumber daya manusia pada pengurus BEM Unwiku,\r\nmenciptakan lingkungan organisasi yang nyaman sesuai ruang manajerial.\r\n', 'Adm. Publik', '2022', 'Nyala_Asa-Berliana_Hallah_Pramesthi.png', '', '', '', ''),
(140, 128, '659ae8b6052810.72512880', '3', 'Achmad Aldy Romli', 'Menteri Media Komunikasi dan Informasi', 'Kementerian Media Komunikasi dan Informasi adalah kementerian yang berperan dalam mengumpulkan, mengolah dan mempublikasikan informasi melalui media BEM Unwiku serta menjadi sarana komunikasi yang komprehensif untuk mahasiswa baik dalam maupun luar Universitas Wijayakusuma Purwokerto,bahkan untuk khalayak umum dengan memanfaatkan perkembangan teknologi\r\n', 'Manajemen', '2022', 'Nyala_Asa-Achmad_Aldy_Romli.png', '', '', '', ''),
(141, 129, '659ae8b6052810.72512880', '3', 'Azriel Hafid Wardhana', 'Menteri Dalam Negeri', 'Kementerian Dalam Negeri merupakan kementerian yang fokus pada aspek internal sebagai sarana untuk memfasilitasi para elemen untuk berkumpul dan berdialog mengenai keberlangsungan setiap fakultas yang ada di Unwiku ke depan baik secara lembaga atau keseluruhan serta menampung aspirasi dari masingmasing lembaga yang ada di tingkat fakultas.', 'Arsitektur', '2022', 'Nyala_Asa-Azriel_Hafid_Wardhana.png', '', '', '', ''),
(142, 129, '659ae8b6052810.72512880', '3', 'Girinda Risqi Fadilah', 'Menteri Sosial dan Lingkungan Hidup', 'Kementerian yang mempunyai tugas untuk melaksanakan kepedulian terhadap masyarakat sekitar pada khususnya dan masyarakat umum melalui program kemanusiaan dan upaya kepedulian terhadap lingkungan hidup. Kementerian ini didesain untuk berkorelasi dengan kepedulian-kepedulian baik sosial maupun lingkungan hidup.', 'Peternakan', '2022', 'Nyala_Asa-Girinda_Risqi_Fadilah.png', '', '', '', ''),
(143, 129, '659ae8b6052810.72512880', '3', 'Danendra Ganesh Pratama', 'Menteri Pengabdian dan Pemberdaya Desa', 'Kementerian yang berfokus pada pengabdian masyarakat melalui pemberdayaan masyarakat desa, bina desa, dan program pengabdian yang berkesinambungan selama satu periode. Kementerian ini juga terfokus terhadap mitra desa yang dijadikan mitra untuk satu periode BEM Unwiku.', 'Peternakan', '2022', 'Nyala_Asa-Danendra_Ganesh_Pratama.png', '', '', '', ''),
(144, 130, '659ae8b6052810.72512880', '3', 'Nilnal Muna', 'Menteri Analisis Isu Strategis', 'Berperan melakukan analisis dan pengolahan isu strategis sehingga menghasilkan kajian ilmiah sebagai bentuk pengambilan sikap terhadap isu di tingkat kampus,regional, dan nasional serta sebagai wadah aspirasi mahasiswa Unwiku sebgai pertimbangan dalam melakukan penyikapan isu strategis', 'Manajemen', '2022', 'Nyala_Asa-Nilnal_Muna.png', '', '', '', ''),
(145, 130, '659ae8b6052810.72512880', '3', 'Adhika Rian Esha Saputra', 'Menteri Aksi dan Propaganda', 'Kementrian Aksi dan Propaganda adalah kementerian yang bertugas untuk menyampaikan keresahan dan aspirasi dari masyarakat, membangun eskalasi pergerakan mahasiswa, serta menciptakan opini publik dalam rangka merespon dinamika isu yang ada pada lingkup kampus,\r\nregional, maupun nasional. Kementrian ini juga bertujuan untuk membangun relasi dan komunikasi politik antar elemen pergerakan mahasiswa baik intrakampus maupun ekstrakampus Universitas Wijayakusuma', 'Teknik Sipil', '2022', 'Nyala_Asa-Adhika_Rian_Esha_Saputra.png', '', '', '', ''),
(146, 130, '659ae8b6052810.72512880', '3', 'Maura Shalma Adelia', 'Menteri Pemberdaya Perempuan', 'Kementerian Pemberdayaan Perempuan merupakan kementerian yang dibentuk khusus membahas permasalahan maupun isu terkait perempuan dan anak yang ada di Indonesia, khususnya di Banyumas. Kementerian ini hadir untuk mengangkat isu tentang perempuan dan anak baik dalam kasus asusila, pelecehan seksual, maupun membangkitkan kembali fungsi, peran dan kedudukan perempuan di lingkungan keluarga aataupun masyarakat.', 'Administrasi Publik', '2022', 'Nyala_Asa-Maura_Shalma_Adelia.png', '', '', '', ''),
(147, 130, '659ae8b6052810.72512880', '3', 'Bintang Algifary Lelesuwa', 'Menteri Advokasi dan Kesejahteraan Mahasiswa', 'Kementerian Adkesma adalah sebuah kementerian yang hadir untuk menjembatani, melayani, serta mengawal kesejahteraan mahasiswa akan sebuah kebutuhan yang pro mahasiswa dalam 4 aspek, yaitu pengadvokasian, Fasilitas Kampus, Informasi Kemahasiswaan, dan Kesejahteraan\r\nMahasiswa. Kementerian Adkesma ini juga bertujuan untuk mengadvokasikan sebuah kebijakan atau keputusan dari Universitas untuk mahasiswa yang tadinya tidak pro untuk mahasiswa,kemudian menjadi pro untuk mahasiswa.', 'Hukum', '2022', 'Nyala_Asa-Bintang_Algifary_Lelesuwa.png', '', '', '', ''),
(148, 131, '659ae8b6052810.72512880', '3', 'Mawar Althof Hanifah', 'Menteri Pengembangan Potensi dan Sumberdaya Mahasiswa', 'Kementerian PPSDM merupakan kementerian yang berperan sebagai fasilitator dalam upaya pelaksanaan dan penyelarasan proses kaderisasi serta pengembangan potensi mahasiswa khususnya dalam aspek kepemimpinan, demi terwujudnya mahasiswa Unwiku yang adaptif, proaktif, dan kontributif dalam berorganisasi', 'Manajemen', '2022', 'Nyala_Asa-Mawar_Althof_Hanifah.png', '', '', '', ''),
(149, 131, '659ae8b6052810.72512880', '3', 'Nabil Faizal', 'Menteri Riset Pengembangan Literasi & Keilmuan', 'Merupakan kementerian yang berfokus dalam memacu dan meningkatkan prestasi Mahasiswa Universitas Wijayakusuma Purwokerto. Meliputi bidang akademik dan non akademik melalui pemerkayaan hasil penelitian berupa saintis dan sastra. Sebagai upaya dan sarana informasi seputar keilmiahan dengan menyediakan wadah berbagai perlombaan yang dapat mengupgrade wawasan bagi Mahasiswa Universitas Wijayakusuma Purwokerto.', 'Teknik Sipil', '2022', 'Nyala_Asa-Nabil_Faizal.png', '', '', '', ''),
(150, 131, '659ae8b6052810.72512880', '3', 'Adlan Baihaqy', 'Menteri Ekonomi Kreatif Mahasiswa', 'Kementrian Ekonomi Kreatif Mahasiswa menjalankan tugas pokok serta fungsi sebagai fasilitator yang baik serta mengembangkan jiwa kewirausahaan bagi mahasiswa dan membangun kolaborasi mitra usaha di dalam maupun di luar kampus.', 'Peternakan', '2022', 'Nyala_Asa-Adlan_Baihaqy.png', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int NOT NULL,
  `id_landing` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name_service` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `id_landing`, `name_service`, `keterangan`, `link`) VALUES
(1, '65916f11ca88f6.76787631', 'Hotline Unwiku', 'Hotline Unwiku merupakan Layanan khusus yang dikelola oleh Adkesma untuk mahasiswa Unwiku sebagai upaya penjaringan aspirasi yang masuk baik itu berupa aspirasi sarana dan prasarana, kebijakan kampus, pembayaran akademik, ataupun masukan untuk BEM Unwiku.', 'https://bit.ly/hotline-unwiku'),
(4, '659ae8b6052810.72512880', 'Hotline Unwiku', 'Hotline Unwiku merupakan Layanan khusus yang dikelola oleh Adkesma untuk mahasiswa Unwiku sebagai upaya penjaringan aspirasi yang masuk baik itu berupa aspirasi sarana dan prasarana, kebijakan kampus, pembayaran akademik, ataupun masukan untuk BEM Unwiku.', 'https://bit.ly/hotline-unwiku'),
(5, '65916f11ca88f6.76787631', 'Aduan Pelecehan Seksual', 'Aduan pelecehan seksual merupakan layanan yang dikelola oleh kementerian pemberdayaan perempuan khusus untuk menerima keresahan baik itu perilaku atau perbuatan yang mengindikasikan pelecehan seksual ataupun sudah terjadi pelecehan seksual.', '#contact'),
(6, '65916f11ca88f6.76787631', 'Business Promotion', 'Business Promotion ini adalah salah satu program kerja dari Kementerian Kewirausahaan dan Ekonomi Kreatif BEM Unwiku. Tujuan dari program kerja ini yaitu untuk membantu para pelaku umkm bisnis mahasiswa unwiku dengan mempromosikanya melalui akun media sosial.', 'https://forms.gle/AHykt8sxqsUaeBeJ8');

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

CREATE TABLE `templates` (
  `id_template` bigint NOT NULL,
  `nama_template` varchar(64) COLLATE utf8mb4_general_ci NOT NULL,
  `author` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `folder` varchar(64) COLLATE utf8mb4_general_ci NOT NULL,
  `status` enum('true','false') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `templates`
--

INSERT INTO `templates` (`id_template`, `nama_template`, `author`, `folder`, `status`) VALUES
(1, 'Simple', 'Arnur ', 'simple', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(32) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `password_updated_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `username`, `password`, `avatar`, `created_at`, `password_updated_at`, `last_login`) VALUES
('6118b2a943acc2.78631959', 'Adminn', 'admin@gmail.com', 'admin', '$2y$10$7MzYsU1xl/ucMorLkY1bgOPTInJ3Zqw86jdKR5JqDQyknDuVFj4s.', NULL, '2021-08-14 23:22:33', '2024-02-02 12:23:54', '2024-02-03 09:18:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filosofi_logo`
--
ALTER TABLE `filosofi_logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fokus_isu`
--
ALTER TABLE `fokus_isu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `landing`
--
ALTER TABLE `landing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `templates`
--
ALTER TABLE `templates`
  ADD PRIMARY KEY (`id_template`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `filosofi_logo`
--
ALTER TABLE `filosofi_logo`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `fokus_isu`
--
ALTER TABLE `fokus_isu`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pengurus`
--
ALTER TABLE `pengurus`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `templates`
--
ALTER TABLE `templates`
  MODIFY `id_template` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
