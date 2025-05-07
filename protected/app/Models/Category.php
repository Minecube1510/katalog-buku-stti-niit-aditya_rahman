<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {
    public function buku() {
        return $this->hasMany(Book::class, 'category_id');
    }
}
