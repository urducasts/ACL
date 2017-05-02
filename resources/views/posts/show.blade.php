<!DOCTYPE html>
<html>
<head>
	<title>Posts</title>
</head>
<body>
	<h1>{{ $post->title }}</h1>

	@can('update-post', $post)
		<a href="#">Update This Post</a>
	@endcan
</body>
</html>