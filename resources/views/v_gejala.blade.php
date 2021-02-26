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
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                            data-target="#delete{{ $data->id_gejala }}">
                            Delete
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @foreach ($gejala as $data)
        <div class="modal fade" id="delete{{ $data->id_gejala }}">
            <div class="modal-dialog modal-sm">
                <div class="modal-content bg-danger">
                    <div class="modal-header">
                        <h4 class="modal-title">{{ $data->nama_gejala }}</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Anda yakin ingin menghapusnya?</p>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Batal</button>
                        <a href="/gejala/delete/{{ $data->id_gejala }}" class="btn btn-outline-light">Yakin</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection
