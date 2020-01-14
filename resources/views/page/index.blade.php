@extends('layout.app')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">MAHASISWA</h1>
    </div>
    <div class="row">
        <div class="col-xl-5 col-md-8 mb-6">
            <form action="/save" method="POST">
                @csrf
                <table border="0" class="">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input name="nama" type="text" class="form-control form-control-user" id="exampleInputEmail"
                                aria-describedby="emailHelp" required></td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td><input name="tempat" type="text" class="form-control form-control-user"
                                id="exampleInputEmail" aria-describedby="emailHelp" required></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td><input name="tglLahir" type="date" class="form-control form-control-user"
                                id="exampleInputEmail" aria-describedby="emailHelp" required></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                            <input type="radio" name="jk" value="laki - laki" required>Laki - laki
                            <input type="radio" name="jk" value="perempuan" required>Perempuan
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><input name="email" type="email" class="form-control form-control-user"
                                id="exampleInputEmail" aria-describedby="emailHelp" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><textarea name="alamat" id="" class="form-control form-control-user" cols="30" rows="5"
                                required></textarea></td>
                    </tr>
                    <tr>
                        <td><button class="submit" type="submit">Save</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
@endsection
