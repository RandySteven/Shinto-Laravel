@extends('template')

@section('title', 'Write Diary')

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
    <form method="POST" action="{{ route('diary.store') }}" enctype="multipart/form-data">
        @csrf
        {{-- Cross-Site Request Forgery --}}
        <input type="hidden" name="user_id" value="1">
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" id="title" name="title">
          @error('title')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3">
            <label for="thumbnail" class="form-label">Thumbnail</label>
            <input type="file" class="form-control" id="thumbnail" name="thumbnail">
        </div>
        <div class="mb-3">
            <label for="tags" class="form-label">Tag</label>
            <select name="tags[]" id="tags" class="form-control js-example-basic-multiple-limit" multiple>
                @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->tag }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
          <label for="body" class="form-label">Body</label>
          <textarea name="body" id="body" rows="10" class="form-control"></textarea>
          @error('body')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
@endsection
