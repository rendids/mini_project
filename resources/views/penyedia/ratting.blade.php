@extends('layoutsjasa.app')
@section('content')

<link rel="stylesheet" href="path/to/styles.css">

<style>
    .custom-h1 {
    font-size: 3rem;
}
</style>


<div class="card-body">
    <div>
        <h1 class="cate-title font-w1000 mb-4 custom-h1">Riwayat</h1>
        <div class="d-flex align-items-center justifiy-content-between mb-4">


        </div>
    </div>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-grid" role="tabpanel" aria-labelledby="pills-grid-tab">
            <div class="row">
                <div class="col-xl-3 col-xxl-4 col-sm-6">
                    <div class="card">
                        <div class="card-body " style="background-color: #bcc9dd">
                            <div class="restro-review d-flex align-items-center border-bottom mb-4  pb-4">
                                <img src="public/assets/images/resturent-review/pic-1.jpg" alt="">
                                <div>
                                    <h4 class="font-w500">Ruby Roben</h4>
                                    <span>User since 2020</span>
                                </div>
                            </div>
                            <div class="recent-review d-flex align-items-center">

                                <div>
                                    <h4 class="font-w500 mb-0">Service AC</h4>
                                    <ul class="d-flex mb-2">
                                        <li><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 0.500031L9.79611 6.02789H15.6085L10.9062 9.4443L12.7023 14.9722L8 11.5558L3.29772 14.9722L5.09383 9.4443L0.391548 6.02789H6.20389L8 0.500031Z" fill="#FC8019"></path>
                                        </svg>
                                        </li>
                                        <li><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 0.500031L9.79611 6.02789H15.6085L10.9062 9.4443L12.7023 14.9722L8 11.5558L3.29772 14.9722L5.09383 9.4443L0.391548 6.02789H6.20389L8 0.500031Z" fill="#FC8019"></path>
                                        </svg>
                                        </li>
                                        <li><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 0.500031L9.79611 6.02789H15.6085L10.9062 9.4443L12.7023 14.9722L8 11.5558L3.29772 14.9722L5.09383 9.4443L0.391548 6.02789H6.20389L8 0.500031Z" fill="#FC8019"></path>
                                        </svg>
                                        </li>
                                        <li><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 0.500031L9.79611 6.02789H15.6085L10.9062 9.4443L12.7023 14.9722L8 11.5558L3.29772 14.9722L5.09383 9.4443L0.391548 6.02789H6.20389L8 0.500031Z" fill="#FC8019"></path>
                                        </svg>
                                        </li>
                                        <li><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 0.500031L9.79611 6.02789H15.6085L10.9062 9.4443L12.7023 14.9722L8 11.5558L3.29772 14.9722L5.09383 9.4443L0.391548 6.02789H6.20389L8 0.500031Z" fill="#FC8019"></path>
                                        </svg>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p style="color: black">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                            <div>
                                <h6 class="font-w400">Ordered June 21, 2020</h6>
                            </div>
                        </div>
                    </div>
                </div>

                    </table>
            </div>
        </div>
        <div class="d-flex align-items-center justify-content-sm-between justify-content-center flex-wrap pagination-bx">
            <div class="mb-sm-0 mb-3 pagination-title">
                <p class="mb-0"><span>Showing 1-5</span> from <span>100</span> data</p>
            </div>
            <nav>
                <ul class="pagination pagination-gutter">
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

@endsection
