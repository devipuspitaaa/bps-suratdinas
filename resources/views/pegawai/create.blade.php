@extends('template')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Form Data Pegawai</h3>
        </div>
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
        </div>
        <div class="col-12 grid-margin stretch-card">
        
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Basic form elements</h4>
                    <p class="card-description">Basic form elements</p>
                    <form class="forms-sample" method="post" action="{{ url('proses-simpan-pegawai') }}">
                    @csrf
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="email" />
                        </div>
                        <div class="form-group">
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" placeholder="nama_lengkap" />
                        </div>
                        <div class="form-group">
                            <label for="nip">NIP</label>
                            <input type="text" name="nip" class="form-control" id="nip" placeholder="nip" />
                        </div>
                        <div class="form-group">
                            <label for="no_ktp">No KTP</label>
                            <input type="text" name="no_ktp" class="form-control" id="no_ktp" placeholder="no_ktp" />
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-control" name="jkl" id="jenis_kelamin">
                                <option>Laki-Laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Unggah Foto</label>
                            <input type="file" name="img" class="file-upload-default" />
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" />
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button"> Unggah </button>
                                </span>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary me-2"> Submit </button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection