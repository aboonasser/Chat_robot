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
@guest()
    <div style="padding-left:100px">
        <h2> Please login or register ig you want control Arm Robot</h2>

    </div>
@endguest



<form action="{{route('Arm.store')}}" method="POST">
    @csrf
<body>
    @auth
        <style>
            input[type="h1"]{
                position: absolute;
                left: 68%;
                margin: -10px 10px   ;
            }
        </style>
        <h1 style="text-align: center"> here you can controller in control base </h1>
@endauth

</body>
</html>
<style>

    .button1 {
        width:60%;
        position: center;
        display: inline-block;
        padding: 15px 25px;
        font-size: 24px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        outline: none;
        color: #fff;
        background-color: rgb(41, 125, 148);
        border: none;
        border-radius: 50%;
        box-shadow: 0 9px #262626;
    }

    .button1:hover {background-color: #008594}

    .button1:active {
        background-color: #02434b;
        box-shadow: 0 5px #262626;
        transform: translateY(4px);
    }



</style>

@auth()


    <div class="container"style="margin-top:2%;margin-left:13%;">
        <div class="row justify-content-start">
            <div class="col-5">

            </div>
            <div class="col-3"style="margin-left:-3%;">
                <input type="submit" name="Direction" value="Forword" class="button1" oninput="this.Direction.value=this.value">
            </div>
            <div class="col-3"style="margin-top:10%;margin-left:-6%;">
                <input type="submit" name="Direction" value="Right" class="button1" oninput="this.Direction.value=this.value">
            </div>
            <div class="col-3"style="margin-top:-5%;margin-left:20%;">
                <input type="submit" name="Direction" value="Left" class="button1" oninput="this.Direction.value=this.value">
            </div><div class="col-3"style="margin-top:-5%;margin-left:-6%;">
                <input type="submit" name="Direction" value="Stop" class="button1" oninput="this.Direction.value=this.value">
            </div>
        </div>

        <div class="col-3"style="margin-top:6%;margin-left:39%;">
            <input type="submit" name="Direction" value="Backword" class="button1" action="/show" oninput="this.Direction.value=this.value">
        </div>
        <br><br><br> <br>
    </div>
    </div>


        </form>

    </div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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


    h0{
        font-size: 50px;


    }
    h2{
        text-align: center;
    }
</style>
<h2> If You Want Connect the Arm Robot
    <br>please Click Control Arm <br> <h0>↓</h0></h2>
<form action="/arm">
    <button class="button" >
        Engines

    </button>
</form>
</body>
    <script>
        window.watsonAssistantChatOptions = {
            integrationID: "5aea6c9e-dd1d-44cc-a3e1-03b7593213af", // The ID of this integration.
            region: "eu-gb", // The region your integration is hosted in.
            serviceInstanceID: "3c6ca8de-4e12-4118-bc20-2940c55a8297", // The ID of your service instance.
            onLoad: function(instance) { instance.render(); }
        };
        setTimeout(function(){
            const t=document.createElement('script');
            t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
            document.head.appendChild(t);
        });
    </script>
@endauth

