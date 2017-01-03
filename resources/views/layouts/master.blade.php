<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::to('src/css/main.css') }}">



</head>
<body>
      @include('includes.header')
     <div class="container">
         @yield('content')
     </div>
      <!-- Latest compiled and minified JavaScript -->
      <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
      <script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js" ></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
      <link rel="stylesheet" href="{{ URL::to('src/js/app.js') }}">
</body>
</html>
