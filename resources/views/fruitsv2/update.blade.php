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
  <h2>Update a fruit</h2>
  <form action="{{route('v2.fruits.update', ['fruit'=>$fruit->id])}}" method="POST" class="form-create">
    @method('PUT')
    <label for="fruitName">Name</label>
    <input type="text" id="fruitName" name="name" placeholder="Name of fruit" value="{{$fruit->name}}">
    
    <label for="fruitPrice">Price</label>
    <input type="number" id="fruitPrice" name="price" placeholder="Price of fruit" value="{{$fruit->price}}">
    
    <label for="fruitStock">Stock</label>
    <input type="number" id="fruitStock" name="stock" placeholder="Stock of fruit" value="{{$fruit->stock}}">
    
    <input type="submit" value="UPDATE">
  </form>
</body>
</html>