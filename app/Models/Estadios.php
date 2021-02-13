<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estadios extends Model
{
    use HasFactory;

    protected $fillable = [

        'Nome',
        'Jogo',
        'Local',
        'Descricao',
        'user_id',

    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

}
