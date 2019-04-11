@extends('layouts.main')

@section('css')

@endsection


@section('content')

<section class="mt-4 mb-2">
	
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="card shadow-sm shadow--hover overflow-hidden">
                            {{-- <div class="position-relative overflow-hidden">
                                <img alt="Image placeholder" src="/assets/img/prv/img-3-800x600.jpg" class="card-img-top">
                            </div> --}}
                            <div class="card-body blockquote-card bg-secondary">

                               	<blockquote class="blockquote py-1">
    	                            <p class="lead">{{$quote->body}}</p>
    	                            <footer class="blockquote-footer">
                                        <a href="{{$quote->author->link}}" ><cite class="font-weight-600" title="Source Title">{{$quote->author->name}}</cite></a>
                                    </footer>
		                        </blockquote>
                                {{ $quote->tags }}

                            </div>

                            <div class="card-footer">

                                <div class="d-flex justify-content-between mn-mh">
                                    
                                        @if(!is_null($navigation->first()))
                                            <a href="{{$navigation->first()->link}}" class="btn btn-primary btn-animated btn-animated-x">
                                                <span class="btn-inner--visible">Previous</span>
                                                <span class="btn-inner--hidden"><i class="far fa-arrow-left"></i></span>
                                            </a>
                                        @endif
                                    
                                     <div style="padding-top:10px">
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item pr-4">
                                                <a href="#" class="text-muted"><i class="far fa-bookmark mr-1 text-muted"></i> 131</a>
                                            </li>
                                            <li class="list-inline-item pr-4">
                                                <a href="#" class="text-muted"><i class="far fa-eye mr-1 text-muted"></i> 255</a>
                                            </li>
                                        </ul>
                                    </div>
                                        @if(!is_null($navigation->last()))
                                            <a href="{{$navigation->last()->link}}" class="btn btn-primary btn-animated btn-animated-x">
                                                <span class="btn-inner--visible">Next</span>
                                                <span class="btn-inner--hidden"><i class="far fa-arrow-right"></i></span>
                                            </a>
                                        @endif
                                </div>

                                <div class="row mt-5">
                                   
                                </div>
                               
                            </div>
                </div>
			</div>

			<div class="col-lg-4">
				<div class="media align-items-center">
                    {{-- <span class="avatar avatar-lg bg-pink rounded mr-4">FD</span> --}}
                    <img src="http://whatsmyquote.com/images/avatar-medium-avatar-e7ddc48127277056b38626526c7fd22918f18da0.jpg" class="avatar avatar-lg rounded">
                    <div class="media-body">
                        <a href="#" class="h5 mb-0">Front End Developer</a>
                    </div>
                </div>
			</div>
		</div>
	</div>
</section>

@endsection


@section('js')

@endsection