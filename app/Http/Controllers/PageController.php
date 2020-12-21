<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
class PageController extends Controller
{
    public function index(Request $request1)
    {
        $url = $request1->path();
        $page = Page::where('path', $url)->first();
        if ($request1->is('index')) {
            return view('index', ['page' => $page]);
        }

    }


}
