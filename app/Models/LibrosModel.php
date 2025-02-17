<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibrosModel extends Model
{
    use HasFactory;

    protected $table = 'tabla_libros';

    protected $fillable = ['titulo', 'paginas', 'editorial', 'autor'];

    public $timestamps = false;
}
