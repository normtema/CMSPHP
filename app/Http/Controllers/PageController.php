<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
class PageController extends Controller
{
    public function index(Request $request)
    {
        $url = $request->path();
        $page = Page::where('path', $url)->first();
        if ($request->is('index')) {
            return view('index', ['page' => $page]);
        }

    }
}
