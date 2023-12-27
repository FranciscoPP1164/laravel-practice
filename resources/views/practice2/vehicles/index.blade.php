<x-practice2.layout section="vehicles">
  <table class="w-full shadow-md rounded-md table-fixed">
    <thead class="bg-orange-400 text-center">
      <tr class="text-white text-lg font-medium">
        <td class="py-1 rounded-tl-md">Model</td>
        <td class="py-1">Number of wheels</td>
        <td class="py-1">Transmision</td>
        <td class="py-1">Gasoline capacity</td>
        <td class="py-1">Rate</td>
        <td class="py-1 rounded-tr-md">Options</td>
      </tr>
    </thead>
    <tbody>
      @foreach ($vehicles as $vehicle)
        <tr>
          <td class="p-2 border-r border-gray-200">{{$vehicle->model}}</td>
          <td class="p-2 border-r border-gray-200">{{$vehicle->number_of_wheels}}</td>
          <td class="p-2 border-r border-gray-200">{{$vehicle->transmission}}</td>
          <td class="p-2 border-r border-gray-200">{{$vehicle->gasoline_capacity}}</td>
          <td class="p-2 border-r border-gray-200">{{$vehicle->rate}}</td>
          <td class="p-2 border-l border-gray-200">
            <div class="flex items-center justify-center gap-x-3">
              <a href="{{route('practice2.vehicles.show', [$vehicle])}}" class="w-6 h-6 flex justify-center items-center rounded shadow-md fill-blue-600 active:bg-blue-600 active:fill-white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="h-4">
                  <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/>
                </svg>
              </a>
              <a href="{{route('practice2.vehicles.edit', [$vehicle])}}" class="w-6 h-6 flex justify-center items-center rounded shadow-md fill-blue-600 active:bg-blue-600 active:fill-white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="h-4">
                  <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"/>
                </svg>
              </a>
              <form action="{{route('practice2.vehicles.destroy', [$vehicle])}}" method="POST" class="w-6 h-6 rounded shadow-md fill-red-500 active:bg-red-500 active:fill-white">
                @csrf
                @method('DELETE')
                <button type="submit" class="h-full w-full flex justify-center items-center">
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

  <table class="shadow-md rounded mt-4 table-fixed w-full">
    <tr class="flex flex-col md:table-row gap-y-1">
      <form action="{{route('practice2.vehicles.store')}}" method="POST">
        <td class="p-2">
          <div class="flex flex-col">
            <input type="text" name="vehicle" class="bg-gray-100 rounded-md p-1 outline-none focus:ring-1 focus:ring-gray-300" placeholder="vehicle" value="{{old('vehicle')}}">
            @error('vehicle')
              <i>{{$message}}</i>
            @enderror
          </div>
        </td>

        <td class="p-2">
          <div class="flex flex-col">
            <input type="text" name="vehicle" class="bg-gray-100 rounded-md p-1 outline-none focus:ring-1 focus:ring-gray-300" placeholder="vehicle" value="{{old('vehicle')}}">
            @error('vehicle')
              <i>{{$message}}</i>
            @enderror
          </div>
        </td>

        <td class="p-2">
          <div class="flex flex-col">
            <input type="text" name="vehicle" class="bg-gray-100 rounded-md p-1 outline-none focus:ring-1 focus:ring-gray-300" placeholder="vehicle" value="{{old('vehicle')}}">
            @error('vehicle')
              <i>{{$message}}</i>
            @enderror
          </div>
        </td>

        <td class="p-2">
          <div class="flex flex-col">
            <input type="text" name="vehicle" class="bg-gray-100 rounded-md p-1 outline-none focus:ring-1 focus:ring-gray-300" placeholder="vehicle" value="{{old('vehicle')}}">
            @error('vehicle')
              <i>{{$message}}</i>
            @enderror
          </div>
        </td>

        <td class="p-2">
          <div class="flex flex-col">
            <input type="text" name="owner" class="bg-gray-100 rounded-md p-1 outline-none focus:ring-1 focus:ring-gray-300" placeholder="Owner" value="{{old('owner')}}">
            @error('owner')
              <i>{{$message}}</i>
            @enderror
          </div>
        </td>

        <td>
          <div class="flex flex-col justify-center items-center mb-1">
            <button type="submit" class="hidden md:static w-8 h-8 bg-blue-600 fill-white rounded-full md:flex justify-center items-center">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-6">
                <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
              </svg>
            </button>
            <button type="submit" class="md:hidden py-1 px-2 bg-blue-600 text-white text-xl rounded flex justify-center items-center">
              Save
            </button>
          </div>
        </td>
      
      </form>
    </tr>
  </table>
</x-practice2.layout>