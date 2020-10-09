
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="2">
		<tr>
			<td>
				ID
				<th>Title</th>
				<th>content</th>
				<th>imageUrl</th>
			</td>
		</tr>
		@foreach($lihat as $li)
		<tr>
			<td>{{$li -> id}}</td>
			<td>{{$li -> title}}</td>
			<td>{{$li -> content}}</td>
			<td>{{$li -> imageUrl}}</td>
		</tr>
		@endforeach
	</table>
</body>
</html>