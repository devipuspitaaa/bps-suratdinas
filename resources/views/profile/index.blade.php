@extends('template')
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Profile </h3>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="border-bottom text-center pb-4">
                                <img src="../../../assets/images/faces/face12.jpg" alt="profile" class="img-lg rounded-circle mb-3">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h4>Username</h4>
                                    <p>Admin</p>
                                </div>
                                <div>
                                    <h4>Nama Lengkap</h4>
                                    <p>Administrator</p>
                                </div>
                                <div>
                                    <button class="btn btn-primary">Edit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection