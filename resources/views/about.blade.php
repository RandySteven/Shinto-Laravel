@extends('template')

@section('title', 'About Us')

@section('style')
<style>
    html, body {
        max-width: 100%;
        overflow-x: hidden;
        margin: 0;
    }
    body{
        background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('assets/images/itsukushima-shrine-lake-surrounded-by-hills-covered-greenery-japan 2.png');
        background-repeat: no-repeat;
        background-size: cover;
        font-family: 'Kaushan Script'
    }

    .jumbotron{
        height: 100vh;
    }

    .box{
        background-color: white;
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

    .left {
        background-image: url('assets/images/Ellipse 2.svg');
        background-repeat: no-repeat;
        background-size: 80rem;
        background-position-y: -10rem;
        color: white;
        text-shadow: 0 0 6px black;
        height: 40vh;
    }

    .right{
        background-image: url('assets/images/Ellipse 1.png');
        background-repeat: no-repeat;
        background-size: cover;
        background-position-y: -10rem;
        color: white;
        text-shadow: 0 0 6px black;
        height: 40vh;
    }

</style>
@endsection

@section('content')
<div class="jumbotron">
    <h1 class="h1 text-center pt-5 centered"> <span class="red">About </span> <span class="white">Shinto</span> </h1>
</div>

<div class="bg-white text-center py-5 box rounded">
    <div class="row">
        <div class="col-5">
            <img src="assets/images/shinto 1.png" alt="" data-aos="fade-up"
            data-aos-anchor-placement="top-center" >
        </div>
        <div class="col-7 px-2 right">
            <h1 class="mb-5" data-aos="zoom-in">What's Shinto</h1>
            <p style="font-size: 24px;margin: 24px" data-aos="fade-left" class="px-4">
                Shinto( ?????? ), ??? it's means God and ??? means way, so Shinto is the way of God. Shinto basicly is not religion it is the about the culture and tradition. Shintoism believe kami, the definition kami is God. Japan people believe that kami is polymorph, it can be a cat, dog, tree, flower, or nature itself. Shinto usually pray at Jinja or we call it Shrine in english. Jinja basically is the home for kami.
            </p>
        </div>
    </div>
</div>

<div class="bg-white text-center box rounded">
    <div class="row">
        <div class="col-7 px-2 left">
            <h1 class="mb-5" data-aos="zoom-in">Shinto???s History</h1>
            <p style="font-size: 24px;margin: 24px" data-aos="fade-right" class="px-4">
                In the late 6th century AD the name Shinto was created for the native religion to distinguish it from Buddhism and Confucianism, which had been introduced from China. Shinto was rapidly overshadowed by Buddhism, and the native gods were generally regarded as manifestations of Buddha in a previous state of existence
            </p>
        </div>
        <div class="col-5">
            <img src="assets/images/A_scene_of_a_shinto_shrine_dance,_kagura 1.png" alt="" data-aos="fade-left"
            data-aos-anchor-placement="bottom-center">
        </div>
    </div>
</div>
@endsection
