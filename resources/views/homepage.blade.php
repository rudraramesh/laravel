<!DOCTYPE html>
<html>
<head>
	<title>User Home</title>
	{{-- bootstrap css link --}}
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
		<div class="container">
			<div class="row row-cols-1 row-cols-md-3 g-4">
				@foreach($show as $a)
	  <div class="col shadow">
	    <div class="card shadow">
	      <img src="{{asset('upload/products')}}/{{$a->product_image}}" class="card-img-top" alt="..." title="{{$a->product_name}}" height="300">
	      <div class="card-body">
	        <h5 class="card-title">{{$a->product_name}}</h5>
	      </div>
	    </div>
	  </div>
	  @endforeach
	</div>
</div>
</body>
</html>