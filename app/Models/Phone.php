<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

    protected $guarded = [];

    // definición de la relación de regreso con user
    public function user(){
        return $this->belongsTo(User::class);
    }
}
