@extends('layouts.web')
@section('title', 'Home')

@section('content')

<section>
    <div class="slider-container" id="caption-slide">
            <div class="slider">

                @foreach ($sliders as $slider)
                <div class="slide">
                    <img src="{{ $slider->image }}" width="100%" alt="">
                <div class="carousel-caption">
                     <h3>{{ $slider->title}}</h3>
                     <a href="about-us.html" class="btn btn-primary">READ MORE</a>
                    </div>
                </div>
                @endforeach


             </div>

            <div class="switch" id="prev"><span></span></div>
            <div class="switch" id="next"><span></span></div>
        </div>
    </section>


    <div class="clearfix"></div>
    <section class="logo-section">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="bar-vertical"></div>
    <h4 class="center-title">COMPANY SECTORS</h4>
    <ul class="list-inline innovation-list">
    <li>INNOVATION</li>
    <li>CREATIVITY </li>
    <li>EXCELLENCE</li>
    </ul>
    <div class="clearfix"></div>


    <div class="o-margin">
    <div class="row">

    @foreach ($categories->chunk(4) as $data )

   @foreach ($data as $category)


    <div class="col-md-3">
    <div class="img-strip text-center">
    <img src="{{ asset('web/icon').'/'.$category->image}}" style="border-radius:50%;" alt="Avatar" class="img-responsive img-cir">
    <div class="clearfix"></div>
    <h4 class="text-center title-font"><a href="{{ route('home.sector',[$category->id,$category->slug_url])}}" >{{ $category->title}}</a></h4>
    <a href="{{ route('home.sector',[$category->id,$category->slug_url])}}" class="btn btn-primary">READ MORE</a>
    </div><!--img-strip-->
    </div><!--col-md-3-->

    @endforeach










    <div class="clearfix"></div>
    <br /><br />

    @endforeach













    </div><!--row-->
    </div><!--o-margin-->

    </div><!--col-md-12-->
    </div><!--row-->
    </div><!--container-->
    </section> <!--logo-section-->
    <div class="clearfix"></div>
    <section class="news-updates" style="display:none;">
    <div class="container">
    <h4 class="center-title">NEWS UPDATES</h4>
    <div class="row">
    <div class="col-md-4">
    <div class="news-img">
    <img src="images/automobile.jpg" class="img-responsive"/>
    </div><!--news-img-->
    </div><!--col-md-4-->
    <div class="col-md-8">
    <h3 class="news-title">Lorem Ipsum</h3>
    <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>

    <h5 class="white calendar"><i class="fa fa-calendar"></i> 09 / 05 / 2017</h5>
    <a href="#" class="btn btn-primary">Read More</a>
    </div><!--col-md-8-->
    </div><!--row-->
    <div class="clearfix"></div>
    <br />
    <div class="row">
    <div class="col-md-4">
    <div class="news-img">
    <img src="images/construction.jpg" class="img-responsive"/>
    </div><!--news-img-->
    </div><!--col-md-4-->
    <div class="col-md-8">
    <h3 class="news-title">Lorem Ipsum</h3>
    <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>

    <h5 class="white calendar"><i class="fa fa-calendar"></i> 09 / 05 / 2017</h5>
    <a href="#" class="btn btn-primary">Read More</a>
    </div><!--col-md-8-->
    </div><!--row-->
    </div><!--container-->
    </section>
    <div class="clearfix"></div>
@endsection

@section('footerScript')

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="{{ asset('web/slider/lib/jquery-1.11.1.min.js')}}"><\/script>')</script>
<script src="{{ asset('web/slider/src/slider.js')}}"></script>
<script>
	$("#slider-container").sliderUi({
		speed: 500,
		cssEasing: "fadein(0.285, 1.015, 0.165, 1.000)"
	});
	$("#caption-slide").sliderUi({
		caption: true
	});
</script>
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
