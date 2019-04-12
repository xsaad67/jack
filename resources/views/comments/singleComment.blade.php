 <div class="media mt-2" id="comment-{{$comment->id}}">
    <img alt="Image placeholder" class="rounded-circle shadow mr-4" src="/assets/img/prv/team-1-800x800.jpg" style="width: 64px;">
    <div class="media-body">
        <p>{{$comment->body}} {{$comment->id}}</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#" class="text-muted">Like</a>
            </li>
            <li class="list-inline-item"><a href="javascript:void(0)" class="showReply text-muted" class="text-muted">Reply</a>
            </li>
            <li class="list-inline-item"><a href="#" class="text-muted">Report</a>
            </li>
        </ul>
        
       {{--  <form class="form-secondary">
            <div class="form-group">
                <label class="sr-only">Type your message</label>
                <input type="hidden" id="post_id" value="{{$thread->id}}">
                <textarea class="form-control textarea-autosize" rows="3" id="comment" placeholder="Type your comment"></textarea>
            </div>
            <button type="button" class="btn btn-lg btn-block btn-primary shadow " id="addComment">Comment</button>
        </form> --}}
        @include('comments.replies', ['comments' => $comment->replies])
    </div>

</div>