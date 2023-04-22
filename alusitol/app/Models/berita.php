<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    use HasFactory;
    protected $guarded = [];

    //fungsi untuk membuat foreign key
    public function category()
    {
        return $this->belongsTo(BeritaCategory::class, 'berita_category_id', 'id');
    }
}
