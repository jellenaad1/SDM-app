<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDM</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>



</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
    
</body>


<style>
    .custom-login{
        height: 500px;
        padding-top:100px ;
        background-color: #c5b5b559 !important;
    }
    img.slider-img{
        height: 450px !important;
        
        
    }
    .custom-product{
        height: 600px;
    }
    .slider-text{
        background-color: #c5b5b559 !important;
    }

    .trending-image{
        height: 100px;
    }
    .trending-item{
        float: start;
        width: 20%;
        
    }
    .trending-wrapper{
        margin: 30px;
    }

    .detail-img{
        height: 300px;
    }



</style>

</html>