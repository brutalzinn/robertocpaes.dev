@include('footer')
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Header</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('/css/style.css') }}" />
    <script src=""></script>
</head>
<body>
<ul>
  <li><a href="#">Contact</a></li>
  <li><a href="#">Articles</a></li>
  <li><a class="active" href="{{ url('/welcome') }}">Home</a></li>
  <h1 class="signature">Garrett Rose</h1>
</ul>
</body>
</html>
