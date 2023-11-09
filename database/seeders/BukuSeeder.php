<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bukus = [
            [
            "sampul" => "sampul.jpg", "judul" => " Petunjuk Lengkap Mengenai Tanam-Tanaman Di Indonesia Dan Khasiatnya Sebagai Obat Tradisional ", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "J. Klopenburg-Versteegh", "penerbit_id" => "Cd. R.S Bethesda Dan Andi Offset ", "tahun_terbit" => "1988", "tempat_terbit" => "Yogyakarta", "halaman" => 259, "tinggi" => "260", "isbn" => "261", "stok" => 262, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "581.695 98", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "1 Abad Kebangkitan Nasional Dan Kebangkitan Perpustakaan", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "Dr. Sutarno NS", "penerbit_id" => "Sagung Seto", "tahun_terbit" => "2008", "tempat_terbit" => "Jakarta", "halaman" => 135, "tinggi" => NULL, "isbn" => "978-979-3288-70-3", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "1 Jam Jago Ngomong Bahasa Inggris", "tanggal" => "2022-10-25", "kategori_id" => 5, "penulis" => "Novita Khairani Tanjung,S.Pd", "penerbit_id" => "Oz Production", "tahun_terbit" => "2014", "tempat_terbit" => "Jakarta", "halaman" => 192, "tinggi" => "13 x 19 cm", "isbn" => "602-1639-92-8", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "357", "ddc" => "413", "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "10 MILIYON LENGKAP", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "100 FAKTA TENTANG GAJAH", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "100 Tokoh islam Paling berpengaruh di indonesia", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Shalahudin Hamid,Iskandar Ahza", "penerbit_id" => "Inti Media Cipta Nusantara", "tahun_terbit" => "2003", "tempat_terbit" => "Jakarta", "halaman" => 516, "tinggi" => "23", "isbn" => "979-3432-67-5", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "2x9", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "101 Kreasi & Temuan Baru", "tanggal" => "2007-04-11", "kategori_id" => 5, "penulis" => "Roopan Gosain", "penerbit_id" => "Intimedia & Ladang Pustaka", "tahun_terbit" => "2003", "tempat_terbit" => "Jakarta", "halaman" => 134, "tinggi" => "15 x 23", "isbn" => "979-3358-37-8", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => "604", "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "11  DARI 101 KISAH TAWA DAN SENYUM NABI MUHAMMAD SAW", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "ABU ISLAM AHMAD", "penerbit_id" => "KELOMPOK GEMA INSANI", "tahun_terbit" => "2008", "tempat_terbit" => "JAKARTA", "halaman" => 168, "tinggi" => "15,5 CM", "isbn" => "978-979-986-430-7", "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "110 TOKOH", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "15 MENIT LANCAR BERBAHASA INGGRIS", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "SILVESTER GORIDUS SUKUR", "penerbit_id" => "PT. GRAMEDIA WIDIASARANA INDONESIA ", "tahun_terbit" => "2012", "tempat_terbit" => "JAKARTA", "halaman" => 230, "tinggi" => NULL, "isbn" => "978-602-251-238-7", "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "18 Risalah Praktis Sifat Sholat Nabi", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Syaikh Muhammad Nashiruddin Al-Albani", "penerbit_id" => "Darus Sunnah", "tahun_terbit" => "2004", "tempat_terbit" => "Bandung", "halaman" => NULL, "tinggi" => NULL, "isbn" => "979-98257-0-9", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "204 PERCOBAAN YANG MENAKJUBKAN", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "25 Kisah Nabi dan Rasul", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => "Muflihun Hasan", "penerbit_id" => "Tidar Ilmu ", "tahun_terbit" => NULL, "tempat_terbit" => "Bandung", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "25 Kisah Penemu Terhebat", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => NULL, "penerbit_id" => "Indomedia Brothers", "tahun_terbit" => NULL, "tempat_terbit" => "Magelang", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "25 NABI DAN ROSUL", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "27 Cerita Rakyat Nusantara", "tanggal" => "2018-08-20", "kategori_id" => 5, "penulis" => "MB Rahimsyah", "penerbit_id" => "Cv. Bringin SS", "tahun_terbit" => NULL, "tempat_terbit" => "Surakarta", "halaman" => 125, "tinggi" => NULL, "isbn" => "602-864-414-5", "stok" => 1, "sumber_buku" => "Sumbangan Siswa/I Kls.IX", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "3 BAHASA", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "3 PIDATO BAHASA", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "30 DONGENG PENGANTAR TIDUR", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "30 DONGENG UNTUK ANAK MUSLIM", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "30 Nasihat Nabi Sehari-hari", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "Muhammad Suhardi, Lc", "penerbit_id" => "Al-Quds", "tahun_terbit" => "2014", "tempat_terbit" => "Surakarta", "halaman" => 111, "tinggi" => NULL, "isbn" => "978-602-1130-99-5", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "35 KISAH INSPIRATIF DI BALIK KEBERKAHAN TAHAJUD DHUHA  PUASA DAUD & SENIN KAMIS", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "M. IRFAN & LAILA AISYAH", "penerbit_id" => "PINANG MERAH PUBLISHER", "tahun_terbit" => "2012", "tempat_terbit" => "YOGYAKARTA", "halaman" => 144, "tinggi" => "13,5 X 20,5 CM", "isbn" => "978-602-7733-20-6", "stok" => 2, "sumber_buku" => "SUMBANGAN BUKU ALUMNI TP. 2021/2022", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "35 Sulap Terpopuler", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Michael Hleb", "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => "Bandung", "halaman" => 80, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "35 SULAP TERPOPULER UNTUK PEMULA DAN ANAK-ANAK", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "4 SAHABAT RASUL", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "40 KEBIJAKAN UNTUK MERAIH SURGA", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "50 Contoh -contoh Pidato", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Maftuh Ahnan", "penerbit_id" => "Pustaka Agung Harapan ", "tahun_terbit" => "1990", "tempat_terbit" => "Surabaya", "halaman" => 117, "tinggi" => NULL, "isbn" => "0", "stok" => 3, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "808,51", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "530 Hadis Sahih Bukhari - Muslim ", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "H. Zainal Abidin", "penerbit_id" => "Rineka Cipta", "tahun_terbit" => "2011", "tempat_terbit" => "Jakarta", "halaman" => 220, "tinggi" => "20,5 cm", "isbn" => "978-979-518-956-5", "stok" => 2, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "297,137", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "65 Dongen Pengantar Tidur Untuk Anak Muslim", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => "Nisfulail Sofa Febrina, S. Ag", "penerbit_id" => "Lintas Media", "tahun_terbit" => NULL, "tempat_terbit" => "Jakarta", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "7 KISAH NABI DAN RASUL", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "ABU AFIFAH AR-RAJI", "penerbit_id" => "MEDIA SOLIH ", "tahun_terbit" => "2014", "tempat_terbit" => "SOLO", "halaman" => 92, "tinggi" => NULL, "isbn" => "978-602-17451-7-5", "stok" => 1, "sumber_buku" => "SUMBANGAN BUKU ALUMNI TP. 2021/2022", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "75 Dosa - Dosa Besar", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Miftahus Salim", "penerbit_id" => "Ampel Mulia", "tahun_terbit" => "2009", "tempat_terbit" => "Surabaya", "halaman" => 237, "tinggi" => "0", "isbn" => "0", "stok" => 3, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "0", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "9 Summers 10 Autumns Dari kota Apel ke The Big Apel", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Iwan Setyawan", "penerbit_id" => "PT. Gramedia Pustaka Utama", "tahun_terbit" => "2011", "tempat_terbit" => "Jakarta", "halaman" => 221, "tinggi" => NULL, "isbn" => "978-602-03-1799-1", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "808,9", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "99 + 1 Pembelajaran Antikorupsi", "tanggal" => "2021-07-23", "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => "KPK ( Komisi Pemberantasan Korupsi )", "tahun_terbit" => "2015", "tempat_terbit" => "Jakarta", "halaman" => 210, "tinggi" => NULL, "isbn" => NULL, "stok" => 25, "sumber_buku" => "sumbangan dari KPK", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "99 Cara Menjadikan Anak Anda keranjingan Membaca", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Mary Leonhardt", "penerbit_id" => "Kaifa", "tahun_terbit" => "2001", "tempat_terbit" => "Bandung", "halaman" => 432, "tinggi" => "23,5", "isbn" => "979-9452-02-3", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "418,4", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "A SONG FOR ALEXA", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Abdullah Bin Abbas", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Rina Novia", "penerbit_id" => "Zikrun Hakim", "tahun_terbit" => "2017", "tempat_terbit" => "Jakarta Timur", "halaman" => 24, "tinggi" => "20,5 x 20,5 cm", "isbn" => "978-602-342-191-6", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "ABU NAWAS", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Active Learning 101 cara belajar siswa aktif", "tanggal" => "2022-02-08", "kategori_id" => 5, "penulis" => "Dr. Melvin Silberman", "penerbit_id" => "Nuansa Cendikie", "tahun_terbit" => "2014", "tempat_terbit" => "Bandung", "halaman" => 304, "tinggi" => "15.5 x 23.5 cm", "isbn" => "978-602-7768-58-1", "stok" => 1, "sumber_buku" => "Sumbangan Buku dari Guru", "rak_id" => "347", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "ADIKSI", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "AGAR PERTOLONGAN ALLAH SEGERA TURUN", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Agar Selalu Dicintai Allah", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Achmad Sunarto", "penerbit_id" => "Ampel Mulia", "tahun_terbit" => "0", "tempat_terbit" => "Surabaya", "halaman" => 256, "tinggi" => "0", "isbn" => "0", "stok" => 2, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "0", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Agar selalu dicintai Allah menurut Al-quran dan Al-hadist", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Achamd Sunarto", "penerbit_id" => "Ampel Mulia", "tahun_terbit" => "2014", "tempat_terbit" => "Surabaya", "halaman" => 256, "tinggi" => NULL, "isbn" => NULL, "stok" => 2, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "297", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Ahklak Tasawuf", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Drs. H. ahmad Bangun Nasution, M.A", "penerbit_id" => "Rajawali Pers", "tahun_terbit" => "2013", "tempat_terbit" => "Jakarta", "halaman" => 344, "tinggi" => "23 cm", "isbn" => "978-979-769-564-4", "stok" => 2, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "297.521 1", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Ahmadiyah & Pembajakan Al Quran", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "M. Amin Djamaluddin", "penerbit_id" => "Lembaga Penelitian dan Pengkajian Islam", "tahun_terbit" => "2000", "tempat_terbit" => "Jakarta", "halaman" => 236, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "297", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Aisyah", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => "Dewi Cendika", "penerbit_id" => "PT. MIZAN PUSTAKA", "tahun_terbit" => "2013", "tempat_terbit" => "Jakarta", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "AKHIRNYA MEREKA BERTAUBAT", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Akhlak Tasawuf", "tanggal" => "2014-12-09", "kategori_id" => 5, "penulis" => "Drs. H. ahmad Bangun Nasution, M.A", "penerbit_id" => "PT. Raja Grafindo Persada", "tahun_terbit" => "2013", "tempat_terbit" => "Jakarta", "halaman" => 344, "tinggi" => "23", "isbn" => "978-979-769-564-4", "stok" => 1, "sumber_buku" => "Dana Bos", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Akhlak Tasawuf", "tanggal" => "2018-08-20", "kategori_id" => 5, "penulis" => "Prof. Dr. H.Abuddin Nata, M.A", "penerbit_id" => "PT.Raja Grafindo", "tahun_terbit" => "2009", "tempat_terbit" => "Jakarta", "halaman" => 322, "tinggi" => "21 cm", "isbn" => "979-421-595-3", "stok" => 1, "sumber_buku" => "Sumbangan Siswa/I Kls.IX", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Akhlak Tasawuf", "tanggal" => "2018-08-20", "kategori_id" => 5, "penulis" => "Drs.H.A.Mustofa", "penerbit_id" => "Pustaka Setia", "tahun_terbit" => "1997", "tempat_terbit" => "Bandung", "halaman" => 296, "tinggi" => "15 x 21 cm", "isbn" => "979-730-121-4", "stok" => 1, "sumber_buku" => "Sumbangan Siswa/I Kls.IX", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Aku dan Keluargaku", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Departemen Kesehatan", "penerbit_id" => "Departemen Kesehatan", "tahun_terbit" => "2002", "tempat_terbit" => "Jakarta", "halaman" => 28, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "618998916", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Aku Sayang Adik", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => "Eka Wardhana", "penerbit_id" => "PT. MIZAN PUSTAKA", "tahun_terbit" => NULL, "tempat_terbit" => "Jakarta Selatan", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "AKU TERAMPIL BERMAIN SAINS", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Tim Bina Sumber Daya MIPA", "penerbit_id" => "  BSD MIPA", "tahun_terbit" => "2008", "tempat_terbit" => "Lampung", "halaman" => 30, "tinggi" => NULL, "isbn" => "978-979-3073-92-7", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Aku, Kamu dan Hujan", "tanggal" => "2018-08-20", "kategori_id" => 5, "penulis" => "Anita Sari", "penerbit_id" => "Eazy Book", "tahun_terbit" => "2013", "tempat_terbit" => "Yogyakarta", "halaman" => 214, "tinggi" => "13 x 19 cm", "isbn" => "979-602-7702-03-1", "stok" => 1, "sumber_buku" => "Sumbangan Siswa/I Kls.IX", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Al - Qur'an", "tanggal" => "2018-08-06", "kategori_id" => 3, "penulis" => "Lukman Hakim Saifuddin", "penerbit_id" => "Percetakan Al-Qur'an ( UPQ )", "tahun_terbit" => "2017", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 20, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Al - Quran Impian", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Aida", "penerbit_id" => "Dar Mizan", "tahun_terbit" => "2016", "tempat_terbit" => "Bandung", "halaman" => 120, "tinggi" => "21 cm", "isbn" => "978-602-420-094-7", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "AL AURA BAT GPO", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Al Hadis Aqidah, Ahklak, Sosial & Hukum", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Prof. Dr. H. Rachmat Syafe'I, M.A", "penerbit_id" => "Pustaka Setia", "tahun_terbit" => "2000", "tempat_terbit" => "Bandung", "halaman" => 288, "tinggi" => "21 x 15 cm", "isbn" => "979-730-133-7", "stok" => 2, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "297,13", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "AL HADIST", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "AL QUR'AN BERCERITA TENTANG WANITA", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Al Qur'an dan Hadis Kelas 7 Pegangan Guru", "tanggal" => "2015-08-20", "kategori_id" => 1, "penulis" => "Drs. H. Moh. Abdul Chafidz", "penerbit_id" => "Direktorat Pendidikan Madrasah", "tahun_terbit" => "2014", "tempat_terbit" => "Jakarta", "halaman" => 118, "tinggi" => NULL, "isbn" => "978-979-8446-60-3", "stok" => 3, "sumber_buku" => "Bantuan kanwil", "rak_id" => "143", "ddc" => "2 x 1 . 6", "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Al Qur'an dan Ilmu Tajwid", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Abdul Chaer", "penerbit_id" => "Rineka Cipta", "tahun_terbit" => "2012", "tempat_terbit" => "Jakarta", "halaman" => 149, "tinggi" => "23,5 cm", "isbn" => "978-979-098-050-1", "stok" => 1, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "297.112 1", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "AL QUR'AN HADIST", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "AL QUR'AN IMPIAN ", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Al Qur'an The Great Miracle", "tanggal" => "2022-05-27", "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => "Tiga Serangkai", "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "sumbangan dari Erlangga", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Al Quran vs Sains Modern Menurut Dr. Zakir Naik Sesuai Atau Tidak Sesuai?", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Ramadhani, dkk", "penerbit_id" => "Sketsa", "tahun_terbit" => NULL, "tempat_terbit" => "Yogyakarta", "halaman" => 230, "tinggi" => "23", "isbn" => "979-702-038-X", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "200", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Al Qur'anul Karim Terjemah Tafsir Perkata", "tanggal" => "2017-09-03", "kategori_id" => 5, "penulis" => "Nurul Fikri", "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 2, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Ala Fezona", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => "Ratrya Khansa Amira", "penerbit_id" => "PT. MIZAN PUSTAKA", "tahun_terbit" => "2012", "tempat_terbit" => "Surakarta", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Album Kenangan Siswa MTs Negeri 2 Bandar Lampung TP. 2006/2007", "tanggal" => "2007-06-10", "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => "Bandar Lampung", "halaman" => 106, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Alea Si Balerina", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Yuriza", "penerbit_id" => "Noura", "tahun_terbit" => "2012", "tempat_terbit" => "Jakarta", "halaman" => 219, "tinggi" => "21 cm", "isbn" => "978-602-9498-32-5", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "ALIEN AT TACK", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Alien Attack", "tanggal" => "2022-08-20", "kategori_id" => 5, "penulis" => "Hasan Muhammad Al Fatih dkk", "penerbit_id" => "PT. MIZAN PUSTAKA", "tahun_terbit" => "2012", "tempat_terbit" => "Bandung", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Aljabar", "tanggal" => "2017-11-16", "kategori_id" => 5, "penulis" => "Prof. Yohanes Surya, Ph. D", "penerbit_id" => "PT. Kandel", "tahun_terbit" => "2017", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Al-Qur'an dan Embriologi", "tanggal" => "2018-08-20", "kategori_id" => 5, "penulis" => "Dalil Anfus", "penerbit_id" => "Tiga Serangkai", "tahun_terbit" => "2006", "tempat_terbit" => "Solo", "halaman" => 254, "tinggi" => "21 cm", "isbn" => "979-33-0140-6", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Al-quran dan literasi sejarah rancang-bangun ilmu-ilmu keislaman", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Ali Romdhoni", "penerbit_id" => "Literatur nusantara", "tahun_terbit" => "2013", "tempat_terbit" => "Depok", "halaman" => 311, "tinggi" => "21", "isbn" => "978-602-18064-1-8", "stok" => 4, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "297,11", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "AL-QUR'AN THE ULTIMATE SECRET", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "ASTRID DARMAWAN MUHAMMAD HIDAYAT", "penerbit_id" => "UFUK PRESS", "tahun_terbit" => "2008", "tempat_terbit" => "JAKARTA SELATAN", "halaman" => 262, "tinggi" => NULL, "isbn" => "979-1238-70-0", "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Al-Qur'an Vs Sains Modern Menurut Dr. Zakir Naik", "tanggal" => "2023-07-02", "kategori_id" => 5, "penulis" => "Ramadhani, Dkk", "penerbit_id" => "Sektsa", "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => 230, "tinggi" => NULL, "isbn" => "979-702-038-X", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "AMALAN MUSLIMAH DI MASA HAID DAN NIFAS", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Anak Unggul Berotak Prima", "tanggal" => "2023-04-20", "kategori_id" => 5, "penulis" => "Dr. Hardywinoto, SKM", "penerbit_id" => "Gramedia Pustaka Utama", "tahun_terbit" => "2002", "tempat_terbit" => "Jakarta", "halaman" => 246, "tinggi" => NULL, "isbn" => "979-686-954-3", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "ANAK UNGGUL BRONTAK PRIMA", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "ANEKA RAGAM PUISI", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "ANGIN BERSYAIR", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Apa Dan Bagaimana BANK ISLAM", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "DRS. H. Karnaen perwataatmadja, MPA", "penerbit_id" => "Dana Bhakti Wakaf", "tahun_terbit" => "1992", "tempat_terbit" => "Yogyakarta", "halaman" => 122, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "297166", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "AQIDAH IMAM EMPAT (ABUHANIFAH, MALIK, SYAFI'I, AHMAD)", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "DR. MUHAMMAD BIN ABDURRAHMAN AL-KHUMAIS", "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => "SAUDI ARABIA", "halaman" => 154, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "AQIDAH ISLAM ", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Asal Mula Danau Toba", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => "MB. Rahimsyah. Ar", "penerbit_id" => "Media Pustaka", "tahun_terbit" => "2016", "tempat_terbit" => "Surabaya", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Asma Ul'Husna", "tanggal" => "2018-08-20", "kategori_id" => 5, "penulis" => "M. Hanafi", "penerbit_id" => "Sinar Terang", "tahun_terbit" => NULL, "tempat_terbit" => "Surabaya", "halaman" => 176, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Sumbangan Siswa/I Kls.IX", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "ASMA UL'HUSNA SHOLAWAT NABI", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "ATLAS", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Atlas Di Indonesia Dan Dunia Edisi 34 Provinsi ", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => "Pustaka Sandro Jaya", "tahun_terbit" => NULL, "tempat_terbit" => "Jakarta", "halaman" => 96, "tinggi" => NULL, "isbn" => "979-3967-17-x", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "912,598", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Atlas Dunia 33 Provinsi", "tanggal" => "2002-05-01", "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => "Pustaka Amani", "tahun_terbit" => "2001", "tempat_terbit" => "Jakarta", "halaman" => 96, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "08", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "ATLAS INDONESIA", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Atlas Indonesia & Dunia", "tanggal" => "2002-05-01", "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => "Kurnia Jaya", "tahun_terbit" => "1995", "tempat_terbit" => "Jakarta", "halaman" => 44, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => NULL, "rak_id" => "390", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Atlas Indonesia dan Dunia Edisi 33 Provinsi di Indonesia", "tanggal" => "2002-05-01", "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => "Pustaka Sundro", "tahun_terbit" => NULL, "tempat_terbit" => "Jakarta", "halaman" => 96, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "10", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "ATLAS IPS INDONESIA & DUNIA", "tanggal" => "2018-08-20", "kategori_id" => 5, "penulis" => "TIM DAP KARTOGRAFI", "penerbit_id" => "DAP Purlisher", "tahun_terbit" => "2010", "tempat_terbit" => "Jakarta", "halaman" => 116, "tinggi" => NULL, "isbn" => "978-602-95258-3-0", "stok" => 1, "sumber_buku" => "Sumbangan Siswa/I Kls.IX", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Atlas Persada & Dunia", "tanggal" => "2001-08-13", "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => "Yudistira", "tahun_terbit" => "2000", "tempat_terbit" => "Ciawi", "halaman" => 92, "tinggi" => NULL, "isbn" => "979-676-400-7", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Atlas Tematik Provinsi", "tanggal" => "2009-04-01", "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => "PT.Anak Saleh Pratama", "tahun_terbit" => "1991", "tempat_terbit" => "Depok", "halaman" => 89, "tinggi" => NULL, "isbn" => "979-3351-40-3", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "24", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "AYAM KAMPUNG PETELUR", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Ayat - Ayat Setan", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Syekh Abdullah Bin Ammar", "penerbit_id" => "Mitra Press", "tahun_terbit" => "2009", "tempat_terbit" => "0", "halaman" => 256, "tinggi" => "14 x 21 cm", "isbn" => "978-979-17230-8-4", "stok" => 2, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "509,2", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Ayo Memahami Al-Qur'an & Hadist Kelas 7", "tanggal" => "2023-02-20", "kategori_id" => 1, "penulis" => "Nur Hadi dan Sunariyah", "penerbit_id" => "Erlangga", "tahun_terbit" => "2020", "tempat_terbit" => "Jakarta", "halaman" => 120, "tinggi" => NULL, "isbn" => "978-623-266-065-6", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Ayo Memahami Al-Qur'an & Hadist Kelas 8", "tanggal" => "2023-02-20", "kategori_id" => 1, "penulis" => "Nur Hadi dan Sunariyah", "penerbit_id" => "Erlangga", "tahun_terbit" => "2021", "tempat_terbit" => "Jakarta", "halaman" => 113, "tinggi" => NULL, "isbn" => "978-623-266-067-0", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Ayo Memahami Al-Qur'an & Hadist Kelas 9", "tanggal" => "2023-02-20", "kategori_id" => 1, "penulis" => "Nur Hadi dan Sunariyah", "penerbit_id" => "Erlangga", "tahun_terbit" => "2021", "tempat_terbit" => "Jakarta", "halaman" => 113, "tinggi" => NULL, "isbn" => "978-623-266-066-3", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Ayo Memahami Aqidaj dan Akhlak kelas 1", "tanggal" => "2023-02-20", "kategori_id" => 1, "penulis" => "Muta'alimah & Abdul Rohim", "penerbit_id" => "Erlangga", "tahun_terbit" => "2020", "tempat_terbit" => "Semarang", "halaman" => 174, "tinggi" => NULL, "isbn" => "978-602-486-964-9", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Ayo Memahami Aqidaj dan Akhlak kelas 2", "tanggal" => "2023-02-20", "kategori_id" => 1, "penulis" => "Muta'alimah & Abdul Rohim", "penerbit_id" => "Erlangga", "tahun_terbit" => "2021", "tempat_terbit" => "Semarang", "halaman" => 199, "tinggi" => NULL, "isbn" => "978-602-486-965-6", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Ayo Memahami Aqidaj dan Akhlak kelas 3", "tanggal" => "2023-02-20", "kategori_id" => 1, "penulis" => "Nor Hadi", "penerbit_id" => "Erlangga", "tahun_terbit" => "2009", "tempat_terbit" => "Jakarta", "halaman" => 162, "tinggi" => NULL, "isbn" => "978-602-486-966-3", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Ayo Memahami Bahasa Arab Kelas 7", "tanggal" => "2023-02-20", "kategori_id" => 1, "penulis" => "Hasan Saefuloh", "penerbit_id" => "Erlangga", "tahun_terbit" => "2020", "tempat_terbit" => "Cirebon", "halaman" => 184, "tinggi" => NULL, "isbn" => "978-623-266-077-9", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Ayo Memahami Bahasa Arab Kelas 8", "tanggal" => "2023-02-20", "kategori_id" => 1, "penulis" => "Hasan Saefuloh", "penerbit_id" => "Erlangga", "tahun_terbit" => "2021", "tempat_terbit" => "Cirebon", "halaman" => 189, "tinggi" => NULL, "isbn" => "978-623-266-078-6", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Ayo Memahami Bahasa Arab Kelas 9", "tanggal" => "2023-02-20", "kategori_id" => 1, "penulis" => "Hasan Saefuloh", "penerbit_id" => "Erlangga", "tahun_terbit" => "2021", "tempat_terbit" => "Cirebon", "halaman" => 215, "tinggi" => NULL, "isbn" => "978-623-266-079-3", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Ayo Memahami Fiqih kelas 2", "tanggal" => "2023-02-20", "kategori_id" => 1, "penulis" => "Nor Hadi", "penerbit_id" => "Erlangga", "tahun_terbit" => "2009", "tempat_terbit" => "Jakarta", "halaman" => 112, "tinggi" => NULL, "isbn" => "978-979-033-684-1", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Ayo Memahami Fiqih kelas 3", "tanggal" => "2023-02-20", "kategori_id" => 1, "penulis" => "H. Jamhari & H. Tasimin", "penerbit_id" => "Erlangga", "tahun_terbit" => "2021", "tempat_terbit" => "Jakarta", "halaman" => 195, "tinggi" => NULL, "isbn" => "978-623-266-049-6", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Ayo Memahami Sejarah Kebudayaan Islam Kelas 7", "tanggal" => "2023-02-20", "kategori_id" => 1, "penulis" => "Mahrus As'ad dan Adad Nursahad", "penerbit_id" => "Erlangga", "tahun_terbit" => "2020", "tempat_terbit" => "Bandung", "halaman" => 150, "tinggi" => NULL, "isbn" => "978-602-486-960-1", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Ayo Memahami Sejarah Kebudayaan Islam Kelas 8", "tanggal" => "2023-02-20", "kategori_id" => 1, "penulis" => "Mahrus As'ad dan Adad Nursahad", "penerbit_id" => "Erlangga", "tahun_terbit" => "2020", "tempat_terbit" => "Jakarta", "halaman" => 164, "tinggi" => NULL, "isbn" => "978-602-486-961-8", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Ayo Memahami Sejarah Kebudayaan Islam Kelas 9", "tanggal" => "2023-02-20", "kategori_id" => 1, "penulis" => "Mahrus As'ad dan Adad Nursahad", "penerbit_id" => "Erlangga", "tahun_terbit" => "2021", "tempat_terbit" => "Bandung", "halaman" => 156, "tinggi" => NULL, "isbn" => "978-602-486-962-5", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Azab dan Sengsara", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Merari Siregar", "penerbit_id" => "Balai Pustaka Persero", "tahun_terbit" => "1920", "tempat_terbit" => "Jakarta", "halaman" => 186, "tinggi" => NULL, "isbn" => "978-979-40716-8-7", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "808,9", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Bahasa Arab Kelas 7 Pegangan Guru", "tanggal" => "2015-08-20", "kategori_id" => 1, "penulis" => "Zaenal Muttaqin, M.A", "penerbit_id" => "Direktorat Pendidikan Madrasah", "tahun_terbit" => "2014", "tempat_terbit" => "Jakarta", "halaman" => 122, "tinggi" => NULL, "isbn" => "978-979-8446-74-0", "stok" => 2, "sumber_buku" => "Bantuan kanwil", "rak_id" => "144", "ddc" => "491", "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "BAHASA ARAB SISTEMATIS JILID 1 DAN 2", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "BAHASA ARAB SISTEMTIS  2", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "RIGA, S.SI., M.SI", "penerbit_id" => "WWW. BASIS.WEB.ID", "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => 134, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "BAHASA ARAB SISTEMTIS 1 ", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "RIGA, S.SI., M.SI", "penerbit_id" => "WWW. BASIS.WEB.ID", "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => 112, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "BANK SOAL Penilaian Akhir Semester (PAS)", "tanggal" => "2023-06-03", "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => "Kementerian Pendidikan dan Kebudayaan", "tahun_terbit" => "2022/2023", "tempat_terbit" => "Jakarta", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Bawang Merah Bawang Putih", "tanggal" => "2018-08-20", "kategori_id" => 5, "penulis" => "Yustitia Angelia", "penerbit_id" => "BINTANG INDONESIA ", "tahun_terbit" => NULL, "tempat_terbit" => "Bandung", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Bawang Merah Bawang Putih", "tanggal" => "2022-06-01", "kategori_id" => 5, "penulis" => "TIRA IKRANEGARA", "penerbit_id" => "Serba Jaya", "tahun_terbit" => "2008", "tempat_terbit" => "Surabaya", "halaman" => 64, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Bawang Merah Bawang Putih", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "TIRA IKRANEGARA", "penerbit_id" => "Dua Media", "tahun_terbit" => NULL, "tempat_terbit" => "Jakarta", "halaman" => 128, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "BAWANG MERAH PUTRI DAN DONGENG LAINNYA", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "BEDAH OTAK (CINTA & KECERDASAN)", "tanggal" => "2023-07-31", "kategori_id" => 5, "penulis" => "Dr. KHOIROTUL IDAWATI MACHMUD, M.PD.I", "penerbit_id" => "HANIFIDA MULTIMEDIA", "tahun_terbit" => "2006", "tempat_terbit" => "Bandar Lampung", "halaman" => NULL, "tinggi" => NULL, "isbn" => "978-979-14255-08-7", "stok" => 4, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Bekal Juru Dakwah", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "              ", "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "BELAJAR ASYIIK...!!! BUKU PINTAR ANAK JUARA", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "BAMBANG SUSENO", "penerbit_id" => "BINTANG INDONESIA", "tahun_terbit" => NULL, "tempat_terbit" => "JAKARTA", "halaman" => 128, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "SUMBANGAN BUKU ALUMNI TP. 2021/2022", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "BELAJAR BERDOA", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "HJ. JANNATIN AL WASRU, S.SY", "penerbit_id" => "SENDANG ILMU", "tahun_terbit" => NULL, "tempat_terbit" => "SOLO", "halaman" => 40, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Belajar Ikhlas", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Ust.Husnul Albab", "penerbit_id" => "Riyan Jaya", "tahun_terbit" => "0", "tempat_terbit" => "Surabaya", "halaman" => 159, "tinggi" => "0", "isbn" => "0", "stok" => 1, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "297,5", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Belajar Sholat dan Berdoa", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Ust. Jufry Al-Hazza", "penerbit_id" => "Prima Jaya", "tahun_terbit" => NULL, "tempat_terbit" => "Solo", "halaman" => 128, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Belenggu ", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Armijn Pane", "penerbit_id" => "Dian Rakyat", "tahun_terbit" => "2000", "tempat_terbit" => "Jakarta", "halaman" => 150, "tinggi" => NULL, "isbn" => "979-523-048-8", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "808,9", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "BENNY MOERDANI", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "ANDI SETIADI", "penerbit_id" => "LAKSANA", "tahun_terbit" => "2019", "tempat_terbit" => "YOGYAKARTA", "halaman" => 184, "tinggi" => "14 X 20 CM ", "isbn" => "978-602-407-686-3", "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "BERANI BERUBAH KARENA HIIDUP TERUS BERUBAH", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "WENDY GRANT", "penerbit_id" => "BRIGHT PUBLISHER", "tahun_terbit" => "2021", "tempat_terbit" => "YOGYAKARTA", "halaman" => 212, "tinggi" => "13,5 X 20 CM", "isbn" => "978-602-5868-03-0", "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Berburu Mutiara", "tanggal" => "2022-06-14", "kategori_id" => NULL, "penulis" => "Adi Rizky Purmansyah", "penerbit_id" => "PT. MIZAN PUSTAKA", "tahun_terbit" => "2012", "tempat_terbit" => "Jakarta", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "741.5", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "BERDIALOG DENGAN AL-QURAN", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "SYAIKH MUHAMMAD AL-GHAZALI", "penerbit_id" => "PT. MIZAN PUSTAKA", "tahun_terbit" => "1996", "tempat_terbit" => "BANDUNG", "halaman" => 293, "tinggi" => NULL, "isbn" => "979-433-097-3", "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Bermain Dengan Matematika", "tanggal" => "2007-04-11", "kategori_id" => NULL, "penulis" => "Kadiyo & Agus Suryana", "penerbit_id" => "Anggota IKAPI", "tahun_terbit" => "2007", "tempat_terbit" => "Jakarta", "halaman" => 206, "tinggi" => "21", "isbn" => "979-8804-04-X", "stok" => 1, "sumber_buku" => "Dana Bos", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Berpacu Nasib Di Kebun Karet", "tanggal" => "2017-12-04", "kategori_id" => 5, "penulis" => "M. H Szekely - Lulafs", "penerbit_id" => "Grafitipess", "tahun_terbit" => "1985", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Sumbangan Dari Perpustakaan Daerah Lampung", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "BERPIKIR DAN BERJIWA BESAR", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Bersolek Oke Merayu Pun Oke", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "R. Herry Prasetyo", "penerbit_id" => "Talenta Media", "tahun_terbit" => "2006", "tempat_terbit" => "Jakarta", "halaman" => 119, "tinggi" => NULL, "isbn" => "979-15019-2-0", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "808,9", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Bertambah Kaya Lewat Shalat Dhuha", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Imam Ghazali", "penerbit_id" => "Mitra Press", "tahun_terbit" => "2008", "tempat_terbit" => "0", "halaman" => 248, "tinggi" => "14 x 21 cm", "isbn" => "978-979-17230-1-5", "stok" => 1, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "297,32", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Bertanam 30 Jenis Sayur", "tanggal" => "2023-04-20", "kategori_id" => 5, "penulis" => "Drs. H. Hendro Sunarjono", "penerbit_id" => "Penebar Swadaya", "tahun_terbit" => "2003", "tempat_terbit" => "Jakarta", "halaman" => 184, "tinggi" => "20,5", "isbn" => "979-489-721-3", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Bertanam Melon", "tanggal" => "2018-08-20", "kategori_id" => 5, "penulis" => "Setiadi", "penerbit_id" => "Swadaya", "tahun_terbit" => "2008", "tempat_terbit" => "Jakarta", "halaman" => 96, "tinggi" => "20,5 cm", "isbn" => "979-8031-32-6", "stok" => 1, "sumber_buku" => "Sumbangan Siswa/I Kls.IX", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "BERTANAM SAYUR", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Better Life With Action", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Syafii Efendi", "penerbit_id" => "Jawara Bisnis Grup", "tahun_terbit" => "2016", "tempat_terbit" => "Jakarta", "halaman" => 194, "tinggi" => NULL, "isbn" => "978-602-14831-6-9", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "808,9", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Better Life With Action ( 10 Langkah Sukses Usia Muda )", "tanggal" => "2017-06-04", "kategori_id" => 5, "penulis" => "Syafii Efendi", "penerbit_id" => "Jawara Bisnis Group", "tahun_terbit" => "2015", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Bidadari Turun Ke Bumi", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Ustazah Titin Supartinah S.Pd.I", "penerbit_id" => "La Tahzan", "tahun_terbit" => "2014", "tempat_terbit" => "JAKARTA SELATAN", "halaman" => 240, "tinggi" => "14 x 20", "isbn" => "602-7911-20-4", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Bilik - Bilik Muhammad", "tanggal" => "2018-08-20", "kategori_id" => 5, "penulis" => "Novelet", "penerbit_id" => "Bulan Bintang", "tahun_terbit" => "1985", "tempat_terbit" => "Jakarta", "halaman" => 78, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Sumbangan Siswa/I Kls.IX", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Bimbingan Penyuluhan Islam", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Drs. H. Isep Zainal Arifin, M.Ag.", "penerbit_id" => "Rajawali Press", "tahun_terbit" => "2009", "tempat_terbit" => "Jakarta", "halaman" => 312, "tinggi" => "21 cm", "isbn" => "978-979-769-251-3", "stok" => 2, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "297,62", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Bimbingan Praktis Menghafal Al Quran", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Drs. Ahsin W. Al Hafidz", "penerbit_id" => "Bumi Aksara", "tahun_terbit" => "1994", "tempat_terbit" => "Jakarta", "halaman" => 107, "tinggi" => "21", "isbn" => "979-526-248-3", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "297", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Bimbingan Puasa Wajib dan Sunnah", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Achmad Sunarto", "penerbit_id" => "Aulia", "tahun_terbit" => "2014", "tempat_terbit" => "Surabaya", "halaman" => 153, "tinggi" => "0", "isbn" => "0", "stok" => 3, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "297,34", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Bintang Berzikir ", "tanggal" => "2023-04-20", "kategori_id" => 5, "penulis" => "Manshur Hasbu An-Nabi", "penerbit_id" => "PT. Tiga Serangkai Pustaka Mandiri", "tahun_terbit" => "2005", "tempat_terbit" => "Solo", "halaman" => 30, "tinggi" => "25", "isbn" => "979-668-628-7", "stok" => 4, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "BIOGRAFI", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Biografi Nabi Muhammad", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Achmad Sunarto", "penerbit_id" => "Aulia", "tahun_terbit" => "2014", "tempat_terbit" => "Surabaya", "halaman" => 159, "tinggi" => "0", "isbn" => "0", "stok" => 3, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "920", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Biografi Nabi Muhammad SAW", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Achmad Sunarto", "penerbit_id" => "Aulia", "tahun_terbit" => "2014", "tempat_terbit" => "Surabaya", "halaman" => 160, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "920", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "BIOGRAFI SYEKH ABDUL QADIR AL-JAILANI", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "MAULANA MUHAMMAD AFTSAB CASSIM RAZMI", "penerbit_id" => "DIADIT MEDIA", "tahun_terbit" => "2008", "tempat_terbit" => "JAKARTA", "halaman" => 142, "tinggi" => "13 X 20 CM", "isbn" => "979-3957-84-0", "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "BIOLOGI ", "tanggal" => "2013-12-12", "kategori_id" => 5, "penulis" => "Neil A. Campbell ", "penerbit_id" => "Erlangga", "tahun_terbit" => "2000", "tempat_terbit" => "Jakarta", "halaman" => 472, "tinggi" => "210 x 280 cm", "isbn" => "979-688-469-0", "stok" => 20, "sumber_buku" => "Dana Rutin", "rak_id" => "000", "ddc" => "570", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Biologi Molekular", "tanggal" => "2013-12-12", "kategori_id" => 5, "penulis" => "Triwibowo Yuwono", "penerbit_id" => "Erlangga", "tahun_terbit" => "2005", "tempat_terbit" => "Yogyakarta", "halaman" => 269, "tinggi" => NULL, "isbn" => "979-781-192-1", "stok" => 20, "sumber_buku" => "Dana Rutin", "rak_id" => "000", "ddc" => "574,88", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "BLOAD MOON", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Blood Moon", "tanggal" => "2022-06-14", "kategori_id" => NULL, "penulis" => "Noffa Debbie", "penerbit_id" => "Cable Book", "tahun_terbit" => NULL, "tempat_terbit" => "Yogyakarta", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => NULL, "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "BLUE WINGS 2 MY PHARMACY", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "YU NATSUKI", "penerbit_id" => "PT. ELEX MEDIA KOMPUTINDO", "tahun_terbit" => "2003", "tempat_terbit" => "JAKARTA", "halaman" => 166, "tinggi" => NULL, "isbn" => "979-20-4918-5", "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "BOBO", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Kussusani Prihatmoko", "penerbit_id" => "Gramedia Pustaka Utama", "tahun_terbit" => NULL, "tempat_terbit" => "Jakarta", "halaman" => 51, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Bobo Aplikasi Seru, Bikin Pintar", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Kussusani Prihatmoko", "penerbit_id" => "Gramedia Pustaka Utama", "tahun_terbit" => NULL, "tempat_terbit" => "Jakarta", "halaman" => 51, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Bobo Pohon Si Penghasil O2", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Kussusani Prihatmoko", "penerbit_id" => "Gramedia Pustaka Utama", "tahun_terbit" => "2016", "tempat_terbit" => "Bandung", "halaman" => 51, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "BOBO WAYANG GARING", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Kussusani Prihatmoko", "penerbit_id" => "Gramedia Pustaka Utama", "tahun_terbit" => "2014", "tempat_terbit" => "JAKARTA", "halaman" => 51, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "BOROS", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "AZZAHRA  DKK", "penerbit_id" => "PT . MIZAN PUSTAKA", "tahun_terbit" => "2016", "tempat_terbit" => "BANDUNG", "halaman" => 104, "tinggi" => "21  CM", "isbn" => "978-602-367-142-7", "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Branded School", "tanggal" => "2022-10-31", "kategori_id" => 5, "penulis" => "Barnawi", "penerbit_id" => "Ar Ruzz Media", "tahun_terbit" => "2013", "tempat_terbit" => "Jakarta", "halaman" => 168, "tinggi" => "13,5 x 20 cm", "isbn" => "978-602-1579-16-9", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "365", "ddc" => "028", "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Break", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Sony Ade", "penerbit_id" => "Arina", "tahun_terbit" => "2005", "tempat_terbit" => "Jakarta", "halaman" => 139, "tinggi" => "11 x 19 cm", "isbn" => "979-989-62-7-4", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "BUDIDAYA COKLAT", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Budidaya Ikan Mas", "tanggal" => "2018-08-20", "kategori_id" => 5, "penulis" => "Tim Penulis", "penerbit_id" => "Dinamika Media", "tahun_terbit" => "2007", "tempat_terbit" => "Jakarta", "halaman" => 52, "tinggi" => NULL, "isbn" => "978-979-1472-00-5", "stok" => 1, "sumber_buku" => "Sumbangan Siswa/I Kls.IX", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "BUDIDAYA TANAMAN ", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Budidaya, Pengolahan dan Pemasaran Coklat", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Tumpal H.S Siregar", "penerbit_id" => "PT. Penebar Swadaya", "tahun_terbit" => "1989", "tempat_terbit" => "Jakarta", "halaman" => 157, "tinggi" => "21", "isbn" => "979-8031-94-6", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Buku FOKUS", "tanggal" => "2023-01-10", "kategori_id" => NULL, "penulis" => "Sukismo, dkk", "penerbit_id" => "Erlangga", "tahun_terbit" => "2023", "tempat_terbit" => "Jakarta", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 20, "sumber_buku" => "Hadiah", "rak_id" => "367", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "BUKU HARIAN HAPPY GIRLS", "tanggal" => "2022-06-14", "kategori_id" => 4, "penulis" => "Qurratu Aini", "penerbit_id" => "Gema Insani Press", "tahun_terbit" => "2011", "tempat_terbit" => "Jakarta", "halaman" => 127, "tinggi" => NULL, "isbn" => "978-979-077-241-0", "stok" => 1, "sumber_buku" => "Sumbang buku kls 9 Tp 2021/2022", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Buku Harian Happy Grils", "tanggal" => "2022-06-14", "kategori_id" => NULL, "penulis" => "Qurratu Aini, dkk", "penerbit_id" => "Gema Insani Press", "tahun_terbit" => "2011", "tempat_terbit" => "Jakarta", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "808.83", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Buku Kerja Pedoman Pengelolaan Perpustakaan Madrasah", "tanggal" => "2009-10-04", "kategori_id" => 5, "penulis" => "Tri Septiyantono", "penerbit_id" => NULL, "tahun_terbit" => "2000", "tempat_terbit" => "Yogyakarta", "halaman" => 35, "tinggi" => "27 cm", "isbn" => "979-96092-1-6", "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => "27,802", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Buku Kesehatan Peserta Didik", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Kementrian Kesehatan RI", "penerbit_id" => "Kementrian Kesehatan RI", "tahun_terbit" => NULL, "tempat_terbit" => "Jakarta", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "371,71", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "BUKU NOVEL", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Buku Penilaian Bupena Bahasa Inggris Kelas 2", "tanggal" => "2023-02-20", "kategori_id" => 2, "penulis" => "Nur Zaida", "penerbit_id" => "Erlangga", "tahun_terbit" => "2013", "tempat_terbit" => "Jakarta", "halaman" => 213, "tinggi" => NULL, "isbn" => "978-602-434-782-6", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Buku Penilaian Bupena Bahasa Inggris Kelas 3", "tanggal" => "2023-02-20", "kategori_id" => 2, "penulis" => "Nur Zaida", "penerbit_id" => "Erlangga", "tahun_terbit" => "2013", "tempat_terbit" => "Jakarta", "halaman" => 155, "tinggi" => NULL, "isbn" => "978-602-434-783-3", "stok" => 4, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Buku Penilaian Bupena IPA Kelas 2", "tanggal" => "2023-02-20", "kategori_id" => 6, "penulis" => "Khristiyono", "penerbit_id" => "Erlangga", "tahun_terbit" => "2013", "tempat_terbit" => "Jakarta", "halaman" => 189, "tinggi" => NULL, "isbn" => "978-602-434-194-7", "stok" => 20, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Buku Penilaian Bupena IPA Kelas 3", "tanggal" => "2023-02-20", "kategori_id" => 6, "penulis" => "Khristiyono", "penerbit_id" => "Erlangga", "tahun_terbit" => "2019", "tempat_terbit" => "Jakarta", "halaman" => 150, "tinggi" => NULL, "isbn" => "978-602-434-195-4", "stok" => 2, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Buku Penilaian Bupena IPS Kelas 2", "tanggal" => "2023-02-20", "kategori_id" => 6, "penulis" => "N. Suparno & T.D Haryo Tamtomo", "penerbit_id" => "Erlangga", "tahun_terbit" => "2018", "tempat_terbit" => "Jakarta", "halaman" => 90, "tinggi" => NULL, "isbn" => "978-602-434-934-9", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Buku Penilaian Bupena IPS Kelas 3", "tanggal" => "2023-02-20", "kategori_id" => 1, "penulis" => "N. Suparno & T.D Haryo Tamtomo", "penerbit_id" => "Erlangga", "tahun_terbit" => "2019", "tempat_terbit" => "Jakarta", "halaman" => 98, "tinggi" => NULL, "isbn" => "978-602-434-935-6", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Buku Penilaian Bupena Matematika Kelas 2", "tanggal" => "2023-02-20", "kategori_id" => 6, "penulis" => "Wono Setya Budha, Ph.D", "penerbit_id" => "Erlangga", "tahun_terbit" => "2019", "tempat_terbit" => "Jakarta", "halaman" => 203, "tinggi" => NULL, "isbn" => "978-602-434-199-2", "stok" => 2, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Buku Penilaian Bupena Matematika Kelas 3", "tanggal" => "2023-02-20", "kategori_id" => 6, "penulis" => "Wono Setya Budha, Ph.D", "penerbit_id" => "Erlangga", "tahun_terbit" => "2019", "tempat_terbit" => "Bandung", "halaman" => 116, "tinggi" => NULL, "isbn" => "978-602-434-200-5", "stok" => 2, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "BUKU PINTAR", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Buku Pintar Al Qur'an", "tanggal" => "2007-04-11", "kategori_id" => NULL, "penulis" => "Mohkhtar Stork &Muhammad Iqbal", "penerbit_id" => "Ladang Pustaka & Intimedia", "tahun_terbit" => NULL, "tempat_terbit" => "Jakarta", "halaman" => 501, "tinggi" => "23,5", "isbn" => NULL, "stok" => 6, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Buku Pintar Dakwah", "tanggal" => "2007-04-11", "kategori_id" => 5, "penulis" => "Ir. Nogarsyah Moede", "penerbit_id" => "Intimedia & Ladang Pustaka", "tahun_terbit" => "2001", "tempat_terbit" => "Jakarta", "halaman" => 256, "tinggi" => "23", "isbn" => "979-3358-12-2", "stok" => 5, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "BUKU PINTAR DAN ATLAS INDONESIA DUNIA", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "HASBI LAURENS TITO", "penerbit_id" => "DUA MEDIA", "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => 128, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Buku Pintar Fakta-Fakta Dunia ", "tanggal" => "2007-04-11", "kategori_id" => 5, "penulis" => "DR. James Mackay", "penerbit_id" => "Ladang Pustaka & Intimedia", "tahun_terbit" => NULL, "tempat_terbit" => "Jakarta", "halaman" => 472, "tinggi" => "23,5", "isbn" => NULL, "stok" => 9, "sumber_buku" => "dana bos", "rak_id" => NULL, "ddc" => "930", "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Buku Pintar Islam", "tanggal" => "2007-04-11", "kategori_id" => NULL, "penulis" => "Drs. Ir. Nogarsyah Moede Gayo", "penerbit_id" => "Ladang Pustaka & Intimedia", "tahun_terbit" => NULL, "tempat_terbit" => "Jakarta", "halaman" => 533, "tinggi" => NULL, "isbn" => NULL, "stok" => 5, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "BUKU PINTAR PELAJARAN SMP", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Buku Saku Fosil", "tanggal" => "2013-12-12", "kategori_id" => 5, "penulis" => "Tim Abdi Guru", "penerbit_id" => "Erlangga", "tahun_terbit" => "1997", "tempat_terbit" => "Jakarta", "halaman" => 160, "tinggi" => "11 x 18 cm", "isbn" => "979-688-288-4", "stok" => 10, "sumber_buku" => "Dana Rutin", "rak_id" => "000", "ddc" => "2,561", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Buku Saku Penemuan", "tanggal" => "2013-12-12", "kategori_id" => 5, "penulis" => "Eryl Davies", "penerbit_id" => "Erlangga", "tahun_terbit" => "2001", "tempat_terbit" => "Jakarta", "halaman" => 160, "tinggi" => "11 x 18 cm", "isbn" => "979-688-228-0", "stok" => 20, "sumber_buku" => "Dana Rutin", "rak_id" => "000", "ddc" => "002.910.9", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "BUKU SELF IMPROVEMENT", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "BUMANTARA", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "ULVA AFDILLAH UMAR", "penerbit_id" => "PT. GRAMEDIA", "tahun_terbit" => "2020", "tempat_terbit" => "JAKARTA", "halaman" => 196, "tinggi" => NULL, "isbn" => "9786230018862", "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "BUNG KARNO", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "ASVI WARMAN ADAM", "penerbit_id" => "PT. KOMPAS MEDIA NUSANTARA", "tahun_terbit" => "2012", "tempat_terbit" => "JAKARTA", "halaman" => 268, "tinggi" => "14 X 21 CM", "isbn" => "978-979-709-623-6", "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Cahaya Mimbar Kumpulan Khotbah Jum'at Pilihan", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "KH. Burhanuddin", "penerbit_id" => "Legenda Press", "tahun_terbit" => "0", "tempat_terbit" => "0", "halaman" => 244, "tinggi" => NULL, "isbn" => "0", "stok" => 2, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "297,324", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Can't Let Go", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Esi Lahur", "penerbit_id" => "Gramedia Pustaka Utama", "tahun_terbit" => "2015", "tempat_terbit" => "Jakarta", "halaman" => 312, "tinggi" => "20", "isbn" => "978-602-03-1417-4", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "808,9", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Cemaran Bakteri Patogen Pada Pangan ", "tanggal" => "2023-02-03", "kategori_id" => NULL, "penulis" => "Dewi Sartika", "penerbit_id" => "Graha Ilmu", "tahun_terbit" => "2018", "tempat_terbit" => "Yogyakarta", "halaman" => 110, "tinggi" => NULL, "isbn" => "978-602-262-886-6", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "381", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "CERITA AISYAH", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Cerita di Bulan November", "tanggal" => "2023-05-25", "kategori_id" => 5, "penulis" => "  Siswa/I MTsN 2 Bandar Lampung 9U1 2022/2023", "penerbit_id" => NULL, "tahun_terbit" => "2022", "tempat_terbit" => "Bandar Lampung", "halaman" => 36, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "CERITA GLEN ANGGGARA", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "LULUK HF", "penerbit_id" => "COCONUT BOOKS", "tahun_terbit" => "2019", "tempat_terbit" => "JAWA BARAT", "halaman" => 384, "tinggi" => NULL, "isbn" => "978-623-7439-07-3", "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "CERITA RAKYAT NUSANTARA", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "CERITA TELADAN ", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Cerita Teladan Burung Bayan", "tanggal" => "2022-10-19", "kategori_id" => 5, "penulis" => "Siti Zainab Luxfiati", "penerbit_id" => "Widya Utama", "tahun_terbit" => "2007", "tempat_terbit" => "Jakarta", "halaman" => 220, "tinggi" => "21 Cm", "isbn" => "978-979-728-774-0", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "355", "ddc" => "808,9", "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Cewek", "tanggal" => "2022-10-25", "kategori_id" => 5, "penulis" => "Esti Kinasih", "penerbit_id" => "Teenlit", "tahun_terbit" => "2005", "tempat_terbit" => "Jakarta", "halaman" => 424, "tinggi" => "20 cm", "isbn" => "979-22-1515-8", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "360", "ddc" => "808,9", "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "CINTA PERTAMA DAN TERAKHIR", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "ASTER PUTIH", "penerbit_id" => "RUMAH ORANYE", "tahun_terbit" => "2013", "tempat_terbit" => "SOLO", "halaman" => 224, "tinggi" => NULL, "isbn" => "978-602-1588-17-8", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Cinta Suci Zahrana", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Habibur Rahman EL Shirazy", "penerbit_id" => "Ihwah publishing House", "tahun_terbit" => "2011", "tempat_terbit" => "jakarta", "halaman" => 284, "tinggi" => NULL, "isbn" => "978-602-98221-6-8", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "808,9", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Ciri - ciri dan Klasifikasi Makhluk Hidup", "tanggal" => "2017-11-16", "kategori_id" => 5, "penulis" => "Prof. Yohanes Surya, Ph. D", "penerbit_id" => "PT. Kandel", "tahun_terbit" => "2017", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Cokelat Praline Lezat Memikat", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Wiwiek Sulistyowati", "penerbit_id" => "Buku Serbu", "tahun_terbit" => "2018", "tempat_terbit" => "Yogyakarta", "halaman" => 48, "tinggi" => "15x23", "isbn" => "978-602-51698-3-0", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "808,9", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Coklat Praline Lezat Memikat", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => "Wiwiek Sulistyowati", "penerbit_id" => "Ajarmasak", "tahun_terbit" => "2018", "tempat_terbit" => "Jakarta Selatan", "halaman" => NULL, "tinggi" => NULL, "isbn" => "978-602-51698-3-0", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Come On Miley !", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => "Marion Rayhan Az Zahra", "penerbit_id" => "PT. MIZAN PUSTAKA", "tahun_terbit" => "2015", "tempat_terbit" => "Bandung", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Congklak Misterius", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Rane Kiara Anjeli", "penerbit_id" => "Dar! Mizan", "tahun_terbit" => "2014", "tempat_terbit" => "Bandung", "halaman" => 140, "tinggi" => "21", "isbn" => "978-602-242-161-0", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "808,9", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Contoh - contoh Pidato 3 Bahasa", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Abu Muhammad al-Hannan", "penerbit_id" => "Aulia", "tahun_terbit" => "0", "tempat_terbit" => "Surabaya", "halaman" => 159, "tinggi" => "0", "isbn" => "0", "stok" => 2, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "809,5", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "CONTOH-CONTOH 3 PIDATO BAHASA", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "M. AZHAR", "penerbit_id" => "ABSOLU ", "tahun_terbit" => "2004", "tempat_terbit" => "YOGYAKARTA", "halaman" => 368, "tinggi" => "13 X 20 CM", "isbn" => "978-979-3641-29-4", "stok" => 1, "sumber_buku" => "SUMBANGAN BUKU ALUMNI TP. 2021/2022", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Cotton Candy Love", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => "Priscila Stevanni", "penerbit_id" => "PT. Bentang Pustaka", "tahun_terbit" => "2013", "tempat_terbit" => "Jakarta", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Daftar Judul Buku Yang Disahkan Direktur Jenderal Pendidikan Dasar dan Menegah Untuk Sekolah Lanjutan Tingkat Pertama", "tanggal" => "2009-10-04", "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => "1996", "tempat_terbit" => "Jakarta", "halaman" => 97, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Daftar Tajuk Subyek Untuk Perpustakaan", "tanggal" => "2009-10-04", "kategori_id" => 5, "penulis" => "Drs. Soekarman", "penerbit_id" => "PT.BPK Gunung Mulia", "tahun_terbit" => "2009", "tempat_terbit" => "Jakarta", "halaman" => 146, "tinggi" => "25 cm", "isbn" => "978-979-415-959-0", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "25", "ddc" => "25,49", "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Daftar Tajuk Subyek Untuk Perpustakaan", "tanggal" => "1999-03-01", "kategori_id" => 5, "penulis" => "Mastini Hardjoprakoso", "penerbit_id" => NULL, "tahun_terbit" => "1995", "tempat_terbit" => "Jakarta", "halaman" => 521, "tinggi" => "28 cm", "isbn" => "979-8289-25-0", "stok" => 2, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => "25,49", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "DALAM CERMIN", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "MOCHTAR LUBIS", "penerbit_id" => "YAYASAN OBOR", "tahun_terbit" => "1989", "tempat_terbit" => "JAKARTA", "halaman" => 145, "tinggi" => "17 CM", "isbn" => "979-461-044-5", "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Dalil Anfus Al-quran dan embriologi", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Muhammad Izzudin Taufiq", "penerbit_id" => "Tiga serangkai", "tahun_terbit" => "2006", "tempat_terbit" => "Solo", "halaman" => 254, "tinggi" => "21", "isbn" => "979-33-0140-6", "stok" => 2, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "574,3", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "DANAU TOBA ", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Dancing Cup Cake", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Lia Heliana dan Zee", "penerbit_id" => "Bhuana Ilmu Populer", "tahun_terbit" => "2019", "tempat_terbit" => "Jakarta", "halaman" => 190, "tinggi" => NULL, "isbn" => "978-602-483-389-3", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "DANIELLE STEEL LEGACY", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "DANIEL STEEL ", "penerbit_id" => "Gramedia Pustaka Utama", "tahun_terbit" => "2010", "tempat_terbit" => "JAKARTA SELATAN", "halaman" => 448, "tinggi" => "18", "isbn" => "978-979-22-9661-7", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "DARI RASULLAH UNTUK PENDIDIK", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "MHD. ROIS ALMAUDUDY", "penerbit_id" => "TINTA MEDIA", "tahun_terbit" => "2018", "tempat_terbit" => "Solo", "halaman" => 162, "tinggi" => "21 Cm", "isbn" => "978-602-5731-27-3", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Darren Shan", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Cirque Du Freak", "penerbit_id" => "Takahiro Arai", "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Dasar Dasar Iman", "tanggal" => "2003-12-17", "kategori_id" => 5, "penulis" => "Abul Ala Maududi", "penerbit_id" => "Pustaka", "tahun_terbit" => "2000", "tempat_terbit" => "Bandung", "halaman" => 184, "tinggi" => NULL, "isbn" => NULL, "stok" => 4, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Dasar-Dasar Fisiologi Kardiovaskuler", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Ibnu Masud ", "penerbit_id" => " Buku Kedokteran EGC", "tahun_terbit" => "1989", "tempat_terbit" => "Jakarta", "halaman" => 176, "tinggi" => "17,5x24,5", "isbn" => "979-448-096-7", "stok" => NULL, "sumber_buku" => "Hadiah ", "rak_id" => "000", "ddc" => "612,13", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Data Keagamaan Provinsi Lampung 2007", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Departemen Agama Provinsi Lampung", "penerbit_id" => "Departemen Agama Provinsi Lampung", "tahun_terbit" => "2007", "tempat_terbit" => "Bandar Lampung", "halaman" => 142, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "20", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Da'wah Tak Sekedar Kata", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Fathan al-haq", "penerbit_id" => "Bina Biladi Press ", "tahun_terbit" => "2007", "tempat_terbit" => "Bandung", "halaman" => 140, "tinggi" => "21 cm", "isbn" => "979-25-0594-6", "stok" => 2, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "DEAR ALLAH", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Dear Mantan", "tanggal" => "2022-08-20", "kategori_id" => 5, "penulis" => "Rina Kartomisastro", "penerbit_id" => "Senja", "tahun_terbit" => "2015", "tempat_terbit" => "BANDUNG", "halaman" => 224, "tinggi" => "13 x 19", "isbn" => "978-602-255-880-4", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Dear Mantan Karena Waktu Tak Bisa Menhapusmu", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Rina Kartomisastro", "penerbit_id" => "Senja", "tahun_terbit" => "2015", "tempat_terbit" => "Yogyakarta", "halaman" => 224, "tinggi" => "13x19", "isbn" => "978-602-255-880-4", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "808,9", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Dear You", "tanggal" => "2022-10-25", "kategori_id" => 5, "penulis" => "Moammar Emka", "penerbit_id" => "Gagas Media", "tahun_terbit" => "2011", "tempat_terbit" => "Jakarta", "halaman" => 382, "tinggi" => "13 x 19 cm", "isbn" => "979-780-528-9", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "359", "ddc" => "808,9", "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Death Smile", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Gema Al Wutsqo, dkk", "penerbit_id" => "PT. Mizan Pustaka", "tahun_terbit" => "2015", "tempat_terbit" => "Jakarta", "halaman" => 128, "tinggi" => "19", "isbn" => "978-602-1128-92-3", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "808,9", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "DESENTRALISASI", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Detektif Canon 42", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Aoyama Gosho", "penerbit_id" => "Elex Media Komputindo", "tahun_terbit" => "2003", "tempat_terbit" => "Jakarta", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Detektif Canon 53", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Aoyama Gosho", "penerbit_id" => "Elex Media Komputindo", "tahun_terbit" => "2006", "tempat_terbit" => "Jakarta", "halaman" => NULL, "tinggi" => NULL, "isbn" => "979-637-789-6", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Detektif Conan", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Aoyama Gosho", "penerbit_id" => "Pt. Elex Media Komputindo", "tahun_terbit" => "2003", "tempat_terbit" => "Jakarta", "halaman" => NULL, "tinggi" => NULL, "isbn" => "979-637-789-6", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "808,9", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "DETEKTIF CONAN", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Detektif Conan 26", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Aoyama Gosho", "penerbit_id" => "Elex Media Komputindo", "tahun_terbit" => "2000", "tempat_terbit" => "Jakarta", "halaman" => NULL, "tinggi" => NULL, "isbn" => "979-663-789-6", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Detektif Conan Eps.48", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Aoyama Gosho", "penerbit_id" => "Gramedia Pustaka Utama", "tahun_terbit" => "2007", "tempat_terbit" => "Jakarta", "halaman" => 100, "tinggi" => NULL, "isbn" => "978-979-27-0962-9", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "DETEKTIF CONAN VALUME 48", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "DETEKTIF CONAN VOL.63", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "MASASHI KISHIMOTO", "penerbit_id" => "Gramedia Pustaka Utama", "tahun_terbit" => "1999", "tempat_terbit" => "JAKARTA", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "DETEKTIF CONAN VOL.99", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "GOSHO AOYAMA", "penerbit_id" => "Gramedia Pustaka Utama", "tahun_terbit" => "1994", "tempat_terbit" => "Jakarta", "halaman" => 100, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Detektif Kindaichi", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Yozaburo Kanari", "penerbit_id" => "Gramedia Pustaka Utama", "tahun_terbit" => "2000", "tempat_terbit" => "Jakarta", "halaman" => NULL, "tinggi" => NULL, "isbn" => "979-20-1044-0", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "DI SUDUT JALAN BRAGA", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Dian yang tak kunjung padam", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "S.Takdir Alisjahbana", "penerbit_id" => "Dian Rakyat", "tahun_terbit" => "1995", "tempat_terbit" => "Jakarta", "halaman" => 156, "tinggi" => NULL, "isbn" => "979-523-225-8", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "808,9", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Dibawah Lindungan Ka' bah", "tanggal" => "2018-08-20", "kategori_id" => 5, "penulis" => "Hamka", "penerbit_id" => "Balai Pustaka ", "tahun_terbit" => "2011", "tempat_terbit" => "Jakarta", "halaman" => 76, "tinggi" => "14,8 x 21 cm", "isbn" => "979-690-854-9", "stok" => 1, "sumber_buku" => "Sumbangan Siswa/I Kls.IX", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Dienul Islam", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Drs. K. H. Nasruddin Razak", "penerbit_id" => "PT. Alma'arif", "tahun_terbit" => "1973", "tempat_terbit" => "Bandung", "halaman" => 334, "tinggi" => "14 X 21", "isbn" => "979-400-193-7", "stok" => 2, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "297,03", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "DIKTA DAN HUKUM", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Dirasah Islamiyah II", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Drs. Yussan Asmuni", "penerbit_id" => "Rajawali Pers", "tahun_terbit" => "1996", "tempat_terbit" => "Jakarta", "halaman" => 142, "tinggi" => "21 cm", "isbn" => "979-421-481-7", "stok" => 4, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "297,67", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "DOA DAN ZIKIR SEPANJANG MASA", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "TIM BELANOOR", "penerbit_id" => "PT. NIAGA SWADAYA", "tahun_terbit" => "2010", "tempat_terbit" => "JAKARTA", "halaman" => 245, "tinggi" => NULL, "isbn" => "978-602-96253-5-6", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Doa Wali - Wali Allah Pedoman Umat Islam", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Ustadz Labib MZ", "penerbit_id" => "Bintang Usaha Jaya", "tahun_terbit" => "2003", "tempat_terbit" => "Surabaya", "halaman" => 448, "tinggi" => "0", "isbn" => "0", "stok" => 3, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "297,2", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "DONGENG KANCIL", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "DONGENG PENGANTAR TIDUR", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Dongeng Putri Salju", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Titis Asmarandana", "penerbit_id" => "Dua Media", "tahun_terbit" => NULL, "tempat_terbit" => "Surabaya", "halaman" => 128, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Dongeng Si Kancil", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "MB. Rahimsyah. Ar", "penerbit_id" => "Mutiara Agung", "tahun_terbit" => NULL, "tempat_terbit" => "Surabaya", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Doraemon", "tanggal" => "2022-06-14", "kategori_id" => NULL, "penulis" => "Fujiko F Fujio", "penerbit_id" => "Gramedia Pustaka Utama", "tahun_terbit" => "1996", "tempat_terbit" => "Bandung", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => NULL, "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "DORAEMON", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "FUJIKO F. FUJIO", "penerbit_id" => "PT. ELEX MEDIA KOMPUTINDO", "tahun_terbit" => "1992", "tempat_terbit" => "JAKARTA", "halaman" => 187, "tinggi" => NULL, "isbn" => "979-20-8540-2", "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "DORAEMON 'MISTERI'", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "DORAEMON 'PETUALANGAN'", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "FUJIKO F. FUJIO", "penerbit_id" => "PT. GRAMEDIA WIDIASARANA INDONESIA ", "tahun_terbit" => "1996", "tempat_terbit" => "JAKARTA", "halaman" => 188, "tinggi" => NULL, "isbn" => "979-637-356-4", "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "DORK DIARIES", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Double R", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Diendra Sarteka", "penerbit_id" => "PT. MIZAN PUSTAKA", "tahun_terbit" => "2012", "tempat_terbit" => "Bandung", "halaman" => 180, "tinggi" => "19,5 Cm", "isbn" => "978-979-066-858-4", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Dream Big, Make It", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Felicia Hwang", "penerbit_id" => "Sun Education Group", "tahun_terbit" => "2019", "tempat_terbit" => "Jakarta", "halaman" => 289, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "808,9", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "DTEKTIF CONAN", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Ekologi", "tanggal" => "2017-11-16", "kategori_id" => 5, "penulis" => "Prof. Yohanes Surya, Ph. D", "penerbit_id" => "PT. Kandel", "tahun_terbit" => "2017", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Emak Ingin Naik Haji", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Asma Nadia", "penerbit_id" => "Publishing House", "tahun_terbit" => "2009", "tempat_terbit" => "Jakarta", "halaman" => 210, "tinggi" => "20,5", "isbn" => "978-979-19154-4-1", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "808,9", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Emoticon", "tanggal" => "2017-05-05", "kategori_id" => 5, "penulis" => "Ricky Cuaca", "penerbit_id" => "Euthenia", "tahun_terbit" => "2015", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah Lomba Perpustakaan Sekota Bandar Lampung", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "EMOTIONAL WELINESS", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Enaknya Makan Buak TAT", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Destiani", "penerbit_id" => "Kemeterian Pendidikan dan Kebudayaan Kantor Bahasa Lampung", "tahun_terbit" => "2020", "tempat_terbit" => "Lampung", "halaman" => 45, "tinggi" => NULL, "isbn" => "978-602-52764-9-1", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Ensiklopedi Islam  ", "tanggal" => "2002-05-01", "kategori_id" => 5, "penulis" => "Ichtiar Ban Van Hoeve", "penerbit_id" => "Dewan Redaksi Ensiklopedi Islam", "tahun_terbit" => NULL, "tempat_terbit" => "Jakarta", "halaman" => 356, "tinggi" => "26 cm", "isbn" => "979-8276-61--2", "stok" => 4, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => "297,03", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Ensiklopedi Islam  ", "tanggal" => "2002-05-01", "kategori_id" => 5, "penulis" => "Cyril Glasse", "penerbit_id" => "Rajawali Press", "tahun_terbit" => NULL, "tempat_terbit" => "Jakarta", "halaman" => 450, "tinggi" => "26 cm", "isbn" => "979-421-604-6", "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => "297,03", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Ensiklopedi Mini Sejarah & Kebudayaan Islam", "tanggal" => "1998-02-09", "kategori_id" => 5, "penulis" => "H. Soekama Karya", "penerbit_id" => "Logos Wacana ILMU", "tahun_terbit" => "1996", "tempat_terbit" => "Jakarta", "halaman" => 415, "tinggi" => NULL, "isbn" => "979-626-021-2", "stok" => 3, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Etika Belajar Bagi Penuntut Ilmu", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Drs. A. Ma'ruf Asrori", "penerbit_id" => "Al-Miftah", "tahun_terbit" => "2012", "tempat_terbit" => "Surabaya", "halaman" => 144, "tinggi" => "0", "isbn" => "0", "stok" => 1, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "170", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Etika Islam Tentang Kenakalan Remaja", "tanggal" => "2022-10-19", "kategori_id" => 5, "penulis" => "Drs. Sudarsono, S.H", "penerbit_id" => "Rineka Cipta", "tahun_terbit" => "2005", "tempat_terbit" => "Jakarta", "halaman" => 153, "tinggi" => NULL, "isbn" => "979-518-176-9", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "356", "ddc" => "170", "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Facebook Gokil", "tanggal" => "2018-08-20", "kategori_id" => 5, "penulis" => "Zahra Salsabila dkk", "penerbit_id" => "Mizan Pustaka", "tahun_terbit" => "2014", "tempat_terbit" => "Bandung", "halaman" => 124, "tinggi" => "21", "isbn" => "978-602-9329-57-5", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "808,9", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Faktor-faktor Pengubah Fatwa", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Dr. Yusuf Al-Qaradhawi", "penerbit_id" => "Pustaka Al Kautsar", "tahun_terbit" => "2009", "tempat_terbit" => "Jakarta", "halaman" => 132, "tinggi" => "20,9", "isbn" => "978-979-592-498-2", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "297", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Fantastic Experiment", "tanggal" => "2018-08-20", "kategori_id" => 5, "penulis" => "Jonea Critie", "penerbit_id" => "PT. MIZAN PUSTAKA", "tahun_terbit" => "2013", "tempat_terbit" => "Bandung", "halaman" => 144, "tinggi" => "21", "isbn" => "978-602-7870-00-0", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "FANTASTIC SLIENCE", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "FF Side", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Natsuko Heiuchi", "penerbit_id" => "Gramedia Pustaka Utama", "tahun_terbit" => "1999", "tempat_terbit" => "Jakarta", "halaman" => 185, "tinggi" => NULL, "isbn" => "979-20-0535-8", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "FILOSOFI TERAS", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "HENRY MANAMPIRING", "penerbit_id" => "Gramedia Pustaka Utama", "tahun_terbit" => "2019", "tempat_terbit" => "Surabaya", "halaman" => 320, "tinggi" => "13 Cm X 19 Cm", "isbn" => "978-602-412-518-9", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Filsafat Agama", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Prof.Dr.Amsal Bakhtiar, M.A", "penerbit_id" => "Rajawali Press", "tahun_terbit" => "2014", "tempat_terbit" => "Jakarta", "halaman" => 270, "tinggi" => "21 cm", "isbn" => "979-769-100-4", "stok" => 2, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "210", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Filsafat Pendidikan Islam", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Prof. H. Muzayyin Arifin, M.Ed.", "penerbit_id" => "Bumi Aksara", "tahun_terbit" => "2014", "tempat_terbit" => "Jakarta", "halaman" => 171, "tinggi" => "0", "isbn" => "979-526-857-0", "stok" => 2, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "297,61", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "FINANCIAL PARENTING", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Fiqh Muamalah", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Prof. Dr. H. Hendi Suhendi, M.Si", "penerbit_id" => "Raja Grafindo Persada", "tahun_terbit" => "2014", "tempat_terbit" => "Jakarta", "halaman" => 344, "tinggi" => "21 cm", "isbn" => "979-421-897-9", "stok" => 2, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "297,4", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Fiqh Muamalah", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Prof. Dr. H. Rachmat Syafe'I, M.A", "penerbit_id" => "Pustaka Setia", "tahun_terbit" => "2001", "tempat_terbit" => "Bandung", "halaman" => 280, "tinggi" => "15 x 21 cm", "isbn" => "979-730-114-1", "stok" => 3, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "297,4", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Fiqih Ibadah", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Dr. H.A.Hasan Ridwan, M.Ag", "penerbit_id" => "Pustaka Setia", "tahun_terbit" => "2009", "tempat_terbit" => "Bandung", "halaman" => 289, "tinggi" => "16 x 24 cm", "isbn" => "978-979-076-069-1", "stok" => 3, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "297,4", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Fiqih Jinayah", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Dr. H. M. Nurul Irvan, M.Ag", "penerbit_id" => "Amzah", "tahun_terbit" => "2013", "tempat_terbit" => "Jakarta", "halaman" => 234, "tinggi" => "23 cm", "isbn" => "978-602-8689-76-2", "stok" => 2, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "297,45", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Fiqih Kelas 7 Pegangan Guru", "tanggal" => "2015-08-20", "kategori_id" => 1, "penulis" => "Abdul Kadir Ahmad", "penerbit_id" => "Direktorat Pendidikan Madrasah", "tahun_terbit" => "2014", "tempat_terbit" => "Jakarta", "halaman" => 124, "tinggi" => NULL, "isbn" => "978-979-8446-64-1", "stok" => 2, "sumber_buku" => "Bantuan kanwil", "rak_id" => "142", "ddc" => "2 x 4", "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Fiqih Wanita Shalihah", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Ahmad Najieh", "penerbit_id" => "Menara Suci", "tahun_terbit" => "2012", "tempat_terbit" => "Surabaya", "halaman" => 255, "tinggi" => "0", "isbn" => "0", "stok" => 1, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "0", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "FLOU IN YOU", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "FLOWER OF WISHES", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Fokus US SMP/MTs 2023", "tanggal" => "2023-01-10", "kategori_id" => NULL, "penulis" => "Sukismo, dkk", "penerbit_id" => "Erlangga", "tahun_terbit" => "2023", "tempat_terbit" => "Jakarta", "halaman" => 452, "tinggi" => NULL, "isbn" => "978-623-266-837-9", "stok" => 20, "sumber_buku" => "Dana Bos", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Fotografer Cilik Berbakat", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Michael Theodric", "penerbit_id" => "Tiga Ananda", "tahun_terbit" => "2013", "tempat_terbit" => "Solo", "halaman" => 80, "tinggi" => "21", "isbn" => "978-602-257-484-2", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "FOTOGRAFER SI CILIK", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "FULL UPDATE RPAL (RINGKASAN PENGETAHUAN ALAM LENGKAP)", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "SURYATI, S.SI & RETNO DEWI P., S.PD.SI", "penerbit_id" => "PUSTAKA WIDYATAMA", "tahun_terbit" => "2015", "tempat_terbit" => "YOGYAKARTA", "halaman" => 160, "tinggi" => "14,5 X 21 CM", "isbn" => "979-620-056-2", "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Fungsi Bahasa & Sikap Bahasa", "tanggal" => "2017-12-04", "kategori_id" => 5, "penulis" => "Harimurti Kridalaksana", "penerbit_id" => "Nusa Indah", "tahun_terbit" => "1974", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Sumbangan Dari Perpustakaan Daerah Lampung", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Garuda di Dadaku", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Salman Aristo", "penerbit_id" => "PT. MIZAN PUSTAKA", "tahun_terbit" => "2009", "tempat_terbit" => "Jakarta", "halaman" => 156, "tinggi" => "19,5  Cm", "isbn" => "978-979-066-031-1", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Gaul Abis Kuasai Toefl Dalam Waktu Singkat", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => "Sastra Noor Qalam", "penerbit_id" => "PT. Grasindo", "tahun_terbit" => "2015", "tempat_terbit" => "Banding", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Gema Tanah Air", "tanggal" => "2017-12-04", "kategori_id" => 5, "penulis" => "H.B. Yassin", "penerbit_id" => "Balai Pustaka", "tahun_terbit" => "1982", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Sumbangan Dari Perpustakaan Daerah Lampung", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Genk Go Green Forever", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Sucia Rahmadhani", "penerbit_id" => "Dar! Mizan", "tahun_terbit" => "2011", "tempat_terbit" => "Bandung", "halaman" => 192, "tinggi" => "19,5", "isbn" => "978-979-066-853-9", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "808,9", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Geometri", "tanggal" => "2017-11-16", "kategori_id" => 5, "penulis" => "Prof. Yohanes Surya, Ph. D", "penerbit_id" => "PT. Kandel", "tahun_terbit" => "2017", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Gerakan Disiplin Nasional", "tanggal" => "1995-08-08", "kategori_id" => 5, "penulis" => "D. Sumarmo", "penerbit_id" => "CV. Mini Jaya Abadi", "tahun_terbit" => "1995", "tempat_terbit" => "Jakarta", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Gerakan Disiplin Nasional 1995", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "D.Soemarmo", "penerbit_id" => "Mini Jaya Abadi", "tahun_terbit" => "1995", "tempat_terbit" => "Jakarta", "halaman" => 252, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => "hadiah", "rak_id" => "000", "ddc" => "320,54", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Getaran, Gelombang Bunyi dan Cahaya", "tanggal" => "2017-11-16", "kategori_id" => 5, "penulis" => "Prof. Yohanes Surya, Ph. D", "penerbit_id" => "PT. Kandel", "tahun_terbit" => "2017", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "GIBRAN DIRGANTARA", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "FALISTIYANA", "penerbit_id" => "PT. SEMBILAN CAHAYA ABADI", "tahun_terbit" => "2021", "tempat_terbit" => "JAKARTA SELATAN", "halaman" => 348, "tinggi" => "13 X 19 CM", "isbn" => "978-623-310-032-8", "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "GIEN ANGGARA", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Gizi Kecerdasan Anak", "tanggal" => "2017-12-04", "kategori_id" => 5, "penulis" => "Bambang Marhijanto", "penerbit_id" => "Bintang Pelajar", "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Sumbangan Dari Perpustakaan Daerah Lampung", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "GOOD IN BED", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Groming Up", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Yuuki Masami", "penerbit_id" => "Pt. Elex Media Komputindo", "tahun_terbit" => "2000", "tempat_terbit" => "Jakarta", "halaman" => 186, "tinggi" => NULL, "isbn" => "979-20-3752-7", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "808,9", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Gus Dur Jejak Bijak Sang Guru Bangsa", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "Anom Whani Wicaksana", "penerbit_id" => "C-Klik Media", "tahun_terbit" => "2018", "tempat_terbit" => "Yogyakarta", "halaman" => 154, "tinggi" => NULL, "isbn" => "978-602-5448-32-4", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Hadiah Lebaran", "tanggal" => "2017-05-05", "kategori_id" => 5, "penulis" => "Bambang Joko Susilo", "penerbit_id" => "Republika", "tahun_terbit" => "2007", "tempat_terbit" => "Jakarta", "halaman" => 120, "tinggi" => "20,5", "isbn" => "97979110205-6", "stok" => 1, "sumber_buku" => "Hadiah Lomba Perpustakaan Sekota Bandar Lampung", "rak_id" => "000", "ddc" => "813", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Hadis Tarbawi", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Bukhari Umar, M.Ag.", "penerbit_id" => "Amzah", "tahun_terbit" => "2014", "tempat_terbit" => "Jakarta", "halaman" => 212, "tinggi" => "21 cm", "isbn" => "978-602-8689-70-0", "stok" => 2, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "297,22", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "HADIST BUKHARI", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "HAFALAN PRAKTIS DAN KOMPLIT RUMUS SMP", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "FIFIT ASTUTI, S.PD & RETNO UTAMI, S.PD.SI", "penerbit_id" => "PENERBIT INDOLITERASI ", "tahun_terbit" => "2014", "tempat_terbit" => "YOGYAKARTA", "halaman" => 280, "tinggi" => "14 X 20 CM", "isbn" => "978-602-7900-93-6", "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Haji Gratis ", "tanggal" => "2023-02-03", "kategori_id" => NULL, "penulis" => "M. Anwar Sani & Yusuf Mansur", "penerbit_id" => "Sygma Creative Media Corp", "tahun_terbit" => "2013", "tempat_terbit" => "Bandung", "halaman" => 109, "tinggi" => "13,5 x 20,5 cm", "isbn" => "978-979-055-486--3", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "380", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "HAJI GRATIS SEMUA BISA KE BAITULLAH", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "HAPPY AL QUR'AN", "tanggal" => "2022-08-20", "kategori_id" => 5, "penulis" => "DINDA NURUL AMALIA, DKK", "penerbit_id" => "PT. MIZAN PUSTAKA", "tahun_terbit" => "2017", "tempat_terbit" => "Bandung", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "HAPPY AL-QURAN", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "DINDA NURUL AMALIA, DKK", "penerbit_id" => "PT. MIZAN PUSTAKA", "tahun_terbit" => "2017", "tempat_terbit" => "BANDUNG", "halaman" => 104, "tinggi" => "21 CM", "isbn" => NULL, "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Happy Everyday", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Humaira Phinata Zahra", "penerbit_id" => "Dar! Mizan", "tahun_terbit" => "2012", "tempat_terbit" => "Bandung", "halaman" => 128, "tinggi" => "21", "isbn" => "978-979-066-959-8", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "808,9", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "HAPPY GIRLS", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Hari Hari Bersar Islam", "tanggal" => "2007-04-11", "kategori_id" => 5, "penulis" => "Drs.Shalahuddin Hamid, MA", "penerbit_id" => "PT. Intimedia Cipta Nusantara", "tahun_terbit" => "2003", "tempat_terbit" => "Jakarta Selatan", "halaman" => 142, "tinggi" => "21", "isbn" => "979-3432-58-6", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => "297218", "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Hari-hari Besar Islam", "tanggal" => "2007-04-11", "kategori_id" => 5, "penulis" => "Drs. Shalahuddin Hamid, MA", "penerbit_id" => "PT. Intimedia Cipta Nusantara", "tahun_terbit" => "2003", "tempat_terbit" => "Jakarta Selatan", "halaman" => 142, "tinggi" => "21", "isbn" => "979-3432-58-6", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "HAZEL EYES", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Henderlust Doyan Jalan", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Chris Dyer", "penerbit_id" => "Gramedia Pustaka Utama", "tahun_terbit" => "2004", "tempat_terbit" => "Jakarta", "halaman" => 400, "tinggi" => "18 Cm", "isbn" => "979-22-0758-9", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "HIDAYAH", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Hidayah Meninggal Saat Sholat Sunnah Qbaliyah", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => NULL, "penerbit_id" => "PT. Variapop Group", "tahun_terbit" => "2010", "tempat_terbit" => "Magelang", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "HIDUP SEJARAH DALAM NAUNGAN ISLAM", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "HIDUP UNTUK MATI", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "MAYA ISMAIL", "penerbit_id" => "INDEPTH PUBLISHING", "tahun_terbit" => "2014", "tempat_terbit" => "BANDAR LAMPUNG", "halaman" => 93, "tinggi" => "13,5 X 20,5 CM", "isbn" => "978-602-1534-14-4", "stok" => 1, "sumber_buku" => "SUMBANGAN BUKU ALUMNI TP. 2021/2022", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "HIMPUNAN HADITS QUDSI", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "ACHMAD SUNARTO & SYAMSUDDIN NOOR, S.AG", "penerbit_id" => "AN NUR ", "tahun_terbit" => "2005", "tempat_terbit" => "JAKARTA", "halaman" => 269, "tinggi" => NULL, "isbn" => "979-99947-4-8", "stok" => 1, "sumber_buku" => "SUMBANGAN BUKU ALUMNI TP. 2021/2022", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Himpunan Peraturan Perundang Undangan Pembinaan Dan Pelayanan Umat Khonghucu", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => "2013", "tempat_terbit" => NULL, "halaman" => 352, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "368", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Holiday In Korea", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Husna Salsabila", "penerbit_id" => "Noura Books", "tahun_terbit" => "2012", "tempat_terbit" => "Jakarta", "halaman" => 110, "tinggi" => NULL, "isbn" => "978-602-9498-77-6", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "808,9", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Hujan", "tanggal" => "2023-05-25", "kategori_id" => 5, "penulis" => "Tere Liye", "penerbit_id" => "Sabak Grip Nusantara", "tahun_terbit" => "2023", "tempat_terbit" => "Jakarta", "halaman" => 320, "tinggi" => "20", "isbn" => "978-623-99878-7-9", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Hwaiting Hye Mi!", "tanggal" => "2018-08-20", "kategori_id" => 5, "penulis" => "Laksmi P. Manohara", "penerbit_id" => "PT. MIZAN PUSTAKA", "tahun_terbit" => "2014", "tempat_terbit" => "Bandung", "halaman" => 134, "tinggi" => NULL, "isbn" => "978-602-242-628-8", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "HWAITING, HYEMI !", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "I Find It In Your Eyes", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Sabrina Zee", "penerbit_id" => "Kosa Publishing", "tahun_terbit" => "2014", "tempat_terbit" => "Bandung", "halaman" => 392, "tinggi" => "14 x21 cm", "isbn" => "978-602-71220-0-0", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "I Want to Hear Your Voice", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Etsuko Kishikawa", "penerbit_id" => "PT. Alex Media Komputindo", "tahun_terbit" => "2012", "tempat_terbit" => "Jakarta", "halaman" => 108, "tinggi" => NULL, "isbn" => "978-602-00-3198-9", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "808,9", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Ibadah Sepenuh Hati", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Amru Khalid", "penerbit_id" => "Aqwam", "tahun_terbit" => "2003", "tempat_terbit" => "Solo", "halaman" => 296, "tinggi" => "23", "isbn" => "979-3653-18-3", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "297", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Ilmu Balut", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "St. Muchtarudin", "penerbit_id" => "PN Balai Pustaka", "tahun_terbit" => "1984", "tempat_terbit" => "Jakarta", "halaman" => 158, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "613", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Ilmu Falak ( Teori & Aplikasi )", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Drs. A. Jamil", "penerbit_id" => "Amzah", "tahun_terbit" => "2009", "tempat_terbit" => "Jakarta", "halaman" => 338, "tinggi" => "21 cm", "isbn" => "979-9392-98-5", "stok" => 2, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "306,4", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Ilmu Gizi dalam Keperawatan ", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "NS. Harwina Widya Astuti, S. Kep", "penerbit_id" => "Trans Info Media", "tahun_terbit" => "2011", "tempat_terbit" => "Jakarta", "halaman" => 171, "tinggi" => "21", "isbn" => "978-612-202-001-1", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "617,601", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Ilmu Hadis", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Drs. H. Mudasir", "penerbit_id" => "Pustaka Setia", "tahun_terbit" => "1999", "tempat_terbit" => "Bandung", "halaman" => 200, "tinggi" => "15 x 21", "isbn" => "979-730-133-8", "stok" => 6, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "297,13", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Ilmu Kalam", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Prof. Dr. H. Abdul Rozak, M.Ag", "penerbit_id" => "Pustaka Setia", "tahun_terbit" => "2015", "tempat_terbit" => "Bandung", "halaman" => 292, "tinggi" => "16 x 24", "isbn" => "979-730-134-6", "stok" => 2, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "297,2", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Ilmu Nahwu", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Achmad Sunarto", "penerbit_id" => "Pustaka Amani", "tahun_terbit" => "1414 H", "tempat_terbit" => "Jakarta", "halaman" => 108, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Ilmu Nahwu tingkat dasar", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Achamd Sunarto", "penerbit_id" => "Pustaka Amani", "tahun_terbit" => NULL, "tempat_terbit" => "Jakarta", "halaman" => 110, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "297", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Ilmu Pendidikan Dalam Perspektif Islam", "tanggal" => "2003-12-17", "kategori_id" => 5, "penulis" => "Dr. Ahmad Tafsir", "penerbit_id" => NULL, "tahun_terbit" => "1991", "tempat_terbit" => "Bandung", "halaman" => 206, "tinggi" => NULL, "isbn" => "979-514-174-0", "stok" => 3, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => NULL, "tanggal" => NULL, "kategori_id" => NULL, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Ilmu Pendidikan Islam", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Prof. Dr. Abdul Mujib, M.Ag", "penerbit_id" => "Kencana", "tahun_terbit" => "2006", "tempat_terbit" => "Jakarta", "halaman" => 268, "tinggi" => "15 x 23 cm", "isbn" => "979-3925-54-x", "stok" => 2, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "297,73", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Ilmu Pendidikan Islam", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Prof. Dr. H. Abuddin Nata", "penerbit_id" => "Rajawali Pers", "tahun_terbit" => "2009", "tempat_terbit" => "Jakarta", "halaman" => 414, "tinggi" => "21 cm", "isbn" => "978-979-769-223-0", "stok" => 2, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "70", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Ilmu Pendidikan Islam", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Dr. Zakiah Daradjat, dkk", "penerbit_id" => "Bumi Aksara", "tahun_terbit" => "2012", "tempat_terbit" => "Jakarta", "halaman" => 152, "tinggi" => "21 cm", "isbn" => "979-526-085-5", "stok" => 2, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "297,64", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Ilmu Pendidikan Islam", "tanggal" => "2014-12-09", "kategori_id" => NULL, "penulis" => "Prof. H.M Arifin, M. Ed", "penerbit_id" => "PT. Bumi Aksara", "tahun_terbit" => "2002", "tempat_terbit" => "Jakarta", "halaman" => 174, "tinggi" => NULL, "isbn" => "979-526-861-9", "stok" => 1, "sumber_buku" => "Dana Bos", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Ilmu Pengetahuan Populer", "tanggal" => "2000-04-20", "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => "Widyadara", "tahun_terbit" => "1984", "tempat_terbit" => "Jakarta", "halaman" => 305, "tinggi" => NULL, "isbn" => "979-8087-47-x", "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Ilmu Tafsir", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Dr. Rusihon Anwar, M.Ag", "penerbit_id" => "Pustaka Setia", "tahun_terbit" => "2008", "tempat_terbit" => "Bandung", "halaman" => 192, "tinggi" => "15 x 21 cm", "isbn" => "979-730-632-1", "stok" => 4, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "297,122", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Ilmu Tajwid", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Sei H. Dt. Tombak Alam", "penerbit_id" => "Amzah", "tahun_terbit" => "2014", "tempat_terbit" => "Jakarta", "halaman" => 54, "tinggi" => "21 cm", "isbn" => "978-979-9392-22-0", "stok" => 2, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "297,12", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "I'M (NOT) A GOOD PERSON", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "CINDY ANINDY", "penerbit_id" => "Grasindo", "tahun_terbit" => "2014", "tempat_terbit" => "Jakarta", "halaman" => 196, "tinggi" => NULL, "isbn" => "978-602-251-363-6", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Implementasi Kurikulum 2013", "tanggal" => "2022-02-08", "kategori_id" => 5, "penulis" => "Abdul Majid", "penerbit_id" => "Interes", "tahun_terbit" => "2014", "tempat_terbit" => "Bandung", "halaman" => 324, "tinggi" => "15.5 x 23.5 cm", "isbn" => NULL, "stok" => 1, "sumber_buku" => "Sumbangan Buku dari Guru", "rak_id" => "348", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Indonesiaku Persadaku", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "W.S Simanjuntak", "penerbit_id" => "Titik Terang", "tahun_terbit" => "1984", "tempat_terbit" => "Jakarta", "halaman" => 142, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => "Hadiah ", "rak_id" => "000", "ddc" => "915", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "INDONESIAKU SAYANG, INDONESIAKU MENANGH", "tanggal" => "2022-06-14", "kategori_id" => 4, "penulis" => "Alifa Suci", "penerbit_id" => "Mizan Media Utama", "tahun_terbit" => "2015", "tempat_terbit" => "Bandung", "halaman" => 128, "tinggi" => "21 cm", "isbn" => "978-602-242-508-3", "stok" => 1, "sumber_buku" => "Sumbang buku kls 9 Tp 2021/2022", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Informasi Hak Kesehatan Anak Bagi Keluarga", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Kementrian Pemberdayan Dan Perlindungan Anak RI", "penerbit_id" => "Kementrian Pemberdayan Dan Perlindungan Anak RI", "tahun_terbit" => "2010", "tempat_terbit" => "Jakarta", "halaman" => 24, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "160", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Ini ? Itu ?", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => "Didie A Rachim", "penerbit_id" => "PT. MIZAN PUSTAKA", "tahun_terbit" => "2017", "tempat_terbit" => "Bandung", "halaman" => NULL, "tinggi" => NULL, "isbn" => "978-602-9488-05-0", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "INTISARI DOA & ZIKIR YANG PALING DIBUTUHKAN", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "MOHAMMAD IRSYAD", "penerbit_id" => "PT. BUKU SERU", "tahun_terbit" => "2014", "tempat_terbit" => "JAKARTA", "halaman" => 152, "tinggi" => "12 X 16 CM", "isbn" => "978-979-878-280-0", "stok" => 1, "sumber_buku" => "SUMBANGAN BUKU ALUMNI TP. 2021/2022", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Intisari Doa Dan Zikir Yang Paling di Butuhkan ", "tanggal" => "2022-06-16", "kategori_id" => 5, "penulis" => "Mohammad Irsyad", "penerbit_id" => "PT. Buku Seru", "tahun_terbit" => "2014", "tempat_terbit" => "Jakarta", "halaman" => 152, "tinggi" => "12 x 16 ", "isbn" => "978-878-280-1", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "IPA TERPADU SMP JL.1/K13N", "tanggal" => "2022-12-05", "kategori_id" => 4, "penulis" => NULL, "penerbit_id" => "Erlangga", "tahun_terbit" => "2013", "tempat_terbit" => "Jakarta", "halaman" => NULL, "tinggi" => "25 cm", "isbn" => NULL, "stok" => 35, "sumber_buku" => "Hadiah", "rak_id" => "337", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "IQRO", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Islam & Terorisme", "tanggal" => "2023-05-25", "kategori_id" => 5, "penulis" => "Dr. H. Fuad Thohari, MA", "penerbit_id" => "Pustaka Cendekiamuda", "tahun_terbit" => "2008", "tempat_terbit" => NULL, "halaman" => 357, "tinggi" => "22 X 15 Cm", "isbn" => "978-979-19340-3-9", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Islam dan Dunia", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Abul Hasan Ali Nadwi", "penerbit_id" => "Angkasa", "tahun_terbit" => "1996", "tempat_terbit" => "Bandung", "halaman" => 201, "tinggi" => NULL, "isbn" => "979-404-174-2", "stok" => 2, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "297", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Islam For Beginners", "tanggal" => "2018-08-20", "kategori_id" => 5, "penulis" => "Ziaddin Sardar", "penerbit_id" => "Mizan", "tahun_terbit" => "1994", "tempat_terbit" => "Bandung", "halaman" => 176, "tinggi" => "0", "isbn" => "979-433-125-2", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Islamic Parenting", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "M. Fauzi Rachman", "penerbit_id" => "Erlangga", "tahun_terbit" => "2011", "tempat_terbit" => "Jakarta", "halaman" => 134, "tinggi" => "0", "isbn" => "978-979-099-068-5", "stok" => 1, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "379,15", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Istana Lebah Ratu Bee", "tanggal" => "2022-08-23", "kategori_id" => 5, "penulis" => "Yazidah Ziya", "penerbit_id" => "Tiga Ananda", "tahun_terbit" => "2018", "tempat_terbit" => "Surabaya", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "JADILAH KHATIB YG KREATIF DAN SIMPATIK", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Jalan Menuju Surga", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Hafizh Al Mundziri", "penerbit_id" => "Menara Suci", "tahun_terbit" => "2012", "tempat_terbit" => "Surabaya", "halaman" => 284, "tinggi" => "0", "isbn" => "0", "stok" => 1, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "0", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Jangan Coba-coba Melanggar Larangan Allah", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Ust. Husnul Albab", "penerbit_id" => "Riyan Jaya", "tahun_terbit" => "0", "tempat_terbit" => "Surabaya", "halaman" => 160, "tinggi" => "0", "isbn" => "0", "stok" => 1, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "0", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Jangan coba-coba melanggar laranggan Allah", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Husnul Albab", "penerbit_id" => "Ryan Jaya", "tahun_terbit" => NULL, "tempat_terbit" => "Surabaya", "halaman" => 160, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "297", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "JANGAN HIDUP JIKA TAK MEMBERI MANFAAT", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "MUHAMAD YASIR", "penerbit_id" => "PUSTAKA AL-KAUTSAR", "tahun_terbit" => "2012", "tempat_terbit" => "JAKARTA TIMUR", "halaman" => 404, "tinggi" => "11 X 17 CM", "isbn" => "978-979-592-582-8", "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "JANGAN MAU JADI MUSLIM DODOL", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Jangan Salahkan Tuhan", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Achmad Sunarto", "penerbit_id" => "Ampel Mulia", "tahun_terbit" => "2014", "tempat_terbit" => "Surabaya", "halaman" => 256, "tinggi" => "0", "isbn" => "0", "stok" => 3, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "509,2", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Jantung Sehat", "tanggal" => "2017-05-08", "kategori_id" => 5, "penulis" => "Dr. John F Knight", "penerbit_id" => "Indonesia Publishing House", "tahun_terbit" => "1990", "tempat_terbit" => "Bandung", "halaman" => 139, "tinggi" => NULL, "isbn" => "979-504-004-9", "stok" => 1, "sumber_buku" => "Hadiah Lomba Perpustakaan Sekota Bandar Lampung", "rak_id" => "000", "ddc" => "614.591 2", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Jeni Mendidik Anak", "tanggal" => "2023-06-17", "kategori_id" => 5, "penulis" => "Syaikh Muhammad Said Mursi", "penerbit_id" => "Pustaka Al- Kautsar", "tahun_terbit" => "2001", "tempat_terbit" => "Jakarta Timur", "halaman" => 412, "tinggi" => "17,5", "isbn" => "979-592-223-8", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Jermal ", "tanggal" => "2018-08-20", "kategori_id" => 5, "penulis" => "Yokie Adityo", "penerbit_id" => "Yokie Adityo", "tahun_terbit" => "2009", "tempat_terbit" => "Yogyakarta", "halaman" => 142, "tinggi" => "20,5 Cm", "isbn" => "978-979-1227-75-9", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Jujutsu Kaisen", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Gege Akutami", "penerbit_id" => "Gramedia Pustaka Utama", "tahun_terbit" => "2021", "tempat_terbit" => "Surabaya", "halaman" => 120, "tinggi" => NULL, "isbn" => "978-623-00-2439-9", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "JUJUTSU KAISEN, CINDERELLA", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "JUMP", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Jurnal Konstitusi", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => "2014", "tempat_terbit" => NULL, "halaman" => 408, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "377", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Jurus Hebat Menguasai Percakapan Bahasa Arab Modern", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Ahmad Qosim", "penerbit_id" => "Senja Publishing", "tahun_terbit" => "2015", "tempat_terbit" => "Depok", "halaman" => 382, "tinggi" => NULL, "isbn" => "978-602-7182-2-4-0", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "413", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "JURUS JURUS SUKSES", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Jurus Sehat Berat Badan Ideal", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Tuti Soenardi", "penerbit_id" => "PT. Intisari Mediatama", "tahun_terbit" => NULL, "tempat_terbit" => "Jakarta", "halaman" => 142, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "613,7", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "JUS AMMA", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 3, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "JUTSU KEISEN", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kado Untuk Putri Ungu", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => "Syamsa Hawa", "penerbit_id" => "Cakrawala Publishing", "tahun_terbit" => "2007", "tempat_terbit" => "Surabaya", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "KAGUYA SAMA LOVE IS WAR", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kalau Bisa Sehat Kenapa Harus Sakit ?", "tanggal" => "2017-05-05", "kategori_id" => 5, "penulis" => "Titus. K. Kurniadi", "penerbit_id" => "Puspa Sehat", "tahun_terbit" => "2006", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah Lomba Perpustakaan Sekota Bandar Lampung", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kalau Bisa Sehat, Kenapa harus Sakit?", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Titus K. Kurniadi", "penerbit_id" => "Puspa Sehat", "tahun_terbit" => "2006", "tempat_terbit" => "Jakarta", "halaman" => 72, "tinggi" => "20,5", "isbn" => "979-1133-32-8", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "610", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "KALAU MAU KAYA NGAPAIN SEKOLAH", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "EDY ZAQEUS", "penerbit_id" => "GRADIEN BOOK", "tahun_terbit" => "2004", "tempat_terbit" => "YOGYAKARTA", "halaman" => 180, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "KAMUS 3 BAHASA ARAB-INGGRIS-INDONESIA", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "UST. IMAM  AL HAKAM WICAKSONO", "penerbit_id" => "SENDANG ILMU", "tahun_terbit" => NULL, "tempat_terbit" => "SOLO", "halaman" => 160, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "KAMUS ARAB INDONESIA", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "KAMUS BAHASA INGGRIS BERGAMBAR", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "KAMUS BAHASA LAMPUNG", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "HERMAN, S.PD.I", "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kamus Bahasa Lampung Aksara", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Iskar, S.Sos", "penerbit_id" => "CV.Smart Cipta Intelekta", "tahun_terbit" => "2014", "tempat_terbit" => "Bandar Lampung", "halaman" => 159, "tinggi" => "20,5", "isbn" => "978-602-99738-2-2", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "413", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kamus Bahasa Lampung Beraksara", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Daryanti, S. Pd. , Dartiyana,S.Pd", "penerbit_id" => "Pelangi Media Pustaka", "tahun_terbit" => NULL, "tempat_terbit" => "Lampung", "halaman" => 224, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "413", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "KAMUS BERGAMBAR", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => "PUSTAKA HARAPAN KITA", "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => 64, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kamus BIOLOGI Bergambar", "tanggal" => "2013-12-12", "kategori_id" => 3, "penulis" => "Wicahyaning Putri, S.Si", "penerbit_id" => "Erlangga", "tahun_terbit" => "2010", "tempat_terbit" => "Jakarta", "halaman" => 126, "tinggi" => NULL, "isbn" => "979-741-701-8", "stok" => 10, "sumber_buku" => "Dana Rutin", "rak_id" => "000", "ddc" => "547,87", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kamus FISIKA Bergambar ", "tanggal" => "2013-12-12", "kategori_id" => 3, "penulis" => "Dani Setiawan, S.Si", "penerbit_id" => "Erlangga", "tahun_terbit" => "2010", "tempat_terbit" => "Jakarta", "halaman" => 127, "tinggi" => NULL, "isbn" => "979-741-510-4", "stok" => 10, "sumber_buku" => "Dana Rutin", "rak_id" => "000", "ddc" => "530,7", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "KAMUS LENGKAP 10 MILYAR", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "ANDREAS HALIM", "penerbit_id" => "SULITA JAYA", "tahun_terbit" => NULL, "tempat_terbit" => "SURABAYA", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "KAMUS LENGKAP Inggris - Indonesia, Indonesia - Inggris", "tanggal" => "2014-09-12", "kategori_id" => 3, "penulis" => "Ilan. J. Kernerman", "penerbit_id" => "Erlangga", "tahun_terbit" => "2010", "tempat_terbit" => "Jakarta", "halaman" => 551, "tinggi" => NULL, "isbn" => NULL, "stok" => 156, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "423", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "KAMUS LENGKAP Inggris - Indonesia, Indonesia - Inggris", "tanggal" => "2014-09-12", "kategori_id" => 3, "penulis" => "Ilan. J. Kernerman", "penerbit_id" => "Erlangga", "tahun_terbit" => "2010", "tempat_terbit" => "Jakarta", "halaman" => 551, "tinggi" => NULL, "isbn" => NULL, "stok" => 44, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "423", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "KAMUS LENGKAP Inggris - Indonesia, Indonesia - Inggris", "tanggal" => "2013-12-12", "kategori_id" => 3, "penulis" => "Ilan. J. Kernerman", "penerbit_id" => "Erlangga", "tahun_terbit" => "2010", "tempat_terbit" => "Jakarta", "halaman" => 551, "tinggi" => NULL, "isbn" => NULL, "stok" => 200, "sumber_buku" => "Dana Rutin", "rak_id" => "000", "ddc" => "423", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kamus Pelajar 600 Triliun ", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Roros Satti", "penerbit_id" => "Pustaka Agung Harapan", "tahun_terbit" => "2012", "tempat_terbit" => "Surabaya", "halaman" => 480, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "413", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kamus Praktis 3 Bahasa Mandarin", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "Yayuk Sri Handayani, S.Pd", "penerbit_id" => "Apollo ", "tahun_terbit" => NULL, "tempat_terbit" => "Surabaya", "halaman" => 340, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "KAMUS TEMATIK", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "HENDRI  SETIABUDI SUKMA, S.S., M.PD.I", "penerbit_id" => "MAGHZA PUSTAKA", "tahun_terbit" => "2020", "tempat_terbit" => "PATI", "halaman" => 268, "tinggi" => "14 X 20,5", "isbn" => "978-602-5824-76-0", "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "KAMUS TEMATIK BAHASA ARAB", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Ke Mana Bunda ?", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Darko", "penerbit_id" => "PT. MIZAN PUSTAKA", "tahun_terbit" => "2016", "tempat_terbit" => "Bandung", "halaman" => 104, "tinggi" => "21 Cm", "isbn" => "978-602-367-280-6", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "KEAJAIBAN LAUT", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "KEBAJIKAN UNTUK MERAIH SURGA ", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "SYAIKH KHALID SAYYID ALI", "penerbit_id" => "MARJA'", "tahun_terbit" => "2004", "tempat_terbit" => "BANDUNG", "halaman" => 128, "tinggi" => NULL, "isbn" => "979-9482-17-8", "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kedelai", "tanggal" => "2018-08-20", "kategori_id" => 5, "penulis" => "Dr. Ir. Wisnu Cahyadi, M.Si", "penerbit_id" => "Bumu Aksara", "tahun_terbit" => NULL, "tempat_terbit" => "Jakarta", "halaman" => 96, "tinggi" => "21 cm", "isbn" => "978-979-010-007-7", "stok" => 1, "sumber_buku" => "Sumbangan Siswa/I Kls.IX", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kelasa Kelebat Maslah Bahasa dab Sastra", "tanggal" => "2014-01-10", "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => "Kantor Bahasa Provinsi Lampung", "tahun_terbit" => "2014", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Sumbangan", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "KEMANA BUNDA ?", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "KENALI BAKAT MU LEJITKAN POTENSI MU", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "ISNAENI DK", "penerbit_id" => "JENDELA", "tahun_terbit" => "2021", "tempat_terbit" => "JAWATENGAH", "halaman" => 216, "tinggi" => NULL, "isbn" => "978-602-52549-3-2", "stok" => 1, "sumber_buku" => "SUMBANGAN BUKU ALUMNI TP. 2021/2022", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "KEPO", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "ASSYIFA S. ARUM", "penerbit_id" => "PT. CERITA ANAK BANGSA", "tahun_terbit" => "2018", "tempat_terbit" => "BANDUNG", "halaman" => 92, "tinggi" => NULL, "isbn" => "978-602-367-493-0", "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "KESATRIA KHATULISTIWA", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kesederhanaan Hidup Nabi Muhammad SAW", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Kh. Abdullah Zaky Al-Kaaf", "penerbit_id" => "Pustaka Setia", "tahun_terbit" => "2000", "tempat_terbit" => "Jombang", "halaman" => 112, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Keterampilan Menulis ", "tanggal" => "2007-04-11", "kategori_id" => NULL, "penulis" => "Imas Eva Nurviati", "penerbit_id" => "Lazuardi", "tahun_terbit" => "1995", "tempat_terbit" => "Jakarta", "halaman" => 198, "tinggi" => "21", "isbn" => "979-8804-03-1", "stok" => 14, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Ketika Cinta Berbuah Surga", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Habibur Rahman EL Shirazy", "penerbit_id" => "Basmallah Publishing", "tahun_terbit" => "2014", "tempat_terbit" => "Semarang", "halaman" => 184, "tinggi" => NULL, "isbn" => "978-602-14872-2-8", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "808,9", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Keutamaan Asma'ul Husna Sifat 20 & Shalawat", "tanggal" => "2018-08-20", "kategori_id" => 5, "penulis" => "Yardar Zacky al-faruq", "penerbit_id" => "Dwimedia Press", "tahun_terbit" => "2013", "tempat_terbit" => "0", "halaman" => 160, "tinggi" => NULL, "isbn" => "978-979-6022-45-8", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Keutamaan Asmaul Husna Sifat 20 dan Shalawat", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Yardan Zacky Al-faruq", "penerbit_id" => "Dwimedia Press", "tahun_terbit" => "2013", "tempat_terbit" => "Jakarta", "halaman" => 160, "tinggi" => NULL, "isbn" => "978-979-6022-45-8", "stok" => NULL, "sumber_buku" => "Hadiah ", "rak_id" => "000", "ddc" => "131,3", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Keutamaan dan Keistimewaan Shalat Tahajud", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Ubaid Ibnu Abdillah", "penerbit_id" => "Pustaka Media", "tahun_terbit" => "0", "tempat_terbit" => "Surabaya", "halaman" => 153, "tinggi" => "0", "isbn" => "0", "stok" => 3, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "0", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Keutamaan dan keistimewaan shalat Tahajud,shalat Hajat,shalat Istikharah,dan shalat Dhuha", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Ubaid Ibnu Abdillah", "penerbit_id" => "Pustaka media", "tahun_terbit" => NULL, "tempat_terbit" => "Surabaya", "halaman" => 160, "tinggi" => NULL, "isbn" => "978-979-25-8949-8", "stok" => 3, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "297", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "KEUTAMAAN DAN KEISTIMEWAAN SHOLAT", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => "DRS. CHOLIL", "penerbit_id" => "AMPEL SUCI ", "tahun_terbit" => "1995", "tempat_terbit" => "JAKARTA", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kewajiban & Hak Ibu, ayah, dan anak", "tanggal" => "2017-12-04", "kategori_id" => 5, "penulis" => "Ahmad Isa Anyur", "penerbit_id" => "Diponegoro / Bandung", "tahun_terbit" => "1990", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Sumbangan Dari Perpustakaan Daerah Lampung", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kewajiban Dan Hak Ibu Ayah Dan Anak", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Ahmad 'Isya 'Ansyur", "penerbit_id" => "CV. Diponogoro", "tahun_terbit" => "1990", "tempat_terbit" => "Bandung", "halaman" => 135, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "297", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "KH. HASYIM ASY'ARI MEMODERNISASI NU & PENDIDIKAN ISLAM", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => "ROHINAH M. NOOR, MA", "penerbit_id" => "GRAFINDO KHAZANAH ILMU", "tahun_terbit" => "2010", "tempat_terbit" => "Jakarta Selatan", "halaman" => 209, "tinggi" => "22 CM", "isbn" => "979-979-3858-71-5", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "KH. MUSTAYA", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "UBAY HAKI MARSHAD", "penerbit_id" => "AN-NUUR PRESS", "tahun_terbit" => "2008", "tempat_terbit" => "BANDAR LAMPUNG", "halaman" => 146, "tinggi" => "16,5 X 21,5 CM", "isbn" => NULL, "stok" => 2, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Khadijah", "tanggal" => "2023-05-25", "kategori_id" => 5, "penulis" => "Sibel Eraslam", "penerbit_id" => "Kaysa Media", "tahun_terbit" => "2013", "tempat_terbit" => "Jakarta", "halaman" => 388, "tinggi" => "22 cm", "isbn" => "978-979-1479-63-9", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "KHALIS GIBRAN", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Khutbah Jum'at", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Achmad Sunarto", "penerbit_id" => "Pustaka Amani", "tahun_terbit" => "1987", "tempat_terbit" => "Jakarta", "halaman" => 23, "tinggi" => "0", "isbn" => "0", "stok" => 3, "sumber_buku" => "Dana Bos", "rak_id" => "94", "ddc" => "297,32", "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Khutbah Jum'at", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Syaikh Hamid Ibnu Muhammad Al-Abbadi", "penerbit_id" => "Karya Agung", "tahun_terbit" => "2009", "tempat_terbit" => "Surabaya", "halaman" => 256, "tinggi" => NULL, "isbn" => "0", "stok" => 1, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "0", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Khutbah Jumat barometer Muslim", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Syaikh Hamid Ibnu Muhammad Al Abbadi", "penerbit_id" => "Karya Agung", "tahun_terbit" => "2009", "tempat_terbit" => "Surabaya", "halaman" => 256, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "173", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Khutbah jumat suara mimbar", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Achmad Sunarto", "penerbit_id" => "Pustaka Amani", "tahun_terbit" => "1987", "tempat_terbit" => "Jakarta", "halaman" => 162, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => "hadiah", "rak_id" => "000", "ddc" => "297,32", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Khutbah Mimbariyah", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Dr. Muhammad Bin Abdul Wahhab", "penerbit_id" => "Putaka Amani", "tahun_terbit" => "1995", "tempat_terbit" => "Jakarta", "halaman" => 301, "tinggi" => NULL, "isbn" => "0", "stok" => 3, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "297,32", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kiat Sukses Berdakwah", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Sayyid M Alwi Al Maliki Al Hasani", "penerbit_id" => "Amzah", "tahun_terbit" => "2005", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "KISAH 25 NABI & RASUL", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "MAHFAN,  S.PD", "penerbit_id" => "SANDRO JAYA", "tahun_terbit" => "2005", "tempat_terbit" => "JAKARTA", "halaman" => 144, "tinggi" => NULL, "isbn" => "979-3967-00-5", "stok" => 2, "sumber_buku" => "SUMBANGAN BUKU ALUMNI TP. 2021/2022", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kisah 25 Nabi dan Rasul ", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Mafin, S.Pd", "penerbit_id" => "Sandro Jaya Jakarta", "tahun_terbit" => "2005", "tempat_terbit" => "Jakarta", "halaman" => 144, "tinggi" => NULL, "isbn" => "979-3967-00-5", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kisah 25 Nabi dan Rasul ", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "Prof. Dr. KH. Safuan Al-Fandi", "penerbit_id" => "Sendang Ilmu ", "tahun_terbit" => NULL, "tempat_terbit" => "Solo", "halaman" => 168, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kisah 25 Penemu Terhebat Di Dunia", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "YS Wahyunigsih dkk", "penerbit_id" => "Indomedia brothers", "tahun_terbit" => "2013", "tempat_terbit" => "Purwekerto", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "900", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kisah Abu Nawas", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => "Yudistira Ikranegara", "penerbit_id" => "CV. Pustaka Agung Harapan", "tahun_terbit" => NULL, "tempat_terbit" => "Surabaya", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "KISAH KEHIDUPAN RASULULLAH", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "KISAH KH MUSTAYA", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "KISAH NABI DAN RASUL", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kisah Nabi dan Rasul ", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => "Abu Afifah Ar-Raji", "penerbit_id" => "Media Sholiha", "tahun_terbit" => "2014", "tempat_terbit" => "Jakarta Selatan", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kisah Nyata 25 Nabi dan Rasul", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => "Cecep Ihsan , S. Ag", "penerbit_id" => "Dua Media", "tahun_terbit" => "2011", "tempat_terbit" => "Jakarta", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "KISAH NYATA 25 NABI DAN ROSUL", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "CECEP IHSAN, S.AG", "penerbit_id" => "DUA MEDIA", "tahun_terbit" => "2011", "tempat_terbit" => "SURABAYA", "halaman" => 128, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kisah Perjuangan Wali Songo", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "MB. Rahimsyah. Ar", "penerbit_id" => "Dua Media", "tahun_terbit" => NULL, "tempat_terbit" => "Surabaya", "halaman" => 127, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "KISAH PERJUANGAN WALISONGO", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "MB. RAHIMSYAH.AR", "penerbit_id" => "LINTAS MEDIA", "tahun_terbit" => "2012", "tempat_terbit" => "JOMBANG", "halaman" => 128, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kisah Seru dari Desa Wana", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Netti Kurniati", "penerbit_id" => "Kemeterian Pendidikan dan Kebudayaan Kantor Bahasa Lampung", "tahun_terbit" => "2020", "tempat_terbit" => "Jakarta", "halaman" => 46, "tinggi" => NULL, "isbn" => "978-623-92419-2-6", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "KISAH TELADAN 25 NABI", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kisah Teladan 25 Nabi dan Rasul ", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => "H. Syamsul Hadi, BA", "penerbit_id" => "Dunia Media", "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kisah Teladan 25 Nabi dan Rasul ", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => "Ifsya Hamasah", "penerbit_id" => "Katalog Dalam Terbit ", "tahun_terbit" => "2010", "tempat_terbit" => "Bandung", "halaman" => NULL, "tinggi" => NULL, "isbn" => "602-8526-31-2", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kisah teladan Rasulullah SAW dan Para Sahabat r.a", "tanggal" => "2007-04-11", "kategori_id" => 5, "penulis" => "Maulana Muhammad Zakariyya Al-Kandahlawi Rah.a", "penerbit_id" => "Citra Media", "tahun_terbit" => "2007", "tempat_terbit" => "Jakarta Selatan", "halaman" => 286, "tinggi" => "24", "isbn" => "979-26-1704-3", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kisah Wali Songgo", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Baidlowi Syamsuri", "penerbit_id" => "Apollo Lestari", "tahun_terbit" => "1995", "tempat_terbit" => "Surabaya", "halaman" => 134, "tinggi" => "0", "isbn" => "0", "stok" => 1, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "0", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kisah Wali Songo", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Baidlowi Syamsuri", "penerbit_id" => "Apollo Lestari", "tahun_terbit" => "1995", "tempat_terbit" => "Surabaya", "halaman" => 134, "tinggi" => "0", "isbn" => "0", "stok" => 1, "sumber_buku" => "Dana Bos", "rak_id" => "135", "ddc" => "0", "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "KKPK", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "KKPK THE FUTURE WORLD", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kombinatorik, Peluang dan Statistik", "tanggal" => "2017-11-16", "kategori_id" => 5, "penulis" => "Prof. Yohanes Surya, Ph. D", "penerbit_id" => "PT. Kandel", "tahun_terbit" => "2017", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "KOMIK ", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "KOMIK KECIL KECIL PUNYA KARYA 'FACEBOOK GOKIL'", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "ZAHRA SALSABILA, DKK", "penerbit_id" => "PT. MIZAN PUSTAKA", "tahun_terbit" => "2014", "tempat_terbit" => "BANDUNG", "halaman" => 124, "tinggi" => NULL, "isbn" => "978-602-9329-57-5", "stok" => 1, "sumber_buku" => "SUMBANGAN BUKU ALUMNI TP. 2021/2022", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "KOMIK KUARK", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "KOMIK NARUTO", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "KOMIK NEXT G", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "KOMIK WEWE GOMBEL ", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kompilasi Lomba Ide Beraksi 2014 99 + 1 pembelajaran Antikorupsi", "tanggal" => "2022-12-05", "kategori_id" => 5, "penulis" => "Tim Media Inovasi Global", "penerbit_id" => "KPK", "tahun_terbit" => "2015", "tempat_terbit" => "Jakarta", "halaman" => 204, "tinggi" => NULL, "isbn" => "-", "stok" => 25, "sumber_buku" => "Hadiah", "rak_id" => "341", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Konsep dan Implementasi Kurikulum Terhadap Kegiatan Belajar Mengajar", "tanggal" => "2007-04-11", "kategori_id" => NULL, "penulis" => "E. Juhana Wijaya", "penerbit_id" => "PT. Intimedia Cipta Nusantara", "tahun_terbit" => "2004", "tempat_terbit" => "Bandung", "halaman" => 242, "tinggi" => "15 x 21", "isbn" => "979-3372-83-4", "stok" => 1, "sumber_buku" => "Dana Bos", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Konsep Dzkir Menurut Al Qur'an dan Urgensinya Bagi Masyarakat Modern", "tanggal" => "2007-04-11", "kategori_id" => 5, "penulis" => "Dr. H.M Hamdan Rasyid, M.Ag", "penerbit_id" => "PT. Intimedia Ciptanusantara", "tahun_terbit" => NULL, "tempat_terbit" => "Jakarta Timur", "halaman" => 312, "tinggi" => NULL, "isbn" => "979-3374-03-9", "stok" => 3, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kontruksi Al Qur'an", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 2, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "KOREKSI SOLAT KITA", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "KU PILIH KAMIU KARENA DIA", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => "UKM BAPINDA", "penerbit_id" => "AURA", "tahun_terbit" => "2016", "tempat_terbit" => "Yogyakarta", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "KU PILIH KAMU KARENA DIA", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "KU TUNGGU KALIAN DI PINGGIR TROTOAR", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "KUARK", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kuark Jenjang Olimpiade", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => "PT. Kuark Internasional", "tahun_terbit" => NULL, "tempat_terbit" => "Jakarta", "halaman" => 89, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kumpulan Abstrak Tesis dan Disertai Institut Pertanian Bogor", "tanggal" => "2017-12-04", "kategori_id" => 5, "penulis" => "Prof. Dr. Ir. Ahmad Ansori", "penerbit_id" => "Institut Pertanian Bogor", "tahun_terbit" => "2006", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Sumbangan Dari Perpustakaan Daerah Lampung", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kumpulan Abstrak Tesis Dan Disertasi Institus Teknologi Bogor Provinsi Jawa Barat", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Sekolah Pasca Sarjana Institus Pertanian Bogor ", "penerbit_id" => "Perpustakaan Institut Pertanian Bogor", "tahun_terbit" => "2006", "tempat_terbit" => "Bogor ", "halaman" => 270, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => "Hadiah ", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "KUMPULAN CERITA MEIKO", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kumpulan Cerita Rakyat Nusantara", "tanggal" => "2022-08-20", "kategori_id" => 5, "penulis" => "TIRA IKRANEGARA", "penerbit_id" => "Media Pustaka", "tahun_terbit" => NULL, "tempat_terbit" => "Bandung", "halaman" => 128, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kumpulan Cerita Rakyat Nusantara", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => "MB. Rahimsyah. Ar", "penerbit_id" => "Dunia Media", "tahun_terbit" => NULL, "tempat_terbit" => "Jombang", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kumpulan Cerita Rakyat Nusantara", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => "Yudistira Ikranegara", "penerbit_id" => "Dua Media", "tahun_terbit" => NULL, "tempat_terbit" => "Bandung", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kumpulan Doa - Doa Pilihan", "tanggal" => "2022-06-16", "kategori_id" => 5, "penulis" => "Drs.Mohammad Anwar", "penerbit_id" => "SA ALAYDRUS", "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => 240, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "KUMPULAN DO'A - DO'A PILIHAN", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "DRS. MOHAMMAD ANWAR", "penerbit_id" => "S.A ALAYDRUS", "tahun_terbit" => NULL, "tempat_terbit" => "JAKARTA", "halaman" => 158, "tinggi" => NULL, "isbn" => NULL, "stok" => 2, "sumber_buku" => "SUMBANGAN BUKU ALUMNI TP. 2021/2022", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kumpulan Doa- Doa Maqbul", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Achmad Sunarto", "penerbit_id" => "Aulia", "tahun_terbit" => "0", "tempat_terbit" => "Surabaya", "halaman" => 128, "tinggi" => "0", "isbn" => "0", "stok" => 2, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "297,2", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kumpulan Doa-Doa Pilihan", "tanggal" => "2022-06-16", "kategori_id" => 5, "penulis" => "Drs. Mohammad Anwar", "penerbit_id" => "S.A Alaydrus", "tahun_terbit" => NULL, "tempat_terbit" => "Jakarta", "halaman" => 158, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kumpulan Hadits - Hadits Pilihan Bukhori Muslim", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Al-Faqih Muhammad Fathan Al-Haq", "penerbit_id" => "Bina Biladi Press ", "tahun_terbit" => "2007", "tempat_terbit" => "Bandung", "halaman" => 140, "tinggi" => "21 cm", "isbn" => "979-25-0594-6", "stok" => 3, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "297,62", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kumpulan Hadits - Hadits Pilihan Bukhori Muslim", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Abdul Ghoni Asykur", "penerbit_id" => "Husaini", "tahun_terbit" => "1992", "tempat_terbit" => "Bandung", "halaman" => 391, "tinggi" => "0", "isbn" => "0", "stok" => 3, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "297,137", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "KUMPULAN LAGU-LAGU DAERAH", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "RE RANGKUTI DKK", "penerbit_id" => "CV. TITIK TERANG", "tahun_terbit" => "1981", "tempat_terbit" => "JAKARTA", "halaman" => 120, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "KUMPULAN PUISI DAN PANTUN", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "KUMPULAN PUISI TERPADU", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kumpulan Rumus VIII SMP", "tanggal" => "2023-06-07", "kategori_id" => 5, "penulis" => "TIM", "penerbit_id" => "Ganesha Operation", "tahun_terbit" => "2016", "tempat_terbit" => "Bandung", "halaman" => 227, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kumpulan Shalawat Khasiat & Keutamaannya", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Moh. Showwan Manshur", "penerbit_id" => "Amelia", "tahun_terbit" => "0", "tempat_terbit" => "Surabaya", "halaman" => 159, "tinggi" => "0", "isbn" => "979-395-520-1", "stok" => 2, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "0", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kumpulan Shalawat Khasiat dan Keutamaan nya", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Moh.Showwam Manshur", "penerbit_id" => "Amelia", "tahun_terbit" => NULL, "tempat_terbit" => "Surabaya", "halaman" => 160, "tinggi" => NULL, "isbn" => "979-3955-20-1", "stok" => 2, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "297", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kumpulan Soal dan Pembahasan IPS SMP/MTs Jilid 1", "tanggal" => "2023-01-26", "kategori_id" => NULL, "penulis" => "TIM LOPI", "penerbit_id" => "Bina Prestasi Insani", "tahun_terbit" => "2014", "tempat_terbit" => "Jakarta", "halaman" => 196, "tinggi" => NULL, "isbn" => "978-602-7638-59-4", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kumpulan Soal Olimpiade Matematika Tingkat Kabupaten", "tanggal" => "2017-11-28", "kategori_id" => 5, "penulis" => "Prof. Yohanes Surya, Ph. D", "penerbit_id" => "PT. Kandel", "tahun_terbit" => "2017", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => NULL, "rak_id" => "188", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kumpulan Soal Olimpiade Matematika Tingkat Nasional", "tanggal" => "2017-11-16", "kategori_id" => 5, "penulis" => "Prof. Yohanes Surya, Ph. D", "penerbit_id" => "PT. Kandel", "tahun_terbit" => "2017", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kumpulan Soal Olimpiade Matematika Tingkat Provinsi", "tanggal" => "2017-11-16", "kategori_id" => 5, "penulis" => "Prof. Yohanes Surya, Ph. D", "penerbit_id" => "PT. Kandel", "tahun_terbit" => "2017", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "KUNCI DOA-DOA MA'ABUL", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kunci Doa-Doa Maqbul ", "tanggal" => "2023-01-26", "kategori_id" => NULL, "penulis" => NULL, "penerbit_id" => "Bintang Usaha Jaya", "tahun_terbit" => "2004", "tempat_terbit" => "Surrabaya", "halaman" => 2014, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kunci Ibadah", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "S.A. Zainal Abidin", "penerbit_id" => "Pt. Karya Toha Putra", "tahun_terbit" => "2001", "tempat_terbit" => "Semarang", "halaman" => 127, "tinggi" => "0", "isbn" => "0", "stok" => 2, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "297,3", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "KUNCI IBADAH LENGKAP", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "ABU FATIAH AL ADNANI", "penerbit_id" => "AN NUR ", "tahun_terbit" => "2009", "tempat_terbit" => "JAKARTA", "halaman" => 453, "tinggi" => NULL, "isbn" => "979-99947-0-5", "stok" => 1, "sumber_buku" => "SUMBANGAN BUKU ALUMNI TP. 2021/2022", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "KUNCI IBADAH TUNTUNAN IBADAH SESUAI SYARIAT", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "UST. ABDURRAHIM", "penerbit_id" => "PUSTAKA SANDRO JAYA", "tahun_terbit" => "2010", "tempat_terbit" => "JAKARTA", "halaman" => 128, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "SUMBANGAN BUKU ALUMNI TP. 2021/2022", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kunfayakun", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Ibnu Qayyim Al Jauziyah", "penerbit_id" => "Mitra Press", "tahun_terbit" => "2008", "tempat_terbit" => "0", "halaman" => 208, "tinggi" => "14 x 21 cm", "isbn" => "978-979-17230-5-3", "stok" => 3, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "248,4", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kunimitsu", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Yuma Ando", "penerbit_id" => "PT. Elex Media Komputindo", "tahun_terbit" => "2002", "tempat_terbit" => "Jakarta", "halaman" => 186, "tinggi" => NULL, "isbn" => "979-20-8690-0", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kurikulum Pendidikan & Pelatihan Jurnailistik Konvergensi Media Berdasarkan Karakter", "tanggal" => "2023-04-20", "kategori_id" => 5, "penulis" => "Dr. H. Iskandar Zilkarnain, M.H", "penerbit_id" => "Harian Umum Lampung Post", "tahun_terbit" => "2018", "tempat_terbit" => "Bandar Lampung", "halaman" => 84, "tinggi" => "15,5 X 23", "isbn" => "978-602-58705-0-5", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "KUTUNGGU KALIAN DI PINGGIR TROTOAR", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "DEWI HENDRAWARI TRIESNANINGTYAS", "penerbit_id" => "AURA PUBLISHING", "tahun_terbit" => "2016", "tempat_terbit" => NULL, "halaman" => 235, "tinggi" => "23 X 15,5 CM", "isbn" => "978-602-6238-46-7", "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "LAGU - LAGU DAERAH", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Lagu - Lagu Wajib Nasional", "tanggal" => "2018-08-20", "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => 50, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Sumbangan Siswa/I Kls.IX", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Langsing dan Awet Muda, Menu Sehat Rendah Kalori", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Tuti Soenardi", "penerbit_id" => "Gaya Favorit Press", "tahun_terbit" => "2011", "tempat_terbit" => "Jakarta", "halaman" => 132, "tinggi" => "24", "isbn" => "978-979-515-440-2", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "641.5", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Laporan Pelaksanaan Usaha Kesehatan Sekolah/ Madrasah", "tanggal" => "2017-01-12", "kategori_id" => NULL, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => "2017", "tempat_terbit" => NULL, "halaman" => 110, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => NULL, "rak_id" => "151", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Laras Bahasa", "tanggal" => "2015-06-04", "kategori_id" => 5, "penulis" => "Gurita", "penerbit_id" => NULL, "tahun_terbit" => "2013", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => "0", "stok" => 1, "sumber_buku" => "Sumbangan", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Larasa Bahasa", "tanggal" => "2018-08-20", "kategori_id" => 5, "penulis" => "Sustiyanti", "penerbit_id" => "Gurita Rubrik Laras", "tahun_terbit" => "2013", "tempat_terbit" => "Bandar Lampung", "halaman" => 90, "tinggi" => "14,7 x 21 cm", "isbn" => "978-979-069-126-1", "stok" => 1, "sumber_buku" => "Sumbangan Siswa/I Kls.IX", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Laskar Pelangi", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Andrea Hirata", "penerbit_id" => "Anggota IKAPI", "tahun_terbit" => "2008", "tempat_terbit" => "Yogyakarta", "halaman" => 534, "tinggi" => NULL, "isbn" => "979-3062-79-7", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Laut Bercerita", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Leila S Chudori", "penerbit_id" => "KPG", "tahun_terbit" => "2017", "tempat_terbit" => "Jakarta", "halaman" => 379, "tinggi" => "20 cm", "isbn" => "978-602-424-694-5", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Legenda Batu Amparan Gading", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => "Maulana Syamsuri", "penerbit_id" => "Pustaka Media", "tahun_terbit" => NULL, "tempat_terbit" => "Jakarta", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "LEGENDA DANAU TOBA", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "TIRA IKRANEGARA", "penerbit_id" => "BINTANG INDONESIA ", "tahun_terbit" => "2010", "tempat_terbit" => "JAKARTA", "halaman" => 32, "tinggi" => "22 cm", "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Legenda Keong Emas", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "TIRA IKRANEGARA", "penerbit_id" => "Dua Media", "tahun_terbit" => "2016", "tempat_terbit" => "Surabaya", "halaman" => 128, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "LELAKI YANG MENEMUKAN SURGA", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Lentera Kelam Tiga Puluh Februari", "tanggal" => "2012-06-18", "kategori_id" => 5, "penulis" => "Agus R. Sarjono", "penerbit_id" => "Kementerian Pendidikan dan Kebudayaan", "tahun_terbit" => "2012", "tempat_terbit" => "Jakarta", "halaman" => 168, "tinggi" => NULL, "isbn" => "978-602-99299-6-6", "stok" => 7, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Leona", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Zarry Hendrik", "penerbit_id" => "Bukune", "tahun_terbit" => "2017", "tempat_terbit" => "Jakarta", "halaman" => 302, "tinggi" => "14 x 20", "isbn" => "978-602-220-209-7", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "LIMA SEKAWAN ' MINGGAT'", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "ENID BLYTON", "penerbit_id" => "PRIMA GRAFIKA", "tahun_terbit" => "2018", "tempat_terbit" => "JAKARTA", "halaman" => 272, "tinggi" => "18 CM", "isbn" => "9786020321301", "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "LINGUA ", "tanggal" => "2018-08-20", "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => "Unsril MLI Cabang Unsri Balai Bahasa ", "tahun_terbit" => "1999", "tempat_terbit" => "Palembang", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Sumbangan Siswa/I Kls.IX", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "LINGUA ( Jurnal Bahasa & Sastra )", "tanggal" => "2017-12-04", "kategori_id" => 5, "penulis" => "Subadiyono", "penerbit_id" => "Balai Bahasa Palembang", "tahun_terbit" => "1999", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Sumbangan Dari Perpustakaan Daerah Lampung", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Listrik dan Magnet", "tanggal" => "2017-11-16", "kategori_id" => 5, "penulis" => "Prof. Yohanes Surya, Ph. D", "penerbit_id" => "PT. Kandel", "tahun_terbit" => "2017", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Lompatan Besar Ridho Ficardo Untuk Lampung", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => "2019", "tempat_terbit" => NULL, "halaman" => 186, "tinggi" => NULL, "isbn" => NULL, "stok" => 2, "sumber_buku" => "Hadiah", "rak_id" => "372", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "LONDON I'M COMING", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => "NALA ALYA FARADISA", "penerbit_id" => "PT. MIZAN PUSTAKA", "tahun_terbit" => "2012", "tempat_terbit" => "JAKARTA UTARA", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "LOVE IS WAR", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "AKA AKASAKA", "penerbit_id" => "PT. GRAMEDIA PUSTAKA UTAMA", "tahun_terbit" => "2020", "tempat_terbit" => "JAKARTA PUSAT", "halaman" => NULL, "tinggi" => NULL, "isbn" => "9786230302046", "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Lucu - Lucu Tokoh Dunia", "tanggal" => "2022-02-08", "kategori_id" => 5, "penulis" => "Isa An Tamami", "penerbit_id" => "Araska Publisher", "tahun_terbit" => "2018", "tempat_terbit" => "Yogyakarta", "halaman" => 230, "tinggi" => "13 X 19.5", "isbn" => "978-602-5805-01-1", "stok" => 1, "sumber_buku" => "Sumbangan Buku dari Guru", "rak_id" => "343", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Lutung Kasarung", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Gibran Maulana", "penerbit_id" => "Aulia", "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Ma'alim Al-Haramain", "tanggal" => "2022-02-08", "kategori_id" => 5, "penulis" => " H. Abdurrahman Ahmad Asseggaf", "penerbit_id" => "RT Suara Witami", "tahun_terbit" => "2016", "tempat_terbit" => NULL, "halaman" => 284, "tinggi" => "13 X 19.5", "isbn" => "978-602-60082-0-6", "stok" => 1, "sumber_buku" => "Sumbangan Buku dari Guru", "rak_id" => "344", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Mahkota Sufi", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Syekh Abdul Qodir Al Jailani", "penerbit_id" => "Mitra Press", "tahun_terbit" => "2008", "tempat_terbit" => "Bandung", "halaman" => 248, "tinggi" => "14 X 21 CM", "isbn" => "978-979-17230-2-2", "stok" => 3, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "297,03", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "MAJALAH BOBO", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Majalah Launa Cendikia", "tanggal" => "2018-08-09", "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => "Launa Cendikia MtsN 2 Bandar Lampung", "tahun_terbit" => "2016", "tempat_terbit" => "Bandar Lampung", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 40, "sumber_buku" => "Launa Cendikia MTsN 2 Bandar Lampung", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Makanan , Wujud, Variasi dan Fungsinya Serta Cara Penyajiannya Daerah Nusa Tenggara Timur", "tanggal" => "2017-12-04", "kategori_id" => 5, "penulis" => "Raf Darnys", "penerbit_id" => "Departemen Pendidikan & Kebudayaan", "tahun_terbit" => "1991", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 4, "sumber_buku" => "Sumbangan Dari Perpustakaan Daerah Lampung", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Makanan : Wujud, Variasi dan Fungsinya Serta Cara Penyajiannya di Daerah Sumatera Barat", "tanggal" => "2017-04-12", "kategori_id" => 5, "penulis" => "Drs. Nur Anas Zaidan ", "penerbit_id" => NULL, "tahun_terbit" => "1991", "tempat_terbit" => "Jakarta", "halaman" => 340, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Makanan Ikan", "tanggal" => "2017-12-04", "kategori_id" => 5, "penulis" => "Ahmad Mujiman", "penerbit_id" => "Penebar Swadaya", "tahun_terbit" => "1991", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 2, "sumber_buku" => "Sumbangan Dari Perpustakaan Daerah Lampung", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Malam Tanpa Bintang", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "A. N. Satrio", "penerbit_id" => "Dar! Mizan", "tahun_terbit" => "2004", "tempat_terbit" => "Bandung", "halaman" => 140, "tinggi" => "17", "isbn" => "979-752-040-4", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "808,9", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "MALIN KUNDANG", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Malin Kundang Anak Durhaka", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => "TIRA IKRANEGARA", "penerbit_id" => "BintangIndonesia", "tahun_terbit" => NULL, "tempat_terbit" => "London", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Manajemen  Mutu Pendidikan Islam", "tanggal" => "2022-02-08", "kategori_id" => 5, "penulis" => "Dr. Deden Makbuloh, M.Ag", "penerbit_id" => "Raja Grafindo Persada", "tahun_terbit" => "2011", "tempat_terbit" => "Jakarta", "halaman" => 334, "tinggi" => "21 cm", "isbn" => "978-979-769-326-8", "stok" => 1, "sumber_buku" => "Sumbangan Buku dari Guru", "rak_id" => "346", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Manajemen Kurikulum", "tanggal" => "2022-02-08", "kategori_id" => 5, "penulis" => "Dr. Rusman, M.Pd", "penerbit_id" => "Rajawali Pers", "tahun_terbit" => "2009", "tempat_terbit" => "Jakarta", "halaman" => 590, "tinggi" => "24 cm", "isbn" => "978-979-205-6", "stok" => 1, "sumber_buku" => "Sumbangan Buku dari Guru", "rak_id" => "351", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Manajemen Mutu Pendidikan Islam", "tanggal" => "2022-02-08", "kategori_id" => 5, "penulis" => "Dr. Deden Makbuloh, M.Ag", "penerbit_id" => "PT. Raja Grafindo Persada", "tahun_terbit" => "2011", "tempat_terbit" => "Jakarta", "halaman" => 334, "tinggi" => "21", "isbn" => "978-979-769-326-8", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Manajemen Mutu Terpadu", "tanggal" => "2005-01-26", "kategori_id" => 5, "penulis" => "Drs. M.N.Nasution, M.Sc.,A.P.U", "penerbit_id" => "Ghlia Indonesia", "tahun_terbit" => "2004", "tempat_terbit" => "Jakarta", "halaman" => 347, "tinggi" => NULL, "isbn" => "979-450-376-2", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "20", "ddc" => "370", "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "MANDARIN SUKSES", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "SETIAWA AGUNG P", "penerbit_id" => " KESAINT BLANC", "tahun_terbit" => "2008", "tempat_terbit" => "JAKARTA", "halaman" => 142, "tinggi" => NULL, "isbn" => "9789795933182", "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "MANUSIA PARIPURNA", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "MARGINALIA CATATAN CINTA DI PINGGIR HATI", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Mari Bermain Bersama Kumbi", "tanggal" => "2022-08-20", "kategori_id" => 5, "penulis" => "Eva Y Nukman", "penerbit_id" => "KPK RI", "tahun_terbit" => "2017", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 5, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "MARI MENCINTAI ANAK YATIM", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Marmut Merah Jambu", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => "Raditya Dika", "penerbit_id" => "Bukune", "tahun_terbit" => "2014", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "MASA DEPAN HUKUM BISNIS ISLAM DI INDONESIA", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 2, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Masjid Pusat Ibadat dan Kebudayaan Islam ", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Drs. Sidi Gazalba", "penerbit_id" => "Pustaka Al Husna", "tahun_terbit" => "1962", "tempat_terbit" => "Jakarta", "halaman" => 412, "tinggi" => NULL, "isbn" => NULL, "stok" => 2, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "297", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Masjid-Masjid Kuno di Banten", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Helmy Faizi Bahrul Ulumi", "penerbit_id" => "Dinas Kebudayaan dan Pariwisata Provinsi Banten", "tahun_terbit" => "2014", "tempat_terbit" => "Serang", "halaman" => 207, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "297,3", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "MATEMATIKA MANDIRI", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Materi Pendidikan Agama Islam", "tanggal" => "2003-12-17", "kategori_id" => 5, "penulis" => "Drs. Supiana, M.Ag", "penerbit_id" => "Rosda Karya", "tahun_terbit" => NULL, "tempat_terbit" => "Bandung", "halaman" => 343, "tinggi" => NULL, "isbn" => "979-692-132-4", "stok" => 3, "sumber_buku" => "Hadiah", "rak_id" => "18", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Me and Mermaid", "tanggal" => "2018-08-20", "kategori_id" => 5, "penulis" => "Balqis Shafira", "penerbit_id" => "PT. MIZAN PUSTAKA", "tahun_terbit" => "2010", "tempat_terbit" => "Bandung", "halaman" => 112, "tinggi" => "21", "isbn" => "978-602-420-372-6", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Media Penilaian Autentik IPS Kelas 1", "tanggal" => "2023-04-04", "kategori_id" => NULL, "penulis" => "TIM", "penerbit_id" => "PT. Tiga Serangkai Pustaka Mandiri", "tahun_terbit" => "2022", "tempat_terbit" => "Solo", "halaman" => 136, "tinggi" => "17,6 x 25", "isbn" => NULL, "stok" => 1, "sumber_buku" => "Dana Bos", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Media Penilaian Autentik IPS Kelas 2", "tanggal" => "2023-04-04", "kategori_id" => NULL, "penulis" => "A. Gunanto", "penerbit_id" => "PT. Tiga Serangkai Pustaka Mandiri", "tahun_terbit" => "2023", "tempat_terbit" => "Solo", "halaman" => 136, "tinggi" => "17,6 x 25", "isbn" => "978-623-199-276-5", "stok" => 1, "sumber_buku" => "Dana Bos", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Megan Si Super Asik", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Karen Mc Combe", "penerbit_id" => "Gramedia Pustaka Utama", "tahun_terbit" => "2007", "tempat_terbit" => "Jakarta", "halaman" => 216, "tinggi" => "20", "isbn" => "979-22-3406-3", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Mekanika", "tanggal" => "2017-11-16", "kategori_id" => 5, "penulis" => "Prof. Yohanes Surya, Ph. D", "penerbit_id" => "PT. Kandel", "tahun_terbit" => "2017", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Melacak Benda Masjid Yang Hilang", "tanggal" => "2003-12-17", "kategori_id" => 5, "penulis" => "H. Agus Fathuddin Yusuf", "penerbit_id" => "Aneka Ilmu", "tahun_terbit" => "2000", "tempat_terbit" => "Jakarta", "halaman" => 388, "tinggi" => "18x23,5 cm", "isbn" => "979-9029-50-3", "stok" => 5, "sumber_buku" => "Hadiah", "rak_id" => "14", "ddc" => "297,326", "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "MEMAHAMI AURAT DAN WANITA", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Membentuk Pribadi Lebih Islam", "tanggal" => "2007-04-11", "kategori_id" => 5, "penulis" => "Ridwan Asy-Syirbaany", "penerbit_id" => "PT. Intimedia Cipta Nusantara", "tahun_terbit" => NULL, "tempat_terbit" => "Jakarta Timur", "halaman" => 358, "tinggi" => "15,5 x 23", "isbn" => "979-9729-0-09", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "MEMBONGKAR ZONA NYAMAN", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "YAYAK HERIYANTO", "penerbit_id" => "YA2K PUBLISHING ", "tahun_terbit" => "2015", "tempat_terbit" => NULL, "halaman" => 248, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Memory Serah Terima Jabatan Kepala MTsN 2 Bandar Lampung", "tanggal" => "2017-10-20", "kategori_id" => NULL, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => "2017", "tempat_terbit" => NULL, "halaman" => 89, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => NULL, "rak_id" => "186", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Mencari Makhluk Berdarah Hijau", "tanggal" => "2018-08-20", "kategori_id" => 5, "penulis" => "Bhakti Kayono", "penerbit_id" => "PT. Kuark Internasional", "tahun_terbit" => NULL, "tempat_terbit" => "Jakarta", "halaman" => 153, "tinggi" => "90", "isbn" => "977-1693-996-444", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Mencetak Muslim Modern", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Jajat Burhanudin", "penerbit_id" => "Rajawali Pers", "tahun_terbit" => "2006", "tempat_terbit" => "Jakarta", "halaman" => 316, "tinggi" => "21 cm", "isbn" => "979-769-056-3", "stok" => 2, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "297,73", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "MENCINTAIN WANITA BERISI ", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "JENNIFER WEINER", "penerbit_id" => "PT. GRAMEDIA PUSTAKA UTAMA", "tahun_terbit" => "2003", "tempat_terbit" => "JAKARTA", "halaman" => 576, "tinggi" => "18 CM", "isbn" => "979-22-0484-9", "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Mendaki Tangga Ma'Rifat", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Syekh Ibnu Jabrar Rummi", "penerbit_id" => "Mitra Press", "tahun_terbit" => "2006", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 2, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Meneladani Akhlak Generasi Terbaik", "tanggal" => "2023-04-20", "kategori_id" => 5, "penulis" => "Abdul Aziz Bin Nashir Al-Julayyil", "penerbit_id" => "Darul Haq", "tahun_terbit" => "2010", "tempat_terbit" => "Jakarta", "halaman" => 234, "tinggi" => NULL, "isbn" => "978-979-3407-41-8", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Mengajar Bayi Anda Membaca", "tanggal" => "2017-12-04", "kategori_id" => 5, "penulis" => "Glenn Doman", "penerbit_id" => "Gaya Favorit Press", "tahun_terbit" => "1991", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Sumbangan Dari Perpustakaan Daerah Lampung", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "MENGAPA HARUS SHOLAT", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Mengenal Bumi Lampung Lebih Dekat", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "A. Zaini dkk", "penerbit_id" => "Yayasan Pendiri Lahirnya Provinsi Lampung", "tahun_terbit" => "2016", "tempat_terbit" => "Bandar Lampung", "halaman" => 174, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "900", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Mengenal dan Menghadapi Berbagai Macam Emosi", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Departemen Kesehatan", "penerbit_id" => "Departemen Kesehatan", "tahun_terbit" => "2002", "tempat_terbit" => "Jakarta", "halaman" => 72, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "618928916", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Mengenal Dosa dan Adzabnya", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Achmad Sunarto", "penerbit_id" => "Aulia", "tahun_terbit" => "2014", "tempat_terbit" => "0", "halaman" => 128, "tinggi" => "0", "isbn" => "0", "stok" => 3, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "297,21", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Mengenal Gerakan Pramuka", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "Tim Esensi", "penerbit_id" => "Grub Erlangga", "tahun_terbit" => "2012", "tempat_terbit" => "Bekasi", "halaman" => NULL, "tinggi" => NULL, "isbn" => "308-370-037-0", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Mengenal Hutan Mangrove", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Ellen Tjandra, S. Si dan Yosua Ronaldi, S. Si", "penerbit_id" => "Pakar Media", "tahun_terbit" => "2011", "tempat_terbit" => "Bandung", "halaman" => 64, "tinggi" => "25", "isbn" => "978-602-97501-3-3", "stok" => 1, "sumber_buku" => "Hadiah Lomba Perpustakaan Sekota Bandar Lampung", "rak_id" => "000", "ddc" => "574,526", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Mengenal Ilmu Hadis", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Abdul Muttolib Aljabaly", "penerbit_id" => "Tiga serangkai", "tahun_terbit" => "2008", "tempat_terbit" => "Solo", "halaman" => 90, "tinggi" => "17,6x25", "isbn" => "978-979-018-107-6", "stok" => 5, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "297,13", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Mengenal Profesi Dokter", "tanggal" => "2017-05-05", "kategori_id" => 5, "penulis" => "Dewi Rieka Kustantari", "penerbit_id" => "CV. Teman Belajar", "tahun_terbit" => "2011", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah Lomba Perpustakaan Sekota Bandar Lampung", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Mengenal Profesi Dokter Lebih Dekat", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Dewi Rieka Kustiantari", "penerbit_id" => "CV. Teman Belajar", "tahun_terbit" => "2011", "tempat_terbit" => "Bandung", "halaman" => 56, "tinggi" => "25", "isbn" => "978-602-9107-08-1", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "610695", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Mengenal Raja-raja Lampung dan Budaya Lampung dalam 4 Bahasa", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "A. Zaini dkk", "penerbit_id" => "Yayasan Pendiri Lahirnya Provinsi Lampung", "tahun_terbit" => "2016", "tempat_terbit" => "Bandar Lampung", "halaman" => 207, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => "hadiah", "rak_id" => "000", "ddc" => "900", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "MENGENDALIKAN HAMA DAN PENYAKIT TANAMAN", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Menggunakan Sistem Operasi Windows", "tanggal" => "2017-12-04", "kategori_id" => 5, "penulis" => "Erwin Philipus", "penerbit_id" => "Saka Mitra Kompetensi", "tahun_terbit" => "2008", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Sumbangan Dari Perpustakaan Daerah Lampung", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Menggungkap Amalan & Khasiat Dibalik Shodaqoh", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Muhammad Fadlun S.P.d.I", "penerbit_id" => "Pustaka Media", "tahun_terbit" => "2011", "tempat_terbit" => "0", "halaman" => 150, "tinggi" => "14.5 x 21.5", "isbn" => "978-602-8214-45-2", "stok" => 1, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "361", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Menghadirkan Pesona Air di Taman", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Ir. Murhananto", "penerbit_id" => "Agromedia Pustaka", "tahun_terbit" => "2002", "tempat_terbit" => "Jakarta", "halaman" => 63, "tinggi" => "23,5", "isbn" => "979-3084-59-6", "stok" => 1, "sumber_buku" => "Hadiah Lomba Perpustakaan Sekota Bandar Lampung", "rak_id" => "000", "ddc" => "714", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Menguak Rahasia Qalbu", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Imam Al - Ghazali", "penerbit_id" => "Nuansa Aulia", "tahun_terbit" => "2008", "tempat_terbit" => "Bandung", "halaman" => 800, "tinggi" => "15,5 x 24 cm", "isbn" => "978-602-8166-30-0", "stok" => 1, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "297,41", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Menguak Rahasia Qoulbu", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Imam Al-ghazali", "penerbit_id" => "Nuansa Aulia", "tahun_terbit" => "2008", "tempat_terbit" => "Bandung", "halaman" => 800, "tinggi" => "24", "isbn" => "978-602-8166-30-0", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "297,41", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Mengungkap berita besar dalam kitab suci", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Abdul Wahab Abdussalam Thawilah", "penerbit_id" => "Tiga serangkai", "tahun_terbit" => "2008", "tempat_terbit" => "Solo", "halaman" => 448, "tinggi" => "21", "isbn" => "979-668-586-x", "stok" => 5, "sumber_buku" => "Hadiah ", "rak_id" => "000", "ddc" => "297,12", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Meniti Jalan Dakwah Bekal Perjuangan Para Da'i", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Fathul Bahri An Nabiry", "penerbit_id" => "Amzah", "tahun_terbit" => "2008", "tempat_terbit" => "Jakarta", "halaman" => 296, "tinggi" => "19 cm", "isbn" => "978-979-9392-86-2", "stok" => 2, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "297,72", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Menjadi Manusia Ma'rifat dan Berjiwa Besar", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Imam Ghazali", "penerbit_id" => "Mitra Press", "tahun_terbit" => "2008", "tempat_terbit" => "Bandung", "halaman" => 280, "tinggi" => "14 x 21 cm", "isbn" => "978-979-17230-6-0", "stok" => 3, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "509,2", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Menjadi Mujahid Sejati", "tanggal" => "2007-04-11", "kategori_id" => NULL, "penulis" => "Dr. Muhammad Said Ramadhan Al-Buth", "penerbit_id" => "PT. Intimedia Cipta Nusantara", "tahun_terbit" => NULL, "tempat_terbit" => "Jakarta", "halaman" => 417, "tinggi" => NULL, "isbn" => "979-3374-09-8", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Menjaring Hari Tanpa Air Mata", "tanggal" => "2022-02-08", "kategori_id" => 5, "penulis" => "Lukman Age Ernayanti", "penerbit_id" => "Koalisi Ngo Ham Aceh", "tahun_terbit" => "2000", "tempat_terbit" => "Aceh", "halaman" => 144, "tinggi" => "15.5 x 23.5 cm", "isbn" => NULL, "stok" => 1, "sumber_buku" => "Sumbangan Buku dari Guru", "rak_id" => "349", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Menulis Karya Ilmiah", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Dr.H.Dalman,M.Pd", "penerbit_id" => "Raja Grafindo Persada", "tahun_terbit" => "2013", "tempat_terbit" => "Jakarta", "halaman" => 304, "tinggi" => "21 cm", "isbn" => "978-979-769-438-8", "stok" => 1, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "808,066", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Menyemai Benih Teknologi Pendidikan", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Yusufhadi Miarso", "penerbit_id" => "Prenada Media", "tahun_terbit" => "2004", "tempat_terbit" => "Jakarta", "halaman" => 744, "tinggi" => "23", "isbn" => "979-3465-68-9", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "808,9", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Menyingkap tuntas rahasia siksa kubur", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Labib Mz", "penerbit_id" => "Pustaka Agung Harapan", "tahun_terbit" => "2003", "tempat_terbit" => "Surabaya", "halaman" => 128, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => "Hadiah ", "rak_id" => "000", "ddc" => "297", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "MERAIH BENING HATI", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Meraih Bening Hati dengan Manajemen Qolbu", "tanggal" => "2004-02-01", "kategori_id" => 5, "penulis" => "KH. Abdullah Gymnastiar", "penerbit_id" => "Gema Insani", "tahun_terbit" => "2002", "tempat_terbit" => "Jakarta", "halaman" => 146, "tinggi" => "21", "isbn" => "979-561-784-0", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => "150", "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Meraih Sukses Berdasarkan Al'Quran", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Muslim Nurdin", "penerbit_id" => "Al-Magfirah", "tahun_terbit" => NULL, "tempat_terbit" => "Jakarta", "halaman" => 128, "tinggi" => "15 x 23 cm", "isbn" => "602-99350-5-4", "stok" => 2, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "131,3", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Meredam Cinta Terlarang", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Taufiqurrahman al-Azizy", "penerbit_id" => "Realbooks", "tahun_terbit" => "2011", "tempat_terbit" => "Yogyakarta", "halaman" => 255, "tinggi" => NULL, "isbn" => "978-979-1830-881", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "808,9", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "MERINDU BAGINDA NABI", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "HABIBURRAHMAN EL SHIRAZY", "penerbit_id" => "REPUBLIKA", "tahun_terbit" => "2018", "tempat_terbit" => "JAKARTA", "halaman" => 176, "tinggi" => "13,5 X 20,5 CM", "isbn" => "9786025734199", "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "MERINDUKAN BAGINDA NABI", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "METODE JARIMATIKA ", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Metode Jarimatika Tekhnik Berhitung Cepat Menguasai Perkalian dengan jari tangan", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Hendra ", "penerbit_id" => "Bintang Indonesia", "tahun_terbit" => NULL, "tempat_terbit" => "Jakarta", "halaman" => 39, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => "hadiah", "rak_id" => "000", "ddc" => "510", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Metode Penelitian Dakwah", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Drs. Asep Saeful Muhtadi, M.Ag", "penerbit_id" => "Pustaka Setia", "tahun_terbit" => "2003", "tempat_terbit" => "Bandung", "halaman" => 147, "tinggi" => "0", "isbn" => "0", "stok" => 2, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "297,62", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Metode Praktis Pembelajaran Berbasis Multiple Intelligences", "tanggal" => "2005-01-26", "kategori_id" => 5, "penulis" => "Linda Campbell", "penerbit_id" => "Intuisi Press", "tahun_terbit" => "2004", "tempat_terbit" => "Depok", "halaman" => 335, "tinggi" => "21,0x28,0 cm", "isbn" => "979-97464-9-3", "stok" => 2, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Metodologi Pengajaran Agama Islam", "tanggal" => "2003-12-17", "kategori_id" => 5, "penulis" => "Dr. Ahmad Tafsir", "penerbit_id" => "PT. Remaja Rosdakarya", "tahun_terbit" => "1995", "tempat_terbit" => "Bandung", "halaman" => 243, "tinggi" => NULL, "isbn" => "979-514-530-4", "stok" => 2, "sumber_buku" => "Hadiah", "rak_id" => "15", "ddc" => "371.39", "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "MHERE IS MY MOM", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Miiko 16", "tanggal" => "2018-08-20", "kategori_id" => 5, "penulis" => "Ono Eniko", "penerbit_id" => "Gramedia Pustaka Utama", "tahun_terbit" => "2012", "tempat_terbit" => "Jakarta", "halaman" => NULL, "tinggi" => NULL, "isbn" => "978-6022-1076-9-9", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Mimpi Mimpi Lyra", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => "Utami Ichda Ramadhanty", "penerbit_id" => "PT. MIZAN PUSTAKA", "tahun_terbit" => "2013", "tempat_terbit" => "Bandung", "halaman" => NULL, "tinggi" => NULL, "isbn" => "978-602-242-218-1", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "MIMPI SEJUTA DOLAR", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Misteri Ayunan Tua", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Meika", "penerbit_id" => "Dar Mizan", "tahun_terbit" => "2017", "tempat_terbit" => "Bandung", "halaman" => 108, "tinggi" => "21 cm", "isbn" => "978-602-242-641-7", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Misteri Gurindam Makam Kuno", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Yovita Siswati", "penerbit_id" => "Gramedia Pustaka Utama", "tahun_terbit" => "2016", "tempat_terbit" => "Jakarta", "halaman" => 192, "tinggi" => "13 x 19,5 Cm", "isbn" => "978-602-6208-05-7", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "MISTERI GURINDANG MAKAM KUNO", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "YOVITA", "penerbit_id" => "SISWATI", "tahun_terbit" => "2016", "tempat_terbit" => "JAKARTA", "halaman" => 192, "tinggi" => "13 X 19,5 CM", "isbn" => "978-602-6208-05-7", "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Misteri Pohon Bernyanyi", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "Sustin Nunik", "penerbit_id" => "Kementerian Pendidikan dan Kebudayaan Kantor Bahasa Lampung", "tahun_terbit" => "2020", "tempat_terbit" => "Lampung", "halaman" => 54, "tinggi" => NULL, "isbn" => "978-623-92419-1-9", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "MISTERI SEPUTAR KEHIDUPAN", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Drs.H.Abujamin Roham", "penerbit_id" => NULL, "tahun_terbit" => "1994", "tempat_terbit" => "Jakarta", "halaman" => 106, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Misteri Tangisan Tengah Malam", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => "Dinda", "penerbit_id" => "PT. MIZAN PUSTAKA", "tahun_terbit" => NULL, "tempat_terbit" => "Bandung", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "MODA WISHER", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Model Masyarakat Madani", "tanggal" => "2007-04-11", "kategori_id" => 5, "penulis" => "Dr. Masykur Hakim", "penerbit_id" => "PT. Intimedia Cipta Nusantara", "tahun_terbit" => "2003", "tempat_terbit" => "Jakarta", "halaman" => 134, "tinggi" => "21", "isbn" => "979-3372-96-6", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => "306.6", "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Modul Bimbel", "tanggal" => "2018-08-20", "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => "Desain Cover Khalimi", "tahun_terbit" => "2009", "tempat_terbit" => "Bandar Lampung", "halaman" => 206, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Sumbangan Siswa/I Kls.IX", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Modul Pelatihan Pelayanan Kesehatan Peduli Remaja", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Kementrian Kesehatan RI", "penerbit_id" => "Kementrian Kesehatan RI", "tahun_terbit" => "2011", "tempat_terbit" => "Jakarta", "halaman" => 190, "tinggi" => NULL, "isbn" => "978-602-9364-03-3", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "612661", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Modul Pelatihan Penjaringan Kesehatan Peserta Didik", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Kementrian Kesehatan RI", "penerbit_id" => "Kementrian Kesehatan RI", "tahun_terbit" => "2011", "tempat_terbit" => "Jakarta", "halaman" => 169, "tinggi" => NULL, "isbn" => "978-602-9364-06-4", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "612661", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "MODUL ROBOTIC", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Modul Robotic ", "tanggal" => "2023-05-20", "kategori_id" => NULL, "penulis" => "  TIM MTs Negeri 2 Bandar Lampung", "penerbit_id" => "Mitra IT", "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Mohammad Hatta", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "Anom Whani Wicaksana", "penerbit_id" => "C-Klik Media", "tahun_terbit" => "2018", "tempat_terbit" => "Yogyakarta", "halaman" => 202, "tinggi" => NULL, "isbn" => "978-602-5448-22-5", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Mong Mong Si Monyet Kecil", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "Dian Nurlelasari, S.Pd.SD", "penerbit_id" => "Kementerian Pendidikan dan Kebudayaan Kantor Bahasa Lampung", "tahun_terbit" => "2020", "tempat_terbit" => "Lampung", "halaman" => 36, "tinggi" => NULL, "isbn" => "978-602-52764-8-4", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Morfologi Tumbuhan", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Dewi Rosanti", "penerbit_id" => "Erlangga", "tahun_terbit" => "2013", "tempat_terbit" => "Jakarta", "halaman" => 141, "tinggi" => NULL, "isbn" => "978-602-241-316-5", "stok" => 4, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "415", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Mozaik Teknologi Pendidikan", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Dewi Salma Prawiradilaga", "penerbit_id" => "Kencana", "tahun_terbit" => "2004", "tempat_terbit" => "Jakarta", "halaman" => 426, "tinggi" => "23", "isbn" => "979-3465-69-7", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "370", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Mozaik Teknologi Pendidikan ", "tanggal" => "2005-01-26", "kategori_id" => 5, "penulis" => "Dewi Salma Prawiradilaga", "penerbit_id" => "Kencana", "tahun_terbit" => "2004", "tempat_terbit" => "Jakarta", "halaman" => 426, "tinggi" => "23 cm", "isbn" => "979-3465-69-7", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "370", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Muhammad Al-Fatih", "tanggal" => "2023-05-29", "kategori_id" => 5, "penulis" => "Handri Satria", "penerbit_id" => "Salsabila", "tahun_terbit" => "2016", "tempat_terbit" => "Jakarta", "halaman" => 316, "tinggi" => "13,5 x 20,5 cm", "isbn" => "978-602-1695-34-0", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Muhammad Hatta", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "Adi Imam T, dkk", "penerbit_id" => "Bee Media Indonesia", "tahun_terbit" => "2022", "tempat_terbit" => "Jakarta Timur", "halaman" => 64, "tinggi" => "14,8 x 21 cm", "isbn" => "978-979-15183-8-3", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "MUHAMMAD MENTELADANI MANUSIA PILIHAN ALLAH", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Muhammad Sebagai Pedagang", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Ippho Santoso dkk", "penerbit_id" => "Pt. Elex Media Komputindo", "tahun_terbit" => "2008", "tempat_terbit" => "Jakarta", "halaman" => 104, "tinggi" => NULL, "isbn" => "978-979-27-3238-2", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "808,9", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Munajat Sufi", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Imam Al-ghazali", "penerbit_id" => "Mitra Pers", "tahun_terbit" => "2009", "tempat_terbit" => "Jakarta", "halaman" => 256, "tinggi" => "21", "isbn" => "978-602-8446-00-6", "stok" => 3, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "297,5", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Musim Kemarau di Bukit Barisan Selatan", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Tuti Sitanggang", "penerbit_id" => "Kementerian Pendidikan dan Kebudayaan Kantor Bahasa Lampung", "tahun_terbit" => "2020", "tempat_terbit" => "Lampung", "halaman" => 48, "tinggi" => NULL, "isbn" => "978-623-92419-0-2", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "My First Make Up", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Wanda Amyra Mayshara", "penerbit_id" => "Dar Mizan", "tahun_terbit" => "2015", "tempat_terbit" => "Bandung", "halaman" => 116, "tinggi" => "21 cm", "isbn" => "978-979-066-497-5", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "MY FIRST MAKE UP ", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "WINDA AMYRA MAYSHARA", "penerbit_id" => "PT. MIZAN PUSTAKA", "tahun_terbit" => "2015", "tempat_terbit" => "BANDUNG", "halaman" => 116, "tinggi" => "21 CM", "isbn" => "978-979-066-497-5", "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "My Lovely Oarents", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Ahdra", "penerbit_id" => "Dar Mizan", "tahun_terbit" => "2014", "tempat_terbit" => "Bandung", "halaman" => 124, "tinggi" => "21 cm", "isbn" => "9798-602-242-402-4", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "My Story", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => "Sucia Ramadhani", "penerbit_id" => "PT. MIZAN PUSTAKA", "tahun_terbit" => "2014", "tempat_terbit" => "Bandung", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Nabi Muhammad SAW Datang di Naungin Awan", "tanggal" => "2018-08-20", "kategori_id" => 5, "penulis" => "Kh. Abdullah Zaky Al-Kaaf", "penerbit_id" => "Pustaka Setia", "tahun_terbit" => "2001", "tempat_terbit" => "Bandung", "halaman" => 72, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "NABI SULAIMAN AS", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "KAK RINA NOVIA & KK YOLI HEMDI", "penerbit_id" => "ZIKRUN HAKIM", "tahun_terbit" => "2012", "tempat_terbit" => "JAKARTA TIMUR", "halaman" => 48, "tinggi" => "22 X 19 CM", "isbn" => "978-979-063-669-9", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "NARUTO", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "MASASHI KISHIMOTO", "penerbit_id" => "KOMIK REMAJA", "tahun_terbit" => "1999", "tempat_terbit" => "JAKARTA PUSAT", "halaman" => 198, "tinggi" => NULL, "isbn" => "978-979-20-5584-3", "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Naruto Vol. 19", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "MASASHI KISHIMOTO", "penerbit_id" => "Gagas Media", "tahun_terbit" => "2005", "tempat_terbit" => "Jakarta", "halaman" => 205, "tinggi" => NULL, "isbn" => "979-20-7874-6", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Naruto Vol.1", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "MASASHI KISHIMOTO", "penerbit_id" => "Gramedia Pustaka Utama", "tahun_terbit" => "2004", "tempat_terbit" => "Jakarta", "halaman" => 205, "tinggi" => NULL, "isbn" => "978-979-20-5585-1", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "NARUTO Vol.67", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "MASASHI KISHIMOTO", "penerbit_id" => "Gramedia Pustaka Utama", "tahun_terbit" => "1999", "tempat_terbit" => "JAKARTA", "halaman" => 205, "tinggi" => NULL, "isbn" => "978-979-20-5584-3", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Naruto Vol.69", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "MASASHI KISHIMOTO", "penerbit_id" => "Gramedia Pustaka Utama", "tahun_terbit" => "2015", "tempat_terbit" => "Jakarta", "halaman" => 205, "tinggi" => NULL, "isbn" => "978-602-02-6461-5", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Nasib Jenazah Murtad Kain Kafannya Terbakar", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "TIM", "penerbit_id" => "PT. Variapop Group", "tahun_terbit" => "2010", "tempat_terbit" => "Jakarta", "halaman" => 192, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Nasihat Dari Liang Lahat", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => "MB. Rahimsyah. Ar", "penerbit_id" => "Serba Jaya", "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Negara dan Bangsa", "tanggal" => "2000-04-04", "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => "Widyadara", "tahun_terbit" => "1988", "tempat_terbit" => "Jakarta", "halaman" => 264, "tinggi" => "27 cm", "isbn" => "979-8087-10-0", "stok" => 10, "sumber_buku" => "Hadiah", "rak_id" => "05", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Negeri 3 Menara", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => "A. Fuadi", "penerbit_id" => "Gramedia Pustaka Utama", "tahun_terbit" => "2009", "tempat_terbit" => "Jakarta Selatan", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "NEGERI 5 MENARA", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "A. FUADI", "penerbit_id" => "PT. GRAMEDIA PUSTAKA UTAMA", "tahun_terbit" => "2009", "tempat_terbit" => "JAKARTA", "halaman" => 425, "tinggi" => NULL, "isbn" => "978-979-22-4861-6", "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "NELISSA'S MATE", "tanggal" => "2022-06-14", "kategori_id" => 4, "penulis" => "Nilna", "penerbit_id" => "Mizan Media Utama", "tahun_terbit" => "2011", "tempat_terbit" => "Bandung", "halaman" => 180, "tinggi" => "21 cm", "isbn" => "978-979-066-499-9", "stok" => 1, "sumber_buku" => "Sumbang buku kls 9 Tp 2021/2022", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Neraka Jahanam", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "MB. Rahimsyah. Ar", "penerbit_id" => "Putra Jaya", "tahun_terbit" => NULL, "tempat_terbit" => "Surabaya", "halaman" => 32, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "New Matematika", "tanggal" => "2022-02-08", "kategori_id" => 5, "penulis" => "Handi Pramono", "penerbit_id" => "Indonesia Publishing House", "tahun_terbit" => "2010", "tempat_terbit" => "Jakarta", "halaman" => 134, "tinggi" => "176 x 260 cm", "isbn" => "978-979185-680-2", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "366", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "NEXT 6", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Ngakak Bareng ", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Divian Cita", "penerbit_id" => "Histeria", "tahun_terbit" => "2018", "tempat_terbit" => "Jakarta Selatan", "halaman" => 216, "tinggi" => NULL, "isbn" => "978-602-5907-95-1", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "NOTES FROM QATAR", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Off The Record", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Ria SW", "penerbit_id" => "Gramedia", "tahun_terbit" => "2018", "tempat_terbit" => "Jakarta", "halaman" => 224, "tinggi" => "20 cm", "isbn" => "978-602-038-568-6", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "ONE PIECE", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "OSN TINGKAT KABUPATEN / KOTA", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Pahlawan Indonesia ", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Tim Media Pus Indo ", "penerbit_id" => "Media Pus Indo", "tahun_terbit" => "2008", "tempat_terbit" => "Jakarta", "halaman" => 158, "tinggi" => "23,5", "isbn" => "978-979-1481-60-1", "stok" => NULL, "sumber_buku" => "Hadiah ", "rak_id" => "000", "ddc" => "920", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Pakis Dalam Angka Tahun 2017", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "kementrian Agama RI", "penerbit_id" => "Kemeterian Agama RI", "tahun_terbit" => "2017", "tempat_terbit" => "Banten", "halaman" => 38, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "808,9", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "PANCAKE US WAFFLE", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Pancake VS Waffle", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => "Shafira Nur Ramadahni", "penerbit_id" => "PT. MIZAN PUSTAKA", "tahun_terbit" => "2014", "tempat_terbit" => "Bandung", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "PANDUAN", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Panduan Berternak Itik Secara Intensif", "tanggal" => "2017-05-05", "kategori_id" => 5, "penulis" => "Bambang Suharno dan Khairul Amri", "penerbit_id" => "Penebar Swadaya", "tahun_terbit" => "2011", "tempat_terbit" => "Jakarta", "halaman" => 132, "tinggi" => "23", "isbn" => "979-002-427-4", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "636,579", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Panduan Gawat Darurat", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Dr. Karmel L. Tambunan, Dkk.", "penerbit_id" => "Fakultas Kedokteran Universitas Indonesia", "tahun_terbit" => "1990", "tempat_terbit" => "Jakarta", "halaman" => 176, "tinggi" => NULL, "isbn" => "979-496-081-8", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "613,69", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Panduan Implementasi Pendidikan Anti Korupsi Di Madrasah", "tanggal" => "2021-07-23", "kategori_id" => 5, "penulis" => "Rika Irasanti,SE.MM", "penerbit_id" => "Kementerian Agama Republik Indonesia Kanrtor Wilayah Provinsi Lampung Th.2022", "tahun_terbit" => "2022", "tempat_terbit" => "Lampung", "halaman" => 144, "tinggi" => NULL, "isbn" => "-", "stok" => 1, "sumber_buku" => "Hadiah dari KPK", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Panduan Implementasi Pendidikan Antikorupsi INSERSI", "tanggal" => "2021-07-23", "kategori_id" => 5, "penulis" => "Drs. Zulfikri Anas, M.Ed", "penerbit_id" => "KPK ( Komisi Pemberantasan Korupsi )", "tahun_terbit" => "2018", "tempat_terbit" => "Jakarta", "halaman" => 123, "tinggi" => NULL, "isbn" => "978-602-52387-8-9", "stok" => 25, "sumber_buku" => "sumbangan dari KPK", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Panduan MC dan  Pidato Dalam 3 Bahasa Indonesia - Arab - Inggris ", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Drs. Syamsi Hasan", "penerbit_id" => "Amelia", "tahun_terbit" => "0", "tempat_terbit" => "Surabaya", "halaman" => 259, "tinggi" => NULL, "isbn" => "979-395-579-1", "stok" => 2, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "809,5", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Panduan Praktis Implementasi Pendidikan Antikorupsi", "tanggal" => "2021-07-23", "kategori_id" => 5, "penulis" => "Drs. Zulfikri Anas, M.Ed", "penerbit_id" => "KPK ( Komisi Pemberantasan Korupsi )", "tahun_terbit" => "2019", "tempat_terbit" => "Jakarta Selatan", "halaman" => 37, "tinggi" => NULL, "isbn" => NULL, "stok" => 25, "sumber_buku" => "sumbangan dari KPK", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Panduan Praktis Menguasai Internet", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Ibnu Aziz", "penerbit_id" => "Citra Media", "tahun_terbit" => "2010", "tempat_terbit" => "Yogyakarta", "halaman" => 274, "tinggi" => "15,75x11,5", "isbn" => "979-26-1792-2", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "506", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Panduan Shalat dan Doa", "tanggal" => "2022-06-16", "kategori_id" => 5, "penulis" => "Ust. Umar ER", "penerbit_id" => "Lingkar Media", "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => 128, "tinggi" => NULL, "isbn" => "979-125-816-3", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Para Detektif Mungil", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Carnelute ", "penerbit_id" => "Holder Children's Books", "tahun_terbit" => "2021", "tempat_terbit" => "China", "halaman" => 24, "tinggi" => NULL, "isbn" => "978-144-495-611", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "PARADIGMA BARU PENDIDIKAN NASIONAL", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "PARADIKMA HADIST NABI", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Pedoman Akselerasi Pembinaan dan Pelaksanaan Usaha Kesehatan Sekolah", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Kementrian Kesehatan RI", "penerbit_id" => "Kementrian Kesehatan RI", "tahun_terbit" => "2015", "tempat_terbit" => "Jakarta", "halaman" => 143, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "371,71", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Pedoman Doa & Dzikir", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Ahmad Hadi Amrullah", "penerbit_id" => "Mitra Utama", "tahun_terbit" => "2015", "tempat_terbit" => "Bandung", "halaman" => 117, "tinggi" => "0", "isbn" => "0", "stok" => 3, "sumber_buku" => "Dana Bos", "rak_id" => "108", "ddc" => "297,323", "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Pedoman Kader Seri Kesehatan Anak ", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Kementrian Kesehatan RI", "penerbit_id" => "Kementrian Kesehatan RI", "tahun_terbit" => "2014", "tempat_terbit" => "Jakarta", "halaman" => 80, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "618.920 1", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Pedoman Pelaksaan Uks Di Sekolah", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Kementrian Pendidikan Nasional ", "penerbit_id" => "Kementrian Pendidikan Nasional", "tahun_terbit" => "2011", "tempat_terbit" => "Jakarta", "halaman" => 57, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "371,71", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Pedoman Pelayanan Kesehatan Anak Dengan Disabilitas Keluarga", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Kementrian Kesehatan RI", "penerbit_id" => "Kementrian Kesehatan RI", "tahun_terbit" => "2015", "tempat_terbit" => "Jakarta", "halaman" => 59, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "616.06", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Pedoman Pembentukan Lembaga Akreditasi Perpustakaan Provinsi", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => "2014", "tempat_terbit" => NULL, "halaman" => 26, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "374", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Pedoman Pengenalan Dini Demensial (kepikunan)", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Departemen Kesehatan RI", "penerbit_id" => "Departemen Kesehatan RI", "tahun_terbit" => "2002", "tempat_terbit" => "Jakarta", "halaman" => 79, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "616.979.2", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Pedoman Pengolahan Bahan Perpustakaan Perpustakaan Nasional R.I", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => "2011", "tempat_terbit" => NULL, "halaman" => 96, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "370", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Pedoman Pengolahan Perpustakaan Madrasah", "tanggal" => "1999-03-01", "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => "Jakarta", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => NULL, "rak_id" => "385", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Pedoman Praktis Berternak Ikan Mujair", "tanggal" => "2017-05-05", "kategori_id" => 5, "penulis" => "Ibnu Putra", "penerbit_id" => "Air Publishing", "tahun_terbit" => "2016", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah Lomba Perpustakaan Sekota Bandar Lampung", "rak_id" => "179", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Pedoman Standar Nasional Pelayanan Kesehatan Peduli Remaja", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Kementrian Kesehatan RI", "penerbit_id" => "Kementrian Kesehatan RI", "tahun_terbit" => "2013", "tempat_terbit" => "Jakarta", "halaman" => 114, "tinggi" => NULL, "isbn" => "978-602-235-339-3", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "6130433", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Pedoman Tekhnik Konseling Kesehatan Remaja Bagi Konselor Sebaya", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Kementrian Kesehatan RI", "penerbit_id" => "Kementrian Kesehatan RI", "tahun_terbit" => "2010", "tempat_terbit" => "Jakarta", "halaman" => 58, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "613.043.3", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "PEDOMAN UMUM EYD DAN PEMBENTUKAN ISTILAH", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => "CV. ITA ", "tahun_terbit" => NULL, "tempat_terbit" => "SURAKARTA", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Pedoman Untuk Tenaga Kesehatan Usaha Kesehatan Sekolah Di Tingkat Sekolah Lanjutan", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Departemen Kesehatan RI", "penerbit_id" => "Departemen Kesehatan RI", "tahun_terbit" => "2007", "tempat_terbit" => "Jakarta", "halaman" => 69, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "613", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Pedoman Upaya Kesehatan Jiwa Anak Usia Sekolah Ditingkat Sekolah Dasar", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Departemen Kesehatan dan Kesejahteraan Sosial", "penerbit_id" => "Departemen Kesehatan dan Kesejahteraan Sosial", "tahun_terbit" => "2001", "tempat_terbit" => "Jakarta", "halaman" => 59, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "362.2", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Pegantungan dan 17 cerita rakyat", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Dhinda Mahar,dkk", "penerbit_id" => "Dewan kesenian cilegon", "tahun_terbit" => "2015", "tempat_terbit" => "Banten", "halaman" => 178, "tinggi" => "19", "isbn" => "978-xxxxxx", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "398,3", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Pelajaran Shalat Sunnat", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Ust.Labib Mz", "penerbit_id" => "Mulia Jaya", "tahun_terbit" => "2010", "tempat_terbit" => "Surabaya", "halaman" => 128, "tinggi" => NULL, "isbn" => "0", "stok" => 1, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "297,32", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Pelajaran Tajwid", "tanggal" => "2023-04-20", "kategori_id" => 5, "penulis" => "Achmad Sunarto", "penerbit_id" => "Bintang Terang", "tahun_terbit" => NULL, "tempat_terbit" => "Jakarta", "halaman" => 88, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "PELATIHAN SHOLAT KHUSYUK", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Pemikiran Kalam ", "tanggal" => "2023-04-20", "kategori_id" => 5, "penulis" => "Prof. Dr. K.H Sahilun A. Nasir, M.Pd.I", "penerbit_id" => "PT. Raja Grafindo Persada", "tahun_terbit" => "2010", "tempat_terbit" => "Jakarta", "halaman" => 246, "tinggi" => "23", "isbn" => "978-979-769-318-3", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => "297.3", "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Pemikiran Pendidikan Islam", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Drs. A. Susanto, M.Pd.", "penerbit_id" => "Amzah", "tahun_terbit" => "2010", "tempat_terbit" => "Jakarta", "halaman" => 152, "tinggi" => "21 cm", "isbn" => "978-979-9392-96-1", "stok" => 2, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "297,03", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Pemimpin", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Wildan Alamsyah", "penerbit_id" => "Loveable", "tahun_terbit" => "2019", "tempat_terbit" => "Yogyakarta", "halaman" => 206, "tinggi" => NULL, "isbn" => "978-623-7211-41-9", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Pencegahan AIDS melalui Promosi Kesehatan", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Hendarmin Aulia", "penerbit_id" => "ITB", "tahun_terbit" => "1994", "tempat_terbit" => "Bandung", "halaman" => 89, "tinggi" => "21", "isbn" => "979-8591-11-9", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "614599", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Pencegahan dan Penanggulangan Penyakit Demam Dengue dan Demam Berdarah Dengue", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Kementrian Kesehatan RI", "penerbit_id" => "Kementrian Kesehatan RI", "tahun_terbit" => "2003", "tempat_terbit" => "Jakarta", "halaman" => 161, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => "hadiah", "rak_id" => "000", "ddc" => "371,71", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Pencegahan dan Pengawasan Anemia Defisiensi Besi", "tanggal" => "2017-12-04", "kategori_id" => 5, "penulis" => "E. M. Demaeyer", "penerbit_id" => "World Health Or Ganization", "tahun_terbit" => "1993", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Sumbangan Dari Perpustakaan Daerah Lampung", "rak_id" => "159", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "PENCURI MAYAT", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Pendidikan Agama Islam", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Prof. Dr. H. Zainuddin Ali, M.A", "penerbit_id" => "Bumi Aksara", "tahun_terbit" => "2007", "tempat_terbit" => "Jakarta", "halaman" => 118, "tinggi" => "23 cm", "isbn" => "978-979-010-005-3", "stok" => 2, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "297,73", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Pendidikan Antikorupsi", "tanggal" => "2021-07-23", "kategori_id" => 5, "penulis" => "Drs. Zulfikri Anas, M.Ed", "penerbit_id" => "KPK ( Komisi Pemberantasan Korupsi )", "tahun_terbit" => "2017", "tempat_terbit" => "Jakarta", "halaman" => 70, "tinggi" => NULL, "isbn" => NULL, "stok" => 25, "sumber_buku" => "sumbangan dari KPK", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Pendidikan Kewarganegaraan", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "S.Sumarsono,dkk.", "penerbit_id" => "Gramedia Pustaka Utama", "tahun_terbit" => "2001", "tempat_terbit" => "Jakarta", "halaman" => 196, "tinggi" => "23", "isbn" => "979-686-166-6", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "323,6", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Pendidikan Kewarganegaraan untuk Perguruan Tinggi", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Kaelan", "penerbit_id" => "Paradigma", "tahun_terbit" => "2010", "tempat_terbit" => "Jakarta", "halaman" => 206, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "323,6", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Pendidikan Pancasila", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Kaelan", "penerbit_id" => "Paradikma", "tahun_terbit" => "2010", "tempat_terbit" => "Yogyakarta", "halaman" => 285, "tinggi" => NULL, "isbn" => "979-8658-00-0", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "016.230 5", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "PENEGAKAN HUKUM LINGKUNGAN", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Pengabdianku Terdampar Dihatiku Damar", "tanggal" => "2018-08-20", "kategori_id" => 5, "penulis" => "Drs. Sunanto", "penerbit_id" => "PT.Hidayat", "tahun_terbit" => "2001", "tempat_terbit" => "Yogyakarta", "halaman" => 120, "tinggi" => NULL, "isbn" => "979-9555-04-3", "stok" => 1, "sumber_buku" => "Sumbangan Siswa/I Kls.IX", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Pengantar Filsafat", "tanggal" => "2022-02-08", "kategori_id" => 5, "penulis" => "Prof.Dr.A. Fauzie Nurdin, M.S", "penerbit_id" => "Panta Rhei Books", "tahun_terbit" => "2014", "tempat_terbit" => "Yogyakarta", "halaman" => 218, "tinggi" => "15 x 21", "isbn" => "978-979-3521-10-14", "stok" => 1, "sumber_buku" => "Sumbangan Buku dari Guru", "rak_id" => "342", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Pengantar Ilmu Jiwa Agama", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Prof. Dr. Djalaluddin ", "penerbit_id" => "Kalam Mulia", "tahun_terbit" => "1989", "tempat_terbit" => "Jakarta", "halaman" => 140, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "150", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "PENGENALAN KOMPUTER", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "PENGHUJUNG LANGIT", "tanggal" => "2022-06-14", "kategori_id" => 4, "penulis" => "Shofa Faridah I", "penerbit_id" => "Zettu", "tahun_terbit" => "2012", "tempat_terbit" => "Jakarta Timur", "halaman" => 200, "tinggi" => "13 x 19 cm", "isbn" => "978-602-7735-16-3", "stok" => 1, "sumber_buku" => "Sumbang buku kls 9 Tp 2021/2022", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "PENGHUNI LANGIT", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Penghuni Lantai Empat", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => "Evangelina Tessia", "penerbit_id" => "PT. MIZAN PUSTAKA", "tahun_terbit" => "2014", "tempat_terbit" => "Bandung", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Penghuni Rumah Tua", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Laksita Judith Tabina dkk", "penerbit_id" => "Muffin graphics", "tahun_terbit" => "2018", "tempat_terbit" => "Bandung", "halaman" => 92, "tinggi" => "21", "isbn" => "978-602-367-492-3", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "808,9", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Pengurus MOS Harus Mati", "tanggal" => "2022-10-25", "kategori_id" => 5, "penulis" => "Lexie Xu", "penerbit_id" => "Kompas Gramedia", "tahun_terbit" => "2011", "tempat_terbit" => "Jakarta", "halaman" => 304, "tinggi" => "20 cm", "isbn" => "978-979-22-6974-1", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "361", "ddc" => "808,9", "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Pensil Ajaib", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Eko Satria", "penerbit_id" => "Gramedia Pustaka Utama", "tahun_terbit" => NULL, "tempat_terbit" => "Bandung", "halaman" => 160, "tinggi" => NULL, "isbn" => "978-979-27-7825-0", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Penulisan Sastra Kreatif", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Heru Kurniawan Sutardi", "penerbit_id" => "Graha Ilmu", "tahun_terbit" => "2012", "tempat_terbit" => "Yogyakarta", "halaman" => 174, "tinggi" => "23", "isbn" => "978-979-756-818-4", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "807", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Penuntun Teknis Surat Menyurat", "tanggal" => "2018-08-20", "kategori_id" => 5, "penulis" => "Adi Nugraha", "penerbit_id" => NULL, "tahun_terbit" => "1996", "tempat_terbit" => "Yogyakarta", "halaman" => 157, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Sumbangan Siswa/I Kls.IX", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Penyakit Tidak Menular", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Kementrian Kesehatan RI", "penerbit_id" => "Kementrian Kesehatan RI", "tahun_terbit" => "2012", "tempat_terbit" => "Jakarta", "halaman" => 41, "tinggi" => NULL, "isbn" => "2088-270x", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "254", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Peranan 10 pahlawan Revolusi Sebagai Perisai Negara Proklamasi", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Jumari ismantto,Muh.Talib Mberu", "penerbit_id" => "Tiga serangkai", "tahun_terbit" => "2008", "tempat_terbit" => "Solo", "halaman" => 80, "tinggi" => "25", "isbn" => "978-979-018-829-7", "stok" => 5, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "959,8", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "PERANG ISIMETRIS & SKEMA PENJAJAHAN GAYA BARU", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "M. ARIEF PRONOTO HENDRAJIT", "penerbit_id" => "GLOBAL FUTURE INSTITUTE", "tahun_terbit" => "2017", "tempat_terbit" => "JAKARTA SELATAN", "halaman" => 234, "tinggi" => NULL, "isbn" => "978-602-97209-8-3", "stok" => 1, "sumber_buku" => "SUMBANGAN BUKU ALUMNI TP. 2021/2022", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Perencanaan Pembelajaran", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Hamzah B. Uno", "penerbit_id" => "Bumi Aksara", "tahun_terbit" => "2007", "tempat_terbit" => "Jakarta", "halaman" => 158, "tinggi" => NULL, "isbn" => "979-526-250-5", "stok" => NULL, "sumber_buku" => "Hadiah ", "rak_id" => "000", "ddc" => "375,006", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "PERJALANAN HIDUP RASULLAH", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Perjalanan Wisata Mesir Mengenal Ragam Budaya dan Geografi", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Elaine Jackson", "penerbit_id" => "Tiga Serangkai", "tahun_terbit" => "2007", "tempat_terbit" => "Solo", "halaman" => 32, "tinggi" => "26,5 Cm", "isbn" => "979-33-0710-2", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Perluasan Dan Penyesuaian Notasi DDC Untuk Wilayah Indonesia", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => "2014", "tempat_terbit" => NULL, "halaman" => 118, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "371", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "PERSEPSI", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "PERSUASION", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "JANE AUSTEN", "penerbit_id" => "PT. GRAMEDIA PUSTAKA UTAMA", "tahun_terbit" => "2022", "tempat_terbit" => "JAKARTA", "halaman" => 328, "tinggi" => "18 CM", "isbn" => "9786020632018", "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Pertemuan Rahasia", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Dona Clayton", "penerbit_id" => "Gramedia Pustaka Utama", "tahun_terbit" => "2009", "tempat_terbit" => "Jakarta", "halaman" => 224, "tinggi" => "18", "isbn" => "978-979-22-4580-6", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "808,9", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Peta Buta  Untuk Sekolah Dasar kelas VI", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Salmet Swasono dkk", "penerbit_id" => "Erlangga", "tahun_terbit" => "2013", "tempat_terbit" => "Jakarta", "halaman" => 73, "tinggi" => NULL, "isbn" => "978-602-241-173-4", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "377", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Peta Provinsi Lampung 2 Kota Madiya dan 14 Kabupaten beserta kamus bahasa lampung", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "A. Zaini dkk", "penerbit_id" => "Yayasan Pendiri Lahirnya Provinsi Lampung", "tahun_terbit" => "2016", "tempat_terbit" => "Bandar Lampung", "halaman" => 117, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "526", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "PETER PAN", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Petualangan Dunia TV", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => "RR. Shafina Nur Ramadhani", "penerbit_id" => "PT. MIZAN PUSTAKA", "tahun_terbit" => "2015", "tempat_terbit" => "Bandung", "halaman" => NULL, "tinggi" => NULL, "isbn" => "978-602-242-588-5", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Petunjuk Lengkap Mengenai Tanam - tanaman Di Indonesia", "tanggal" => "2017-12-04", "kategori_id" => 5, "penulis" => "J. Kloppenburg", "penerbit_id" => "SD. R. S Bethesda 7 Andi Offset Yogyakarta", "tahun_terbit" => "1983", "tempat_terbit" => "Yogyakarta", "halaman" => 259, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Sumbangan Dari Perpustakaan Daerah Lampung", "rak_id" => "158", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Petunjuk Teknis Penjaringan Kesehatan Anak Sekolah Lanjutan", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Direktorat Bina Kesehatan Anak", "penerbit_id" => "Kementrian Kesehatan RI", "tahun_terbit" => "2010", "tempat_terbit" => "Jakarta", "halaman" => 54, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => "Hadiah ", "rak_id" => "000", "ddc" => "612,661", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "PETUNJUK ZIKIR DAN DOA", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Perempuan 2", "tanggal" => "2022-10-19", "kategori_id" => 5, "penulis" => "Intan Faradillah", "penerbit_id" => "Transmedia", "tahun_terbit" => "2014", "tempat_terbit" => "Jakarta", "halaman" => 256, "tinggi" => "13 x 19 cm", "isbn" => "978-979-799-275-0", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "354", "ddc" => "028", "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Pidato - Pidato Yang Mengubah Dunia", "tanggal" => "2013-12-12", "kategori_id" => 5, "penulis" => "Haris Munandar", "penerbit_id" => "Erlangga", "tahun_terbit" => "2007", "tempat_terbit" => "Jakarta", "halaman" => 245, "tinggi" => NULL, "isbn" => "978-979-033-268-3", "stok" => 20, "sumber_buku" => "Dana Rutin", "rak_id" => "000", "ddc" => "808,51", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Pidato Tiga Bahasa", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Abdul Rohman", "penerbit_id" => "Pustaka Agung Harapan ", "tahun_terbit" => "2009", "tempat_terbit" => "Surabaya", "halaman" => 189, "tinggi" => NULL, "isbn" => "0", "stok" => 2, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "808,51", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Pink Cupcake", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => "Ramya ", "penerbit_id" => "PT. MIZAN PUSTAKA", "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Pola Pengasuh Anak Secara Tradisional Provinsi Daerah Istimewa Aceh", "tanggal" => "2017-12-04", "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => "Departemen Pendidikan & Kebudayaan", "tahun_terbit" => "1990 / 1991", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 2, "sumber_buku" => "Sumbangan Dari Perpustakaan Daerah Lampung", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Pola Pengasuhan Anak Secara Tradisional Provinsi Daerah Istimewa Aceh ", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Departemen Pendidikan Dan Kebudayaan ", "penerbit_id" => "Departemen Pendidikan Dan Kebudayaan ", "tahun_terbit" => "1992", "tempat_terbit" => "Jakarta", "halaman" => 115, "tinggi" => NULL, "isbn" => NULL, "stok" => 2, "sumber_buku" => "Hadiah ", "rak_id" => "000", "ddc" => "649.109.598 11", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Prakarya", "tanggal" => "2017-11-16", "kategori_id" => 3, "penulis" => "Suci Paresti", "penerbit_id" => "Kementerian Pendidikan dan Kebudayaan", "tahun_terbit" => "2014", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 50, "sumber_buku" => NULL, "rak_id" => "187", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Praktik Yang Baik Pembelajaran Di Madrasah Tsanawiyah", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => "2017", "tempat_terbit" => NULL, "halaman" => 75, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "369", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Praktis Menguasai Tata Bahasa Jepang Sistem 24 Jam", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Elsamiun", "penerbit_id" => "Pustaka Mahardika", "tahun_terbit" => NULL, "tempat_terbit" => "Yogyakarta", "halaman" => 190, "tinggi" => "11,5x17,5", "isbn" => "978-6029-988-321", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "413", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Presiden Soeharto dan Pembangunan Pertanian", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Departemen Pertanian", "penerbit_id" => "PT. Citra Media Persada", "tahun_terbit" => "1993", "tempat_terbit" => "Jakarta", "halaman" => 255, "tinggi" => NULL, "isbn" => "979-582-000-1", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "920", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "PRIBAHASA DAN PANTUN", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "PRINCES SAYAKA", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "PRINCESS ACADEMY - KEPO", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "PRINCESS HAFIDZA DAN KUE STROBERY", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "PRINCESS HAFIZHA DAN KUE STROBERI", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "LANA SYAHBANI", "penerbit_id" => "PT. MIZAN PUSTAKA", "tahun_terbit" => "2011", "tempat_terbit" => "BANDUNG", "halaman" => 23, "tinggi" => NULL, "isbn" => "978-979-066-150-9", "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Princess Sayaka", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Salma Izatunnuha", "penerbit_id" => "PT. MIZAN PUSTAKA", "tahun_terbit" => "2009", "tempat_terbit" => " Bandung", "halaman" => 116, "tinggi" => "21", "isbn" => "978-979-066-045-8", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Profil Kantor Bahasa Provinsi Lampung", "tanggal" => "2014-01-10", "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => "Kementerian Pendidikan dan Kebudayaan", "tahun_terbit" => "2014", "tempat_terbit" => "Jakarta", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Sumbangan", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Promo Kesehatan Di Sekolah ", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Dapartemen Kesehatan RI ", "penerbit_id" => "Dapartemen Kesehatan RI", "tahun_terbit" => "2008", "tempat_terbit" => "Jakarta", "halaman" => 118, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => "Hadiah ", "rak_id" => "000", "ddc" => "613", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Propil MTsN 2 Bandar Lampung", "tanggal" => "2017-01-12", "kategori_id" => NULL, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => "2017", "tempat_terbit" => "Bandar Lampung", "halaman" => 110, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => NULL, "rak_id" => "150", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Psikologi Perkembangan", "tanggal" => "2013-12-12", "kategori_id" => 5, "penulis" => "Penney Upton", "penerbit_id" => "Erlangga", "tahun_terbit" => "2012", "tempat_terbit" => "Jakarta", "halaman" => 314, "tinggi" => NULL, "isbn" => "978-602-241-163-5", "stok" => 20, "sumber_buku" => "Dana Rutin", "rak_id" => "000", "ddc" => "155,9", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Psikotes Gampang", "tanggal" => "2022-10-25", "kategori_id" => 5, "penulis" => "Nanda Pratama, S.Psi", "penerbit_id" => "Kawah Media", "tahun_terbit" => "2014", "tempat_terbit" => "Jakarta", "halaman" => 134, "tinggi" => "15,5 x 23,5 cm", "isbn" => "602-17658-9-3", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "362", "ddc" => "658,31", "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "PSYCHIS", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "PUISI DAN PANTUN ", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Puisi Islam Perjalanan Menuju MU", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "Isbedy Stiawan ZS", "penerbit_id" => "Bukupop", "tahun_terbit" => "2012", "tempat_terbit" => "Jakarta", "halaman" => 91, "tinggi" => "12,5 x 18,5 Cm", "isbn" => "978-979-1012-50-8", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Pustakan Pintar Sejarah ", "tanggal" => "2007-04-11", "kategori_id" => NULL, "penulis" => "DR. James Mackay", "penerbit_id" => "Intimedia & Ladang Pustaka", "tahun_terbit" => "2001", "tempat_terbit" => "Jakarta", "halaman" => 371, "tinggi" => "15 x 23", "isbn" => "979-3358-36-X", "stok" => 1, "sumber_buku" => "Dana Bos", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "PUTRA MAHKOTA", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Putri Mahkota Amat Mude ", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => "Yudistira Ikranegara", "penerbit_id" => "Dua Media", "tahun_terbit" => NULL, "tempat_terbit" => "Surabaya", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "QUANTUM LEAPS", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Raden Intan II", "tanggal" => "2018-08-20", "kategori_id" => 5, "penulis" => "Meidiana F", "penerbit_id" => "Bee Media Indonesia", "tahun_terbit" => "2010", "tempat_terbit" => "Jakarta", "halaman" => 48, "tinggi" => NULL, "isbn" => "978-979-151-83-7-6", "stok" => 1, "sumber_buku" => "Sumbangan Siswa/I Kls.IX", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Rahasia dan keajaiban Shalawat Nabi SAW", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Labib Mz", "penerbit_id" => "Aksara Pers", "tahun_terbit" => "2014", "tempat_terbit" => "Makasar", "halaman" => 128, "tinggi" => NULL, "isbn" => NULL, "stok" => 3, "sumber_buku" => "Hadiah ", "rak_id" => "000", "ddc" => "291,215", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Rahasia Kesehatan Nabi", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Abdul Basith Muhhamad sayyid", "penerbit_id" => "Tiga serangkai", "tahun_terbit" => "2008", "tempat_terbit" => "Solo", "halaman" => 276, "tinggi" => "21", "isbn" => "979-668-526-4", "stok" => 5, "sumber_buku" => "Hadiah ", "rak_id" => "000", "ddc" => "291,215", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "RAHASIA MASUK SURGA", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Rahasia Masuk Surga dan Kenikmatannya", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Abu Khalid, MA", "penerbit_id" => "Delima", "tahun_terbit" => "2007", "tempat_terbit" => "Bandung", "halaman" => 96, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Rahasia Semesta Air Beri'tikaf", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Manshur Hasbu an-nabi", "penerbit_id" => "Tiga serangkai", "tahun_terbit" => "2004", "tempat_terbit" => "Solo", "halaman" => 38, "tinggi" => "25", "isbn" => "979-668-596-5", "stok" => 10, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "543", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Rahasia Semesta Angin Bermunajat", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Manshur Hasbu an-nabi", "penerbit_id" => "Tiga serangkai", "tahun_terbit" => "2004", "tempat_terbit" => "Solo", "halaman" => 44, "tinggi" => "25", "isbn" => "979-668-595-7", "stok" => 5, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "551,3", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Rahasia semesta Bintang Berzikir", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Manshur Hasbu an-nabi", "penerbit_id" => "Tiga serangkai", "tahun_terbit" => "2005", "tempat_terbit" => "Solo", "halaman" => 30, "tinggi" => "25", "isbn" => "979-668-628-7", "stok" => 5, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "523,8", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Rahasia semesta Bulan Bertawakal", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Manshur Hasbu an-nabi", "penerbit_id" => "Tiga serangkai", "tahun_terbit" => "2004", "tempat_terbit" => "Solo", "halaman" => 38, "tinggi" => "25", "isbn" => "979-668-626-0", "stok" => 7, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "523,3", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "RAHASIA SUKSES", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "RAMADHAN ITU", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "RANGKA Ensiklopedia Tematis Eyewitness", "tanggal" => "2013-12-12", "kategori_id" => 5, "penulis" => "Steve Parker", "penerbit_id" => "Erlangga", "tahun_terbit" => "2010", "tempat_terbit" => "Jakarta", "halaman" => 72, "tinggi" => NULL, "isbn" => "978-979-075-764-6", "stok" => 20, "sumber_buku" => "Dana Rutin", "rak_id" => "000", "ddc" => "561", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "RANGKUMAN INTISARI FISIKA", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "RANTING KAYU", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "PUTRI NALURITA PPSP, DKK", "penerbit_id" => "DIANDRA KREATIF", "tahun_terbit" => "2018", "tempat_terbit" => "JAKARTA PUSAT", "halaman" => 113, "tinggi" => "14 x 20", "isbn" => "978-602-336-648-4", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Rapor Kesehatanku", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Kementrian Kesehatan RI", "penerbit_id" => "Kementrian Kesehatan RI", "tahun_terbit" => "2013", "tempat_terbit" => "Jakarta", "halaman" => 57, "tinggi" => NULL, "isbn" => "978-602-235-341-6", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "613.043.3", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Rapor Kesehatanku ( Buku Informasi Kesehatan )", "tanggal" => "2017-11-02", "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => "Kementerian Pendidikan dan Kebudayaan", "tahun_terbit" => "2015", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Dinas Kesehatan", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Rapunsel", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Helen Perelman", "penerbit_id" => "Gramedia", "tahun_terbit" => "2012", "tempat_terbit" => "Jakarta", "halaman" => 92, "tinggi" => "20 cm", "isbn" => "978-979-22-8654-0", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Rayuan dipagi Hari", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Lisa Kleypas", "penerbit_id" => "Gramedia Pustaka Utama", "tahun_terbit" => "2010", "tempat_terbit" => "Jakarta", "halaman" => 400, "tinggi" => "18", "isbn" => "978-979-22-5644-4", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "808,9", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Reformasi Pelayanan Sektor Publik Merupakan", "tanggal" => "2017-12-04", "kategori_id" => 5, "penulis" => "Dr. Marwan Effendy, SH", "penerbit_id" => NULL, "tahun_terbit" => "2010", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Sumbangan Dari Perpustakaan Daerah Lampung", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Rekonstruksi Pendidikan Islam", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Prof. Dr. Muhaimin, M.A", "penerbit_id" => "Rajawali Pers", "tahun_terbit" => "2009", "tempat_terbit" => "Jakarta", "halaman" => 346, "tinggi" => "21 cm", "isbn" => "978-979-769-260-5", "stok" => 2, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "297,73", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "REPORTER CILIK ", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "WANDA AMYRA MAYSHARA", "penerbit_id" => "PT. MIZAN PUSTAKA", "tahun_terbit" => "2010", "tempat_terbit" => "BANDUNG", "halaman" => 154, "tinggi" => NULL, "isbn" => "978-979-066-152-3", "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Retak", "tanggal" => "2023-05-29", "kategori_id" => 5, "penulis" => "Azhara Natasya", "penerbit_id" => "Dream Catcher", "tahun_terbit" => "2021", "tempat_terbit" => "Jakarta", "halaman" => 400, "tinggi" => "13 x 18,5 cm", "isbn" => "978-623-94886-7-3", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Revitalisasi insan ikhlas", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Aso Sentana", "penerbit_id" => "Esesnsi", "tahun_terbit" => NULL, "tempat_terbit" => "Jakarta", "halaman" => 140, "tinggi" => NULL, "isbn" => "978-979-099-102-6", "stok" => 2, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "297,5", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Revitalisasi Pendidikan Islam", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Jazuli Juwaini", "penerbit_id" => "Bening Citrakreasi Indonesia", "tahun_terbit" => "2011", "tempat_terbit" => "Jakarta", "halaman" => 169, "tinggi" => NULL, "isbn" => "978-979-15196-2-5", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "297,64", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Rindu Purnama", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Yunda Nisa Chaira", "penerbit_id" => "PT. MIZAN PUSTAKA", "tahun_terbit" => "2011", "tempat_terbit" => "Bandung", "halaman" => 140, "tinggi" => "21", "isbn" => "978-979-066-564-4", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "RISALAH DOA SEHARI-HARI", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "AHMAD MAULANA F", "penerbit_id" => "Aksara Press", "tahun_terbit" => "2013", "tempat_terbit" => NULL, "halaman" => 128, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Risalah Fiqih Wanita", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Ust.Labib Mz", "penerbit_id" => "Bintang Usaha Jaya", "tahun_terbit" => "2005", "tempat_terbit" => "Surabaya", "halaman" => 383, "tinggi" => "0", "isbn" => "0", "stok" => 1, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "297,4", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Risalah Tuntunan Shalat Lengkap", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Drs. Moh Rifa'i", "penerbit_id" => "PT Karya Toha Putra", "tahun_terbit" => "1976", "tempat_terbit" => "Semarang", "halaman" => 128, "tinggi" => "22 cm", "isbn" => NULL, "stok" => 3, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Risalah Tuntunan Sholat Lengkap", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Drs. Moh Rifa'i", "penerbit_id" => "Karya Toha Putra", "tahun_terbit" => "1976", "tempat_terbit" => "Semarang", "halaman" => 128, "tinggi" => NULL, "isbn" => NULL, "stok" => 2, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "297,3", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Riwayat Nabi Zakaria dan Nabi Yahya", "tanggal" => "2003-01-04", "kategori_id" => 5, "penulis" => "Ismail Pamungkas", "penerbit_id" => "PT. Remaja Rosdakarya", "tahun_terbit" => "1985", "tempat_terbit" => "Yogyakarta", "halaman" => 44, "tinggi" => NULL, "isbn" => "979-514-377-8", "stok" => 5, "sumber_buku" => "Dinas Pendidikan", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "RPAL ( Rangkuman Pengetahuann Alam Lengkap )", "tanggal" => "2022-02-08", "kategori_id" => 5, "penulis" => "Tim Redaksi Pustaka Baru Press", "penerbit_id" => "Pustaka baru press", "tahun_terbit" => "2015", "tempat_terbit" => "Yogyakarta", "halaman" => 233, "tinggi" => "15.5 x 23.5 cm", "isbn" => "978-602-376-000-8", "stok" => 1, "sumber_buku" => "Sumbangan Buku dari Guru", "rak_id" => "350", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "RPUL ", "tanggal" => "2018-08-20", "kategori_id" => 5, "penulis" => "Zulfikar Aris", "penerbit_id" => "Karina", "tahun_terbit" => NULL, "tempat_terbit" => "Surabaya", "halaman" => 240, "tinggi" => NULL, "isbn" => "978-979-3964-20-1", "stok" => 1, "sumber_buku" => "Sumbangan Siswa/I Kls.IX", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "RPUL (RANGKUMAN PENGETAHUAN UMUM LENGKAP)", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "DRS. SATYO ADI", "penerbit_id" => "CV. BRINGIN 55", "tahun_terbit" => NULL, "tempat_terbit" => "SOLO", "halaman" => 240, "tinggi" => NULL, "isbn" => "602-864-411-2", "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "RPUL (RANGKUMAN PENGETAHUAN UMUM LENGKAP)", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "MOH. SYAMSUL HIDAYAT, S.PD", "penerbit_id" => "APOLLO", "tahun_terbit" => "2007", "tempat_terbit" => "SURABAYA", "halaman" => 298, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "RPUL (RANGKUMAN PENGETAHUAN UMUM LENGKAP)", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "SRI HARTATIK, S.PD", "penerbit_id" => "LINTAS MEDIA", "tahun_terbit" => "2012", "tempat_terbit" => "JOMBANG", "halaman" => 128, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "RPUL SD", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "TIM Editor ", "penerbit_id" => "Erlangga", "tahun_terbit" => "2013", "tempat_terbit" => "Jakarta", "halaman" => 523, "tinggi" => NULL, "isbn" => "978-602-241-635-7", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "RUBIAH", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "TERE LIYE", "penerbit_id" => "REPUB LIKA PENERBIT", "tahun_terbit" => "2014", "tempat_terbit" => "JAKARTA", "halaman" => 214, "tinggi" => "13,5 X 20,5 CM", "isbn" => "978-602-8997-93-5", "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Rumah Henry", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Philip Ardagh", "penerbit_id" => "Gramedia Pustaka Utama", "tahun_terbit" => "2013", "tempat_terbit" => "Jakarta", "halaman" => 255, "tinggi" => NULL, "isbn" => "978-602-03-0060-3", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Rumah Rindu", "tanggal" => "2017-05-05", "kategori_id" => 5, "penulis" => "K. Usman", "penerbit_id" => "Buku Republika", "tahun_terbit" => "2013", "tempat_terbit" => "Jakarta", "halaman" => 324, "tinggi" => "20,5", "isbn" => "978-602-7595-33-0", "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => "813", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Rumahku adalah Surgaku", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Achmad Sunarto", "penerbit_id" => "Ampel Mulia", "tahun_terbit" => "2014", "tempat_terbit" => "Surabaya", "halaman" => 255, "tinggi" => "0", "isbn" => "0", "stok" => 3, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "0", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "RUMUS KUMPULAN", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "RUMUS SMP", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "SABTU BERSAMA BAPAK", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "SAHABAT CILIK", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Sahabat Pengingat Shalat", "tanggal" => "2018-08-20", "kategori_id" => 5, "penulis" => "Khanza Khairiyah Azahra", "penerbit_id" => "PT. MIZAN PUSTAKA", "tahun_terbit" => "2022", "tempat_terbit" => "Bandung", "halaman" => 88, "tinggi" => "21 Cm", "isbn" => "978-623-254-258-7", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "SAHABAT PENGINGAT SHOLAT", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Sahabat Sejati Menjadi Juara Kelas", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => "Arina Manistaufia", "penerbit_id" => "PT. MIZAN PUSTAKA", "tahun_terbit" => "2011", "tempat_terbit" => "Bandung", "halaman" => NULL, "tinggi" => NULL, "isbn" => "978-602-242-962-3", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "SAINS TENTANG EVOLUSI", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Sakit 1/2 Jiwa", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Endang Rukmana", "penerbit_id" => "Gagas Media", "tahun_terbit" => "2006", "tempat_terbit" => "Jakarta", "halaman" => 254, "tinggi" => "19 Cm", "isbn" => "979-780-031-8", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Salah Pilih", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Nur St.Iskandar", "penerbit_id" => "Balai Pustaka Persero", "tahun_terbit" => "2006", "tempat_terbit" => "Jakarta", "halaman" => 262, "tinggi" => "20,5", "isbn" => "979-407-178-1", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "808,9", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Salah Pilih ", "tanggal" => "2023-04-20", "kategori_id" => 5, "penulis" => "Nur ST. Iskandar", "penerbit_id" => "Balai Pustaka", "tahun_terbit" => "2006", "tempat_terbit" => "Jakarta", "halaman" => 262, "tinggi" => "20,5", "isbn" => "979-407-178-1", "stok" => 1, "sumber_buku" => "Hadiah  ", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "SAMUDRA PILIHAN HADIST SHAHIH BUKHORI", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "PROF. DR.KH.SAFUAN ALFANDI", "penerbit_id" => "SENDANG ILMU", "tahun_terbit" => "-", "tempat_terbit" => "SOLO", "halaman" => 256, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "SUMBANGAN BUKU ALUMNI TP. 2021/2022", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "SANG NABI", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "KAHLIL GIBRAN", "penerbit_id" => "NARASI", "tahun_terbit" => "2017", "tempat_terbit" => "Yogyakarta", "halaman" => 142, "tinggi" => "13 x 19", "isbn" => "978-7586-63-0", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Santiaji Pancasila", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Prof. Darji Darmodiharjo, S. H, dkk.", "penerbit_id" => "Usaha Nasional", "tahun_terbit" => "1970", "tempat_terbit" => "Surabaya", "halaman" => 320, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "320.5 p", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Seabrek Game Perangsang Minat Baca Anak", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Rofi'Ie Ariniro", "penerbit_id" => "Buku Biru", "tahun_terbit" => "2012", "tempat_terbit" => "Yogyakarta", "halaman" => 183, "tinggi" => NULL, "isbn" => "978-602-978-930-0", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "808,9", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Secerah Pelangi Senja", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Laili Maulina", "penerbit_id" => "Brata Sejati Mandiri", "tahun_terbit" => "1995", "tempat_terbit" => "Jakarta", "halaman" => 71, "tinggi" => "21 cm", "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Sejarah 25 Nabi dan Rasul ", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => "Drs. Muhajir", "penerbit_id" => "S. A Alaydrus", "tahun_terbit" => "1988", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "SEJARAH 25 NABI DAN ROSUL", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Sejarah Kebudayaan Islam Kelas 7 ( SKI ) Pegangan Guru", "tanggal" => "2015-08-20", "kategori_id" => 1, "penulis" => "Moh. Amin Thohari", "penerbit_id" => "Direktorat Pendidikan Madrasah", "tahun_terbit" => "2014", "tempat_terbit" => "Jakarta", "halaman" => 138, "tinggi" => NULL, "isbn" => "978-979-8446-78-8", "stok" => 2, "sumber_buku" => "Bantuan kanwil", "rak_id" => "141", "ddc" => "2 x 9 . 1", "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Sejarah Nasional Indonesia IV", "tanggal" => "2022-10-25", "kategori_id" => 5, "penulis" => "Marwati Djoened Poesponegoro", "penerbit_id" => "Balai Pustaka", "tahun_terbit" => "1993", "tempat_terbit" => "Jakarta", "halaman" => 389, "tinggi" => "23 cm", "isbn" => "979-407-410-1", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "364", "ddc" => "909", "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "SEJARAH PAHLAWAN INDONESIA", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Sejarah Peradaban Islam", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Dedi Supriyadi,M.Ag", "penerbit_id" => "Pustaka Setia", "tahun_terbit" => "2008", "tempat_terbit" => "Bandung", "halaman" => 336, "tinggi" => "16 x 23,5 cm", "isbn" => "979-730-928-2", "stok" => 2, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "200,9", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Sejarah Peradaban Islam", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Dr. Badri Yatim, M.A", "penerbit_id" => "Rajawali Pers", "tahun_terbit" => "2013", "tempat_terbit" => "Jakarta", "halaman" => 338, "tinggi" => "21 cm", "isbn" => "979-421-337-3", "stok" => 1, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "200,9", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Sejarah Peradaban Islam Indonesia", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Prof. Dr. Musyrifah Sunanto", "penerbit_id" => "Rajawali Pers", "tahun_terbit" => "2012", "tempat_terbit" => "Jakarta", "halaman" => 338, "tinggi" => "21 cm", "isbn" => "979-421-337-3", "stok" => 2, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "200,9", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Sekolah Pocong", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => "Arbiesheena dkk", "penerbit_id" => "PING !!!", "tahun_terbit" => "2013", "tempat_terbit" => "Yogyakarta", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Seks, Sastra, Kita", "tanggal" => "2017-12-04", "kategori_id" => 5, "penulis" => "Goenawan Mohanae", "penerbit_id" => "Sinar Harapan", "tahun_terbit" => "1980", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Sumbangan Dari Perpustakaan Daerah Lampung", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "SELAMA NYA CINTA", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "KIREINA ENNO", "penerbit_id" => "BUKUNE", "tahun_terbit" => "2012", "tempat_terbit" => "BANDUNG", "halaman" => 306, "tinggi" => "13 x 19", "isbn" => "602-220-033-4", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Selamat Datang Di MTs Negeri 2 Bandar Lampung", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => 40, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "378", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Seluk Beluk Al-Qur'an", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Drs. Zainal Abidin. S", "penerbit_id" => "Rineka Cipta", "tahun_terbit" => "1992", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 3, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "SENGSARA MEMBAWA NIKMAT", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "TULIS ST. SATI", "penerbit_id" => "PT. BALAI PUSTAKA (PERSERO)", "tahun_terbit" => "1929/2010", "tempat_terbit" => "JAKARTA", "halaman" => 206, "tinggi" => NULL, "isbn" => "9,78979E+11", "stok" => 1, "sumber_buku" => "SUMBANGAN BUKU ALUMNI TP. 2021/2022", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "SENI MENDIDIK ANAK", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Sepatu Batik Cantik", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => "Nadia Shafiana Rahma", "penerbit_id" => "PT. MIZAN PUSTAKA", "tahun_terbit" => "2018", "tempat_terbit" => "Bandung", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "SERANGGA DAN LABA-LABA BERBAHAYA", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Serba Serbi Kesehatan Gigi dan Mulut ", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Ardyan Gilang Rahmadhan", "penerbit_id" => "Bukune", "tahun_terbit" => "2010", "tempat_terbit" => "Jakarta", "halaman" => 190, "tinggi" => "23", "isbn" => "602-8066-77-X", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "617,601", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Seri Pengetahuan BANTUAN & FOSIL", "tanggal" => "2013-12-12", "kategori_id" => 5, "penulis" => "Margaret Hynes", "penerbit_id" => "Erlangga", "tahun_terbit" => "2007", "tempat_terbit" => "Jakarta", "halaman" => 63, "tinggi" => NULL, "isbn" => "978-979-015-394-3", "stok" => 20, "sumber_buku" => "Dana Rutin", "rak_id" => "000", "ddc" => "561", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Serigala dan Kambing", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Puput Mugiati", "penerbit_id" => "Aulia ", "tahun_terbit" => NULL, "tempat_terbit" => "Jakarta", "halaman" => 32, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Setiap Tetes Air Membentuk Samudera", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Tim", "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Shalahuddin Al Ayyubi", "tanggal" => "2022-08-20", "kategori_id" => 5, "penulis" => "Dewi Cendika", "penerbit_id" => "PT. MIZAN PUSTAKA", "tahun_terbit" => "2009", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Shalawat Nabi SAW", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Ust. Labib Mz", "penerbit_id" => "Aksara Press", "tahun_terbit" => "2014", "tempat_terbit" => "0", "halaman" => 127, "tinggi" => NULL, "isbn" => "0", "stok" => 2, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "0", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "SHIDDIQ JUJUR", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "AMALIA HUSNA", "penerbit_id" => "INTI MEDINA", "tahun_terbit" => "2009", "tempat_terbit" => "SOLO", "halaman" => 180, "tinggi" => "21 CM", "isbn" => "978-979-072-011-4", "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "SHOLAT DAN BERDOA", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Shopaholic Abriid", "tanggal" => "2017-12-04", "kategori_id" => 5, "penulis" => "Sophie Kinsella", "penerbit_id" => "Gramedia Pustaka Utama", "tahun_terbit" => "2004", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Sumbangan Dari Perpustakaan Daerah Lampung", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Shopaholic Abroad", "tanggal" => "2017-12-04", "kategori_id" => 5, "penulis" => "Sophie Kinsella", "penerbit_id" => "Gramedia Pustaka Utama", "tahun_terbit" => "2004", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Sumbangan Dari Perpustakaan Daerah Lampung", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "SHUT UP AND LET'S GO", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "SI ANAK BADAL", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Si Bintang Emas dan Negeri Orang Malas", "tanggal" => "2022-03-23", "kategori_id" => NULL, "penulis" => "Marulina Pane DH", "penerbit_id" => "PT. Grafika Multi Warna", "tahun_terbit" => "2004", "tempat_terbit" => "Jakarta", "halaman" => NULL, "tinggi" => NULL, "isbn" => "979-515-340-4", "stok" => 1, "sumber_buku" => NULL, "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Si Gila Belanja Merambah Manhattan", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Sophie Kinsella", "penerbit_id" => "PT. Gramedia Pustaka Utama", "tahun_terbit" => "2004", "tempat_terbit" => "Jakarta", "halaman" => 490, "tinggi" => "18", "isbn" => "979-22-0322-2", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "823", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Si Kancil", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "MB. Rahimsyah. Ar", "penerbit_id" => "Dua Media", "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => 128, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Si Kancil", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Calista Hadya", "penerbit_id" => "Berlian Media Wacana", "tahun_terbit" => NULL, "tempat_terbit" => "Bandung", "halaman" => 112, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "SI PAI BENGAL", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "NASJAH", "penerbit_id" => "BALAI PUSTAKA", "tahun_terbit" => "1952", "tempat_terbit" => "JAKARTA TIMUR", "halaman" => 100, "tinggi" => "14,8 X 21 CM", "isbn" => "979-690-796-8", "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Si Pai Bengal ", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Nasjah", "penerbit_id" => "Balai Pustaka", "tahun_terbit" => "1952", "tempat_terbit" => "Jakarta", "halaman" => 100, "tinggi" => "21 cm", "isbn" => "979-690-796-8", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Sifat Shalat Nabi", "tanggal" => "2023-05-25", "kategori_id" => 5, "penulis" => "Syaikh Muhammad Nashiruddin Al-Albani", "penerbit_id" => "Darul Haq", "tahun_terbit" => "2004", "tempat_terbit" => "Jakarta", "halaman" => 404, "tinggi" => "25 cm", "isbn" => "978-979-1254-75-5", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Siksa Kubur", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Labib MZ", "penerbit_id" => "Pustaka Agung Harapan", "tahun_terbit" => "2003", "tempat_terbit" => "Surabaya", "halaman" => 128, "tinggi" => "0", "isbn" => "0", "stok" => 1, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "0", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "SILAT GIRLS", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "BALKIS SHAFIRA", "penerbit_id" => "PT. MIZAN PUSTAKA", "tahun_terbit" => "2012", "tempat_terbit" => "BANDUNG", "halaman" => 120, "tinggi" => "21 CM", "isbn" => "978-979-066-989-5", "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Sistem Organ ( Sistem Gerak, Sistem Pencernaan dan Sistem Sirkulasi )", "tanggal" => "2017-11-16", "kategori_id" => 5, "penulis" => "Prof. Yohanes Surya, Ph. D", "penerbit_id" => "PT. Kandel", "tahun_terbit" => "2017", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Siti Nurbaya", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => "Marah Rusli", "penerbit_id" => "Balai Pustaka", "tahun_terbit" => "1923", "tempat_terbit" => "Jakarta Selatan", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Smarapura The Birthplace Of Balinese Culture ", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Richard Mann -Nyoman Gunarsa ", "penerbit_id" => "Nyoman Gunarsa Museum Of Balinese Classical Painting", "tahun_terbit" => "2008", "tempat_terbit" => "Bali", "halaman" => 146, "tinggi" => NULL, "isbn" => "978-979-15288-3-2", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "930,999", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Soal dan Pembahasan Olimpiade IPA", "tanggal" => "2017-11-16", "kategori_id" => 5, "penulis" => "Prof. Yohanes Surya, Ph. D", "penerbit_id" => "PT. Kandel", "tahun_terbit" => "2017", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Solusi Galau", "tanggal" => "2023-05-29", "kategori_id" => 5, "penulis" => "Nie Apriani", "penerbit_id" => "Zikrul", "tahun_terbit" => "2013", "tempat_terbit" => "Jakarta", "halaman" => 64, "tinggi" => "14 x 20,5 cm", "isbn" => "978-979-063-929-4", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "SRIGALA DAN KAMBING", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "PUPUT MUGIATI", "penerbit_id" => "AULIA", "tahun_terbit" => NULL, "tempat_terbit" => "SURABAYA", "halaman" => 32, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Standar Akuntansi Pemerintah", "tanggal" => "2023-08-02", "kategori_id" => NULL, "penulis" => "TIM Kementerian Keuangan RI", "penerbit_id" => NULL, "tahun_terbit" => "2013", "tempat_terbit" => "Jakarta", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Standar Nasional Perpistakaan ( SNP )", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => "2011", "tempat_terbit" => NULL, "halaman" => 11, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "375", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Standing On His Shoes", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Arisatya Yogasuara", "penerbit_id" => "Cakrawala", "tahun_terbit" => "2006", "tempat_terbit" => "Yogyakarta", "halaman" => 128, "tinggi" => "11x18", "isbn" => "979-3383-24-0", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "808,9", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "STAR KIDS", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "AURADA TSAQOFA HIDAYAT", "penerbit_id" => "PT. MIZAN PUSTAKA", "tahun_terbit" => "2013", "tempat_terbit" => "BANDUNG", "halaman" => 112, "tinggi" => "21", "isbn" => "978-602-242-125-2", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Strategi Pengembangan Ilmu Pengetahuan dan Tenologi Di Madrasah", "tanggal" => "2005-01-26", "kategori_id" => 5, "penulis" => "Drs. Agus Sholeh", "penerbit_id" => "Depaertemen Agama Islam RI", "tahun_terbit" => "2004", "tempat_terbit" => "Jakarta", "halaman" => 99, "tinggi" => NULL, "isbn" => NULL, "stok" => 5, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Strategi Penyelesaian Masalah", "tanggal" => "2017-11-16", "kategori_id" => 5, "penulis" => "Prof. Yohanes Surya, Ph. D", "penerbit_id" => "PT. Kandel", "tahun_terbit" => "2017", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Study Ulumul Qur'an ", "tanggal" => "2007-04-11", "kategori_id" => 5, "penulis" => "Drs. Shalahuddin Hamid, MA", "penerbit_id" => "PT. Intimedia Cipta Nusantara", "tahun_terbit" => "2002", "tempat_terbit" => "Jakarta Timur", "halaman" => 370, "tinggi" => "15,5 x 23,5 ", "isbn" => NULL, "stok" => 1, "sumber_buku" => NULL, "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Suhu dan Kalor", "tanggal" => "2017-11-16", "kategori_id" => 5, "penulis" => "Prof. Yohanes Surya, Ph. D", "penerbit_id" => "PT. Kandel", "tahun_terbit" => "2017", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Sukses dan Kaya", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Abu Fajar Al - Qalami", "penerbit_id" => "Mitra Press", "tahun_terbit" => "2009", "tempat_terbit" => "0", "halaman" => 283, "tinggi" => "14 x 21 cm", "isbn" => "978-602-8446-01-3", "stok" => 1, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "131,3", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Sukses dan Kaya dengan mengamalkan Asmaul Husna", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Abu Fajar Al-qalami", "penerbit_id" => "Mitra Pers", "tahun_terbit" => "2009", "tempat_terbit" => "Jakarta", "halaman" => 283, "tinggi" => "21", "isbn" => "978-602-8446-01-3", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "131,3", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Super Fighter", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Setiadi Hadinoto", "penerbit_id" => "Gramedia ", "tahun_terbit" => "1997", "tempat_terbit" => "Jakarta", "halaman" => 202, "tinggi" => "20 cm", "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Super Karier", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Kristian Hardianto", "penerbit_id" => "Transmedia", "tahun_terbit" => "2008", "tempat_terbit" => "Jakarta", "halaman" => 156, "tinggi" => "23", "isbn" => "979-799-063-X", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "331,7", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Surau", "tanggal" => "2018-08-20", "kategori_id" => 5, "penulis" => "Waitlem, S.Pd", "penerbit_id" => "Media Pustaka", "tahun_terbit" => "2006", "tempat_terbit" => "Jakarta", "halaman" => 110, "tinggi" => "20,5 cm", "isbn" => "979-998-22-4-3", "stok" => 1, "sumber_buku" => "Sumbangan Siswa/I Kls.IX", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "SURGA DI TELAPAK KAKI IBU", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "ALIYA NUR HIDAYATURROHMAN, DKK", "penerbit_id" => "PT. MIZAN PUSTAKA", "tahun_terbit" => "2017", "tempat_terbit" => "BANDUNG", "halaman" => 104, "tinggi" => "21 CM", "isbn" => "978-602-367-334-6", "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "SYALAHUDDIN AL AYYUBI", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Syari'at", "tanggal" => "2022-02-08", "kategori_id" => 5, "penulis" => "Drs. H. Muhammad Rusfi, M.Ag", "penerbit_id" => NULL, "tahun_terbit" => "2006", "tempat_terbit" => "Bandar Lampung", "halaman" => 124, "tinggi" => "13 X 19.5", "isbn" => "-", "stok" => 1, "sumber_buku" => "Sumbangan Buku dari Guru", "rak_id" => "345", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Tata Ruang", "tanggal" => "2017-12-04", "kategori_id" => 5, "penulis" => "Fritz Wilkening", "penerbit_id" => "Kanisius", "tahun_terbit" => "1987", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Sumbangan Dari Perpustakaan Daerah Lampung", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "TEKATEKI TERAKHIR", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Teknik Berhitung Pintar", "tanggal" => "2022-09-15", "kategori_id" => 5, "penulis" => "Misni, S.Pd", "penerbit_id" => "MCH Kreatif", "tahun_terbit" => "2011", "tempat_terbit" => "Jakarta", "halaman" => 141, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "352", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Teknik Kongseling Kesehatan Remaja Bagi Konselor Sebaya ", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Direktorat Bina Kesehatan Anak", "penerbit_id" => "Kementrian Kesehatan RI", "tahun_terbit" => "2010", "tempat_terbit" => "Jakarta", "halaman" => 58, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => "Hadiah ", "rak_id" => "000", "ddc" => "613.043 3", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Tempurung Pelindung Kuki", "tanggal" => "2022-03-23", "kategori_id" => NULL, "penulis" => "Yazida Ziya", "penerbit_id" => "Tiga Ananda", "tahun_terbit" => "2018", "tempat_terbit" => "Jakarta", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => NULL, "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "TEMUKAN DIRIMU, NIKMATI HIDUPMU", "tanggal" => "2022-06-14", "kategori_id" => 4, "penulis" => "Dr. Maha Arab", "penerbit_id" => "Pustaka Alvabet", "tahun_terbit" => "2022", "tempat_terbit" => "Jakarta", "halaman" => 256, "tinggi" => "13 x 20", "isbn" => "978-623-7162-83-4", "stok" => 1, "sumber_buku" => "Sumbang buku kls 9 Tp 2021/2022", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "TENDANGAN SI MADUN", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "KAY ARIKUNTO", "penerbit_id" => "PT. MIZAN PUSTAKA", "tahun_terbit" => "2012", "tempat_terbit" => "BANDUNG", "halaman" => 104, "tinggi" => "19,5 CM", "isbn" => "978-602-242-029-3", "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Tenggelamnya Kapal Venderwijck", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Hamka", "penerbit_id" => "Bulan Bintang", "tahun_terbit" => "2008", "tempat_terbit" => "Jakarta", "halaman" => 236, "tinggi" => "21", "isbn" => "979-418-055-6", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "900", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Tentang Kamu ", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Tere Liye", "penerbit_id" => "Republika Penerbit ", "tahun_terbit" => "2016", "tempat_terbit" => "Jakarta", "halaman" => 524, "tinggi" => "13,5x20,5", "isbn" => "978-6020-8223-4-1", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "808,9", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "TENTANG NERAKA JAHANNAM", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Teori Bilangan", "tanggal" => "2017-11-16", "kategori_id" => 5, "penulis" => "Prof. Yohanes Surya, Ph. D", "penerbit_id" => "PT. Kandel", "tahun_terbit" => "2017", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Teori Politik Islam", "tanggal" => "2017-12-04", "kategori_id" => 5, "penulis" => "Dr. M. Dhlauddin Rais", "penerbit_id" => "Gema Insani Press", "tahun_terbit" => "2001", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Sumbangan Dari Perpustakaan Daerah Lampung", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "TERJEMAH JUS 'AMMA", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "IMRON S. AL HAFIDZ", "penerbit_id" => "AKSA PUTRA", "tahun_terbit" => NULL, "tempat_terbit" => "INDONESIA", "halaman" => 96, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "SUMBANGAN BUKU ALUMNI TP. 2021/2022", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Terjemah Juz 'Amma", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Imron S. Al-Hafidz", "penerbit_id" => "Aksa Putra", "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Terjemahan Ringkasan Klasifikasi Desimal Dewey dan Indeks Relatif", "tanggal" => "1995-08-08", "kategori_id" => 5, "penulis" => "Mastini Hardjoprakoso", "penerbit_id" => "Perpustakaan Nasional", "tahun_terbit" => "1993", "tempat_terbit" => "Jakarta", "halaman" => 332, "tinggi" => "28 cm", "isbn" => "979-8006-33-x", "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => "25,431", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "The Adventus Of Tom Sawyes", "tanggal" => "2017-05-05", "kategori_id" => 5, "penulis" => "Mark Twain", "penerbit_id" => "Shira Media", "tahun_terbit" => "2015", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah Lomba Perpustakaan Sekota Bandar Lampung", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "The Author's Terror", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Isnaini Meiriska", "penerbit_id" => "Naura Books", "tahun_terbit" => "2013", "tempat_terbit" => "Jakarta", "halaman" => 148, "tinggi" => "14,5x21", "isbn" => "978-602-1306-36-9", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "808,9", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "The Best School", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Syifa Afida", "penerbit_id" => "Dar! Mizan", "tahun_terbit" => "2011", "tempat_terbit" => "Bandung", "halaman" => 128, "tinggi" => "21", "isbn" => "978-979-066-790-7", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "808,9", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "The Book Of Destiny ", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Fauzy Maulana Hakim", "penerbit_id" => "Dar! Mizan", "tahun_terbit" => "2010", "tempat_terbit" => "Bandung", "halaman" => 108, "tinggi" => "19,5", "isbn" => "978-979-066-310-7", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "808,9", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "The Child", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Brian Garfield", "penerbit_id" => "Matahari", "tahun_terbit" => "2014", "tempat_terbit" => "Jakarta Selatan", "halaman" => 566, "tinggi" => NULL, "isbn" => "978-602-1258-71-2", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "The Chronicles Of Audy", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => "Orizuka", "penerbit_id" => "Haru", "tahun_terbit" => "2013", "tempat_terbit" => "Bandung", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "THE DA VINCI FILES", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "ALFRED  BEKKER", "penerbit_id" => "PT. ELEX MEDIA KOMPUTINDO", "tahun_terbit" => "2010", "tempat_terbit" => "JAKARTA", "halaman" => 122, "tinggi" => NULL, "isbn" => "978-979-27-7559-4", "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "The End Of Magic", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Marie Koizumi", "penerbit_id" => "Pt. Elex Media Komputindo", "tahun_terbit" => "2003", "tempat_terbit" => "Jakarta", "halaman" => 188, "tinggi" => NULL, "isbn" => "979-20-4173-7", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "808,9", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "The Essentials Of Mathematics", "tanggal" => "2023-05-20", "kategori_id" => 5, "penulis" => "Ponco Sujatmiko", "penerbit_id" => "PT. Tiga Serangkai Pustaka Mandiri", "tahun_terbit" => "2010", "tempat_terbit" => "Solo", "halaman" => 308, "tinggi" => "17,6 x 25", "isbn" => "978-979-045-544-3", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "The Future World", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Asma Wafa Syahidah", "penerbit_id" => "PT. MIZAN PUSTAKA", "tahun_terbit" => "2019", "tempat_terbit" => "Bandung", "halaman" => 96, "tinggi" => "21", "isbn" => "978-602-420-788-5", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "THE FUTURE WORLD ", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "ASMA WAFA SYAHIDAH", "penerbit_id" => "PT. MIZAN PUSTAKA", "tahun_terbit" => "2019", "tempat_terbit" => "BANDUNG", "halaman" => 96, "tinggi" => "21 CM", "isbn" => "978-602-420-788-5", "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "The Ghost In My School", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => "Berliana Putri Muliatama", "penerbit_id" => "PT. MIZAN PUSTAKA", "tahun_terbit" => "2013", "tempat_terbit" => "Surabaya", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "The Girls In The High Heeled Shoes", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => "Michael Kurland", "penerbit_id" => "Titan Books", "tahun_terbit" => "1998/2016", "tempat_terbit" => "Solo", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "THE GREAT OF ABU BAKAR ASH- SHIDDIQ", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "FUAD ABDURAHMAN  DAN ALI  SUDANSAH", "penerbit_id" => "TINTA MEDINA", "tahun_terbit" => "2018", "tempat_terbit" => "SOLO", "halaman" => 238, "tinggi" => "21  CM", "isbn" => "978-602-5731-21-1", "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "The Great Prophet Muhammad Meneladani Manusia Pilihan Allah", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Bayu Indie", "penerbit_id" => "Pustaka Lebah", "tahun_terbit" => "2019", "tempat_terbit" => "Jakarta Selatan", "halaman" => 40, "tinggi" => NULL, "isbn" => "978-602-8798-55-6", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "THE HANDY BOYS", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "THE HARDY BOYS", "tanggal" => "2022-06-14", "kategori_id" => 4, "penulis" => "Franklin W.Dixon", "penerbit_id" => "PT.Elex Media Komputindo", "tahun_terbit" => "2010", "tempat_terbit" => "Jakarta", "halaman" => 178, "tinggi" => NULL, "isbn" => "978-979-27-8001-7", "stok" => 1, "sumber_buku" => "Sumbang buku kls 9 Tp 2021/2022", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "The Hero 2", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Noh Mi Young", "penerbit_id" => "Central Kumala Sakti", "tahun_terbit" => "2000", "tempat_terbit" => "Jakarta", "halaman" => 164, "tinggi" => "18 cm", "isbn" => "979-3336-74-9", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "THE MAGIC LIBRARY", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "THE MISSION SEMUA BERAWAL DARI MIMPI", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => "LINTANG ASSYIFA ", "penerbit_id" => "PT. MIZAN PUSTAKA", "tahun_terbit" => "2013", "tempat_terbit" => "BANDUNG", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "THE OTHER SIDE", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "The Perfect Muslimah", "tanggal" => "2023-04-20", "kategori_id" => 5, "penulis" => "Ahmad Rifa'I Rif'an", "penerbit_id" => "PT. Gramedia ", "tahun_terbit" => "2012", "tempat_terbit" => "Jakarta", "halaman" => 285, "tinggi" => NULL, "isbn" => "978-602-02-0092-7", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => "808.9", "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "The Pitcher 42", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Kei Sadayasu", "penerbit_id" => "Elex Media Komputindo", "tahun_terbit" => "2006", "tempat_terbit" => "Jakarta", "halaman" => NULL, "tinggi" => NULL, "isbn" => "979-20-3623-7", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "THE PSYCHOLAGY OF MONEY", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "THE SCRET OF PUASA", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "The Secret Island", "tanggal" => "2022-08-20", "kategori_id" => 5, "penulis" => "Enid Blyton", "penerbit_id" => "Award Publications ", "tahun_terbit" => "1992", "tempat_terbit" => "Jakarta Selatan", "halaman" => 190, "tinggi" => NULL, "isbn" => "978-1-84135-673-0", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "THE STRANGE CASE OF DR. JEKYLL AND MR. HYDE", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "ROBERT LOUIS STEVENSON", "penerbit_id" => "PT. GRAMEDIA  PUSTAKA UTAMA ", "tahun_terbit" => "2018", "tempat_terbit" => "JAKARTA", "halaman" => 120, "tinggi" => "18 CM", "isbn" => "9786020379586", "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "The Trouble With Perfect", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Helena Duggan", "penerbit_id" => "Bhuana Sastra", "tahun_terbit" => "2023", "tempat_terbit" => "Jakarta", "halaman" => 330, "tinggi" => "14 x 20 cm", "isbn" => "978-623-04-0679-9", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "TIME MACHINE", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Tokoh & Peristiwa Sepanjang Masa", "tanggal" => "2007-04-11", "kategori_id" => 5, "penulis" => "Robert Tara", "penerbit_id" => "Intimedia & Ladang Pustaka", "tahun_terbit" => "2001", "tempat_terbit" => "Jakarta", "halaman" => 381, "tinggi" => "18,5 x 24", "isbn" => "979-3358-26-2", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => "930", "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Toksikologi", "tanggal" => "2023-04-20", "kategori_id" => 5, "penulis" => "F.H Mayers", "penerbit_id" => "Andes Utama", "tahun_terbit" => "1993", "tempat_terbit" => "Jakarta", "halaman" => 110, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Toksikologi Cara Mengatasi Berbagai Keracunan", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "F.H. Mayers, DKK.", "penerbit_id" => "ANDES UTAMA", "tahun_terbit" => "1993", "tempat_terbit" => "Jakarta", "halaman" => 110, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "615,9", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "TRAVEL LOVE", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Trik Cepat Berhitung Perkalian", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "H. Haryanto Nugroho", "penerbit_id" => "Linguakata", "tahun_terbit" => "2008", "tempat_terbit" => "Surabaya", "halaman" => 166, "tinggi" => "20", "isbn" => "602-8388-00-9", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "510", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Tuberkulosis Paru", "tanggal" => "2017-12-04", "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => "Fakultas Kedokteran Universitas Indonesia", "tahun_terbit" => "1985", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Sumbangan Dari Perpustakaan Daerah Lampung", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Tuberkulosis Paru : Pedoman Penataan Diagnostik dan Terapi", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "dr. Anwar Yusuf, dkk.", "penerbit_id" => "Fakultas Kedokteran Universitas Indonesia", "tahun_terbit" => "1985", "tempat_terbit" => "Jakarta", "halaman" => 113, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "616.995 24", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Tunduk Kepada Allah", "tanggal" => "2023-08-02", "kategori_id" => NULL, "penulis" => "Dr. Aflatun Muchtar", "penerbit_id" => "Khazanah Baru", "tahun_terbit" => "2001", "tempat_terbit" => "Jakarta", "halaman" => 246, "tinggi" => NULL, "isbn" => "979-8321-56-1", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "TUNTUN SHOLAT TENGKAP", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Tuntunan  Shalat Wanita", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Ust.Filyan Ibrahim", "penerbit_id" => "Riza Media", "tahun_terbit" => "0", "tempat_terbit" => "0", "halaman" => 96, "tinggi" => "0", "isbn" => "0", "stok" => 1, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "297,32", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "TUNTUNAN SHALAT WAJIB", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => "SANDRO JAYA", "tahun_terbit" => NULL, "tempat_terbit" => " JAKARTA", "halaman" => 24, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "SUMBANGAN BUKU ALUMNI TP. 2021/2022", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Tuntunan Sholat Lengkap", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "Ust. Imam Turmudzi", "penerbit_id" => "Dunia Media", "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => 128, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Uje Berdakwah Dengan Hati", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Kanka Nadia", "penerbit_id" => "Rexa", "tahun_terbit" => "2013", "tempat_terbit" => "0", "halaman" => 143, "tinggi" => NULL, "isbn" => "978-602-7618-45-9", "stok" => 2, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "297,62", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Ulumul Hadis", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Dr. H. Abdul Majid Khon,M.Ag", "penerbit_id" => "Amzah", "tahun_terbit" => "2012", "tempat_terbit" => "Jakarta", "halaman" => 312, "tinggi" => "23 cm", "isbn" => "978-602-8689-61-8", "stok" => 2, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "297,21", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Ulumul Qur'an", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Dr. H. Anshori, Lal. M.A", "penerbit_id" => "Rajawali Pers", "tahun_terbit" => "2013", "tempat_terbit" => "Jakarta", "halaman" => 258, "tinggi" => "23 cm", "isbn" => "978-979-769--597-2", "stok" => 2, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "297,11", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "UMAR BIN KHATAB", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "UMAR BIN KHATHTHAB", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "NIZAR SAA'D JABAL . LC M.PD", "penerbit_id" => "PRISAI QUR'AN", "tahun_terbit" => "2013", "tempat_terbit" => "JAKARTA", "halaman" => 40, "tinggi" => "24 X 20 CM", "isbn" => "978-602-9475-18-1", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Undang - Undang Republik Indonesia Tentang Bendera Bahasa & Lambang Negara", "tanggal" => "2015-06-04", "kategori_id" => 5, "penulis" => "Kementerian Pendidikan dan Kebudayaan", "penerbit_id" => NULL, "tahun_terbit" => "2011", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => "0", "stok" => 1, "sumber_buku" => "Sumbangan", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Undang Undang Dasar Negara Republik Tahun 1945", "tanggal" => "2022-10-25", "kategori_id" => 5, "penulis" => "Eddie Siregar", "penerbit_id" => "Sekretariat Jenderal MPR ROI", "tahun_terbit" => "2015", "tempat_terbit" => "Jakarta", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Understanding English Texts", "tanggal" => "2022-10-25", "kategori_id" => 5, "penulis" => "Cucu Sutarsyah", "penerbit_id" => "Raja Grafindo Persada", "tahun_terbit" => "2016", "tempat_terbit" => "Jakarta", "halaman" => 148, "tinggi" => "23 cm", "isbn" => "978-979-769-729-7", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "363", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Untaian hikmah untukku", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Jefry Al Buchori", "penerbit_id" => "Kawan Pustaka", "tahun_terbit" => "2013", "tempat_terbit" => "Jakarta", "halaman" => 148, "tinggi" => "19", "isbn" => "978-979-757-543-4", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "801,1", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Untaian Hikmah Untukmu Uje", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Ustadz Jefri Al Buchori", "penerbit_id" => "Pt. Kawan Pustaka", "tahun_terbit" => "2013", "tempat_terbit" => "Jakarta", "halaman" => 148, "tinggi" => "19 cm", "isbn" => "979-757-543-8", "stok" => 2, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "801,1", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Ushul Fiqh", "tanggal" => "2014-09-12", "kategori_id" => 5, "penulis" => "Prof. Dr. H. Satria Effendi, M. Zein, M.A", "penerbit_id" => "Kencana", "tahun_terbit" => "2005", "tempat_terbit" => "Jakarta", "halaman" => 264, "tinggi" => "13.5 x 20.5 cm", "isbn" => "979-3925-20-5", "stok" => 2, "sumber_buku" => "Dana Bos", "rak_id" => "000", "ddc" => "297,4", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Usuluddin (Aqa'id) ", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "KH. Imam Zarka", "penerbit_id" => "Trimurti Press", "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Visipustaka", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => "2015", "tempat_terbit" => NULL, "halaman" => 228, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "379", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Waktu Aku Sama Mika", "tanggal" => "2022-10-19", "kategori_id" => 5, "penulis" => "Indi", "penerbit_id" => "Homerian Pustaka", "tahun_terbit" => "2013", "tempat_terbit" => "Yogyakarta", "halaman" => 145, "tinggi" => "11 cm x 18 cm", "isbn" => "978-979-17454-5-1", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "353", "ddc" => "028", "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Walisongo", "tanggal" => NULL, "kategori_id" => NULL, "penulis" => "MB. Rahimsyah. Ar", "penerbit_id" => "Dua Media", "tahun_terbit" => NULL, "tempat_terbit" => "Surabaya", "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "WANITA BERTANYA ISLAM MENJAWAB ", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "AHMAD MUHAMAD JAMAL", "penerbit_id" => "H.I press", "tahun_terbit" => "0", "tempat_terbit" => NULL, "halaman" => 162, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Wanita Dalam Pergumulan Syariat dan Hukum Konvensional", "tanggal" => "2007-04-11", "kategori_id" => 5, "penulis" => "Dr. Musthafa As Shiba'i", "penerbit_id" => "PT. Intimedia Cipta Nusantara", "tahun_terbit" => NULL, "tempat_terbit" => "Jakarta Timur", "halaman" => 349, "tinggi" => NULL, "isbn" => "979-3374-04-7", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => "2 x 0.002", "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "WASIAT RASUL", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Wasiat Rasul Buat Lelaki", "tanggal" => "2023-04-20", "kategori_id" => 5, "penulis" => "Muhammad Khalil Itani", "penerbit_id" => "Aqwam", "tahun_terbit" => "2007", "tempat_terbit" => "Solo", "halaman" => 328, "tinggi" => "23", "isbn" => "978-979-3653-58-7", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "WAWASAN KEBANGSAAN", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Where Is My Mom ?", "tanggal" => "2022-02-08", "kategori_id" => 5, "penulis" => "Rifla", "penerbit_id" => "PT. MIZAN PUSTAKA", "tahun_terbit" => NULL, "tempat_terbit" => "Bandung", "halaman" => 94, "tinggi" => NULL, "isbn" => "978-602-242-986-9", "stok" => 1, "sumber_buku" => NULL, "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "WHY ? HAPPY MATH", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "WHY ?/ FUTURE SCIENCE", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "WHY FISH", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "WHY LIFE SCIENCE", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Wise Wood", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Ramiza Tambunan", "penerbit_id" => "PT. MIZAN PUSTAKA", "tahun_terbit" => "2014", "tempat_terbit" => "Jakarta", "halaman" => 168, "tinggi" => "19,5", "isbn" => "978-602-242-421-5", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "X-Press US SMP  Pendidikan Agama Islam dan Budi Pekerti", "tanggal" => "2022-01-26", "kategori_id" => NULL, "penulis" => "TIM Progresif", "penerbit_id" => "Erlangga", "tahun_terbit" => "2021", "tempat_terbit" => "Jakarta", "halaman" => 162, "tinggi" => NULL, "isbn" => "978-623-266-358-9", "stok" => 4, "sumber_buku" => "Dana Bos", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "X-Press US SMP/MTs Bahasa Indonesia", "tanggal" => "2022-01-26", "kategori_id" => NULL, "penulis" => "A. Indradi", "penerbit_id" => "Erlangga", "tahun_terbit" => "2020", "tempat_terbit" => "Jakarta", "halaman" => 126, "tinggi" => NULL, "isbn" => "978-623-266-353-4", "stok" => 7, "sumber_buku" => "Dana Bos", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "X-Press US SMP/MTs Bahasa Inggris ", "tanggal" => "2023-01-26", "kategori_id" => NULL, "penulis" => "Nu Zaida", "penerbit_id" => "Erlangga", "tahun_terbit" => "2020", "tempat_terbit" => "Jakarta", "halaman" => 130, "tinggi" => NULL, "isbn" => "978-623-266-350-3", "stok" => 4, "sumber_buku" => "Dana Bos", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "X-Press US SMP/MTs IPA", "tanggal" => "2022-01-26", "kategori_id" => NULL, "penulis" => "Khristiyono", "penerbit_id" => "Erlangga", "tahun_terbit" => "2020", "tempat_terbit" => "Jakarta", "halaman" => 184, "tinggi" => NULL, "isbn" => "978-623-266-334-3", "stok" => 4, "sumber_buku" => "Dana Bos", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "X-Press US SMP/MTs IPS", "tanggal" => "2022-01-26", "kategori_id" => NULL, "penulis" => "TIM Progresif", "penerbit_id" => "Erlangga", "tahun_terbit" => "2020", "tempat_terbit" => "Jakarta", "halaman" => 180, "tinggi" => NULL, "isbn" => "978-623-266-345-9", "stok" => 4, "sumber_buku" => "Dana Bos", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "X-Press US SMP/MTs Matematika", "tanggal" => "2022-01-26", "kategori_id" => NULL, "penulis" => "Sukismo & Wini Kristianti", "penerbit_id" => "Erlangga", "tahun_terbit" => "2020", "tempat_terbit" => "Jakarta", "halaman" => 156, "tinggi" => NULL, "isbn" => "978-623-266-331-2", "stok" => 5, "sumber_buku" => "Dana Bos", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "X-Press US SMP/MTs PPKn", "tanggal" => "2022-01-26", "kategori_id" => NULL, "penulis" => "TIM Progresif", "penerbit_id" => "Erlangga", "tahun_terbit" => "2020", "tempat_terbit" => "Jakarta", "halaman" => 124, "tinggi" => NULL, "isbn" => "978-623-266-339-8", "stok" => 4, "sumber_buku" => "Dana Bos", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Ya Allah Aku Jatuh Cinta", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Qowi Alta Az Zahra", "penerbit_id" => "Pt. Elex Media Komputindo", "tahun_terbit" => "2014", "tempat_terbit" => "Jakarta", "halaman" => 113, "tinggi" => NULL, "isbn" => "978-602-02-4712-0", "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "808,9", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Ya Allah Tolong Aku", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "A.K", "penerbit_id" => "Gramedia Pustaka Utama", "tahun_terbit" => "2010", "tempat_terbit" => "JAKARTA", "halaman" => 308, "tinggi" => NULL, "isbn" => "978-979-27-7093-3", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "YA ALLAH TOLONGLAH AKU", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Yang Pertama dalam Islam", "tanggal" => "2007-04-11", "kategori_id" => NULL, "penulis" => "Romdoni, S.Ag", "penerbit_id" => "PT. Intimedia Cipta Nusantara", "tahun_terbit" => "2003", "tempat_terbit" => "Jakarta Timur", "halaman" => 298, "tinggi" => "14,5 x 21", "isbn" => "979-3432-59-4", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "You And Me Different", "tanggal" => "2018-08-20", "kategori_id" => 5, "penulis" => "Nabibah", "penerbit_id" => "PT. MIZAN PUSTAKA", "tahun_terbit" => "2014", "tempat_terbit" => "Bandung", "halaman" => 116, "tinggi" => "21", "isbn" => "978-602-242-359-1", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "YOUCTH", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "YOUR MAGIC BTS", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "YU GI OH !", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "KAZUKI TAKAHASHI", "penerbit_id" => "Gramedia Pustaka Utama", "tahun_terbit" => "2007", "tempat_terbit" => "JAKARTA TIMUR", "halaman" => 316, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "YUGI OH", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Yuk Berhijab", "tanggal" => "2018-05-18", "kategori_id" => 5, "penulis" => "Felix Y. Siauw", "penerbit_id" => "PT. MIZAN PUSTAKA", "tahun_terbit" => "2013", "tempat_terbit" => "Surabaya", "halaman" => 148, "tinggi" => NULL, "isbn" => "978-602-9255-67-6", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "YUK BERHIJAB ", "tanggal" => NULL, "kategori_id" => 5, "penulis" => "FELIX Y. SIAUW", "penerbit_id" => "PT. MIZAN PUSTAKA", "tahun_terbit" => "2013", "tempat_terbit" => "BANDUNG", "halaman" => 148, "tinggi" => NULL, "isbn" => "978-602-9255-67-6", "stok" => 1, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Zakat Pembersih Harta dan Jiwa ", "tanggal" => "2010-01-18", "kategori_id" => 5, "penulis" => "Dr. Zakiah Daradjat", "penerbit_id" => "YPI Ruhama", "tahun_terbit" => "1992", "tempat_terbit" => "Jakarta", "halaman" => 92, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "297", "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Zero 05", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Rani", "penerbit_id" => "Gramedia", "tahun_terbit" => "2005", "tempat_terbit" => "Jakarta", "halaman" => 200, "tinggi" => "19", "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => NULL, "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "ZONA NYAMAN", "tanggal" => NULL, "kategori_id" => 5, "penulis" => NULL, "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => NULL, "isbn" => NULL, "stok" => NULL, "sumber_buku" => NULL, "rak_id" => "000", "ddc" => NULL, "keterangan" => "Baik"
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Menjadi Kaya dan Tetap Bahagia", "tanggal" => "2007-04-11", "kategori_id" => 5, "penulis" => "Napoleon Hill", "penerbit_id" => "Intimedia & Ladang Pustaka", "tahun_terbit" => "2001", "tempat_terbit" => "Jakarta", "halaman" => 247, "tinggi" => "11 x 19,5", "isbn" => "979-3358-34-3", "stok" => 2, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "002", "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "125 Ilmuwan Muslim Pengukir Sejarah", "tanggal" => "2007-04-11", "kategori_id" => 5, "penulis" => "Saiful Hadi", "penerbit_id" => "PT. Intimedia Cipta Nusantara", "tahun_terbit" => NULL, "tempat_terbit" => "Jakarta Timur", "halaman" => 416, "tinggi" => NULL, "isbn" => "979-3374-07-1", "stok" => 3, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "900", "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Study Ulumul Qur'an", "tanggal" => "2007-04-11", "kategori_id" => 5, "penulis" => "Drs. Shalahuddin Hamid, MA", "penerbit_id" => "PT. Intimedia Cipta Nusantara", "tahun_terbit" => "2002", "tempat_terbit" => "Jakarta Timur", "halaman" => 370, "tinggi" => "15,5 x 23,5 ", "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Undang-Undang RI Nomor 14 Tahun 2008 Tentang", "tanggal" => "2007-04-20", "kategori_id" => 5, "penulis" => "Dinas Komunikasi dan Informatika propinsi Lampung", "penerbit_id" => NULL, "tahun_terbit" => NULL, "tempat_terbit" => "Bandar Lampung", "halaman" => 209, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Tata Bahasa Baku Bahasa Indonesia", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Moeliono, Dkk", "penerbit_id" => "Balai Pustaka", "tahun_terbit" => "1988", "tempat_terbit" => "Jakarta", "halaman" => 475, "tinggi" => "23", "isbn" => "979-407-177-3", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Promosi Kesehatan di Sekolah", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "TIM", "penerbit_id" => "Departemen Kesehatan RI", "tahun_terbit" => "2008", "tempat_terbit" => NULL, "halaman" => NULL, "tinggi" => "118", "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Petunjuk Praktis dalam Berzikir dan Berdoa Kepada Allah SWT", "tanggal" => "2022-06-14", "kategori_id" => 5, "penulis" => "Drs. H. Kholidis, M.Pd.I", "penerbit_id" => NULL, "tahun_terbit" => "2020", "tempat_terbit" => "Bandar Lampung", "halaman" => 88, "tinggi" => NULL, "isbn" => "092020", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Sekolah Kapitalisme yang Licik", "tanggal" => "1999-03-15", "kategori_id" => 5, "penulis" => "M. Escobar, Dkk", "penerbit_id" => "LKiS", "tahun_terbit" => "1998", "tempat_terbit" => "Yogyakarta", "halaman" => 178, "tinggi" => NULL, "isbn" => "979-8966-09-6", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Sistem Tata Surya", "tanggal" => "2023-03-23", "kategori_id" => 5, "penulis" => "A. Mellyora", "penerbit_id" => "PT. Tiga Serangkai", "tahun_terbit" => "2008", "tempat_terbit" => "Solo", "halaman" => 48, "tinggi" => NULL, "isbn" => "978-979-045-081-3", "stok" => 5, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "521", "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Bakteri Patogen Penyebab Keracunan Pangan", "tanggal" => "2023-03-23", "kategori_id" => 5, "penulis" => "Dewi Sartika ", "penerbit_id" => "Graha Ilmu", "tahun_terbit" => "2020", "tempat_terbit" => "Yogyakarta", "halaman" => 98, "tinggi" => "17 x 24", "isbn" => "978-623-228-704-4", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Angin Bermunajat", "tanggal" => "2023-03-23", "kategori_id" => 5, "penulis" => "Manshur Hasbu An-Nabi", "penerbit_id" => "PT. Tiga Serangkai", "tahun_terbit" => "2004", "tempat_terbit" => "Solo", "halaman" => 44, "tinggi" => "25", "isbn" => "979-668-595-7", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "523.12", "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Air Beri'tikaf", "tanggal" => "2023-03-23", "kategori_id" => 5, "penulis" => "Manshur Hasbu An-Nabi", "penerbit_id" => "PT. Tiga Serangkai", "tahun_terbit" => "2004", "tempat_terbit" => "Solo", "halaman" => 38, "tinggi" => "25", "isbn" => "979-668-595-5", "stok" => 9, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "523.12", "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Bulan Bertawakal", "tanggal" => "2023-03-23", "kategori_id" => 5, "penulis" => "Manshur Hasbu An-Nabi", "penerbit_id" => "PT. Tiga Serangkai", "tahun_terbit" => "2004", "tempat_terbit" => "Solo", "halaman" => 38, "tinggi" => "23", "isbn" => "979-668-626-0", "stok" => 7, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "523.12", "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Ciptakan Hubungan Harmonis, Wujudkan Prestasi Kerja", "tanggal" => "2023-03-23", "kategori_id" => 5, "penulis" => "TIM", "penerbit_id" => "Kantor Bahasa Propinsi Lampung", "tahun_terbit" => "2020", "tempat_terbit" => "Bandar Lampung", "halaman" => 77, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "028", "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Badan Bahasa Sebagai Pelopor Layanan Bahasa dan Sastra ", "tanggal" => "2023-03-23", "kategori_id" => 5, "penulis" => "TIM", "penerbit_id" => "Kantor Bahasa Propinsi Lampung", "tahun_terbit" => "2020", "tempat_terbit" => "Bandar Lampung", "halaman" => 78, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "028", "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Perlindungan Bahasa Membutuhkan Peran Bersama", "tanggal" => "2023-03-23", "kategori_id" => 5, "penulis" => "TIM", "penerbit_id" => "Kantor Bahasa Propinsi Lampung", "tahun_terbit" => "2020", "tempat_terbit" => "Bandar Lampung", "halaman" => 78, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "028", "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Ushul Fiqih", "tanggal" => "2007-04-11", "kategori_id" => 5, "penulis" => "Drs. Safiudin Shidik, M. Ag", "penerbit_id" => "Intimedia", "tahun_terbit" => NULL, "tempat_terbit" => NULL, "halaman" => 200, "tinggi" => NULL, "isbn" => "979-3372-92-3", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "2x4.02", "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Himpunan Hadist Qudsi", "tanggal" => "2023-03-23", "kategori_id" => 5, "penulis" => "Achmad Sunarto", "penerbit_id" => "An Nur", "tahun_terbit" => "2011", "tempat_terbit" => "Jakarta", "halaman" => 269, "tinggi" => NULL, "isbn" => "979-99947-4-8", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "297.131.1", "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Samudra Pilihan Hadist Shahih Bukhori", "tanggal" => "2023-03-23", "kategori_id" => 5, "penulis" => "Dr. KH. Safuan Alfandi", "penerbit_id" => "Sendang Ilmu", "tahun_terbit" => NULL, "tempat_terbit" => "Solo", "halaman" => 256, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "297137", "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kamus Lengkap Bahasa Indonesia Terbaru", "tanggal" => "2023-05-23", "kategori_id" => 5, "penulis" => "Dessy Anwar", "penerbit_id" => "Amelia", "tahun_terbit" => "2015", "tempat_terbit" => "Surabaya", "halaman" => 640, "tinggi" => NULL, "isbn" => "979-395-502-3", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Peribahasa", "tanggal" => "2022-12-05", "kategori_id" => 5, "penulis" => "K. St. Pamuntjak", "penerbit_id" => "Balai Pustaka", "tahun_terbit" => "1983", "tempat_terbit" => "Jakarta", "halaman" => 1943, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Buku Praktis Bahasa Indonesia", "tanggal" => "2023-03-23", "kategori_id" => 5, "penulis" => "Dendy Sugono", "penerbit_id" => "Kementerian Pendidikan dan Kebudayaan", "tahun_terbit" => "2011", "tempat_terbit" => "Jakarta Timur", "halaman" => 2011, "tinggi" => NULL, "isbn" => "979-685-304-3", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Hafidz Rumahan", "tanggal" => "2022-03-27", "kategori_id" => 5, "penulis" => "Neny Suswati", "penerbit_id" => "Aura Publishing", "tahun_terbit" => "2019", "tempat_terbit" => "Bandar Lampung", "halaman" => 196, "tinggi" => "13,3 x 20,5", "isbn" => "978-623-211-033-5", "stok" => 3, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Membuka Rahasia Al Quran", "tanggal" => "2007-04-11", "kategori_id" => 5, "penulis" => "Daniel A. Madigan", "penerbit_id" => "PT. Intimedia Cipta Nusantara", "tahun_terbit" => "2001", "tempat_terbit" => "Jakarta Timur", "halaman" => 301, "tinggi" => NULL, "isbn" => "979-3327-46-4", "stok" => 5, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Pedoman Pengelolaan Perpustakaan Madrasah", "tanggal" => "1999-03-01", "kategori_id" => 5, "penulis" => "Taufiq Ahmad Dardiri", "penerbit_id" => "Lembaga Pemberdayaan Perpustakaan dan Informasi (LpPI)", "tahun_terbit" => "2001", "tempat_terbit" => "Yogyakarta", "halaman" => 195, "tinggi" => NULL, "isbn" => "979-96092-0-8", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "027.802", "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Super Amazing !!! Cerita-Cerita & Fakta Sains Tentang Keajaiban Laut", "tanggal" => "2023-03-23", "kategori_id" => 5, "penulis" => "Asri Wulantini", "penerbit_id" => "Ziyad", "tahun_terbit" => "2017", "tempat_terbit" => "Surakarta", "halaman" => 136, "tinggi" => NULL, "isbn" => "978-602-317-317-6", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Bimbingan Bermain Tenis Meja", "tanggal" => "2007-03-01", "kategori_id" => 5, "penulis" => "Johnny Leack", "penerbit_id" => "Mutiara Sumber Widya", "tahun_terbit" => "1996", "tempat_terbit" => "Jakarta Pusat", "halaman" => 168, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Baca Buku Ini Saat Engkau Gagal", "tanggal" => "2007-04-11", "kategori_id" => 5, "penulis" => "Kinanti Linda R", "penerbit_id" => "Psikologi Corner", "tahun_terbit" => "2020", "tempat_terbit" => "Yogyakarta", "halaman" => 214, "tinggi" => NULL, "isbn" => "978-623-244-152-1", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Penuntut Belajar Fisika Untuk SLTP Kelas 3", "tanggal" => "1998-04-30", "kategori_id" => 5, "penulis" => "Drs. Wahyudin", "penerbit_id" => "Lubuk Agung", "tahun_terbit" => "1996", "tempat_terbit" => "Bandung", "halaman" => 104, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Mengenal Dunia Filateli", "tanggal" => "2007-04-11", "kategori_id" => 5, "penulis" => "H. Soerjono, Bc.A.P.", "penerbit_id" => "Perusahaan Umum Pos dan Giro", "tahun_terbit" => "1995", "tempat_terbit" => NULL, "halaman" => 78, "tinggi" => NULL, "isbn" => NULL, "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Suara Hati ", "tanggal" => "2007-04-11", "kategori_id" => 5, "penulis" => "Fauzan Al Anshari", "penerbit_id" => "Bintang Islam Pustaka", "tahun_terbit" => "1997", "tempat_terbit" => "Jakarta Pusat", "halaman" => 108, "tinggi" => NULL, "isbn" => "979-95278-1-3", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Pedoman Pelaksanaan Bimbingan dan Penyuluhan Agama", "tanggal" => "2017-04-12", "kategori_id" => 5, "penulis" => "M. Arifin", "penerbit_id" => "PT. Golden Terayon Press", "tahun_terbit" => "1982", "tempat_terbit" => "Jakarta", "halaman" => 157, "tinggi" => "21", "isbn" => "979-8125-02-09", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Mengenal Rumah Jawa Tradisional", "tanggal" => "2001-10-29", "kategori_id" => 5, "penulis" => "Muhammad Yamin", "penerbit_id" => "Hidayat", "tahun_terbit" => "2001", "tempat_terbit" => "Yogyakarta", "halaman" => 118, "tinggi" => NULL, "isbn" => "979-9555-16-7", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Percepatan Rezeki Dalam 40 Hari dengan Otak Kanan", "tanggal" => "2007-04-12", "kategori_id" => 5, "penulis" => "Ippho Santosa", "penerbit_id" => "PT. Elex Media Compotindo", "tahun_terbit" => "2010", "tempat_terbit" => "Jakarta", "halaman" => 140, "tinggi" => NULL, "isbn" => "978-979-2793-29-1", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Peran Imajinasi dalam Meraih Keberhasilan", "tanggal" => "2007-04-11", "kategori_id" => 5, "penulis" => "Napoleon Hill", "penerbit_id" => "Intimedia & Ladang Pustaka", "tahun_terbit" => "2001", "tempat_terbit" => "Jakarta", "halaman" => 88, "tinggi" => "11 x 19,5", "isbn" => "979-3358-30-0", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "002", "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Kemampuan Menguasai Diri", "tanggal" => "2007-04-11", "kategori_id" => 5, "penulis" => "Napoleon Hill", "penerbit_id" => "Intimedia & Ladang Pustaka", "tahun_terbit" => "2002", "tempat_terbit" => "Jakarta", "halaman" => 69, "tinggi" => "11 x 19,5", "isbn" => "979-3358-31-9", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => "002", "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Koreksi Total shalat Kita", "tanggal" => "2022-04-14", "kategori_id" => 5, "penulis" => "Mahmud Al Mishri", "penerbit_id" => "Insan Kamil", "tahun_terbit" => "2008", "tempat_terbit" => "Surakarta", "halaman" => 327, "tinggi" => "15 x 23", "isbn" => "978-979-1296-15-1", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Ulum Al-Hadis", "tanggal" => "2022-04-14", "kategori_id" => 5, "penulis" => "Drs. Badri Khaeruman, M.Ag", "penerbit_id" => "Pustaka setia", "tahun_terbit" => "2010", "tempat_terbit" => "Bandung", "halaman" => 296, "tinggi" => "16 x 24", "isbn" => "978-979-076-101-8", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => NULL, "keterangan" => NULL
            ],
            [
            "sampul" => "sampul.jpg", "judul" => "Super Pintar Soal untuk SMP/MTs", "tanggal" => "2022-04-14", "kategori_id" => 5, "penulis" => "TIM", "penerbit_id" => "Indonesia Cerdas", "tahun_terbit" => "2010", "tempat_terbit" => "Yogyakarta", "halaman" => 248, "tinggi" => "15 x 23", "isbn" => "978-602-8276-41-2", "stok" => 1, "sumber_buku" => "Hadiah", "rak_id" => "000", "ddc" => NULL, "keterangan" => NULL
            ]

        ];
        Buku::query()->insert($bukus);
    }
}
