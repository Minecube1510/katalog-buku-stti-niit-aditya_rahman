@extends('layouts.heading')
@extends('layouts.admin_authory')


<style>
    .hedbutan {
        background-color: #088628;
        border: none;
        color: #ffffff;
        cursor: pointer;
        border-radius: 4px;
        margin: 0% 2%;
        width: 100px; /* Ganti dengan ukuran yang diinginkan */
        height: 40px; /* Ganti dengan ukuran yang diinginkan */
        font-size: 20px; /* Ukuran font */
        transition: background-color 0.3s, color 0.3s; /* Menambahkan transisi */
    }
    .hedbutan:hover {
        background-color:#0d0666; /* Warna saat hover */
        color:#bdbdbd; /* Warna teks saat hover */
    }
</style>

@section('palaan')
<div style="margin-left: 2.5%; text-align: left;">
    <p>
        Nama Guest
    </p>
</div>

@section('tombol')
    <!-- <button class="butan-add" id="tambahbuku"><b>Menambahkan Buku</b></button> -->
@endsection

<div style="margin-right: 2.5%; text-align: right; display: flex; gap: 10px;">
    <button class="hedbutan" id="login"><b>Login</b></button>
    <button class="hedbutan" id="signup"><b>Sign Up</b></button>
</div>

<script>
    /* Tetap ID */
    let addBook = document.getElementById('tambahbuku');
    //
    let login = document.getElementById('login');
    let daftar = document.getElementById('signup');
    /* Tetap ID */


    /* Fungsional */
    // [Tombol menambah Buku]
    (addBook).addEventListener('click', function() {
        window.location.href = ('add-edit-book');
    });

    (login).addEventListener('click', function() {
        window.location.href = ('login');
    });
    (daftar).addEventListener('click', function() {
        window.location.href = ('register');
    });
    
    /* Fungsional */
</script>

@endsection