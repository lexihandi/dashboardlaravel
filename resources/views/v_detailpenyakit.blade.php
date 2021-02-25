@extends('layout.v_template')
@section('title', 'Detail Penyakit')
@section('content')
    <table class="table">
        <tr>
            <th width="200">Nama Penyakit</th>
            <th width="30">:</th>
            <th>{{ $penyakit->nama_penyakit }}</th>
        </tr>
        <tr>
            <th width="200">Deskripsi Penyakit</th>
            <th width="30">:</th>
            <th>{{ $penyakit->deskripsi_penyakit }}</th>
        </tr>
        <tr>
            <th width="200">Solusi Penyakit</th>
            <th width="30">:</th>
            <th>{{ $penyakit->solusi_penyakit }}</th>
        </tr>
        <tr><a href="/penyakit" class="btn btn-danger btn-sm-end mb-4">Kembali</a></tr>
    </table>
@endsection
