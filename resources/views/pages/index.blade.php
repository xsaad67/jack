@extends('layouts.main')


@section('content')

<section class="slice slice-lg bg-secondary">
    <div class="container">
        <div class="row row-grid">
            @foreach($quotes as $quote)
                <div class="col-lg-4">
                    <div class="card shadow-sm shadow--hover mb-2">
                        {{-- {{$imagesArray[array_rand($imagesArray)] }}
                        @if(!is_null($imagesArray[array_rand($imagesArray)] ))
                            <img alt="Image placeholder" src="{{$imagesArray[array_rand($imagesArray)]}}" class="card-img-top">
                        @endif --}}
                        <div class="card-body py-5 text-center">
                            <a href="#" class="h5 lh-150">{{$quote->body}}</a>
                            <h6 class="text-muted mt-4 mb-0">{{ $quote->author->name }}</h6>
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
       
        <!-- Load more -->
        <div class="mt-lg text-center">
            <a href="#" class="btn btn-dark btn-circle shadow">Load more</a>
        </div>
    </div>
</section>

@endsection