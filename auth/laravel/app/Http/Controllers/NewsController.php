<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()

    {
        $news_lists = News::all();
        return view('admin/news/index',compact('news_lists'));
    }

    public function create()
    {
        return view('admin/news/create');
    }
}
