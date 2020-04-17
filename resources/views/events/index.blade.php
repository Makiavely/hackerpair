<!doctype html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome to HackerPair</title>
</head>

<body>

<ul>
    @foreach ($events as $event)
    <li>
        {{ $event }}

        @if (strpos($event, 'Laravel') !== false)
        (sweet framework!)

        @endif
    </li>
    @endforeach
</ul>

<ul>
    @foreach ($events as $event)
    <li>
        {{ $event }}

        @if (strpos($event, 'Laravel') !== false)
        (sweet framework!)

        @elseif (strpos($event, 'Raspberry') !== false)
        (love me some Raspberry Pi!)

        @else
        (don't know much about this one!)

        @endif
    </li>
    @endforeach
</ul>

<table>
    @foreach ($events as $event)
         @include('partials._row', ['event' => $event])
    @endforeach
</table>


</body>
</html>
