<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
	<style>
		/*
    Image credits:
    uifaces.com (http://uifaces.com/authorized)
*/

		#login { display: none; }
		.login,
		.logout {
			position: absolute;
			top: -3px;
			right: 0;
		}
		.page-header { position: relative; }
		.reviews {
			color: #555;
			font-weight: bold;
			margin: 10px auto 20px;
		}
		.notes {
			color: #999;
			font-size: 12px;
		}
		.media .media-object { max-width: 120px; }
		.media-body { position: relative; }
		.media-date {
			position: absolute;
			right: 25px;
			top: 25px;
		}
		.media-date li { padding: 0; }
		.media-date li:first-child:before { content: ''; }
		.media-date li:before {
			content: '.';
			margin-left: -2px;
			margin-right: 2px;
		}
		.media-comment { margin-bottom: 20px; }
		.media-replied { margin: 0 0 20px 50px; }
		.media-replied .media-heading { padding-left: 6px; }

		.btn-circle {
			font-weight: bold;
			font-size: 12px;
			padding: 6px 15px;
			border-radius: 20px;
		}
		.btn-circle span { padding-right: 6px; }
		.embed-responsive { margin-bottom: 20px; }
		.tab-content {
			padding: 50px 15px;
			border: 1px solid #ddd;
			border-top: 0;
			border-bottom-right-radius: 4px;
			border-bottom-left-radius: 4px;
		}
		.custom-input-file {
			overflow: hidden;
			position: relative;
			width: 120px;
			height: 120px;
			background: #eee url('https://s3.amazonaws.com/uifaces/faces/twitter/walterstephanie/128.jpg');
			background-size: 120px;
			border-radius: 120px;
		}
		input[type="file"]{
			z-index: 999;
			line-height: 0;
			font-size: 0;
			position: absolute;
			opacity: 0;
			filter: alpha(opacity = 0);-ms-filter: "alpha(opacity=0)";
			margin: 0;
			padding:0;
			left:0;
		}
		.uploadPhoto {
			position: absolute;
			top: 25%;
			left: 25%;
			display: none;
			width: 50%;
			height: 50%;
			color: #fff;
			text-align: center;
			line-height: 60px;
			text-transform: uppercase;
			background-color: rgba(0,0,0,.3);
			border-radius: 50px;
			cursor: pointer;
		}
		.custom-input-file:hover .uploadPhoto { display: block; }
	</style>
<title>paperفا</title><!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css')}}">
	<script href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js')}}"></script>
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
     <script src="{{asset('js/okzoom.js')}}"></script>
      <script>
        $(function(){
          $('#example').okzoom({
            width: 150,
            height: 150,
            border: "1px solid black",
            shadow: "0 0 5px #000"
          });
        });
      </script>
    <link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
</head>
	
<body style="background-color:#f5f5f5">
    <!-- header -->
	@include('includes.navbar')
    <!-- banner -->
	<form class="dropzone" action="post">
		{{csrf_field()}}
	</form>
    <div class="banner" style="background-color:#f5f5f5">
		<div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
			<div class="row">
			<nav class="navbar nav_bottom">
				<div class="container">
					<div class=" w3l_fresh_vegetables_grid w3l_fresh_vegetables_grid_right">
						<div class="w3l_fresh_vegetables_grid2 " style="background-color:#f5f5f5">
							@include('includes.cat-list')
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</nav>
			</div>
			<br><hr>
			<div class="row" style="padding-right: 20px">
				<img src="/images/ad.png">
			</div>
		</div>
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
			{{--product details----------------------------------}}
            <div class="agileinfo_single">
                <h5>{{$current_article->fa_name}}</h5>
                <div class="col-md-4 agileinfo_single_right">
					{{--{{asset("/articles/".$cat."/".$art->eng_name."/".$art->eng_name.".jpg")}}--}}
                    <img id="example" src="{{asset("/articles/".$current_article->cat_name."/".$current_article->logo)}}" alt=" " class="img-responsive" style="height: 200px;width: 200px"/>
                </div>
                <div class="col-md-8 agileinfo_single_left">

                    <div class="w3agile_description">
						<table class="table">
							<tbody>
							<tr>
								<th>نام</th>
								<td>{{$current_article->fa_name}}</td>
							</tr>
							<tr>
								<th>نویسنده</th>
								<td>{{$current_article->author}}</td>
							</tr>
							<tr>
								<th>دسته</th>
								<td>{{$cat_name}}</td>
							</tr>
							<tr>
								<th>قیمت</th>
							<td><label class="label-warning">{{$current_article->price}} هزار تومان </label></td>
							</tr>
							</tbody>
						</table>


                    </div>
                    <div class="snipcart-item block">
						<div class="snipcart-details">
							<a class="btn btn-danger my-cart-btn hvr-sweep-to-left" href="{{route('Article.addToCard',['id'=>$current_article->id])}}" data-id="5" data-name="Knorr instant soup" data-summary="summary 5" data-price="3.00" data-quantity="1" data-image="images/5.png">افزودن به سبد</a>
						</div>
                    </div>

                </div>

                <div class="clearfix"> </div>
            </div>
			{{--product details----------------------------------}}


			{{--begin of Comment code-----------------------------}}
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1" id="logout">
					<div class="page-header">
						<h2>نظرات</h2>
					</div>
					<div class="comment-tabs">
						<ul class="nav nav-tabs" role="tablist">
							<li class="active"><a href="#comments-logout" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">نظرات</h4></a></li>
							<li><a href="#add-comment" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">اضافه کردن نظر</h4></a></li>
						</ul>

						<div class="tab-content">
							@foreach($current_article->comments as $comment)
							<div class="tab-pane active" id="comments-logout">
								<ul class="media-list">
									<li class="media">
										<a class="pull-right">
											<img class="media-object img-circle" src="/images/avatars/{{$comment->user->avatar}}" alt="profile">
										</a>
										<div class="media-body">
											<div class="well well-lg">
												<h4 class="media-heading text-uppercase reviews">{{$comment->user->name}} </h4>

												<a class="pull-left">{{$comment->created_at}}</a>
												<hr>

												<p class="media-comment">
													{{$comment->body}}
												</p>
											</div>
										</div>

									</li>
								</ul>
							</div>
							@endforeach

								<div class="tab-pane" id="add-comment">
									@if(\Auth::check())
										<form action="/comment/{{$current_article->id}}/store" method="post" class="form-horizontal" id="commentForm" role="form">
											<input type="hidden" name="_token" value="{{ csrf_token() }}">
											<div class="form-group">
												<div class="col-sm-10">
													<textarea class="form-control" name="body" id="addComment" rows="5" placeholder="کامنت را بنویسید"></textarea>
												</div>
											</div>


											<div class="form-group">
												<div class="col-sm-offset-2 col-sm-10">
													<button class="btn btn-success btn-circle text-uppercase" type="submit" id="submitComment"><span class="glyphicon glyphicon-send"></span> اضافه کردن نظر</button>
												</div>
											</div>
										</form>

									@else
										<h3>برای ثبت نظر به حساب کاربری خود وارد شوید</h3>

									@endif
								</div>
						</div>

					</div>
				</div>
			</div>
			{{--end of comment code-------------------------------}}

        </div>
        <div class="clearfix"></div>
    </div>
<!-- //banner -->
<!-- brands -->





	<div class="w3ls_w3l_banner_nav_left_grid w3ls_w3l_banner_nav_left_grid_popular">
		<div class="container">
			<h3>مقالات مشابه</h3>
				<div class="w3ls_w3l_banner_nav_left_grid1">
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2">
						@foreach($sim_arts as $sim_art)
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<div class="agile_top_brand_right_grid1">
									<figure>
										<div class="snipcart-item block">
											<a href="/{{$sim_art->supercat_name}}/{{$sim_art->cat_name}}/{{$sim_art->id}}">
												<div class="snipcart-thumb">

													<img src="{{asset("/articles/".$sim_art->cat_name."/".$sim_art->logo)}}" style="height: 140px;width: 140px">

													<p>{{$sim_art->fa_name}}</p>
													<p>{{$sim_art->cat_name}}</p>
													<p>{{$sim_art->author}}</p>
													<h4><label class="label-warning"> {{$sim_art->price}} هزار تومان </label></h4>
												</div>
											</a>
										</div>
									</figure>
								</div>
								<div class="snipcart-details">
									<a class="btn btn-danger my-cart-btn hvr-sweep-to-left" href="{{route('Article.addToCard',['id'=>$sim_art->id])}}" data-id="5" data-name="Knorr instant soup" data-summary="summary 5" data-price="3.00" data-quantity="1" data-image="images/5.png">افزودن به سبد</a>
								</div>
							</div>
						@endforeach
					</div>

					<div class="clearfix"> </div>
				</div>
		</div>
	</div>
<!-- //brands -->

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
<script type="text/javascript" id="snipcart" src="{{asset('js/snipcart.js')}}" data-api-key="ZGQxNzVjZTItOWRmNS00YjJhLTlmNGUtMDE4NjdiY2RmZGNj"></script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
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
