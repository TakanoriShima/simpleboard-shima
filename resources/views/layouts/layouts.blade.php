<html>
    <head>
        <title>@yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @if(app('env') == 'production')
            <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        @else
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @endif
    </head>
    <body>
        @component('components.header')
        @endcomponent
        <div class="container pt-5 pb-5">
            @yield('content')
        </div>

        @component('components.footer')
        @endcomponent

        <script src="{{ mix('js/app.js') }}"></script>
        @if(app('env') == 'production')
            <script src="{{ secure_asset('js/app.js') }}"></script>
        @else
            <script src="{{ asset('js/app.js') }}"></script>
        @endif
    </body>
</html> 