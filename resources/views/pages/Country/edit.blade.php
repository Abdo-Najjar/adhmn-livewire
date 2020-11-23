@extends('layouts.app')

@section('content')

            <div class="layout-px-spacing">

                <div class="row layout-top-spacing">

                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">

                        @livewire('country.edit', ['country' => $model])

                    </div>

                </div>
            </div>

@endsection