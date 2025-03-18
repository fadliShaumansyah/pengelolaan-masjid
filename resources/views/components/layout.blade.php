<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
    <x-navbar/>
    <div class="container mx-auto px-6 py-10 mt-20 mb-40 rounded-b-md bg-gray-200">
       {{$slot}}
    </div>
    <x-footer/>
</body>
</html>