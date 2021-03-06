@extends('layouts.app')

@section('content')

    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">

            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">

                    <div class="m-b-15">
                        <form id="search_form">
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="s_name">Name</label>
                                    <input type="text" class="form-control" id="s_name" placeholder="Name">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="s_status">Country</label>
                                    <select data-select2-id="country" class="form-control select2-hidden-accessible select2"
                                        id="s_status" tabindex="-1" aria-hidden="true">
                                        <option value="">Choose</option>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="s_status">Status</label>
                                    <select data-select2-id="status" class="form-control select2-hidden-accessible select2"
                                        id="s_status" tabindex="-1" aria-hidden="true">
                                        <option value="">Choose</option>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3 align-self-end">
                                    <input type="submit" id="search_btn" class="btn btn-info mb-4" value="Search">
                                    <input type="submit" id="clear_btn" class="btn btn-secondary mb-4" value="Clear search">
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="m-b-15">
                        <a href="{{ route('customers.create') }}" id="info" class="btn btn-primary"><i
                                class="fa fa-plus"></i> Add</a>
                        <button value="1" disabled="" class="status_btn btn btn-success">
                            Activate </button>
                        <button value="0" disabled="" class="status_btn btn btn-secondary">
                            Deactivate </button>
                        <button disabled="" id="delete_btn" class="delete-btn btn btn-danger"><i class="fa fa-trash-o"></i>
                            Delete</button>
                    </div>

                </div>
            </div>

            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <div class="table-responsive mb-4 mt-4">
                        <table id="html5-extension" class="table table-hover non-hover " style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ID</th>
                                    <th>Name(ar)</th>
                                    <th>Name(en)</th>
                                    <th>Status</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection


@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/table/datatable/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/table/datatable/custom_dt_html5.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/table/datatable/dt-global_style.css') }}">
@endpush

@push('js')
    <script src="{{ asset('plugins/table/datatable/datatables.js') }}"></script>
    <script src="{{ asset('plugins/table/datatable/button-ext/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/table/datatable/button-ext/jszip.min.js') }}"></script>
    <script src="{{ asset('plugins/table/datatable/button-ext/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/table/datatable/button-ext/buttons.print.min.js') }}"></script>
    <script>
        $('#html5-extension').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('api.cities.datatable') }}",
                function(d) {
                    // d.status = $('#status').val(),
                    // d.search = $('input[type="search"]').val()
                },
            },
            dom: '<"row"<"col-md-12"<"row"<"col-md-2"l><"col-md-4"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5"i><"col-md-7"p>>> >',
            "columnDefs": [{
                className: "text-center",
                "targets": [-1]
            }],
            columns: [{
                    "render": function(data, type, full, meta) {
                        return '<td>' +
                            '<label class="fancy-checkbox">' +
                            '<input value="' + full.id +
                            '" class="table_ids checkbox-tick" type="checkbox" name="table_ids[]">' +
                            '<span></span>' +
                            '</label>' +
                            '</td>';
                    }
                },
                {
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'name_ar',
                    name: 'name_ar'
                },
                {
                    data: 'name_en',
                    name: 'name_en'
                },
                {
                    data: 'status',
                    name: 'status',
                    orderable: false,
                    searchable: false,
                    'render': function(data, type, full, meta) {
                        if (data != 0) {
                            return '<svg xmlns="http://www.w3.org/2000/svg" class="feather feather-check-circle" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" height="24"><path d="M 22 11.08 V 12 a 10 10 0 1 1 -5.93 -9.14" /><polyline points="22,4 12,14.01 9,11.01" /></svg>';
                        }
                        return '<svg xmlns="http://www.w3.org/2000/svg" class="feather feather-x-circle" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" height="24"><circle cx="12" cy="12" r="10" /><line x1="15" y1="9" x2="9" y2="15" /><line x1="9" y1="9" x2="15" y2="15" /></svg>';
                    }
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    printable: false
                }
            ],
            buttons: {
                buttons: [
                    {
                        extend: 'csv',
                        className: 'btn'
                    },
                    {
                        extend: 'excel',
                        className: 'btn'
                    },
                    {
                        extend: 'print',
                        className: 'btn'
                    }
                ]
            },

            "oLanguage": {
                "oPaginate": {
                    "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                    "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [5, 10, 20, 50],
            "pageLength": 5
        });



        $(".select2").select2();

    </script>
@endpush
