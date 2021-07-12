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

    @auth
        <style>
            input[type="h1"]{
                position: absolute;
                left: 68%;
                margin: -10px 10px   ;
            }
        </style>
        <h1 style="text-align: center"> here you can controller in arm robot</h1>
@endauth

</body>
</html>
<style>
    input[type="range"] {

        width:400px;
        opacity:1 ;
        align-content: center;
        position: absolute;
        left: 50%;
        margin: -38px 0 0 -100px;
        background: linear-gradient(to right, firebrick 100%, #82CFD0 100%, #fff 100%, #fff 100%);
        border: solid 1px #82CFD0;
        border-radius: 8px;
        height: 7px;
        outline: none;
        -webkit-appearance: none;

    }
    input[type="number"] {

        position: absolute;
        left: 68%;
        margin: -43px 5px  ;
        width: 50px;
        border-radius: 9px;
        text-align: center;
    }

    .header {
        text-align: center;
        margin: 0 350px 0 0;
    }

</style>
@auth()
    <div>

        <div class="header">
            <h2> Engine 1 :</h2>

        </div>

        <input type="range" name="amountRange1" min="0" max="90" value="0" oninput="this.form.amountInput1.value=this.value" />
        <input type="number" name="amountInput1" min="0" max="90" value="0" oninput="this.form.amountRange1.value=this.value" />

        <br>
        <div class="header">
            <h2> Engine 2 :</h2>

        </div>
        <input type="range" name="amountRange2" min="0" max="90" value="0" oninput="this.form.amountInput2.value=this.value" />
        <input type="number" name="amountInput2" min="0" max="90" value="0" oninput="this.form.amountRange2.value=this.value" />

        <br>
        <div class="header">
            <h2> Engine 3 :</h2>

        </div>
        <input type="range" name="amountRange3" min="0" max="90" value="0" oninput="this.form.amountInput3.value=this.value" />
        <input type="number" name="amountInput3" min="0" max="90" value="0" oninput="this.form.amountRange3.value=this.value" />

        <br>
        <div class="header">
            <h2> Engine 4 :</h2>

        </div>
        <input type="range" name="amountRange4" min="0" max="90" value="0" oninput="this.form.amountInput4.value=this.value" />
        <input type="number" name="amountInput4" min="0" max="90" value="0" oninput="this.form.amountRange4.value=this.value" />


        <br>
        <div class="header">
            <h2> Engine 5 :</h2>

        </div>
        <input type="range" name="amountRange5" min="0" max="90" value="0" oninput="this.form.amountInput5.value=this.value" />
        <input type="number" name="amountInput5" min="0" max="90" value="0" oninput="this.form.amountRange5.value=this.value" />

        <br>
        <div class="header">
            <h2> Engine 6 :</h2>

        </div>
        <input type="range" name="amountRange6" min="0" max="90" value="0" oninput="this.form.amountInput6.value=this.value" />
        <input type="number" name="amountInput6" min="0" max="90" value="0" oninput="this.form.amountRange6.value=this.value" />
        <br>
        <button class="button" >

            SAVE
        </button>

        </form>

    </div>

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
    <h2> If You Want Connect the control base
        <br>please Click Control base <br> <h0>↓</h0></h2>
    <form action="/add">
        <button class="button" >
            Control base

        </button>
    </form>
@endauth

