@extends('frontend.master')
@section('title', 'Detail Product')
@section('content')
<style>
	* {
  box-sizing: border-box;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
/*
style comment*/
.bold{
	font-weight:700;
}
.padding-bottom-7{
	padding-bottom:7px;
}

.review-block{
	background-color:#FAFAFA;
	border:1px solid #EFEFEF;
	padding:15px;
	border-radius:3px;
	margin-bottom:15px;
}
.review-block-name{
	font-size:12px;
	margin:10px 0;
}
.review-block-date{
	font-size:12px;
}
.review-block-rate{
	font-size:13px;
	margin-bottom:15px;
}
.review-block-title{
	font-size:15px;
	font-weight:700;
	margin-bottom:10px;
}
.review-block-description{
	font-size:13px;
}

/*style ratting*/
/*box comment + ratting*/
    .animated {
    -webkit-transition: height 0.2s;
    -moz-transition: height 0.2s;
    transition: height 0.2s;
	}

	.stars
	{
	    margin: 20px 0;
	    font-size: 30px;
	    color: dodgerblue;
	}
	 .half {
    position:relative;

    >after {
    content:'';
    position:absolute;
    z-index:1;
    background:white;
    width: 50%;
    height: 100%;
    left: 47%;
    }

.haflstar {
  font-size: 40px;
  color: #e67e22;
  &.half {
    position: relative;
    &:before {
      position: relative;
      z-index: 9;
      width: 47%;
      display: block;
      overflow: hidden;
    }
    &:after {
      content: '\e006';
      position: absolute;
      z-index: 8;
      color: #bdc3c7;
      top: 0;
      left: 0;
    }
  }
}

</style>
       <div class="single">
         <div class="wrap">
     	    
		<div class="cont span_2_of_3">
			  <div class="col-lg-5" style="padding: 10px">
				<!-- start product_slider -->
				 	<!-- Full-width images with number text -->
				 	<?php $i = 2; ?>
				  @foreach($product->images as $image)
				    <div class="mySlides">
				    	<div class="numbertext">1 / 6</div>
				      	<img src="{{asset($image->slug)}}" style="width:100%">
				  	</div>
				  @endforeach
				  @if(!empty($imageDetails))
				  		@foreach($imageDetails as $image)
						    <div class="mySlides">
						    	<div class="numbertext">{{$i}} / 6</div>
						      	<img src="{{asset($image['slug'])}}" style="width:100%">
						  	</div>
						  	<?php $i++; ?>
					  	@endforeach	
				  @endif		 
				  <!-- Next and previous buttons -->
				  <!-- Image text -->
				  <div class="caption-container" style="background: rgba(51, 51, 51, 0.4);">
				    <p id="caption" style="color:#fff;"></p>
				  </div>

				  <!-- Thumbnail images -->
				  <div class="row">
				    <div class="column">
				      @foreach($product->images as $image)
				      	  <img class="demo cursor" src="{{asset($image->slug)}}" style="width:120%" onclick="currentSlide(1)" alt="Hình mô tả 1">
				      @endforeach
				    </div>
				    <?php $i = 2; ?>
				    @if(!empty($imageDetails))
					    @foreach($imageDetails as $image)
					    <div class="column"> 
					      <img class="demo cursor" src="{{asset($image['slug'])}}" style="width:120%" onclick="currentSlide(2)" alt="Hình mô tả {{$i++}}">
					    </div>
					   	@endforeach
					@endif
				  </div>
				  <a class="prev" onclick="plusSlides(-1)" style="background-color: rgba(51, 51, 51, 0.4);text-decoration: none;">&#10094;</a>
				  	<a class="next" onclick="plusSlides(1)" style="background-color: rgba(51, 51, 51, 0.4);text-decoration: none;">&#10095;</a>
			</div>
			<div class="col-lg-5">
					<h3 class="m_3" style="font-size: 25px">{{$product->name}}</h3>
					<div class="price_single">
						  <span class="reducedfrom">{{number_format($product->price)}}₫</span>
						  <span class="actual">{{number_format($product->price - $product->price*$product->sale/100)}}₫</span><span style="font-size: 13px; color: #999">Đã bao gồm VAT(*)</span>
					</div>
					<h3 class="m_9">Sale off: <span style="border-radius: 15px;padding: 5px;background: #FFAF02;color: #fff">{{$product->sale}}%</span></h3>
					<h4 class="m_9" style="margin-top: -15px">Thương hiệu {{$product->brand->name}}</h4>
					<div class="btn_form" style="margin-top: -30px">
						<form >
							@csrf
						<div class="options" style="line-height: 15px">	
							<h4 class="m_9">Chọn một size(*)</h4>
							<div style="padding: 0px 15px 15px 0px;">
								<?php $quantity = 0; ?>
								@foreach ($product->productSizes as $productSize) 
									 	<?php $quantity += $productSize->quantity; ?>	
								@endforeach

								@foreach($product->productSizes as $productSize)
						   			@if($quantity > 0) 				   	
							   			@if($productSize->quantity == 0)
							   				<span class="nav" style="float:left; " style="padding: 0">
											  <li role="presentation" class="disabled" ><a  style="padding: 5px 9px;border: 1px solid #ccc;margin-top:14px;margin-right: 4px">
											  			@foreach($product->sizes as $size)
															@if($productSize->size_id == $size->id) 
																{{$size->name}}	
															@endif
														@endforeach
											  </a></li>
											</span>
							   			@else
							   				<span class="nav" style="float: left;">
							   				<li><label for="{{'custom_radio'.$productSize->id}}" style="margin-right: 4px">
								   				<input type="radio" value="{{$productSize->size_id}}" name=size id="{{'custom_radio'.$productSize->id}}" >
								   				<span style="padding: 5px 9px">
								   					@foreach($product->sizes as $size)
														@if($productSize->size_id == $size->id) 
															{{$size->name}}	
														@endif
													@endforeach
								   				</span>
							   				</label></li></span>
							   			@endif
							   		@else
							   			<span class="nav" style="float:left; " style="padding: 0">
										  <li role="presentation" class="disabled" ><a  style="padding: 5px 9px;border: 1px solid #ccc;margin-top:10px;margin-right: 4px">
										  			@foreach($product->sizes as $size)
														@if($productSize->size_id == $size->id) 
															{{$size->name}}	
														@endif
													@endforeach
										  </a></li>
										</span>
							   		@endif	
									
					   			@endforeach
							</div>
							<div class="clear"></div>
						</div>
								<div style="margin-top: 20px">
									@if($quantity > 0)
									<button class="btn btnaddcart btn-success addCart" style="margin-right: 10px;padding: 10px; border-radius: 0" data-id="{{$product->id}}"><span class="glyphicon glyphicon-shopping-cart" style="margin-right: 10px"></span>THÊM VÀO GIỎ</button>
									<button type="submit"  class="btn btnaddcart btn-info buyNow" style="width: 150px;padding: 10px; border-radius: 0" data-id="{{$product->id}}"><span class="glyphicon glyphicon-ok" style="margin-right: 10px"></span>MUA NGAY</button>
									@else
										<button class="btn btnaddcart btn-success" style="margin-right: 10px;padding: 10px; border-radius: 0" disabled="disabled"><span class="glyphicon glyphicon-shopping-cart" style="margin-right: 10px"></span>TẠM HẾT HÀNG</button>
									@endif
								</div>
								
					 	</form>
					</div>

					<!-- <ul class="add-to-links">
	    			   <li><img src="{{asset('images/wish.png')}}" alt=""/><a href="#">Add to wishlist</a></li>
	    			</ul> -->
	    			<p class="m_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
	    			
	                <div class="social_single">	
					   <ul>	
						  <li class="fb"><a href="https://www.facebook.com/rooneynam91"><span> </span></a></li>
						  <li class="tw"><a href="#"><span> </span></a></li>
						  <li class="g_plus"><a href="https://mail.google.com"><span> </span></a></li>
						  <li class="rss"><a href="https://www.instagram.com/namdangnguyen09/"><span> </span></a></li>		
					   </ul>
				    </div>
				</div>
				<div class="col-lg-2">
					<table class="table tabletag">
							<tr>
								<td colspan="2" style="background:rgba(0,0,0,0.1);">
									<p id="ptag">Sẽ có tại nhà bạn</p>
									<p>từ 1-3 ngày làm việc</p>
								</td>
							</tr>
							<tr>
								<td><br><img src="{{asset('images/giaohang1.png')}}" alt=""></td>
								<td>
									<p><b>Giao hàng nhanh</b>
									<br>Nhận hàng trong ngày ở nội thành</p>
								</td>
							</tr>
							<tr>
								<td><br><img src="{{asset('images/thanhtoan.png')}}" alt=""></td>
								<td>
									<p><b>Thanh toán</b>
									<br>Thanh toán khi nhận hàng trong khu vực nội thành</p>
								</td>
							</tr>
							<tr>
								<td><br><img src="{{asset('images/hotro.png')}}" alt=""></td>
								<td>
									<p><b>Hỗ trợ Online</b>
									<br>0902438246 - 01222980259</p>
								</td>
							</tr>
				
						</table>
					</div>	
			<div class="clear"></div>
     
     	<h3 class="m_3" style="font-size: 23px;margin: 25px 0;">Sản phẩm liên quan</h3>
 		<div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12">
		      <div class="carousel carousel-showmanymoveone slide" id="itemslider">
		        <div class="carousel-inner">
		 			@foreach($products_lienquan as $item)
					<?php $img = App\Image::where('product_id',$item->id)->where('status',1)->first();  
					?>
			          <div class="item active">
			            <div class="col-xs-12 col-sm-6 col-md-2">
			              <a href="{{asset('detail/'.$item->id.'/'.$item->slug.'.html')}}"><img src="{{asset($img->slug)}}" class="img-responsive center-block"></a>
			              	@if($item->sale > 0)
								<span style="border-radius: 50px;padding: 7px 4px;background:#ff6517;color:#fff;font-size: 12px;position: absolute; top: 0px;right: 0;">{{$item->sale}}%</span>
							@endif
			              <h4 class="text-center"><a href="{{asset('detail/'.$item->id.'/'.$item->slug.'.html')}}" style="color: #000">{{$item->name}}</a></h4>
			              <h5 class="text-center">{{number_format($product->price - ($product->price*$product->sale/100))}} ₫</h5>
			            </div>
			          </div>
		 			@endforeach
		        </div>
		<!-- left,right control -->
		        <div id="slider-control">
		        <a class="left carousel-control" href="#itemslider" data-slide="prev"><img src="{{asset('images/arrow_left.png')}}" alt="Left" class="img-responsive"></a>
		        <a class="right carousel-control" href="#itemslider" data-slide="next"><img src="{{asset('images/arrow_right.png')}}" alt="Right" class="img-responsive"></a>
		      </div>
		      </div>
		    </div>
		  </div>
	<script type="text/javascript" src="{{asset('js/jquery.flexisel.js')}}"></script>
	 <div class="toogle">
     	<h3 class="m_3">Mô tả sản phẩm</h3>
     	<p class="m_text">[{{$product->name}}]</p>
     	<p class="m_text">{{$product->description}}</p>
     	<p class="m_text">-----------------------------------------</p>
		<p class="m_text">Hotline: 0902438246 - Dang Nam IT</p>
		<p class="m_text">Add: [ Hòa Hải, Q.Ngũ Hành Sơn, Tp.Đà Nẵng ]</p>
		<p class="m_text">Facebook: Nam Nguyen, VanLinh Dang</p>
		<p class="m_text">Instagram: namdangnguyen09</p>
     </div>					
	 <div class="toogle">
	 	@include('frontend.comment.comment-rating')
      </div>
    <div class="clear"></div>
	 </div>
     </div>
     <script type="text/javascript">
		  $(document).ready(function(){
		 
		$('#itemslider').carousel({ interval: 3000 });
		 
		$('.carousel-showmanymoveone .item').each(function(){
		var itemToClone = $(this);
		 
		for (var i=1;i<6;i++) {
		itemToClone = itemToClone.next();
		 
		if (!itemToClone.length) {
		itemToClone = $(this).siblings(':first');
		}
		 
		itemToClone.children(':first-child').clone()
		.addClass("cloneditem-"+(i))
		.appendTo($(this));
		}
		});
		});
 
  </script>
     <script>
     	var slideIndex = 1;
		showSlides(slideIndex);

		// Next/previous controls
		function plusSlides(n) {
		  showSlides(slideIndex += n);
		}

		// Thumbnail image controls
		function currentSlide(n) {
		  showSlides(slideIndex = n);
		}

		function showSlides(n) {
		  var i;
		  var slides = document.getElementsByClassName("mySlides");
		  var dots = document.getElementsByClassName("demo");
		  var captionText = document.getElementById("caption");
		  if (n > slides.length) {slideIndex = 1}
		  if (n < 1) {slideIndex = slides.length}
		  for (i = 0; i < slides.length; i++) {
		    slides[i].style.display = "none";
		  }
		  for (i = 0; i < dots.length; i++) {
		    dots[i].className = dots[i].className.replace(" active", "");
		  }
		  slides[slideIndex-1].style.display = "block";
		  dots[slideIndex-1].className += " active";
		  captionText.innerHTML = dots[slideIndex-1].alt;
		}

		$(document).ready(function(){
		  //add cart
		  $('.addCart').click(function(event) {
				event.preventDefault();	
				var size = document.getElementsByName("size");
				var product_id =  $(this).attr('data-id');	
				var length = size.length;
				for (var i = 0; i < length; i++){
                    if (size[i].checked === true){
                        //alert(size[i].value);
                        var size_id = size[i].value;
                       	break;
                    }
                }
                //alert(size_id);
                if (typeof  size_id == "undefined") {
					alert('Bạn chưa chọn kích thước!');
				}else{
					$.ajax({
							url: "{{route('add-cart-user')}}",
							type: 'GET',
							data: {						
								product_id:product_id,
								size_id:size_id,
											},
							success: function(data) {
								alert('Thêm giỏ hàng thành công!');
								$("#getCart").html(data);
								//location.reload();
							},
							error: function($error) {
								alert('Thêm vào giỏ hàng fail!');
							}
						})
					}
		});
		  //buy now
		  $('.buyNow').click(function(event) {
				event.preventDefault();	
				var size = document.getElementsByName("size");
				var product_id =  $(this).attr('data-id');	
				var length = size.length;
				for (var i = 0; i < length; i++){
                    if (size[i].checked === true){
                        //alert(size[i].value);
                        var size_id = size[i].value;
                       	break;
                    }
                }
                //alert(size_id);
                if (typeof  size_id == "undefined") {
					alert('Bạn chưa chọn kích thước!');
				}else{
					$.ajax({
							url: "{{route('buy-now-user')}}",
							type: 'GET',
							data: {						
								product_id:product_id,
								size_id:size_id,
											},
							success: function(data) {
								location.assign("{{route('show-checkout-user')}}");
							},
							error: function($error) {
								alert('Lỗi hệ thống!');
							}
						})
					}
		});
	});

</script>	
<script src="{{asset('js/comment-rating.js')}}" ></script>
@endsection    