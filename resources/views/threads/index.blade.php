@extends('layouts.main')

@section('css')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.css">
@endsection

@section('content')


<section class="slice" id="sct-topics">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">

                <div class="card shadow--hover mb-5">
                    <div class="table-responsive">
                        <table class="table table-flush mb-0 align-items-center">
                            <tbody>
                                @foreach($threads as $thread)
                                    <tr>
                                        <td>
                                           <a href="{{$thread->link}}"><h6>{{$thread->title}}</h6></a>
                                           <div class="mt-3">
                                                {{-- <div class="avatar-group">
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
                                                </div> --}}

                                                Posted By <a href="#">{{str_random(rand(10,20))}}</a>
                                                <span class="pl-1">{{$thread->created_at->diffForHumans()}}</span>
                                                <span class="badge badge-md badge-pill badge-warning mr-2">{{str_random(rand(10,20))}}</span>
                                                <span class="badge badge-md badge-pill badge-danger mr-2">{{str_random(rand(10,20))}}</span>
                                                <span class="badge badge-md badge-pill badge-info mr-2">{{str_random(rand(10,20))}}</span>
                                            </div>

                                        </td>
                                        
                                    </tr>
                                @endforeach

                               
                              
                               
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div class="d-flex">
                    <div class="justify-content-center">
                        {{$threads->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('js')

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script>


@endsection