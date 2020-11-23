@extends('layouts.app')

@section('content')

    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="container">
                <div class="col-lg-8 col-md-8">
                    <div class="card">
                        <div class="header text-center">
                            <h2>Country Details</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover m-b-0">
                                    <tbody>
                                        <tr>
                                            <td>ID</td>
                                            <td>{{ $model->id }}</td>
                                        </tr>

                                        <tr>
                                            <td>Name Ar</td>
                                            <td>{{ $model->getTranslation('name','ar') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Name En</td>
                                            <td>{{ $model->getTranslation('name','en') }}</td>
                                        </tr>
                                       
                                        <tr>
                                            <td>Currency Ar</td>
                                            <td>{{ $model->getTranslation('currency','ar') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Currency En</td>
                                            <td>{{ $model->getTranslation('currency','en') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Tax</td>
                                            <td>{{ $model->tax}}</td>
                                        </tr>
                                        <tr>
                                            <td>Zip Code</td>
                                            <td>{{ $model->zip_code}}</td>
                                        </tr>
                                        <tr>
                                            <td>Price Of First Ten Kilo</td>
                                            <td>{{ $model->price_of_first_ten_kilo}}</td>
                                        </tr>
                                        <tr>
                                            <td>Price For Kilo</td>
                                            <td>{{ $model->price_for_kilo}}</td>
                                        </tr>
                                        <tr>
                                            <td>Profit Ratio</td>
                                            <td>{{ $model->profitRatio}}</td>
                                        </tr>
                                        <tr>
                                            <td>Country Code</td>
                                            <td>{{ $model->country_code}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
