<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href='https://fonts.googleapis.com/css?family=Kaushan Script' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
</head>
<body>

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
                    Shinto( 神道 ), 神 it's means God and 道 means way, so Shinto is the way of God. Shinto basicly is not religion it is the about the culture and tradition. Shintoism believe kami, the definition kami is God. Japan people believe that kami is polymorph, it can be a cat, dog, tree, flower, or nature itself. Shinto usually pray at Jinja or we call it Shrine in english. Jinja basically is the home for kami.
                </p>
            </div>
        </div>
    </div>

    <div class="bg-white text-center box rounded">
        <div class="row">
            <div class="col-7 px-2 left">
                <h1 class="mb-5" data-aos="zoom-in">Shinto’s History</h1>
                <p style="font-size: 24px;margin: 24px" data-aos="fade-right" class="px-4">
                    In the late 6th century AD the name Shinto was created for the native religion to distinguish it from Buddhism and Confucianism, which had been introduced from China. Shinto was rapidly overshadowed by Buddhism, and the native gods were generally regarded as manifestations of Buddha in a previous state of existence
                </p>
            </div>
            <div class="col-5">
                <img src="assets/images/A_scene_of_a_shinto_shrine_dance,_kagura 1.png" alt="" data-aos="fade-up"
                data-aos-anchor-placement="bottom-center">
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init()
    </script>
</body>
</html>
