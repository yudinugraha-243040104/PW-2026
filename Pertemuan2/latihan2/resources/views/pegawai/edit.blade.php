@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route("update.pegawai", $pegawai->uuid) }}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <p>{{ __('Edit Data Pegawai') }}</p>
                            <a href="{{ route('index.pegawai') }}" class="btn btn-secondary">Kembali</a>
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
                                <label class="form-label">Nip<span class="text-danger">*</span></label>
                                <input type="text" name="nip" id="nip" class="form-control" placeholder="..."  value="{{ $pegawai->nip ?? null }}" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label class="form-label">Nama<span class="text-danger">*</span></label>
                                <input type="text" name="nama" id="nama" class="form-control" placeholder="..." value="{{ $pegawai->nama ?? null }}" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label class="form-label">Unit Kerja<span class="text-danger">*</span></label>
                                <input type="text" name="unit_kerja" id="unit_kerja" class="form-control" placeholder="..." value="{{ $pegawai->unit_kerja ?? null }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-end">
                            <button type="submit" class="btn btn-success">Ubah Data</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
