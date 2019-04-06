@extends('layouts.main')


@section('content')

	<section class="mt-5">

      <div class="container">
		<div class="row">
      	@foreach($quotes as $quote)

			<div class="col-lg-4">

		        <div class="row aos-init aos-animate" data-aos="fade-up">

		          <div class="card card-body bg-primary-3 text-light ml-1">
				      <div class="d-flex justify-content-between mb-3">
				        <div class="text-small d-flex">
				          <div class="mr-2">
				            <a href="#">Podcasts</a>
				          </div>
				          <span class="opacity-70">1st November</span>
				        </div>
				        <span class="badge bg-primary text-light">
				          <svg class="icon icon-sm bg-white" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
				            <path d="M16.5 5C14.8905 5 13.0082 6.82463 12 8C10.9918 6.82463 9.1095 5 7.5 5C4.651 5 3 7.22218 3 10.0504C3 13.1835 6 16.5 12 20C18 16.5 21 13.25 21 10.25C21 7.42177 19.349 5 16.5 5Z" fill="#212529"></path>
				          </svg>

				          121
				        </span>
				      </div>
				      <div class="d-flex">
				       
				        <div class="ml-3">
				          <a href="#">
				            <h4 class="mb-1">{{$quote->body}}</h4>
				          </a>
				          <span class="text-small opacity-70">– {{$quote->author->name}}</span>
				        </div>
				      </div>
				    </div>
		        </div>

	    	</div>


    	@endforeach
    	</div>
      </div>
    </section>

@endsection

@section('js')

<script type="text/javascript">
	$(function(){
		alert("yes");
	});
</script>

@endsection