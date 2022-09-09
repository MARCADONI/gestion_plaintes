<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class procureur extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'prenoms',
        'num_phone1',
        'num_phone2',
        'email'
    ];
}
