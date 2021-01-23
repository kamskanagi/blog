<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Todo A</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >

     <title>{{config('app.name')}}</title>
    </head>
    <body >
        @include('include.navbar')
        <div class="container">

            @if(Request::is('/'))
            @include('include.showcase')
            @endif

            <div class="row">

                <div class="col-md-8 col-lg-8">
                        @yield('content')
                </div>
                
                <div class="col-md-4 col-lg-4">
                        @include('include.sidebar')
                </div>

            </div>
        </div>
        @include('include.footer') 
    </body>
</html>
