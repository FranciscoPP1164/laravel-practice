<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$section}}</title>
    @vite('resources/css/app.css')
    @vite('resources/js/open-close-menu.js')
</head>
<body>
    <header class="bg-white sticky top-0 min-w-full h-20 px-12 flex justify-center items-center shadow z-50">
        <button class="absolute left-8 p-1 rounded-md hover:bg-gray-200 active:ring-1 active:ring-gray-300" id="openCloseNavigationMenuButton">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-7 w-7 fill-orange-400">
                <path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/>
            </svg>
        </button>
        <a href="{{route("practice2.$section.index")}}" class="text-4xl font-medium text-orange-400 text-center tracking-wider transition-all hover:tracking-widest">{{strtoupper($section)}}</a>
    </header>
    <nav class="fixed h-full w-full">
        <div class="absolute h-full w-full -left-full transition-all " id="navigationMenu">
            <ul class="w-4/5 h-full font-medium flex flex-col bg-gray-700">
                <li @class(['relative', 'flex', 'justify-between', 'items-center', 'bg-orange-400'=>$section==='brands', 'hover:bg-gray-800'=>$section!=='brands'])>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="h-5 fill-white pl-3">
                        <path d="M284.3 11.7c-15.6-15.6-40.9-15.6-56.6 0l-216 216c-15.6 15.6-15.6 40.9 0 56.6l216 216c15.6 15.6 40.9 15.6 56.6 0l216-216c15.6-15.6 15.6-40.9 0-56.6l-216-216z"/>
                    </svg>
                    <a href="{{route("practice2.brands.index")}}" class="w-full h-full py-2 px-3 text-white">Brands</a>
                    <a href="{{route("practice2.brands.trash")}}" class="absolute z-50 right-3 p-1 rounded active:bg-orange-500">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-5 fill-white">
                            <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                        </svg>
                    </a>
                </li>
                <li @class(['relative', 'flex', 'justify-between', 'items-center', 'bg-orange-400'=>$section==='vehicles', 'hover:bg-gray-800'=>$section!=='vehicles'])>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="h-5 fill-white pl-3">
                        <path d="M135.2 117.4L109.1 192H402.9l-26.1-74.6C372.3 104.6 360.2 96 346.6 96H165.4c-13.6 0-25.7 8.6-30.2 21.4zM39.6 196.8L74.8 96.3C88.3 57.8 124.6 32 165.4 32H346.6c40.8 0 77.1 25.8 90.6 64.3l35.2 100.5c23.2 9.6 39.6 32.5 39.6 59.2V400v48c0 17.7-14.3 32-32 32H448c-17.7 0-32-14.3-32-32V400H96v48c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V400 256c0-26.7 16.4-49.6 39.6-59.2zM128 288a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm288 32a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/>
                    </svg>
                    <a href="{{route("practice2.vehicles.index")}}" class="w-full h-full py-2 px-3 text-white">Vehicles</a>
                    <a href="{{route("practice2.vehicles.trash")}}" class="absolute z-50 right-3 p-1 rounded active:bg-orange-500">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-5 fill-white">
                            <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                        </svg>
                    </a>
                </li>
                <li @class(['relative', 'flex', 'justify-between', 'items-center', 'bg-orange-400'=>$section==='concessionaires', 'hover:bg-gray-800'=>$section!=='concessionaires'])>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="h-5 fill-white pl-3">
                        <path d="M36.8 192H603.2c20.3 0 36.8-16.5 36.8-36.8c0-7.3-2.2-14.4-6.2-20.4L558.2 21.4C549.3 8 534.4 0 518.3 0H121.7c-16 0-31 8-39.9 21.4L6.2 134.7c-4 6.1-6.2 13.2-6.2 20.4C0 175.5 16.5 192 36.8 192zM64 224V384v80c0 26.5 21.5 48 48 48H336c26.5 0 48-21.5 48-48V384 224H320V384H128V224H64zm448 0V480c0 17.7 14.3 32 32 32s32-14.3 32-32V224H512z"/>
                    </svg>
                    <a href="{{route("practice2.concessionaires.index")}}" class="w-full h-full py-2 px-3 text-white">Concessionaires</a>
                    <a href="{{route("practice2.concessionaires.trash")}}" class="absolute z-50 right-3 p-1 rounded active:bg-orange-500">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-5 fill-white">
                            <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <main>
        {{ $slot }}
    </main>
</body>
</html>