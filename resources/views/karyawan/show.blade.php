@extends('layout.app')
@section('title', 'Detail Karyawan')
@section('content')

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Detail Karyawan</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('karyawan') }}" class="btn btn-primary btn-sm"><i class="fas fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5>Nama</h5>
                    <p>{{ $karyawan->nama }}</p>
                </div>
                <div class="col-md-6">
                    <h5>Email</h5>
                    <p>{{ $karyawan->email }}</p>
                </div>
                <div class="col-md-6">
                    <h5>Alamat</h5>
                    <p>{{ $karyawan->alamat }}</p>
                </div>
                <div class="col-md-6">
                    <h5>No Telp</h5>
                    <p>{{ $karyawan->no_telp }}</p>
                </div>
            </div>
        </div>
    </div>

@endsection
