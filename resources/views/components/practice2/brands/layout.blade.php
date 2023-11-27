<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$section}}</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header class="bg-gray-50 min-w-full h-20 px-12 flex flex-row justify-between items-center shadow">
        <a href="{{route("practice2.$section.index")}}" class="text-3xl text-orange-400 transition-all hover:text-4xl active:text-orange-600">{{ucfirst($section)}}</a>
        <div class="flex flex-row items-center gap-x-16 text-xl text-orange-400">
            <a href="{{route("practice2.$section.index")}}" class="transition-all hover:text-2xl active:text-orange-600">{{ucfirst($section)}}</a>
            <a href="{{route("practice2.$section.trash")}}" class="transition-all hover:text-2xl active:text-orange-600">Trash</a>
        </div>
    </header>
    <main>
        {{ $slot }}
    </main>
</body>
</html>