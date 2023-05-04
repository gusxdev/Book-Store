<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $primaryKey = 'no';
    public function kategoris()
{
    return $this->belongsTo(kategori::class);
}
    public function penerbits()
{
    return $this->belongsTo(kategori::class);
}
}
