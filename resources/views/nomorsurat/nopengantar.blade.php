@extends('template')
@section('content')
<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title"> Nomor Surat Pengantar </h3>
  </div>
  <div class="card">
    <div class="card-body">
      <form action="#" method="post">
        <hr>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Nomor Surat Pengatar</label>
                    <input type="text" name="nopengantar" class="form-control" placeholder="" required=""/>
                </div>
            </div>
        </div>
      </form>
    </div>
  </div>
  @endsection
