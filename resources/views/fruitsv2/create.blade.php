<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FruitsV2</title>

    <style>
      h2{
        margin-top: 2rem;
      }

      .form-create{
        width: 30%;
        display: flex;
        flex-direction: column;
      }

      form input{
        padding: .4rem;
        margin-bottom: .8rem;
      }
    </style>
  </head>
  <body>
    <h2>Create a new fruit</h2>
      <form action="{{route('v2.fruits.store')}}" method="POST" class="form-create">
        <label for="fruitName">Name</label>
        <input type="text" id="fruitName" name="name" placeholder="Name of fruit" value="{{old('name')}}">

        @error('name')
          <i>{{$message}}</i>
        @enderror
        
        <label for="fruitPrice">Price</label>
        <input type="number" id="fruitPrice" name="price" placeholder="Price of fruit" value="{{old('price')}}">

        @error('price')
          <i>{{$message}}</i>
        @enderror
        
        <label for="fruitStock">Stock</label>
        <input type="number" id="fruitStock" name="stock" placeholder="Stock of fruit" value="{{old('stock')}}">

        @error('stock')
          <i>{{$message}}</i>
        @enderror
        
        <input type="submit" value="CREATE">
      </form>

      
  </body>
</html>