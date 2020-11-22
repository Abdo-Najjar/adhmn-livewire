@extends('layouts.app')

@section('content')

    <div class="layout-px-spacing">

        <div class="row layout-top-spacing">
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Create Admin</h4>
                                </div>
                            </div>
                        </div>

                        <div class="widget-content widget-content-area">

                            <form wire:submit.prevent='save'>

                                <div class="form-group mb-4">
                                    <label for="name_ar">Name</label>
                                    <input wire:model.lazy='name.ar' type="text" class="form-control" id="name"
                                        placeholder="Name ar">
                                </div>

                                <div class="form-group mb-4">
                                    <label for="name_ar">Email</label>
                                    <input wire:model.lazy='name.ar' type="text" class="form-control" id="name"
                                        placeholder="Email">
                                </div>
                                <div class="form-group  mb-4">
                                    <label for="name_ar">Mobile</label>
                                    <input wire:model.lazy='name.ar' type="text" class="form-control" id="name"
                                        placeholder="Mobile">
                                </div>

                                <div class="form-group col-md-4 mb-4">
                                    <label for="s_status">Country</label>
                                    <select data-select2-id="countries" class="form-control select2-hidden-accessible basic"
                                        id="s_status" tabindex="-1" aria-hidden="true">
                                        <option value="">Choose</option>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="s_status">City</label>
                                    <select data-select2-id="cities" class="form-control select2-hidden-accessible basic"
                                        id="s_status" tabindex="-1" aria-hidden="true">
                                        <option value="">Choose</option>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="s_status">Role</label>
                                    <select data-select2-id="roles" class="form-control select2-hidden-accessible basic"
                                        id="s_status" tabindex="-1" aria-hidden="true">
                                        <option value="">Choose</option>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>



                                <input type="submit" name="time" class="btn btn-primary" value="Create Country">
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('js')
    <script>
        var ss = $(".basic").select2({
            tags: true,
        });

    </script>
@endpush
