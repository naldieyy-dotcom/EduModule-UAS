<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>@yield('title')</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('css/admin.css') }}">

</head>

<body>

@include('components.sidebar')

<div class="main-content">

    @yield('content')

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session('success'))

<script>

Swal.fire({

    icon:'success',

    title:'Berhasil!',

    text:'{{ session("success") }}',

    confirmButtonColor:'#19376D'

});

</script>

@endif

<script>

function confirmDelete(id){

Swal.fire({

title:'Hapus Modul?',

text:'Data yang dihapus tidak dapat dikembalikan!',

icon:'warning',

showCancelButton:true,

confirmButtonColor:'#d33',

cancelButtonColor:'#6c757d',

confirmButtonText:'Ya, Hapus!',

cancelButtonText:'Batal'

}).then((result)=>{

if(result.isConfirmed){

document.getElementById('delete-form-'+id).submit();

}

});

}

</script>

@stack('scripts')

</body>
</html>