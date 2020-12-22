@extends('layouts.default')
@section('content')
<div class="site-blocks-cover aos-init aos-animate inner-page" style="height:200px;min-height:150px;background-image: url({{asset("images/hero_bg_2.jpg")}});" data-aos="fade" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row ">
			<div class="col-md-12 col-xs-12 pagestitle">
				<h1>
					<strong>{{$settings["subpagetitle"]}}</strong></h1>
			</div>
		</div>
	</div>
</div>

<div class="site-section section-about">
	<div class="container">
		<div class="row">
			<div class="col-md-12 pr-md-12 text-left mb-5">
				<div>
					<p>Dinamik sayfalar</p>
				</div>
			</div>
		</div>
	</div>
</div>
@include("includes.usercomment")
@stop
