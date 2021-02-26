@extends('layout.v_template')
@section('title', 'Edit Data Gejala')
@section('content')
    <form action="/gejala/update/{{ $gejala->id_gejala }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="content">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Nama Gejala</label>
                        <input name="nama_gejala" class="form-control" value="{{ $gejala->nama_gejala }}">
                        <div class="text-danger">
                            @error('nama_gejala')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-md">Simpan</button>
                        <a href="/gejala" class="btn btn-danger btn-md">Batal</a>
                    </div>
                </div>
            </div>
    </form>
@endsection
