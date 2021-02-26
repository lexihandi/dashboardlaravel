@extends('layout.v_template')
@section('title', 'Data Penyakit')
@section('content')
    @if (session('pesan'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i> Sukses!</h5>
            {{ session('pesan') }}.
        </div>
    @endif
    <a href="/penyakit/tambah" class="btn btn-primary btn-md mb-4">Tambah</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Penyakit</th>
                <th width="250">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            @foreach ($penyakit as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->nama_penyakit }}</td>
                    <td>
                        <a href="/penyakit/detail/{{ $data->id_penyakit }}" class="btn btn-sm btn-success">Detail</a>
                        <a href="/penyakit/edit/{{ $data->id_penyakit }}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
