<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf_token" content="{{csrf_token()}}">
    <link href="{{ elixir('css/master.css') }}" rel="stylesheet">
</head>
<body>
    <router-view></router-view>
</body>
<script src="{{ elixir('js/master.js') }}"></script>
</html>
