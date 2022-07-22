  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/front.css')}}"/>
    <title>{{ $title }}</title>
    <script src="{{ asset('js/my-header.js') }}"></script>
    <script src="{{ asset('js/login.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>
    <script src="{{ asset('js/jquery-3.6.0.js') }}"></script>
    {{ $slot }}
  </head>
