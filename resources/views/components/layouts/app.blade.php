<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/app.css">
    @vite('resources/css/app.css')

    <title>{{ $title ?? 'Page Title' }}</title>
</head>

<body class="flex">
    <nav>
        <a wire:navigate href="/" @class(['current'=> request()->is('/')])>
            Todos
        </a>
        <a wire:navigate href="/counter" @class(['current'=> request()->is('counter')])>
            Counter
        </a>
        <a wire:navigate href="/posts" @class(['current'=> request()->is('posts')])>
            Posts
        </a>
        <a wire:navigate href="/create" @class(['current'=> request()->is('create')])>
            Create Post
        </a>
    </nav>
    <div class="content">
        {{ $slot }}
    </div>
</body>












</html>