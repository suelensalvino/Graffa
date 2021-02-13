<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfis extends Model
{
    use HasFactory;

    protected $fillable = [

        'Time',
        'user_id',

    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

}
