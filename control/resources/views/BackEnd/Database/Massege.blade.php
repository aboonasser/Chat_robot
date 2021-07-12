
@extends('FrontEnd.Layouts.Main')


@section('content')
    <style>

        h2{
            color: brown;
            text-align: center;
            font-size: 40px;
        }
    </style>
    <h2 class="h1">
        SAVE IS SECCESSFUL

    </h2>
    <br>
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

    @endforeach
@endsection
