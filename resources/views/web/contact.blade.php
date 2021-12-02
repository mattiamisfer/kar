@extends('layouts.web')
@section('title', 'Contact Us')

@section('content')
<div class="clearfix"></div>
<section class="inner-page">
<div class="container">
</div><!--container-->
</section><!--inner-page-->

<div class="clearfix"></div>
<section class="logo-section">
<div class="container">
<h4 class="inner-page-title"> CONTACT US</h4>
<div class="row">
<div class="col-sm-4">
<h3 class="contact-title">KAR GROUP</h3>

<address>
<strong><i class="fa fa-map-marker"></i>&nbsp;</strong> Cebarco Tower<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Building&nbsp;&nbsp; 249<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Road&nbsp;&nbsp;  3306 <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Block&nbsp;&nbsp;
333 <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kingdom Of Bahrain<br>
<strong><i class="fa fa-phone"></i></strong>&nbsp; +973 17823232 <br /><br/>
<strong><i class="fa fa-fax"></i></strong>&nbsp; +973 17722001 <br />   <br/>
<strong><i class="fa fa-envelope"></i></strong>&nbsp; contact@kar-group.com
</address>
</div>
 <div class="col-sm-8 contact-form">
<br/><br/><br/>
@if (Session::has('success'))

<div class="alert alert-success" role="alert">
  {{ Session::get('success') }}
</div>
@endif
@if (Session::has('failure'))
<div class="alert alert-danger" role="alert">
  {{ Session::get('failure') }}
</div>
@endif
<form id="contact" method="post" action="{{ route('home.contact.post')}}" class="form" role="form">
    @csrf
<div class="row">
<div class="col-xs-6 col-md-6 form-group">
<input class="form-control" id="name" name="name" placeholder="Name" type="text" required autofocus />
</div>
<div class="col-xs-6 col-md-6 form-group">
<input class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" type="text" required />
</div>
</div>
<div class="row">
<div class="col-xs-12 col-md-12 form-group">
<input class="form-control" id="email" name="email" placeholder="Email Address" type="text" required autofocus />
</div>
</div>

<textarea class="form-control" id="message" name="message" placeholder="Message" rows="5"></textarea>
<br />
<div class="row">
<div class="col-xs-12 col-md-12 form-group">
<button class="btn btn-primary pull-right" name="submit" type="submit">Submit</button>
</form>
</div>

</div><!--container-->
</section> <!--logo-section-->
<div class="clearfix"></div>
@endsection
