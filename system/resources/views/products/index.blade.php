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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
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
   @include('template.section.headerweb')
   
		<div class="banner banner-in"></div>

		<div class="card">
			<div class="col-md-6"><br>
					<div class="card-header">
                        Search
                    </div>
                    <div class="card-body">
                        <form action="{{url('products/filter')}}" method="post">
                        @csrf
                        <div class="form-group">   
                            <input type="text" class="form-control" placeholder="Search Produk.." name="nama" >
						</div>
						<button class="btn btn-info "><i class=""></i>Cari</button>
						</form>
					</div>
			</div>
		</div>
	<div class="card">
		<div class="col-md-6 "><br>
        	<div class="card-header">
            	Filter
        	</div>
            <div class="card-body">
                <form action="{{url('products/filter')}}" method="post">
                    @csrf
                    <div class="form-group"> 
                    <input type="text" class="form-control" placeholder="Nama Produk.." name="nama" value="{{$nama ?? ""}}">
                    </div>
					<button class="btn btn-info "><i class=" mdi mdi-filter"></i>Filter</button>
				</form>
			</div>
		</div>
	</div>


	<div class="content">		
		<!---->
		<div class="products">
			<div class="row">
			@foreach($list_produk->sortBy('harga') as $produk)
			<div class="col-md-3"><br>
				<br>
				<div class="men-grid in-men">
				<div class="product">
					<figure class="product-media">
						<a href="{{url('products', $produk->id) }}">
						<img  class="img-responsive" src="{{url("public",$produk->foto)}}"  alt="Ini Gambar Produk"><br>
						</a>
						<div class="produk-action">
							<a href="#" class="btn-product btn-cart"><span>add to cart</span></a><i class="mdi mdi-cart"></i>
						</div>
					</figure>
					<div class="product-body">
						<strong class="product-title"><a href="{{url('products', $produk->id) }}">{!! substr(nl2br ($produk->nama),0,60,) !!}.....</a></strong>
						<div class="product-stok">
							stok :{{ $produk->stok }}
						</div>
						<div class="produk-priece">
							<h4>Rp. {{number_format($produk->harga)}}</h4>
						</div>
						<div class="produk-priece">
							<h4> Seller : {{$produk->seller->username}}</h4>
						</div>
					</div>
				</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
	<hr>
	<hr>

	{{-- links paginate --}}
	<div class="container">
		<div class="pull-left">
			<strong>
				showing
				{{ $list_produk->firstItem()}}
				to
				{{ $list_produk->lastItem()}}
				of
				{{ $list_produk->total()}}
				entries
			</strong>
		</div>
	</div>
	<div class="container">
		<div class="pull-right">
			<strong style="color: rgb(4, 113, 156)" >{{$list_produk->onEachSide(1)->links()}}</strong>	
		</div>
	</div>
	{{-- links paginate end --}}
	
	<hr>
	<hr>
    @include('template.section.footerweb')
</body>
</html>
