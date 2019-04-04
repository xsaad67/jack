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
		                            <footer class="blockquote-footer"><a href="#"><cite class="font-weight-600" title="Source Title">Monroe Parker</cite></a></footer>
		                        </blockquote>
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

			<div class="col-lg-4">
				
			</div>
		</div>
	</div>
</section>

@endsection


@section('js')

@endsection