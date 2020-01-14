@extends('layout.app')
@section('container')

<!-- Begin Page Content -->

<!-- Begin Page Content -->
<div class="container-fluid">
    @if($berhasil)
    <div class="alert alert-success" role="alert">
        {{ $berhasil }}
    </div>
    @endif
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">MAHASISWA</h1>
    </div>
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            @csrf
            <table border="0">
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>{{ $data['nama'] }}</td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td>{{ $data['tempat'] }}</td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td>{{ $data['tglLahir'] }}</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        {{ $data['jk'] }}
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>{{ $data['email'] }}
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>{{ $data['alamat'] }}</td>
                </tr>
                <tr>
                    <td><a href="/index"><button class="submit" type="button">Kembali</button></a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection
