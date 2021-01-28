<?php

namespace App\Http\Controllers;
use App\Models\Post;
class HomeController extends Controller
{
    function home(){
        $post=Post::orderBy('id','desc')->paginate(1);
        return view('home',['products'=>$products]);
    }
}
?>
