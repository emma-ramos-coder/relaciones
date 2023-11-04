<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use App\Models\Post;
use App\Models\Video;

class Tag extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function posts():MorphToMany{
        return $this->morphedByMany(Post::class,'taggable');
    }

    public function videos():MorphToMany{
        return $this->morphedByMany(Video::class,'taggable');
    }
}
