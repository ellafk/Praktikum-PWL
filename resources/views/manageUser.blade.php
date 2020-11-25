<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<div class="container">
<h3><center>Daftar User<center> </h3>
<a href="home" class="btn btn-primary">HOME </a>
<a style="margin-top:7px;" href="manageUser/cetak_pdf" class="btn btn-primary" target="_blank">Cetak PDF</a>
<table class="table table-bordered table-striped">
 <thead>
 <tr>
 <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Roles</th>
        <th>Foto Profil</th>
        <th></th>
 </tr>
 </thead>
 <tbody>
 @foreach($user as $u)
 <tr>
 <td>{{$u->id}}</td>
        <td>{{$u->name}}</td>
        <td>{{$u->email}}</td>
        <td>{{$u->roles}}</td>
        <td><img height="80px" src="{{asset('/storage/'. $u->profile)}}" alt=""></td>
            <td><a href="manageUser/editUser/{{ $u->id }}" class="badge badge-warning">Edit</a> 
              <a href="manageUser/delete/{{ $u->id }}" class="badge badge-danger">Hapus</a></td> 
              
        
 </tr>
 @endforeach
 </body>
 </table>
 </div>
</table>