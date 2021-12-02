@extends('layouts.web')
@section('title', 'Sector')

@section('headerJs')
<link href="{{ asset('web/lightbox/dist/css/lightbox.min.css')}}" rel="stylesheet" />

@endsection
@section('content')
<div class="clearfix"></div>
<section class="inner-page">
<div class="container">
</div><!--container-->
</section><!--inner-page-->

<div class="clearfix"></div>
@foreach ($categories as $category)


<section class="logo-section">
<div class="container">
<h4 class="inner-page-title">{{ $category->title}}</h4>

@foreach ($category->sectors  as $key => $sector)


<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="row">


<div class="col-md-8 col-md-offset-4">
<div class="news-img" style="width:250px;">
<a href="{{ $sector->url}}" target="_blank"><img src="{{$sector->logo}}" class="img-responsive"/></a>
</div><!--news-img-->
<hr class="red-hr">

{!!$sector->content!!}
<a href="{{ $sector->url}}" class="btn btn-primary" target="_blank">VISIT OUR WEBSITE</a>
<div class="clearfix"></div>
<br /><br />
<div class="row">

    @foreach(explode(',', $sector->gallery) as $info)
<div class="col-md-3">
<a data-lightbox="example-1" rel="example_group_{{$key}}"  id="{{$key}}"  class="zoom galleryZoomIcon example-image-link fancybox-thumb clickFunc" data-fancybox-type="image" data-thumbnail="" data-fancybox-group="gallery" data-fancybox="fancybox" href="{{ $info }}">
        <img src="{{ $info }}" alt="" width="100%" class="example-image img-responsive" height="237" class="" style="display: inline-block;">
        </a>
</div><!--col-md-3-->
@endforeach
</div><!--row-->
</div><!--col-md-8-->
</div><!--row-->

</div> <!--col-md-8 col-md-offset-2-->
</div><!--row-->
@endforeach
</div><!--container-->
</section> <!--logo-section-->
@endforeach
<div class="clearfix"></div>

@endsection

@section('footerScript')
<script src="{{ asset('web/lightbox/dist/js/lightbox-plus-jquery.min.js')}}"></script>

@endsection

