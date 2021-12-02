@extends('layouts.web');
@section('title', 'Company')

@section('content')
<div class="clearfix"></div>
<section class="inner-page">
<div class="container">
</div><!--container-->
</section><!--inner-page-->

<div class="clearfix"></div>
<section class="logo-section">
<div class="container">
<h4 class="inner-page-title">COMPANIES</h4>
<div class="clearfix"></div>
<br/><br/>

<div class="row"><div class="col-md-8 col-md-offset-2">
<div class="row">


    @foreach ($companies as $company)


    <div class="col-md-8 col-md-offset-4">
<div class="news-img" style="width:250px;">
<a href="{{ $company->url}}" target="_blank"><img src="{{ $company->logo}}" width="300" class="img-responsive"></a>
</div><!--news-img-->  <br>

    <hr class="red-hr" />

    {!!$company->content!!}
 <br>

<a href="http://www.cebarco.com.bh/" class="btn btn-primary" target="_blank">VISIT OUR WEBSITE</a>

<hr class="red-hr space-more">
</div><!--col-md-12-->
@endforeach

















</div><!--row-->

</div>
</div><!--row-->

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
