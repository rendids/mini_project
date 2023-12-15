@extends('layoutsjasa.app')
@section('content')
<style>
    .hover-card {
        transition: transform 0.3s ease-in-out;
    }

    .hover-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .card:hover {
        transform: translateY(-5px);
        transition: transform 0.3s ease-in-out;
    }
</style>

<div class="row">
    <div class="col-xl-13">
        <div class="row">
            <div class="content-inner mt-1 py-0">
                <div class="row">
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body" style="box-shadow: 0 7px 9px rgba(0, 0, 0, 0.3);">
                                <div class="d-flex justify-content-between align-items-center">
                                    <!-- <div class="bg-success text-white rounded p-3"> -->
                                        <i class="fas fa-user-alt-slash text-primary" style="font-size: 30px; margin-bottom: 25px"></i>
                                    <!-- </div> -->
                                    <div class="text-end">
                                        <h2 class="angka m-0">{{$penyedia}}</h2>
                                        <p>Jumlah Pesanan Yang Ditolak</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body" style="box-shadow: 0 7px 9px rgba(0, 0, 0, 0.3);">
                                <div class="d-flex justify-content-between align-items-center">
                                    <!-- <div class="bg-warning text-white rounded p-3"> -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="61" height="61"
                                        viewBox="0 0 61 61" fill="none">
                                        <path
                                            d="M42.0451 59.2335C32.6133 59.2335 24.9009 51.7382 24.5454 42.3943H17.7218C17.3495 42.3943 17.0482 42.0931 17.0482 41.7208V17.3975C17.0482 17.0252 17.3495 16.7239 17.7218 16.7239H27.0769C27.2565 16.7239 27.4268 16.795 27.5521 16.9204C27.6794 17.0476 27.7505 17.2179 27.7505 17.3975V31.6079C28.9105 29.9595 30.3568 28.5188 32.0164 27.3682V2.42747C32.0164 2.05514 32.3176 1.75391 32.69 1.75391H42.0451C42.2247 1.75391 42.3968 1.82501 42.5222 1.95036C42.6475 2.07946 42.7186 2.2516 42.7186 2.42934L42.7168 24.2211C52.0625 24.5747 59.5578 32.2889 59.5578 41.7208C59.5578 51.3771 51.7014 59.2335 42.0451 59.2335ZM42.0451 25.5551C38.8288 25.5551 35.7248 26.4981 33.0642 28.285C30.7815 29.7968 28.9199 31.8886 27.6775 34.3377C26.5006 36.5998 25.8794 39.1518 25.8794 41.7208C25.8794 50.6343 33.1315 57.8864 42.0451 57.8864C50.9586 57.8864 58.2107 50.6343 58.2107 41.7208C58.2107 32.8072 50.9586 25.5551 42.0451 25.5551ZM18.3954 41.0472H24.5454C24.6427 38.5494 25.2789 36.0852 26.4033 33.8718V18.0711H18.3954V41.0472ZM33.3635 3.10291L33.3617 26.515C33.5207 26.4252 33.6797 26.3354 33.8425 26.2493C34.9932 25.6356 36.2056 25.1566 37.4592 24.8161C38.7296 24.4718 40.0393 24.2716 41.3696 24.2211L41.3715 3.10291H33.3635ZM42.7186 51.0759H41.3715V48.0074H36.432V46.6602H44.8516C46.0285 46.6602 46.9846 45.7042 46.9846 44.5273C46.9846 43.3504 46.0285 42.3943 44.8516 42.3943H39.2367C37.3189 42.3943 35.7584 40.832 35.7584 38.9142C35.7584 36.9964 37.3189 35.4341 39.2367 35.4341H41.3715V32.3657H42.7205V35.4341H47.6581V36.7831H39.2367C38.0617 36.7831 37.1056 37.7392 37.1056 38.9161C37.1056 40.093 38.0617 41.0491 39.2367 41.0491H44.8516C46.7694 41.0491 48.3317 42.6114 48.3317 44.5292C48.3317 46.447 46.7694 48.0093 44.8516 48.0093H42.7186V51.0759ZM12.1087 42.3943H2.75365C2.38131 42.3943 2.08008 42.0931 2.08008 41.7208V28.6236C2.08008 28.2513 2.38131 27.9501 2.75365 27.9501H12.1087C12.4811 27.9501 12.7823 28.2513 12.7823 28.6236V41.7208C12.7823 42.0931 12.4811 42.3943 12.1087 42.3943ZM3.42721 41.0472H11.4352V29.2972H3.42721V41.0472Z"
                                            fill="#145ACC" />
                                    </svg>
                                    <!-- </div> -->
                                    <div class="text-end">
                                        <h2 class="angka m-0">{{ $selesai }}</h2>
                                        <p>Jumlah pesanan selesai</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body pb-0" style="box-shadow: 0 7px 9px rgba(0, 0, 0, 0.3);" >
                        <h4 class="cate-title">Activity</h4>
                        <div id="chartBar6"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.44.2/apexcharts.min.js"></script>

    <script>
        var chartData = @json($chartData);
        // console.log(chartData);
        if (chartData) {
            console.log(chartData);
        }

        if (document.querySelector('#chartBar6')) {
            // console.log(chartData);
            const options = {
                series: [{
                    name: 'pendapatan',
                    data: chartData.map(data => parseInt(data.harga)),
                }, ],
                chart: {
                    type: 'bar',
                    height: 280,
                    toolbar: {
                        show: false,
                    },
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '35%',
                        endingShape: "rounded",
                        borderRadius: 2,
                    },
                },
                states: {
                    hover: {
                        filter: 'none',
                    },
                },
                colors: ['#1FBF75', 'var(--primary)'],
                dataLabels: {
                    enabled: false,
                },
                markers: {
                    shape: "circle",
                },
                legend: {
                    show: false,
                    fontSize: '14px',
                    position: 'top',
                    labels: {
                        colors: '#000000',
                    },
                    markers: {
                        width: 18,
                        height: 18,
                        strokeWidth: 50,
                        strokeColor: '#fff',
                        fillColors: undefined,
                        radius: 12,
                    },
                },
                stroke: {
                    show: true,
                    width: 3,
                    curve: 'smooth',
                    lineCap: 'round',
                    colors: ['transparent'],
                },
                grid: {
                    borderColor: '#eee',
                },
                xaxis: {
                    categories: chartData.map(data => data.month),
                    labels: {
                        minHeight: 20,
                        maxHeight: 20,
                    }
                },
                yaxis: {
                    categories: chartData.map(data => data.math),
                    labels: {
                        minWidth: 20,
                        maxWidth: 20,
                    }
                },
                fill: {
                    opacity: 1,
                    colors: ['#1FBF75', 'var(--primary)'],
                },
                tooltip: {
                    y: {
                        formatter: function(val) {
                            return " " + val + "";
                        },
                    },
                },
                responsive: [{
                    breakpoint: 575,
                    options: {
                        series: [{
                                name: '',
                                data: [120, 90, 70],
                            },
                            {
                                name: '',
                                data: [75, 50, 18],
                            },
                        ],
                        plotOptions: {
                            bar: {
                                columnWidth: '70%',
                            },
                        },
                        xaxis: {
                            categories: ['Jan', 'Feb', 'Mar'],
                        },
                    },
                }, ],
            };

            var chartBar6 = new ApexCharts(document.querySelector("#chartBar6"), options);
            chartBar6.render();
        }
    </script>
@endsection
