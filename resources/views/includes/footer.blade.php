 <footer class="site-footer border-top">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 mb-5 mb-lg-0">
				<div class="row mb-5">
					<div class="col-md-12">
						<h3 class="footer-heading mb-4">Site Haritası</h3>
					</div>
					<div class="col-md-12 col-lg-12">
						<ul class="list-unstyled">
							@foreach ($settings["menu"] as $k=>$v)
							<li>
								<a href="{{url($v["url"])}}">{{$v["text"]}}</a>
							</li>
							@endforeach
						</ul>
					</div>
				</div>


			</div>
			<div class="col-lg-4 mb-5 mb-lg-0">

				<div class="row">
					<div class="col-md-12">
						<h3 class="footer-heading mb-4">Takip Edin</h3>

						<div>
							<a href="{{$settings["facebook"]}}" class="pl-0 pr-3">
								<span class="icon-facebook"></span></a>
							<a href="{{$settings["twitter"]}}" class="pl-3 pr-3">
								<span class="icon-twitter"></span></a>
							<a href="{{$settings["instagram"]}}" class="pl-3 pr-3">
								<span class="icon-instagram"></span></a>
							<a href="{{$settings["linkedin"]}}" class="pl-3 pr-3">
								<span class="icon-linkedin"></span></a>
						</div>
					</div>
				</div>


			</div>

		</div>

	</div>
</footer>
</div>



<script src="{{asset('js/owl.carousel.min.js')}}"> </script>
<script src="{{asset('js/jquery.stellar.min.js')}}"> </script>
<script src="{{asset('js/jquery.countdown.min.js')}}"> </script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"> </script>
<script src="{{asset('js/bootstrap-datepicker.min.js')}}"> </script>
<script src="{{asset('js/aos.js')}}"> </script>
<script src="{{asset('js/main.js')}}"> </script>
<script src="{{asset('js/dente.js?'.time())}}"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.tr.min.js" integrity="sha512-fIZStvQgU9hAKeI9ovYv2kAv8oBsXHmxoea+RHi3684K1jriiTSvcjF+h0iRzkaZWC8NlmPGd4SIlCIx9uRdCw==" crossorigin="anonymous"> </script>

</body>
</html>