<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .topnav {
            overflow: hidden;
            background-color: #333;
        }

        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: #04AA6D;
            color: white;
        }





    </style>
</head>

<body style="background: darkgray">

<div class="topnav">
    <a class="active" href="/">Home</a>
    @guest
        <a href="/login">Login</a>
        <a href="/register">Register</a>
    @endguest
    @auth
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                    this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-jet-responsive-nav-link>
        </form>

        <a href="/user/profile">Profile</a>
    @endauth

</div>
<br><br>
@foreach ($calls   as $call)

    <style>
        .grid-container {
            display: grid;
            grid-template-columns: auto auto auto auto;
            grid-gap: 10px;
            background-color: darkblue;
            padding: 10px;
        }

        .grid-container > div {
            background-color: rgba(255, 255, 255, 0.8);
            text-align: center;
            padding: 20px 0;
            font-size: 30px;
        }

        .item1 {
            grid-column: 1 / span 2;
        }

    </style>


    <div class="grid-container">
        <div class="item1">  Username =>   {{$call->Name}} </div>
        <div class="item2">    Direction =>    {{ $call->Direction}} <br> </div>

    </div>
    <br>
    <br>
    <style>

        .button {

            margin-left: 45%;
            margin-bottom: 2%;
            display: inline-block;
            padding: 15px 25px;
            font-size: 24px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            outline: none;
            color: #fff;
            background-color: #365d8c;
            border: none;
            border-radius: 15px;
            box-shadow: 0 9px #262626;
        }

        .button:hover {background-color: #1d5aa5}

        .button:active {
            background-color: #1d5aa5;
            box-shadow: 0 5px #262626;
            transform: translateY(4px);
        }




    </style>

    <div class="container"style="margin-top:2%;margin-left:5px;">
        <div class="row justify-content-start">
            <div class="col-5">

            </div>

            <div class="col-3"style="margin-left:-3%;">
                <form action="/add">
                    <button class="button">
                        Back
                    </button>
                </form>
            </div>
            <div class="col-3"style="margin-left:-3%;">
                <form action="/">
                    <button class="button">
                        Home
                    </button>
                </form>
            </div>
        </div>
    </div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</body>
</html>



@endforeach
