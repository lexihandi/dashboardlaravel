@extends('layout.v_template')
@section('title', 'Data Gejala')
@section('content')
    @if (session('pesan'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i> Sukses!</h5>
            {{ session('pesan') }}.
        </div>
    @endif
    <a href="/gejala/tambah" class="btn btn-primary btn-md mb-4">Tambah</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Gejala</th>
                <th width="250">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            @foreach ($gejala as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->nama_gejala }}</td>
                    <td>
                        <a href="/gejala/edit/{{ $data->id_gejala }}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
