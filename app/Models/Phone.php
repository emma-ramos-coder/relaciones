<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Phone extends Model
{
    use HasFactory;

    protected $guarded = [];

    // definición de la relación de regreso con user
    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }

    // relacion uno a uno con sim
    public function sim():HasOne{
        return $this->hasOne(sim::class);
    }

    // relacion uno a muchos con sim, para tener varios sims por teléfono
    public function sims():HasMany{
        return $this->hasMany(sim::class);
    }

}
