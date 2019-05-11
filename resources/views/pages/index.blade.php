@extends('layouts.main')

@section('css')
<style>
.sh1{border-left:5px dashed #d25d15; }
.sh2{border-left:5px dashed #774c60;}
.sh3{border-left: 5px dashed #ffba08;}
.sh4{border-left: 5px dashed #202c42;}
.main-quote{
    font-size: 1.2rem!important;
    line-height: 2rem !important;
}
.main-quote>a{
    color: #67646b;
}
.main-quote>:before{
    content: open-quote;
    left: -5px;
    top: 20px;
    font-size: 3em;
   
}
.main-quote>:after{
    content: close-quote;
    left: 2px;
    top: 30px;
    font-size: 3em;
}
.main-quote>:after,.main-quote>:before{
    display: inline;
    height: 0;
    line-height: 0;
    position: relative;
    color:#9e97a7;
    font-weight: 700;
}

}

</style>

@endsection

@section('content')
<section class="slice bg-primary">
    <div class="container">
        <div class="text-center">
           <div class="main-quote">
            <a href="#"> Life's something we already understand. Death is a mystery. </a>
           </div>
        </div>
    </div>
</section>

{{-- <span class="custom-avatar avatar-sm mr-3 bg-info">WS</span> --}}

<div class="container">
    <div class="row mt-5">
        
    @foreach($quotes as $quote)
        <div class="col-lg-4">

            {{-- Quote Card --}}
            <div class="card">
                <div class="card-header bg-info d-flex align-items-center bg-lighten">
                    <span class="custom-avatar avatar-xs mr-2 font-size-sm" style="background:#8bc34a!important">{{createAcronym($quote->author->name)}}</span>
                   
                    <div><h5 class="card-title"><a href="#" class="font-size-sm">{{$quote->author->name}}</a></h5></div>
                </div>
                <div class="card-body">
                    <blockquote class="main-quote">
                        <a href="{{$quote->link}}"> {{$quote->body}}</a>
                    </blockquote>
                    <a href="{{$quote->author->link}}"><cite>{{$quote->author->name}}</cite></a>
                </div>
                <div class="card-footer d-flex">
                    <div class="mr-auto">
                        <a href="#" class="badge badge-facebook"><i class="ya ya-facebook"></i></a>
                        <a href="#" class="badge badge-twitter"><i class="ya ya-twitter"></i></a>
                        <a href="#" class="badge badge-pinterest"><i class="ya ya-pinterest"></i></a>
                        <a href="#" class="badge badge-reddit"><i class="ya ya-reddit"></i></a>
                    </div>
                    <div class="ml-auto">
                        <button class="btn btn-default btn-icon btn-xs mr-1"><i class="ya ya-heart"></i></button>
                        <button class="btn btn-default btn-icon btn-xs mr-1"><i class="ya ya-plus"></i></button>
                    </div>
                </div>
                <div class="keywords px-3 py-3">
                    @php $fuckSake = explode(",",$quote->tags); @endphp
                    @foreach($fuckSake as $fuck)
                        <span class="badge badge-secondary mb-1">{{$fuck}}</span>
                    @endforeach
                </div>
            </div>
            {{-- End Quote Card --}}

        </div>
    @endforeach

        
    </div>

</div>

@endsection