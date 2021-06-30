<?php

namespace App\Http\Controllers;

use App\Models\Diary;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DiaryController extends Controller
{
    public function create(){
        $tags = Tag::get();
        return view('posts.create', compact('tags'));
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|min:3|max:20',
            'body' => 'required|min:5',
            'thumbnail' => 'image|mimes:png,jpg,jpeg,gif|max:2048'
        ]);
        // Diary::create([
        //     'title' => $request->title,
        //     'body' => $request->body,
        //     'slug' => \Str::slug($request->title)
        // ]);
        $attr = $request->all();
        $attr['slug'] = \Str::slug($request->title);
        $attr['user_id'] = $request->get('user_id');
        $attr['thumbnail'] = $request->file('thumbnail')->store("images/");
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
            'body' => 'required',
            'thumbnail' => 'mimes:png,jpg,jpeg,gif|max:2048'
        ]);
        $attr = $request->all();
        $attr['slug'] = \Str::slug($request->title);

        if($request->file('thumbnail')){
            //case 1 : orang input file
            Storage::delete($diary->thumbnail);
            $attr['thumbnail'] = $request->file('thumbnail')->store("images/");
        }else{
            //case 2 : orang gk input file
            $attr['thumbnail'] = $diary->thumbnail;
        }
        $attr['user_id'] = $request->get('user_id');

        $diary->update($attr);
        return redirect('shinto-diary');
    }

    public function delete(Diary $diary){
        if($diary->delete()){
            Storage::delete($diary->thumbnail);
        }
        return redirect('shinto-diary');
    }
}
