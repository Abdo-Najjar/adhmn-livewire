@extends('layouts.app')

@section('content')

    <div class="layout-px-spacing">

        <div class="row layout-top-spacing">

            <div class="row col-md-12" id="cancel-row">

                <div class="container">
                    <div class="widget-content widget-content-area">
                        <form class="form col-md-8">
                            <div class="form-group">
                                <label>Country</label>
                                <select class="custom-select custom-select-md bg-white" id="country_code ">
                                    <option value="">Choose country</option>
                                    <option value="">Palestine</option>
                                    <option value="">KSA</option>
                                    <option value="">USA</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>City</label>
                                <select class="custom-select custom-select-md bg-white" id="country_code ">
                                    <option value="">Choose country</option>
                                    <option value="">Palestine</option>
                                    <option value="">KSA</option>
                                    <option value="">USA</option>
                                </select>
                            </div>
                        </form>

                    </div>
                </div>

                <div id="chartLine" class="col-xl-12 layout-top-spacing layout-spacing">
                    <div class="statbox widget box box-shadow">

                        <div class="widget-content widget-content-area">
                            <div id="map"></div>
                            <div>

                                <div class="widget-content widget-content-area">
                                    <div id="s-line-cusomers" class=""></div>
                                </div>

                                <div class="widget-content widget-content-area">
                                    <div id="s-line-serviceprovider" class=""></div>
                                </div>


                                <div class="widget-content widget-content-area">
                                    <div id="total-income" class=""></div>
                                </div>

                                <div class="widget-content widget-content-area">
                                    <div id="counry-income" class=""></div>
                                </div>


                                <div class="widget-content widget-content-area">
                                    <div id="income-cities" class=""></div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            @endsection

            @push('css')
                <link href="plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
            @endpush

            @push('js')
                <script src="{{ asset('plugins/apex/apexcharts.min.js') }}"></script>

                {{-- <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

                <script defer
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9wmTJeQspHyBabX7npNkHrbAN7fXshmo&callback=initMap">
                </script> --}}


                <div>
                    <script>
                        let map;

                        function initMap() {
                            map = new google.maps.Map(document.getElementById("map"), {
                                center: {
                                    lat: -34.397,
                                    lng: 150.644
                                },
                                zoom: 8,
                            });
                        }

                    </script>
                </div>

                <script>
                    var sline = {
                        chart: {
                            height: 350,
                            type: 'line',
                            zoom: {
                                enabled: false
                            },
                            toolbar: {
                                show: false,
                            }
                        },
                        dataLabels: {
                            enabled: false
                        },
                        stroke: {
                            curve: 'straight'
                        },
                        series: [{
                            name: "Desktops",
                            data: [10, 41, 35, 51, ]
                        }],
                        title: {
                            text: 'Number of Cusomers',
                            align: 'left'
                        },
                        grid: {
                            row: {
                                colors: ['#f1f2f3', 'transparent'], // takes an array which will be repeated on columns
                                opacity: 0.5
                            },
                        },
                        xaxis: {
                            categories: ['Jan', 'Feb', 'Mar', 'Apr'],
                        }
                    }

                    var chart = new ApexCharts(
                        document.querySelector("#s-line-cusomers"),
                        sline
                    );

                    chart.render();



                    var sline = {
                        chart: {
                            height: 350,
                            type: 'line',
                            zoom: {
                                enabled: false
                            },
                            toolbar: {
                                show: false,
                            }
                        },
                        dataLabels: {
                            enabled: false
                        },
                        stroke: {
                            curve: 'straight'
                        },
                        series: [{
                            name: "Desktops",
                            data: [10, 41, 35, 51, ]
                        }],
                        title: {
                            text: 'Number of Service Provider',
                            align: 'left'
                        },
                        grid: {
                            row: {
                                colors: ['#f1f2f3', 'transparent'], // takes an array which will be repeated on columns
                                opacity: 0.5
                            },
                        },
                        xaxis: {
                            categories: ['Jan', 'Feb', 'Mar', 'Apr'],
                        }
                    }

                    var chart = new ApexCharts(
                        document.querySelector("#s-line-serviceprovider"),
                        sline
                    );

                    chart.render();



                    var donutChart = {
                        chart: {
                            height: 350,
                            type: 'pie',
                            toolbar: {
                                show: false,
                            }
                        },
                        series: [44, 55, 41, 17],
                        title: {
                            text: 'Total Income per Service',
                            align: 'left'
                        },
                        responsive: [{
                            breakpoint: 480,
                            options: {
                                chart: {
                                    width: 200
                                },
                                legend: {
                                    position: 'bottom'
                                }
                            }
                        }]
                    }

                    var donut = new ApexCharts(
                        document.querySelector("#total-income"),
                        donutChart
                    );

                    donut.render();





                    var sline = {
                        chart: {
                            height: 350,
                            type: 'line',
                            zoom: {
                                enabled: false
                            },
                            toolbar: {
                                show: false,
                            }
                        },
                        dataLabels: {
                            enabled: false
                        },
                        stroke: {
                            curve: 'straight'
                        },
                        series: [{
                            name: "Desktops",
                            data: [10, 41, 35, 51, ]
                        }],
                        title: {
                            text: 'Country Income',
                            align: 'left'
                        },
                        grid: {
                            row: {
                                colors: ['#f1f2f3', 'transparent'], // takes an array which will be repeated on columns
                                opacity: 0.5
                            },
                        },
                        xaxis: {
                            categories: ['Jan', 'Feb', 'Mar', 'Apr'],
                        }
                    }

                    var chart = new ApexCharts(
                        document.querySelector("#counry-income"),
                        sline
                    );

                    chart.render();


                    var sCol = {
                        chart: {
                            height: 350,
                            type: 'bar',
                            toolbar: {
                                show: false,
                            }
                        },
                        plotOptions: {
                            bar: {
                                horizontal: false,
                                columnWidth: '55%',
                                endingShape: 'rounded'
                            },
                        },
                        dataLabels: {
                            enabled: false
                        },
                        stroke: {
                            show: true,
                            width: 2,
                            colors: ['transparent']
                        },
                        series: [{
                            name: 'Net Profit',
                            data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
                        }, {
                            name: 'Revenue',
                            data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
                        }],
                        xaxis: {
                            categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
                        },
                        yaxis: {
                            title: {
                                text: '$ (thousands)'
                            }
                        },
                        fill: {
                            opacity: 1

                        },
                        tooltip: {
                            y: {
                                formatter: function(val) {
                                    return "$ " + val + " thousands"
                                }
                            }
                        }
                    }

                    var chart = new ApexCharts(
                        document.querySelector("#income-cities"),
                        sCol
                    );

                    chart.render();

                </script>


            @endpush

            @push('css')
                <style>
                    #map {
                        height: 100%;
                    }

                </style>
            @endpush

            @push('js')
    
            <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9wmTJeQspHyBabX7npNkHrbAN7fXshmo&callback=initMap&libraries=&v=weekly"defer></script>
        @endpush
        
        @push('css')
       
        <style type="text/css">
            /* Always set the map height explicitly to define the size of the div
             * element that contains the map. */
            #map {
              height: 100%;
            }
      
            /* Optional: Makes the sample page fill the window. */
            html,
            body {
              height: 100%;
              margin: 0;
              padding: 0;
            }
          </style>
               
        @endpush
        
        
        @push('js')
        <script>
            let map;
      
            function initMap() {
              map = new google.maps.Map(document.getElementById("map"), {
                center: { lat: -34.397, lng: 150.644 },
                zoom: 8,
              });
            }
          </script>
        @endpush
    