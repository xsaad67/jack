@extends('layouts.main')

@section('content')
<!-- Spotlight -->
<section class="slice slice-lg bg-cover bg-size--cover" style="background-image: url(/assets/img/backgrounds/img-10.jpg);">
    <span class="mask bg-gradient-dark opacity-3"></span>
        <div class="container pt-lg pb-lg-md">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <h2 class="mb-4 text-white">How can we help?</h2>
                    <form>
                        <div class="form-group bg-white rounded px-2 py-2 shadow">
                            <div class="row">
                                <div class="col-8 col-md-9">
                                    <div class="input-group input-group-transparent shadow-none">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text border-0"><i class="far fa-search"></i></span>
                                        </div>
                                        <input type="text" class="form-control border-0 shadow-none" placeholder="Search for answers ...">
                                    </div>
                                </div>
                                <div class="col-4 col-md-3">
                                    <button type="button" class="btn btn-block btn-primary">
                                        <span class="d-block d-md-none"><i class="far fa-search"></i></span>
                                        <span class="d-none d-md-block">Search</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <small class="form-text text-white">Popular searches: <a href="#" class="text-white font-weight-bold">Change colors</a>, <a href="#" class="text-white font-weight-bold">Set a font family</a>, <a href="#" class="text-white font-weight-bold">How to edit styles</a>, <a href="#" class="text-white font-weight-bold">Update the theme</a></small>
                    </form>
                </div>
            </div>
        </div>
    <a href="#sct-topics" class="tongue tongue-bottom tongue-white scroll-me">
        <i class="far fa-angle-down"></i>
    </a>
</section>

<section class="slice" id="sct-topics">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card mb-3">

                    {{-- <div class="card-header d-none d-md-block">
                        <div class="row no-gutters align-items-center">
                            <div class="col"></div>
                            <div class="col-4 text-muted">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-4">Replies</div>
                                    <div class="col-8">Last update</div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    

                    @foreach($threads as $thread)

                        <div class="card-body py-3">

                            <div class="row align-items-center">
                                <div class="col">
                                    <a href="javascript:void(0)" class="text-big">{{ $thread->title }}</a>

                                    {{-- <span class="badge badge-success align-text-bottom ml-1">Solved</span> --}}
                                    <div class="text-muted small mt-1">Started {{ $thread->created_at->diffForHumans() }} &nbsp;·&nbsp; 
                                        <a href="javascript:void(0)" class="text-muted">Allie Rodriguez</a>
                                    </div>
                                </div>
                                <div class="d-none d-md-block col-4">

                                    <div class="row no-gutters align-items-center">
                                        <div class="col-4">43</div>
                                        <div class="media col-8 align-items-center">
                                            <img src="/products/appwork/v122/assets_/img/avatars/3-small.png" alt="" class="d-block ui-w-30 rounded-circle">
                                            <div class="media-body flex-truncate ml-2">
                                                <div class="line-height-1 text-truncate">1 day ago</div>
                                                <a href="javascript:void(0)" class="text-muted small text-truncate">by Allie Rodriguez</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <hr class="m-0">

                    @endforeach

                    
                </div>

                <!-- Pagination -->
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center mt-4">
                        <li class="page-item"><a class="page-link" href="#"><i class="far fa-angle-left"></i></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">4</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">5</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">6</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#"><i class="far fa-angle-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>

@endsection