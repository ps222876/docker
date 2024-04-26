<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($products as $product)
    <p>{{ $product->name }}</p>
    <p>{{ $product->description }}</p>
    <p>{{ $product->price }}</p>
    <p>{{ $product->image }}</p>
    <p>{{ $product->color }}</p>
    <p>{{ $product->height_cm }}</p>
    <p>{{ $product->width_cm }}</p>
    <p>{{ $product->depth_cm }}</p>
    <p>{{ $product->weight_gr }}</p>
@endforeach
</body>
</html>

