<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     @vite("resources/js/app.js")
</head>
<body class="p-4 ">
    <h1 class="text-3xl font-bold text-blue-500">
        {{ $post->title }}
    </h1>
    <p>
        {{ $post->description }}
    </p>
    <a href="/">Atrás << </a>
</body>
</html>
