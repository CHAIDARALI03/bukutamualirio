<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Buku Tamu</title>
    <style>
        .wave-adjust {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
        }

        .banner-text {
            position: relative;
            z-index: 1;
        }
    </style>
</head>

<body>
    <nav class="bg-gradient-to-r from-[#005a87] via-[#00c1b1] to-[#0092b1] fixed w-full z-20 top-0">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Buku Tamu ATR BPN</span>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="flex p-4 md:p-0 mt-4 font-medium md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0">
                    <li><a href="#"
                            class="inline-block py-2 px-3 text-white rounded hover:bg-[#00c1b1] md:hover:bg-transparent md:hover:text-[#00c1b1]">Home</a>
                    </li>
                    <li><a href="#progkal"
                            class="inline-block py-2 px-3 text-white rounded hover:bg-[#00c1b1] md:hover:bg-transparent md:hover:text-[#00c1b1]">Kompetensi
                            Keahlian</a></li>
                    <li><a href="#visimisi"
                            class="inline-block py-2 px-3 text-white rounded hover:bg-[#00c1b1] md:hover:bg-transparent md:hover:text-[#00c1b1]">Visi
                            Misi Moto</a></li>
                    <li><a href="#contact"
                            class="inline-block py-2 px-3 text-white rounded hover:bg-[#00c1b1] md:hover:bg-transparent md:hover:text-[#00c1b1]">Hubungi
                            Kami</a></li>
                    <!-- Tombol Admin dengan ikon -->
                    <a href="/bukutamu/admin/login.php"
                        class="bg-white text-black px-4 py-2 rounded-lg flex items-center space-x-2 hover:bg-yellow-500 hover:text-white transition">
                        <i class="fa-solid fa-right-to-bracket"></i>
                    </a>
                </ul>
            </div>
        </div>
    </nav>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" crossorigin="anonymous"></script>

    <!-- Banner Section -->
    <section id="banner" class="relative bg-gradient-to-r from-[#005a87] via-[#00c1b1] to-[#0092b1] text-white pb-12">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between py-12 banner-text">
            <div class="text-center md:text-left">
                <h4 class="text-3xl font-bold mb-4">Selamat Datang Di Buku Tamu KEMENTERIAN AGRARIA DAN TATA RUANG BADAN
                    PERTANAHAN NASIONAL</h4>
                <p class="text-lg">Terima Kasih Telah Berkunjung di Buku Tamu Kami</p>
            </div>
            <img src="assets/images/ATRBPN.png" alt="Banner" class="w-2/3 md:w-1/4 mt-3 md:mt-5">
        </div>
        <svg class="wave-adjust" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#f3f4f5" fill-opacity="1"
                d="M0,192L80,170.7C160,149,320,107,480,112C640,117,800,171,960,197.3C1120,224,1280,224,1360,224L1440,224L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
            </path>
        </svg>
    </section>

    <!-- Kompetensi Keahlian Section -->
    <section id="progkal" class="py-12 bg-gray-100">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-8 text-gray-800">KOMPETENSI KEAHLIAN</h2>
            <p class="text-lg mb-12 text-gray-600">Kantor Pertanahan Kabupaten Malang, yang berada di bawah naungan
                Kementerian Agraria dan Tata Ruang/Badan Pertanahan Nasional (ATR/BPN), memiliki visi untuk mewujudkan
                tanah dan pertanahan yang digunakan sebesar-besarnya bagi kemakmuran rakyat, serta menjamin keadilan dan
                keberlanjutan sistem kemasyarakatan, kebangsaan, dan kenegaraan Republik Indonesia.</p>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-lg transition transform hover:scale-105 hover:shadow-xl">
                    <h4 class="text-xl font-semibold text-gray-800 mb-2">Pengelolaan Pertanahan</h4>
                    <p class="text-gray-600">Mengurus administrasi, penerbitan sertifikat, dan pengaturan hak atas tanah
                        (Hak Milik, HGB, HGU, dll.).</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg transition transform hover:scale-105 hover:shadow-xl">
                    <h4 class="text-xl font-semibold text-gray-800 mb-2">Survey dan Pemetaan</h4>
                    <p class="text-gray-600">Melakukan pengukuran tanah dengan alat modern (GPS, Total Station),
                        pemetaan digital, dan validasi data spasial.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg transition transform hover:scale-105 hover:shadow-xl">
                    <h4 class="text-xl font-semibold text-gray-800 mb-2">Hukum Pertanahan</h4>
                    <p class="text-gray-600">Memahami UUPA, menyelesaikan sengketa tanah, dan mengelola dokumen legal
                        terkait hak tanah.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg transition transform hover:scale-105 hover:shadow-xl">
                    <h4 class="text-xl font-semibold text-gray-800 mb-2">Teknologi Informasi</h4>
                    <p class="text-gray-600">Mengoperasikan sistem informasi pertanahan (GIS, ATR/BPN One Map) dan
                        digitalisasi dokumen tanah.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Visi Misi Section -->
    <section id="visimisi" class="py-16 bg-gray-50">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-12 text-gray-800">Visi, Misi, dan Moto</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16">
                <div class="text-left space-y-8">
                    <div>
                        <h4 class="text-2xl font-semibold text-gray-800 mb-4">Visi</h4>
                        <p class="text-lg text-gray-700">Terwujudnya Penataan Ruang dan Pengelolaan Pertanahan yang
                            Terpercaya dan Berstandar Dunia dalam Melayani Masyarakat untuk Mendukung Tercapainya:
                            "Indonesia Maju yang Berdaulat, Mandiri dan Berkepribadian Berlandaskan Gotong Royong"</p>
                    </div>
                    <div>
                        <h4 class="text-2xl font-semibold text-gray-800 mb-4">Misi</h4>
                        <p class="text-lg text-gray-700">Menyelenggarakan Penataan Ruang dan Pengelolaan Pertanahan yang
                            Produktif, Berkelanjutan dan Berkeadilan; Menyelenggarakan Pelayanan Pertanahan dan Penataan
                            Ruang yang Berstandar Dunia.</p>
                    </div>
                    <h4 class="text-2xl font-semibold text-gray-800 mb-4 mt-8">Moto</h4>
                    <p class="text-lg text-gray-700">Melayani, Profesional, Terpercaya</p>
                </div>
                <div class="flex justify-center">
                    <img src="assets/images/ATRBPN.png" alt="Visi Misi"
                        class="mx-auto rounded-lg shadow-md max-w-xs md:max-w-md">
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-12 bg-gray-50">
        <div class="container mx-auto text-center">
            <h2 class="text-2xl font-semibold text-gray-700 mb-8">HUBUNGI KAMI</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <img src="assets/images/contact-us.png" alt="Contact Us"
                        class="mx-auto rounded-lg shadow-md max-w-xs md:max-w-md">
                </div>
                <div>
                    <form action="proses.php" method="post" class="bg-white p-6 rounded-lg shadow-md max-w-md mx-auto">
                        <h3 class="text-lg font-semibold text-gray-700 mb-6">Formulir Kontak</h3>
                        <div class="mb-4">
                            <label for="noktp" class="block text-left font-medium text-gray-700 mb-2">No KTP</label>
                            <input type="number" id="noktp" name="noktp"
                                class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#00c1b1]"
                                placeholder="Masukkan No KTP Anda">
                        </div>
                        <div class="mb-4">
                            <label for="nohp" class="block text-left font-medium text-gray-700 mb-2">No
                                Handphone</label>
                            <input type="number" id="nohp" name="nohp"
                                class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#00c1b1]"
                                placeholder="Masukkan No HP Anda">
                        </div>
                        <div class="mb-4">
                            <label for="nm" class="block text-left font-medium text-gray-700 mb-2">Nama</label>
                            <input type="text" id="nm" name="nm"
                                class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#00c1b1]"
                                placeholder="Masukkan Nama Anda">
                        </div>
                        <div class="mb-4">
                            <label for="alm" class="block text-left font-medium text-gray-700 mb-2">Alamat</label>
                            <textarea id="alm" name="alm"
                                class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#00c1b1]"
                                rows="3" placeholder="Masukkan Alamat Anda"></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="kpl" class="block text-left font-medium text-gray-700 mb-2">Keperluan</label>
                            <input type="text" id="kpl" name="kpl"
                                class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#00c1b1]"
                                placeholder="Masukkan Keperluan Anda?">
                        </div>
                        <button type="submit"
                            class="bg-gradient-to-r from-[#005a87] via-[#00c1b1] to-[#0092b1] text-white py-2 rounded-lg w-full hover:bg-[#00c1b1] transition duration-300">Kirim
                            Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <section id="footer" class="py-4 bg-gradient-to-r from-[#005a87] via-[#00c1b1] to-[#0092b1] text-white">
        <div class="container mx-auto text-center">
            <p>Buku Tamu Tim AliWol &copy; 2024-2025</p>
        </div>
    </section>
</body>

</html>