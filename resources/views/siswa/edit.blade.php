@extends('layouts/master')
@section('content')
    <h1>Edit Data Siswa</h1>
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
        {{session('sukses')}}
    </div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <form action="/siswa/{{$siswa->id ?? '' ?? ''}}/update" method="POST">
                {{csrf_field()}}
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Depan</label>
                    <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1"
                           aria-describedby="emailHelp"
                           placeholder="Nama Depan"
                           value="{{$siswa->nama_depan}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Belakang</label>
                    <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1"
                           aria-describedby="emailHelp"
                           placeholder="Nama Belakang"
                    value="{{$siswa->nama_belakang}}">
                </div>
                <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-select form-select-lg mb-3"
                        aria-label=".form-select-lg example">
                    <option value="L" @if($siswa->jenis_kelamin == 'L') selected @endif>Laki - Laki</option>
                    <option value="P" @if($siswa->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                </select>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Agama</label>
                    <input name="agama" type="text" class="form-control" id="exampleInputEmail1"
                           aria-describedby="emailHelp"
                           placeholder="Agama"
                    value="{{$siswa->agama}}">
                </div>
                <div class="form-floating">
                        <textarea name="alamat" class="form-control" placeholder="Leave a comment here"
                                  id="floatingTextarea">{{$siswa->alamat}}</textarea>
                    <label for="floatingTextarea">Alamat</label>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-warning">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
