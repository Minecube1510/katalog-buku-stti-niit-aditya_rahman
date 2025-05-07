<style>
body {
    background-color:#deecf8;
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 20px;
    display: flex;
    flex-direction: column; /* Mengatur konten secara vertikal */
    justify-content: center; /* Mengatur konten di tengah secara horizontal */
    align-items: center; /* Mengatur konten di tengah secara vertikal */

}

.ratakan {
    text-align: center;
}
.ratakan input, .ratakan select, .ratakan button {
    margin: 1% 0.5%; /* Jarak horizontal antar elemen */
    padding: 0.5%; /* Padding dalam elemen */
}

.kotak-konten {
    padding: auto;
    width: 99%;
    border: 3px solid rgba(0, 0, 0, 0.08);
    border-radius: 10px;
}


.butanan {
    width: 15%;
    background-color: #18c744;
    border: none;
    color: #ffffff;
    cursor: pointer;
    border-radius: 4px;
    margin: 0% 2%;
    width: 250px; /* Ganti dengan ukuran yang diinginkan */
    height: 50px; /* Ganti dengan ukuran yang diinginkan */
    font-size: 24px; /* Ukuran font */
    transition: background-color 0.3s, color 0.3s; /* Menambahkan transisi */
}
.butanan:hover {
    background-color: #00e974; /* Warna saat hover */
    color: #fff1f1; /* Warna teks saat hover */
}

.butan-add {
    width: 15%;
    background-color: #18c744;
    border: none;
    color: #ffffff;
    cursor: pointer;
    border-radius: 4px;
    margin: 0% 2%;
    width: 300px; /* Ganti dengan ukuran yang diinginkan */
    height: 40px; /* Ganti dengan ukuran yang diinginkan */
    font-size: 24px; /* Ukuran font */
    transition: background-color 0.3s, color 0.3s; /* Menambahkan transisi */
}
.butan-add:hover {
    background-color: #0a0092; /* Warna saat hover */
    color: #fff1f1; /* Warna teks saat hover */
}
</style>