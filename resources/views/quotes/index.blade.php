<div class="row masonry">
            @foreach($quotes as $quote)
                <div class="masonry-item col-lg-3">
                    <div class="card shadow-sm shadow--hover mb-2" style="width:100%;">
                        <div class="actions actions-dark">
                            <a href="#" class="action-item"><i class="far fa-clipboard"></i></a> 
                        </div>
                        
                        <div class="card-body py-3  sh{{rand(1,4)}}">

                            <a href="{{$quote->link}}" class="h5 lh-150 q">{{$quote->body}}</a>
                            <footer class="blockquote-footer mt-3">
                                <a href="{{$quote->author->link}}"><cite class="font-weight-600" title="Source Title">{{$quote->author->name}}</cite></a>
                            </footer>
                           
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