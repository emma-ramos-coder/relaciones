<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];

    // definición de la relación polimórfica uno a uno
    public function image():MorphOne{
        return $this->morphOne(Image::class,'imageable');
    }

    // definición de la relación polimórfica uno a muchos
    public function images():MorphMany{
        return $this->morphMany(Image::class,'imageable');
    }

    // definición de la relación polimórfica muchos a muchos
    public function tags():MorphToMany{
        return $this->morphToMany(Tag::class,'taggable');
    }
}
