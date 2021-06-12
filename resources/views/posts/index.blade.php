@extends('template')

@section('style')
<style>
    html, body {
       margin: 0px;
       font-family: 'Kaushan Script';font-size: 22px;
   }
   .jumbotron{
       background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("assets/images/245046\ 1.png");
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
<div class="jumbotron">



    <h1 class="text-center py-xl-5"><span class="text-red h1">Shinto</span> <span class="text-white h1">Diary</span></h1>
  </div>

  <div class="container">
      <div class="row row-cols-4 mx-2 mt-5">
            @foreach ($diaries as $diary)
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
                                <a href="{{ route('user.show', $diary->user) }}">
                                    {{ $diary->user->name }}
                                </a>
                            </p>
                            <p class="card-text">{{ Str::limit($diary->body, 50, '.') }}</p>
                            <a href="{{ route('diary.show', $diary) }}" class="btn btn-danger">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="container">
                {{ $diaries->links() }}
            </div>
      </div>
  </div>
@endsection
