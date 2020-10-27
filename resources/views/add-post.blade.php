<!DOCTYPE html>
<html>
<head>
	<title>Add Post</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

	<section style="padding-top: 60px;">
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3">
				<div class="card">
					<div class="card-header">
						Add Post <a href="{{URL::to('/posts')}}" class="btn btn-warning">View All Post</a>
					</div>
					<div class="card-body">
						@if(Session::has('message'))
						<div class="alert alert-success" role="alert">
							{{Session::get('message')}}
							
						</div>
						@endif
						<form method="POST" action="{{route('post.create')}}">
							@csrf
							<div class="form-group">
							<label for="title">Post Title</label>
							<input type="text" name="title" class="form-control" placeholder="Enter Your post">
							</div>

							<div class="form-group">
							<label for="body">Post Description</label>
							<textarea name="body" class="form-control" rows="3">
								
							</textarea>
						</div>
							<div class="form-group">
								<input type="submit" name="btn" value="Add Post" class="btn btn-success">
							</div>
						</form>
					</div>
				</div>
			</div>
			</div>
		</div>
	</section>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>