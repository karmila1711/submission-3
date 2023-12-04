<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas sub 3</title>
</head>
<body><center>

    <h2>Contoh Loop for:</h2>
<ul>
    @php
        $jumlahPosting = 5; // Anda dapat mengganti nilai ini sesuai kebutuhan
    @endphp

    @for ($i = 1; $i <= $jumlahPosting; $i++)
        <li>Posting {{ $i }}</li>
    @endfor
</ul>


<h2>Contoh Loop foreach:</h2>
<ul>
    @php
        $daftarPost = ['Post 1', 'Post 2', 'Post 3', 'Post 4', 'Post 5'];
    @endphp

    @foreach ($daftarPost as $post)
        <li>{{ $post }}</li>
    @endforeach
</ul>



<h2>Contoh Penggunaan if dan if else:</h2>

@php
    $isUserLoggedIn = true; // Anda dapat mengganti nilai ini sesuai kebutuhan
@endphp

@if ($isUserLoggedIn)
    <p>Selamat datang, Pengguna!</p>
@else
    <p>Silakan login untuk melihat konten.</p>
@endif

@php
    $userRole = 'admin'; // Anda dapat mengganti nilai ini sesuai kebutuhan
@endphp

@if ($userRole == 'admin')
    <p>Anda memiliki akses sebagai administrator.</p>
@else
    <p>Anda memiliki akses sebagai pengguna biasa.</p>
@endif

</center>
</body>
</html>