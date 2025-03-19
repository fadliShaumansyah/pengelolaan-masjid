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
    <div class="container mx-auto px-6 py-10 mt-20 mb-40 rounded-b-md bg-gray-100 ">
    <div x-data="{ words: ['Discover Quran', 'Feel the Beat', 'Explore the quran', 'in your life'], index: 0 }"
        x-init="setInterval(() => index = (index + 1) % words.length, 3000)"
        class="text-center">
        
        <h1 class="text-5xl font-bold transition-all duration-500 ease-in-out"
            x-text="words[index]"
            x-transition.opacity.scale></h1>
        
        <p class="mt-4 text-lg text-gray-600">"أنا مسلم قبل كل شيء"</p>
    </div>

    </div>
    <x-footer/>
</body>
</html>