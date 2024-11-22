@extends('template.layout')

@section('title', 'Daftar Penerbit')

@section('header')
@include('template.navbar_admin')
@endsection

@section('main')
<div id="layoutSidenav">
@include('template.sidebar_admin')
<div id="layoutSidenav_content">
<main>
<div class="container-fluid px-4">
    <h1 class="mt-4">Daftar Penerbit</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Daftar Penerbit</li>
    </ol>
    
    @if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Berhasil!</strong> {{ session('success') }}
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label
="Close"></button>
</div>
@endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Penerbit</th>
                <th>Alamat</th>
                <th>No Telp</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penerbits as $penerbit)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $penerbit->penerbit_nama }}</td>
                <td>{{ $penerbit->penerbit_alamat }}</td>
                <td>{{ $penerbit->penerbit_notelp }}</td>
                <td>{{ $penerbit->penerbit_email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</main>
</div>
</div>
@endsection