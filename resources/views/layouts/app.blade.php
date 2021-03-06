<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to HackerPair</title>
</head>
<body>

<div>
    @yield('content')
</div>

<div>
    @section('advertisement')
    <p>
        Score some HackerPair swag in our store!
    </p>
    @show
</div>

<table>
    @foreach ($events as $event)
         @include('partials._row', ['event' => $event])
    @endforeach
</table>


</body>
</html>
