@extends('layout.v_template')
@section('title', 'Data Gejala')
@section('content')
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Gejala</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            @foreach ($gejala as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->nama_gejala }}</td>
                    <td>
                        <a href="" class="btn btn-sm btn-success">Detail</a>
                        <a href="" class="btn btn-sm btn-warning">Edit</a>
                        <a href="" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
