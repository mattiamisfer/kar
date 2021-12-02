@extends('layouts.web')
@section('title', $news->title)

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

<div class="row newsdetail">
<div class="col-md-4">
<figure>
<img width="360" height="250" src="{{ $news->logo }}" alt="" class="img-responsive"/>
</figure>
</div><!--col-md-4-->
<div class="col-md-8">
<h3 class="news-title">{{ $news->title }}<br/><span style="display:none;"><i class="fa fa-calendar" style="font-size:14px;"> 2022-12-30</i></span></h3>

{!!  $news->content !!}
</div><!--col-md-8-->
</div><!--row-->



</div><!--container-->
</section> <!--logo-section-->
<div class="clearfix"></div>

@endsection
