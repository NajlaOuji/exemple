<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>

<table>
<thead>
<th>Nom</th>

<th>Price</th>
<th>description</th>
<th>Action</th>
</thead>

<tbody>
@foreach($products as $product)
<tr>
<td>{{$product->name}}</td>
<td>{{$product->price}}</td>
<td>{{$product->description}}</td>
<td></td>
</tr>
@endforeach
</tbody>


</table>

</body>
</html>