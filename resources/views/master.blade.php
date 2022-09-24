<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Commerce Project</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
{{View::make('header')}}
@yield("content")
{{View::make('footer')}}
</body>

<style>
    .custom-login {
        height: 80%;
    }

    .img-slider {
        height: 300px !important;
        top: 100px;
    }

    .custom-product{
        height:800px;
    }
    .carousel-inner{
        padding:120px;
    }
    .slider-text{
        background-color:#35443585;
    }

    .trending-image{
        height:100px;
        margin-top:20px;
    }

    .trending-item{
        float:left;
        width: 20%;
    }

    .trending-wrapper{
        margin-left: 10px;
    }

    .img-detail{
        margin-right: 70%;
        height:600px;
    }

    .details{
        margin-right: 200px;
    }
    .cart-list-divider{
        border-bottom:1px solid #ccc;
        margin-bottom:20px;
        padding-bottom:30px;
    }

    .a{
        color:white;
    }
    </style>
</html>
