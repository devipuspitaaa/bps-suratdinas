@extends('template')
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Pengaturan Kode Surat </h3>
    </div>
    
    <div class="row justify-content-center">
       
        <div class="col-md-8">
            <div class="card card-body">

                <small>Form Pengaturan</small>
                <h1>Form Pengantar</h1>

                <div class="form-group">
                    <label for="">Kode Kantor</label>
                    <input type="text" name="kode_kantor" class="form-control" placeholder="..." required="">
                    <small>Masukkan form diatas</small>
                </div>

                <div class="form-group">
                    <label for="">Urutan Nomor Surat</label>
                    <input type="text" name="urutan" class="form-control" placeholder="..." required="">
                    <small>Masukkan form diatas</small>
                </div>

                <div class="form-group">
                    <label for="">Kode Tata Usaha</label>
                    <input type="text" name="kode_tatausaha" class="form-control" placeholder="..." required="">
                    <small>Masukkan form diatas</small>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Simpan dan Perbarui</button>
                </div>
            </div>
        </div>
       
    </div>
</div>
@endsection