@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <p>{{ __('Data Pegawai') }}</p>
                        <a href="{{ route('create.pegawai') }}" class="btn btn-primary">Tambah Data</a>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('berhasil'))
                        <div class="alert alert-success" role="alert">
                            {{ session('berhasil') }}
                        </div>
                    @endif

                    @if (session('gagal'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('gagal') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table id="tbl-pegawai" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIP</th>
                                            <th>Nama</th>
                                            <th>Unit Kerja</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($pegawais as $pegawai)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $pegawai->nip ?? '-' }}</td>
                                                <td>{{ $pegawai->nama ?? '-' }}</td>
                                                <td>{{ $pegawai->unit_kerja ?? '-' }}</td>
                                                <td>
                                                    <div class="me-2">
                                                        <a href="{{ route('edit.pegawai', $pegawai->uuid) }}" class="btn btn-sm btn-success">Edit</a>
                                                        <a href="{{ route('delete.pegawai', $pegawai->uuid) }}" class="btn btn-sm btn-danger">Hapus</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5">Belum ada data.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
