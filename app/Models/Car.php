<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = ['modello', 'prezzo', 'alimentazione', 'cilindrata', 'cambio', 'porte', 'posti', 'tipologia', 'stato', 'anno_immatricolazione', 'km', 'immagine'];

    public function optionals()
    {
        return $this->belongsToMany(Optional::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
