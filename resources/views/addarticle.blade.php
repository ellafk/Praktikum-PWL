<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<div class="col-lg-8">
<div class="card">
<div class="card-header text-center">
<h3>Daftar Artikel </h3>
</div>
</br>
</br>
<form action="/article/create" method="post"
enctype="multipart/form-data">
 @csrf
 <div class="form-group">
 <label for="title">Judul</label>
 <input type="text" class="form-control" required="required" name="title"></br>
 </div>
 <div class="form-group">
 <label for="content">Content</label>
 <input type="text" class="form-control" required="required" name="content"></br>
 </div>
 <div class="form-group">
 <label for="image">Feature Image</label>
 <input type="file" class="form-control" required="required" name="image"></br>
</div>

 <button type="submit" name="add" class="btn btn-primary float-right">Tambah Data</button>
 </form>
 </div>
 </div>
 <!-- </div> -->