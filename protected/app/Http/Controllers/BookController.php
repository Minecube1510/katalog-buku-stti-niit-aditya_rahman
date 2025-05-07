<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $kategori = $request->get('kategori');
        $search = $request->get('search');

        $buku = Book::when($kategori, function ($query, $kategori) {
                return $query->where('category_id', $kategori);
            })
            ->when($search, function ($query, $search) {
                return $query->where('title', 'like', "%{$search}%")
                            ->orWhere('author', 'like', "%{$search}%");
            })
            ->paginate(10);

        $kategoriList = Category::all();

        return view('books.index', compact('buku', 'kategoriList', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        $kategori = Category::all();
        return view('books.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'category_id' => 'required',
            'cover' => 'required|image|mimes:jpeg,png|max:2048',
        ]);

        $coverPath = $request->file('cover')->store('uploads', 'public');
        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'description' => $request->description,
            'cover' => $coverPath,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('books.index')->with('success', 'Telah Menambahkan Buku!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
