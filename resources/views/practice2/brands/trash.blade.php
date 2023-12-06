<x-practice2.layout section="brands">
  <table class="w-full shadow-md rounded-md table-fixed">
    <thead class="bg-orange-400 text-center">
      <tr class="text-white text-lg font-medium">
        <td class="py-1 rounded-tl-md">Brand</td>
        <td class="py-1">Owner</td>
        <td class="py-1 rounded-tr-md">Options</td>
      </tr>
    </thead>
    <tbody>
      @foreach ($brands as $brand)
        <tr>
          <td class="p-2 border-r border-gray-200">{{$brand->brand}}</td>
          <td class="p-2">{{$brand->owner}}</td>
          <td class="p-2 border-l border-gray-200">
            <div class="flex items-center justify-center gap-x-3">
              <form action="{{route('practice2.brands.restore', [$brand])}}" method="POST" class="w-6 h-6 flex justify-center items-center rounded shadow-md fill-blue-600 active:bg-blue-600 active:fill-white">
                @csrf
                @method('PATCH')
                <button type="submit">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-4">
                    <path d="M163.8 0H284.2c12.1 0 23.2 6.8 28.6 17.7L320 32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 96 0 81.7 0 64S14.3 32 32 32h96l7.2-14.3C140.6 6.8 151.7 0 163.8 0zM32 128H416L394.8 467c-1.6 25.3-22.6 45-47.9 45H101.1c-25.3 0-46.3-19.7-47.9-45L32 128zm192 64c-6.4 0-12.5 2.5-17 7l-80 80c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l39-39V408c0 13.3 10.7 24 24 24s24-10.7 24-24V273.9l39 39c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-80-80c-4.5-4.5-10.6-7-17-7z"/>
                  </svg>
                </button>
              </form>
              <form action="{{route('practice2.brands.destroy', [$brand])}}" method="POST" class="w-6 h-6 flex justify-center items-center rounded shadow-md fill-red-500 active:bg-red-500 active:fill-white">
                @csrf
                @method('DELETE')
                <button type="submit">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-4">
                    <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                  </svg>
                </button>
              </form>
            </div>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</x-practice2.layout>