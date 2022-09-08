<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>BayyStore</title>
<link href="{{url('public')}}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{url('public')}}/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="{{url('public')}}/css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Trekking Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script type="text/javascript" src="{{url('public')}}/js/move-top.js"></script>
<script type="text/javascript" src="{{url('public')}}/js/easing.js"></script>
				<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
				</script>
<!--//slider-script-->
<script>$(document).ready(function(c) {
	$('.alert-close').on('click', function(c){
		$('.message').fadeOut('slow', function(c){
	  		$('.message').remove();
		});
	});	  
});
</script>
<script>$(document).ready(function(c) {
	$('.alert-close1').on('click', function(c){
		$('.message1').fadeOut('slow', function(c){
	  		$('.message1').remove();
		});
	});	  
});
</script>
</head>
<body>
<!--header-->
	@include('template.section.headerweb')
	
		<div class="banner">
			<div class="container">	
				<h1>Our clothing , your comfort</h1>
				<p> </p>
	<a href="#content" class="scroll down"><img src="{{url('public')}}/images/arr.png" alt=""></a>
			</div>
		</div>
		<div class="content" id="content">
			<div class="content-top">
				<div class="container">
					<div class="content-top-at">
					<div class="content-top-grid">
						<a class="news-letter" href="#">
							<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>MEN</label>
						</a>
						<a class="news-letter" href="#">
							<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>WOMEN</label>
						</a>
						<a class="news-letter" href="#">
							<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>CHILDERN</label>
						</a>
					<div class="clearfix"> </div>
					</div>
				<a  href="{{url("products")}}" class="product-in hvr-shutter-in-horizontal">see all products</a>
				<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<!---->
		<div class="container">
			<div class="content-grid">
				<h3 class="future">Produk Termahal</h3>
					<p class="five">1/5</p>
					<div class="clearfix"> </div>
			<ul id="flexiselDemo1">	
                  @foreach($list_produk->sortByDesc('harga')->take('5') as $produk)  		
			<li>
                <div class="men-grid">
					<a href="{{url('products', $produk->id) }}"><img class="img-responsive" src="{{url("public",$produk->foto)}}" alt=""></a>
						<hr>
							<h5 style="float: left">{!! substr(nl2br ($produk->nama),0,60,) !!}.....</h5>
                            <br>
							<h4 style="color:brown">Rp. {{number_format($produk->harga)}}</h4>
                            <h5>seller : {{$produk->seller->username}}</h5>
							<div class="clearfix"> </div>
						
						<div class="down-top ">
							 <select  class="drop-down">
								<option value="" class="size" value="">SIZE</option>
								<option value="1">Large</option>
								<option value="2">Medium</option>
								<option value="3">Small</option>
							 </select>
					    </div>	
                    </a>
				</div>
            </li>
                @endforeach
						
					
                            <script type="text/javascript">
                $(window).load(function() {
                    $("#flexiselDemo1").flexisel({
                        visibleItems: 3,
                        animationSpeed: 1000,
                        autoPlay: true,
                        autoPlaySpeed: 3000,    		
                        pauseOnHover: true,
                        enableResponsiveBreakpoints: true,
                        responsiveBreakpoints: { 
                            portrait: { 
                                changePoint:480,
                                visibleItems: 1
                            }, 
                            landscape: { 
                                changePoint:640,
                                visibleItems: 2
                            },
                            tablet: { 
                                changePoint:768,
                                visibleItems: 2
                            }
                        }
                    });
                    
                });
            </script>
                            <script type="text/javascript">
                $(window).load(function() {
                    $("#flexiselDemo2").flexisel({
                        visibleItems: 3,
                        animationSpeed: 1000,
                        autoPlay: true,
                        autoPlaySpeed: 3000,    		
                        pauseOnHover: true,
                        enableResponsiveBreakpoints: true,
                        responsiveBreakpoints: { 
                            portrait: { 
                                changePoint:480,
                                visibleItems: 1
                            }, 
                            landscape: { 
                                changePoint:640,
                                visibleItems: 2
                            },
                            tablet: { 
                                changePoint:768,
                                visibleItems: 2
                            }
                        }
                    });
                    
                });
                    </script>
                    <script type="text/javascript" src="{{url('public')}}/js/jquery.flexisel.js"></script>
			</div>
		</div>
		<!---->
		<div class="about-us">
			<div class="container">
			<h2>about us</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudexercitation</p>
			<i class="round"> </i>
			</div>
		</div>
	</div>
		<!---->
		@include('template.section.footerweb')
</body>
</html>
