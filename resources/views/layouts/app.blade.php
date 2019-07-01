<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PardonMe</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> 
        
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        @yield('head')

    </head>
    <body>
        <div id="app">
            @yield('header')

            @include('layouts.nav')

            @if(Session::has('flash_message'))
              <div alert class="alert alert-dismissible alert-success">
                {{ Session::get('flash_message') }}
              </div>
            @endif
            @if(Session::has('flash_error'))
              <div alert class="alert alert-dismissible alert-danger">
                {{ Session::get('flash_error') }}
              </div>
            @endif
            @yield('content')
            
            @include('layouts.footer')
        </div>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>   
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
