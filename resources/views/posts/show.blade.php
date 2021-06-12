@extends('template')

@section('title', $diary->title)

@section('style')
<style>
    html, body {
       margin: 0px;
       font-family: 'Kaushan Script';font-size: 22px;
   }
   .jumbotron{
       background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("/assets/images/245046\ 1.png");
       background-position: center;
       background-size: cover;
       background-repeat: no-repeat;
       padding: 2rem;
   }
   .text-red{
       color: red;
   }
   .h1{
       font-size: 120px;
   }
</style>
@endsection

@section('content')
<div class="container">
    <h3>{{ $diary->title }}</h3>
    <p>Writed by {{ $diary->user->name }}</p>
    <p>
        @foreach ($diary->tags as $tag)
            <a href="{{ route('tag', $tag) }}">{{ $tag->tag }}</a> ,
        @endforeach
    </p>
    <a href="{{ route('diary.edit', $diary) }}" class="btn btn-success">Edit</a>
    <form action="{{ route('diary.delete', $diary) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <p>{!! nl2br($diary->body) !!}</p>
</div>
@endsection
