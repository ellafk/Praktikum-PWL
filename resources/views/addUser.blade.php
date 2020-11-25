<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<div class="col-lg-15">
    <div class="card">
        <div class="card-header text-center">
            <h3>Daftar User </h3>
        </div>
        </br>
        </br>
        <p>MASUKKAN DATA</p>
    </div>

    <form action="/manageUser/update{{$user->id}}" method="post"
    enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="title">Nama</label>
        <input type="text" class="form-control" required="required" name="title"></br>
    </div>

    <div class="form-group">
        <label for="content">Email</label>
        <input type="text" class="form-control" required="required" name="content"></br>
    </div>

    <div class="form-group">
        <label for="image">Password</label>
        <input type="text" class="form-control" required="required" name="image"></br>
    </div>
 
    <div class="form-group">
        <label for="image">Profile Picture</label>
        <input type="file" class="form-control" required="required" name="image"></br>
    </div>
        <button type="submit" name="add" class="btn btn-primary float-right">Tambah Data</button>
    </form>
</div>