<!DOCTYPE html>
<html>
<head>
	<title>ADD prodect</title>
	{{-- bootstrap css link --}}
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1 class="mb-3">Add Product Form</h1>
		<form action="" method="POST" enctype="multipart/form-date">
			<div class="col-md-6">
				<label for="productName">ProductName</label>
				<input type="text" class="form-control" id="inputProductName" name="pname" placeholder="Enter Product Name">
			</div>
			<div class="col-md-6">
				<label for="price">ProductPrice</label>
				<input type="number" class="form-control" name="price" >
			</div>
			<div class="col-md-6">
				<label for="quantity">Product Quantity</label>
				<input type="number" class="form-control" name="quantity" >
			</div>
			<div class="col-md-6">
				<label for="descriptiion">Descriptiion</label>
				<textarea class="form-control" name="descriptiion" ></textarea>
			</div>
			<div class="col-md-6">
				<label for="image">Product Images</label>
				<input type="file" class="form-control" name="image" >
			</div>
			<div class="col-md-6">
				<label for="image">Add Product</label>
				<button type="submit" class="btn btn-primary" >Add Product</button>
			</div>
		</form>
	</div>

</body>
</html>