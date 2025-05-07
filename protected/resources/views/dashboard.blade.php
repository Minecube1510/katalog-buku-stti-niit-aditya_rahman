<!DOCTYPE html>
<html lang="id">

<head>
    @extends('layouts.dashboard_style')
    @extends('layouts.profil_extend')

    <title>Katalog Buku Perpustakaan</title>

    <style>
        .tabelan {
            margin: auto; /* Menengahkan tabel */
            width: 93.5%;
            border: 1px solid #000000;
            border-collapse: collapse;
        }
        .tabelan th,
        .tabelan td {
            border: 1px solid #000000;
            vertical-align: middle; /* Menengahkan konten secara vertikal */
        }

        .judulan {
            font-size: 32px;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        .kolom-kiri {
            text-align: center; /* Menengahkan konten dalam sel */
        }
        .sampel-judul {
            font-size: 40px;
        }

        .kolom-kanan {
            width: 50%;
        }
        .kolom-kanan p {
            margin-left: 20px; /* Atur margin kiri sesuai kebutuhan */
        }

        .tabelan td.kolom-kanan {
            vertical-align: top; /* Mengatur align ke atas */
            text-align: left; /* Mengatur text ke kiri */
        }

        .tabelan td.kolom-kanan p {
            margin-left: 3%; /* Menambahkan margin kiri yang lebih kecil */
        }

        .navi-pager {
            display: flex; /* Mengatur elemen di dalamnya untuk ditampilkan mendatar */
            justify-content: center; /* Menengahkan konten secara horizontal */
            margin: 2% 0%; /* Margin atas dan bawah */
        }

        .navi-pager button {
            height: auto; /* Atur tinggi tombol */
            margin: 0 2%; /* Jarak antara tombol, margin kiri dan kanan */
            padding: 0 20px; /* Tambahkan padding untuk ruang di dalam tombol */
            font-size: 16px; /* Ukuran font tombol */
        }

        .navi-pager p {
            align-self: center; /* Menjaga posisi teks halaman di tengah */
            margin: 0 10px; /* Jarak antara teks dan tombol */
        }
    </style>

</head>

<body>
    <div style="margin-top: 5%;"></div>
    <div class="kotak-konten">
    <h1 style="padding: 0% 5% 0% 5%; text-align: center;">
        <b>Daftar Buku-Buku Tersedia</b>
    </h1>

    <header class="ratakan">
        <div>
            <button class="butanan" id="carianbuku"><b>Mencari Buku</b></button>
            <input type="text" id="cari" style="width: 50%; height: 30px;
            text-align: center; font-size: 20px; font-family: verdana;"
            placeholder="Cari buku...">
            <select id="ngefilter" style="width: 20%; height: 50px; text-align: center;
            font-size: 16px; font-family: verdana;">
                <option value=""><b>Semua Kategori</b></option>
                <!-- Kategori ada pada: ??? -->

                <option value="Fiksi">Fiksi</option>
                <option value="Non-Fiksi">Non-Fiksi</option>
                <option value="Biografi">Biografi</option>
            </select>
        </div>

    </header>


    <main>
        <div id="book-list">
            <!-- Daftar buku akan ditampilkan di sini -->
             <table class="tabelan">
                <tr class="judulan">
                    <th>Buku</th>
                    <th>Info</th>
                </tr>

                <tr>
                    <td class="kolom-kiri">
                        <p><i>Judul Buku Satu</i></p>
                        <p class="sampel-judul">
                            <b>Sampul<br>Buku<br>Satu</b>
                        </p>
                    </td><td class="kolom-kanan">
                        <p><b>Pembuat:</b> <i>Pembuat Satu</i></p>
                        <p><b>Deskripsi Buku:</b></p>
                        <p style="margin-top: -2%;">Hanya Buku Satu.</p>
                    </td>
                </tr><tr>
                    <td class="kolom-kiri">
                        <p><i>Judul Buku Dua</i></p>
                        <p class="sampel-judul">
                            <b>Sampul<br>Buku<br>Dua</b>
                        </p>
                    </td><td class="kolom-kanan">
                        <p><b>Pembuat:</b> <i>Pembuat Dua</i></p>
                        <p><b>Deskripsi Buku:</b></p>
                        <p style="margin-top: -2%;">Hanya Buku Dua.</p>
                    </td>
                </tr><tr>
                    <td class="kolom-kiri">
                        <p><i>Judul Buku Tiga</i></p>
                        <p class="sampel-judul">
                            <b>Sampul<br>Buku<br>Tiga</b>
                        </p>
                    </td><td class="kolom-kanan">
                        <p><b>Pembuat:</b> <i>Pembuat Tiga</i></p>
                        <p><b>Deskripsi Buku:</b></p>
                        <p style="margin-top: -2%;">Hanya Buku Tiga.</p>
                    </td>
                </tr>
            </table>
        </div>

        <div class="navi-pager" id="pagination">
            <!-- Pagination akan ditampilkan di sini -->
            <button onclick="changePage(-1)"><b>&#10094; Prev</b></button>
            <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"><b>1</b></p>
            <button onclick="changePage(1)"><b>Next &#10095;</b></button>
        </div>
    </main>


    <script>
        /* Tetap ID */
        let sgsBook = document.getElementById('carianbuku');
        let sagacari = document.getElementById('cari');
        let catefilgy = document.getElementById('ngefilter');
        /* Tetap ID */


        /* Fungsional */
        //(sgsBook).addEventListener('click', function() {
            //Fungsional nge-refresh
        //});
        /* Fungsional */

    </script>
    </div>

    <div style="margin-top: 1%;" class="kotak-konten"><footer class="ratakan">
        <h1 style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
            Made By
        </h1><h2 style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
            Aditya Rahman
        </h2>
    </footer></div>

</body>
</html>
