<?php
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $user = User::find(1);
        $post = Post::find(3);
        return view('index',compact('user','post'));
    }
}
