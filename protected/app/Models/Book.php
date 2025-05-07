<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model {
    public function kategori() {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
