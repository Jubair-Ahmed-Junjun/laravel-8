<!DOCTYPE html>
<html>
<head>
	<title>All Post</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

	<section style="padding-top: 60px;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						All Post <a href="{{URL::to('/add-post')}}" class="btn btn-warning">Add New Post</a>
					</div>
					<div class="card-body">
						@if(Session::has('message'))
						<div class="alert alert-success" role="alert">
							{{Session::get('message')}}
							
						</div>
						@endif
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Id</th>
									<th>Post</th>
									<th>Post Description</th>
									<th>Details</th>
								</tr>
							</thead>
							<tbody>
								@foreach($posts as $post)
								<tr>
									<td>{{$post->id}}</td>
									<td>{{$post->title}}</td>
									<td>{{$post->body}}</td>
									<td>
										<a href="{{URL::to('/posts'.$post->id)}}" class="btn btn-info">Post Details</a>
										<a href="{{URL::to('/edit-posts'.$post->id)}}" class="btn btn-primary">Edit</a>
										<a href="{{URL::to('/delete-posts'.$post->id)}}" class="btn btn-danger">Delete</a>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
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