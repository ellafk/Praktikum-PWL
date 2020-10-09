<html>
<h1>MENAMPILKAN DATABASE DARI DATABASE</h1>
<h3>Nama	: Ella Fitri Kusumaningrum</h3>
<h3>Kelas	: MI-2E</h3>
<h3>NIM		: 1931710023</h3>
<table border="1"></table>
	<tr>
		<th>id</th>
		<th>Title</th>
		<th>Content</th>
		<th>Image</th>
	</tr>
	<tr>
		<td>{{$art->id}}</td>
		<td>{{$art->title}}</td>
		<td>{{$art->content}}</td>
		<td>{{$art->featured_image}}</td>
	</tr>
</table>
</html>