<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Todo Manager' }}</title>
    @include('partials.header')
</head>
<body>
    <h1>Todos</h1>
    <hr/>
    {{ $slot }}

    @include('partials.footer')

    @include('partials.footer-scripts')
</body>
</html>
