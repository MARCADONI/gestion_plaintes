<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plainte extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'plaignant_id',
        'numéro_rp',
        'objet',
        'date_prejudice',
        'detaille_prejudice',
        'nom_susp',
        'prenom_susp',
        'pseudo_susp',
        'docimile_susp',
        'contact_susp'
    ];

    public function plaignant()
    {
        return $this->belongsTo(Plaignant::class);
    }
}
