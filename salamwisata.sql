-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Agu 2020 pada 05.56
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salamwisata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `email`, `username`, `password`) VALUES
(1, 'salam@gmail.com', 'salam', 'salam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `destinasi`
--

CREATE TABLE `destinasi` (
  `id_destinasi` int(11) NOT NULL,
  `nama_destinasi` varchar(200) NOT NULL,
  `foto_destinasi` varchar(250) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `destinasi`
--

INSERT INTO `destinasi` (`id_destinasi`, `nama_destinasi`, `foto_destinasi`, `keterangan`) VALUES
(2, 'Jatim Hore', '10-destinasi-wisata-favorit-saat-mudik-ke-solo-mengenal-budaya-hingga-belanja1.jpeg', 'seneng seneng ning jawa timur'),
(4, 'pulau dewata bali', '10-destinasi-wisata-favorit-saat-mudik-ke-solo-mengenal-budaya-hingga-belanja1.jpeg', 'hdfhjl');

-- --------------------------------------------------------

--
-- Struktur dari tabel `destinasi_foto`
--

CREATE TABLE `destinasi_foto` (
  `id_destinasi_foto` int(11) NOT NULL,
  `id_destinasi` int(11) NOT NULL,
  `nama_destinasi_foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `destinasi_foto`
--

INSERT INTO `destinasi_foto` (`id_destinasi_foto`, `id_destinasi`, `nama_destinasi_foto`) VALUES
(1, 2, '10-destinasi-wisata-favorit-saat-mudik-ke-solo-mengenal-budaya-hingga-belanja1.jpeg'),
(2, 2, 'gunung-tempat-pendakian-768x510.jpg'),
(3, 2, 'Monas.jpg'),
(5, 3, 'Tanah Lot.jpg'),
(6, 3, 'gunung-tempat-pendakian-768x510.jpg'),
(7, 4, '10-destinasi-wisata-favorit-saat-mudik-ke-solo-mengenal-budaya-hingga-belanja1.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `foto_galeri` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `foto_galeri`) VALUES
(8, 'g1.jpg'),
(9, 'g2.jpg'),
(10, 'g3.jpg'),
(11, 'g4.jpg'),
(12, 'g5.jpg'),
(13, 'g6.jpg'),
(14, 'g7.jpg'),
(15, 'g8.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hotel`
--

CREATE TABLE `hotel` (
  `id_hotel` int(11) NOT NULL,
  `nama_hotel` varchar(200) NOT NULL,
  `harga_hotel` int(11) NOT NULL,
  `foto_hotel` varchar(250) NOT NULL,
  `fasilitas_hotel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hotel`
--

INSERT INTO `hotel` (`id_hotel`, `nama_hotel`, `harga_hotel`, `foto_hotel`, `fasilitas_hotel`) VALUES
(5, 'Rooms Inc ', 0, 'rm1.jpg', 'Parkir (gratis)\r\nWi-Fi\r\nBer-AC\r\nRestoran'),
(9, 'Sahid Montana', 0, 'sh1.jpg', 'Wi-Fi\r\nParkir (gratis)\r\nBer-AC\r\nRestoran'),
(10, 'Summer Hills', 0, 'sm1.jpg', 'Kolam renang\r\nSarapan (gratis)\r\nWi-Fi\r\nParkir (gratis)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hotel_foto`
--

CREATE TABLE `hotel_foto` (
  `id_hotel_foto` int(11) NOT NULL,
  `id_hotel` int(11) NOT NULL,
  `nama_hotel_foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hotel_foto`
--

INSERT INTO `hotel_foto` (`id_hotel_foto`, `id_hotel`, `nama_hotel_foto`) VALUES
(2, 4, '10-destinasi-wisata-favorit-saat-mudik-ke-solo-mengenal-budaya-hingga-belanja1.jpeg'),
(3, 5, 'rm1.jpg'),
(4, 6, 'ny5.jpg'),
(5, 7, 'sahid1.jpg'),
(6, 8, 'swis2.jpg'),
(7, 9, 'sh1.jpg'),
(8, 10, 'sm1.jpg'),
(9, 9, 'sh2.jpg'),
(10, 9, 'sh3.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(200) NOT NULL,
  `harga_paket` int(11) NOT NULL,
  `foto_paket` varchar(250) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`, `harga_paket`, `foto_paket`, `keterangan`) VALUES
(13, 'Paket Pulau Dewata 3Day 2Night', 1100, 'bali.jpg', 'Rp 1.100.000,-/pax(Ekonomis)'),
(14, 'Paket Jakarta-Bandung 3Day 2Night', 1300, 'jkt.jpg', 'Rp 1.300.000,-/pax(Ekonomis)'),
(15, 'Paket Bromo', 530, 'bromo.jpg', 'Rp 530.000,-/pax(Ekonomi)'),
(16, 'Paket Jogja ', 230, 'jogja.jpg', 'Rp 230.000,-/pax(Ekonomis)'),
(17, 'Paket Semarang', 280, 'smg.jpg', 'Rp 280.000,-/pax(Ekonomis)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket_foto`
--

CREATE TABLE `paket_foto` (
  `id_paket_foto` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `nama_paket_foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `paket_foto`
--

INSERT INTO `paket_foto` (`id_paket_foto`, `id_paket`, `nama_paket_foto`) VALUES
(2, 5, 'gunung-tempat-pendakian-768x510.jpg'),
(3, 6, 'Bali.jpg'),
(4, 7, 'lombok.jpg'),
(5, 8, 'Monas.jpg'),
(6, 9, 'lombok.jpg'),
(7, 10, 'gunung-tempat-pendakian-768x510.jpg'),
(8, 11, '10-destinasi-wisata-favorit-saat-mudik-ke-solo-mengenal-budaya-hingga-belanja1.jpeg'),
(9, 12, 'bali.jpg'),
(10, 13, 'bali.jpg'),
(11, 14, 'jkt.jpg'),
(12, 15, 'bromo.jpg'),
(13, 16, 'jogja.jpg'),
(14, 17, 'smg.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `nomor_hp` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `foto_ktp` varchar(255) NOT NULL,
  `tgl_berangkat` date NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transportasi`
--

CREATE TABLE `transportasi` (
  `id_transportasi` int(11) NOT NULL,
  `nama_transportasi` varchar(200) NOT NULL,
  `foto_transportasi` varchar(255) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transportasi`
--

INSERT INTO `transportasi` (`id_transportasi`, `nama_transportasi`, `foto_transportasi`, `keterangan`) VALUES
(7, 'Agam Tungga Jaya', 'atj1.jpg', 'Konfigurasi 2-2 total seat 50'),
(8, 'Bhina Karya Jaya', 'bkj1.jpg', 'Konfigurasi 2-2 seat 50'),
(11, 'Elf', 'lf6.jpg', 'seat 20'),
(13, 'Elf Long', 'lf8.jpg', 'Seat 22'),
(14, 'Happy Bus', 'mdl1.jpg', 'Konfigurasi 2-2 seat 33'),
(15, 'Wara Wiri', 'mdb1.jpg', 'Konfigurasi 2-2 seat 35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transportasi_foto`
--

CREATE TABLE `transportasi_foto` (
  `id_transportasi_foto` int(11) NOT NULL,
  `id_transportasi` int(11) NOT NULL,
  `nama_transportasi_foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transportasi_foto`
--

INSERT INTO `transportasi_foto` (`id_transportasi_foto`, `id_transportasi`, `nama_transportasi_foto`) VALUES
(1, 3, 'pandawa87.jpg'),
(2, 4, 'mata.jpg'),
(3, 5, 'raya.jpg'),
(4, 6, 'pandawa87.jpg'),
(5, 7, 'atj1.jpg'),
(6, 8, 'bkj1.jpg'),
(7, 9, 'mdb1.jpg'),
(8, 10, 'mdj1.jpg'),
(9, 11, 'lf6.jpg'),
(10, 12, 'hc1.jpg'),
(11, 13, 'lf8.jpg'),
(12, 14, 'mdl1.jpg'),
(13, 15, 'mdb1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `destinasi`
--
ALTER TABLE `destinasi`
  ADD PRIMARY KEY (`id_destinasi`);

--
-- Indeks untuk tabel `destinasi_foto`
--
ALTER TABLE `destinasi_foto`
  ADD PRIMARY KEY (`id_destinasi_foto`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id_hotel`);

--
-- Indeks untuk tabel `hotel_foto`
--
ALTER TABLE `hotel_foto`
  ADD PRIMARY KEY (`id_hotel_foto`);

--
-- Indeks untuk tabel `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indeks untuk tabel `paket_foto`
--
ALTER TABLE `paket_foto`
  ADD PRIMARY KEY (`id_paket_foto`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indeks untuk tabel `transportasi`
--
ALTER TABLE `transportasi`
  ADD PRIMARY KEY (`id_transportasi`);

--
-- Indeks untuk tabel `transportasi_foto`
--
ALTER TABLE `transportasi_foto`
  ADD PRIMARY KEY (`id_transportasi_foto`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `destinasi`
--
ALTER TABLE `destinasi`
  MODIFY `id_destinasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `destinasi_foto`
--
ALTER TABLE `destinasi_foto`
  MODIFY `id_destinasi_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id_hotel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `hotel_foto`
--
ALTER TABLE `hotel_foto`
  MODIFY `id_hotel_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `paket_foto`
--
ALTER TABLE `paket_foto`
  MODIFY `id_paket_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transportasi`
--
ALTER TABLE `transportasi`
  MODIFY `id_transportasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `transportasi_foto`
--
ALTER TABLE `transportasi_foto`
  MODIFY `id_transportasi_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
