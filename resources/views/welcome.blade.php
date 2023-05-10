<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite("resources/css/app.css")

    </head>
    <body class="container flex flex-col items-center justify-center gap-4 mx-auto mt-16 antialiased">

       @foreach ($posts as $post)
          <section class=" w-1/2">
            <a href="/posts/{{ $post->id }}" class="text-3xl font-bold border-b-2 border-red-700">{{ $post->title }}</a>
            <p class="">{{ $post->description }}</p>
          </section>
       @endforeach
    </body>
</html>
