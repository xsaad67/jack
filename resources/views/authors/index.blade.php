@extends('layouts.main')

@section('content')

<div class="container my-5">
	<div class="row">
		<div class="col-lg-8">
			<div class="row">
				@foreach($alphabets as $alphabet)
					<div class="col-lg-4 mb-2">
						<p class="h3">{{$alphabet}}'s authors</p>
						@php $filtered = $authorsListing->where("alpha",strtolower($alphabet)) @endphp
						@if($filtered->isEmpty())
							<div class="alert alert-info">No listing found for letter</div>
						@else
						<ul>
							@foreach($filtered as $filter)
								<li><a href="#">{{ ucwords($filter->name) }}</a></li>
							@endforeach
							
						</ul>
						<div class="text-center"> <a href="#" class="btn btn-warning mx-auto">See more</a> </div>
						@endif
					</div>
				@endforeach

			</div>
		</div>

		<div class="col-lg-4">

		</div>
	</div>
</div>


@endsection