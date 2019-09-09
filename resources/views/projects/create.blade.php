<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h2>Create Project</h2>

	<form method="post" action="/projects">
		{{ csrf_field() }}
		<div>
			
			<label>Project Title</label>
			<input type="text" name="title">

		</div>

		<div>
			
			<label>Project description</label>
			<textarea name="description" ></textarea>

		</div>

		<div>
			
			<input type="submit" value="submit">

		</div>

	</form>


</body>
</html>