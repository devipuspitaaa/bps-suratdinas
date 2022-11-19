@extends('template')
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Pembuatan Surat </h3>
    </div>
    <div class="card">
        <div class="card-body text-center">

            <div class="row">
                <div class="col-12">
                <a class="btn btn-primary" href="/tambahSurat">Tambah</a>
                    <div class="table-responsive">
                        <div id="order-listing_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="dataTables_length" id="order-listing_length"><label>Show <select name="order-listing_length" aria-controls="order-listing" class="custom-select custom-select-sm form-control">
                                                <option value="5">5</option>
                                                <option value="10">10</option>
                                                <option value="15">15</option>
                                                <option value="-1">All</option>
                                            </select> entries</label></div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div id="order-listing_filter" class="dataTables_filter"><label><input type="search" class="form-control" placeholder="Search" aria-controls="order-listing"></label></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="order-listing" class="table dataTable no-footer" role="grid" aria-describedby="order-listing_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Order #: activate to sort column descending" style="width: 60.8125px;">Order </th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Purchased On: activate to sort column ascending" style="width: 105.328px;">Jenis Surat</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending" style="width: 74.6719px;">File Surat</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Jenis Surat</td>
                                                <td>File Surat</td>
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-5">
                                    <div class="dataTables_info" id="order-listing_info" role="status" aria-live="polite">Showing 1 to 10 of 10 entries</div>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="order-listing_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button page-item previous disabled" id="order-listing_previous"><a href="#" aria-controls="order-listing" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                            <li class="paginate_button page-item active"><a href="#" aria-controls="order-listing" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                            <li class="paginate_button page-item next disabled" id="order-listing_next"><a href="#" aria-controls="order-listing" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li>
                                        </ul>
                                    </div>
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