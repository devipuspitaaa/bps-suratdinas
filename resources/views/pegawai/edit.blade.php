@extends('template')
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Edit Data Pegawai </h3>
    </div>
    <div class="card">
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form method="POST" action="{{ url('pegawai/update/' .$pegawai->id) }}" class="forms-sample">
                @csrf
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" class="form-control" id="email" value="{{ $pegawai->email }}" aria-describedby="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label for="nama_lengkap">Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" value="{{ $pegawai->nama_lengkap }}" aria-describedby="nama_lengkap" placeholder="Nama Lengkap" required>
                </div>
                <div class="form-group">
                    <label for="nip">NIP</label>
                    <input type="text" name="nip" class="form-control" id="nip" value="{{ $pegawai->nip }}" aria-describedby="nip" placeholder="NIP" required>
                </div>
                <div class="form-group">
                    <label>File upload</label>
                    <input type="file" name="img[]" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                        <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary me-2">Simpan</button>
                <a href="{{ url('/pegawai') }}" class="btn btn-light">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection