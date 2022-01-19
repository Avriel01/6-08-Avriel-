@extends('layouts.main')

@section('container')
    <h1> Halaman About </h1>
    <h3><?php echo $nama; ?></h13>
    <p><?php echo $email; ?></p>
    <img src="image/{{ $gambar }}" alt="{{ $nama }}" width="250px">
@endsection
