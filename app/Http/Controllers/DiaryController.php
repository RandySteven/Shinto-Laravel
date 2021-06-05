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
        Diary::create($attr);
        return redirect('shinto-diary')->with('success', 'Create Success');
    }

    public function index(){
        $diaries = Diary::latest()->paginate(1);
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
