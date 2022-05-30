<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function allpage()
    {
        $allpage = Page::orderBy('created_at', 'desc')->where('status', 1)->get();

        return view('page.allpage', ['allpage'=> $allpage]);
    }


    public function page($slug)
    {
        $page = Page::where('slug',$slug)->firstOrFail();

        return view('page.page', ['page'=> $page]);
    }
}
