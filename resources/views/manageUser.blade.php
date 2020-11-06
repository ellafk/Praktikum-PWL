<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<div class="col-lg-15">
<div class="card ">
<div class="card-header text-center">
<h3>Daftar User </h3>
</div>
</br>
<div class="card body">
<table class="table table-bordered table-striped">
 <thead>
 <tr>
 <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Password</th>
        <th>Roles</th>
 </tr>
 </thead>
 <tbody>
 @foreach($user as $u)
 <tr>
 <td>{{$u->id}}</td>
        <td>{{$u->name}}</td>
        <td>{{$u->email}}</td>
        <td>{{$u->password}}</td>
        <td>{{$u->roles}}</td>
        <td><a href="manageUser/editUser/{{ $u->id }}" class="badge badge-warning">Edit</a>
            <a href="manageUser/delete/{{ $u->id }}" class="badge badge-danger">Hapus</a>
        </td>
 </td>
 </tr>
 @endforeach
 </body>
 </table>
 </div>
 </div>
 </div>
</table>