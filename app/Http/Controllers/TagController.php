<?php

namespace App\Http\Controllers;

use App\Models\Diary;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index(Tag $tag){
        $diaries = $tag->diaries()->latest()->paginate(3);
        return view('posts.index', compact('diaries'));
    }
}
