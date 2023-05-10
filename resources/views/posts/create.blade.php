<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite("resources/js/app.js")

    </head>
    <body class="container flex flex-col items-center justify-center gap-4 mx-auto mt-16 antialiased">
        <h1 class="text-3xl font-bold">Crea un Nuevo Post</h1>
        <form action="/posts" method="POST" class="w-1/2">
            @csrf
            <div class="">
                <label for="">Title:</label>
                <input type="text" name="title" class="block border border-gray-600 py-2 px-3 rounded rounded-lg w-full my-3" >
            </div>
            <div class="">
                <label for="">Description:</label>
                <textarea class="block border border-gray-600 py-2 px-3 rounded rounded-lg w-full my-3" name="description" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="">
                <button class="bg-blue-500 text-white rounded rounded-lg py-2 px-4" type="submit">Crear</button>
            </div>
        </form>
    </body>
</html>
