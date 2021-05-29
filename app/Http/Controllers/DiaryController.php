<?php

namespace App\Http\Controllers;

use App\Models\Diary;
use Illuminate\Http\Request;

class DiaryController extends Controller
{
    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
        // Diary::create([
        //     'title' => $request->title,
        //     'body' => $request->body,
        //     'slug' => \Str::slug($request->title)
        // ]);
        $attr = $request->all();
        $attr['slug'] = \Str::slug($request->title);
        Diary::create($attr);
        return redirect('shinto-diary');
    }

    public function index(){
        $diaries = Diary::all();
        return view('posts.index', ['diaries'=>$diaries]);
    }

    public function show(Diary $diary){
        return view('posts.show', ['diary'=>$diary]);
    }
}
