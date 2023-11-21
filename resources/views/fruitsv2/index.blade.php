<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>FruitsV2</title>
  <style>
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body{
      padding: 3rem;
    }

    .fruit-list{
      display: flex;
      gap: 2rem;
      list-style: none;
      margin-bottom: 1.5rem;
    }

    .fruit-card{
      padding: 1rem;
      border-radius: 10px;
      box-shadow: 0 0 10px 2px #ccc;
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif
    }

    .expensive-price{
      color: #d03
    }

    .fruit-card form input{
      border: none;
      outline: none;
      background: #f03;
      color: #eee;
      border-radius: .5rem;
      margin-top: .4rem;
      margin-bottom: 1rem;
      padding: .4rem;
    }

    a{
      text-decoration: none;
      background: #31d;
      color: #fff;
      padding: .6rem;
      border-radius: 10px;
    }
  </style>
  
</head>
<body>
  <h1>Welcome to fruits V2</h1>

  <ul class="fruit-list">
    @forelse ($fruits as $fruit)

        <li class="fruit-card">
            <h3>{{$fruit->name}}</h3>
            <p @class(['expensive-price' => $fruit->price >= 1000])>{{$fruit->price}}</p>
            <i>{{$fruit->stock}}</i>

            <form action="{{route('v2.fruits.destroy', ['fruit'=>$fruit->id])}}" method="POST">
                @method('DELETE')
                <input type="submit" value="ELIMINAR">
            </form>

            <a href="{{route('v2.fruits.show', ['fruit'=>$fruit->id])}}">View</a>

            <a href="{{route('v2.fruits.edit', ['fruit'=>$fruit->id])}}">Edit</a>
        </li>
    @empty
        <p>there are no registered fruits</p>
    @endforelse
  </ul>

  <a href="{{route('v2.fruits.create')}}">Create a fruit</a>
</body>
</html>