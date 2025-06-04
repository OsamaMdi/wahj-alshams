<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

@include('user.navbar')


@yield('Contact')

@include('user.footr')
@stack('scripts')

</body>
</html>
