<!DOCTYPE html>
<html>
<head>
	<title>Update Product</title>
	{{-- bootstrap css link --}}
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1 class="mb-3">Update Product Form</h1>

		@if(Session::has('msg'))
		<div class="alert alert-success">
			{{Session::get('msg')}}
		</div>
		@endif

		<form action="{{route('updateproduct',$product->id)}}" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="col-md-6">
				<label for="productName">ProductName</label>
				<input type="text" class="form-control" id="inputProductName" name="pname" placeholder="Enter Product Name" value="{{$product->product_name}}">
			</div>
			<div class="col-md-6">
				<label for="price">ProductPrice</label>
				<input type="number" class="form-control" name="price" value="{{$product->product_price}}">
			</div>
			<div class="col-md-6">
				<label for="quantity">Product Quantity</label>
				<input type="number" class="form-control" name="quantity" value="{{$product->product_quantity}}">
			</div>
			<div class="col-md-6">
				<label for="descriptiion">Descriptiion</label>
				<textarea class="form-control" name="description" >{{$product->product_description}}</textarea>
			</div>
			<div class="col-md-6">
				<label for="image">Product Images</label>
				<input type="file" class="form-control" name="image" >
				<img src="{{asset('upload/products')}}/{{$product->product_image}}" alt="" width="60" style="padding: 2px;"><br>
			</div>
			<div class="col-md-6">
				<button type="submit" class="btn btn-primary" >Update Product</button>
			</div>
		</form>
	</div>

</body>
</html>