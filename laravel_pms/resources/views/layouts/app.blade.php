<html>
{{-- <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head> --}}

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="{{asset('images\favicon.svg')}}" type="image/x-icon" />
  <title>PMS</title>
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/css/lineicons.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/css/materialdesignicons.min.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/css/fullcalendar.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
</head>

<body>

  @yield('body')

  @include('includes.footer')

  @include('includes.scriptfile')
</body>

</html>