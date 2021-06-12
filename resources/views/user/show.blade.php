@extends('template')

@section('title', $user->name)

@section('content')
<h1>{{ $user->name }}</h1>
<div class="container">
    <div class="row row-cols-4 mx-2 mt-5">
        @foreach ($user->diaries as $diary)

        <div class="col">
                  <div class="card" style="width: 12rem;">
                      {{-- <img src="assets/images/245046 1.png" height="160" class="card-img-top" alt="..."> --}}
                      <div class="card-body">

                          <h5 class="card-title">{{ $diary->title }}</h5>

                          <p>
                              @foreach ($diary->tags as $tag)
                                  <a href="{{ route('tag', $tag) }}">{{ $tag->tag }}</a> ,
                              @endforeach
                          </p>

                          <p class="text-secondary">
                              {{ $diary->created_at->diffForHumans() }} <br>
                              {{ $user->name }}
                          </p>
                          <p class="card-text">{{ Str::limit($diary->body, 50, '.') }}</p>
                          <a href="{{ route('diary.show', $diary) }}" class="btn btn-danger">Read More</a>
                      </div>
                  </div>
              </div>
          @endforeach
    </div>
</div>

@endsection
