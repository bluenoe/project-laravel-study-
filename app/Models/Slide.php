<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use HasFactory;

    protected $table = 'slide'; // Tên bảng trong SQL

    protected $fillable = [
        'title',
        'image',
        'description'
    ];
}
