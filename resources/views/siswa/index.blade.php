@extends('layouts.master')
@section('content')
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
        {{session('sukses')}}
    </div>
    @endif
    <div class="row">
        <div class="col-6">
            <h1 class="float-left"> Data Siswa </h1>
        </div>
        <div class="col-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-sm float-right" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                Tambah Data Siswa
            </button>
        </div>
        <table class="table table-hover">
            <tr>
                <th>NAMA DEPAN</th>
                <th>NAMA BELAKANG</th>
                <th>JENIS KELAMIN</th>
                <th>AGAMA</th>
                <th>ALAMAT</th>
                <th>AKSI</th>
            </tr>
            @foreach($data_siswa as $siswa)
            <tr>
                <td>{{$siswa->nama_depan}}</td>
                <td>{{$siswa->nama_belakang}}</td>
                <td>{{$siswa->jenis_kelamin}}</td>
                <td>{{$siswa->agama}}</td>
                <td>{{$siswa->alamat}}</td>
                <td><a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a> </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/siswa/create" method="POST">
                    {{csrf_field()}}
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Depan</label>
                        <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                               placeholder="Nama Depan">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Belakang</label>
                        <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                               placeholder="Nama Belakang">
                    </div>
                    <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option value="L">Laki - Laki</option>
                        <option value="P">Perempuan</option>
                    </select>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Agama</label>
                        <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                               placeholder="Agama">
                    </div>
                    <div class="form-floating">
                        <textarea name="alamat" class="form-control" placeholder="Leave a comment here"
                                  id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Alamat</label>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
