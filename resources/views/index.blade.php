<!DOCTYPE html>
<html>
<head>
	<title>paperفا</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //for-mobile-apps -->
	<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome icons -->
	<link href="{{asset('css/font-awesome.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- //font-awesome icons -->
	<!-- js -->
	<script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
	<!-- //js -->
	<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/easing.js')}}"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}">



    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
</head>

<body style="background-color:#f5f5f5">
@include('includes.navbar')

<!-- banner -->

<div class="banner" style="background-color: #f5f5f5">

	<div class="col-lg-8 col-md-10 col-sm-12 col-lg-offset-2 col-md-offset-1">
		<br><br>
		<section class="slider">
			<div class="flexslider" dir=ltr>
				<ul class="slides">
					<li><div class="w3l_banner_nav_left_banner"></div></li>
					<li><div class="w3l_banner_nav_left_banner1"></div></li>
					<li><div class="w3l_banner_nav_left_banner2"></div></li>
				</ul>
			</div>
		</section>
		<!-- flexSlider -->
		<link rel="stylesheet" href="{{asset('css/flexslider.css')}}" type="text/css" media="screen" property="" />
		<script defer src="{{asset('js/jquery.flexslider.js')}}"></script>
		<script type="text/javascript">
            $(window).load(function(){
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function(slider){
                        $('body').removeClass('loading');
                    }
                });
            });
		</script>
		<!-- //flexSlider -->
	</div>
	<div class="clearfix"></div>
</div>
<!-- banner -->

<div class="row" style="background-color: #f5f5f5">
	<hr>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-md-offset-3 col-lg-offset-3">
        <div class="panel panel-info">
            <div class="panel-heading panel-success ">
                جستجوی مقاله
            </div>
            <div class="panel-body">
                <form action="{{URL::to('/search')}}" method="post" role="search" >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" placeholder="جستجو">
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-primary">
                                <span class="fa fa-search"></span>
                            </button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- fresh-vegetables -->
<div class="fresh-vegetables" style="background-color: #f5f5f5">

	<div class="">

		<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1">
			<div class="w3ls_w3l_banner_nav_left_grid">
				<div class="w3ls_w3l_banner_nav_left_grid1">
					@foreach($supercats as $supercat)
						<a href="/{{$supercat->eng_name}}">
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<div class="hover14 column">
									<div class="agile_top_brand_right_grid w3l_agile_top_brand_right_grid">
										<div class="agile_top_brand_right_grid1">
											<figure>
												<div class="snipcart-item block">
													<div class="snipcart-thumb">
														<img src="/images/supercat/logo/{{$supercat->eng_name}}.png" alt=" " class="img-responsive" style="height: 140px;width: 140px"/>
													</div>
												<div class="snipcart-details">
												<button class="btn btn-danger my-cart-btn hvr-sweep-to-left" data-id="5" data-name="Knorr instant soup" data-summary="summary 5" data-price="3.00" data-quantity="1" data-image="images/5.png">{{$supercat->fa_name}}</button>
												</div>
												</div>
											</figure>
										</div>
									</div>
								</div>
							</div>
						</a>
					@endforeach
					<div class="clearfix"> </div>
				</div>

			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!--</div>-->
</div>
<!-- //fresh-vegetables -->

<!-- footer -->
@include('includes.footer')
<!-- //footer -->

<!-- Bootstrap Core JavaScript -->

<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $(".dropdown").hover(
            function() {
                $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
                $(this).toggleClass('open');
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
</script>
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        $().UItoTop({ easingType: 'easeOutQuart' });
    });
</script>
<!-- //here ends scrolling icon -->

<script type='text/javascript' src="{{asset('js/jquery.mycart.js')}}"></script>
<script type="text/javascript">
    $(function () {

        var goToCartIcon = function($addTocartBtn){
            var $cartIcon = $(".my-cart-icon");
            var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
            $addTocartBtn.prepend($image);
            var position = $cartIcon.position();
            $image.animate({

            }, 500 , "linear", function() {
                $image.remove();
            });
        }

        $('.my-cart-btn').myCart({
            classCartIcon: 'my-cart-icon',
            classCartBadge: 'my-cart-badge',
            affixCartIcon: true,
            checkoutCart: function(products) {
                $.each(products, function(){
                    console.log(this);
                });
            },
            clickOnAddToCart: function($addTocart){
                goToCartIcon($addTocart);
            },
            getDiscountPrice: function(products) {
                var total = 0;
                $.each(products, function(){
                    total += this.quantity * this.price;
                });
                return total * 1;
            }
        });

    });

</script>

</body>

</html>
