@extends('template')
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Tambah Surat </h3>
    </div>
    
    <div class="row">
        
        @foreach ( $template AS $isi )

        @if ( $isi->status_surat == "1" )
        <div class="col-md-4">
            <a href="{{ url('isi-surat/'. $isi->id) }}" style="text-decoration: none;">
                <div class="card card-body">
                    <i class="mdi mdi-file-document-box" style="font-size: 48px"></i>
                    <h3 style="margin: 0px">{{ $isi->jenis_surat }}</h3>
                    <small>format diperbarui pada {{ date('d M Y', strtotime( $isi->updated_at )) }}</small>
                </div>
            </a>
        </div>
        @endif


        @endforeach
    </div>
</div>
@endsection