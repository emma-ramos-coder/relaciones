<?php
namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Phone;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // definición de la relación con phones
    public function phones(): HasMany{
        return $this->hasMany(Phone::class);
    }

    // definición de la relación con roles
    public function roles(): BelongsToMany{
        return $this->belongsToMany(Role::class);
    }

    // definición de la relación Has One Through con sim a través de phone
    public function phoneSim():HasOneThrough{
        return $this->hasOneThrough(Sim::class,Phone::class);
    }

    // definición de la relación Has Many Through con sim a través de phone
    public function phoneSims():HasManyThrough{
        return $this->hasManyThrough(Sim::class,Phone::class);
    }    

    // definición de la relación polimórfica uno a uno
    public function image():MorphOne{
        return $this->morphOne(Image::class,'imageable');
    }
}
