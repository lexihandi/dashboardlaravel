@extends('layout.v_template')
@section('title', 'Edit Data Penyakit')
@section('content')
    <form action="/penyakit/update/{{ $penyakit->id_penyakit }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="content">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Nama Penyakit</label>
                        <input name="nama_penyakit" class="form-control" value="{{ $penyakit->nama_penyakit }}">
                        <div class="text-danger">
                            @error('nama_penyakit')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Deskripsi Penyakit</label>
                        <input name="deskripsi_penyakit" class="form-control" value="{{ $penyakit->deskripsi_penyakit }}">
                        <div class="text-danger">
                            @error('deskripsi_penyakit')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Solusi Penyakit</label>
                        <input name="solusi_penyakit" class="form-control" value="{{ $penyakit->solusi_penyakit }}">
                        <div class="text-danger">
                            @error('solusi_penyakit')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-md">Simpan</button>
                        <a href="/penyakit" class="btn btn-danger btn-md">Batal</a>
                    </div>
                </div>
            </div>
    </form>
@endsection
