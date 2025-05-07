@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Daftar Buku</h1>

    <!-- Form Pencarian -->
    <form method="GET" action="{{ route('books.index') }}" class="mb-4">
        <div class="input-group">
            <input type="text" name="search" class="form-control" 
                   placeholder="Cari buku berdasarkan judul atau penulis" 
                   value="{{ $search ?? '' }}">
            <button type="submit" class="btn btn-primary">Cari</button>
        </div>
    </form>

    <!-- Form Filter Kategori -->
    <form method="GET" action="{{ route('books.index') }}" class="mb-4">
        <select name="kategori" class="form-select" onchange="this.form.submit()">
            <option value="">Semua Kategori</option>
            @foreach($kategoriList as $kat)
                <option value="{{ $kat->id }}" {{ $kategori == $kat->id ? 'selected' : '' }}>
                    {{ $kat->name }}
                </option>
            @endforeach
        </select>
        <input type="hidden" name="search" value="{{ $search ?? '' }}">
    </form>

    <!-- Daftar Buku -->
    <div class="row">
        @forelse($buku as $item)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('storage/' . $item->cover) }}" class="card-img-top" alt="{{ $item->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->title }}</h5>
                        <p class="card-text">{{ $item->author }}</p>
                        <a href="{{ route('books.show', $item->id) }}" class="btn btn-info">Detail</a>
                    </div>
                </div>
            </div>
        @empty
            <p>Tidak ada buku ditemukan.</p>
        @endforelse
    </div>

    <!-- Pagination -->
    {{ $buku->appends(['search' => $search, 'kategori' => $kategori])->links() }}
</div>
@endsection