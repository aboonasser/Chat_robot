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

<style>

    .button {

        margin-left: 46%;
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
</h1>
<h1 style="text-align: center"><br><br>

    Enter Home to the start  <br> <h0 style="font-size: 70px;">↓</h0></h1>
</form><br><br><br>
<form action="/">
    <button class="button" >
        Home    </button>
</form>
</div>
