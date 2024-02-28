<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centro extends Model
{
    use HasFactory;

    protected $fillable = [
        'codcen',
        'dencen',
        'titularidad',
        'domcen',
        'cpcen',
        'loccen',
        'muncen',
        'telcen',
        'email',
    ];
}
