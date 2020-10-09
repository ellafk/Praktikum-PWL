<!DOCTYPE html>
<html>
<body>
	<header>
		<h1>SELAMAT DATANG!</h1>
		<nav>
			<a href="/kuis">HOME</a>
			<a href="/about">ABOUT</a>
			<a href="/article">ARTICLE</a>
		</nav>
	<header>
		<hr/>
		<br/>
		<br/>
		<h3>@yield('judul_halaman')</h3>
		@yield('content')
		<br/>
		<br/>
		<hr/>
		<footer>
			<p>&copy; Terimakasih telah mengunjungi web kami</p>
		</footer>
	</header>
		<!-- <hr>
	</header>
	@section('title')
	<h2>Halo</h2>
	<hr>
	@show

	@section('sidebar')
	<b>Ini adalah master sidebar</b>
	@show

	<div class="container">
		@yield('content')
	</div>
	<footer>
		<br>
		<hr/>
		<p>Terimakasih telah mengunjungi Webiste kami</p>
	</footer> -->
</body>
</html>