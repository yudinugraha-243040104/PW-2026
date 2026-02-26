@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route("store.pegawai") }}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <p>{{ __('Tambah Data Pegawai') }}</p>
                            <a href="{{ route('index.pegawai') }}" class="btn btn-secondary">Kembali</a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-md-12">
                                <label class="form-label">Nip<span class="text-danger">*</span></label>
                                <input type="text" name="nip" id="nip" class="form-control" placeholder="..." required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label class="form-label">Nama<span class="text-danger">*</span></label>
                                <input type="text" name="nama" id="nama" class="form-control" placeholder="..." required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label class="form-label">Unit Kerja<span class="text-danger">*</span></label>
                                <input type="text" name="unit_kerja" id="unit_kerja" class="form-control" placeholder="..." required>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-end">
                            <button type="submit" class="btn btn-success">Simpan Data</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
