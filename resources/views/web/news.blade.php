@extends('layouts.web')
@section('title', 'News')

@section('content')
<div class="clearfix"></div>
<section class="inner-page">
<div class="container">
</div><!--container-->
</section><!--inner-page-->

<div class="clearfix"></div>
<section class="logo-section">
<div class="container">
<h4 class="inner-page-title">NEWS</h4>
@foreach ($news as $new)
<div class="row" style="margin-bottom: 20px;">





    <div class="col-md-4 newsdiv">
        <figure>
        <img width="360" height="250" src="{{ $new->logo}}" alt="" class="img-responsive">
        </figure>
        </div>
<div class="col-md-8 newsdiv" >
<h3 class="news-title">{{ $new->title}}<br/><span style="display:;"><i class="fa fa-calendar" style="font-size:14px;">  </i></span></h3>
<a href="{{ route('home.newsinner',[$new->id,$new->slug_url])}}" class="btn btn-primary">READ MORE</a>
</div><!--col-md-8-->



<div class="clearfix"></div>







</div><!--row-->
@endforeach


</div><!--container-->
</section> <!--logo-section-->
<div class="clearfix"></div>

@endsection

@section('footerScript')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
 <script>
$(document).ready(function(){
   var scroll_start = 0;
   var startchange = $('.logo-section');
   var offset = startchange.offset();
   $(document).scroll(function() {
      scroll_start = $(this).scrollTop();
      if(scroll_start > offset.top) {
          $('header').css('background-color', 'rgba(0, 0, 0,.8)');
       } else {
          $('header').css('background-color', 'transparent');
       }
   });
});
</script>
@endsection
