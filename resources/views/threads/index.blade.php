@extends('layouts.main')

@section('css')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.css">
@endsection

@section('content')


<section class="slice" id="sct-topics">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                  
                 <div class="list-group list-group-space">
                    <a href="#" class="list-group-item list-group-item-action d-flex flex-column flex-md-row align-items-center px-5 py-4 text-center text-md-left">
                        
                        <div class="list-group-content">
                            <h5 class="h3">Getting started with Purpose</h5>
                             <p class="text-muted">Hello world Hello world Hello world Hello world Hello world Hello world Hello world Hello world Hello world</p>
                            <div class="row mt-2">

                                <div class="col-lg-8">
                                     <span class="badge badge-md badge-pill badge-warning mr-2">{{str_random(rand(10,20))}}</span>
                                      <span class="badge badge-md badge-pill badge-warning mr-2">{{str_random(rand(10,20))}}</span>
                                       <span class="badge badge-md badge-pill badge-warning mr-2">{{str_random(rand(10,20))}}</span>
                                </div>
                                <div class="col-lg-4 mt-2">
                                <div class="media d-flex align-items-center">
                                    <div>
                                        <span class="avatar avatar-sm bg-primary"><i class="far fa-envelope-open"></i></span>
                                    </div>
                                    <div>
                                        <div class="media-body pl-2">
                                            <small class="d-block">5 answers for this topic</small>
                                            <small class="d-block text-muted">Written by Our Team</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </a>
                            
                </div>

               {{--  <div class="card shadow-hover mb-5">
                    <div class="table-responsive">
                        <table class="table table-flush mb-0 align-items-center">
                            <tbody>
                                @foreach($threads as $thread)
                                    <tr>
                                        <td>
                                            <div>0</div>
                                            <div>Votes</div>
                                             <div>0</div>
                                            <div>Votes</div>
                                        </td>
                                        <td>
                                           <a href="{{$thread->link}}"><h6>{{$thread->title}}</h6></a>
                                           <div class="mt-3">
                                                <div class="avatar-group">
                                                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Alexis Ren">
                                                        <img alt="Image placeholder" src="/assets/img/prv/thumb-1.jpg" class="rounded-circle">
                                                    </a>
                                                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Michael Jhonson">
                                                        <img alt="Image placeholder" src="/assets/img/prv/thumb-2.jpg" class="rounded-circle">
                                                    </a>
                                                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Daniel Lewis">
                                                        <img alt="Image placeholder" src="/assets/img/prv/thumb-3.jpg" class="rounded-circle">
                                                    </a>
                                                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Daniel Lewis">
                                                        <img alt="Image placeholder" src="/assets/img/prv/thumb-3.jpg" class="rounded-circle">
                                                    </a>
                                                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Alexis Ren">
                                                        <img alt="Image placeholder" src="/assets/img/prv/thumb-1.jpg" class="rounded-circle">
                                                    </a>
                                                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Michael Jhonson">
                                                        <img alt="Image placeholder" src="/assets/img/prv/thumb-2.jpg" class="rounded-circle">
                                                    </a>
                                                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Daniel Lewis">
                                                        <img alt="Image placeholder" src="/assets/img/prv/thumb-3.jpg" class="rounded-circle">
                                                    </a>
                                                </div>

                                                Posted By <a href="#">{{str_random(rand(10,20))}}</a>
                                                <span class="pl-1">{{$thread->created_at->diffForHumans()}}</span>
                                                
                                            </div>
                                            <span class="badge badge-md badge-pill badge-warning mr-2">{{str_random(rand(10,20))}}</span>
                                            <span class="badge badge-md badge-pill badge-danger mr-2">{{str_random(rand(10,20))}}</span>
                                            <span class="badge badge-md badge-pill badge-info mr-2">{{str_random(rand(10,20))}}</span>

                                        </td>
                                        
                                    </tr>
                                @endforeach

                               
                              
                               
                            </tbody>
                        </table>
                    </div>
                </div> --}}
                
               {{--  <div class="d-flex">
                    <div class="justify-content-center">
                        {{$threads->links()}}
                    </div>
                </div> --}}
    
        </div>
    </div>
</section>

@endsection

@section('js')

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script>


@endsection