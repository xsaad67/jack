@extends('layouts.main')

@section('css')

@endsection


@section('content')

<section class="mt-2 mb-2">
	
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

		                            <footer class="blockquote-footer"><a href="{{$quote->author->link}}" ><cite class="font-weight-600" title="Source Title">{{$quote->author->name}}</cite></a>
                                        <div class="text-right">fuck</div>
                                    </footer>
		                        </blockquote>
                                {{ $quote->tags }}

                            </div>

                            <div class="card-footer">

                                <div class="d-flex justify-content-between">
                                    <div>
                                        <a href="{{$navigation->first()->link}}" class="btn btn-primary btn-animated btn-animated-x">
                                            <span class="btn-inner--visible">Previous</span>
                                            <span class="btn-inner--hidden"><i class="far fa-arrow-left"></i></span>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#"><h3>{{$quote->author->name}}</h3></a>
                                    </div>
                                    <div>
                                        <a href="{{$navigation->last()->link}}" class="btn btn-primary btn-animated btn-animated-x">
                                            <span class="btn-inner--visible">Next</span>
                                            <span class="btn-inner--hidden"><i class="far fa-arrow-right"></i></span>
                                        </a>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
			</div>

			<div class="col-lg-4">
				
			</div>
		</div>
	</div>
</section>

@endsection


@section('js')

@endsection