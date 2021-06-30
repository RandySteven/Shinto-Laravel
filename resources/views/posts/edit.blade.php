@extends('template')

@section('title', 'Edit Diary')

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

  <div class="container mt-5">
    <form method="POST" action="{{ route('diary.update', $diary) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        {{-- Cross-Site Request Forgery --}}
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" id="title" name="title" value="{{ $diary->title }}">
        </div>
        <div class="mb-3">
            <label for="thumbnail" class="form-label">Thumbnail</label>
            <input type="file" class="form-control" id="thumbnail" name="thumbnail">
        </div>
        <input type="hidden" name="user_id" value="1">

        <div class="mb-3">
          <label for="body" class="form-label">Body</label>
          <textarea name="body" id="body" rows="10" class="form-control">
              {{ $diary->body }}
          </textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
@endsection
