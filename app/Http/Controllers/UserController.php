<?php

namespace App\Http\Controllers;

use App\Models\Diary;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(User $user){
        // $diary = Diary::where('user_id', $user->id)->get();
        // $diary = $user->diaries()->get();
        return view('user.show', compact('user'));
    }
}
