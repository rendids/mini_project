@extends('layoutsjasa.app')
@section('content')


<div class="row">
    <div class="col-xl-13">
        <div class="row">
            <div class="col-xl-12">
                <div class="card income-bx">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-6">
                                <div class="line position-relative">
                                    <p class="font-w500 mb-0">Total Income</p>
                                    <h2 class="mb-0 text-primary">$12,890,00</h2>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-6">
                                <p class="font-w500 text-success mb-0">Income</p>
                                <h2 class="cate-title data">$4345,00</h2>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-6">
                                <p class="font-w500 text-danger mb-0">Expense</p>
                                <h4 class="cate-title data">$2890,00</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-inner mt-1 py-0">
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <!-- <div class="bg-info text-white rounded p-3"> -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="31"
                                        viewBox="0 0 37 29" fill="none">
                                        <path
                                            d="M5.55 12.1978C7.59078 12.1978 9.25 10.3745 9.25 8.13187C9.25 5.88925 7.59078 4.06593 5.55 4.06593C3.50922 4.06593 1.85 5.88925 1.85 8.13187C1.85 10.3745 3.50922 12.1978 5.55 12.1978ZM31.45 12.1978C33.4908 12.1978 35.15 10.3745 35.15 8.13187C35.15 5.88925 33.4908 4.06593 31.45 4.06593C29.4092 4.06593 27.75 5.88925 27.75 8.13187C27.75 10.3745 29.4092 12.1978 31.45 12.1978ZM33.3 14.2308H29.6C28.5825 14.2308 27.6633 14.6818 26.9927 15.4124C29.3225 16.8165 30.9759 19.3513 31.3344 22.3626H35.15C36.1733 22.3626 37 21.4542 37 20.3297V18.2967C37 16.0541 35.3408 14.2308 33.3 14.2308ZM18.5 14.2308C22.0786 14.2308 24.975 11.0479 24.975 7.11538C24.975 3.18286 22.0786 0 18.5 0C14.9214 0 12.025 3.18286 12.025 7.11538C12.025 11.0479 14.9214 14.2308 18.5 14.2308ZM22.94 16.2637H22.4602C21.2577 16.899 19.9222 17.2802 18.5 17.2802C17.0778 17.2802 15.7481 16.899 14.5398 16.2637H14.06C10.3831 16.2637 7.4 19.5419 7.4 23.5824V25.4121C7.4 27.0956 8.64297 28.4615 10.175 28.4615H26.825C28.357 28.4615 29.6 27.0956 29.6 25.4121V23.5824C29.6 19.5419 26.6169 16.2637 22.94 16.2637ZM10.0073 15.4124C9.33672 14.6818 8.4175 14.2308 7.4 14.2308H3.7C1.65922 14.2308 0 16.0541 0 18.2967V20.3297C0 21.4542 0.826719 22.3626 1.85 22.3626H5.65984C6.02406 19.3513 7.6775 16.8165 10.0073 15.4124Z"
                                            fill="#EA6A12" />
                                    </svg>
                                    <!-- </div> -->
                                    <div class="text-end">
                                        <h2 class="angka m-0">142</h2>
                                        <p>jumlah User</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <!-- <div class="bg-success text-white rounded p-3"> -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                        viewBox="0 0 50 50" fill="info">
                                        <path
                                            d="M18.7533 22.9167C20.4014 22.9167 22.0126 22.4279 23.383 21.5123C24.7534 20.5966 25.8215 19.2951 26.4523 17.7724C27.083 16.2496 27.248 14.5741 26.9265 12.9576C26.6049 11.3411 25.8113 9.85622 24.6458 8.69078C23.4804 7.52534 21.9955 6.73167 20.379 6.41013C18.7625 6.08858 17.0869 6.25361 15.5642 6.88434C14.0415 7.51507 12.74 8.58318 11.8243 9.95359C10.9087 11.324 10.4199 12.9352 10.4199 14.5833C10.4199 16.7935 11.2979 18.9131 12.8607 20.4759C14.4235 22.0387 16.5431 22.9167 18.7533 22.9167Z"
                                            fill="#EA6A12" />
                                        <path
                                            d="M35.4199 27.084C36.6561 27.084 37.8644 26.7174 38.8922 26.0307C39.92 25.3439 40.7211 24.3678 41.1942 23.2258C41.6672 22.0837 41.791 20.8271 41.5498 19.6147C41.3087 18.4023 40.7134 17.2886 39.8393 16.4146C38.9653 15.5405 37.8516 14.9452 36.6392 14.7041C35.4269 14.4629 34.1702 14.5867 33.0282 15.0597C31.8861 15.5328 30.91 16.3339 30.2232 17.3617C29.5365 18.3895 29.1699 19.5979 29.1699 20.834C29.1699 22.4916 29.8284 24.0813 31.0005 25.2534C32.1726 26.4255 33.7623 27.084 35.4199 27.084Z"
                                            fill="#EA6A12" />
                                        <path
                                            d="M43.7533 41.6691C44.3058 41.6691 44.8357 41.4496 45.2264 41.0589C45.6171 40.6682 45.8366 40.1383 45.8366 39.5857C45.8349 37.6387 45.2876 35.731 44.2566 34.0792C43.2257 32.4275 41.7524 31.0977 40.004 30.2409C38.2556 29.384 36.302 29.0344 34.3649 29.2316C32.4278 29.4288 30.5848 30.165 29.0449 31.3566C27.0043 29.324 24.4075 27.9412 21.5821 27.3825C18.7566 26.8238 15.8289 27.1143 13.1683 28.2173C10.5077 29.3203 8.23328 31.1864 6.63188 33.5804C5.03048 35.9744 4.17382 38.7889 4.16992 41.6691C4.16992 42.2216 4.38942 42.7515 4.78012 43.1422C5.17082 43.5329 5.70072 43.7524 6.25326 43.7524H31.2533C31.8058 43.7524 32.3357 43.5329 32.7264 43.1422C33.1171 42.7515 33.3366 42.2216 33.3366 41.6691"
                                            fill="#EA6A12" />
                                    </svg>
                                    <!-- </div> -->
                                    <div class="text-end">
                                        <h2 class="angka m-0">89</h2>
                                        <p>Jumlah Jasa</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <!-- <div class="bg-warning text-white rounded p-3"> -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="61" height="61"
                                        viewBox="0 0 61 61" fill="none">
                                        <path
                                            d="M42.0451 59.2335C32.6133 59.2335 24.9009 51.7382 24.5454 42.3943H17.7218C17.3495 42.3943 17.0482 42.0931 17.0482 41.7208V17.3975C17.0482 17.0252 17.3495 16.7239 17.7218 16.7239H27.0769C27.2565 16.7239 27.4268 16.795 27.5521 16.9204C27.6794 17.0476 27.7505 17.2179 27.7505 17.3975V31.6079C28.9105 29.9595 30.3568 28.5188 32.0164 27.3682V2.42747C32.0164 2.05514 32.3176 1.75391 32.69 1.75391H42.0451C42.2247 1.75391 42.3968 1.82501 42.5222 1.95036C42.6475 2.07946 42.7186 2.2516 42.7186 2.42934L42.7168 24.2211C52.0625 24.5747 59.5578 32.2889 59.5578 41.7208C59.5578 51.3771 51.7014 59.2335 42.0451 59.2335ZM42.0451 25.5551C38.8288 25.5551 35.7248 26.4981 33.0642 28.285C30.7815 29.7968 28.9199 31.8886 27.6775 34.3377C26.5006 36.5998 25.8794 39.1518 25.8794 41.7208C25.8794 50.6343 33.1315 57.8864 42.0451 57.8864C50.9586 57.8864 58.2107 50.6343 58.2107 41.7208C58.2107 32.8072 50.9586 25.5551 42.0451 25.5551ZM18.3954 41.0472H24.5454C24.6427 38.5494 25.2789 36.0852 26.4033 33.8718V18.0711H18.3954V41.0472ZM33.3635 3.10291L33.3617 26.515C33.5207 26.4252 33.6797 26.3354 33.8425 26.2493C34.9932 25.6356 36.2056 25.1566 37.4592 24.8161C38.7296 24.4718 40.0393 24.2716 41.3696 24.2211L41.3715 3.10291H33.3635ZM42.7186 51.0759H41.3715V48.0074H36.432V46.6602H44.8516C46.0285 46.6602 46.9846 45.7042 46.9846 44.5273C46.9846 43.3504 46.0285 42.3943 44.8516 42.3943H39.2367C37.3189 42.3943 35.7584 40.832 35.7584 38.9142C35.7584 36.9964 37.3189 35.4341 39.2367 35.4341H41.3715V32.3657H42.7205V35.4341H47.6581V36.7831H39.2367C38.0617 36.7831 37.1056 37.7392 37.1056 38.9161C37.1056 40.093 38.0617 41.0491 39.2367 41.0491H44.8516C46.7694 41.0491 48.3317 42.6114 48.3317 44.5292C48.3317 46.447 46.7694 48.0093 44.8516 48.0093H42.7186V51.0759ZM12.1087 42.3943H2.75365C2.38131 42.3943 2.08008 42.0931 2.08008 41.7208V28.6236C2.08008 28.2513 2.38131 27.9501 2.75365 27.9501H12.1087C12.4811 27.9501 12.7823 28.2513 12.7823 28.6236V41.7208C12.7823 42.0931 12.4811 42.3943 12.1087 42.3943ZM3.42721 41.0472H11.4352V29.2972H3.42721V41.0472Z"
                                            fill="#EA6A12" />
                                    </svg>
                                    <!-- </div> -->
                                    <div class="text-end">
                                        <h2 class="angka m-0">12345</h2>
                                        <p>Jumlah pesanan selesai</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <!-- <div class="bg-info text-white rounded p-3"> -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="41" height="41"
                                        viewBox="0 0 41 41" fill="none">
                                        <path
                                            d="M0.880859 32.1582V35.4941C0.880859 38.252 7.59961 40.4941 15.8809 40.4941C24.1621 40.4941 30.8809 38.252 30.8809 35.4941V32.1582C27.6543 34.4316 21.7559 35.4941 15.8809 35.4941C10.0059 35.4941 4.10742 34.4316 0.880859 32.1582ZM25.8809 10.4941C34.1621 10.4941 40.8809 8.25195 40.8809 5.49414C40.8809 2.73633 34.1621 0.494141 25.8809 0.494141C17.5996 0.494141 10.8809 2.73633 10.8809 5.49414C10.8809 8.25195 17.5996 10.4941 25.8809 10.4941ZM0.880859 23.9629V27.9941C0.880859 30.752 7.59961 32.9941 15.8809 32.9941C24.1621 32.9941 30.8809 30.752 30.8809 27.9941V23.9629C27.6543 26.6191 21.748 27.9941 15.8809 27.9941C10.0137 27.9941 4.10742 26.6191 0.880859 23.9629ZM33.3809 24.8223C37.8574 23.9551 40.8809 22.3457 40.8809 20.4941V17.1582C39.0684 18.4395 36.4043 19.3145 33.3809 19.8535V24.8223ZM15.8809 12.9941C7.59961 12.9941 0.880859 15.791 0.880859 19.2441C0.880859 22.6973 7.59961 25.4941 15.8809 25.4941C24.1621 25.4941 30.8809 22.6973 30.8809 19.2441C30.8809 15.791 24.1621 12.9941 15.8809 12.9941ZM33.0137 17.3926C37.7012 16.5488 40.8809 14.8926 40.8809 12.9941V9.6582C38.1074 11.6191 33.3418 12.6738 28.3262 12.9238C30.6309 14.041 32.3262 15.541 33.0137 17.3926Z"
                                            fill="#ED790E" />
                                    </svg>
                                    <!-- </div> -->
                                    <div class="text-end">
                                        <h2 class="angka m-0">Rp. 500.000.00</h2>
                                        <p>Untung</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body pb-0">
                        <h4 class="cate-title">Activity</h4>
                        <div id="chartBar5"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
