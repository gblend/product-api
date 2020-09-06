<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<x-sidebar title="My Sidebar" :info="$info">
    <x-slot name="something">Slot Tag</x-slot>
    <div>Content Slot</div>
</x-sidebar>
{{--<x-slot name="$something">Slot space slot</x-slot>--}}
</body>
</html>
