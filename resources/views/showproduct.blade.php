<!DOCTYPE html>
<html>
<head>
	<title>Show Product</title>
	{{-- bootstrap css link --}}
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	{{-- icon link --}}
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
</head>
<body>
	<div class="container">
		<h1 class="text-info">Show Product</h1>
		<table class="table">
  <thead>
    <tr>
      <th scope="col">Product Name</th>
      <th scope="col">Product Price</th>
      <th scope="col">Product Quentity</th>
      <th scope="col">Product Description</th>
      <th scope="col">Product Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($showdata as $s)
   <tr>
   		<td>{{$s->product_name}}</td>
   		<td>{{$s->product_price}}</td>
   		<td>{{$s->product_quantity}}</td>
   		<td>{{$s->product_description}}</td>
   		<td><img src="{{asset('upload/products')}}/{{$s->product_image}}" width="50"></td>
   		<td><a href=""><button class="btn btn-primary"><i class="bi bi-pencil-square"></i></button></a>
   		<a href="" onclick="return confirm('are you sure?')"><button class="btn btn-danger"><i class="bi bi-trash-fill text-white"></i></button></a>
   		</td>
   </tr>
   @endforeach
  </tbody>
</table>
	</div>

</body>
</html>