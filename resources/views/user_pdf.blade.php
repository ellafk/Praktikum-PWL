<!DOCTYPE html>
<html>
    <head>
        <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
    </head>

    <body>
    <style type="text/css">
    table tr td {padding:8px 5px; background-color:	#ADD8E6; color:#000000;},
    table tr th{padding:8px 5px; background-color:	#ADD8E6; color:#000000;}
    font-size: 9pt;
    }
    </style>

<center>
<h5>Laporan Pengguna</h4>
</center>

    <table class='table table-bordered'>
        <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Profil</th>
        </tr>
        </thead>
    <tbody>
@php $i=1 @endphp
@foreach($user as $u)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{$u->name}}</td>
            <td>{{$u->email}}</td>
            <td><img width="50px" src="{{public_path('storage/'.$u->profile)}}"></td>
        </tr>
@endforeach
    </tbody>
</table>
</body>
</html>