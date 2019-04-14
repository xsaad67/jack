@extends('layouts.main')

@section('css')

@endsection

@section('content')

 <section class="slice">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
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

                <div class="p-5 bg-secondary border rounded">

                    <div id="comments">
                        @include('comments.replies', ['comments' => $comments])
                    </div>

                    {{-- {{ $comments->fragment('comments')->links() }} --}}

                    <h5 class="mt-5 mb-4">Add you comment</h5>


                    <form class="form-secondary">
                        
                        <div class="form-group">
                            <label class="sr-only">Type your message</label>
                            <input type="hidden" id="post_id" value="{{$thread->id}}">
                            <textarea class="form-control" rows="3" id="comment" placeholder="Type your comment"></textarea>
                        </div>
                        <button type="button" class="btn btn-lg btn-block btn-primary shadow mt-4" id="addComment">Comment</button>
                    </form>
                </div>
            </div>
            
            {{-- @include('threads.sidebar') --}}
        </div>
    </div>
</section>

@endsection

@section('js')

<script>
    var commentLink = '{{route('comment.add')}}'; 

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
      }
    });

   function showReplyHtml(threadId, parentId){
        var htmlToAppend = `<div class="form-group replyForm">
                            <label class="sr-only">Type your message</label>
                            <input type="hidden" class="post_id" value="`+threadId+`">
                            <input type="hidden" class="parent" value="`+parentId+`">
                            <textarea class="form-control textarea-autosize body" rows="3" id="comment" placeholder="Type your comment"></textarea>
                            <button type="button" class="btn btn-block btn-primary shadow mt-2 addReply " >Comment</button>
                        </div>`;
        return htmlToAppend;
   }

    // var notOpen = true;

    $(function(){
         // alert(showReplyHtml(1,2));

        //Comment add function
            $("#addComment").click(function(){
                var id = $("#post_id").val();
                var comment = $("#comment").val();
                
                $.ajax({
                    type: "POST",
                    url: commentLink,
                    data:{ post_id:id , comment_body:comment},
                    dataType: "json",
                    success: function(response){
                        console.log(response.html);
                        $("#comments").append(response.html);
                    },
                }); //End of Ajax
            });

        //End of add comments
        
        
        //show reply form
            $("#comments").on("click",".showReply",function(){

                var working = $(this).closest('.media');
                var parent = working.data("id");
                var thread = "{{$thread->id}}";
                $(".replyForm").remove();
                working.find(".media-body").append(showReplyHtml(thread,parent));
            });
            



        //Ajax to reply form
            
            $("#comments").on("click",".addReply",function(){

                var parent = $(this).parent().find("input.parent").val();
                var thread_id = $(this).parent().find('input.post_id').val();
                var body = $(this).parent().find("textarea.body").val();
                
                var toAppend = $(this).closest('.media-body');
                
                $.ajax({
                    type: "POST",
                    url: commentLink,
                    data:{ post_id:id , comment_body:comment},
                    dataType: "json",
                    success: function(response){
                        console.log(response.html);
                        $("#comments").append(response.html);
                    },
                }); //End of Ajax
       
                toAppend.append(abc);
                 
            });
    
    });
</script>

@endsection

