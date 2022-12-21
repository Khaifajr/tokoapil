<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catatan extends Model
{
    protected $table = 'catatan';

    protected $fillable = ['title', 'konten'];

    public $timestamps = false;
}