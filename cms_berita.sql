-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2025 at 02:34 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms_berita`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `tanggal_publikasi` datetime DEFAULT current_timestamp(),
  `gambar` varchar(255) DEFAULT NULL,
  `penulis` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `isi`, `kategori`, `tanggal_publikasi`, `gambar`, `penulis`) VALUES
(27, 'Trump Bakal Bebaskan Pajak Penghasilan Crypto Saat Dilantik', 'Presiden Amerika Serikat (AS) terpilih Donald Trump mengatakan setelah nanti dirinya dilantik, ia akan menghapus seluruh pajak penghasilann yang berasal dari keuntungan cryptocurrency.\r\n\r\nIa akan bekerja sama dengan perusahaan yang mengadopsi crypto ke dalam sistem keuangannya mereka. Adapun syarat utamanya adalah terdaftar sebagai entitas di AS sebelum menerbitkan aset crypto.\r\n\r\nStrategi dari penghapusan pajak penghasilan ini menjadi bagian dari tujuan Trump untuk mencapai tujuan AS sebagai ibu kota crypto dunia. Meskipun belum diresmikan, tapi ini hal ini sudah direncanakan Trump.\r\n\r\nDengan adanya kebijakan tersebut, mata uang crypto di AS akan dianggap sebagai investasi yang logis, sehingga seluruh masyarakat bisa berinvestasi secara bebas tanpa memikirkan pajak hingga 34% dari keuntungan.\r\n\r\nSeperti yang diketahui, kepemimpinan Presiden AS Joe Biden dan Gary Gensler sebagai ketua Securities and Exchange Commission (SEC) membuat adopsi crypto AS sangat dibatasi dan menghambat pertumbuhannya.\r\n\r\nMaka dari itu, rencana Trump membangun AS sebagai negara terbesar dalam adopsi crypto mampu membuat komunitas mata uang digital semakin berani untuk bergerak.', 'Blockchain', '2025-01-18 10:58:19', 'IMG_1165.jpg', 'Andrew'),
(28, 'Saham Teknologi Turun, Emas-Bitcoin Meningkat Pesat', 'Pasar keuangan global menampilkan hasil beragam yang mengejutkan. Saham teknologi AS mengalami penurunan dan menyebabkan Nasdaq turun, sementara harga emas meroket dan Bitcoin (BTC) melonjak.\r\n\r\nPerbedaan kinerja ini, ditambah dengan perkembangan penting lainnya seperti potensi merger dan pengarahan investor yang akan datang, menciptakan lanskap dinamis bagi para investor.\r\n\r\nNamun, sektor teknologi mengalami penurunan pada tengah malam (17/01), dengan raksasa seperti Apple (AAPL) dan Tesla (TSLA) memimpin penurunan masing-masing sebesar 4% dan 3,36%. Kelemahan ini berkontribusi signifikan terhadap penurunan Nasdaq sebesar 0,9%.\r\n\r\nPenurunan tersebut disebabkan akibat laporan mengenai pangsa pasar yang menyusut di China, sementara Tesla mengalami penurunan setelah berita tentang diskon Cybertruck dan pengurangan produksi.\r\n\r\nDi sisi lain, emas bersinar dengan harga yang melampaui US$2.700 per ons, mencerminkan kenaikan signifikan untuk logam mulia ini. Lonjakan harga emas ini menunjukkan adanya perubahan sentimen investor menuju aset safe haven di tengah ketidakpastian ekonomi.\r\n\r\nBitcoin sendiri juga mencatat lonjakan luar biasa dengan melewati angka US$102 ribu per koin. Tak hanya itu, kapitalisasi pasar nya pun meningkat dua kali lipat lebih dari US$809 miliar menjadi US$2 triliun dalam setahun.\r\n\r\nHal tersebut menandakan kebangkitan kembali antusiasme untuk cryptocurrency menjelang pelantikan Presiden AS Donald Trump yang akan segera dilantik pada awal pekan depan.', 'Ekonomi', '2025-01-18 10:59:53', 'IMG_1164.jpg', 'Alex'),
(29, 'Saham Eropa-AS Naik, Nikkei Turun Saat Tunggu Data Inflasi AS', 'Bursa saham berjangka Eropa dan Amerika Serikat (AS) dilaporkan alami kenaikan secara perlahan saat para investor sedang menunggu data inflasi AS dan mulainya era kepemimpinan Donald Trump sebagai Presiden AS.\r\n\r\nLaporan sementara, Nasdaq 100 futures naik 0,5% di zona Asia, lalu indeks S&P500 berjangka semakin meningkat 0,3%, Futures Eropa naik 0,8% dan futures FTSE tetap stabil.\r\n\r\nNamun, di area Asia, Nikkei Jepang (.N225) alami penurunan 1,8% dan menyentuh level terendahnya selama enam minggu terakhir. Angka itu disebabkan sebagian investor menjual saham-saham chip lantaran ketakutan adanya kenaikan suku bunga Bank of Japan.\r\n\r\nSeperti diketahui, saat ini pasar saham mengalami tekanan cukup signifikan setelah adanya rencana pembatasan ekspor AS.\r\n\r\nMaka dari itu, saat ini semua sektor sedang menunggu data inflasi AS yang akan dirilis pada hari Rabu, (15/01) waktu Amerika Serikat.\r\n\r\nPasalnya, setiap kenaikan angka inti yang lebih besar dari perkiraan 0,2% akan mengancam untuk menutup pintu pelonggaran sama sekali.', 'Ekonomi', '2025-01-18 11:05:01', 'IMG_0828.jpg', 'Andrew'),
(30, 'Presiden Korea Selatan Ditahan Usai Kacaukan Ekonomi dengan Perintah Darurat Militer', 'Presiden Korea Selatan Yoon Suk Yeol telah dimakzulkan dalam tuduhan pemberontakan terkait pernyataan darurat militer bulan lalu, kini Yeol pun telah ditahan oleh kepolisian di pusat kota Seoul, Rabu (15/01).\r\n\r\nKejadian Presiden Korsel dimakzulkan dan ditangkap merupakan yang pertama kalinya dalam sejarah. Bahkan, penangkapan Yeol cukup dramatis, ia dikabarkan bersembunyi dari kejaran investigator Korea Selatan.\r\n\r\nPengacara Yeol mengatakan bahwa penangkapan tersebut hanya untuk mempermalukan Presiden korea Selatan di depan umum, terlebih kliennya masih menjabat.\r\n\r\nPerlu diketahui, pengumuman Yeol dalam pernyataan darurat militer menimbulkan kekacauan di Korea Selatan, terutama di sektor ekonomi yang menyebabkan penurunan tajam di pedagangan won Korea Selatan (KRW).\r\n\r\nTak hanya itu, mata uang digital turut mengalami penurunan cukup signifikan, terutama Bitcoin (BTC) yang turun sebesar 30% menjadi sekitar US$62.537 setelah darurat militer.', 'Ekonomi', '2025-01-18 11:07:10', 'IMG_1117.jpg', 'Alex'),
(31, 'Ahli Ungkap Blockchain Jadi Teknologi Terbaik untuk Keuangan Syariah', 'Eksekutif Web3 Mohemed AlKaff AlHashmi mengungkapkan sistem blockchain adalah cara terbaik untuk memastikan kepatuhan terhadap hukum syariah. Sebab, teknologi tersebut memiliki transparansi yang tinggi, keterlacakan, serta struktur tata kelola komunitas.\r\n\r\nUntuk mewujudkan hukum syariah dalam teknologi tersebut, AlHasmi telah mendirikan Haqq Network, blockchain yang kompatibel dengan EVM layer-1 yang sesuai dengan Syariah.\r\n\r\nAlHashmi menjelaskan kegiatan keuangan seperti meminjamkan uang dengan tingkat bunga yang dijamin, riba, dan perjudian dilarang dalam Islam. Oleh karenanya, cara terbaik untuk memastikan pendapatan pengguna halal yakni menggunakan blockchain untuk verifikasi transaksi.\r\n\r\n“Jika Anda melihat blockchain, ini adalah teknologi yang paling sesuai dengan etika dan nilai-nilai Syariah. Jika kita berbicara tentang transparansi, tata kelola komunitas, dan ketertelusuran, dan alat terbaik untuk melayani hal tersebut adalah blockchain,” ujar AlHashmi.', 'Blockchain', '2025-01-18 11:08:47', 'App_-_News_-_Ahli_Ungkap_Blockchain_Jadi_Teknologi_Terbaik_untuk_Keuangan_Syariah_-_Islamic_Coin.jpg', 'Andrew'),
(32, 'Vitalik Buterin Ungkap Strategi Sukses untuk Kecerdasan Buatan', 'Pendiri Ethereum (ETH) Vitalik Buterin memperkenalkan rencana untuk keberhasilan pengembangan kecerdasan buatan (AI). Dalam unggahan di platform X, ia menekankan pentingnya pengembangan AI yang bertanggung jawab demi kemajuan umat manusia.\r\n\r\nVitalik menyebutkan bahwa penerapan AI yang salah dapat menciptakan kehidupan robotik yang independen dan berpotensi menghilangkan kendali manusia atas teknologi. Namun, jika dilakukan dengan benar, AI dapat menjadi seperti kerangka mekanis yang memperkuat pikiran manusia.\r\n\r\nVitalik juga membahas relevansi integrasi AI dengan blockchain. Menurutnya, AI dapat meningkatkan efisiensi blockchain dengan memprediksi kebutuhan jaringan dan mengurangi pemborosan energi. Sebaliknya, blockchain dapat membuat proses AI lebih transparan dan akuntabel melalui audit terdesentralisasi.\r\n\r\nPenggabungan teknologi ini mulai terlihat pada platform seperti Ocean Protocol dan Fetch.ai, yang menunjukkan potensi besar dalam menyelesaikan tantangan di kedua bidang. Vitalik mendukung pendekatan yang mengutamakan manusia, menegaskan bahwa AI harus dirancang untuk memperkuat peran manusia, bukan menggantikannya.', 'Blockchain', '2025-01-18 11:10:57', 'App_-_News_-_Vitalik_Buterin_Ungkap_Strategi_Sukses_untuk_Kecerdasan_Buatan_-_Bloomberg.jpg', 'Alex');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','visitor') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', '1', 'admin'),
(2, 'visitor', 'password\r\n', 'visitor'),
(3, 'q', '$2y$10$RkhizI8KGXryNV/oMO2aeeQur5DpWtA77lfyZBN3bngdWiEfB7tkS', 'visitor'),
(4, 'a', '$2y$10$9.q5Knb3yLFqnR5H7NXW5.pPDuRGLH0CEUkpjWG2/wZo8RK2rq2xG', 'admin'),
(5, 'author', '$2y$10$JaWWSwThHAA1wDZX/QB2ju8hk/c0SsnjPC/3LKgk7tboqC54hwkEG', 'admin'),
(6, 'b', '$2y$10$UatgYEvRizohe5fXvylsqOPl8DduFCFjcu2i0pyU9TQ7Xh2Nx7yKa', 'admin'),
(7, 'visitor1', '$2y$10$umm0HVdDeSx7QePYDMIByOJgRrQrZz34s2LtxyBRTuLWvFoR1Znlq', 'visitor'),
(8, 'reader', '$2y$10$hVfvExEadHR.x0H6u/Etg.i7nC89YDgK7knxKUmoJhE3Y0q9M5pCG', 'visitor'),
(9, 'Alex', '$2y$10$GEe/ZEnTTfpZq5wCNNk32.fZbWhhll76lJYEhFX5KSUIFbzL1M78K', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
