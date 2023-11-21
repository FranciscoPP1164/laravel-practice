<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fruits</title>
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
            margin-top: .4rem
        }

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
    <h1>Welcome to fruits</h1>

    {{-- @if ($count === 0)
        <p>there are no registered fruits</p>
    @else
        @foreach ($fruits as $fruit)
            <div class="fruit-card">
                <h3>{{$fruit->name}}</h3>
                <p>{{$fruit->price}}</p>
                <i>{{$fruit->stock}}</i>
            </div>
        @endforeach
    @endif --}}

    <ul class="fruit-list">
        @forelse ($fruits as $fruit)
    
            {{-- @continue($fruit->price >= 1000) --}}
            <li class="fruit-card">
                <h3>{{$fruit->name}}</h3>
                <p @class(['expensive-price' => $fruit->price >= 1000])>{{$fruit->price}}</p>
                <i>{{$fruit->stock}}</i>

                <form action="{{route('fruits.destroy', ['id'=>$fruit->id])}}" method="POST">
                    @method('DELETE')
                    <input type="submit" value="ELIMINAR">
                </form>
            </li>
        
            {{-- @break($fruit->price >= 2000) --}}
        @empty
            <p>there are no registered fruits</p>
        @endforelse
    </ul>

    <h2>Create a new fruit</h2>
    <form action="{{route('fruits.store')}}" method="POST" class="form-create">
        <label for="fruitName">Name</label>
        <input type="text" id="fruitName" name="name" placeholder="Name of fruit">
        
        <label for="fruitPrice">Price</label>
        <input type="number" id="fruitPrice" name="price" placeholder="Price of fruit">
        
        <label for="fruitStock">Stock</label>
        <input type="number" id="fruitStock" name="stock" placeholder="Stock of fruit">

        <input type="submit" value="CREATE">
    </form>
</body>
</html>
