@extends('layouts.main')

@section('css')

@endsection

@section('content')

{{--  <section class="slice">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <!-- Topic header -->
                <h2 class="h2 mb-2">{{$thread->title}}</h2>
                <div class="media align-items-center mt-4">
                    <img alt="Image placeholder" src="{{ $thread->user->dp }}" class="avatar avatar-sm mr-3">
                    <div class="media-body">
                        <span class="h6 mb-0">{{ $thread->user->name }}</span>
                        <span class="text-sm text-muted">{{ $thread->created_at->diffForHumans() }}</span>
                    </div>
                </div>
                <div class="d-flex align-items-center mt-4">
                    <ul class="list-inline">
                        <li class="list-inline-item pr-3">
                            <span class="badge badge-lg badge-pill badge-info"><i class="far fa-code mr-1"></i>Web Design</span>
                        </li>
                        <li class="list-inline-item pr-3">
                            <span class="badge badge-lg badge-pill badge-success">Solved</span>
                        </li>
                        <li class="list-inline-item text-sm pr-3"><i class="far fa-thumbs-up mr-2"></i>100</li>
                        <li class="list-inline-item text-sm pr-3"><i class="far fa-comment mr-2"></i>20</li>
                    </ul>
                </div>

                <!-- Topic body -->
                <article class="mt-5">
                    {!! $thread->body !!}
                    {!! $thread->body !!}
                    {!! $thread->body !!}
                </article>
                <hr>
                <h5 class="mb-4">Comments</h5>
                <div class="p-5 bg-secondary border rounded" id="comments">
                   

                    <h5 class="mt-5 mb-4">Add you comment</h5>
                    <form class="form-secondary">
                        
                        <div class="form-group">
                            <label class="sr-only">Type your message</label>
                            <input type="hidden" id="post_id" value="{{$thread->id}}">
                            <textarea class="form-control textarea-autosize" rows="3" id="comment" placeholder="Type your message"></textarea>
                        </div>
                        <button type="button" class="btn btn-lg btn-block btn-primary shadow mt-4" id="addComment">Comment</button>
                    </form>
                </div>
                

            </div>
            <div class="col-lg-4 ml-lg-auto">
                <div data-toggle="sticky" data-sticky-offset="100">
                    <div class="card">
                        <div class="card-header">
                            <span class="h6 mb-0">Categories</span>
                        </div>
                        <div class="list-group list-group-flush">
                            <a href="#section_1" data-scroll-to data-scroll-to-offset="50" class="list-group-item list-group-item-action d-flex justify-content-between px-4">
                                <div>
                                    <i class="far fa-desktop mr-2"></i>
                                    <span>Theme integration</span>
                                </div>
                                <div>
                                    <i class="far fa-angle-right"></i>
                                </div>
                            </a>
                            <a href="#section_2" data-scroll-to data-scroll-to-offset="50" class="list-group-item list-group-item-action d-flex justify-content-between px-4">
                                <div>
                                    <i class="far fa-hand-pointer mr-2"></i>
                                    <span>Customization</span>
                                </div>
                                <div>
                                    <i class="far fa-angle-right"></i>
                                </div>
                            </a>
                            <a href="#section_3" data-scroll-to data-scroll-to-offset="50" class="list-group-item list-group-item-action d-flex justify-content-between px-4">
                                <div>
                                    <i class="far fa-tint mr-2"></i>
                                    <span>Fonts and colors</span>
                                </div>
                                <div>
                                    <i class="far fa-angle-right"></i>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between px-4">
                                <div>
                                    <i class="far fa-cloud mr-2"></i>
                                    <span>Updates</span>
                                </div>
                                <div>
                                    <i class="far fa-angle-right"></i>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between px-4">
                                <div>
                                    <i class="far fa-at mr-2"></i>
                                    <span>Premium support</span>
                                </div>
                                <div>
                                    <i class="far fa-angle-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="card mt-4">
                        <div class="card-header d-flex justify-content-between">
                            <div>
                                <span class="h6 mb-0">Popular topics</span>
                                <span class="badge badge-warning ml-1">9</span>
                            </div>
                            <a href="#" class="text-muted">View all ›</a>
                        </div>
                        <div class="list-group list-group-flush">
                            <a href="#section_1" data-scroll-to data-scroll-to-offset="50" class="list-group-item list-group-item-action d-flex justify-content-between px-4">
                                <div>
                                    <i class="far fa-desktop mr-2"></i>
                                    <span>Theme integration</span>
                                </div>
                                <div>
                                    <i class="far fa-angle-right"></i>
                                </div>
                            </a>
                            <a href="#section_2" data-scroll-to data-scroll-to-offset="50" class="list-group-item list-group-item-action d-flex justify-content-between px-4">
                                <div>
                                    <i class="far fa-hand-pointer mr-2"></i>
                                    <span>Customization</span>
                                </div>
                                <div>
                                    <i class="far fa-angle-right"></i>
                                </div>
                            </a>
                            <a href="#section_3" data-scroll-to data-scroll-to-offset="50" class="list-group-item list-group-item-action d-flex justify-content-between px-4">
                                <div>
                                    <i class="far fa-tint mr-2"></i>
                                    <span>Fonts and colors</span>
                                </div>
                                <div>
                                    <i class="far fa-angle-right"></i>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between px-4">
                                <div>
                                    <i class="far fa-cloud mr-2"></i>
                                    <span>Updates</span>
                                </div>
                                <div>
                                    <i class="far fa-angle-right"></i>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between px-4">
                                <div>
                                    <i class="far fa-at mr-2"></i>
                                    <span>Premium support</span>
                                </div>
                                <div>
                                    <i class="far fa-angle-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

@foreach($comments as $comment)
    <div class="media mt-2">
        <img alt="Image placeholder" class="rounded-circle shadow mr-4" src="/assets/img/prv/team-1-800x800.jpg" style="width: 64px;">
        <div class="media-body">
            <p>{{$comment->body}}</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#" class="text-muted">Like</a>
                </li>
                <li class="list-inline-item"><a href="#" class="text-muted">Reply</a>
                </li>
                <li class="list-inline-item"><a href="#" class="text-muted">Report</a>
                </li>
            </ul>
            @if($comment->replies->count())
                @foreach($comment->replies as $reply)
                        <img alt="Image placeholder" class="rounded-circle shadow mr-4" src="/assets/img/prv/team-1-800x800.jpg" style="width: 64px;">
                    <div class="media-body">
                        <p>{{$reply->body}} {{$reply->id}}</p>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#" class="text-muted">Like</a>
                            </li>
                            <li class="list-inline-item"><a href="#" class="text-muted">Reply</a>
                            </li>
                            <li class="list-inline-item"><a href="#" class="text-muted">Report</a>
                            </li>
                        </ul>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
    
@endforeach

@endsection

@section('js')

{{-- <script>
    var commentLink = '{{route('comment.add')}}'; 

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
      }
    });

    $(function(){

        //Comment add function
            $("#addComment").click(function(){
                var id = $("#post_id").val();
                var comment = $("#comment").val();
                
                $.ajax({
                    type: "POST",
                    url: commentLink,
                    data:{ post_id:id,comment_body:comment },
                    dataType: "json",
                    success: function(response){
                        console.log(response.html);
                        $("#comments").prepend(response.html);
                    },
                }); //End of Ajax
            });
        //End of add comments
        
        //show reply form
            
        //end reply form
        

    
    });
</script> --}}

@endsection

