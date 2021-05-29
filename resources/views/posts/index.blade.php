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

    <nav class="navbar navbar-expand-lg mt-0">
      <div class="container-fluid">
        <a class="navbar-brand text-red" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-red" href="{{ route('diary.create') }}">Create</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link text-red dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

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
                            <p class="card-text">{{ Str::limit($diary->body, 50, '.') }}</p>
                            <a href="{{ route('diary.show', $diary) }}" class="btn btn-danger">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
      </div>
  </div>
@endsection
