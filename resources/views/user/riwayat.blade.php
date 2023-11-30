@extends('layoutsuser.app')
@section('content')

<div class="col-xl-12">
    <div class=" order-history d-flex algn-items-center justify-content-between mb-4">
        <div class="input-group search-area2">
            <span class="input-group-text p-0"><a href="javascript:void(0)"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M27.414 24.586L22.337 19.509C23.386 17.928 24 16.035 24 14C24 8.486 19.514 4 14 4C8.486 4 4 8.486 4 14C4 19.514 8.486 24 14 24C16.035 24 17.928 23.386 19.509 22.337L24.586 27.414C25.366 28.195 26.634 28.195 27.414 27.414C28.195 26.633 28.195 25.367 27.414 24.586ZM7 14C7 10.14 10.14 7 14 7C17.86 7 21 10.14 21 14C21 17.86 17.86 21 14 21C10.14 21 7 17.86 7 14Z" fill="var(--primary)"></path>
            </svg>
            </a></span>
            <input type="text" class="form-control p-0" placeholder="Search here">
        </div>
        <select class="form-control default-select border w-auto" style="display: none;">
            <option>Recently</option>
            <option>Oldest</option>
            <option>Newest</option>
        </select><div class="nice-select form-control default-select border w-auto" tabindex="0"><span class="current">Recently</span><ul class="list"><li data-value="Recently" class="option selected">Recently</li><li data-value="Oldest" class="option">Oldest</li><li data-value="Newest" class="option">Newest</li></ul></div>
    </div>
    <div class="card h-auto">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-list i-table style-1 mb-4 border-0" id="guestTable-all3">
                    <thead>
                        <tr>
                            <th class="bg-none">
                                <div class="form-check style-3">
                                    <input class="form-check-input" type="checkbox" value="" id="checkAll">
                                </div>
                            </th>
                            <th>Jasa</th>
                            <th>tanggal</th>
                            <th>pembayaran</th>
                            <th>Total</th>
                            <th>Status</th>

                            <th class="bg-none"></th>
                            <th class="bg-none"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="form-check style-3">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </td>
                            <td>
                                <div class="media-bx d-flex py-3  align-items-center">
                                    <img class="me-3 rounded-circle" src="public/assets/images/popular-img/pic-1.jpg" alt="images">
                                    <div>
                                        <h5 class="mb-0">Service AC</h5>
                                        <p class="mb-0">1x </p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <p class="mb-0">June 1, 2020, 08:22 AM</p>
                                </div>
                            </td>
                            <td>

                                    <span>dana</span>


                            </td>
                            <td>
                                <div>
                                    <h4 class="text-primary">$ 5.59</h4>
                                </div>
                            </td>
                            <td><span class="badge badge-xl light badge-success">Completed</span></td>
                            <td>
                                <div>
                                    <a href="javascript:void(0);" class="btn btn-outline-primary">Order Again</a>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown dropstart">

                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="d-flex align-items-center justify-content-sm-between justify-content-center flex-wrap pagination-bx px-4 py-3">
                <div class="mb-sm-0 mb-3 pagination-title">
                    <p class="mb-0"><span>Showing 1-5</span> from <span>100</span> data</p>
                </div>
                <nav>
                    <ul class="pagination pagination-gutter mb-0">
                        <li class="page-item page-indicator">
                            <a class="page-link" href="javascript:void(0)">
                                <i class="la la-angle-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>

                        <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                        <li class="page-item page-indicator">
                            <a class="page-link" href="javascript:void(0)">
                                <i class="la la-angle-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

@endsection
