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
                            <td><!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Beri Ratting
                                  </button>
                            </td>
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

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="rating-container">
                            <i class="far fa-star" data-rating="1" style="font-size: 300%; color: #ffd700;"></i>
                            <i class="far fa-star" data-rating="2" style="font-size: 300%; color: #ffd700;"></i>
                            <i class="far fa-star" data-rating="3" style="font-size: 300%; color: #ffd700;"></i>
                            <i class="far fa-star" data-rating="4" style="font-size: 300%; color: #ffd700;"></i>
                            <i class="far fa-star" data-rating="5" style="font-size: 300%; color: #ffd700;"></i>
                        </div>
                    </div
                <div class="row mt-3">
                    <div class="col-md-12">
                        <label for="name" class="fs-4 fw-bold">Komentar</label>
                        <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-success">Konfirmasi</button>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const stars = document.querySelectorAll('.rating-container i');

        stars.forEach((star) => {
            star.addEventListener('click', function () {
                const clickedRating = this.getAttribute('data-rating');
                resetStars(clickedRating);
                updateRating(clickedRating);
            });
        });

        function resetStars(clickedRating) {
            stars.forEach((star) => {
                const starRating = star.getAttribute('data-rating');
                star.classList.remove('fas');

                // Tampilkan kembali rating yang lebih rendah atau sama dengan yang dipilih
                if (starRating <= clickedRating) {
                    star.classList.add('fas');
                }
            });
        }

        function updateRating(rating) {
            // Lakukan apa yang Anda butuhkan ketika rating diperbarui
            console.log('Rating baru: ' + rating);
        }
    });
    </script>


@endsection
