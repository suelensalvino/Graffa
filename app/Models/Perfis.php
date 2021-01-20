<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfis extends Model
{
    use HasFactory;

    public function estadios(){
        return $this->hasMany(Estadios::class);
    }
}
