<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Page;
use Illuminate\Support\Str;
use TCG\Voyager\Models\Category;
use App\Models\Product;
use App\Models\Flange;


class MainController extends Controller
{

    public function page($slug)
    {
        $page = Page::where('slug',$slug)->firstOrFail();
        return view('page.page', ['page'=> $page]);
    }

    public function ribbon()
    {
        return view('product.ribbon');
    }

    public function roll()
    {
        return view('product.roll');
    }

    public function flange()
    {
        return view('product.flange');
    }

    public function home(){

        $posts = Post::orderBy('created_at', 'desc')->limit(3)->get();
        $page = Page::orderBy('created_at', 'desc')->get();

        return view('home', [
            'posts'=> $posts,
            'page' => $page
        ]);
    }

    public function post(){

        $post = Post::orderBy('created_at', 'desc')->where('status', 1)->get();
        $post->load('translations');
        $randompost = Post::inRandomOrder()->limit(4)->get();
        return view('news.post', compact('post','randompost'));
    }

    public function postsingle($slug){

        $postsingle = Post::where('slug',$slug)->firstOrFail();
        $randompost = Post::inRandomOrder()->limit(4)->get();

        return view('news.postsingle', compact('postsingle','randompost'));
    }

    public function about() {
        return view('about');
    }

    public function feedback() {
        return view('feedback');
    }

    public function singleproduct() {
        return view('singleproduct');
    }

    public function document() {
        return view('document');
    }


}
