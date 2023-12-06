@extends('layoutsuser.app')
@section('content')
    <div class="col-xl-12">
        <div class="card h-auto">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-list i-table style-1 mb-4 border-0 text-center" id="guestTable-all3">
                        <thead>
                            <tr>
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

                                    <h5 class="mb-0">Service AC</h5>
                                    <p class="mb-0">1x </p>
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
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
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
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
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

<<<<<<< Updated upstream
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
                        </div <div class="row mt-3">
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
        document.addEventListener('DOMContentLoaded', function() {
            const stars = document.querySelectorAll('.rating-container i');

            stars.forEach((star) => {
                star.addEventListener('click', function() {
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
=======
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route('rating')}}" method="post">
                            @csrf
                            @method('POST')

                            <div class="rating-container">
                                <i class="far fa-star" data-rating="1" style="font-size: 300%; color: #ffd700;"></i>
                                <i class="far fa-star" data-rating="2" style="font-size: 300%; color: #ffd700;"></i>
                                <i class="far fa-star" data-rating="3" style="font-size: 300%; color: #ffd700;"></i>
                                <i class="far fa-star" data-rating="4" style="font-size: 300%; color: #ffd700;"></i>
                                <i class="far fa-star" data-rating="5" style="font-size: 300%; color: #ffd700;"></i>

                                <input type="hidden" id="ratingValue" name="ratting" value="">
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <label for="name" class="fs-4 fw-bold">Komentar</label>
                                    <textarea name="komentar" id="" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-success">Konfirmasi</button>
                            </div>
                        </form>
        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const stars = document.querySelectorAll(".rating-container i");

        stars.forEach(function (star) {
            star.addEventListener("click", function () {
                const ratingValue = this.getAttribute("data-rating");
                document.getElementById("ratingValue").value = ratingValue;
                highlightStars(ratingValue);
            });
        });
    });

    function highlightStars(rating) {
        const stars = document.querySelectorAll(".rating-container i");

        stars.forEach(function (star) {
            const starRating = star.getAttribute("data-rating");
            if (starRating <= rating) {
                star.classList.add("fas");
                star.classList.remove("far");
            } else {
                star.classList.remove("fas");
                star.classList.add("far");
            }
        });
    }
</script>



>>>>>>> Stashed changes
@endsection
