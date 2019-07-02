<!DOCTYPE HTML>
<html>
<head>
<title>MV Shoes | @yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/style2.css')}}">
<link rel="stylesheet" href="{{asset('css/style10.css')}}">
<link rel="stylesheet" href="{{asset('css/product.css')}}">
<link href="{{asset('css/form.css')}}" rel="stylesheet">
<link href="{{asset('css/simple-rating.css')}}" rel="stylesheet"> <!-- rating style css -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('css/detail1.css')}}">
<link rel="stylesheet" href="{{asset('css/etalage.css')}}">
<link rel="stylesheet" type="text/css"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('css/bootstrap-theme.min.css')}}">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");
            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }
            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });
            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
     </script>
<!-- start menu -->     
<link href="{{asset('css/megamenu1.css')}}" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="{{asset('js/megamenu.js')}}"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!-- end menu -->
<!----details-product-slider--->
				<!-- Include the Etalage files -->
					<link rel="stylesheet" href="{{asset('css/etalage.css')}}">
				<!-- Include the Etalage files -->
				<!----//details-product-slider--->	
<!-- top scrolling -->
<script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
   <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
<style> /* style comment */
	@import url(//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css);
.detailBox {
    width:320px;
    border:1px solid #bbb;
    margin:50px;
}
.titleBox {
    background-color:#fdfdfd;
    padding:10px;
}
.titleBox label{
  color:#444;
  margin:0;
  display:inline-block;
}
.commentBox {
    padding:10px;
    border-top:1px dotted #bbb;
}
.commentBox .form-group:first-child, .actionBox .form-group:first-child {
    width:80%;
}
.commentBox .form-group:nth-child(2), .actionBox .form-group:nth-child(2) {
    width:18%;
}
.actionBox .form-group * {
    width:100%;
}
.taskDescription {
    margin-top:10px 0;
}
.commentList {
    padding:0;
    list-style:none;
    max-height:200px;
    overflow:auto;
}
.commentList li {
    margin:0;
    margin-top:10px;
}
.commentList li > div {
    display:table-cell;
}
.commenterImage {
    width:30px;
    margin-right:5px;
    height:100%;
    float:left;
}
.commenterImage img {
    width:100%;
    border-radius:50%;
}
.commentText p {
    margin:0;
}
.sub-text {
    color:#aaa;
    font-family:verdana;
    font-size:11px;
}
.actionBox {
    border-top:1px dotted #bbb;
    padding:10px;
}
/* aaa */
* {box-sizing: border-box;}
.img-zoom-container {
  position: relative;
}
.img-zoom-lens {
  position: absolute;
  border: 1px solid #d4d4d4;
  /*set the size of the lens:*/
  width: 80px;
  height: 80px;
}
.img-zoom-result {
  border: 1px solid #d4d4d4;
  /*set the size of the result div:*/
  width: 250px;
  height: 250px;
}
.img2{
	display:none;
}
</style>
</head>
<body>
	<div class="header-top">
	<div class="container-fluid navmenu">	
			<div class="container ">
					<ul class="nav navbar-nav" style="height: 40px;">
						<li><a href="{{ route('home-user')}}" id="logohover"><img src="{{asset('images/logo2.png')}}" class="logo" style="width: 218px;"></a></li>
						<!-- <li class="li1"><a href="#">Hỗ trợ: 0356796738 - DucManhIT</a></li> -->
					</ul>
					
					<ul class="nav navbar-nav navbar-right ulnav" style="margin-top: 20px;">
						<li>
							<form class="navbar-form navbar-left" role="search" action="{{route('search-user')}}" method="GET">
								@csrf
								<div class="form-group">
									<input name="search" type="text" class="form-control" placeholder="Tìm kiếm..." style="width: 100%; margin-right: 150px;">
								</div>
							</form>
						</li>
						@if(Auth::check())
							<li><a><span>Xin Chào!</span><span style='color:#4CAF50; font-weight:bold; font-size:17px;'>{{ Auth::user()->name }}</span></a></li>
							<li><a href='{{route('logout')}}'><span style="color: #000">ĐăngXuất</span></a></li>
						@else
							<li><a href="{{route('login')}}"><span class="glyphicon glyphicon-user" style="font-size: 20px; color: #000;"></span></a></li>
						@endif
						<li>
							<ul class="icon2 sub-icon2 profile_img"  id="getCart">
								<li><a class="active-icon" href="{{route('shoppingCart-user')}}"  style="margin-top: 1%;color: #000;font-size: 25px;position: relative;">
									<i class="fas fa-shopping-cart" style="margin-top: 9px"></i><span style="border-radius: 50px;padding: 1px 5px;background:#ff6517;color:#fff;font-size: 15px;position: absolute; top: 0px; right:-7px;font-size: 13px">{{Cart::getTotalQuantity()}}</span>
								 </a>
									<ul class="sub-icon2 list">
										<li>
											<div class="row" style="margin-bottom: 20px">
												@foreach(Cart::getContent() as $item)
													<?php $size = App\Size::select('name')->where('id',$item->attributes->size_id)->first(); 
													?>
													<div class="row" style="padding: 10px">
														<div class="col-lg-4">
														<img src="{{asset($item->attributes->image)}}" alt="" style="width: 80px">
														</div>
														<div class="col-lg-8" style="padding-right: 20px;line-height: 15px">
															<span style="font-size: 12px;">{{$item->name}}</span>
															<div class="col-lg-5">
																<br><span>x{{$item->quantity}} </span><span style="background: url(//theme.hstatic.net/1000243581/1000361905/14/bg-variant-checked.png?v=131) no-repeat right bottom #fff; padding:3px 5px; border: 1px solid #ccc;">{{$size->name}}</span> 
															</div>
															<div class="col-lg-7" style="line-height: 10px">
																<br><span style="font-size: 12px;color:#ed4e4e;">{{ number_format($item->price*$item->quantity,0)}} ₫</span>
																<a href="{{route('delete-cart-user',$item->id)}}" class="glyphicon glyphicon-remove" style="color:red;text-decoration:none;"></a>

																<!-- <button class="glyphicon glyphicon-remove deleteCart" data-idcart="{{$item->id}}"  style="color:red;text-decoration:none;border: none;background: #fff;"></button> -->
															</div>
														</div>
													</div>
												@endforeach
											<div class="row" style="text-align: left;">
												<span style="margin-left: 40px;margin-top: 20px">Tổng tiền:  <span style="font-size: 15px;color: #ed4e4e;margin-left: 40px" >{{number_format(Cart::getTotal())}} ₫</span></span>
											</div>
											</div>
											
											<div class="row" style="margin-top: 10px">
												<a href="{{route('shoppingCart-user')}}" style="color: #fff;background: #000;text-decoration: none;padding: 7px 20px;margin-right: 10px;border-radius: 0">XEM GIỎ HÀNG</a>
												@if(Cart::getTotal() > 0)
												<a href="{{route('show-checkout-user')}}" style="color: #fff;background: #f72b3f;text-decoration: none;padding: 7px 20px;border-radius: 0">THANH TOÁN</a>
												@else
												<a href="{{route('shoppingCart-user')}}" style="color: #fff;background: #f72b3f;text-decoration: none;padding: 7px 20px;border-radius: 0">THANH TOÁN</a>
												@endif
											</div>
										</li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
		</div>	
  	</div>
	
   <div class="header-bottom"  id="menuTop">
   	<div class="wrap">
   		<!-- start header menu -->
		<ul class="megamenu skyblue"  style="background-color: #000">
		    <li><a class="color1" href="{{route('home-user')}}">Home</a></li>
		    @foreach($categories as $category)
				<li class="grid"><a class="color2" href="{{asset('san-pham/'.$category->id.'/'.$category->name)}}">{{$category->name}}</a>
					<div class="megapanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<h4>popular</h4>
									<ul>
										<li><a href="shop.html">new arrivals</a></li>
										<li><a href="shop.html">men</a></li>
										<li><a href="shop.html">women</a></li>
										<li><a href="shop.html">accessories</a></li>
										<li><a href="shop.html">kids</a></li>
										<li><a href="shop.html">login</a></li>
									</ul>	
								</div>
								<div class="h_nav">
									<h4 class="top">men</h4>
									<ul>
										<li><a href="shop.html">new arrivals</a></li>
										<li><a href="shop.html">men</a></li>
										<li><a href="shop.html">women</a></li>
										<li><a href="shop.html">accessories</a></li>
										<li><a href="shop.html">kids</a></li>
										<li><a href="shop.html">style videos</a></li>
									</ul>	
								</div>
							</div>
							<div class="col1"></div>
							<div class="col1"></div>
							<div class="col1"></div>
							<div class="col1"></div>
							<img src="images/nav_img.jpg" alt=""/>
						</div>
					</div>
					</li>
				@endforeach
  			  <!--  <li class="active grid"><a class="color4" href="#">Women</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>shop</h4>
								<ul>
									<li><a href="shop.html">new arrivals</a></li>
									<li><a href="shop.html">men</a></li>
									<li><a href="shop.html">women</a></li>
									<li><a href="shop.html">accessories</a></li>
									<li><a href="shop.html">kids</a></li>
									<li><a href="shop.html">brands</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>help</h4>
								<ul>
									<li><a href="shop.html">trends</a></li>
									<li><a href="shop.html">sale</a></li>
									<li><a href="shop.html">style videos</a></li>
									<li><a href="shop.html">accessories</a></li>
									<li><a href="shop.html">kids</a></li>
									<li><a href="shop.html">style videos</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>my company</h4>
								<ul>
									<li><a href="shop.html">trends</a></li>
									<li><a href="shop.html">sale</a></li>
									<li><a href="shop.html">style videos</a></li>
									<li><a href="shop.html">accessories</a></li>
									<li><a href="shop.html">kids</a></li>
									<li><a href="shop.html">style videos</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="shop.html">login</a></li>
									<li><a href="shop.html">create an account</a></li>
									<li><a href="shop.html">create wishlist</a></li>
									<li><a href="shop.html">my shopping bag</a></li>
									<li><a href="shop.html">brands</a></li>
									<li><a href="shop.html">create wishlist</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>popular</h4>
								<ul>
									<li><a href="shop.html">new arrivals</a></li>
									<li><a href="shop.html">men</a></li>
									<li><a href="shop.html">women</a></li>
									<li><a href="shop.html">accessories</a></li>
									<li><a href="shop.html">kids</a></li>
									<li><a href="shop.html">style videos</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
						 <div class="h_nav">
						   <img src="images/nav_img1.jpg" alt=""/>
						 </div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
					</div>
    			</li>				
				<li><a class="color5" href="#">Kids</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>popular</h4>
								<ul>
									<li><a href="shop.html">new arrivals</a></li>
									<li><a href="shop.html">men</a></li>
									<li><a href="shop.html">women</a></li>
									<li><a href="shop.html">accessories</a></li>
									<li><a href="shop.html">kids</a></li>
									<li><a href="shop.html">login</a></li>
								</ul>	
							</div>
							<div class="h_nav">
								<h4 class="top">man</h4>
								<ul>
									<li><a href="shop.html">new arrivals</a></li>
									<li><a href="shop.html">men</a></li>
									<li><a href="shop.html">women</a></li>
									<li><a href="shop.html">accessories</a></li>
									<li><a href="shop.html">kids</a></li>
									<li><a href="shop.html">style videos</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>style zone</h4>
								<ul>
									<li><a href="shop.html">men</a></li>
									<li><a href="shop.html">women</a></li>
									<li><a href="shop.html">accessories</a></li>
									<li><a href="shop.html">kids</a></li>
									<li><a href="shop.html">brands</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<img src="images/nav_img2.jpg" alt=""/>
					</div>
				</div>
				</li> -->
				<li><a class="color8" href="{{route('list-all-product')}}">Shop</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>style zone</h4>
								<ul>
									<li><a href="shop.html">men</a></li>
									<li><a href="shop.html">women</a></li>
									<li><a href="shop.html">accessories</a></li>
									<li><a href="shop.html">kids</a></li>
									<li><a href="shop.html">brands</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>popular</h4>
								<ul>
									<li><a href="shop.html">new arrivals</a></li>
									<li><a href="shop.html">men</a></li>
									<li><a href="shop.html">kids</a></li>
									<li><a href="shop.html">accessories</a></li>
									<li><a href="shop.html">login</a></li>
								</ul>	
							</div>
							<div class="h_nav">
								<h4 class="top">man</h4>
								<ul>
									<li><a href="shop.html">new arrivals</a></li>
									<li><a href="shop.html">accessories</a></li>
									<li><a href="shop.html">kids</a></li>
									<li><a href="shop.html">style videos</a></li>
								</ul>	
							</div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
				</div>
				</li>
				<li><a class="color10" href="#">Infomation</a></li>
				<li><a class="color11" href="#">Contact</a></li>

		   </ul>
		   <div class="clear"></div>
     	</div>
       </div>
   </div>
  
       @yield('content')
       	<div class="container-fluid divfooter" >	
		<div class="container divfooter">
			<div class="col-sm-3">
				<h4 class="textbot">LIÊN HỆ</h4>
				<p class="textbot1">86 Lê Thiện Trị, Phường Hòa Hải, Quận Ngũ Hành Sơn, Tp. Đà Nẵng</p>
				<p class="textbot1">Phone: 0356796738 - DucManhIT</p>
				<p class="textbot1">Email: leducmanh101198@gmail.com</p>
			</div>
			<div class="col-sm-3">
				<h4 class="textbot">CHÍNH SÁCH HỖ TRỢ</h4>
				<p><a href="index.php">Trang chủ</a></p>
				<p><a href="@">Sản phẩm</a></p>
				<p><a href="@">Giới thiệu</a></p>
				<p><a href="@">Bảng Size Giày</a></p>
				<p><a href="@">Hướng dẫn đặt hàng</a></p>
				<p style="color: #fff;">Design by Lê Đức Mạnh IT 2018</p>
			</div>
			<div class="col-sm-3">
				<h4 class="textbot">LIÊN KẾT</h4>
				<p class="textbot1">Hãy kết nối với chúng tôi.</p>
			</div>
			<div class="col-sm-3">
				<h4 class="textbot">ĐĂNG KÝ NHẬN THÔNG TIN</h4>
				<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F%25C4%2590%25E1%25BB%25A9c-M%25E1%25BA%25A1nh-It-Shoes-499971113855110%2F%3Fmodal%3Dadmin_todo_tour&tabs=timeline&width=340&height=260px&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="260px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
			</div>
		</div>
		
	</div>
	<!-- end footer -->
	<script type="text/javascript">
		jQuery(document).ready(function($){
			//lay vị trí hiện tại của menu cách top x px
			pos = $("#menuTop").position();
			$(window).scroll(function(){
				var possScroll = $(document).scrollTop();
				if (parseInt(possScroll) > parseInt(pos.top)) {
					$("#menuTop").addClass('navbar-fixed-top');
				}else{
					$("#menuTop").removeClass('navbar-fixed-top');
				}
			});
		});
	</script>
	<script>
	$(document).ready(function(){
		$('.deleteCart').click(function(event) {
				//event.preventDefault();	
				var cart_id =  $(this).attr('data-idcart');	
                //alert(cart_id);
               
				$.ajax({
						url: '{{route('deleteAjax-cart-user')}}',
						type: 'GET',
						data: {						
							cart_id:cart_id,
										},
						success: function(data) { 
							$("#getCart").html(data);
							//location.reload();
						},
						error: function($error) {
							alert('Thao tác fail!');
						}
					})
		});		
	});
</script>
	<script src="{{asset('js/simple-rating.js')}}"></script>
</body>
</html>