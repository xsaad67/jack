@extends('layouts.main')

@section('css')
<style>
.sh1{border-left:5px dashed #d25d15; }
.sh2{border-left:5px dashed #774c60;}
.sh3{border-left: 5px dashed #ffba08;}
.sh4{border-left: 5px dashed #202c42;}
.main-quote{
    font-size: 30px;
    margin-bottom: 10px;
    margin-top: 10px;
}
.main-quote>a{
        color: #fff;
}
.main-quote>:before{
    content: open-quote;
    left: -5px;
    top: 31px;
    font-size: 4em;
   
}
.main-quote>:after{
    content: close-quote;
    left: 2px;
    top: 30px;
    font-size: 3em;
}
.main-quote>:after,.main-quote>:before{
    display: inline;
    height: 0;
    line-height: 0;
    position: relative;
    color: #ddd;
}

}
</style>

@endsection

@section('content')
<section class="slice bg-primary">
    <div class="container">
        <div class="text-center">
           <div class="main-quote">
            <a href="#"> Life's something we already understand. Death is a mystery. </a>
           </div>
        </div>
    </div>
</section>
<section class="slice slice-lg bg-secondary">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 masonry-container"  id="post-data">

                @include('quotes.index')
                
                <div class="ajax-load text-center" style="display:none">
                    <p><img src="http://demo.itsolutionstuff.com/plugin/loader.gif">Loading More post</p>
                </div>

            </div>

            <div class="col=lg-2">
                hello
            </div>
        </div>
       
        
    </div>
</section>

@endsection

@section('plugins')
    <script src="/assets/vendor/isotope-layout/dist/isotope.pkgd.min.js"></script>
    <script src="/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="/assets/vendor/%40fancyapps/fancybox/dist/jquery.fancybox.min.js"></script>
    <script src="/assets/js/infinite-scroll.js"></script>
@endsection

@section('js')

<script type="text/javascript">

    var page = 1;
    $(function(){
    $(window).scroll(function() {

        if($(window).scrollTop() + $(window).height() >= $("main").height()) {
            page++;
            loadMoreData(page);
        }
    });


    });
   

    function loadMoreData(page){
      $.ajax(
            {
                url: '?page=' + page,
                type: "get",
                beforeSend: function()
                {
                    $('.ajax-load').show();
                }
            })
            .done(function(data)
            {
                if(data.html == " "){
                    $('.ajax-load').html("No more records found");
                    return;
                }
                $('.ajax-load').hide();
                $("#post-data").append(data.html);
            })
            .fail(function(jqXHR, ajaxOptions, thrownError)
            {
                  alert('server not responding...');
            });
    }
</script>

@endsection