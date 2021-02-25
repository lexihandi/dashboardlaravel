@extends('layout.v_template')
@section('title', 'Tambah Data Penyakit')
@section('content')
    <form action="/penyakit/tambahdata" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="content">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Nama Penyakit</label>
                        <input name="nama_penyakit" class="form-control" value="{{ old('nama_penyakit') }}">
                        <div class="text-danger">
                            @error('nama_penyakit')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Deskripsi Penyakit</label>
                        <input name="deskripsi_penyakit" class="form-control" value="{{ old('deskripsi_penyakit') }}">
                        <div class="text-danger">
                            @error('deskripsi_penyakit')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Solusi Penyakit</label>
                        <input name="solusi_penyakit" class="form-control" value="{{ old('solusi_penyakit') }}">
                        <div class="text-danger">
                            @error('solusi_penyakit')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-md">Simpan</button>
                    </div>
                </div>
            </div>
    </form>
@endsection
