@extends('layouts.main')

@section('css')
<style>
.sh1{background:#ffeadd;}
.sh2{background:#774c60;}.sh2 > a.q{ color:#fff; } .sh2 > a.author>h6{ color:#fff; }
.sh3{background: #ffba08;}
.sh4{background: #202c42;}.sh4 > a.q{ color:#fff; } .sh4 > a.author>h6{ color:#fff; }


</style>

@endsection

@section('content')

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