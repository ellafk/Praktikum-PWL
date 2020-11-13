<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<div class="col-lg-8">
<div class="card">
<div class="card-header text-center">
<h3>Daftar Artikel </h3>
</div>
</br>
</br>
<form action="/article/update/{{$article->id}}" method="post"
enctype="multipart/form-data">
 @csrf
 <input type="hidden" name="id" value="{{$article->id}}"></br>
 <div class="form-group">
 <label for="title">Judul</label>
 <input type="text" class="form-control" required="required" name="title" value="{{$article->title}}"></br>
 </div>
 <div class="form-group">
 <label for="content">Content</label>
 <input type="text" class="form-control" required="required" name="content" value="{{$article->content}}"></br>
 </div>
 <div class="form-group">
 <label for="image">Feature Image</label>
 <input type="file" class="form-control" required="required" name="image" value="{{$article->imageUrl}}"></br>
 <img width="150px" src="{{asset('storage/'.$article->imageUrl)}}">
 </div>
 <button type="submit" name="edit" class="btn btn-primary floatright">Ubah Data</button>
</form>
 </div>
 </div>