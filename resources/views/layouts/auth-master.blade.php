<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Application</title>
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
    <style>
        body{
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-size:contain;
            background-position: center;
            background-image: url({{url('assets/images/walls2.jpg')}})

        }

        .form-container{
            width: 400px;
            background-color: white;
            padding: 2em;
        }
    </style>
</head>
<body>

<main class="form-container">
    @yield('content')
</main>
<script src="{{url('assets/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
