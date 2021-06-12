<?php

namespace App\Http\Controllers;

use App\Models\Diary;
use App\Models\Tag;
use Illuminate\Http\Request;

class DiaryController extends Controller
{
    public function create(){
        $tags = Tag::get();
        return view('posts.create', compact('tags'));
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|min:3|max:20',
            'body' => 'required|min:5'
        ]);
        // Diary::create([
        //     'title' => $request->title,
        //     'body' => $request->body,
        //     'slug' => \Str::slug($request->title)
        // ]);
        $attr = $request->all();
        $attr['slug'] = \Str::slug($request->title);
        $attr['user_id'] = $request->get('user_id');
        $diary = Diary::create($attr);
        $diary->tags()->attach($request->get('tags'));
        return redirect('shinto-diary')->with('success', 'Create Success');
    }

    public function index(){
        $diaries = Diary::latest()->paginate(3);
        return view('posts.index', ['diaries'=>$diaries]);
    }

    public function show(Diary $diary){
        return view('posts.show', ['diary'=>$diary]);
    }

    //View
    public function edit(Diary $diary){
        return view('posts.edit', ['diary'=>$diary]);
    }

    //controller
    public function update(Request $request, Diary $diary){
        $request->validate([
            'title' => 'required|min:3|max:20',
            'body' => 'required'
        ]);
        $attr = $request->all();
        $attr['slug'] = \Str::slug($request->title);
        $diary->update($attr);
        return redirect('shinto-diary');
    }

    public function delete(Diary $diary){
        $diary->delete();
        return redirect('shinto-diary');
    }
}
