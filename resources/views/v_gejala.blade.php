@extends('layout.v_template')
@section('title', 'Data Gejala')
@section('content')
    <tr><a href="/gejala/tambah" class="btn btn-primary btn-md mb-4">Tambah</a></tr>
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
                        <a href="" class="btn btn-sm btn-warning">Edit</a>
                        <a href="" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
