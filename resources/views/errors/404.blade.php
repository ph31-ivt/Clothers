@extends('layout')
@section('title', 'Shop')
@section('content')
	<div class="ads-grid_shop">
		<div class="shop_inner_inf">
			<div class="error_page">
				<h4>404</h4>
				<p>This link dead link</p>
				<ul class="social-nav model-3d-0 footer-social social two">
					<li>
						<a href="https://www.facebook.com/rooneynam91" class="facebook" target="blank">
							<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="https://twitter.com/namdangnguyen09" class="twitter" target="blank">
							<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/namdangnguyen09" class="instagram" target="blank">
							<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
						</a>
					</li>
				</ul>
				<a class="b-home" href="{{route("/")}}">Back to Home</a>
			</div>
		</div>
	</div>
@stop