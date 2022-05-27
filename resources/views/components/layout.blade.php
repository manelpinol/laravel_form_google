<!-- resources/views/components/layout.blade.php -->

<html>
<head>
    <title>{{ $title ?? 'Todo Manager' }}</title>
</head>
<body>
<h1></h1>
{{ $slot }}
<x-flash></x-flash>
</body>
</html>
