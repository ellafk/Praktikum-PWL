<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<div class="col-lg-8">
<div class="card">
<div class="card-header text-center">
<h3>Daftar Artikel </h3>
</div>

      </div>
    <form action="/manageUser/update/{{$user->id}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$user->id}}"><br>
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" required="required" name="name" value="{{$user->name}}"><br>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text"  class="form-control" required="required" name="email" style="height:90px;" value="{{$user->email}}"></br>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" required="required" name="password" value="{{$user->password}}"></br>
        </div>

        <div class="form-group">
            <label for="roles">Roles</label>
            <input type="text" class="form-control" required="required" name="roles" value="{{$user->roles}}"></br>
        </div>

        <div class="form-group">
            <label for="image">Profile Picture</label>
            <input type="file" class="form-control" required="required" name="image" value="{{$user->profile}}"></br>
            <img width="150px" src="{{asset('/storage/'.$user->profile)}}">
        </div>

        <button type="submit" name="edit" class="btn btn-dark float-right">Ubah Data</button>
    </form>
</div>