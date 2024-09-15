<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
</head>
<body>
    <h1>Create Product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method='post' action="{{route('product.store')}}">
        @csrf
        @method('post')
        <div>
            <label for="">Name</label>
            <input type="name" name='name' placeholder='Name'/>
        </div>
        <div>
            <label for="">Quantity</label>
            <input type="text" name='quantity' placeholder='Quantity'/>
        </div>
        
        <div>
            <label for="">Price</label>
            <input type="text" name='price' placeholder='Price'/>
        </div>
        <div>
            <label for="">Description</label>
            <input type="text" name='description' placeholder='Description'/>
        </div>
        <div>
            <input type='submit' value='Save A New Product'>
        </div>
    </form>
</body>
</html>