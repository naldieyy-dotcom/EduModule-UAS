<!DOCTYPE html>
<html>

<head>

<meta charset="UTF-8">

<style>

body{
    font-family: DejaVu Sans;
}

table{
    width:100%;
    border-collapse:collapse;
}

table,th,td{
    border:1px solid black;
}

th,td{
    padding:8px;
    text-align:center;
}

h2{
    text-align:center;
}

</style>

</head>

<body>

<h2>LAPORAN DATA MODUL</h2>

<table>

<thead>

<tr>

<th>No</th>

<th>Judul</th>

<th>Mata Kuliah</th>

<th>Jenjang</th>

<th>Tahun</th>

</tr>

</thead>

<tbody>

@foreach($moduls as $modul)

<tr>

<td>{{ $loop->iteration }}</td>

<td>{{ $modul->judul_modul }}</td>

<td>{{ $modul->mata_kuliah }}</td>

<td>{{ $modul->jenjang }}</td>

<td>{{ $modul->tahun_terbit }}</td>

</tr>

@endforeach

</tbody>

</table>

</body>

</html>