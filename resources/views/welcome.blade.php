@extends('template')

@section('title', 'Shinto Wiki')

@section('style')
<style>
    body{
        background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('assets/images/cherry-blossoms-sensoji-temple-asakusa-tokyo-japan 1.png');
        background-repeat: no-repeat;
        background-size: cover;
        font-family: 'Kaushan Script'
    }

    .jumbotron{
        height: 70vh;
    }

    .box{
        height: 50vh;
    }

    .red{
        color: #FF0000;
        text-shadow: 0 0 6px #000000;
    }

    .white{
        color: #FFFFFF;
        text-shadow: 0 0 6px #000000;
    }

    .jumbotron h1{
        font-size: 128px
    }

    .centered {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
</style>

@endsection

@section('content')
<div class="jumbotron">
    <h1 class="display-4 text-center pt-5 centered"> <span class="red">Shinto </span> <span class="white">Wiki</span> </h1>
</div>

    <div class="bg-white text-center py-5 box rounded">
        <p class="h3 mb-5">
            Welcome to Shinto wiki where we learn about shinto culture and tradition.
        </p>
        <div class="row">
          <div class="col-4">
              <img class="w-50" src="assets/images/Group 11.png" alt="">
          </div>
          <div class="col-4">
                <img class="w-50" src="assets/images/Group 2.png" alt="">
          </div>
          <div class="col-4">
                <a href="{{ route('about') }}">
                    <img class="w-50" src="assets/images/Group 12.png" alt="">
                </a>
          </div>
        </div>
    </div>
@endsection
