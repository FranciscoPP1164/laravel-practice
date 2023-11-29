<x-practice2.layout section='brands'>
  <form action="{{route('practice2.brands.store')}}" method="POST">
    @csrf
    <label for="">brand</label>
    <input type="text" name="brand">
    @error('brand')
      <i>{{$message}}</i>
    @enderror

    <label for="">owner</label>
    <input type="text" name="owner">
    @error('owner')
      <i>{{$message}}</i>
    @enderror

    <button type="submit">Save</button>
  </form>
</x-practice2.layout>