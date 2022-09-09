<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plaignant extends Model
{
    use HasFactory;

    protected $fillable = [
        'civilite',
        'nom',
        'prenoms',
        'date_naiss',
        'lieu_naiss',
        'address_geo',
        'num_phone1',
        'num_phone2',
        'email'

    ];

    public function plaintes()
    {
        return $this->hasMany(Plainte::class);
    }

    public function user()
    {
        $this->hasOne(User::class);
    }
}
