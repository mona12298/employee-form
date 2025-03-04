<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>社員管理システム</title>
    <link rel="stylesheet" href="{{ asset('sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('common.css') }}">
    @yield('css')
</head>
<body>
    @foreach ($errors->all() as $error)
    {{ $error }}
    @endforeach
    
    @yield('content')
</body>
</html>