<?php
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Video;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $user = User::find(1);
        $post = Post::find(2);
        $tag = Tag::find(2);
        $video = Video::find(1);
        return view('index',compact('user','post','tag','video'));
    }
}
