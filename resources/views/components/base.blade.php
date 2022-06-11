<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        section > h1, p {
            box-sizing: border-box;
            color: black;
        }
    </style>
</head>
<body>
    <nav class="bg-gray-100 px-8 py-4 text-gray-70 flex items-center justify-between">
        <span class="font-bold text-2xl">Brand</span>
        <span>hello, {{ $name }}</span>
    </nav>
    <section class="p-12 max-auto max-w-2wl text-gray-100">
        {{ $content }}
    </section>
</body>
</html>