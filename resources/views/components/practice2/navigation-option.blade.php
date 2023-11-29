<li @class(['relative', 'flex', 'items-center', 'md:w-56', 'bg-gray-200'=>$actualSection===$section, 'hover:bg-gray-200'=>$actualSection!==$section])>
    <a href="{{route("practice2.$section.index")}}" class="text-lg flex items-center gap-x-3 w-full h-full py-3 px-3 text-gray-500">
        {{$slot}}
        {{ucfirst($section)}}
    </a>
    <a href="{{route("practice2.$section.trash")}}" class="absolute z-50 right-3 p-1 rounded active:bg-gray-400">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-4 fill-gray-500">
            <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/>
        </svg>
    </a>
</li>