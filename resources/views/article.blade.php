@extends('master')
@section('title')

@section('sidebar')
@parent
<p>Sidebar Halaman artikel.</p>
<hr>
@endsection

@section('content')
<p>Halaman artikel dengan ID : {{$id}}</p>
<p>Halo! Saya Ella Fitri Kusumaningrum</p>
<p>Selamat Datang di halaman ini</p>
@endsection

<div class="container">
	<div class="row">
		<div class="col-lg-8">
			<h2 class="mt-4">{{$articles->title}}</h2>
			<p class="lead">
				by
				<a href="#">Start Bootstrap</a>
			</p>
		</div>
	</div>
</div> -->
@endsection