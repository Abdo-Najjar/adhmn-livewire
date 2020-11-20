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
                                    <h4>Create Country</h4>
                                </div>
                            </div>
                        </div>


                        @livewire('country.create')


                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
