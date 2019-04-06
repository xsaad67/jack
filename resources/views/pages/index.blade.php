@extends('layouts.main')

@section('css')
<style>
.sh1{background:#ffeadd;}
.sh2{background:#774c60;}.sh2 > a.q{ color:#fff; } .sh2 > a.author>h6{ color:#fff; }
.sh3{background: #ffba08;}
.sh4{background: #202c42;}.sh4 > a.q{ color:#fff; } .sh4 > a.author>h6{ color:#fff; }


</style>

@endsection

@section('content')

<section class="slice slice-lg bg-secondary">
    <div class="container-fluid masonry-container">
        <div class="row masonry">
            @foreach($quotes as $quote)
                <div class="masonry-item col-lg-3">
                    <div class="card shadow-sm shadow--hover mb-2" style="width:100%;">
                        <div class="actions actions-dark">
                            <a href="#" class="action-item"><i class="far fa-clipboard"></i></a> 
                        </div>
                        
                        <div class="card-body py-5 text-center sh{{rand(1,6)}}">
                            <a href="{{$quote->link}}" class="h5 lh-150 q">{{$quote->body}}</a>
                            <a href="#" class="author"><h6 class="mt-4 mb-0">{{ $quote->author->name }}</h6></a>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col text-center">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item pr-4">
                                            <a href="#" class="text-muted"><i class="far fa-share mr-1 text-muted"></i> 131</a>
                                        </li>
                                        <li class="list-inline-item pr-4">
                                            <a href="#" class="text-muted"><i class="far fa-eye mr-1 text-muted"></i> 255</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="text-muted"><i class="far fa-comments mr-1 text-muted"></i> 14</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach



        </div>
        {{$quotes->links()}}
       
        
    </div>
</section>

@endsection

@section('plugins')
    <script src="/assets/vendor/isotope-layout/dist/isotope.pkgd.min.js"></script>
    <script src="/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="/assets/vendor/%40fancyapps/fancybox/dist/jquery.fancybox.min.js"></script>
    <script src="/assets/js/infinite-scroll.js"></script>
@endsection

@section('js')



@endsection